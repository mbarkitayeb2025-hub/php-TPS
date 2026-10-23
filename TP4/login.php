<?php
session_start();

$usernameCorrect = "admin";
$passwordCorrect = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $usernameCorrect && $password === $passwordCorrect) {
        
        $_SESSION['username'] = $username;
        $_SESSION['connecte'] = true;
        
        header("Location: dashboard.php");
        exit;
        
    } else {
        echo "Identifiants incorrects.";
    }
}
?>

<form method="POST">
    <label>Nom d'utilisateur : </label>
    <input type="text" name="username"><br>
    <label>Mot de passe : </label>
    <input type="password" name="password"><br>
    <button type="submit">Se connecter</button>
</form>