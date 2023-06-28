<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    <h2>Tableau numérique</h2>
    <?php
        $drinks = ['Monster', 'Coca-cola', 'Orangina'];
        // Afficher Orangina
        echo $drinks[2];

        // Comment on peut ajouter une boisson dans le tableau
        $drinks[] = 'Ice Tea';
        array_push($drinks,'Eau'); // Ancienne syntaxe

        // Comment ramplacer une valeur ?
        $drinks[1] = 'Vittel';

        // Comment retirer une valeur
        unset($drinks[2]);

        
    ?>

    <ul>
        <?php foreach($drinks as $index => $drink) { ?>
            <li><?= "$index : $drink"; ?></li>
        <?php } ?>
    </ul>
    
    <h2>Tableau associatif</h2>
    <?php
        $fruits = [
            'rouge' => 'Fraise',
            'jaune' => 'Banane',
            'Cerise',
            'orange' => 'Orange',
            'Pomme',
        ];

        $fruits['orange'] = 'Abricot';
        $fruits['violet'] = 'Framboise';
        var_dump($drinks);

        // On utilise les mêmes méthodes que le tableau numérique pour ajouter / supprimer ...
    ?>
    <ul>
        <?php foreach($fruits as $index => $fruit) { ?>
            <li><?= "$index : $fruit"; ?></li>
        <?php } ?>
    </ul>

    <h2>Tableau multidimensionnel</h2>
    <?php
        $users = [ // Dimension 1
            [ // Dimension 2
                'name' => 'Mota',
                'firstname' => 'Fiorella',
                'phone' => '06000000',
                'adresses' => ['Mulluch', 'Lens', 'Lille'], // Dimension 3
            ],
            [
                'name' => 'Doe',
                'firstname' => 'John',
                'phone' => '07000000',
                'adresses' => ['Château Thierry'],
            ],
        ];
    ?>
    <p><?= $users[0]['firstname']." ".$users[0]['name'] ?> vit à <?= $users[0]['adresses'][0] ; ?></p>
    <h3>Nous avons <?= count($users); ?> utilisateurs</h3>
    <?php foreach ($users as $user) { ?>
        <div>
            <h2><?= $user['firstname']." ".$user['name'] ?></h2>
            <ul>
                <?php foreach ($user['adresses'] as $address) { ?>
                    <li><?= $address; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>
</html>