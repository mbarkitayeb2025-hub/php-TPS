<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom">
    <button type="submit">S'inscrire</button>
</form>
<?php
if (isset($_POST['nom'])) {
    echo "Inscription reçue pour : " . htmlspecialchars($_POST['nom']);
    echo "<p>Remarque : Les données ne sont PAS dans l'URL.</p>";
}
?>