<!DOCTYPE html>
<html>
<head><title>Objectifs</title></head>
<body>
<h1>Objectifs mensuels</h1>
<ul>
<?php foreach ($objectifs as $obj): ?>
    <li><?= htmlspecialchars($obj['mois']) ?>/<?= htmlspecialchars($obj['annee']) ?> : <?= htmlspecialchars($obj['objectif_montant']) ?> €</li>
<?php endforeach; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>