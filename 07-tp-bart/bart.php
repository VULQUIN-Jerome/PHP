<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="bart.js" defer></script>
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
        'Ils rient de moi, pas avec moi.',
        'Je ne suis pas le nouveau Dalaï-lama.',
        'Je ne copierai pas mes fesses.',
        'Je ne conduirai pas la voiture du proviseur.',
        'On ne jure pas allégeance à Bart.',
        'Je ne vendrai pas ce qui appartient à l\'école.',
        'Je ne produirai pas de flatulences en classe.',
    ];

    $choix = $_GET['choix'] ?? 'Je ne chanterai pas l’hymne national en rotant.';
    $nbreFois = $_GET['nbreFois'] ?? 0;
    ?>
    <main>
        <div class="tableau">
            <?php for ($i = 0; $i < $nbreFois; $i++) { ?>
                <p><?= $choix ?></p>
            <?php } ?>
            <img src="./bart.png" alt="Image de Bart Simpson">
        </div>
        <div class="selector">
            <form action="" method="GET">
                <p class="punition">Bart copiera&nbsp;</p>
                <select class="punition" name="nbreFois" multiple size="3">
                    <?php
                    for ($i = 1; $i <= 28; $i++) { ?>
                        <option value="<?= $i ?>" <?= $nbreFois == $i ? 'selected' : '' ?>>
                            <?= $i; ?>
                        </option>
                    <?php } ?>
                </select>
                <p class="punition">fois</p>
                <select class="punition" name="choix" multiple size="3">
                    <?php
                    foreach ($phrases as $phrase) { ?>
                        <option value="<?= $phrase ?>" <?= $choix == $phrase ? 'selected' : '' ?>>
                            <?= $phrase; ?>
                        </option>
                    <?php }
                    ?>
                </select>
                <button class="punition">Copiez !!!</button>
            </form>
        </div>
    </main>
</body>

</html>