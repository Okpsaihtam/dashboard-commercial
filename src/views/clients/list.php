<!DOCTYPE html>
<html>
<head><title>Clients</title></head>
<body>
<h1>Liste des clients</h1>
<ul>
<?php foreach ($clients as $client): ?>
    <li><?= htmlspecialchars($client['nom']) ?> - <?= htmlspecialchars($client['email']) ?></li>
<?php endforeach; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>