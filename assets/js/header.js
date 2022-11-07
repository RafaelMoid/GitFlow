const mobileHeader = document.querySelector('.mobile-header');
const btOpenMenu = document.getElementById('btOpenMenu');
const btCloseMenu = document.getElementById('btCloseMenu');

function openMenu() {
    mobileHeader.classList.add('active');
}

function closeMenu() {
    mobileHeader.classList.remove('active');
}

btOpenMenu.addEventListener('click', openMenu);
btCloseMenu.addEventListener('click', closeMenu);

const btScrollUp = document.getElementById('btScrollUp');

window.addEventListener('scroll', () => {
    if ((window.scrollY + window.innerHeight) >= (document.body.scrollHeight * 0.8)) {
        btScrollUp.classList.remove('hide');
    } else {
        btScrollUp.classList.add('hide');
    }
});

btScrollUp.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
});

// handle language btn

const desktopDivLinks = document.querySelector('header .links');
const mobileDivLinks = document.querySelector('.mobile-header .links');

function languageChange() {
    desktopDivLinks.children[0].classList.toggle('active-language');
    mobileDivLinks.children[0].classList.toggle('active-language');
    desktopDivLinks.children[1].classList.toggle('active-language');
    mobileDivLinks.children[1].classList.toggle('active-language');
}

for(i = 0; i < 2; i++) {
    desktopDivLinks.children[i].classList.add('bt-language');
    mobileDivLinks.children[i].classList.add('bt-language');

    desktopDivLinks.children[i].addEventListener('click', languageChange);
    mobileDivLinks.children[i].addEventListener('click', languageChange);
}

desktopDivLinks.children[0].classList.add('active-language');
mobileDivLinks.children[0].classList.add('active-language');