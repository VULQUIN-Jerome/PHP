<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css">
    <title>Tableau</title>
</head>

<body>
    <div id="tableau">
        <?php
        for ($i = -1; $i <= 10; $i++) {
            for ($j = -1; $j <= 10; $j++) {
                $classe = "case";
                if ($i === $j && $i != -1) {
                    $classe = $classe . " black";
                } elseif (($i % 2 === 0 && abs($j % 2) === 1) || (abs($i % 2) === 1 && $j % 2 === 0)) {
                    $classe = $classe . " white";
                } else {
                    $classe = $classe . " grey";
                }
                if ($i === -1) {
                    $classe = $classe . " bordBottom";
                }
                if ($j === -1) {
                    $classe = $classe . " bordRight";
                }
                if ($i === 10 && $j === -1) {
                    $classe = $classe . " bordColonne";
                }
                if ($j === 10 && $i === -1) {
                    $classe = $classe . " bordLigne";
                }
                ?>
                <div class="<?= $classe ?>">
                    <?php if ($i === -1 && $j === -1) { ?>
                        <p>x</p>
                    <?php } elseif ($i === -1) { ?>
                        <p><?= $j ?></p>
                    <?php } elseif ($j === -1) { ?>
                        <p><?= $i ?></p>
                    <?php } else { ?>
                        <p><?= $i * $j ?></p>
                    <?php } ?>
                </div>
        <?php }
        } ?>
</body>

</html>