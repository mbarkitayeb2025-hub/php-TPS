<?php
$a = 15;
$b = 4;

$somme = $a + $b;
$difference = $a - $b;
$produit = $a * $b;
$quotient = $a / $b;

$reste = $a % $b;            
$carre = $a ** 2;             
$moyenne = ($a + $b) / 2;     

echo "<p>Somme : $somme</p>";
echo "<p>Différence : $difference</p>";
echo "<p>Produit : $produit</p>";
echo "<p>Quotient : $quotient</p>";

echo "<p>Reste de la division (Modulo) : $reste</p>";
echo "<p>Carré de \$a : $carre</p>";
echo "<p>Moyenne de \$a et \$b : $moyenne</p>";

?>