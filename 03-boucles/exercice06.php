<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style6.css">
    <title>Tables de multiplications</title>
</head>
<body>
    <div class="containerTable">
    <?php
        for ($i=1 ; $i<=10 ; $i++) { ?>
        <div class="column">
        <h2>Table de <?= "$i" ?></h2>
            <?php for ($j=1 ; $j<=10 ; $j++) { 
                $result = $i * $j; ?>
                <p><?= "$i x $j = $result" ?></p>

            <?php } ?>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>