<?php

$age = 32;
$amount = 19599.50;
$name = 'Martin';
$isClient = true;
$options = ['livraison en 24h', 'paimement en 3 fois'];

//var_dump($age);
//echo $name . ' a ' . $age . ' ans';
//echo $name.=$age;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="signup.php" method="post">
            <fieldset>
                <legend>Inscription</legend>
                <input type="text" name="name" placeholder="Martin" required>
            </fieldset>
            <fieldset>
                <legend>Votre âge</legend>
                <input type="number" name="number" placeholder="32" required>
            </fieldset>
            <fieldset>
                <legend>Votre 1er dépôt</legend>
                <input type="number" name="number" placeholder="1900.50" required>
            </fieldset>
            <input type="submit" value="S'inscrire">
        </form>
    </main>
</body>
</html>