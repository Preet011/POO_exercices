<?php

$baseURL = "C:\wamp64\www\POO\exs\03_02_Contact_MVC_CR";

 //require_once 'controllers/ContactController.php';

 require_once 'autoload.php';
 
use Controllers\ContactController;

$contact = new ContactController();


$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Gère l'affichage de la page d'accueil
if($action === 'add'){
    $contact->addContact();
} else {
    $contact->list();
}

?>

