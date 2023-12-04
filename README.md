# Formation PHP

## Pré-requis

Les pré-requis pour cette formation sont les suivants :

-   Bases en algorithmie
-   Bases en HTML/CSS
-   Un serveur web local (WAMP, MAMP, LAMP, XAMPP, etc.)
-   PHP 8.2 ou supérieur

## Objectifs

-   Comprendre les bases du langage PHP
-   Implémenter des algorithmes simples en PHP
-   Consommer une API REST en PHP
-   Créer un site web dynamique en PHP

---

### Introduction

Prise en main du langage PHP, apprendre à écrire du code PHP, comprendre les bases du langage. Série d'exercices pour mettre en pratique les notions vues avec l'implémentation d'algorithmes simples.

### Les bases du langage

PHP est un langage de programmation interprété, c'est-à-dire qu'il est exécuté par un interpréteur (le plus souvent, un serveur web). Il est utilisé pour générer des pages web dynamiques, mais aussi pour créer des scripts en ligne de commande.

Les types de données de base en PHP sont les suivants :

-   Les nombres entiers (int)
-   Les nombres décimaux (float)
-   Les chaînes de caractères (string)
-   Les booléens (bool)
-   Les tableaux (array)
-   Les objets (object)

#### Les variables

Une variable est un espace mémoire dans lequel on peut stocker une valeur. En PHP, on déclare une variable avec le symbole `$` suivi du nom de la variable. On peut ensuite lui affecter une valeur avec le symbole `=`.

```php
$age = 32;
$amount = 19599.50;
$name = 'Martin';
$isClient = true;
$options = ['livraison en 24h', 'paiement en 3 fois'];
```

Concernant les objets, on verra plus tard comment les utiliser. Contrairement à d'autres langages, PHP est un langage faiblement typé, c'est-à-dire que l'on n'est pas obligé de déclarer le type de la variable.

Remarques :

-   les noms de variables sont sensibles à la casse, c'est-à-dire que `$age` et `$Age` sont deux variables différentes.
-   la nomination des variables doit suivre certaines règles :
    -   le nom doit commencer par une lettre ou un underscore
    -   le nom ne doit pas contenir d'espace
    -   le nom ne doit pas contenir de caractères spéciaux (sauf underscore)
    -   le nom ne doit pas commencer par un chiffre
    -   le nom ne doit pas être un mot réservé (par exemple `echo`, `if`, `else`, `while`, etc.)
-   chaque instruction doit se terminer par un point-virgule (`;`)

#### Les constantes

Une constante est un espace mémoire dans lequel on peut stocker une valeur. Contrairement à une variable, la valeur d'une constante ne peut pas être modifiée une fois qu'elle a été définie. En PHP, on déclare une constante avec la fonction `define()`.

```php
define('PI', 3.14);
```

Exemple d'utilisation classique :

```php
$total = 0;
$a = 5;
$total = $a + 10;

echo $total > 1 ? 'Le total est ' . $total : 'Désolé le total est inférieur à 1';
```

Exemple d'utilisation avec une constante :

```php
define(total, 0);
$a = 5;
total = $a + 10;

echo total > 1 ? 'Le total est ' . total : 'Désolé le total est inférieur à 1';
```

Quelque soit la valeur de `$total`, le résultat sera toujours le même. Les constantes sont utiles pour stocker des valeurs qui ne doivent pas être modifiées, comme par exemple les identifiants de connexion à une base de données ou les identifiants d'une API.

#### Les opérateurs

Comme dans tous les langages de programmation, PHP dispose d'opérateurs arithmétiques, de comparaison et logiques. Petit récap :

