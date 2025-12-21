---
title: Setting up my server with Gitolite, cgit and Nginx
date: 2024-02-15
---

This weekend I reinstalled my server. It's a cheap VPS that I'm using to host a bunch of services for myself. I'm sharing it with a few friends, and my girlfriend uses it to host her website.

This post is both a guide to setting up a system like this, and a reference for future me, for when I'm inevitably gonna reinstall the system.

## Preperations

I started off by creating a user account for myself and installing some basic utils:

```shell
# pkg install doas nvim bash curl wget
# pw useradd axcelott
```

After I created my own user and granted it root privileges, I turned off root login over SSH in `/etc/ssh/sshd_config`:

```ssh
PermitRootLogin no
```

## Gitolite

I wanted a simple git server with a bare-bones and easily customizable web panel and powerful permission management for repos. For that, I chose to use Gitolite in combination with cgit.

First off, install the dependencies:

```shell
# pkg install git gitolite
```

Create a `git` user:

```shell
# pw useradd git -d /var/git
# mkdir /var/git
# chown -R git:git /var/git
```

Gitolite identifies users by their SSH key. To install the server, you need to copy over your SSH public key for the initial admin user. In my case I created a file called `axcelott.pub`:

```shell
# su - git
$ mkdir .ssh
$ chmod 700 .ssh
$ echo "ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIKb4ntyobJbcQE7YeyEX0Mi4QPs3QKatYsQ853pVwU6w robindev2019@outlook.com" > .ssh/axcelott.pub
```

Then install gitolite using this command:

```shell
$ gitolite setup -pk .ssh/axcelott.pub
```

This will create two new repos called `gitolite-admin.git` and `testing.git`. The admin repo will be used to store SSH public keys for users and a configuration file containing a list of repos and rules defining which users can access them.

But before we continue, we need to change a few things in `.gitolite.rc`:

- Change `UMASK => 0077` to `UMASK => 0027`
- Change `GIT_CONFIG_KEYS => ""` to `GIT_CONFIG_KEYS => ".*"`

These changes are needed to make cgit work smoothly later.

Now, clone the `gitolite-admin.git` repo locally:

```shell
$ git clone git@gitserver:gitolite-admin.git
$ cd gitolite-admin
$ ls
conf keydir
```

The `conf` directory should include a single file: `gitolite.conf`. This file contains a list of all repos and who's allowed to read and write them.

It should look something like this:

```gitolite
repo gitolite-admin
    RW+     =   charlie

repo testing
    RW+     =   @all
```

To change the config, simply edit the file and then commit and push your changes. Change it to your liking. On `du11`, this was the final config:

```gitolite
@admins = axcelott
@users = @admins msb
@public = gitweb daemon

# Admin
repo gitolite-admin
    RW+      =   @admins

# {du}punkto projects
repo sites/dupunkto.org
    category =   sites
    RW+      =   @users
    R        =   @all

repo oblikvo
    RW+      =   @users
    R        =   @all

repo somtomorrow
    RW+      =   @users
    R        =   @all

repo tools
    RW+      =   @users
    R        =   @all

repo wiki
    RW+      =   @users
    R        =   @all

# Public namespaces
repo forks/..*
    category =   forks
    C        =   @users
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

# Personal namespaces
repo CREATOR/..*
    category =   personal
    C        =   @users
    RW+      =   CREATOR
    RW       =   WRITERS
    R        =   @all

# Project namespaces
# (operated by a single user)
repo grape-lang/..*
    category =   grape-lang
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo neopub/..*
    category =   neopub
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo epique/..*
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo nindo/..*
    category =   nindo
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo unlibrary/..*
    category =   unlibrary
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo skylight/..*
    category =   skylight
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

# Private namespaces
repo sites/..*
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo meta/..*
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS

repo legacy/..*
    category =   legacy
    C        =   axcelott
    RW+      =   CREATOR
    -        =   @public
    R        =   READERS
```

Similarly, you can add users by putting their SSH public key in the `keydir` folder and pushing the changes. In my case, I added `msb.pub` (since `axcelott.pub` was already present from installing).

### Importing repositories

Importing repositories in Gitolite is very simple. Simply copy the repositories into the `/var/git/repositories` folder. Then run the following commands:

```shell
# chown -R git:git /var/git/repositories
# chmod -R g+rX /var/git/repositories
```

And then (as the `git` user):

```shell
$ gitolite compile
$ gitolite setup --hooks-only
$ gitolite trigger POST_COMPILE
```

For wild repos, you need to run this command to assign the correct owner:

```shell
$ printf "axcelott" > /var/git/repositories/some/repo.git/gl-creator
```

And finally, add the remaining repos to your `gitolite.conf` and push your changes.

## cgit

For the web control panel, I chose cgit. It's simple, fast, easily themeable and it's easy to setup. cgit is a CGI application, so we'll need a webserver too. I went with Nginx -- not because I like it, but because Apache sucks and Caddy is a hassle to setup.

First, install the dependencies:

