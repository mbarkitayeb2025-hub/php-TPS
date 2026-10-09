<?php
$etudiants = ["Ahmed", "Sami", "Nour", "Amine", "Tayeb"];

$etudiants[] = "Yassine";

array_pop($etudiants);

echo "<p>Nombre d'étudiants : " . count($etudiants) . "</p>";

echo "<ul>";
foreach ($etudiants as $etudiant) {
    echo "<li>$etudiant</li>";
}
echo "</ul>";
?>