<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice02</title>
</head>

<body>
    <?php
    function conjugue(String $verbe)
    {
        $terminaisons = [
            'Je' => 'e',
            'Tu' => 'es',
            'Il' => 'e',
            'Nous' => 'ons',
            'Vous' => 'ez',
            'Ils' => 'ent',
        ];
        $racineverbe = substr($verbe, 0, -2);
        foreach ($terminaisons as $pp => $terminaison) {
            echo "$pp $racineverbe$terminaison <br>";
        }
    }

    $saisie = $_GET['verbe'] ?? '';
    if (substr($saisie, -2) !='er')  {
        echo 'Votre verbe n\'est pas du premier groupe';
        $saisie ='';
    } elseif ($saisie !='') {
        conjugue($saisie);
    }
    $saisie = htmlspecialchars($saisie ?? '');
    ?>
    <p>Saisissez un verbe du premier groupe</p>
    <form action="" method="get">
        <label for="Verbe"></label>
        <input type="text" name="verbe" id="Verbe">
        <button>Valider</button>
    </form>

</body>

</html>