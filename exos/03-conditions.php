<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Conditions ----
// fiche récap : https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/conditions.md

// On détermine un nombre aléatoire comme âge pour l'exécution de ce script
// A chaque exécution, $age devrait avoir une nouvelle valeur
$age = mt_rand(1,40);

echo PHP_EOL.'|---- $age = '.$age.' ----|'.PHP_EOL;

/* -----------------------------------
a) On souhaite savoir si une personne est adulte ou non
$age contient un age aléatoire compris en 1 et 40
$estAdulte est la variable à remplir, de type booléen (vrai/faux)
*/
$estAdulte = null; // null = aucune valeur d'aucun type

// TON CODE ICI

// si l'age est supérieur ou égal à 18 ans
if ($age >= 18) {
    // alors la personne est adulte
    $estAdulte = true;
}
// sinon
else {
    // la personne n'est pas adulte
    $estAdulte = false;
}

// FIN DE TON CODE
displayExo('conditions-a');
$aOk = checkVariableValue(array('estAdulte'=>($age>=18)));

/* -----------------------------------
b) Selon Wikipédia : "La Convention des droits de l'enfant des Nations Unies définit l'enfance comme la période allant de la naissance à 18 ans et l'adolescence comme la période allant de 10 à 19 ans"
En partant des informations de cette phrase, et à partir de la variable $age, remplir les valeurs (vrai/faux) dans les variables $estEnfant, $estAdolescent, $estAdulte.
Exécuter à plusieurs reprise le script afin de tester plusieurs "tranches" d'âge aléatoirement
*/
$estEnfant = null; // null = aucune valeur d'aucun type
$estAdolescent = null;
$estAdulte = null;

// TON CODE ICI

// on prévoit des valeurs par défaut
// on pourrait considérer que par défaut la personne est adulte
$estAdulte = true;
$estEnfant = false;

// Enfant ou adulte ?
// si l'age est inférieur à 18 ans
if ($age < 18) {
    // enfant
    $estEnfant = true;
    $estAdulte = false;
}
// // sinon 
// else {
//     // adulte
//     $estAdulte = true;
// }

// version alternative
$estEnfant = $age < 18; // bool
$estAdulte = $age >= 18; // bool

// Adolescent ?
// si l'age est compris entre 10 et 19
// => si l'âge est supérieur ou égal à 10 et si l'age inférieur ou égal à 19 alors ça veut dire que c'est un adolescent
// (c) manon-g
// if ($age > 9 && $age < 20) est équivalent
if ($age >= 10 && $age <= 19) {
    // ado
    $estAdolescent = true;
}

// alternative
// 1. PHP va interpréter le && => deux conditions à vérifier
// 2. Vérif de la première condition (à gauche)
// 3. Remplacer les variables par leur valeur (ici par ex. 13 >= 10)
// 4. Convertir le teste de gauche en bool 
// 5. Si la première condition est vérifiée (a renvoyé true), PHP évalue la deuxième condition (sinon il renvoie false immédiatement)
$estAdolescent = $age >= 10 && $age <= 19;// bool

// FIN DE TON CODE
if (isset($aOk) && $aOk) {
    displayExo('conditions-b');
    $bOk = checkVariableValue(array('estEnfant'=>$age<18, 'estAdolescent'=>$age>9&&$age<20, 'estAdulte'=>($age>=18)));

    displayEnd($bOk);
}

/* BONUS
-----------------------------------
=> direction le fichier 03-conditions-bonus.php !
*/