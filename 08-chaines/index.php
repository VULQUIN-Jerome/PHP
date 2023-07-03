<?php
/**
* Fonctions sur les chaines
*/

// On peut  extraire des chaines*
$email = 'fiorella@bodydev.com';
$domaine = strstr($email, '@'); // retourne @bodydev.com
$domaine = substr($domaine,1); // supprime le 1er caractere de la chaine => retourn boxydex.com
$username = strstr($email,'@',true); // fiorella

echo "Le domaine est $domaine et l'utilisateur est $username<br>";

// Vérifier qu'une chaine contient un truc
if (str_contains($email, 'boxydev')) {
    echo "L'email $email contient boxydev";
}

// On peut remplacer des termes dans une chaine
echo 'Email anonyme :';
echo str_replace('Fiorella', '********', $email).'<br>';

// En PHP, une chaine est un tableau sin on la transforme avec str_split
foreach (str_split( $username) as $letter) {
    echo "$letter -";
}

echo $username[2].'<br>';

// substr ( fiorella@boxydev.com)

echo substr($email,0,8).'<br>'; // fiorella
echo substr($email,9,-4).'<br>'; // boxydev
echo substr($email,-3).'<br>'; // com

// Transformer des chaines en tableau
$countries = 'Italie, France, Portugal';
$countries = explode(', ', $countries );
var_dump($countries);

echo implode('; ', $countries);

// Quelques fonctions trés utile pour les formulaires
$password = 'azerty123     ';
$password = trim($password); // Supprime les espaces en début et en fin de chaine
var_dump($password);

echo "Le mot de passe $password fait ".strlen($password).' caractères <br>';

// Exemple faille XSS
$message = $_GET['message'] ?? null;
$message = htmlspecialchars($message ?? '');

// strip_tags($message);  Supprime les balises
echo $message;
?>