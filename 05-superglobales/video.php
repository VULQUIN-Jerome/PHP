<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionne avec 'videos.php'</title>
</head>
<body>
    <?php
    $id = $_GET['id'] ?? "404";

    if ($id == "123456") { ?>
        <iframe id="Albert Meslay"
            title="Christophe COlomb"
            width="300"
            height="200"
            src="http://https://youtu.be/wSDmJxAmrmk">
        </iframe>
    <?php } else if ($id == "404") { ?>
        <h1>ERREUR 404 !!!</h1>
    <?php }
    ?>
    
</body>
</html>