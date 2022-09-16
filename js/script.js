    //Abrir o menu ao clickar no hamburguer; e resetar o menu caso ele esteja invisivel.
    const menu = document.querySelector(".menu")
    function abrirmenu() {
        if (menu.style.display == "none") {
            menu.style.display = "block"
        } else {
            menu.style.display = "none"
        }
    }
    let tela = window.matchMedia("(min-width: 701px)")
    tela.onchange = function() {
        if (tela.matches) {
            menu.style.display = "flex"
        } else {
            menu.style.display = "none"
        }
    }