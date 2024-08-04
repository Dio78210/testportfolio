<?php


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require(__DIR__ . "/../PHPMailer/src/Exception.php");
require(__DIR__ . "/../PHPMailer/src/PHPMailer.php");
require(__DIR__ . "/../PHPMailer/src/SMTP.php");

require_once(__DIR__ . "/../assets/includes/database.php");

class Contact
{

    public int $id_contact;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $objet;
    public string $message;


    public static function create(string $nom, string $prenom, string $email, string $objet, string $message)
    {
        global $pdo;

        $sql = "INSERT INTO messages (nom, prenom, email, objet, message)
                VALUES (:nom, :prenom, :email, :objet, :message)";

        $statement = $pdo->prepare($sql);

        $statement->bindParam(":nom", $nom, PDO::PARAM_STR);
        $statement->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":objet", $objet, PDO::PARAM_STR);
        $statement->bindParam(":message", $message, PDO::PARAM_STR);

        $statement->execute();

        $mail = new PHPMailer(true);

        //config DE LA CONNEXION A LA BOITE MAIL

        //$mail->SMTPDebug = SMTP::DEBUG_SERVER; //je veux des messages de debug

        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Username = "damien.devweb@gmail.com";
            $mail->Password = GMAIL_KEY; //faire un define dans un gitignore "GMAIL_KEY"
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //charset
            $mail->CharSet = "utf-8";

            //envoie
            $mail->setFrom($email, "$nom $prenom"); //expediteur qui envoie le mail
            $mail->addAddress("damien.devweb@gmail.com"); //recuperation de l'adresse mail destinatrice depuis le form destinataire qui reçois le mail

            $mail->addReplyTo($email, "$nom $prenom");

            $mail->isHTML(true);
            $mail->Subject = $objet;
            $mail->Body = $message;
            $mail->send();
        } catch (Exception $e) {
            return "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
        }
    }

    public static function readAll(): array
    {
        //recueration de $pdo comme variable global
        global $pdo;

        $sql = "SELECT * FROM contact";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, "Contact");
        $contacts = $statement->fetchAll();

        return $contacts;
    }
}
