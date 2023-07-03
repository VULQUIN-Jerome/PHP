<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices sur les dates</title>
</head>

<body>
    <?php
    date_default_timezone_set('Europe/Paris');
    echo date('Y-m-d H:i:s T', time()) . "<br>\n";
    function traduction(string $string): string
    {
        $toFrench = [
            'Monday' => 'Lundi',
            'Tuesday' => 'Mardi',
            'Wednesday' => 'Mercredi',
            'Thursday' => 'Jeudi',
            'Friday' => 'Vendredi',
            'Saturday' => 'Samedi',
            'Sunday' => 'Dimanche',
            'January' => 'Janvier',
            'February' => 'Février',
            'March' => 'Mars',
            'April' => 'Avril',
            'May' => 'Mai',
            'June' => 'Juin',
            'July' => 'Juillet',
            'August' => 'Août',
            'September' => 'Septembre',
            'October' => 'Octobre',
            'November' => 'Novembre',
            'December' => 'Décembre',
        ];

        return str_replace(array_keys($toFrench), $toFrench, $string);
    }

    ?>
    <main>
        <h1>Exercices sur les dates</h1>
        <br><br>

        <h2>Afficher la date du jour au format "Tuesday 16 february 2021, il est 10h51 et 12 secondes</h2>
        <p><?= traduction(date('l j F Y')) . ", il est " . date('H\hi \e\t s') . " seconde(s)" ?></p>
        <br><br>

        <h2>Récupérer le jour qu'il sera dans 10 jours exactement.</h2>
        <p><?= traduction(date('l j F Y', mktime(0, 0, 0, date("m"), date("d") + 10, date("Y")))) ?></p>
        <!-- <?= traduction(date('l'), strtotime('+10 days')); ?> --> <!-- autre solution -->
        <br><br>

        <h2>Combien de jours reste-t-il avant Noël ? </h2>
        <?php
        $dateAujourdhui = date_create();
        $dateNoel = date_create(date('Y') . '-12-25');
        if ($dateAujourdhui > $dateNoel) {
            $dateNoel = date_create(date('Y') + 1 . '-12-25');
        };
        $intervalle = date_diff($dateAujourdhui, $dateNoel);
        $joursRestants = $intervalle->format('%a'); // voir doc PHP sur DateInterval::format pour les types de format
        ?>
        <p>Il reste <?= $joursRestants ?> jour(s) avant Noël</p>
    </main>
</body>

</html>