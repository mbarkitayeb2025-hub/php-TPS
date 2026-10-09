<?php
$prenom = "Ahmed";
$nom = "Ali";

// First, glue the first and last name together with a space
$nomComplet = $prenom . " " . $nom;

// Second, store the rest of the sentence in another variable
$message = "bienvenue dans le cours de développement web côté serveur.";

// Finally, print them all glued together using the dot (.) operator
echo "Bonjour " . $nomComplet . ", " . $message;
?>