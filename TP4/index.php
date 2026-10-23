<?php require 'fonctions.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des étudiants</title>
</head>
<body>
    <h1>Gestion des étudiants</h1>
    <ul>
        <li><a href="index.php">Liste des étudiants</a></li>
        <li><a href="ajouter.php">Ajouter un étudiant</a></li>
        <li><a href="rechercher.php">Rechercher un étudiant</a></li>
    </ul>
    <hr>

    <h2>Liste des étudiants</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Formation</th>
            <th>Moyenne</th>
            <th>Résultat</th>
            <th>Actions</th> <!-- New column -->
        </tr>
        <?php foreach ($etudiants as $id => $e): ?>
        <tr>
            <td><?= htmlspecialchars($e['nom']) ?></td>
            <td><?= htmlspecialchars($e['prenom']) ?></td>
            <td><?= htmlspecialchars($e['age']) ?></td>
            <td><?= htmlspecialchars($e['formation']) ?></td>
            <td><?= htmlspecialchars($e['moyenne']) ?>/20</td>
            <td><?= resultat($e['moyenne']) ?></td>
            <td>
                <a href="modifier.php?id=<?= $id ?>">Modifier</a> | 
                <a href="supprimer.php?id=<?= $id ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?');">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>