// Fonction pour l'effet d'écriture de texte
export function typewriter() {
    var aText = new Array("Développeur Junior web et web mobile "); // Texte à afficher
    var iSpeed = 100; // Délai en millisecondes entre chaque caractère
    var iIndex = 0; // Position de départ dans le tableau de texte
    var iArrLength = aText[0].length; // Longueur du texte actuel
    var iScrollAt = 20; // Nombre de lignes avant de faire défiler

    var iTextPos = 0; // Position actuelle du texte
    var sContents = ""; // Contenu actuel de la ligne
    var iRow; // Ligne actuelle

    // Fonction interne pour gérer l'animation d'écriture
    function typing() {
        sContents = " ";
        iRow = Math.max(0, iIndex - iScrollAt); // Calcule la ligne actuelle
        var destination = document.getElementById("sec-text"); // Sélectionne l'élément où afficher le texte

        // Ajoute les lignes précédentes
        while (iRow < iIndex) {
            sContents += aText[iRow++] + "<br />";
        }
        
        // Affiche le texte actuel avec un curseur clignotant
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
        if (iTextPos++ == iArrLength) {
            iTextPos = 0;
            iIndex++;
            if (iIndex != aText.length) {
                iArrLength = aText[iIndex].length;
                setTimeout(typing, 500); // Pause avant de commencer la ligne suivante
            }
        } else {
            setTimeout(typing, iSpeed); // Vitesse d'écriture
        }
    }
    typing(); // Démarre l'animation d'écriture
}
