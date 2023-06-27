<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice n°01 PHP</title>
</head>
<body>
    <?php 
        $age = 17;
        if ( $age >= 18 ) { ?>
            <p>Vous pouvez entrez</p>
        <?php } else { ?>
        <p>Interdit</p>
        <?php if ($age >16) { ?>
            <p>Vous êtes presque majeur</p>
        <?php } else if ($age >14) { ?>
            <p>Vous êtes jeune</p>
        <?php } else if ($age >12) { ?>
            <p>Vous êtes trop jeune</p>
    <?php }
    } ?>
    
</body>
</html>