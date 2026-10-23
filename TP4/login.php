<?php
require 'utilisateur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($_SESSION['users'][$username]) && password_verify($password, $_SESSION['users'][$username])) {
        
        $_SESSION['username'] = $username;
        $_SESSION['connecte'] = true;
        
        header("Location: dashboard.php");
        exit;
        
    } else {
        echo "<p style='color:red;'>Identifiants incorrects.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Connexion</h1>
    
    <form method="POST">
        <label>Nom d'utilisateur :</label><br>
        <input type="text" name="username"><br><br>
        <label>Mot de passe :</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Se connecter</button>
    </form>

    <p><a href="inscription.php">Créer un compte</a></p>
</body>
</html>