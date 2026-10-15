<?php
// Check if the data exists before trying to use it (to avoid warnings)
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    
    echo "<h2>Résultats (Méthode GET) :</h2>";
    echo "Nom : " . htmlspecialchars($nom) . "<br>";
    echo "Prénom : " . htmlspecialchars($prenom) . "<br>";
    echo "<p>Regarde l'URL dans ton navigateur ! Les données sont visibles.</p>";
    echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice GET</title>
</head>
<body>
    <h1>Formulaire Étudiant (GET)</h1>
    
    <!-- By default, a form sends data via GET, but we specify it for clarity -->
    <form method="GET">
        <label>Nom :</label>
        <input type="text" name="nom"><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom"><br><br>

        <label>Âge :</label>
        <input type="number" name="age"><br><br>

        <label>Formation :</label>
        <input type="text" name="formation"><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>