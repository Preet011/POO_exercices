<?php

/** Exercice 1 : Déclaration d'une classe
 *
 *  Objectif : Déclarer une classe et ajouter des propriétés et des méthodes
 *
 *  1 . Créer une classe Animal avec une propriété nom = 'Rex'
 *
 *  2 . Ajouter une méthode faireDuBruit() qui doit afficher "Je fais du bruit";
 *
 *  3 . Instancier la classe Animal et faire en sorte d'appeler la méthode faireDuBruit();
 *
 */
// class Animal {
//     public $nom = 'Rex';

//     public function faireDuBruit(){
//         echo 'je fais du bruit';
//     }
//  }

//  $animal1 = new Animal();
//  $animal1->faireDuBruit();




/** Exercice 2 : Ajouter des propriétés et méthodes
 *
 *  Objectif : Ajouter des propriétés et méthodes supplémentaires
 *
 *  1 . Modifier la classe Animal pour ajouter une propriété espece = 'Chien'
 *
 * 2 . Ajouter une méthode afficherInfo() qui affiche le nom et l'espece de l'animal
 *
 */

/* class Animal {
    public $nom = 'Rex';
    public $espece = 'Chien';

    public function faireDuBruit(){
        echo 'je fais du bruit';
    }

    public function afficherInfo(){
        echo "je m'appelle $this->nom et je suis un $this->espece";
    }
}

 $animal1 = new Animal();
 $animal1->afficherInfo();


/** Exercice 3 : Utilisation du constructeur
 *
 *  Objectif : Utiliser un constructeur pour initialiser les propriétés
 *
 *  1 . Créer un constructeur dans la classe Animal pour initialiser les propriétés nom et espece
 *
 *  2 . Créer un objet en instanciant la classe Animal
 *
 */
// class Animal
// {
//     public $nom;
//     public $espece;

//     public function __construct($nom, $espece)
//     {
//         $this->nom = $nom;
//         $this->espece = $espece;
//     }

//     public function faireDuBruit()
//     {
//         echo 'je fais du bruit';
//     }

//     public function afficherInfo()
//     {
//         echo "Cet animal est un $this->espece et son nom est $this->nom";
//     }
// }

// $animal1 = new Animal('Rex', 'Chien');
// $animal1->faireDuBruit();
// echo '<br>';
// $animal1->afficherInfo();


/** Exercice 4 : Visibilité des propriétés
 *
 *  Objectif : Démontrer les différents niveaux de visibilité des propriétés
 *
 *  1 . Créer une classe Personne avec les propriétés nom (public), age(private) et adresse (protected)
 *
 *  2 . Instancier la classe Personne et tenter d'appeler chaque propriété (afficher chacune), voir le résultat
 *
 *
 */

// class Personne
// {
//     public $nom = 'Jeremy';
//     private $age = 32;
//     protected $adresse = "Quelque part dans le monde";
// }

// $jeremy = new Personne();

// echo "<br>$jeremy->nom";
// echo $jeremy->age;
// echo $jeremy->adresse;



/** Exercice 5 : Héritage
 *
 *  Objectif : Utiliser l'héritage pour étendre une classe existante
 *
 *  1 . Créer une classe Employe qui hérite de la classe Personne
 *
 *  2 . Ajouter une propriété salaire à l'employé et une méthode pour afficher les informations de l'employé comme : 'Cet employé s'appelle 'nom, il a 'age' ans et son salaire est de 'salaire' € par mois';
 *
 *
 */

class Personne
{
    public $nom;
    private $age;
    public $adresse;
    // public $newAge;

    public function __construct($nom, $age, $adresse)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->adresse = $adresse;
        // $this->newAge = $newAge;
    }

    // Getter pour accéder à la propriété privée $age
    public function getAge() {
        return $this->age;
    }

    // public function newAge() {
    //     $this->newAge = $this->age;
    //     return $this->newAge;

    //

}

class Employe extends Personne
{
    private $salaire;

    // Constructeur de Employe
    public function __construct($nom, $age, $adresse, $salaire)
    {
        // Appel au constructeur parent pour initialiser les propriétés héritées
        parent::__construct($nom, $age, $adresse);
        $this->salaire = $salaire;
    }

    public function showEmployeSalaire()
    {
        echo "Cet employé s'appelle $this->nom, il a " . $this->getAge() . " ans et son salaire est de $this->salaire € par mois.";
    }
}

$personne1 = new Employe('Antoine', 28, 'Quelque part', 1700);
$personne1->showEmployeSalaire();


/** Exercice 6 : Méthode parent::
 *
 * Objectif: utiliser le mot clé parent:: pour passer la valeur d'une propriété depuis une classe enfant à la classe mère
 *
 *  1 . Créer une classe animal avec la propriété $race méthode 'faireDuBruit()' qui affichera 'le cri de $this->race';
 *
 *  2 . Créer une classe Chien qui etend Animal avec la même propriété et méthode 'faireDuBruit()' qui affichera 'est l'aboiement', Ne pas oublier le constructeur dans la classe Chien
 *
 *
 */

class Animal
{
    protected $race;

    public function faireDubruit()
    {
        echo "<br> Le cri de $this->race ";
    }
}

class Chien extends Animal
{
    protected $race;

    public function __construct($race)
    {
        $this->race = $race;
    }
    public function faireDuBruit()
    {
        parent::faireDubruit();
        echo "est l'aboiement";
    }
}

$chien1 = new Chien("Pitbull");
$chien1->faireDuBruit();

/** Exercice 7 : Encapsulation
 *
 *  Objectif : Utiliser l'encapsulation pour protéger les données
 *
 *  1 . Créer une classe compteBancaire avec une propriété solde
 *
 *  2 . Créer une méthode pour afficher le solde du compte
 *
 *  3 . Créer une méthode pour déposer de l'argent sur le compte
 *
 *  4 . La propriété ne doit pas pouvoir être modifiée depuis l'exterieur de la classe
 *
 *
 */

class CompteBancaire
{
    private $solde = 0;

    public function afficheSolde()
    {
        echo "<br> le solde de ce compte est $this->solde €";
    }

    public function deposer($n)
    {
        $this->solde += $n;
    }
}

$compte1 = new CompteBancaire();
$compte1->afficheSolde();
$compte1->deposer(30);
$compte1->afficheSolde();




/** Exercice 8 : BONUS
 *
 *  1 . Créer une classe Humain avec en propriété nom,age,adresse
 *
 *  2 . Ajouter une méthode qui vérifie si l'age est un nombre positif, si c'est le cas , affecter sa valeur à $age, sinon, envoyer un message d'erreur
 */

class Humain
{
    private $age;

    public function verifAge($n)
    {
        if ($n < 0) {
            echo '<p> L\'age est négatif </p>';
        } else {
            $this->age = $n;
            echo "<p> Votre age est positif ! </p>";
        }
    }

    public function showAge()
    {
        echo $this->age . " ans";
    }
}

$humain1 = new Humain();
$humain1->verifAge(20);
$humain1->showAge();
