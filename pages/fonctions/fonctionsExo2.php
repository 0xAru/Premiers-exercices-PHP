<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions: Exo 2</title>
</head>
<body>
<!-- Écrivez une fonction qui renvoie la valeur absolue d'un nombre. Une fois validée, réécrivez-la en une seule
instruction. -->
    <?php
        function absolute($nmb){
            echo abs($nmb) . "<br>";
        }

        absolute(-15);
        absolute(-2.5);
    ?>
</body>
</html>