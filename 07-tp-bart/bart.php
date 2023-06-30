<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bart.css">
    <title>TP Bart Simpson</title>
</head>
<body>
    <?php
        $phrases = [
            'Je ne chanterai pas l’hymne national en rotant.',
            'Je terminerai ce que j’ai commen…',
            'Les drôles de bruits ne sont pas drôles.',
            'La mention "non inflammable" n’est pas un défi.',
            'Je n’obéirai pas aux voix dans ma tête.',
            'C’est nul d’avoir raison.',
            'Je ne gaspillerai pas de craies.',
            'Après 25 ans, ils n’ont pas réussi à trouver une nouvelle punition.',
            'Je ne suis pas le nouveau Dalaï-lama.'
        ];

        $choix = rand(0, count($phrases)-1);
        $nbreFois = rand(1, 15);

    ?>
    <main>
        <div class="tableau">
            <?php for ( $i = 1; $i <= $nbreFois; $i++) { ?>
                <p><?= $phrases[$choix] ?></p>
            <?php } ?>
        </div>
        <img src="./bart.png" alt="Image de Bart Simpson">

    </main>
</body>
</html>