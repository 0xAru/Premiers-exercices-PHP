<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire: Exo 1</title>
</head>

<body>
<!-- Écrivez un formulaire de login qui demande à l'utilisateur de saisir son nom d'utilisateur et son mot de
passe, puis vérifiez ces informations pour déterminer si l'utilisateur peut accéder à un compte sécurisé.
Vous choisissez le mot de passe et le nom d'utilisateur du compte sécurisé que vous voulez. (Créer un
nouveau fichier php pour la page à sécuriser) -->
    <main>
        <form action="" method="POST">
            <div>
                <label for="name">Pseudo:</label>
                <input type="text" id="name" name="name">
            </div>
            <br>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password">
            </div>
            <br>
            <button type="submit">Valider</button>
            <br>
        </form>
        <?php
        if (isset($_POST)) {
            if ($_POST["name"] == "0xAru" && $_POST["password"] == "azerty") {
                echo "T'es bien connecté !";
            } else {
                echo "T'as pas de compte fraté !";
            }
        }
        ?>
    </main>
</body>

</html>