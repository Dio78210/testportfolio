import { initSmoothScroll } from './smoothScroll.js';
import { afficherPopup, fermerPopup } from './popup.js';
import { changeDarkMode } from './darkMode.js';
import { initNavbar } from './navbar.js';
import { typewriter } from './typewriter.js';

// Initialise toutes les fonctionnalités une fois le DOM complètement chargé
document.addEventListener('DOMContentLoaded', () => {
    initSmoothScroll(); // Initialise le défilement fluide
    initNavbar(); // Initialise la barre de navigation
    typewriter(); // Lance l'effet d'écriture du texte

    // Ajoute l'écouteur d'événement pour le bouton de changement de mode
    document.getElementById('dark-light-mode').addEventListener('click', changeDarkMode);
    
    // Attache les fonctions de popup à la portée globale pour les attributs onclick HTML
    window.afficherPopup = afficherPopup;
    window.fermerPopup = fermerPopup;
});
