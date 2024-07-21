// Fonction pour initialiser la barre de navigation
export function initNavbar() {
    const links = document.querySelectorAll("nav li"); // Sélectionne tous les éléments <li> de la navigation
    const icons = document.getElementById("icons"); // Sélectionne l'élément pour l'icône de menu
    const nav = document.getElementById("nav"); // Sélectionne l'élément de navigation

    // Ajoute un écouteur d'événement pour l'icône de menu pour basculer la classe active
    icons.addEventListener("click", () => {
        nav.classList.toggle("active");
    });

    // Ajoute un écouteur d'événement pour chaque lien de navigation pour enlever la classe active
    links.forEach((link) => {
        link.addEventListener("click", () => {
            nav.classList.remove("active");
        });
    });
}
