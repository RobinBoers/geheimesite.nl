var postTitle = new Array();
var postContent = new Array();
var postUrl = new Array();
var postDate = new Array();
var postYearMonth = new Array();
var postYearMonth2 = new Array();
var postTanggal = new Array();
var numberfeed = 0;
var month2 = ["januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"];

function loadtoc(a) {
    function b() {
        if ("entry" in a.feed) {
            var d = a.feed.entry.length;
            numberfeed = d;
            ii = 0;
            for (var h = 0; h < d; h++) {
                var m = a.feed.entry[h];
                var e = m.title.$t;
                var cont = m.content.$t;
                console.log(m)
                var l = m.published.$t.substring(0, 10);
                var p = m.published.$t.substring(5, 7);
                var g = m.published.$t.substring(8, 10);
                var n = month2[parseInt(p, 10) - 1] + " " + m.published.$t.substring(0, 4);
                var c = "/" + m.published.$t.substring(0, 4) + "_" + p + "_01_archive.html";
                var j;
                for (var f = 0; f < m.link.length; f++) {
                    if (m.link[f].rel == "alternate") {
                        j = m.link[f].href;
                        break
                    }
                }
                var o = "";
                for (var f = 0; f < m.link.length; f++) {
                    if (m.link[f].rel == "enclosure") {
                        o = m.link[f].href;
                        break
                    }
                }
                postTitle.push(e);
                postContent.push(cont);
                postDate.push(l);
                postUrl.push(j);
                postYearMonth.push(n);
                postYearMonth2.push(c);
                postTanggal.push(g)
            }
        }
    }
    b();
    displayToc2();
}

function displayToc2() {
    var a = 0;
    var b = 0;
    while (b < postTitle.length) {
        temp1 = postYearMonth[b];
        firsti = a;
        do {
            document.write(`
                <article class="post mt-10">
                    <div class="text-center my-7 max-w-xl mx-auto">
                        <h1 id="post-${a}" class="mb-0 text-4xl">${postTitle[a]}</h1>
                        <p class="my-5 bold">${postTanggal[a]} ${postYearMonth[b]}</p>
                    </div>

                    <section>
                        ${postContent[a]}
                    </section>
                </article>

                <hr class="my-7 border-none">
            `);

            a = a + 1
        } while (postYearMonth[a] == temp1);
        b = a;
        if (b > postTitle.length) {
            break
        }
    }
};