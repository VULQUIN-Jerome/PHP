<?php
/**
 * Permet de dire bonjour à quelqu'un
 */
function hello(String $name, String $langue ='fr'): String {
    $languages = [
        'en' => 'Hello',
        'fr' => 'Bonjour',
        'it' => 'Buongiorno',
    ];
    $langue = strtolower($langue);
    $languechoix=$languages[$langue] ?? $languages['fr'];

    return "$languechoix $name";
}

/**
 * Permet d'effectuer un calcul
 */
function addition(Int $number1, Int $number2, Int ... $number): Int { /* ... s'appelle le "rest operator" */
    return $number1+$number2+array_sum($number); /* Int ... $number représente un nombre de int indéfini */
}