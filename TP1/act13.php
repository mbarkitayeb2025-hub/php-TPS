<?php
echo "<h3>1. De 1 à 20 :</h3>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}

echo "<h3>2. Nombres pairs de 1 à 20 :</h3>";
for ($i = 2; $i <= 20; $i = $i + 2) {
    echo $i . " ";
}

echo "<h3>3. Table de 5 :</h3>";
for ($i = 1; $i <= 10; $i++) {
    $resultat = 5 * $i;
    echo "5 x $i = $resultat <br>";
}

echo "<h3>4. De 10 à 1 :</h3>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
?>