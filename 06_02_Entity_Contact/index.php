<?php


require_once  './autoload.php';

use Controllers\ContactController;



 $controller = new ContactController();

// $controller->addContact();
// $controller->index();

$action = $_GET['action'] ?? 'index/';


if ($action == 'add/') {
    $controller->add();
} else {
    $controller->index();
}

?>
