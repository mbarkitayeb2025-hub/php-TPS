<?php
// 1. crée un tableau de 5 étudiants
$etudiants = ["Ahmed", "Sami", "Nour", "Amine", "Tayeb"];

// 2. ajoute un étudiant
$etudiants[] = "Yassine";

// 3. supprime le dernier étudiant
array_pop($etudiants);

// 4. affiche le nombre final
echo "<p>Nombre d'étudiants : " . count($etudiants) . "</p>";

// 5. affiche tous les étudiants
echo "<ul>";
foreach ($etudiants as $etudiant) {
    echo "<li>$etudiant</li>";
}
echo "</ul>";
?>