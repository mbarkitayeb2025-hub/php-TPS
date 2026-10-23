<?php
session_start();
require 'fonctions.php'; 
protegerPage(); 
?>
<h1>Tableau de bord</h1>
<p>Bienvenue dans votre espace d'administration, <?php echo htmlspecialchars($_SESSION['username']); ?>.</p>
<a href="logout.php">Se déconnecter</a>