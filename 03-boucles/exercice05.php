<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire un rectange d'étoile</title>
</head>
<body>
    <?php
    $valeur1 = 10;
    $valeur2 = 10;

    for($i=1;$i <= $valeur1; $i++) {
        for($j=1; $j<= $valeur2; $j++) { ?>
        <span>☀️</span>
        <?php } ?>
        <br>
    <?php } ?>
    <br><br><br>
    <?php
    for($i=1;$i <= $valeur1; $i++) {
        for($j=1; $j<= $i; $j++) { ?>
        <span>⭐</span>
        <?php } ?>
        <br>
    <?php } ?>
</body>
</html>