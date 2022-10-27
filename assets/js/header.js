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
    if (window.scrollY >= (document.body.scrollHeight * 0.7)) {
        btScrollUp.classList.remove('hide');
    } else {
        btScrollUp.classList.add('hide');
    }
});

btScrollUp.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
});