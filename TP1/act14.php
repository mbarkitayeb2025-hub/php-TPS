<!DOCTYPE html>
<html>
<body>
<?php
$prenom = "Ahmed";
$nom = "Ali";
$age = 20;
$formation = "Informatique";
$annee = "2ème année";
$moyenne = 14.5;

echo "<h1>Profil étudiant</h1>";
echo "<p>Nom complet : $nom $prenom</p>";
echo "<p>Âge : $age ans</p>";
echo "<p>Formation : $formation</p>";
echo "<p>Année : $annee</p>";
echo "<p>Moyenne : $moyenne</p>";

if ($moyenne >= 10) {
    echo "<p>Résultat : Année validée</p>";
} else {
    echo "<p>Résultat : Année non validée</p>";
}
?>
</body>
</html>