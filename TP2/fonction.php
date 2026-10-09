<?php
// Activité 9
function afficherBonjour($nom) {
    echo "Bonjour " . $nom . "<br>";
}

// Activité 10
function additionner($a, $b) {
    return $a + $b;
}

// Activité 11
function calculerMoyenne($note1, $note2, $note3) {
    return ($note1 + $note2 + $note3) / 3;
}

// Activité 12
function determinerResultat($moyenne) {
    if ($moyenne >= 10) {
        return "Admis";
    }
    return "Ajourné";
}

function appreciation($moyenne) {
    if ($moyenne < 10) return "Insuffisant";
    elseif ($moyenne < 12) return "Passable";
    elseif ($moyenne < 14) return "Assez bien";
    elseif ($moyenne < 16) return "Bien";
    else return "Très bien";
}

// Activité 13
function afficherEtudiant($etudiant) {
    echo "<p>Nom : {$etudiant['nom']}</p>";
    echo "<p>Prénom : {$etudiant['prenom']}</p>";
    echo "<p>Âge : {$etudiant['age']}</p>";
    echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
    echo "<p>Résultat : " . determinerResultat($etudiant['moyenne']) . "</p>";
    echo "<p>Appréciation : " . appreciation($etudiant['moyenne']) . "</p><hr>";
}

// Activité 14
function calculerMoyenneClasse($etudiants) {
    if (count($etudiants) == 0) return 0;
    $somme = 0;
    foreach ($etudiants as $etudiant) {
        $somme += $etudiant["moyenne"];
    }
    return $somme / count($etudiants);
}

// Activité 15
function rechercherEtudiant($etudiants, $nom) {
    foreach ($etudiants as $etudiant) {
        if ($etudiant["nom"] === $nom) {
            return $etudiant;
        }
    }
    return null;
}

// Activité 16
function obtenirAdmis($etudiants) {
    $admis = [];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= 10) {
            $admis[] = $etudiant;
        }
    }
    return $admis;
}

// Activité 17
function filtrerParMoyenne($etudiants, $moyenneMinimale) {
    $resultat = [];
    foreach ($etudiants as $etudiant) {
        if ($etudiant["moyenne"] >= $moyenneMinimale) {
            $resultat[] = $etudiant;
        }
    }
    return $resultat;
}
?>