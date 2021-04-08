/*===========  Menu Show Y Hidden  ===========*/
const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('nav-toggle'),
    closeMenu = document.getElementById('nav-close')


/*===========  Show  ===========*/

toggleMenu.addEventListener('click', () => {
    navMenu.classList.toggle('show')
})

/*=========== Hidden  ===========*/
closeMenu.addEventListener('click', () => {
    navMenu.classList.remove('show')
})

/*===========  Menu Show Y Hidden  ===========*/

const navLink = document.querySelectorAll('nav__link')

function linkAction() {
    navLink.forEach(n => n.classList.remove('active'))
    this.classList.add('active')

    //Remove Menu Mobile 
    navMenu.classList.remove('show')

}

navLink.forEach(n => n.addEventListener('click', linkAction))


window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-70px";
    }
}

//=====================================Carousel__Section=======================================
anime({
    targets: '.anime',
    d: [
        { value: (el) => el.getAttribute('data-morph-to'), duration: (el, i) => 1000 },
        { value: (el) => el.getAttribute('d'), duration: (el, i, l) => 1000 }
    ],
    loop: true,
    easing: 'linear',
    update: () => {
        const el = document.getElementById('defs');
        el.style.display = 'none';
        el.offsetWidth;
        el.style.display = 'block';
    }
})

class Defilee {
    constructor(element) {
        if (!element) {
            return
        }
        this.element = element
        this._name = "defilee";
        this._itemSelector = "." + this._itemClass
    }
    init() {
        this.addLoop();
    }
    addLoop() {
        const parent = this.element;
        Array.prototype.slice.call(this.element.children).reverse().forEach((el) => {
            const clone = el.cloneNode(true);
            clone.classList.add('clone');
            parent.insertBefore(clone, parent.firstChild);
        })
    }
}

const defilee = new Defilee(document.getElementById('defilee'));
defilee.init();