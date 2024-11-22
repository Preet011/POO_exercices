<?php 

class Library {

    public $books = [];

    // Pour ajouter un livre dans le tableau de livres 
    public function add($book) {
        $this->books[] = $book;
    }

    // Pour afficher les livres si on a quelques dans ce tableau
    public function showBooks() {
        if(empty($this->books)) {
            echo "Y'a pas de livres ! Nada <br>";
        } else {
            foreach($this->books as $book) {
               echo $book->getInfos(); 
            }
            
        }
    }

}


?>