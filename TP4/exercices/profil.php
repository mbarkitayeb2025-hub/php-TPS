<?php
session_start();
echo "Bonjour " . $_SESSION['nom'] . "<br>";
echo "Nom : " . $_SESSION['nom'] . "<br>";
echo "Prénom : " . $_SESSION['prenom'] . "<br>";
echo "Formation : " . $_SESSION['formation'] . "<br>";
echo "Âge : " . $_SESSION['age'] . "<br>";
echo "Email : " . $_SESSION['email'];