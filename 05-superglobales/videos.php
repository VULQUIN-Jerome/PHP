<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="video.css">
    <title>Fonctionne avec 'video.php'</title>
</head>

<body>
    <main id="home">
        <?php
        $videos = [
            0 => [
                'nom' => 'Albert Meslay',
                'id' => 'wSDmJxAmrmk'
            ],
            1 => [
                'nom' => 'Fab Squal',
                'id' => 'd_Fux4IgliE'
            ],
            2 => [
                'nom' => 'Mozinor',
                'id' => 'Tmgl1s9R7bI'
            ],
            3 => [
                'nom' => 'Coluche',
                'id' => 'OOcQMdi8pV0'
            ],
            4=> [
                'nom' => 'Camille Berthollet',
                'id' => 'ogZoZgtouow'
            ],
        ];

        $couleurs = [
            'blanc' => 'white',
            'noir' => 'black',
            'vert' => 'green',
            'rouge' => 'red',
            'bleu' => 'blue'
        ];

        $choix = $_GET['colorChoix'] ?? 'white';
        ?>
        <div id="selectColor">
            <form action="" method="GET">
                <label for="couleur">Choisissez la couleur du lecteur vidéo :</label>
                <select name="colorChoix" id="couleur">
                    <?php
                    foreach ( $couleurs as $index=>$couleur) { ?>
                        <option value="<?= $couleur ?>" <?= $choix == $couleur ? 'selected' : '' ?>><?= $index ?></option>
                    <?php }
                    ?>
                </select>
                <button class="validation">Valider</button>
            </form>
        </div>

        <?php foreach ($videos as $video) { ?>
            <form action="./video.php" method="GET">
                <input type="hidden" name="id" value="<?= $video['id'] ?>">
                <input type="hidden" name="color" value="<?= $choix ?>">
                <button class="menu"><?= $video['nom'] ?></button>
            </form>
        <?php }
        ?>
    </main>

</body>

</html>