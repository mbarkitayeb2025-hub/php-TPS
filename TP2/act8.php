<?php
$etudiants = [
    ["nom" => "Khediri", "prenom" => "Ahmed", "age" => 20, "moyenne" => 14.5],
    ["nom" => "Ali", "prenom" => "Sami", "age" => 21, "moyenne" => 11.5],
    ["nom" => "Ben Salah", "prenom" => "Nour", "age" => 19, "moyenne" => 16]
];
?>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Âge</th>
        <th>Moyenne</th>
    </tr>
    <?php foreach ($etudiants as $etudiant) { ?>
        <tr>
            <td><?php echo $etudiant['nom']; ?></td>
            <td><?php echo $etudiant['prenom']; ?></td>
            <td><?php echo $etudiant['age']; ?></td>
            <td><?php echo $etudiant['moyenne']; ?></td>
        </tr>
    <?php } ?>
</table>