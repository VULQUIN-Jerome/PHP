<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 03</title>
</head>

<body>
    <?php

    $eleves = [
        0 => [
            'nom' => 'Matthieu',
            'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
        ],
        1 => [
            'nom' => 'Thomas',
            'notes' => [4, 18, 12, 15, 13, 7]
        ],
        2 => [
            'nom' => 'Jean',
            'notes' => [17, 14, 6, 2, 16, 18, 9]
        ],
        3 => [
            'nom' => 'Enzo',
            'notes' => [1, 14, 6, 2, 1, 8, 9]
        ]
    ];
    ?>

    <h2> Liste des élèves avec toute leurs notes </h2>

    <?php foreach ($eleves as $eleve) { ?>
        <h3>L'élève <?= $eleve['nom'] . " a eu : " . implode(", ", $eleve['notes']); ?></h3>
    <?php }
    ?>
    <hr>

    <h2> Moyenne de Jean </h2>

    <?php
    $moyenneJean = round(array_sum($eleves[2]['notes']) / count($eleves[2]['notes']), 2);
    ?>
    <h3>Le moyenne de Jean est de <?= $moyenneJean ?></h3>
    <hr>

    <h2> Eleves ayant la moyenne </h2>

    <?php
    $count = 0;
    foreach ($eleves as $index => $eleve) {
        $moyenne = array_sum($eleves[$index]['notes']) / count($eleves[$index]['notes']);
        if ($moyenne >= 10) {
            $count++; ?>
            <h2><?= $eleve['nom'] . " a la moyenne" ?></h2>
        <?php } else { ?>
            <h2><?= $eleve['nom'] . " n\'a pas la moyenne" ?></h2>
    <?php }
    } ?>
    <h2>Nombre d'élèves avec la moyenne : <?= $count ?></h2>
    <hr>

    <h2> Eleve(s) ayant la meilleure note </h2>

    <?php
    $meilleureNote = max(array_merge(...array_column($eleves, 'notes')));
    $elevesMeilleureNote = [];

    foreach ($eleves as $eleve) {
        if (in_array($meilleureNote, $eleve['notes'])) {
            $elevesMeilleureNote[] = $eleve['nom'];
        }
    }
    ?>
    <h2><?= implode(", ", $elevesMeilleureNote) . " a/ont la meilleure note : " . $meilleureNote ?></h2>
    <hr>

    <h2> Eleve ayant déjà eu un 20  </h2>

    <?php
    $noteFound = 20;
    $elevesAyantEu = [];
    foreach ($eleves as $eleve) {
        if (in_array($noteFound, $eleve['notes'])) {
            $elevesAyantEu[] = $eleve['nom'];
        }
    }
    ?>
    <h2><?= implode(", ", $elevesAyantEu) . " a/ont déjà eu un " . $noteFound . " !" ?></h2>

</body>

</html>