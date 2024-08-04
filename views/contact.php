<?php



if (empty($_SESSION['csrf_token']) || empty($_SESSION['csrf_token_expiry']) || $_SESSION['csrf_token_expiry'] < time()) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    $_SESSION['csrf_token_expiry'] = time() + 3600; // Le jeton expire dans 1 heure
}
$csrf_token = $_SESSION['csrf_token'];



if (count($messages) > 0) {
    foreach ($messages as $message) {
        if ($message["success"]) { ?>
            <p class="alert alert-success"><?= $message["text"] ?></p>
        <?php } else { ?>
            <p class="alert alert-danger"><?= $message["text"] ?></p>
<?php }
    }
} ?>


<h2 id="contact">Contactez-moi</h2>
<form action="#" method="POST" id="contact-form">
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
    </div>

    <div class="form-group">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="objet">Objet:</label>
        <input type="text" id="objet" name="objet" required>
    </div>

    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <input type="hidden" name="csrf_token" value="<?= $csrf_token; ?>">
    <input type="submit" name="submit" value="Envoyer">
</form>





</main>