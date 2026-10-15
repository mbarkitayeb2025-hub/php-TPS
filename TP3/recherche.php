<form method="GET">
    <label>Rechercher un étudiant :</label>
    <input type="text" name="q">
    <button type="submit">Chercher</button>
</form>
<?php
if (isset($_GET['q'])) {
    echo "Vous recherchez : " . htmlspecialchars($_GET['q']);
}
?>