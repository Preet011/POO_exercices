<?php
require_once __DIR__ . "/config/Database.php";
require_once __DIR__ . "/models/Contact.php";

// Gérer l'ajout des contacts ici ainsi que la récupération de tous les contacts
$data = new Database();
$pdo = $data->getConnection();


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

$contact = new Contact($name, $email, $phone);
$contact->save($pdo);
} else {
    echo  "<p style= color:red> ERROR new contact</p>";
}

$contacts = Contact::getAll($pdo);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Carnet de Contact</h1>

    <h2>Liste des Contacts</h2>
    <ul>
        <?php foreach($contacts as $contact):?>
            <li>
                <?php
                // foreach to get all every contacts info
                echo htmlspecialchars($contact['name']) . " - ".  htmlspecialchars($contact['email']) ." - ". htmlspecialchars($contact['phone']);
                ?>
            </li>
            <?php endforeach; ?>
    </ul>

    <h2>Ajouter un nouveau contact</h2>
    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Téléphone">
        <button type="submit">Ajouter</button>
    </form>

</body>
</html>
