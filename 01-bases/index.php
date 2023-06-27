<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le PHP</title>
</head>
<body>
    <h1><?php echo "HELLO LE PHP !!!" ?></h1>
    <?php 
        // On peut afficher un commentaire ici
        echo 'Hello PHP';
        echo " ou bien entre double quotes";
        $age = 2023 - 1994;
        $price = 2.99;       
    ?>
    <h2><?= "PHP a ".$age." ans" ?></h2>
    <p><?= "La variable \$price contient $price €"; ?></p>
    
</body>
</html>