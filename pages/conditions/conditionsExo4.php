<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions: Exo 4</title>
</head>

<body>
<!-- Écrivez un code PHP avec switch qui demande à l'utilisateur de saisir un jour de la semaine (le chiffre) et
affiche le jour suivant correspondant. -->
    <form action="" method="GET">
        <label for="num">Entrez un nombre qui correspond à un jour de la semaine: (1 à 7) </label>
        <input type="text " id="num" name="num">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_GET) {
        $num = $_GET["num"];

        switch ($num) {
            case 1:
                echo "Mardi";
                break;
            case 2:
                echo "Mercredi";
                break;
            case 3:
                echo "Jeudi";
                break;
            case 4:
                echo "Vendredi";
                break;
            case 5:
                echo "Samedi";
                break;
            case 6:
                echo "Dimanche";
                break;
            case 7:
                echo "Lundi";
                break;
        }
    }
    ?>
</body>

</html>