| Opérateur | Desc | Exemple | Résultat |
| --------- | ------------------ | ----------------------- | ---------------- | 
Addi | `5 + 2` | `7 | 
Sous | `5 - 2`  |`3 | 
Mult | `5 * 2` | `1 | 
Divi | `5 / 2`  |`2 | 
Modu | `5 % 2` | `1 | 
Expo | `5 \*\* 2` |`2 | 
Égal | `5 == 2` | `f | 
Diff | `5 != 2` |`t | 
Différence de type | `5 !== '5 | `t | 
Supé | `5 > 2` | `t       | 
Infé    | `5 < 2`     |`f | 
Supérieur ou égal | `5 >= 2` | `t       | 
Inférieur ou égal  | `5 <= 2` |`f | ET l | `true &&     | `f | 
OU l | `true \|\    | `t | 
NON | `!true` | `f       | 
Concatenation    | `'Salut '`.`'Martin'`|`'Salut Martin'` |

#### Les structures conditionnelles

Les structures conditionnelles permettent d'exécuter un bloc d'instructions en fonction d'une condition. En PHP, on utilise les mots-clés `if`, `elseif` et `else` pour créer des structures conditionnelles. Un peu pllus tôt, on a vu l'opérateur ternaire `?:` qui permet de créer une structure conditionnelle simplifiée.

```php
if (isClient) {
  echo 'Bienvenue sur notre site';
} else {
  echo 'Qu\'attendez-vous pour vous inscrire ?';
}
```

```php
if (date('H') < 12) {
  echo 'Bonjour';
} elseif (date('H') < 18) {
  echo 'Bon après-midi';
} else {
  echo 'Bonsoir';
}
```

Ces structures conditionnelles peuvent être simplifiées avec l'opérateur ternaire :

```php
echo isClient ? 'Bienvenue sur notre site' : 'Qu\'attendez-vous pour vous inscrire ?';
echo date('H') < 12 ? 'Bonjour' : (date('H') < 18 ? 'Bon après-midi' : 'Bonsoir');
```

L'opération ternaire est très utile pour affecter une valeur à une variable en fonction d'une condition, ce n'est pas une solution de remplacement aux structures conditionnelles. Simplement une alternative.

#### Les structures itératives

Pour les structures itératives, on utilise les mots-clés `while`, `do...while`, `for` et `foreach`. Ces structures permettent d'exécuter un bloc d'instructions plusieurs fois de suite. On les appelle aussi des boucles.

Exemples

Boucle `while`, cette boucle va s'exécuter tant que la condition est vraie :

```php
$i = 0;

while ($i < 10) {
  echo $i;
  $i++;
}
```

Boucle `do...while`, cette boucle va s'exécuter au moins une fois, puis tant que la condition est vraie :

```php
$i = 0;

do {
  echo $i;
  $i++;
} while ($i < 10);
```

La différence entre les deux boucles est que la boucle `while` teste la condition avant d'exécuter le bloc d'instructions, alors que la boucle `do...while` exécute le bloc d'instructions au moins une fois, puis teste la condition.

Boucle `for`, cette boucle va s'exécuter tant que la condition est vraie :

```php
for ($i = 0; $i < 10; $i++) {
  echo $i;
}
```

Boucle `foreach`, cette boucle est utilisée pour parcourir un tableau de données :

```php
$options = ['livraison en 24h', 'paiement en 3 fois'];

echo '<ul>';
foreach ($options as $option) {
  echo '<li>' . $option . '</li>';
}
echo '</ul>';
```

Pour ce dernier exemple, on utilise aussi echo pour afficher le code HTML. Par contre, ne t'habitue pas à cette pratique, c'est juste pour l'exemple. On verra plus tard comment afficher du code HTML avec PHP. Ça, c'est ce qu'on appelle du code spaghetti, c'est-à-dire du code qui mélange le HTML et le PHP.

#### Les fonctions

Une fonction est un bloc d'instructions qui peut être appelé plusieurs fois dans le code. En PHP, on déclare une fonction avec le mot-clé `function` suivi du nom de la fonction et de ses paramètres entre parenthèses. On peut ensuite appeler la fonction en utilisant son nom suivi de parenthèses.

```php
function abc() {
  // Instructions
}
```

Comme toute fonction, une fonction en PHP peut recevoir des paramètres. Ces paramètres sont appelés des arguments lors de l'appel de la fonction. Les paramètres sont séparés par des virgules.

```php
function abc($a, $b) {
  // Instructions
}
```

Exemple :

Sans plus tarder, mettons en place un formulaire d'inscription pour notre site web. On va créer un fichier `index.php` dans lequel on va mettre le code HTML de notre formulaire. On va ensuite créer un fichier `signup.php` dans lequel on va mettre le code PHP de notre formulaire.

```php
# index.php

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
```

Ici, on a un formulaire avec trois champs : nom, âge et montant du premier dépôt. On a aussi un bouton pour soumettre le formulaire. On a ajouté un attribut `action` à la balise `form` pour indiquer l'URL de la page qui va traiter les données du formulaire. On a aussi ajouté un attribut `method` pour indiquer la méthode HTTP à utiliser pour envoyer les données du formulaire. Dans notre cas, on utilise la méthode `post`.

Rappel express sur les méthodes HTTP :

-   `GET` : utilisée pour récupérer des données
-   `POST` : utilisée pour envoyer des données
-   `PUT` : utilisée pour mettre à jour des données
-   `DELETE` : utilisée pour supprimer des données

On passe maintenant à la page `signup.php` :

```php
# signup.php

