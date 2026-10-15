<?php
require "fonctions.php" ;

$erreurs = [];
$nom = $prenom = $age = $formation = $moyenne = "";
$success = false;

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
        $etudiant = [
            "nom" => $nom,
            "prenom" => $prenom,
            "age" => $age,
            "formation" => $formation,
            "moyenne" => $moyenne
        ];
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un étudiant</title>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
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
            <h2>Étudiant enregistré avec succès !</h2>
            <p>Nom : <?= htmlspecialchars($etudiant['nom']) ?></p>
            <p>Prénom : <?= htmlspecialchars($etudiant['prenom']) ?></p>
            <p>Âge : <?= htmlspecialchars($etudiant['age']) ?> ans</p>
            <p>Formation : <?= htmlspecialchars($etudiant['formation']) ?></p>
            <p>Moyenne : <?= htmlspecialchars($etudiant['moyenne']) ?> / 20</p>
            <p><strong>Résultat : <?= resultat($etudiant['moyenne']) ?></strong></p>
        </div>
    <?php else: ?>
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
            <button type="submit">Ajouter</button>
        </form>
    <?php endif; ?>
</body>
</html>