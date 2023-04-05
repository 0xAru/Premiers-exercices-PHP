<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles: Exo 3</title>
</head>
<body>
<!-- Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé continue pour ignorer les
nombres négatifs. Affichez tous les nombres entiers. -->
    <?php
    $numbers = [-2, 3, 4, -5, 8, -9, 1, -7];
    for ($i=0; $i < count($numbers); $i++) { 
        if ($numbers[$i] < 0) {
            continue;
        }
        echo $numbers[$i];
    }
    ?>
</body>
</html>