<?php
/**
 * Le traitement du formulaire se fait ici.
 * Notre algorithme doit faire les choses suivantes :
 * - Récupérer les données du formulaire
 * - Vérifier que les données sont valides
 * - Si les données sont valides, on affiche un message de bienvenue et récapitulatif
 */

// Récupération des données du formulaire grâce à la superglobale $_POST
isset($_POST['name']) {
    $name = $_POST['name']; // name
    $age = $_POST['age']; // age
    $amount = $_POST['amount']; // amount
    isValid();
}

/**
 * Vérification des données
 * Voici les règles de validation :
 * - L'âge doit être supérieur ou égal à 18 ans
 * - Le montant doit être supérieur ou égal à 1000
 */

// On commence par vérifier l'âge
function isAdult($age) {
    return $age >= 18;
}

// On vérifie ensuite le montant
function isValidAmount($amount) {
    return $amount >= 1000.00;
}

// On vérifie que les données sont valides
function isValid() {
    if (isAdult($age) && isValidAmount($amount)) {
        echo 'Bienvenue ' . $name . ', vous avez ' . $age . ' ans et votre solde est de ' . $amount . '€';
    } else {
        echo 'Désolé, les données saisies ne sont pas valides. Vous devez être majeur et le premier dépôt doit être supérieur ou égal à 1000€';
    }
}
```

On a donc créé deux fonctions pour vérifier les données du formulaire. La première fonction `isAdult()` vérifie que l'âge est supérieur ou égal à 18 ans. La deuxième fonction `isValidAmount()` vérifie que le montant est supérieur ou égal à 1000€. On a ensuite utilisé ces deux fonctions dans une structure conditionnelle pour afficher un message de bienvenue si les données sont valides, ou un message d'erreur si les données ne sont pas valides.

Ces deux fonctions sont très simples, elle retournent simplement un booléen grâce à `return`.

#### Les tableaux

Un tableau est une structure de données qui permet de stocker plusieurs valeurs dans une seule variable. En PHP, on déclare un tableau avec les crochets `[]`.

```php
$options = ['livraison en 24h', 'paiement en 3 fois'];
```

L'index d'un tableau commence à 0. Pour accéder à une valeur du tableau, on utilise l'index entre crochets.

```php
echo $options[0]; // livraison en 24h
echo $options[1]; // paiement en 3 fois
```

La manipulation des tableaux est très simple en PHP :

| Fonction          | Description                                           |
| ----------------- | ----------------------------------------------------- |
| `count()`         | Retourne le nombre d'éléments dans un tableau         |
| `sort()`          | Trie un tableau par ordre croissant                   |
| `rsort()`         | Trie un tableau par ordre décroissant                 |
| `array_push()`    | Ajoute un ou plusieurs éléments à la fin d'un tableau |
| `array_pop()`     | Supprime le dernier élément d'un tableau              |
| `array_shift()`   | Supprime le premier élément d'un tableau              |
| `array_unshift()` | Ajoute un ou plusieurs éléments au début d'un tableau |
| `array_merge()`   | Fusionne un ou plusieurs tableaux en un seul tableau  |
| `array_slice()`   | Extrait une portion d'un tableau                      |
| `array_splice()`  | Supprime et remplace une portion d'un tableau         |
| `array_sum()`     | Calcule la somme des valeurs d'un tableau             |

On peut aussi utiliser les fonctions `array_key_exists()` et `in_array()` pour vérifier si une clé ou une valeur existe dans un tableau. Ce sera tout pour les fonctions sur les tableaux pour le moment.

#### Les fonctions natives

PHP dispose de nombreuses fonctions natives qui permettent de faire des choses très utiles. Voici une liste non exhaustive des fonctions natives les plus utilisées :

| Fonction      | Description                                           |
| ------------- | ----------------------------------------------------- |
| `echo()`      | Affiche une ou plusieurs chaînes de caractères        |
| `print()`     | Affiche une chaîne de caractères                      |
| `print_r()`   | Affiche le contenu d'un tableau                       |
| `var_dump()`  | Affiche le contenu et le type d'une variable          |
| `die()`       | Arrête l'exécution du script et affiche un message    |
| `sleep()`     | Arrête l'exécution du script pendant un certain temps |
| `isset()`     | Vérifie si une variable est définie                   |
| `empty()`     | Vérifie si une variable est vide                      |
| `is_int()`    | Vérifie si une variable est de type int               |
| `is_float()`  | Vérifie si une variable est de type float             |
| `is_string()` | Vérifie si une variable est de type string            |
| `is_bool()`   | Vérifie si une variable est de type bool              |
| `is_array()`  | Vérifie si une variable est de type array             |
| `is_null()`   | Vérifie si une variable est de type null              |
| `date()`      | Retourne la date et l'heure actuelle                  |
| `time()`      | Retourne le timestamp actuel                          |

#### Les objets

Les objets sont des structures de données plus complexes que les tableaux. En PHP, on déclare un objet avec le mot-clé `class` suivi du nom de la classe. On peut ensuite instancier un objet avec le mot-clé `new` suivi du nom de la classe et de ses paramètres entre parenthèses. Mais pour le moment, on va se contenter d'utiliser des objets déjà existants en PHP.

```php
// Objet de la classe DateTime
$date = new DateTime();

