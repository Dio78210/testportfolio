<?php



require_once(__DIR__ . "/../models/contact.php");

class contactController
{


    public function createContact(): array
    {
        // var_dump($_POST);

        $messages = [];


        //verif au btn submit
        if (isset($_POST["submit"])) {

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Erreur CSRF : le formulaire n'est pas valide.");
            }

            // Validation des champs
            $nom = trim($_POST["nom"]);
            $prenom = trim($_POST["prenom"]);
            $email = trim($_POST["email"]);
            $objet = trim($_POST["objet"]);
            $message = trim($_POST["message"]);

            // verif du nom
            if (!isset($_POST["nom"]) || strlen($_POST["nom"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Votre nom doit avoir au moins 1 caractère"
                ];
            }

            //verif du prenom
            if (!isset($_POST["prenom"]) || strlen($_POST["prenom"]) == 0) {
                $messages[] = [
                    "success" => false,
                    "text" => "Votre prénom doit avoir au moins 1 caractère"
                ];
            }

            //verif de l'email
            if (!isset($_POST['email']) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $messages[] = [
                    "success" => false,
                    "text" => " Votre email n'est pas valide"
                ];
            }

            if (strlen($objet) == 0) {
                $messages[] = [
                    "success" => false, 
                    "text" => "L'objet ne peut pas être vide"
                ];
            }

            if (strlen($message) == 0) {
                $messages[] = [
                    "success" => false, 
                    "text" => "Le message ne peut pas être vide"
                ];
            }

            

            if (count($messages) == 0) {
                // verification du textarea ne pas pouvoir injecter des données comme du script
            $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            $objet = htmlspecialchars($objet, ENT_QUOTES, 'UTF-8');
            $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
                $messages[] = [
                    "success" => true,
                    "text" => "Votre message a bien été envoyé."
                ];

                Contact::create($_POST["nom"], $_POST["prenom"], $_POST['email'], $objet, $message);
            }
        }
        return $messages;

        

    }
    
}
