<?php
$title = 'Contact2';
require './parties/header.php';

$email = $_POST['email'] ?? null;
$sujet = $_POST['sujet'] ?? 'rien';
$message = $_POST['message'] ?? null;
$civilite = $_POST['civilite'] ?? null;
$errors = [];

if (!empty($_POST)) {
    if (empty($email)) {
        $errors['mail'] = "L'email est obligatoire.";
    } elseif (!validEmail($email)) {
        $errors['mail'] = "L'email est invalide.";
    }
    if (empty($sujet) || $sujet === 'rien') {
        $errors['sujet'] = "Le sujet n'est pas précisé.";
    }
    if (strlen($message) === 0) {
        $errors['message'] = "Veuillez saisir un message.";
    } elseif (strlen($message) < 15) {
        $errors['message'] = "Votre message est trop court.";
    } else {
        $message = htmlspecialchars($message);
    }
    if (!($civilite==='monsieur' || $civilite==='madame')) {
        $errors['civilite'] = "Vous n'avez pas indiquez votre civilité";
    }
}

?>

<div class="ms-5">
    <form action="" method="POST">
        <label for="email">Email :</label>
        <input class="d-inline-flex p-2" type="text" name="email" id="email" value="<?= $email; ?>">
        <label for="sujet">Sujet :</label>
        <select class="d-inline-flex p-2" name="sujet" id="sujet">
            <option value="rien" <?= $sujet==='rien' ? 'selected' : '' ?>></option>
            <option value="stage" <?= $sujet==='stage' ? 'selected' : '' ?>>Proposition de stage</option>
            <option value="emploi"<?= $sujet==='emploi' ? 'selected' : '' ?>>Proposition d'emploi</option>
            <option value="projet"<?= $sujet==='projet' ? 'selected' : '' ?>>Demande de projet</option>
        </select>
        <div class="form-floating mt-4">
            <textarea class="form-control" name="message" id="message" cols="30" rows="2" style="height: 100px"><?= $message ?></textarea>
            <label for="message">Message :</label>
        </div>
        <fieldset class="mt-4">
            <legend>Civilité :</legend>
    
            <div class="form-check">
                <input class="form-check-input" type="radio" id="monsieur" name="civilite" value="monsieur">
                <label class="form-check-label" for="monsieur">Monsieur</label>
            </div>
    
            <div class="form-check">
                <input class="form-check-input" type="radio" id="madame" name="civilite" value="madame">
                <label class="form-check-label" for="madame">Madame</label>
            </div>
    
        </fieldset>
        <button class="mt-4">Envoyer</button>
    
    </form>
</div>

<?php require './parties/footer.php' ?>