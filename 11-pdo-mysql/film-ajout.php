<?php
require 'partials/header.php';
$query = db()->prepare('SELECT * FROM category');
$query->execute();
$categories= $query->fetchAll();

$titre = $_POST['titre'] ?? null;
$date = $_POST['date'] ?? null;
$description = $_POST['description'] ?? null;
$duree = $_POST['duree'] ?? null;
$cover = $_POST['cover'] ?? null;
$genre = $_POST['genre'] ?? null;

$errors = [];

if(!empty($_POST)) {
    if (trim($titre)==='') {
        $errors['titre']="Vous n'avez pas saisi de titre.";
    } else {
        $titre = htmlspecialchars(trim($titre));
    };

    if (!dateValide($date)) {
        $errors['date']="La date saisie n'est pas valide.";
    }

    if (strlen($description)<6) {
        $errors['description']="La description est insuffisante.";
    } else {
        $titre = htmlspecialchars(trim($titre));
    };

    if ($duree < 1 || $duree > 999 || $duree != floor($duree)) {
        $errors['duree']="La durée saisie est incorrecte.";
    }

    if ($genre<1 ||$genre>count($categories) || $genre!=floor($genre)) {
        $errors['genre']="Vous n'avez pas précisé la catégorie.";
    }


}

var_dump($errors);

 ?>
<div class="container">
    <nav class="my-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ol>
    </nav>

    <h1>Ajouter un film</h1>
    <form action="" method="post">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="<?= $titre ?>">

        <label for="date">Date de sortie</label>
        <input type="datetime" name="date" id="date" value="<?= $date ?>">

        <label for="description">Description</label>
        <textarea class="form-control" placeholder="Message" id="description" name="description" style="height: 100px"><?= $description ?></textarea>

        <label for="duree">Durée</label>
        <input type="number" name="duree" id="duree" value="<?= $duree ?>">

        <label for="cover">Cover</label>
        <input type="text" name="cover" id="cover" value="<?= $cover ?>">

        <label for="genre">Catégorie</label>
        <select name="genre" id="genre">
            <option value="null" disabled selected>Choisir une catégorie...</option>
            <?php foreach($categories as $category) { ?>
                <option value="<?= $category['id'] ?>" <?= $genre === $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
            <?php } ?>
        </select>

        <button>Ajouter</button>

    </form>

</div>
<?php require 'partials/footer.php'; ?>