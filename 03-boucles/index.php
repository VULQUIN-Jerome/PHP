<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
    <ul>
        <?php for ($i = 1 ; $i <= 10 ; $i++) { ?>
            <li><?= $i; ?></li>
        <?php } ?>
    </ul>
    <?php $firstNames = ['Fiorella', 'Marina', 'Matthieu']; ?>
    
    <div style="display: flex; gap:10px;">
        <?php foreach ($firstNames as $firstName) { ?>
            <h3><?= $firstName; ?></h3>
        <?php } ?>
    </div>
    
</body>
</html>