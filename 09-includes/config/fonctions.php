<?php

/**
 * Renvoi le nom de la page actuelle.
 */
function pageName() {
    $uri = $_SERVER['REQUEST_URI'];
    $name = strrchr($uri, '/'); // renvoi /contact.php
    $name = substr($name,1,-4);// renvoi contact
    return $name;
}

/**
 * Permet de vérifier si un email est valide
 */
function validEMail(String $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Permet de valider des valeurs dans un tableau
 */
function validArray(array $data, array $valid):bool {
    foreach ($data as $item) {
        if (!in_array($item, $valid)) {
            return false;
        }
    }
    return true;
}

/**
 * Permet d'afficher checked si une valeur est dans un tableau.
 */
function checked(String $value, array $array):string {
    return in_array($value, $array) ? 'checked' : '';
}