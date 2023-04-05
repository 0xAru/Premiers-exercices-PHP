<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions: Exo 2</title>
</head>
<body>
<!-- Écrivez un code PHP qui détermine si un nombre est pair ou impair. Si le nombre est pair, affichez "Le
nombre est pair.", sinon affichez "Le nombre est impair.", si possible faites le en ternaire. -->
    <?php
    $nmb = 7;

    $result = ($nmb % 2 == 0) ? ("Le nombre est pair") : ("Le nombre est impair");
    echo($result)
    ?>
</body>
</html>