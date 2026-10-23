<?php
require 'utilisateur.php';
require 'fonctions.php';

protegerPage(); // Uses the function from fonctions.php!

$erreurs = [];
$success = false;
$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old_password = $_POST['old_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (!password_verify($old_password, $_SESSION['users'][$username])) {
        $erreurs[] = "L'ancien mot de passe est incorrect.";
    }
    
    if (strlen($new_password) < 6) {
        $erreurs[] = "Le nouveau mot de passe doit contenir au moins 6 caractères.";
    }
    
    if ($new_password !== $confirm_password) {
        $erreurs[] = "Les nouveaux mots de passe ne sont pas identiques.";
    }

    if (count($erreurs) === 0) {
        $_SESSION['users'][$username] = password_hash($new_password, PASSWORD_DEFAULT);
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier mot de passe</title>
</head>
<body>
    <h1>Modifier mon mot de passe</h1>
    <a href="dashboard.php">← Retour au tableau de bord</a><br><br>

    <?php if ($success): ?>
        <p style="color: green;">Mot de passe modifié avec succès !</p>
    <?php endif; ?>

    <?php if (count($erreurs) > 0): ?>
        <div style="color: red;">
            <?php foreach ($erreurs as $e): ?>
                <p><?= htmlspecialchars($e) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Ancien mot de passe :</label><br>
        <input type="password" name="old_password"><br><br>

        <label>Nouveau mot de passe (min 6) :</label><br>
        <input type="password" name="new_password"><br><br>

        <label>Confirmer le nouveau mot de passe :</label><br>
        <input type="password" name="confirm_password"><br><br>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>