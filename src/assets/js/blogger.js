let postTitle = new Array();
let postContent = new Array();
let postUrl = new Array();
let postDate = new Array();

let months = [
    "januari",
    "februari",
    "maart",
    "april",
    "mei",
    "juni",
    "juli",
    "augustus",
    "september",
    "oktober",
    "november",
    "december",
];

let feedSize = 0;

function callback(apiData) {
    function load() {
        if ("entry" in apiData.feed) {
            let feedSize = apiData.feed.entry.length;
            for (let i = 0; i < feedSize; i++) {
                let post = apiData.feed.entry[i];
                console.log(post);

                var p = post.published.$t.substring(5, 7);

                for (var f = 0; f < post.link.length; f++) {
                    if (post.link[f].rel == "alternate") {
                        postUrl.push(post.link[f].href);
                        break;
                    }
                }

                let postDateDay = post.published.$t.substring(8, 10);
                let postDateMonth = months[parseInt(p, 10) - 1];
                let postDateYear = post.published.$t.substring(0, 4);

                postDate.push(
                    `${postDateDay} ${postDateMonth} ${postDateYear}`
                );

                postTitle.push(post.title.$t);
                postContent.push(post.content.$t);
            }
        }
    }

    function display() {
        let postCount = postTitle.length;
        var currentPost = 0;
        while (currentPost < postCount) {
            document.write(`
                <article class="post mt-10">
                    <div class="text-center my-7 max-w-xl mx-auto">
                        <h1 id="post-${currentPost}" class="mb-0 text-4xl">${postTitle[currentPost]}</h1>
                        <p class="my-5 bold">${postDate[currentPost]}</p>
                    </div>
    
                    <section>
                        ${postContent[currentPost]}
                    </section>
                </article>
    
                <hr class="my-7 border-none">
            `);

            currentPost++;
        }
    }

    load();
    display();
}
