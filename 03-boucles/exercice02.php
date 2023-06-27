<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage nombre pair</title>
</head>
<body>
    <?php for ( $i = 1 ; $i <= 100 ; $i++ ) {
        if ($i%2 == 0 ) { ?>
            <p><?= $i ?><p>
        <?php } ?>
    <?php } ?>
    
</body>
</html>