<?php
require 'utilisateur.php'; 

$erreurs = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($username)) {
        $erreurs[] = "Le nom d'utilisateur est obligatoire.";
    } elseif (isset($_SESSION['users'][$username])) {
        $erreurs[] = "Ce nom d'utilisateur existe déjà."; 
    }

    if (strlen($password) < 6) {
        $erreurs[] = "Le mot de passe doit contenir au moins 6 caractères.";
    }

    if ($password !== $confirm_password) {
        $erreurs[] = "Les deux mots de passe ne sont pas identiques.";
    }

    if (count($erreurs) === 0) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['users'][$username] = $hash;
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Créer un compte</h1>

    <?php if ($success): ?>
        <p style="color: green;">Compte créé avec succès ! <a href="login.php">Se connecter</a></p>
    <?php else: ?>
        
        <?php if (count($erreurs) > 0): ?>
            <div style="color: red;">
                <?php foreach ($erreurs as $e): ?>
                    <p><?= htmlspecialchars($e) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label>Nom d'utilisateur :</label><br>
            <input type="text" name="username" value="<?= htmlspecialchars($username ?? '') ?>"><br><br>

            <label>Mot de passe (min 6 car.) :</label><br>
            <input type="password" name="password"><br><br>

            <label>Confirmer le mot de passe :</label><br>
            <input type="password" name="confirm_password"><br><br>

            <button type="submit">S'inscrire</button>
        </form>
        <p><a href="login.php">Déjà un compte ? Connectez-vous</a></p>
    <?php endif; ?>
</body>
</html>