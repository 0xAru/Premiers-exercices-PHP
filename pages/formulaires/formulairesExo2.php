<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire: Exo 2</title>

</head>
<!-- Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur HEX et de l'afficher en arrière-
plan de la page web.
Instructions:
1. Créez une page HTML qui contient un formulaire pour la saisie d'une couleur HEX.
2. Utilisez le code PHP pour récupérer la valeur de l'input et l'afficher en arrière-plan de la page web en
utilisant le code CSS suivant: background-color: #HEX;. -->
<body style="background-color: <?php if (isset($_POST["color"])) {echo($_POST["color"]);} ?>">
    <form action="" method="POST">
        <div>
            <label for="color">Saisissez une couleur HEX: </label>
            <input type="text" id="color" name="color">
        </div>
        <button type="submit">Envoyer</button>
    </form>


</body>

</html>