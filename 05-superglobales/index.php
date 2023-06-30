<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Superglobales</title>
</head>

<body>
    <h2>Superglobales</h2>
    <?php
    // $_GET est un tableau qui contient les paramètres de l'URL
    // index.php?name=fiorella&age=3
    var_dump($_GET);

    // L'opérateur null coalesce
    $name = $_GET['name'] ?? null; // Si $_GET['name'] n'existe pas alors $name sera null
    $name = $_GET['name'] ?? 'John'; // Si $_GET['name'] n'existe pas alors $name sera John
    $age = $_GET['age'] ?? null;
    $age = (int) $age; // ici on CAST le string $age en integer (transforme)
    var_dump($age);
    ?>

    <a href="index.php">Sans rien</a>
    <a href="index.php?name=fiorella&age=3">Fiorella</a>
    <a href="index.php?name=toto">Toto</a>

    <h1>Bonjour <?= $name ?></h1>

    <?php if ($age) { ?>
        <p>Tu as <?= $age; ?> ans.</p>
    <?php } ?>

    <h2>Formulaire en GET</h2>
    <form action="" method="GET">
        <div class="section">
            <label for="NOM">Nom</label>
            <input type="text" name="name" id="NOM" value="<?= $name ?>" id="">
        </div>

        <div class="section">
            <label for="AGE"></label>
            <select name="age" id="AGE">
                <?php for ($i = 18; $i <= 120; $i++) { ?>
                    <option value="<?= $i ?>" <?= $i == $age ? 'selected' : '' ?>>
                        <?= $i . " ans" ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button>Envoyer</button>
    </form>

    <h2>Formulaire en POST</h2>
    <form action="" method="POST">
        <div class="section">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button>Envoyer</button>
    </form>
    <?php
    var_dump($_POST);
    $password = $_POST['password'] ?? null;
    if ($password) {
        echo "<p>Votre mot de passe: $password</p>";
    }
    ?>
</body>

</html>