<?php
session_start();
require 'fonctions.php'; 
protegerPage(); // This kicks you out if you aren't logged in
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
</head>
<body>
    <h1>Tableau de bord</h1>
    <p>Bienvenue dans votre espace d'administration, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>.</p>

    <hr>

    <h2>Gestion des étudiants</h2>
    <ul>
        <li><a href="index.php">Liste des étudiants</a></li>
        <li><a href="ajouter.php">Ajouter un étudiant</a></li>
        <li><a href="rechercher.php">Rechercher un étudiant</a></li>
    </ul>

    <h2>Mon compte</h2>
    <ul>
        <li><a href="modifier_mdp.php">Modifier mon mot de passe</a></li>
        <li><a href="logout.php">Se déconnecter</a></li>
    </ul>
</body>
</html>