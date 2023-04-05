<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles: Exo 4</title>
</head>

<body>
<!-- Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé break lorsqu'un nombre
spécifique est trouvé pour sortir de la boucle. -->
    <?php
    $numbers = [2, 3, 4, 5, 8, 9, 1, 7];

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == 8) {
            break;
        }
        echo $numbers[$i];
    }
    ?>
</body>

</html>