<?php
require_once './controllers/contactController.php';

$controller = new ContactController();
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        if($action === 'list'){
            $contacts =  $controller->listContacts();
            //var_dump($contacts);
            include './views/contactList.php';
        }

        else if ($action === 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $controller->addContact($name, $email, $phone);
            header("Location: index.php");
            exit();
        } else {
            header("Location: 404.php");
            }
?>