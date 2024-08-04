document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function afficherPopup(titre, description) {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('popup-titre').innerText = titre;
    document.getElementById('popup-description').innerText = description;
}

function fermerPopup() {
    document.getElementById('popup').style.display = 'none';
}



// //mode sombre
// let darkMode = false;

// function changeDarkMode() {
//   if (darkMode) {
//     darkMode = false;
//     document.documentElement.style.setProperty("--text-color", "black");
//     document.documentElement.style.setProperty("--background-color", "#efe7e5");
//     document.documentElement.style.setProperty("--nav-link-color", "black");
//     document.documentElement.style.setProperty("--popup-overlay-color", "white");
//     document.getElementById("dark-light-mode").innerHTML = "Dark mode";
//   } else {
//     darkMode = true;
//     document.documentElement.style.setProperty("--text-color", "white");
//     document.documentElement.style.setProperty("--background-color", "rgba(0, 0, 0, 0.800)");
//     document.documentElement.style.setProperty("--nav-link-color", "white");
//     document.documentElement.style.setProperty("--popup-overlay-color", "rgba(0, 0, 0, 0.950)");
//     document.getElementById("dark-light-mode").innerHTML = "Light mode";
//   }
// }



// Sélection des éléments
const icons = document.getElementById("icons");
const nav = document.getElementById("nav");
const navList = document.getElementById("nav-list");
const links = document.querySelectorAll(".nav-link");

// Ajout d'un événement au clic sur l'icône de burger
icons.addEventListener("click", () => {
    nav.classList.toggle("active");
    icons.classList.toggle("active");
});

// Fermer le menu lorsque l'utilisateur clique sur un lien de navigation
links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
        icons.classList.remove("active");
    });
});



// Ecriture du texte seul
// var aText = new Array("Développeur Junior web et web mobile ");
// var iSpeed = 100; // time delay of print out
// var iIndex = 0; // start printing array at this posision
// var iArrLength = aText[0].length; // the length of the text array
// var iScrollAt = 20; // start scrolling up at this many lines

// var iTextPos = 0; // initialise text position
// var sContents = ""; // initialise contents variable
// var iRow; // initialise current row

// function typewriter() {
//   sContents = " ";
//   iRow = Math.max(0, iIndex - iScrollAt);
//   var destination = document.getElementById("sec-text");

//   while (iRow < iIndex) {
//     sContents += aText[iRow++] + "<br />";
//   }
//   destination.innerHTML =
//     sContents + aText[iIndex].substring(0, iTextPos) + "_";
//   if (iTextPos++ == iArrLength) {
//     iTextPos = 0;
//     iIndex++;
//     if (iIndex != aText.length) {
//       iArrLength = aText[iIndex].length;
//       setTimeout("typewriter()", 500);
//     }
//   } else {
//     setTimeout("typewriter()", iSpeed);
//   }
// }
// typewriter();

//gestion de la rotation des cards de compétences
document.querySelectorAll('.competence-card').forEach(card => {
    const innerCard = card.querySelector('.competence-inner');

    const toggleFlip = () => {
        innerCard.classList.toggle('is-flipped');
    };

    card.addEventListener('click', toggleFlip);
    card.addEventListener('touchend', toggleFlip);
});

