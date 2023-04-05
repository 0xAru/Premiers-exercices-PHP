<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux: Exo 4</title>
</head>

<body>
<!-- Écrivez un code PHP qui calcule la somme et la moyenne des éléments d'un tableau de nombres (généré
aléatoirement).
Affichez le tableaux, la somme et la moyenne. -->
    <?php
    $numbers = [rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20), rand(0, 20)];
    ?>
    <pre>
        <?php
        print_r($numbers);
        ?>
    </pre>
    <?php
    $sum = array_sum($numbers);
    echo ("<p> La somme des valeurs est " . $sum . "</p>");

    $average = $sum / count($numbers);
    echo ("<p>La moyenne des valeurs est " . $average . "</p>");
    ?>
</body>

</html>