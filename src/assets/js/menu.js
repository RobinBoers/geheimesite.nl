button = document.querySelector(".menu-button");
menu = document.querySelector(".menu");
nav = document.querySelector(".pageheader nav");

button.addEventListener("click", () => {
    toggleMenu();
});

window.onresize = () => {
    resize();
};

function resize() {
    if (window.innerWidth <= 1024) {
        menu.style.height = 0;
        nav.style.display = "none";
    } else {
        menu.style.height = "auto";
        nav.style.display = "";
    }
}

function toggleMenu() {
    switch (menu.style.height) {
        case "0px":
            menu.style.height = "min-content";
            nav.style.display = "";
            break;
        default:
            menu.style.height = 0;
            nav.style.display = "none";
    }
}

resize();
