<?php
include __DIR__ . "/../inc/header.php";

?>

<h2>Liste des Contacts</h2>
<ul>
    <?php foreach ($contacts as $cont): ?>
        <li>
            <?php echo htmlspecialchars($cont['name']); ?> -
            <?php echo htmlspecialchars($cont['email']); ?> -
            <?php echo htmlspecialchars($cont['phone']); ?>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Ajouter un nouveau contact</h2>
<form action="<?php echo $baseURL ?>/index.php?action=add" method="POST">
    <input type="text" name="name" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Téléphone" required>
    <button type="submit">Ajouter</button>
</form>

<?php
include __DIR__ . "/../inc/footer.php";
?>