<?php

namespace Models\Repository;

use Config\Database;
use PDO;

abstract class BaseRepository
{
    protected $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function getAllContacts() {

        $query = "SELECT * FROM contacts ORDER BY created_at DESC";
        $result = $this->pdo->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    }