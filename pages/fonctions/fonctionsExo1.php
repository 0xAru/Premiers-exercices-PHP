<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions: Exo 1</title>
</head>
<body>
<!--Écrivez une fonction qui renvoie une pyramide de chiffres -->
    <?php
        function pyramide ($nmb_turn) {
            for ($i = 1; $i < $nmb_turn +1 ; $i++) { 
                echo (str_repeat($i,$i) . "<br>");
            }
        }

        pyramide(8);
    ?>
</body>
</html>