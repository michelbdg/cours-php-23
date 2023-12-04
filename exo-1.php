<?php 
/**
 * Exercice 1; inverser une chaîne 
 * Objectif: Inverser une chaîne de caractères
 * Entrée: "Bonjour"
 * Sortie attendue: "ruojnob"
 */

/**
 * nom = "Bonnjour"
 * sortie = ""
 * Pour chaque lettres de nom
 * Ajoute à sortie lettre + 1
 * FIN POUR
 */


function reverseWords($words){
    echo implode(array_reverse(str_split($words)));

}


?>