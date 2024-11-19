<?php

// Gestion des requêtes ici !

class Contact{

    private $name;
    private $email;
    private $phone;

    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public static function getAll($pdo){
        $stmt = $pdo->query("SELECT * FROM contacts ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
       // echo $stmt;
    }
    public function save($pdo){
        $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone ) VALUES (?, ?, ?)");
        $stmt->execute([$this->name,$this->email,$this->phone]);
    }

}
