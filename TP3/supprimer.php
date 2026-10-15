<?php
require 'fonctions.php';

$id = $_GET['id'] ?? null;

if ($id !== null && isset($etudiants[$id])) {
    unset($etudiants[$id]); 
    
    $_SESSION['etudiants'] = array_values($etudiants);
}

header('Location: index.php');
exit;
?>