<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux: Exo 2</title>
</head>
<body>
<!-- Écrivez un code PHP qui déclare un tableau associatif contenant les noms et les prix de 5 produits, puis affiche le
contenu de ce tableau à l'aide d'une boucle foreach. -->
    <?php
    $products = [
        "Coca" => "3€",
        "Dentifrice" => "2€",
        "Chocolatine" => "1€50",
        "Pâtes" => "2€30",
        "Shampoing" => "5€"];
        
        foreach ($products as $key => $value) {
            echo ("<p>" . $key . ": " . $value ."\r </p>");
        }
    ?>
</body>
</html>