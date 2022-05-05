button = document.querySelector(".menu-button");
menu = document.querySelector(".menu");

button.addEventListener("click", () => {
    toggleMenu();
});

window.onresize = () => {
    resize();
};

function resize() {
    if (window.innerWidth <= 1024) {
        menu.style.height = 0;
    } else {
        menu.style.height = "auto";
    }
}

function toggleMenu() {
    switch (menu.style.height) {
        case "0px":
            menu.style.height = "347px";
            break;
        default:
            menu.style.height = 0;
    }
}

resize();
