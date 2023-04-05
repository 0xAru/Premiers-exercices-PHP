<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions: Exo 1</title>
</head>

<body>
<!-- Écrivez un code PHP pour afficher le message "Bienvenue sur notre site." Si l'âge de l'utilisateur est
supérieur ou égal à 18 ans, sinon affichez "Vous n'êtes pas autorisé à accéder à ce site". -->
    <?php
    $age = 17;
    $age_major = 18;

    if ($age >= $age_major) {
        echo("Bienvenue sur notre site");
    } else {
        echo("Vous n'êtes pas autorisé à accéder à ce site");
    }
    ?>
</body>

</html>