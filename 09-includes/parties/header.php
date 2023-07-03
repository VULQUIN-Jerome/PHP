<?php
require __DIR__.'./../config/fonctions.php';
$start = microtime(true); // benchmark les performances de la page
$title = isset($title) ? "$title - Shop" : 'Shop'; // Gérer le titre du document
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title><? $title ?></title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a class="nav-link<?= pageName() === 'index' ? ' active' : ''?>" aria-current="page" href="index.php">Accueil</a>
                        <a class="nav-link<?= pageName() === 'contact' ? ' active' : ''?>" href="contact.php">Contact</a>
                        <a class="nav-link<?= pageName() === 'a-propos' ? ' active' : ''?>" href="a-propos.php">A propos</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>