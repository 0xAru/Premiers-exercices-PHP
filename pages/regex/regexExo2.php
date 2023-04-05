<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions régulières: Exo 2</title>
</head>

<body>
    <?php
    $regexPhone = '/^0[1-9](\s|-)?(\d{2}(\s|-)?){3}\d{2}$/';
    $phone = "01-23-45-67-89";
    if (preg_match($regexPhone, $phone)) {
        echo $phone . " est Valide";
    } else {
        echo $phone . " n'est pas valide";
    }
    ?>
</body>

</html>