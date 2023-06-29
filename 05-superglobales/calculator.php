<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <?php
    $number1 = $_GET['nombre1'] ?? null;
    $number2 = $_GET['nombre2'] ?? null;
    $operateur = $_GET['operateur'] ?? "+";
    $number1 = (int) $number1;
    $number2 = (int) $number2;

    if ($number1!==null && $number2!==null && $operateur) { 
        if ($operateur == "+") {
            $resultat = $number1 + $number2;
        } else if ($operateur == "-" ) {
            $resultat = $number1 - $number2;
        } else if ($operateur == "*" ) {
            $resultat = $number1 * $number2;
        } else if ($operateur == "/" ) {
            $resultat = $number1 / $number2;
        } else { echo "Erreur !"; }
    } ?>
    
    <form action="" method="GET">
        <div>
            <label for="nombre1">Première valeur</label>
            <input type="number" name="nombre1" id="nombre1" value="<?= $number1 ?>">
            <label for="nombre2">Première valeur</label>
            <input type="number" name="nombre2" id="nombre2" value="<?= $number2 ?>">
        </div>
        <div>
            <label for="OPERATEUR">Opérateur : </label>
            <select name="operateur" id="OPERATEUR">
                <option value="+" <?= "+" == $operateur ? 'selected' : '' ?>> + </option>
                <option value="-" <?= "-" == $operateur ? 'selected' : '' ?>> - </option>
                <option value="*" <?= "*" == $operateur ? 'selected' : '' ?>> x </option>
                <option value="/" <?= "/" == $operateur ? 'selected' : '' ?>> / </option>
            </select>
        </div>
        <button>Calculer</button>
    </form>

    <?php if (isset($resultat)) { ?>
        <h2><?= "Le résultat est : $resultat" ?></h2> 
    <?php }
    ?>
    
</body>
</html>