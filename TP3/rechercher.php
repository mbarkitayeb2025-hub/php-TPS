<?php
require 'fonctions.php';
$resultat = null;
$recherche = "";

if (isset($_GET['nom']) && !empty(trim($_GET['nom']))) {
    $recherche = trim($_GET['nom']);
    foreach ($etudiants as $e) {
        if (strtolower($e['nom']) === strtolower($recherche)) {
            $resultat = $e;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Rechercher</title>
</head>
<body>
    <h1>Rechercher un étudiant</h1>
    <a href="index.php">← Retour</a><br><br>

    <form method="GET">
        <label>Nom de l'étudiant :</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($recherche) ?>">
        <button type="submit">Rechercher</button>
    </form>

    <hr>
    <?php if ($resultat): ?>
        <h2>Résultat trouvé :</h2>
        <p>Nom : <?= htmlspecialchars($resultat['nom']) ?></p>
        <p>Prénom : <?= htmlspecialchars($resultat['prenom']) ?></p>
        <p>Formation : <?= htmlspecialchars($resultat['formation']) ?></p>
        <p>Moyenne : <?= htmlspecialchars($resultat['moyenne']) ?>/20 (<?= resultat($resultat['moyenne']) ?>)</p>
    <?php elseif ($recherche !== ""): ?>
        <p style="color:red;">Aucun étudiant trouvé avec le nom "<?= htmlspecialchars($recherche) ?>".</p>
    <?php endif; ?>
</body>
</html>