function generateBlacklist() {
    return [
        "blogger-theme-collection",
        "code.geheimesite.nl",
        "FramboxOS",
        "FramboxDesktop",
        "inlogsysteem-php",
        "inlogsysteem-php2",
        "gopherhole",
        "pimenu",
        "PiSwitch",
        "dotfiles-rpi",
        "BloggerAPP",
        "Platformed",
        "SkyLight-basetheme",
        "SkyLight-themelibrary",
        "Website-To-Webapp",
        "phx-chat",
        "phx-example-app",
        "termitools",
        "gtk3-classic",
        "firefox-tweaks",
        "nindo-nindb",
        "nemo-open-in-vscodium",
        "fast_rss",
        "serde_rustler",
        "html-sanitize-ex",
        "atom2rss",
        "BetterPainting",
        "ex-german",
        "blog",
        "geheimesite.nl",
        "nindo-static",
        "vscode-elementary-theme",
        "yesterblog",
        "images",
        "sterrenkruid",
        "school",
        "sway-gnome",
        "ubit-remote-ultra-super-car-controller",
        "",
    ];
}

function init() {
    targetContainer = document.querySelector(".github-projects");
    loadRepositories("RobinBoers", targetContainer);
}

function loadRepositories(username, targetContainer) {
    targetContainer.innerHTML = `<p class="w-full supplement col-span-full">Querying GitHub for my repositories...</p>`;

    repoData(username, (repos) => {
        sortRepos(repos);

        let elements = [];
        let blacklist = generateBlacklist();

        repos = repos.filter((repo) => !isPagesRepo(repo.name, username));
        repos = repos.filter((repo) => !inBlacklist(repo.name, blacklist));
        repos = repos.filter((repo) => repo.name != username);
        repos = repos.filter((repo) => !repo.archived);

        repos.forEach((repo) => {
            let linkLocation = generateLinkLocation(repo);

            let container = document.createElement("li");
            let containerTitle = document.createElement("h3");

            containerTitle.innerText = repo.name;
            container.append(containerTitle);

            let link = generateLink(linkLocation);
            let image = generateImage(repo.name, username);
            link.append(image);

            container.append(link);
            elements.push(container);
        });

        emptyElement(targetContainer);

        elements.forEach((element) => {
            if (element) targetContainer.appendChild(element);
        });
    });
}

function makeRequest(url) {
    var request = new XMLHttpRequest();
    request.open("GET", url, false);
    request.send(null);
    return request.response;
}

function repoData(username, callback) {
    fetch(`https://api.github.com/users/${username}/repos?per_page=100`)
        .then((response) => response.json())
        .then((repoData) => callback(repoData));
}

function sortRepos(repos) {
    repos.sort(function (a, b) {
        return b.forks - a.forks;
    });
}

function inBlacklist(repo, blacklist) {
    foundBlacklisted = false;
    blacklist.forEach((blacklistedRepo) => {
        if (blacklistedRepo == repo) foundBlacklisted = true;
    });
    return foundBlacklisted;
}

function isPagesRepo(repo, username) {
    return repo == `${username.toLowerCase()}.github.io`;
}

function generateLinkLocation(repo) {
    if (repo.homepage && repo.homepage !== "") {
        return repo.homepage;
    } else {
        return repo.html_url;
    }
}

function generateLink(location) {
    let link = document.createElement("a");
    link.setAttribute("href", location);

    return link;
}

function generateImage(repo, username) {
    let image = document.createElement("img");
    // image.setAttribute("src",
    //     `https://github-readme-stats.vercel.app/api/pin/?username=${username}&repo=${repo}`);
    image.setAttribute(
        "src",
        `https://raw.githubusercontent.com/${username}/${repo}/master/screenshot.png`
    );
    image.setAttribute(
        "onerror",
        `this.src="https://via.placeholder.com/160x80.png?text=View on GitHub"`
    );
    image.setAttribute("alt", repo);

    return image;
}

function emptyElement(element) {
    element.innerHTML = "";
}

window.onload = init();
