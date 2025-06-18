<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
    <body>
        
        <form action="" method="post">
            <div>L'académie vous interesse t'elle ?</div>

            <label>
                <input type="radio" name="academie" value="1">
                <p>Oui</p>
            </label>

            <label>
                <input type="radio" name="academie" value="2">
                <p>Non</p>
            </label>

            <button type="submit">Envoyer</button>
        </form>

    </body>
</html>
<?php
    if(isset($_POST['academie'])) {
        echo "<p>Vous avez répondu : " . $_POST['academie'] . "</p>";
        //rajoute pour aller question suivante
    }