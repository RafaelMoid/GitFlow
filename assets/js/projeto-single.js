const selectCategory = document.getElementById('selectCategory');

selectCategory.addEventListener('change', function(e) {
    if (e.target.value != 'selecione por categoria') {
        window.location.href = e.target.value;
    }
});