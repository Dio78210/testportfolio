// Fonction pour afficher une popup avec un titre et une description
export function afficherPopup(titre, description) {
    document.getElementById('popup').style.display = 'block'; // Affiche la popup
    document.getElementById('popup-titre').innerText = titre; // Définit le titre de la popup
    document.getElementById('popup-description').innerText = description; // Définit la description de la popup
}

// Fonction pour fermer la popup
export function fermerPopup() {
    document.getElementById('popup').style.display = 'none'; // Cache la popup
}
