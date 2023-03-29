(function () {
    var menu = document.querySelector(".navbar");
    var buttonMenu = document.querySelector(".button-menu");
    buttonMenu.addEventListener("click", function (e) {
        e.preventDefault();
        if (menu.classList.contains("open")) {
            menu.classList.remove("open");
        } else {
            menu.classList.add("open");
        }
    });
})();
