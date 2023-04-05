<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions: Exo 3</title>
</head>
<body>
<!-- Écrivez une fonction qui renvoie le plus grand nombre contenu dans un tableau numéroté. -->
    <?php
    function biggest ($arr){
        echo max($arr);
    }

    biggest([1,2,4,8,95])
    ?>
</body>
</html>