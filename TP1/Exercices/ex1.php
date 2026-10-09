<!DOCTYPE html>
<html>
<body>

<form method="get">
    Nombre 1: <input type="number" name="n1"><br><br>
    Nombre 2: <input type="number" name="n2"><br><br>
    <button type="submit">Calculer</button>
</form>

<?php
if (isset($_GET['n1']) && isset($_GET['n2'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    echo "Somme : " . ($n1 + $n2) . "<br>";
    echo "Différence : " . ($n1 - $n2) . "<br>";
    echo "Produit : " . ($n1 * $n2) . "<br>";

    if ($n2 == 0) {
        echo "Division et reste impossibles par 0.<br>";
    } else {
        echo "Quotient : " . ($n1 / $n2) . "<br>";
        echo "Reste : " . ($n1 % $n2) . "<br>";
    }
}
?>

</body>
</html>