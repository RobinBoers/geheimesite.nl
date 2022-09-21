function init() {
    loadFeed(`${base_url}/index.json`);
}

function loadFeed(url) {
    getFeed(url, (feed) => {
        let latestPosts = getOnlyFirstPosts(feed);
        let blogContainer = document.querySelector(".blog");
        let blogContent = "";

        latestPosts.forEach((post) => {
            blogContent += `
                <article class="h-entry md">
                    <h1 class="p-name mb-0">
                        <a class="no-underline hover:bg-vibrant" href="${
                            post.uri
                        }">${post.title}</a>
                    </h1>
                    <p class="italic">
                        Geschreven door <span class="p-author">Robin Boers</span> op <span class="dt-published">${convertDateToString(
                            post.date
                        )}</span>
                    </p>
                    <p id="p-summary e-content">${getSummaryForText(
                        post.content
                    )}</p>
                </article>
            `;
        });

        blogContainer.innerHTML = blogContent;
    });
}

function getFeed(url, callback) {
    fetch(url)
        .then((response) => response.json())
        .then((feed) => callback(feed));
}

function getOnlyFirstPosts(feed) {
    return feed.slice(0, 6);
}

function getSummaryForText(text) {
    const summaryLength = 80;
    words = text.split(" ");

    if (words.length > summaryLength) {
        return words.slice(0, summaryLength).join(" ") + "...";
    } else {
        return text;
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

const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];
