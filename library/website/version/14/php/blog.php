<?php
    if(!isset($howMuch)) {
        $howMuch = 10;

        if($_GET["r"]) {
            $howMuch = $_GET["r"];
        }

    }

    if(!isset($start)) {
        $start = 0;

        if(isset($_GET["start"])) {
            $start = $_GET["start"];
        }

    }

    if(!isset($onHP)) {
        $onHP = false;
    }
?>

<h2>Blog</h2>
<div class="blog">
<script type="text/javascript">

var postTitle = new Array();
var postContent = new Array();
var postUrl = new Array();
var postMp3 = new Array();
var postDate = new Array();
var postYear = new Array();
var postMonth = new Array();
var postYearMonth = new Array();
var postYearMonth2 = new Array();
var postTanggal = new Array();
var postLabels = new Array();
var postBaru = new Array();
var sortBy = "titleasc";
var tocLoaded = false;
var numChars = 250;
var postFilter = "";
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
        document.write("<p/>");
        document.write('<h4><b><a href="http://webdevelopment-en-meer.blogspot.com/' + postYearMonth2[b] + '">' + temp1.toUpperCase() + "</a></b></h4>");
        firsti = a;
        do {
            document.write("<div class=\"blog w3-card-4 w3-container w3-white\">");
            document.write("<h3><a href=\"" + postUrl[a] + "\"><b>" + postTitle[a] + "</b></a></h3>");
            document.write("<h5>Door Robin Boers, <span class=\"w3-opacity\">"+ postTanggal[a] + " " + postYearMonth[b] + "</span></h5>");
            document.write("<p>"+postContent[a]+"</p>");
            document.write("</div><hr>");

            a = a + 1
        } while (postYearMonth[a] == temp1);
        b = a;
        if (b > postTitle.length) {
            break
        }
    }
};

</script>

<?php

if($start === 0) {
    ?><script src="https://webdevelopment-en-meer.blogspot.com/feeds/posts/default?max-results=<?php echo $howMuch ?>&alt=json-in-script&callback=loadtoc"><?php
} else {
    ?><script src="https://webdevelopment-en-meer.blogspot.com/feeds/posts/default?max-results=<?php echo $howMuch ?>&start-index=<?php echo $start ?>&alt=json-in-script&callback=loadtoc"><?php
}

?>

</script>
<a href="https://follow.it/webdevelopment-en-meer?action=followPub" style="float:left;font-size: 11px; text-decoration:none; color: #616469;">Subscribe to my blog via e-mail</a></br/>
<center>
<?php

if($onHP === false) {
    if($start === 0) {
        ?><a href='?r=<?php echo $howMuch ?>&start=<?php echo($start + 1 + $howMuch) ?>'>Load more...</a><?php
    } else {
        ?><a href='?r=<?php echo $howMuch ?>&start=<?php echo($start + $howMuch) ?>'>Load more...</a><?php
    }
} else {
    ?><a href='blog/index.php?r=10&start=<?php echo($start + 1 + $howMuch) ?>'>Load more...</a><?php
}

?></center>
</div>