<main>
        <h2>Mes projets</h2>
        <section id="projets">
            <div class="card" onclick="afficherPopup('Projet 1', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./assets/img/Blog-La-Manu.webp" alt="Projet 1">
                </div>
                <div class="container">
                    <h4><b>Blog La Manu</b></h4>
                    <div class="description" style="display: none;">
                        <h1>test</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis enim
                            praesentium, necessitatibus magni a, accusantium accusamus laborum facilis delectus et sequi
                            illo alias molestiae vel nulla, quos dolorum dignissimos. Repellendus necessitatibus enim,
                            eius optio possimus velit tenetur voluptas vitae voluptatem consequuntur ut asperiores ex
                            odio magni tempora, quaerat ratione.
                        </p>
                        <ul>
                            <li>aa</li>
                            <li>aaa</li>
                            <li>aaa</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="card" onclick="afficherPopup('Projet 2', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./assets/img/connexion_Hopital.webp" alt="Projet 2">
                </div>
                <div class="container">
                    <h4><b>Hôpital</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 2</p>
                </div>
            </div>
            <div class="card" onclick="afficherPopup('Projet 3', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./assets/img/GamerZone.webp" alt="Projet 3">
                </div>
                <div class="container">
                    <h4><b>Gamer Zone</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 3</p>
                </div>
            </div>
            <div class="card" onclick="afficherPopup('Projet 4', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./assets/img/LaFringale.webp" alt="Projet 4">
                </div>
                <div class="container">
                    <h4><b>La Fringale Street Food</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 4</p>
                </div>
            </div>
            <!-- <div class="card" onclick="afficherPopup('Projet 5', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./img/img_adhérent.webp" alt="Projet 5">
                </div>
                <div class="container">
                    <h4><b>Projet 5</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 5</p>
                </div>
            </div>
            <div class="card" onclick="afficherPopup('Projet 6', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./img/img_adhérent.webp" alt="Projet 6">
                </div>
                <div class="container">
                    <h4><b>Projet 6</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 6</p>
                </div>
            </div>
            <div class="card" onclick="afficherPopup('Projet 6', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./img/img_adhérent.webp" alt="Projet 6">
                </div>
                <div class="container">
                    <h4><b>Projet 6</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 6</p>
                </div>
            </div>
            <div class="card" onclick="afficherPopup('Projet 6', this.querySelector('.description').innerText)">
                <div class="image-container">
                    <img src="./img/img_adhérent.webp" alt="Projet 6">
                </div>
                <div class="container">
                    <h4><b>Projet 6</b></h4>
                    <p class="description" style="display: none;">Description complète du projet 6</p>
                </div>
            </div> -->
        </section>






        <div id="popup" class="popup-cache">
            <div class="popup-contenu">
                <span class="popup-fermer" onclick="fermerPopup()">&times;</span>
                <h2 id="popup-titre"></h2>
                <p id="popup-description"></p>
            </div>
        </div>