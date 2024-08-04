<header id="accueil">
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

        <div class="intro-text">
            <h1>Bienvenue sur mon portfolio</h1>
            <p>Après 10 ans dans le transport et la logistique, je voulais changer et apprendre un métier où je ne
                m'ennuierais pas. À la fin de ces 10 ans, j'étais dans un atelier de reprographie où je m'occupais du
                paramétrage réseau des clients. Je me suis donc intéressé au web et après quelques mois de recherche et
                un stage de quelques jours en entreprise, je me suis réorienté vers le développement web. J'ai obtenu
                mon diplôme Bac +2 développeur Web et Web mobile en 2023. Et je continue toujours à apprendre de ce
                métier si passionnant.</p>
        </div>
        <img src="./assets/img/photoProfil2.webp" alt="Photo de profil" class="profile-photo">
    </header>