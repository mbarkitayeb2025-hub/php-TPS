<?php
require 'fonctions.php';

$id = $_GET['id'] ?? null;
$erreurs = [];
$success = false;

if ($id === null || !isset($etudiants[$id])) {
    header('Location: index.php');
    exit;
}

$etudiant = $etudiants[$id];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $age = $_POST['age'] ?? '';
    $formation = trim($_POST['formation'] ?? '');
    $moyenne = $_POST['moyenne'] ?? '';

    if (empty($nom)) { $erreurs[] = "Le nom est obligatoire."; }
    if (empty($prenom)) { $erreurs[] = "Le prénom est obligatoire."; }
    if (empty($formation)) { $erreurs[] = "La formation est obligatoire."; }
    if (!is_numeric($age) || $age < 16 || $age > 40) { $erreurs[] = "L'âge doit être entre 16 et 40."; }
    if (!is_numeric($moyenne) || $moyenne < 0 || $moyenne > 20) { $erreurs[] = "La moyenne doit être entre 0 et 20."; }

    if (count($erreurs) === 0) {
        $_SESSION['etudiants'][$id] = [
            "nom" => $nom,
            "prenom" => $prenom,
            "age" => $age,
            "formation" => $formation,
            "moyenne" => $moyenne
        ];
        $success = true;
        $etudiant = $_SESSION['etudiants'][$id];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un étudiant</title>
</head>
<body>
    <h1>Modifier un étudiant</h1>
    <a href="index.php">← Retour à l'accueil</a>
    <br><br>

    <?php if (count($erreurs) > 0): ?>
        <div style="color:red;">
            <?php foreach ($erreurs as $e): ?>
                <p><?= $e ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div style="color:green; border: 1px solid green; padding: 10px;">
            <h2>Étudiant modifié avec succès !</h2>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($etudiant['nom'] ?? '') ?>"><br><br>
        <label>Prénom :</label>
        <input type="text" name="prenom" value="<?= htmlspecialchars($etudiant['prenom'] ?? '') ?>"><br><br>
        <label>Âge :</label>
        <input type="number" name="age" value="<?= htmlspecialchars($etudiant['age'] ?? '') ?>"><br><br>
        <label>Formation :</label>
        <input type="text" name="formation" value="<?= htmlspecialchars($etudiant['formation'] ?? '') ?>"><br><br>
        <label>Moyenne :</label>
        <input type="number" step="0.1" name="moyenne" value="<?= htmlspecialchars($etudiant['moyenne'] ?? '') ?>"><br><br>
        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>