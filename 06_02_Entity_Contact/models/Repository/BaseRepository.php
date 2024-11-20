<?php

namespace Models\Repository;

use Models\Database;


abstract class BaseRepository
{
    protected $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function getAllContacts() {

        $query = "SELECT * FROM contacts ORDER BY created_at DESC";
        $result = $this->pdo->query($query);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    }