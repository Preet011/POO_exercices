<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//require_once __DIR__ . '/controllers/ContactController.php';
require_once __DIR__ . '/autoload.php';

use Controllers\ContactController;
$controller = new ContactController();

$baseURL = 'C:\wamp64\www\POO\exs\04_Autoload_htaccess';

$action = $_GET['action'] ?? 'index/';


if ($action == 'add') {
    $controller->add();
} else {
    $controller->index();
}

?>
