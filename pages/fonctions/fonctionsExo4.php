<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions: Exo 4</title>
</head>

<body>
<!-- Faire une fonction qui permet de générer un tableau html à partir d'un tableau php. -->
    <?php
    $tableau = [
        ["Nom", "Age", "Ville"],
        ["Jean:", 25, "Paris"],
        ["Sophie", 32, "Lyon"],
        ["Pierre", 19, "Marseille"]
    ];

    echo "<table>";
    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $cellule) {
            echo "<td>" . $cellule . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>