<?php
session_start();
$_SESSION['nom'] = "Ahmed";
$_SESSION['prenom'] = "Ali";
$_SESSION['formation'] = "Informatique";
$_SESSION['age'] = 20;
$_SESSION['email'] = "ahmed@example.com";

echo "Session créée avec succès !";
?>