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