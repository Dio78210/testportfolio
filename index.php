<?php


define("CSS","main");
define("SCRIPT","script");


require_once(__DIR__ . "/controllers/ContactController.php");

$ContactController = new contactController;
$messages = $ContactController->createContact();


include(__DIR__."/assets/includes/head.php");
include(__DIR__."/assets/includes/nav.php");
include(__DIR__."/assets/includes/header.php");
include(__DIR__."/views/projets.php");
include(__DIR__."/views/competences.php");
include(__DIR__."/views/tarifs.php");
include(__DIR__."/views/contact.php");
include(__DIR__."/assets/includes/footer.php");





?>