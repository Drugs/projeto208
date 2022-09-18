    //Abrir o menu ao clickar no hamburguer; e resetar o menu caso ele esteja invisivel.
    const body = document.querySelector("body")
    const menu = document.querySelector(".menu")
    function abrirmenu() {
        if (menu.style.display == "none") {
            menu.style.display = "block"
            body.style.overflow = "hidden"
        } else {
            menu.style.display = "none"
            body.style.overflow = "auto"
        }
    }
    let tela = window.matchMedia("(min-width: 711px)")
    tela.onchange = function() {
        if (tela.matches) {
            menu.style.display = "flex"
        } else {
            menu.style.display = "none"
        }
    }