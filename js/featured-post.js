function init() {
    loadPost(`${base_url}/index.json`);
}

function loadPost(url) {
    feedData(url, (feed) => {
        let featuredPost = feed[0];
        let summary = getSummaryForText(featuredPost.content)
        let date = convertDateToString(featuredPost.date);

        document.querySelector("#featured-post-title").innerText = featuredPost.title;
        document.querySelector("#featured-post-summary").innerText = summary;
        document.querySelector(".dt-published").innerText = featuredPost.date;

        document.querySelectorAll(".featured-post-link").forEach((link) => {
            link.href = featuredPost.uri;
        });

        document.querySelectorAll(".featured-post-date").forEach((element) => {
            element.innerText = date;
        });

        let tagsParent = document.querySelector("#featured-post-tags");
        featuredPost.tags.forEach((tag) => {
            tag = tag.replace(/\s+/g, '-');

            let linkElement = document.createElement("a");
            linkElement.innerText = `#${tag}`;
            linkElement.setAttribute("id", tag);
            linkElement.classList.add("p-category", "properties");
            linkElement.href = `${base_url}/tags/${tag}`;
            tagsParent.appendChild(linkElement);
        });
    });
}

function feedData(url, callback) {
    fetch(url)
        .then((response) => response.json())
        .then((feed) => callback(feed));
}

function getSummaryForText(text) {
    const summaryLength = 370;
    if (text.length > summaryLength) {
        return text.substring(0, summaryLength) + "...";
    } else {
        return featuredPost.content;
    }
}

function convertDateToString(date) {
    let d = new Date(date);
    const year = d.getFullYear();
    const monthIndex = d.getMonth();
    const month = months[monthIndex];
    const day = d.getDate();

    return `${month} ${day}, ${year}`;
}

window.onload = init();

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
