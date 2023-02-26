button = document.querySelector(".menu-button");
menu = document.querySelector(".menu");
moreMenu = document.querySelector(".more-menu");
moreMenuHeading = document.querySelector(".more-menu-heading");
moreMenuButton = document.querySelector(".more-menu-button");
nav = document.querySelector(".page-header nav");

button.addEventListener("click", () => {
    toggleMenu();
});
moreMenuButton.addEventListener("click", () => {
    toggleMoreMenu();
});

window.onresize = () => {
    resize();
};

function resize() {
    if (isMobile()) {
        nav.style.display = "none";

        moreMenu.style.display = "flex";
        moreMenuHeading.style.display = "block";
        moreMenuButton.style.display = "none";
    } else {
        nav.style.display = "";

        moreMenu.style.display = "";
        moreMenuHeading.style.display = "none";
        moreMenuButton.style.display = "";
    }
}

function isMobile() {
    return window.innerWidth <= 1024;
}

function toggleMenu() {
    switch (nav.style.display) {
        case "none":
            nav.style.display = "";
            break;
        default:
            nav.style.display = "none";
    }
}

function toggleMoreMenu() {
    moreMenu.classList.toggle("active");
}

resize();