// Objet de la classe DateTime avec paramètres
$date = new DateTime('2024-09-01'); // 1er septembre 2024
echo $date->format('d/m/Y'); // 01/09/2024
```

Pour accéder à une propriété ou une méthode d'un objet, on utilise le symbole `->`. Ici on utilise la méthode `format()` de l'objet `$date` pour afficher la date au format `d/m/Y`. Un méthode est une fonction qui appartient à une classe. On verra plus tard comment créer nos propres classes et objets.

---

## Exercices

Voici 10 challanges pour mettre en pratique les notions vues dans cette initiation au PHP.

Instructions :

-   créer un fichier pour chaque exercice
-   rédige un algorithme en pseudo-code avant de commencer à coder
-   implémente l'algorithme en PHP
-   réalise un commit à chaque exercice terminé
-   pousser le code sur GitHub à la fin
-   utiliser chatGPT n'est pas autorisé pour cet exercice

Si tu parviens à terminer tous les exercices en premier/première, je t'offre une clé API OpenAI valable 1 semaine pour t'exercer à créer une app qui utilise l'IA de GPT-4.

---

#### Exercice 1: Inverser une Chaîne

Objectif: Inverser une chaîne de caractères.

-   Entrée: "Bonjour"
-   Sortie attendue: "ruojnoB"

---

#### Exercice 2: Somme des Nombres

Objectif: Calculer la somme de tous les nombres jusqu'à un nombre donné.

-   Entrée: 5
-   Sortie attendue: 15 (1+2+3+4+5)

---

#### Exercice 3: Factorielle

Objectif: Trouver la factorielle d'un nombre.

-   Entrée: 4
-   Sortie attendue: 24 (1*2*3\*4)

---

#### Exercice 4: Trouver le Plus Grand Nombre

Objectif: Trouver le plus grand nombre dans un tableau.

-   Entrée: [3, 7, 2, 5]
-   Sortie attendue: 7

---

#### Exercice 5: FizzBuzz

Objectif: Pour chaque nombre de 1 à N, imprimer "Fizz" si le nombre est divisible par 3, "Buzz" s'il est divisible par 5, "FizzBuzz" s'il est divisible par les deux, sinon imprimer le nombre.

-   Entrée: 5
-   Sortie attendue: 1, 2, Fizz, 4, Buzz

---

#### Exercice 6: Compter les Voyelles

Objectif: Compter le nombre de voyelles dans une chaîne.

-   Entrée: "Algorithmique"
-   Sortie attendue: 5

---

#### Exercice 7: Palindrome

Objectif: Vérifier si une chaîne est un palindrome.

-   Entrée: "radar"
-   Sortie attendue: Vrai

---

#### Exercice 8: Trouver les Éléments Communs

Objectif: Trouver les éléments communs entre deux tableaux.

-   Entrée: [1, 2, 3], [2, 3, 4]
-   Sortie attendue: [2, 3]

---

#### Exercice 9: Nombre Premiers

Objectif: Générer une liste de nombres premiers jusqu'à un certain nombre.

-   Entrée: 10
-   Sortie attendue: [2, 3, 5, 7]

---

#### Exercice 10: Fibonacci

Objectif: Générer une série Fibonacci jusqu'au N-ième terme.

-   Entrée: 5
-   Sortie attendue: [0, 1, 1, 2, 3]
