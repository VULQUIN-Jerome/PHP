<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerice01</title>
</head>

<body>
    <?php
    function acronyme(String $string): String
    {
        /* return implode('',array_map(fn ($word)=> $word[0],explode(' ',$string)));  */// code concis
        $acronyme = '';
        $string = explode(' ', $string);
        foreach ($string as $word) {
            $acronyme .= substr($word, 0, 1);
        }
        return strtoupper($acronyme);
    }
    $saisie = $_GET['acronyme'] ?? '';
    $saisie = htmlspecialchars($saisie ?? '');
    ?>

    <p>Saisissez un texte pour récupérer l'acronyme</p>
    <form action="" method="get">
        <label for="Acronyme"></label>
        <input type="text" name="acronyme" id="Acronyme">
        <button>Valider</button>
    </form>
    <?php
    if ($saisie != '') { ?>
        <p>L'acronyme de votre saisie est :<?= acronyme($saisie) ?></p>
    <?php } ?>
</body>

</html>