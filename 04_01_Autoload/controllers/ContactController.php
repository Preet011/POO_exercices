<?php
//require_once __DIR__ . '/../models/Contact.php';

namespace Controllers;


use Models\Contact;

class ContactController {

   public $contact;

    public function __construct() {
        $this->contact = new Contact();
    }


    public function list() {
        // Récupérer tous les contacts


        $contacts = $this->contact->getAllContacts();

        include __DIR__ . "/../views/contact.php";

    }

    public function addContact() {
        global $baseURL;

        // Si le formulaire est soumis avec récupération des valeurs, alors on ajoute un nouveau contact
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if ($this->contact->addContact($name, $email, $phone)) {
                echo "Contact ajouté avec succès.";
            } else {
                echo "Erreur lors de l'ajout du contact.";
            }
            header("Location : " .$baseURL . "/index.php?action=index");
        }
    }


}



?>