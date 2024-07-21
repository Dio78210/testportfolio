// Fonction pour initialiser le défilement fluide
export function initSmoothScroll() {
    // Sélectionne tous les liens qui commencent par "#"
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault(); // Empêche le comportement par défaut du lien

            // Fait défiler jusqu'à l'élément ciblé de manière fluide
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}
