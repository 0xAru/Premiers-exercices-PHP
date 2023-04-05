<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles: Exo 2</title>
</head>
<body>
<!-- Utilisez la boucle foreach pour parcourir un tableau d'entiers et afficher la somme de tous les éléments du
tableau. -->
    <?php
    $numbers = [1, 4, 2, 3, 7, 42, 12, 3];
    $result = 0;

    foreach ($numbers as  $value) {
        $result += $value;
    }
    echo $result;
    ?>
</body>
</html>