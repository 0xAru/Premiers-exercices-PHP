<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions régulières: Exo 3</title>
</head>
<body>
<?php
    $regexMail ="/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/";
    $mail = "example@example.com";
    if(preg_match($regexMail, $mail)){
        echo $mail . " est Validé";
    }
?>
</body>
</html>