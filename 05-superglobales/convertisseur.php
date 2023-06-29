<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur</title>
</head>
<body>
    <?php
    $montant = $_POST['montant'] ?? null;
    $choix = $_POST['choix'] ?? 'bitcoins'; 
    $montant = (int) $montant;
    ?>
    <form action="" method="POST">
        <label for="MONTANT">Indiquez votre montant</label>
        <input type="number" name="montant" id="MONTANT">
        <select name="choix">
            <option value="bitcoins" <?= "bitcoins" == $choix ? 'selected' : '' ?>>Euros vers bitcoins</option>
            <option value="euros" <?= "euros" == $choix ? 'selected' : '' ?>>Bitcoins vers euros</option>
        </select>
    <?php
    if (isset($montant)) {
        if ($choix == "bitcoins") { ?>
            <h2>Ce montant équivaut à <?= $montant/27888.40 ?> Bitcoins</h2>
        <?php } else { ?>
            <h2>Ce montant équivaut à <?= $montant*27888.40 ?> Euros</h2>
        <?php }
    }
    ?>

    <button>Convertir</button>
    </form>
    
</body>
</html>