<?php
require_once './models/Contact.php';

class ContactController {

    private $contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }

    public function listContacts(){
       return $this->contact->getAllContacts();
    }
    public function addContact($name, $email, $phone){
        return $this->contact->addContact($name, $email, $phone);
     }
}
?>