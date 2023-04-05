<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux: Exo 3</title>
</head>

<body>
<!-- Écrivez un code PHP qui trie un tableau de nombres dans l'ordre croissant.
Affichez le tableau avant et après le trie avec print_r.
Essayez d'innover la façon dont vous allez créer le tableau de nombre. -->
    <?php
    $numbers = [5, 6, 2, 1, 4, 3, 7, 8];
    ?>
    <pre>
        <?php
        print_r($numbers);
        ?>
    </pre>
    <?php
    // sort() trie les nombres d'un tableau dans l'ordre croissant et réatribut les index
    //asort() trie les nombres d'un tableau dans l'ordre croissant 
    //arsort() trie les nombres d'un tableau dans l'ordre décroissant
    sort($numbers);
    ?>
    <pre>
        <?php
        print_r($numbers);
        ?>
</pre>

</body>

</html>