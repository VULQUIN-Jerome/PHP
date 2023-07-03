<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>
    <?php
        require 'functions.php';

    ?>

    <h1><?= hello('Fiorella') ?></h1>
    <h1><?= hello('Marina','en') ?></h1>
    <h1><?= mb_strtoupper(hello('Jérôme','IT')) ?></h1> // Affichera les caractères spéciaux en Majuscules
    
    <p> 1 + 2 + 3 + 4 = <?= addition(1,2,3,4) ?></p>

    <h2>Les dates</h2>
    <p>Timestamp: <?= time(); ?></p>
    <p>Date : <?= date('d/m/y H:i'); ?></p> <!-- cf doc PHP pour le format -->
    <p>Timestamp précis : <?= strtotime('18 november 1991') ?></p>
    <p>Date précise : <?= date('l d/m', strtotime('+ 2 days')) ?></p>
</body>
</html>