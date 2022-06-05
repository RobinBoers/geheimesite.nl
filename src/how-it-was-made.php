<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>How my website was built: a look behind the curtains — geheimesite.nl | Robin Boers</title>

        <link rel="alternate stylesheet" href="/assets/css/plain.css" title="plain" />       
        <script src="/assets/js/plain-mode.js"></script>

        <link rel="stylesheet" href="/assets/css/main.css" title="default" />

        <style>
            :root {
                --black: 173, 173, 173;
                --white: 20, 20, 20;
                --vibrant: 44, 251, 148;
            }

            a, a code {
                text-decoration: none;
                color: rgb(var(--vibrant));
            }

            a:hover, a code:hover {
                color: rgb(var(--white)) !important;
                background-color: rgb(var(--vibrant)) !important;
            }

            @media (prefers-color-scheme: dark) {
                :root {
                    --black: 20, 20, 20;
                    --white: 173, 173, 173;
                }

                a:hover, a code:hover {
                    color: rgb(var(--black)) !important;
                }
            }

            body, .title {
                font-family: "MxPlus Amstrad PC-2y";
                font-size: 120%;
            }

            p:not(.subtitle)::before {
                content: "<p>";
                color: #f6475d;
                margin-right: 2px;
            }
            p:not(.subtitle)::after {
                content: "<p>";
                color: #f6475d;
                margin-left: 2px;
            }

            h1, h2, h3 {
                margin-left: -55px;
            }
            h1::before {
                content: "# ";
                font-family: monospace;
                color: #808080;
            }

            h2::before {
                content: "## ";
                font-family: monospace;
                color: #808080;
            }

            h3::before {
                content: "### ";
                font-family: monospace;
                color: #808080;
            }

            code {
                color: #808080;
            }
        </style>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="flex flex-col sm:flex-row-reverse items-center justify-around">
            <p class="title"><a href="/">Robin Boers</a></p>

            <nav>
                <a href="/en/">< Back</a>
            </div>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1 class="mb-0 text-[white] font-display font-light">How my site was built</h1>
                    <p class="text-[white] subtitle">The wonders of the world wide web.</p>

                    <p>This site is my little gem. I launched it in 2017 and I have been improving and maintaining it ever since. I sometimes call it my personal playground. It is my little corner of the web, a place where I have full creative freedom over my own content. And I love it.</p>

                    <p>This page provides an insight in the development and design process of building this beauty. Enjoy. At the end of the post I have linked some good resources for building your own site.</p>
                </section>

                <hr class="my-7 border-none">

                <section>
                    <h2 class="text-[white]">Framework? No thanks</h2>

                    <p>Some of you might think I built this using some frontend framework like React, Svelte, Phoenix or Ruby on Rails. But no.</p>

                    <p>This website is actually fully handcoded HTML with some PHP for extra magic. I chose to handcode it since it gives me more control over the look and feel of the site. I prefer this over the framework approach.</p>

                    <p>I do use <a href="https://tailwindcss.com">tailwind</a> for the styling. We use it over at Qdentity, and I got so used to it so I decided to also use it for my own site. It allows me to quickly style things in the DOM without UGLY style attributes. It also allows me to write shorter, more expressive CSS files. I enjoy it.</p>

                    <p>I have <a href="https://github.com/RobinBoers/geheimesite.nl/blob/master/src/.htaccess">a .htaccess file</a> that handles all the routing for fancy URLs. It removes the file extension, redirects some stuff and is just overall pretty Poggers.</p>
                </section>

                <section>
                    <h2 class="text-[white]">Development</h2>

                    <p>I have <a href="https://github.com/RobinBoers/geheimesite.nl/blob/master/server.sh">a script</a> that start a local php webserver and start a tailwind process that watches the files. I call that script in <code>npm start</code>. I also have <a href="https://github.com/RobinBoers/geheimesite.nl/blob/master/build.sh">a script</a> that just builds the CSS files using tailwind, which I can call during deployment.</p>
                </section>

                <section>
                    <h2 class="text-[white]">Hosting</h2>

                    <p>My website is hosted at <a href="https://www.bhosted.nl?ref=97f4c4a4b13e269e12cfd4f0352ba527">bHosted</a>. They provide reasonably cheap and very reliable shared hosting including PHP, MySQL, DirectAdmin and PhpMyAdmin. They're a Dutch company, so the servers are close to me (which means better performance). I pay about 30 euros a year for the webhosting, and my overall experience with them is very good.</p>

                    <p>I also host some stuff on <a href="https://pages.github.com">GitHub pages</a>. The main selling point here is that it's free. Mainly my blog and documentation for projects are hosted using GitHub.</p>
                    
                    <p>If you're looking for paid hosting I'd definitely go with bHosted. If you're on a budget however, I'd recommend either GitHub pages or <a href="https://neocities.org">Neocities</a>. They're both great. I think GitHub pages is more reliable in the long run, since it is part of a company with steady income, but if you have your own domain name moving hosts isn't a big deal.</p>
                </section>

                <section>
                    <h2 class="text-[white]">Fonts</h2>

                    <p>I used to just use the default sans-serif font the user had installed, but that's just lazyness. I thought long and hard about font selection when I redesigned my website, and I settled for this:</p>

                    <ul>
                        <li>Merriweather for the main content</li>
                        <li>Poppins for headers</li>
                        <li>Fira Sans Condensed for subheadings</li>
                        <li>Bungee shade as display font for header</li>
                    </ul>

                    <p>I think these fonts complement eachother, while also creating a nice contrast.</p>

                    <p>Funnely enough, this page is the only page to use different fonts, but I decided it was fitting to use my favorite editor font for the page about how I built my site.</p>
                </section>

                <section>
                    <h2 class="text-[white]">Blog</h2>

                    <p>By blog consists of three static <a href="https://gohugo.io">hugo</a> sites, which I build and deploy using a simple bash script and GitHub actions. I developed my own hugo theme with IndieWeb support, based on <a href="https://neofeed.dev">neofeed</a>.</p>

                    <p>I built my own barebones statistics tracker. It tracks visits, not views, per post. The results are <a href="/api/views/stats">publicly available</a> can be filtered per month and are shown in a simple graph that I built using Chart.js.</p>
                </section>

                <section>
                    <h2 class="text-[white]">Dynamic pages & apis</h2>

                    <p>The projects and books pages are both dynamic. That means as soon as the page is loaded by the user a JS script in the background pulls in the content. Why you ask? Well, that means I can be lazy and don't have to update my site every time I create a new project or read a new book.</p>

                    <p>The projects page pulls my repositories from my GitHub account using the GitHub API. The thumbnails shows are <code>screenshot.png</code> files at the root of each projects' repository. If there is no such file I display a default empty one using <a href="https://placeholder.com">placeholder.com</a>. The source code for the script can be found here: <a href="/assets/js/github.js"><code>github.js</code></a></p>

                    <p>The books page works simularely. It pulls the books from <a href="https://micro.blog">Micro.blog</a> bookshelves. The source code for that script can be found here: <a href="/assets/js/bookshelves.js"><code>bookshelves.js</code></a>. The problem is that the microblog API requires an access token to get access to the bookshelves, but doesn't allow scopes. That means the token can get access to my entire account, including the ability to comment and post. That's why I built <a href="https://github.com/RobinBoers/geheimesite.nl/blob/master/src/api/books/README.md">my own wrapper around the Micro.blog API</a>, that hides the token for me.</p>
                </section>

                <section>
                    <h2 class="text-[white]">Open-source</h2>

                    <p>I open-sourced most of my website, and like my other projects it can be found <a href="https://github.com/RobinBoers/geheimesite.nl">on my GitHub profile</a>. I haven't yet decided on the license I'll use for my main site and my blog.</p>

                    <p>I've also open-sourced the blogging software I built for <a href="https://micro.geheimesite.nl">my neolog</a>, called neopub. It can be found here: <a href="https://github.com/neopublished/neopub">github.com/neopublished/neopub</a>. Iit is licensed under the Apache License 2.0.</p>
                </section>

                <section>
                    <h2 class="text-[white]">CI/CD</h2>

                    <p>For CI/CD I'm using GitHub actions, since all of my code is also hosted on GitHub. I know GitHub isn't open-source and I should probably use Gitea or GitLab, but you know, old habbits.</p>

                    <p>All projects that have documentation hosted using GitHub pages (on docs.geheimesite.nl) have CD to build and deploy new docs on push to the master branch. My website and neolog are being deployed using FTP-Deploy-Action.</p>
                </section>

                <hr class="my-7 border-none">

                <section>
                    <h2 class="text-[white]">As promised...</h2>

                    <p>Thanks for reading all of that (or just scrolling to the bottom). I hope you learned some things. If anything about this page was unclear, don't hesitate to send me an email at <a href="mailto:robin@geheimesite.nl">robin@geheimesite.nl</a>. Now, as promised, here are some resources for building your own site:</p>

                    <ul>
                        <li>Uhh. TODO i guess</li>
                    </ul>
                </section>
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner and Elixir programmer since 2017.
        </footer>
    </body>
</html>