<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGCD</title>
</head>
<body>
    <?php
    $valeur1=27;
    $valeur2=18;
    $pgcd=1;

    if ( $valeur1>$valeur2) {
        $valuemax=$valeur1;
    } else {
         $valuemax=$valeur2;
    }
    
    for ($i=2 ; $i<=$valuemax ; $i++ ) {
        if ( $valeur1%$i == 0 && $valeur2%$i == 0) {
            $pgcd = $i;
        }
    } ?>

<p><?= "Le PGCD de $valeur1 et de $valeur2 est $pgcd" ?></p>

    
</body>
</html>