```shell
# pkg install cgit fcgiwrap nginx py39-docutils py39-markdown py39-pygments python3 python39
```

`fcgiwrap` is a little tool to make cgit, which is a CGI application, work with the FastCGI protocol that Nginx uses. I'm not good at explaining this stuff, so I'll just quote it instead:

> Cgit, which uses code from Git, was designed to let users run a command (eg: `git push`) then exit, allowing our computers to reclaim the used resources between each call. Nginx uses a faster protocol ([FastCGI](//en.wikipedia.org/wiki/FastCGI)) which calls the same program multiple times without exiting.
>
> However because Cgit was designed to exit after every run, it will never give back its used resources and will continue to take more, quickly exhausting all of the computer's available resources. This is why we need `fcgiwrap`.

To make it work, append the following to your `/etc/rc.conf`:

```conf
nginx_enable="YES"
fcgiwrap_enable="YES"
fcgiwrap_flags="-f"
fcgiwrap_user="www"
fcgiwrap_group="www"
fcgiwrap_socket_owner="www"
fcgiwrap_socket_group="www"
```

Next, add a `server`-block to the Nginx config (`/usr/local/etc/nginx/nginx.conf`), and you're almost done:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name git.dupunkto.org;

    charset utf-8;

    add_header Referrer-Policy "no-referrer";
    add_header X-Content-Type-Options "nosniff";
    add_header X-Frame-Options "deny";
    add_header Cross-Origin-Opener-Policy "same-origin";
    add_header Strict-Transport-Security "max-age=31536000";

    root /usr/local/www/cgit;
    try_files $uri @cgit;

    location @cgit {
        client_max_body_size 0;

        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME /usr/local/www/cgit/cgit.cgi;
        fastcgi_param PATH_INFO $uri;
        fastcgi_param QUERY_STRING $args;
        fastcgi_param HTTP_HOST $server_name;
        fastcgi_pass unix:/var/run/fcgiwrap/fcgiwrap.sock;
        fastcgi_read_timeout 300;
    }

    error_page 500 502 503 504 /50x.html;
    location = /50x.html {
        root /usr/local/www/nginx-dist;
    }
}
```

To finish off, edit the cgit config in `/usr/local/etc/cgitrc`:

```cgitrc
root-title={du}punkto · git repositories
root-desc=Improving the world, line by line

virtual-root=/
css=/custom.css
favicon=
logo=

# Use gitolite repos
enable-git-config=1
remove-suffix=1
section-from-path=2
project-list=/var/git/projects.list
scan-path=/var/git/repositories
branch-sort=age
repository-sort=age
robots=noindex, nofollow

# Dumb clones
enable-http-clone=1
clone-prefix=ssh://git@dupunkto.org https://git.dupunkto.org http://git.dupunkto.org

# Enable 'expensive' features
enable-subject-links=1
enable-tree-linenumbers=1
enable-commit-graph=1
enable-blame=1
enable-log-filecount=1
enable-log-linecount=1
enable-git-config=1
enable-index-owner=0
side-by-side-diffs=1
summary-branches=5

# Disable repo pagination
max-repo-count=1000000000

# No spam please
noplainemail=1

# Allow downloads
snapshots=tar.gz zip

# Syntax highlighting & READMEs
source-filter=/usr/local/lib/cgit/filters/syntax-highlighting.py
about-filter=/usr/local/lib/cgit/filters/about-formatting.sh
readme=:README.txt
readme=:README.md
readme=:README
```

In my case, I also added some custom CSS in `/usr/local/www/cgit/custom.css`:

```css
@import url("cgit.css");

/* Better fonts */
:root {
        line-height: 1.25;
        tab-size: 4;
}

div#cgit { font-family: monospace; }

/* Better layout */
div#cgit {
        max-width: 117ch;
        margin: 0 auto;
}
div#cgit div#summary {
        max-width: 80ch;
}

/* Better header */
table#header td.main:has(a) {
        color: transparent;
        font-size: .2px !important;
}
table#header td.main a {
        font-size: 2rem !important;
}
table#header td.main a:first-child::after {
        content: "/";
}

/* Trim repo descriptions */
div#cgit div.content table.list tr td:nth-child(2) {
        max-width: 40ch !important;
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: lowercase;
}

/* Remove weird artifacts */
table#header td.sub.right {
        display: none;
}

/* Remove excessive use of borders */
div#cgit table#header td.sub {
        border-top: none;
}
div#cgit table.tabs {
        border-bottom: none;
}
div#cgit div.content {
        border-bottom: none;
}

/* Padding on sections */
div#cgit table.list td.reposection {
        padding-top: 1.5em;
}

