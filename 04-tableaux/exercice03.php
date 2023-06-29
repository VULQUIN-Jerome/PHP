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

    <!-- Liste des élèves avec toute leurs notes -->

    <?php foreach ($eleves as $eleve) { ?>
        <h2>L'élève <?= $eleve['nom'] . " a eu : ".implode(", ", $eleve['notes']); ?></h2> 
    <?php }
    ?>
    <hr>

    <!-- Moyenne de Jean -->

    <?php
    $moyenneJean = array_sum($eleves[2]['notes'])/count($eleves[2]['notes']);
    ?>
    <h2>Le moyenne de Jean est de <?= $moyenneJean ?></h2>
    <hr>

    <!-- Eleves ayant la moyenne -->

    <?php
    $count = 0;
    foreach ($eleves as $index => $eleve) { 
        $moyenne = array_sum($eleves[$index]['notes'])/count($eleves[$index]['notes']);
        if ($moyenne >= 10) {
            $count++; ?>
            <h2><?= $eleve['nom'] . " a la moyenne" ?></h2>
        <?php } else { ?>
            <h2><?= $eleve['nom'] . " n'a pas la moyenne" ?></h2>
    <?php }
    } ?>
    <h2>Nombre d'élèves avec la moyenne : <?= $count ?></h2>
    <hr>

    <!-- Eleve(s) ayant la meilleure note -->

    <?php
    $meilleureNote = 0;
    $elevesMeilleureNote = [];
    foreach ($eleves as $eleve) {
        $meilleureNoteEleve = max($eleve['notes']);
        if ($meilleureNoteEleve > $meilleureNote) {
            $meilleureNote = $meilleureNoteEleve;
        }
    }

    foreach ($eleves as $eleve) {
        if (in_array($meilleureNote, $eleve['notes'])) {
            $elevesMeilleureNote[] = $eleve['nom'];
        }
    }
    ?>
    <h2><?= implode(", ", $elevesMeilleureNote) . " a/ont la meilleure note : " . $meilleureNote ?></h2>
    <hr>

    <!-- Eleve ayant déjà eu un 20  -->

    <?php
    $noteFound = 20;
    $elevesAyantEu = [];
    foreach ($eleves as $eleve) {
        if (in_array($noteFound, $eleve['notes'])) {
            $elevesAyantEu[] = $eleve['nom'];
        }
    }
    ?>
    <h2><?= implode(", ", $elevesAyantEu) . " a/ont déjà eu un " .$noteFound ." !" ?></h2>

</body>

</html>