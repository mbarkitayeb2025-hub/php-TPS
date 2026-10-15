<?php
$erreurs = [];
$nom = $prenom = $age = $formation = $moyenne = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $age = $_POST['age'] ?? '';
    $formation = trim($_POST['formation'] ?? '');
    $moyenne = $_POST['moyenne'] ?? '';

    if (empty($nom)) { $erreurs[] = "Le nom est obligatoire."; }
    if (empty($prenom)) { $erreurs[] = "Le prénom est obligatoire."; }
    if (empty($formation)) { $erreurs[] = "La formation est obligatoire."; }
    
    if (!is_numeric($age) || $age < 16 || $age > 40) {
        $erreurs[] = "L'âge doit être un nombre compris entre 16 et 40 ans.";
    }
    
    if (!is_numeric($moyenne) || $moyenne < 0 || $moyenne > 20) {
        $erreurs[] = "La moyenne doit être comprise entre 0 et 20.";
    }

    if (count($erreurs) === 0) {
        echo "<h2>Étudiant enregistré</h2>";
        echo "Nom : " . htmlspecialchars($nom) . "<br>";
        echo "Prénom : " . htmlspecialchars($prenom) . "<br>";
        echo "Âge : " . htmlspecialchars($age) . " ans<br>";
        echo "Formation : " . htmlspecialchars($formation) . "<br>";
        echo "Moyenne : " . htmlspecialchars($moyenne) . " / 20<br>";
        
        function resultat($moyenne) {
            return $moyenne >= 10 ? "Admis" : "Ajourné";
        }
        echo "Résultat : " . resultat($moyenne);
    }
}

if (count($erreurs) > 0) {
    echo "<div style='color:red;'>";
    foreach ($erreurs as $erreur) {
        echo "<p>$erreur</p>";
    }
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Validation</title>
</head>
<body>
    <h1>Formulaire avec Validation (Activité 5-8)</h1>
    
    <form method="POST">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($nom ?? '') ?>"><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" value="<?= htmlspecialchars($prenom ?? '') ?>"><br><br>

        <label>Âge :</label>
        <input type="number" name="age" value="<?= htmlspecialchars($age ?? '') ?>"><br><br>

        <label>Formation :</label>
        <input type="text" name="formation" value="<?= htmlspecialchars($formation ?? '') ?>"><br><br>

        <label>Moyenne :</label>
        <input type="number" step="0.1" name="moyenne" value="<?= htmlspecialchars($moyenne ?? '') ?>"><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>