/* Neutral colors */
div#cgit table.list th a {
        color: inherit;
}
div#cgit table.list tr:nth-child(even) {
        background: inherit;
}
div#cgit table.list tr:hover {
        background: inherit;
}
div#cgit table.list tr.nohover-highlight:hover:nth-child(even) {
        background: inherit;
}
div#cgit table.blob td.linenumbers a:target {
        color: goldenrod;
        text-decoration: underline;
        outline: none;
}
```

## Webhosting

I wanted everyone who had access to the server to have their own little web space at **dupunkto.org/username**, which they could manage by placing files into `~/public_html`. Doing this is as simple as adding another `server`-block to the Nginx config.

While I was at it, I created some directories where the files for the homepage of our site can live, and I made them writeable for everyone because I don't have trust issues (yet):

```shell
# mkdir /usr/local/www/dupunkto.org
# mkdir /usr/local/www/ftp.dupunkto.org
# chmow 777 /usr/local/www/dupunkto.org
# chmod 777 /usr/local/www/ftp.dupunkto.org
```

And finally, add this to the Nginx config:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name  dupunkto.org;

    charset utf-8;

    add_header Referrer-Policy "no-referrer";
    add_header X-Content-Type-Options "nosniff";
    add_header X-Frame-Options "deny";
    add_header Cross-Origin-Opener-Policy "same-origin";
    add_header Strict-Transport-Security "max-age=31536000";
    add_header Access-Control-Allow-Origin "*";

    location ~ ^/~(.+?)(/.*)?$ {
            alias /home/$1/public_html$2;
    }

    root   /usr/local/www/dupunkto.org;
    index  index.html index.htm;

    error_page 404              /404.html;
    error_page 500 502 503 504  /500.html;
}
```

## FTP storage

I also wanted everyone to have some file storage accessible over FTP and HTTP. For that, I added another `server`-block to the ever-growing Nginx configuration:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name  ftp.dupunkto.org;

    charset utf-8;

    add_header Referrer-Policy "no-referrer";
    add_header X-Content-Type-Options "nosniff";
    add_header X-Frame-Options "deny";
    add_header Cross-Origin-Opener-Policy "same-origin";
    add_header Strict-Transport-Security "max-age=31536000";
    add_header Access-Control-Allow-Origin "*";

    location ~ ^/~(.+?)(/.*)?$ {
            alias /home/$1/public_ftp$2;
            autoindex on;
    }

    root   /usr/local/www/ftp.dupunkto.org;

    error_page 404              /404.html;
    error_page 500 502 503 504  /500.html;
}
```

I haven't yet installed the FTP server tho. Sowwy!

## SSL

While the webserver is running just fine as-is, one important thing is missing: SSL. Currently, we're only serving plain HTTP, and not HTTPS, causing our browsers to scream at us with exagerrated warnings like "This site isn't secure, your banking details could get stolen" etc.

To solve this, I installed `certbot`, a tool to automatically install and renew SSl free Let's Encrypt certificates:

```shell
# pkg install py39-certbot security/py-certbot-nginx
```

Simply run this to create and install the required certificates, and voilla:

```shell
# certbot --nginx -d dupunkto.org -d git.dupunkto.org -d ftp.dupunkto.org
# sysrc weekly_certbot_enable="YES"
```

## Firewall

To secure our system, I also setup a firewall. Add the following to `/etc/rc.conf`:

```conf
firewall_enable="YES"
firewall_type="workstation"
firewall_myservices="ssh http https"
firewall_allowservices="any"
firewall_script="/etc/ipfw.rules"
```

And then configure the firewall as desired in `/etc/ipfw.rules`:

```sh
#!/bin/sh
IPF="ipfw -q add"
ipfw -q -f flush

#loopback
$IPF 10 allow all from any to any via lo0
$IPF 20 deny all from any to 127.0.0.0/8
$IPF 30 deny all from 127.0.0.0/8 to any
$IPF 40 deny tcp from any to any frag

# statefull
$IPF 50 check-state
$IPF 60 allow tcp from any to any established
$IPF 70 allow all from any to any out keep-state
$IPF 80 allow icmp from any to any
$IPF 81 allow icmp6 from any to any

# open port ftp (20,21), ssh (22), mail (25)
# http (80), dns (53), https (443), mosh (60000-61000)
$IPF 110 allow tcp from any to any 21 in
$IPF 120 allow tcp from any to any 21 out
$IPF 130 allow tcp from any to any 22 in
$IPF 140 allow tcp from any to any 22 out
$IPF 150 allow tcp from any to any 25 in
$IPF 160 allow tcp from any to any 25 out
$IPF 170 allow udp from any to any 53 in
$IPF 175 allow tcp from any to any 53 in
$IPF 180 allow udp from any to any 53 out
$IPF 185 allow tcp from any to any 53 out
$IPF 200 allow tcp from any to any 80 in
$IPF 210 allow tcp from any to any 80 out
$IPF 220 allow tcp from any to any 443 in
$IPF 230 allow tcp from any to any 443 out
$IPF 300 allow udp from any to any 60000-61000

# deny and log everything
$IPF 500 deny log all from any to any
```

And then finally, start the services:

```shell
# service start ipfw
# service start fcgiwrap
# service start nginx
```

## Conclusion

So that's how I setup my server. I think this post is already way too long, so I'll leave the CardDAV server (Radicale) and Miniflux instance for another time.

I had a lot of fun setting this up, and I hope this post will help someone else.
