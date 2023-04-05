<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions: Exo 3</title>
</head>
<body>
<!-- Écrivez un code PHP pour déterminer si une personne est admissible à un emprunt. Si son salaire est
supérieur ou égal à 50 000 $ et qu'elle a moins de 30 ans, affichez "Admissible à l'emprunt.", sinon
affichez "Non admissible à l'emprunt." -->
    <?php
    $age = 28;
    $age_max = 30;
    $salary = 65000;
    $salary_min = 50000;

    $result = ($age < $age_max && $salary >= $salary_min) ? ("Admissible à l'emprunt") : ("Non admissible à l'emprunt");
    echo $result;
    ?>
</body>
</html>