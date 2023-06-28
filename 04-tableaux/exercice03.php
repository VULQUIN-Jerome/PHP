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

// Liste des élèves avec toute leurs notes

foreach($eleves as $eleve) { ?>
    <h2>L'élève <?= $eleve['nom']." a eu :"; ?>
    <?php foreach($eleve['notes'] as $note) { ?>
        <?= $note ?>
    <?php } ?>
    </h2>
<?php }
?>

// Moyenne de Jean

<?php
    $moyenneJean = 0;
    foreach($eleves[2]['notes'] as $note) {
        $moyenneJean += $note;
    }
    $moyenneJean /= count($eleves[2]['notes']);
    ?>
    <h2>Le moyenne de Jean est de <?= $moyenneJean ?></h2>

// Eleves ayant la moyenne

<?php
    $count=0;
    foreach($eleves as $index=>$eleve) { ?>
        <?php
        $moyenne = 0;
        foreach($eleves[$index]['notes'] as $note) { 
            $moyenne += $note; 
        }
        $moyenne /= count($eleves[$index]['notes']); 
        if ($moyenne >=10 ) {
            $count++; ?>
            <h2><?= $eleve['nom']." a la moyenne" ?></h2>
        <?php } else { ?>
            <h2><?= $eleve['nom']." n'a pas la moyenne" ?></h2>
            <?php }
            } ?>
    <h2>Nombre d'élèves avec la moyenne : <?= $count ?></h2>

    // A FINIR DERNIERE PARTIE
        
</body>
</html>