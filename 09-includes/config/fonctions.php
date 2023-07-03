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
