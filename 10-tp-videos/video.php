<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="video.css">
    <title>Fonctionne avec 'videos.php'</title>
</head>
<?php
$id = $_GET['id'] ?? "404";
$couleur = $_GET['color'] ?? 'black';
?>

<body class="<?= $couleur ?>" style="background-color: <?= $couleur ?>">

    <?php if ($id !== "404") { ?>
        <iframe width="1280" height="800" src="https://www.youtube.com/embed/<?= $id ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <?php } else if ($id == "404") { 
        http_response_code(404); ?>
        <h1>ERREUR 404 !!!</h1>
    <?php
    die(); }
    ?>
    <form action="./videos.php" method="GET">
        <input type="hidden" name="colorChoix" value="<?= $couleur ?>">
        <button class="retour">Page d'accueil</button>
    </form>

</body>

</html>