<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions régulières: Exo 1</title>
</head>
<body>
<!-- Faire une regex pour le nom et le prénom, testez la regex. -->
<?php
    $regexName ="/^[A-Za-zÀ-ÿ]+([-'][A-Za-zÀ-ÿ]+)*$/";
    $name = "Loïc";
    if(preg_match($regexName, $name)){
        echo $name . " est Validé";
    }
?>
</body>
</html>