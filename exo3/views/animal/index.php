<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des animaux</title>
</head>
<body>
    <h1>Animaux</h1>
    <ul>
        <?php foreach ($animaux as $animal): ?>
            <li>
                <?= htmlspecialchars($animal->type) ?> nommé <?= htmlspecialchars($animal->nom) ?>,
                <?= $animal->age ?> ans —
                Peut parler ? <?= $animal->peut_parler ? 'Oui' : 'Non' ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
