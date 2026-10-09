<?php
$notes = [12, 15, 9, 14, 16];

function sommeNotes($notes) {
    $somme = 0;
    foreach ($notes as $note) $somme += $note;
    return $somme;
}

function moyenneNotes($notes) {
    return sommeNotes($notes) / count($notes);
}

function maxNote($notes) {
    $max = 0;
    foreach ($notes as $note) {
        if ($note > $max) $max = $note;
    }
    return $max;
}

function minNote($notes) {
    $min = 20; // Start at max possible grade
    foreach ($notes as $note) {
        if ($note < $min) $min = $note;
    }
    return $min;
}

function compterAdmis($notes) {
    $compteur = 0;
    foreach ($notes as $note) {
        if ($note >= 10) $compteur++;
    }
    return $compteur;
}

echo "<p>Somme : " . sommeNotes($notes) . "</p>";
echo "<p>Moyenne : " . moyenneNotes($notes) . "</p>";
echo "<p>Maximum : " . maxNote($notes) . "</p>";
echo "<p>Minimum : " . minNote($notes) . "</p>";
echo "<p>Notes >= 10 : " . compterAdmis($notes) . "</p>";
?>