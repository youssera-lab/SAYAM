
//header
//about img
window.addEventListener('scroll', () => {
    const images = document.querySelectorAll('.about-content-img img');

    images.forEach(img => {
        const imgTop = img.getBoundingClientRect().top;
        const imgBottom = img.getBoundingClientRect().bottom;

        // Vérifie si l'image est dans la fenêtre d'affichage
        if (imgTop < window.innerHeight && imgBottom > 0) {
            img.classList.add('in-view');
        } else {
            img.classList.remove('in-view');
        }
    });
});
