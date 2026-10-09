<?php
$note = 13.5;

if ($note < 10) {
    echo "Ajourné";
} elseif ($note >= 10 && $note < 12) {
    echo "Passable";
} elseif ($note >= 12 && $note < 14) {
    echo "Assez bien";
} elseif ($note >= 14 && $note < 16) {
    echo "Bien";
} else {
    echo "Très bien";
}
?>