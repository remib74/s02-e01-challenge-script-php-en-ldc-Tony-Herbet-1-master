<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Conditions - BONUS ----
// fiche récap : https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/conditions.md

// On détermine un nombre aléatoire comme âge d'un enfant entre 0 et 6 ans, pour l'exécution de ce script
// A chaque exécution, $age devrait avoir une nouvelle valeur
$age = mt_rand(0, 6);

echo PHP_EOL.'|---- $age = '.$age.' ----|'.PHP_EOL;

/* -----------------------------------
Selon l'âge de l'enfant, on veut savoir quel(s) service(s) peuvent s'occuper de lui.

Voici la liste des services :
    - protection maternelle et infantile : 0 – 6 ans
    - crèche : 0 – 3 ans
    - halte garderie, jardin d'enfants, jardins d'éveil et autres structures passerelles : 0 – 6 ans
    - assistante maternelle : 0 – 6 ans
    - école maternelle : 2 – 6 ans
    - centres d’action médico-sociale précoce : 0 – 6 ans

Remplir les $variables suivantes de type booléen, selon l'âge de l'enfant
*/
$protectionMaternelleEtInfantile = null; // null = aucune valeur d'aucun type
$creche = null;
$halteGarderie = null;
$jardinDEnfants = null;
$jardinDEveil = null;
$assistanteMaternelle = null;
$ecoleMaternelle = null;
$centreDActionMedicoSocialePrecoce = null; // aka le bien connu CAMSP !

// TON CODE ICI
if ($age<7&&$age>=3 ) {

    $protectionMaternelleEtInfantile=true;
    $halteGarderie = true;
    $assistanteMaternelle = true;
    $centreDActionMedicoSocialePrecoce = true; 
}
if ($age<=3) {
    $creche = true;
}
if ($age<=2) {
    $creche = true;
    $ecoleMaternelle = true;
}

// FIN DE TON CODE
displayExo('conditions-a');
$aOk = checkVariableValue(array('protectionMaternelleEtInfantile'=>$age<7,'creche'=>$age<4,'halteGarderie'=>$age<7,'jardinDEnfants'=>$age<7,'jardinDEveil'=>$age<7,'assistanteMaternelle'=>$age<7,'ecoleMaternelle'=>$age>1&&$age<7,'centreDActionMedicoSocialePrecoce'=>$age<7));

displayEnd($aOk);
