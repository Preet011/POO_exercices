<?php
echo "<h2>Class Animale</h2>";
// EXERCICE 1
class Animale {
    public $nom = "Rex";
    public $espece = "Chien";

// EXERCICE 3
    public function __construct($nom, $espece)
    {
        $this->nom = $nom;
        $this->espece = $espece;
    }
    public function faireDuBruit(){
        echo "Je fais du bruit" . " - ";
    }
// EXERCICE 2
    public function afficherInfo(){
        echo $this->nom . " - " . $this->espece . "<br>";
    }

}

$animal = new Animale("Rex", "Chien");
$animal->faireDuBruit();
$animal->afficherInfo();

echo "<h2>Class Person</h2>";
class Person {
    public $nom;
    private $age;
    protected $address;

    public function __construct($nom, $age, $address)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayInfo(){
        echo "Nom: " . $this->nom . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Address: " . $this->address . "<br>";
    }


}

$person = new Person("Alice", "25", "Ontario");
$person->displayInfo();

echo "<h2>Class Person extends Employe</h2>";
class Employe extends Person {
    private $salaire;

    public function __construct($nom, $age, $address, $salaire)
    {

        $this->nom = $nom;
        $this->age = $age;
        $this->address = $address;
        $this->salaire = $salaire;
    }
    public function afficherInfos(){
        echo  "Cet employé s'appelle ". $this->nom .  ", il a ". $this->age .  " ans et son salaire est de ". $this->salaire .  "€ par mois";
    }

}
$employe = new Employe("Sam", "25", "Ontario", 2500);
$employe->afficherInfos();


echo "<h2>Class Animal extends Chien</h2>";

class Animal {
    public $race;

    public function __construct($race){
        $this->race = $race;
    }

    public function faireDuBruit(){
        echo "le cri de " .  $this->race;
    }
}

class Chien extends Animal{
    public function __construct($race)
    {
        parent::__construct($race);

    }
    public function faireDuBruit(){

        parent::faireDuBruit();
        echo " est l'aboiement" . "<br>" ;
    }
}
$chien = new Chien("Pug");
$chien->faireDuBruit();

echo "<h2></h2>";
class Account{
    private $solde;

    // Public function __construct($solde)
    // {
    //     $this->solde = $solde;
    // }

    Public function displaySolde(){
        echo "Solde: " . $this->solde . "<br>" ;
    }

    Public function deposit ($amount){
        $this->solde += $amount;
    }
}

$account = new Account(200);
$account->displaySolde();
$account->deposit(50);
$account->displaySolde();


echo "<h2></h2>";
class Human {
    public $nom;
    public $age;
    protected $address;

    public function __construct($nom, $age, $address)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->address = $address;
    }

    Public function displayInfos(){
        if ((int) $this->age > 0) {
            echo "Nom: " . $this->nom . "<br>";
            echo "Age: " . $this->age . "<br>";
            echo "Address: " . $this->address . "<br>";
        } else{
            echo "Error: Age has to be a positive number";
        }
    }
}
$human = new Human("Alice", "-15", "Jakarta");
$human->displayInfos();
?>