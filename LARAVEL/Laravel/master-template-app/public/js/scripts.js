document.addEventListener('DOMContentLoaded', function() {

    const postTitles = document.querySelectorAll('.card-title');

    postTitles.forEach(function(title) {
        title.addEventListener('click', function() {
            const content = title.nextElementSibling;
            content.classList.toggle('card-text');
        });
    });
});
console.log('Scripts loaded');
