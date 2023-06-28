<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 01</title>
</head>
<body>
<?php

$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Italie' => 'Rome',
];
foreach ($capitales as $index=>$capitale) { ?>
    <h2>La capitale de <?= $index ?> est <?= $capitale ?></h2>
<?php }
?>
    
</body>
</html>