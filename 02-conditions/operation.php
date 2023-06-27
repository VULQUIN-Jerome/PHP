<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opération exercice en PHP</title>
</head>
<body>
    <?php
        $value1=15;
        $value2=5;
        $value3=8;
        $resultat1 = $value1 + $value2 + $value3;
        $resultat2 = $value1 *( $value2 - $value3);
        $resultat3 = round((($value3 + $value2) / $value1),2);
    ?>
    <p><?="$value1 + $value2 + $value3 = $resultat1" ?></p>
    <p><?="$value1 x ($value2 - $value3) = $resultat2" ?></p>
    <p><?="($value3 + $value2) / $value1) = $resultat3" ?></p>

    <?php
        if ($resultat1 <20 || $resultat2 <20 || $resultat3 <20 ) {
            ?><p>Une des opérations renvoie moins de 20</p> <?php
            
        } ?>
    
</body>
</html>