<?php
$title = 'Contact';
require './parties/header.php';

// Récupération des données de formulaire

$email = $_POST['email'] ?? null;
$skills = $_POST['skills'] ?? [];
$errors = []; // Stockera les erreurs du formulaire

$validSkills = [
    'html' => 'HTML/CSS',
    'js' => 'JavaScript',
    'java' => 'Java',
    'php' => 'PHP',
];

// Vérifier si le formulaire est envoyé
if (!empty($_POST)) {
    if (empty($email)) {
        $errors[] = "L'email est obligatoire";
    } elseif (!validEmail($email)) {
        $errors[] = "L'email est invalide";
    }
    if (count($skills) < 1) {
        $errors[] = "Vous devez chosir au moins une compétence.";
    } elseif (!validArray($skills, array_keys($validSkills))) {
        $errors[] = "Une compétence choisie n'est pas correcte.";
    }

    if (empty($errors)) {
        $finalSkills =[];
        // Permet d'afficher les valeurs "propres" au lieu des clés
        foreach (array_unique($skills) as $skill) {
            $finalSkills[] = $validSkills[$skill]; // $validSkills['html]
        }
        $succes = "Bonjour $email, voici vos skills : " . implode(', ', $finalSkills);
    }
}
?>
<div class="container py-5">
    <h1>Contact</h1>

    <?php if (isset($succes)) { ?>
        <div class="alert alert-succes">
            <?= $succes ?>
        </div>
    <?php } ?>

    <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) { ?>
                <p class="m-0"><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <form class="ms-5" action="" method="post">
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= $email; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Compétences</label>
            <div class="form-check">
                <input type="checkbox" name="skills[]" id="html" value="html" <?= checked('php', $skills); ?> class="form-check-input">
                <label for="html" class="form-check-label">HTML</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="skills[]" id="js" value="js" class="form-check-input">
                <label for="js" class="form-check-label">JavaScript</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="skills[]" id="java" value="java" class="form-check-input">
                <label for="java" class="form-check-label">Java</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="skills[]" id="php" value="php" class="form-check-input">
                <label for="php" class="form-check-label">PHP</label>
            </div>
        </div>

        <button class="btn-secondary    ">Valider</button>
    </form>
</div>

<?php require './parties/footer.php' ?>