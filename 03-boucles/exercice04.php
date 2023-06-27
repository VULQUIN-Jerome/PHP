<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <?php for ($i=1 ; $i<=100;$i++) {
        if ( $i%3 == 0 && $i%5 == 0) { ?>
            <p>FizzBuzz</p>
        <?php }
        else if ($i%3 == 0) { ?>
            <p>Fizz</p>
        <?php }
        else if ($i%5 == 0) { ?>
            <p>Buzz</p>
        <?php } 
        else { ?>
            <p><?= $i ?>
        <?php }
    }
    ?>
    
</body>
</html>