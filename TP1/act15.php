<!DOCTYPE html>
<html>
<body>

<form method="get">
    <label>Votre nom: </label>
    <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>

<?php
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    echo "<p>Bonjour $nom !</p>";
}
?>

</body>
</html>