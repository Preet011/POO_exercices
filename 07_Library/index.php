<?php

require_once "Book.php";
require_once "Library.php";

$firstBook = new Book("Sapin", "Jean Paul", "25 Décembre 1990");
$secondBook = new Book("Flanders", "Matt Groening", "12 Avril 2020");
$thirdBook = new Book("La lune ensoleillée", "Valérian", "25 Juillet 2004");

$library = new Library();
//$library->showBooks();

$library->add($firstBook);
// $library->add($secondBook);
// $library->add($thirdBook);
$library->showBooks();


?>