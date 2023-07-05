<?php
/**
 * Script qui permet d'importer un CSV dans une base de données
 */

// Ouvrir le fichier categories.csv
$file = fopen('exports/categories.csv','r');  // 'r' indique que le fichier sera en mode lecture

$categories = [];
$count = 0;

while ($line = fgetcsv($file, null, ';')) { // On va parcourir le chier ligne par ligne
    if ($count++ === 0) {
        continue; // On passe la première ligne du csv
    }
    $categories[] = [
        'name' => $line[1],
    ];
};

// Connexion à la BDD pour importer les catégories
require 'config/functions.php';

// A décommenter si on veut refaire la table neuve
db()->query('
    SET FOREIGN_KEY_CHECKS = 0 ;
    TRUNCATE category;
    TRUNCATE movies;
    SET FOREIGN_KEY_CHECKS = 1 ;
');

foreach ($categories as $category) {
    // la requete dessous équivaut à 'INSERT INTO category (name) VALUES (?)';
    $query = db()->prepare('INSERT INTO category (name) VALUES (:name)');
    $query->execute($category); // ->execute(['name' => 'Action]);
}

// Ouvrir le fichier movies.csv
// Refacto du code pour importer le CSV
$file = fopen('exports/movies.csv', 'r');
$movies = [];

$headers = fgetcsv($file, null, ';'); // ['title', 'released_at', 'description'];
// On va parcourir le fichier ligne par ligne
while ($line = fgetcsv($file, null, ';')) {
    $item = [];

    foreach ($line as $key => $value) {
        $item[$headers[$key]] = $value;
    }

    $movies[] = $item;
}

foreach ($movies as $movie) {
    unset($movie['id_movie']); // L'id n'est pas utile car auto-incrémenté
    $query = db()->prepare('INSERT INTO
        movie (title, released_at, description, duration, cover, id_category)
        VALUES (:title, :released_at, :description, :duration, :cover, :id_category)');
    $query->execute($movie);
}
?>