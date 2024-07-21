// Variable pour suivre l'état du mode sombre
let darkMode = false;

// Fonction pour basculer entre le mode sombre et le mode clair
export function changeDarkMode() {
    if (darkMode) {
        // Passer au mode clair
        darkMode = false;
        document.documentElement.style.setProperty("--text-color", "black");
        document.documentElement.style.setProperty("--background-color", "#efe7e5");
        document.documentElement.style.setProperty("--nav-link-color", "black");
        document.documentElement.style.setProperty("--popup-overlay-color", "white");
        document.getElementById("dark-light-mode").innerHTML = "Dark mode";
    } else {
        // Passer au mode sombre
        darkMode = true;
        document.documentElement.style.setProperty("--text-color", "white");
        document.documentElement.style.setProperty("--background-color", "rgba(0, 0, 0, 0.800)");
        document.documentElement.style.setProperty("--nav-link-color", "white");
        document.documentElement.style.setProperty("--popup-overlay-color", "rgba(0, 0, 0, 0.950)");
        document.getElementById("dark-light-mode").innerHTML = "Light mode";
    }
}
