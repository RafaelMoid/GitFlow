const categoriesList = document.querySelectorAll('.categorias li');
const btShowAll = document.getElementById('btShowAll');
const projectCards = document.querySelectorAll('.projeto-card');

function showAll() {
    for(i = 0; i < projectCards.length; i++) {
        projectCards[i].classList.remove('hide');
    }
}

function showSelectedCategory(category) {
    for(i = 0; i < projectCards.length; i++) {
        if (projectCards[i].dataset.category != category) {
            projectCards[i].classList.add('hide');
        } else {
            projectCards[i].classList.remove('hide');
        }
    }
}

function handleActive(e) {
    btShowAll.classList.remove('active');
    for(i = 0; i < categoriesList.length; i++) {
        categoriesList[i].classList.remove('active');
    }

    e.target.classList.add('active');
}

btShowAll.addEventListener('click', showAll);
btShowAll.addEventListener('click', handleActive);
for(i = 1; i < categoriesList.length; i++) {
    categoriesList[i].addEventListener('click', function() {
        showSelectedCategory(this.dataset.category);
    });
    categoriesList[i].addEventListener('click', handleActive);
}