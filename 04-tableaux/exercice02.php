<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 02</title>
</head>
<body>
    <?php
    $population = [
        'France' => 67_595_000,
        'Suede' => 9_998_000,
        'Suisse' => 8_417_000,
        'Kosovo' => 1_820_631,
        'Malte' => 434_403,
        'Mexique' => 122_273_500,
        'Allemagne' => 82_800_000,
    ];

    $paysEurope = ['France','Suede','Suisse','Allemagne'];

    $populationTotale =0;
    foreach($population as $pays => $habitants) {
        for ($n = 0; $n < count($paysEurope) ; $n++) {
        if ($pays === $paysEurope[$n]) {
            $populationTotale += $habitants;
        }
    }
        if ($habitants >= 20000000) { ?>
            <h2><?= $pays ?> posséde + de 20 millions d'habitants</h2>
        <?php }
    }
    ?>
    <h1>Population totale en Europe <?= $populationTotale ?> habitants</h1>
    
</body>
</html>