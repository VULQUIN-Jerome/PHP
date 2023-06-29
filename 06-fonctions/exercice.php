<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices fonctions php</title>
</head>
<body>
    <?php
    /**
     * Donne le chiffre au carré
     */
    function carre(float $number) : Float {
        return $number*$number;
    }

    /**
     * Donne l'aire d'un rectangle
     */
    function aireRectangle(float $longueur, float $largeur) : float {
        return $longueur*$largeur;
    }

    /**
     * Donne l'aire d'un cercle
     */
    function aireCercle(float $rayon) : float {
        return $rayon*$rayon*pi();
    }

    /**
     * Retourne le HT en TTC ou le TTC en HT
     */
    function prix(float $prix, float $tva, string $choix ='TTC') {
        if ($choix !== 'TTC' && $choix !== 'HT') {
            $choix = 'TTC';
        }
        if ($choix=='TTC') {
            return $prix*(1+($tva/100));
        } else {
            return $prix/(1+($tva/100));
        }
    }

    $cote = 5;
    $longueur = 10;
    $largeur = 3;
    $rayon = 8;
    $prix = 100;
    $taux = 20.6;
    $conversion = 'TTC';
    $conversion2 = 'HT';
 
?>
<p>Mise au carré de <?= "$cote => ".carre($cote)?></p>
<p>Aire rectangle de <?= "longueur : $longueur et largeur : $largeur  => Aire : ".aireRectangle($longueur,$largeur) ?></p>
<p>Aire cercle de rayon : <?= $rayon." => ".aireCercle(10) ?></p>
<p>Prix <?= $conversion ?> de <?= $prix ?> € avec un taux de <?= $taux ?> => <?= number_format(prix($prix,$taux,$conversion), 2, '.', ' ') ?> €</p>
<p>Prix <?= $conversion2 ?> de <?= $prix ?> € avec un taux de <?= $taux ?> => <?= number_format(prix($prix,$taux,$conversion2), 2, '.', ' ') ?> €</p>
</body>
</html>
