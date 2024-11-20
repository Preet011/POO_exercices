<?php

require_once  __DIR__ . "/../config/Database.php";

class Contact {

    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    // Ajouter un contact
    public function addContact($name, $email, $phone) {
        $query = "INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)";
        $result = $this->pdo->prepare($query);

        // Lier les paramètres
        $result->bindParam(':name', $name);
        $result->bindParam(':email', $email);
        $result->bindParam(':phone', $phone);
        return $result->execute();
    }

    // Récupérer tous les contacts
    public function getAllContacts() {
        $query = "SELECT * FROM contacts";
        $result = $this->pdo->query($query);
        //var_dump($result);
        $result->execute();
        var_dump($result);
        return $result->fetchAll(PDO::FETCH_ASSOC);


    }
}
