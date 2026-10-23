<?php
session_start();

function estConnecte() {
    return isset($_SESSION['connecte']) && $_SESSION['connecte'] === true;
}

function protegerPage() {
    if (!estConnecte()) {
        header("Location: login.php");
        exit;
    }
}

function resultat($moyenne) {
    return $moyenne >= 10 ? "Admis" : "Ajourné";
}

if (!isset($_SESSION['etudiants'])) {
    $_SESSION['etudiants'] = [
        ["nom" => "Dupont", "prenom" => "Ahmed", "age" => 21, "formation" => "Informatique", "moyenne" => 14.5],
        ["nom" => "Martin", "prenom" => "Sara", "age" => 22, "formation" => "Maths", "moyenne" => 9.5],
        ["nom" => "Ali", "prenom" => "Youssef", "age" => 20, "formation" => "Physique", "moyenne" => 12.0]
    ];
}

$etudiants = &$_SESSION['etudiants'];
?>