<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/autoload.php';

use Controllers\ContactController;

$baseURL = 'C:\wamp64\www\POO\exs\05_BaseController';
$controller = new ContactController();

$action = $_GET['action'] ?? 'index/';


if ($action == 'add/') {
    $controller->add();
} else {
    $controller->index();
}

?>
