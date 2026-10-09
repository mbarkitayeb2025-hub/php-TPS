<!DOCTYPE html>
<html>
<body>

<form method="get">
    Nombre: <input type="number" name="nombre">
    <button type="submit">Afficher la table</button>
</form>
<br>

<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "<tr><td>$nombre x $i</td><td>= $resultat</td></tr>";
    }
    echo "</table>";
}
?>

</body>
</html>