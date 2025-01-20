class MobileNavbar {
    constructor(buttonMobile, navList, navLinks) {
        this.buttonMobile = document.querySelector(buttonMobile);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = 'active';

        this.handleClick = this.handleClick.bind(this);
    }

/*ESSE METODO VAI FAZER UMA VERIFICAÇÃO QUE SE O LINK POSSUI A PROPRIEDADE ANIMATION NO "DOM" SE POSSIR VAI SER ADICIONADO E SE JÁ ESTIVER VAI SER REMOVIDO */
    /**O 'FOREACH' ESTÁ DIZENDO QUE VAI PAGAR CADA LINK INDIVIDUALMENTE*/
    animateLinks() {
        this.navLinks.forEach((link, index) => {
            /*OPERADOR TERNARIO QUE VAI RETORNAR UM DE DOIS VALORES SE BASEANDO NO TERCEIRO*/
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation =  `navLinkFade 0.5s ease forwards ${
                    index / 7 + 0.3
                }s`);
        });
    }

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.buttonMobile.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent() {
        this.buttonMobile.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.buttonMobile) {
            this.addClickEvent();
        }
        return this;
    }
}
    const mobileNavbar = new MobileNavbar (
        ".button-mobile",
        ".nav-list",
        ".nav-list li",
    );
    mobileNavbar.init();