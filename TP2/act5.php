<?php
$etudiants = ["Ahmed", "Sami", "Nour", "Amine"];
$nomRecherche = "Sami";

if (in_array($nomRecherche, $etudiants)) {
    echo "Étudiant trouvé";
} else {
    echo "Étudiant non trouvé";
}
?>