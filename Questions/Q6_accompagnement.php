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
            <div>Préféreriez-vous un accompagnement</div>

            <label>
                <input type="radio" name="accompagnement" value="1">
                <p>En groupe</p>
            </label>

            <label>
                <input type="radio" name="accompagnement" value="2">
                <p>Individuel</p>
            </label>

            <button type="submit">Envoyer</button>
        </form>

    </body>
</html>
<?php
    if(isset($_POST['accompagnement'])) {
        echo "<p>Vous avez répondu : " . $_POST['accompagnement'] . "</p>";
        //rajoute pour aller question suivante
    }