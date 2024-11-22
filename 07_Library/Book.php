<?php 

class Book {
    public $title;
    public $author;
    public $date;

    public function __construct($title, $author, $date)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
    }

    public function getInfos() {
        return "Titre: " . " " . $this->title . " , Auteur: " . $this->author .  " , Date: " . $this->date . "<br>" ;
    }

}

?>