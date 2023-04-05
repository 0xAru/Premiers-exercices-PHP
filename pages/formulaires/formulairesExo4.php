<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire: Exo 4</title>
</head>
<body>
<!-- Créez un formulaire qui permet de faire la somme de 2 nombres et affiche le résultat. Attention, il faut
vérifier les données reçues avant de faire le calcul, si une mauvaise valeur est rentrée, nous devrons
afficher une erreur à l'utilisateur. -->

    <form action="" method="POST">
        <div>
            <label for="nmbOne">Premier nombre</label>
            <input type="float" id="nmbOne" name="nmbOne">
        </div>
        <br>
        <div>
            <label for="nmbTwo">Deuxième nombre</label>
            <input type="float" id="nmbTwo" name="nmbTwo">
        </div>
        <br>
        <button type="submit">Additionner</button>
    </form>

    <?php
    if(!empty(is_numeric($_POST["nmbOne"]) && is_numeric($_POST["nmbTwo"]))) {
        $nmbOne = htmlspecialchars($_POST["nmbOne"]);
        $nmbTwo = htmlspecialchars($_POST["nmbTwo"]);

        $result = $nmbOne + $nmbTwo;
        echo $result;
    } else {
        echo "Erreur: Entrez deux valeurs numériques";
    }
    ?>
</body>
</html>