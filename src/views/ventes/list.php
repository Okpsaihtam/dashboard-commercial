<html>
<head><title>Ventes</title></head>
<body>
<h1>Liste des ventes</h1>
<ul>
<?php foreach ($ventes as $vente): ?>
    <li><?= htmlspecialchars($vente['date_vente']) ?> - <?= htmlspecialchars($vente['nom']) ?> : <?= htmlspecialchars($vente['montant']) ?> €</li>
<?php endforeach; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>