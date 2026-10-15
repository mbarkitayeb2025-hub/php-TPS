<?php

function resultat($moyenne) {
    return $moyenne >= 10 ? "Admis" : "Ajourné";
}
$etudiants = [
    ["nom" => "Dupont", "prenom" => "Ahmed", "age" => 21, "formation" => "Informatique", "moyenne" => 14.5],
    ["nom" => "Martin", "prenom" => "Sara", "age" => 22, "formation" => "Maths", "moyenne" => 9.5],
    ["nom" => "Ali", "prenom" => "Youssef", "age" => 20, "formation" => "Physique", "moyenne" => 12.0]
];
?>