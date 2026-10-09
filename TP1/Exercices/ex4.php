<!DOCTYPE html>
<html>
<head>
    <style>
        .carte {
            border: 2px solid black;
            padding: 20px;
            width: 300px;
            background-color: #f4f4f4;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<form method="get">
    Nom: <input type="text" name="nom"><br><br>
    Prénom: <input type="text" name="prenom"><br><br>
    Date de naissance: <input type="date" name="date"><br><br>
    Ville: <input type="text" name="ville"><br><br>
    Profession: <input type="text" name="profession"><br><br>
    <button type="submit">Créer la carte</button>
</form>
<br>

<?php
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $date = $_GET['date'];
    $ville = $_GET['ville'];
    $profession = $_GET['profession'];

    echo "<div class='carte'>";
    echo "<h3>Carte d'identité</h3>";
    echo "<p><b>Nom :</b> $nom</p>";
    echo "<p><b>Prénom :</b> $prenom</p>";
    echo "<p><b>Né(e) le :</b> $date</p>";
    echo "<p><b>Ville :</b> $ville</p>";
    echo "<p><b>Profession :</b> $profession</p>";
    echo "</div>";
}
?>

</body>
</html>