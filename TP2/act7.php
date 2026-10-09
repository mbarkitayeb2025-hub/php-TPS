<?php
$etudiants = [
    [
        "nom" => "Khediri",
        "prenom" => "Ahmed",
        "age" => 20,
        "moyenne" => 14.5
    ],
    [
        "nom" => "Ali",
        "prenom" => "Sami",
        "age" => 21,
        "moyenne" => 11.5
    ],
    [
        "nom" => "Ben Salah",
        "prenom" => "Nour",
        "age" => 19,
        "moyenne" => 16
    ]
];

foreach ($etudiants as $etudiant) {
    echo "<p>{$etudiant['nom']} {$etudiant['prenom']} - {$etudiant['age']} ans - Moyenne: {$etudiant['moyenne']}</p>";
}
?>