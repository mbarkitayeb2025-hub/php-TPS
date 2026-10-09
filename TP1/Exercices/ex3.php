<!DOCTYPE html>
<html>
<body>

<form method="get">
    Note 1: <input type="number" step="0.5" name="note1"><br><br>
    Note 2: <input type="number" step="0.5" name="note2"><br><br>
    Note 3: <input type="number" step="0.5" name="note3"><br><br>
    <button type="submit">Calculer la moyenne</button>
</form>
<br>

<?php
if (isset($_GET['note1'])) {
    $note1 = $_GET['note1'];
    $note2 = $_GET['note2'];
    $note3 = $_GET['note3'];

    $moyenne = ($note1 + $note2 + $note3) / 3;
    echo "Moyenne : $moyenne <br>";

    if ($moyenne < 10) {
        echo "Appréciation : Insuffisant";
    } elseif ($moyenne < 12) {
        echo "Appréciation : Passable";
    } elseif ($moyenne < 14) {
        echo "Appréciation : Assez bien";
    } elseif ($moyenne < 16) {
        echo "Appréciation : Bien";
    } else {
        echo "Appréciation : Très bien";
    }
}
?>

</body>
</html>