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