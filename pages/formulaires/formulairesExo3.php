<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire: Exo 3</title>
</head>
<body>
<!-- Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur HEX, une largeur, une hauteur,
un arrondie des bord (border-radius), et de générer un rectangle (ou carré) sur la page web. -->

<form action="" method="POST">
        <div>
            <label for="color">Saisissez une couleur HEX </label>
            <input type="text" id="color" name="color">
        </div>
        <br>
        <div>
            <label for="width">Saisissez une largeur pour le carré (en px) </label>
            <input type="text" id="width" name="width">
        </div>
        <br>
        <div>
            <label for="height">Saisissez une hauteur pour le carré (en px) </label>
            <input type="text" id="height" name="height">
        </div>
        <br>
        <div>
            <label for="borderRadius">Saisissez une valeur pour arrondir la bordure (en px)</label>
            <input type="text" id="borderRadius" name="borderRadius">
        </div>
        <br>
        <button type="submit">Envoyer</button>
    </form>
    <br>
    <div class="rectangle"></div>

    <?php
    if(!empty($_POST["color"] && $_POST["width"] && $_POST["height"] && $_POST["borderRadius"])) {
        $color = $_POST["color"];
        $width = $_POST["width"];
        $height = $_POST["height"];
        $borderRadius = $_POST["borderRadius"];
        ?>
        <style>
            .rectangle {
                background-color: <?= $color ?>;
                width: <?=$width?>px;
                height: <?=$height?>px;
                border: 1px solid black;
                border-radius: <?=$borderRadius?>px;
            }
        </style>
        <?php
    }
    ?>
</body>
</html>