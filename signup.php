<?php
/**
 * Le traitemnt du formulaire se fait ici.
 * Notre algorithme doit faire les choses suivantes :
 * Récupérer les données du formulaire
 * Vérifier que les données sont valides
 * Si les données sont valides, on affiche un message de bienvenue et récapitulatif
 */


//Récupération des données du formulaire grâce à la superglobale $_POST
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $age = $_POST['age'];
    var_dump( intval($age) );

    isValid($name, $age, $amount);

} else {
    echo 'Devenez client en remplissant le formulaire <a href="./index.php">Ici</a>';
}

function isAdult(int  $age) : bool{
    return $age > 17 ? true : false;
}

function isValidAmount( int $amount) : bool {
    return $amount > 999.99 ? true: false;
}

function isValid(string $name,int $age, int $amount){
    if(isAdult($age) && isValidAmount($amount)){
        echo 'Bienvenue ' . $name . ', bienvenue ! Votre premier dépôt est de ' . $amount . '€.';
    } else{
        echo 'Vous devez être majeur pour effecuter votre premier dépôt supérieur a 1000€.';
    }
}


?>