<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux: Exo 1</title>
</head>
<body>
<!-- Écrivez un code PHP qui déclare un tableau contenant les noms de 5 fruits, puis affiche le contenu de ce tableau à
l'aide d'une boucle. -->
    <?php
    $fruits = ["Cerise", "Fraise", "Kiwi", "Pamplemousse", "Banane"];

    foreach ($fruits as $key => $value) {
       echo ($value . " ");
    }
    ?>
</body>
</html>