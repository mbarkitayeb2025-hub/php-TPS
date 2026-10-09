<!DOCTYPE html>
<html>
<body>

<form method="get">
    Nom: <input type="text" name="nom"><br><br>
    Prénom: <input type="text" name="prenom"><br><br>
    Âge: <input type="text" name="age"><br><br>
    Formation: <input type="text" name="formation"><br><br>
    Moyenne: <input type="text" name="moyenne"><br><br>
    <button type="submit">Envoyer</button>
</form>

<hr>

<?php
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $age = $_GET['age'];
    $formation = $_GET['formation'];
    $moyenne = $_GET['moyenne'];

    echo "<h2>FICHE ÉTUDIANT</h2>";
    echo "<p>Nom : $nom</p>";
    echo "<p>Prénom : $prenom</p>";
    echo "<p>Âge : $age</p>";
    echo "<p>Formation : $formation</p>";
    echo "<p>Moyenne : $moyenne</p>";

    if ($moyenne >= 10) {
        echo "<p>Résultat : Admis</p>";
    } else {
        echo "<p>Résultat : Ajourné</p>";
    }
}
?>

</body>
</html>