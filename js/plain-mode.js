function setActiveStyleSheet(title) {
    console.log("Setting theme...");

    var index, linkTag, main;
    for (index = 0; (linkTag = document.getElementsByTagName("link")[index]); index++) {
        if (linkTag.getAttribute("rel").indexOf("style") != -1 && linkTag.getAttribute("title")) {
            linkTag.disabled = true;
            if (linkTag.getAttribute("title") == title) linkTag.disabled = false;
        }
    }

    localStorage.setItem("style", title);
}

function getActiveStyleSheet() {
    var index, linkTag;
    for (index = 0; (linkTag = document.getElementsByTagName("link")[index]); index++) {
        if (linkTag.getAttribute("rel").indexOf("style") != -1 && linkTag.getAttribute("title") && !linkTag.disabled) {
            return linkTag.getAttribute("title");
        }
    }
    return null;
}

function getPreferredStyleSheet() {
    var index, linkTag;
    for (index = 0; (linkTag = document.getElementsByTagName("link")[index]); index++) {
        if (linkTag.getAttribute("rel").indexOf("style") != -1 && linkTag.getAttribute("rel").indexOf("alt") == -1 && linkTag.getAttribute("title")) {
            return linkTag.getAttribute("title");
        }
    }
    return null;
}

window.onload = () => {
    var cookie = localStorage.getItem("style");
    var title = cookie ? cookie : getPreferredStyleSheet();
    setActiveStyleSheet(title);
};
