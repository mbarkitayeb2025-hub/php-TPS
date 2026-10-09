<?php
$etudiant = [
    "nom" => "Khediri",
    "prenom" => "Ahmed",
    "age" => 20,
    "formation" => "Informatique",
    "moyenne" => 14.5,
    "telephone" => "12345678",
    "ville" => "Sousse",
    "niveau" => "2ème année"
];

echo "<p>Nom : {$etudiant['nom']}</p>";
echo "<p>Prénom : {$etudiant['prenom']}</p>";
echo "<p>Âge : {$etudiant['age']}</p>";
echo "<p>Formation : {$etudiant['formation']}</p>";
echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
echo "<p>Téléphone : {$etudiant['telephone']}</p>";
echo "<p>Ville : {$etudiant['ville']}</p>";
echo "<p>Niveau : {$etudiant['niveau']}</p>";
?>