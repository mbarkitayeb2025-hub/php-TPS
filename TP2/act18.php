<?php
require_once "fonctions.php";

$etudiants = [
    ["nom" => "Khediri", "prenom" => "Ahmed", "age" => 20, "moyenne" => 14.5],
    ["nom" => "Ali", "prenom" => "Sami", "age" => 21, "moyenne" => 9.5]
];

afficherBonjour("Tayeb");
echo "<p>Moyenne de la classe : " . calculerMoyenneClasse($etudiants) . "</p>";

echo "<h3>Liste des admis :</h3>";
$admis = obtenirAdmis($etudiants);
foreach ($admis as $etudiant) {
    afficherEtudiant($etudiant);
}
?>