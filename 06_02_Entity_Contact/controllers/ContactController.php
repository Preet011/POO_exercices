<?php

namespace Controllers;

use Models\Entity\Contact;
use Models\Repository\ContactRepository;

class ContactController extends BaseController {
   // private $contactModel;

    public function __construct() {
        $this->contactModel = new Contact();
    }

    public function index() {
        $contactsRepo = new ContactRepository();
        $contacts = $contactsRepo->getAllContacts();
        // Utiliser render pour afficher la vue avec les données
        $this->render('contacts', ['contacts' => $contacts]);
    }

    public function add() {
        global $baseURL;

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'] ?? null;


        $repository = new ContactRepository();
        if ($repository->insertContact($name, $email, $phone)) {
            echo "L'employé a été ajouté avec succès.";
        } else {
            echo "Erreur lors de l'insertion.";
        }
            //$this->contactModel->insertContact($name, $email, $phone);

            // Redirige vers la liste des contacts

            header("Location: " . $baseURL . "/index/");
            exit;
        }
        // Affiche le formulaire d'ajout si la requête n'est pas POST
        $this->render('contacts');
    }
}
?>
