<?php
namespace Models\Repository;

use Models\Entity;


class ContactRepository extends BaseRepository
{
public function addContact($name, $email, $phone) {

    $query = "INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)";
    $result = $this->pdo->prepare($query);
    $result->bindParam(":name", $name);
    $result->bindParam(":email", $email);
    $result->bindParam(":phone", $phone);

    try {
        return $result->execute();
    } catch (\PDOException $e) {
        error_log($e->getMessage(), 0);
        echo 'Il y a eu un problème lors de l\'insertion.';
    }
}

}
?>