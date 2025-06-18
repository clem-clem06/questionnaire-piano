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
            <div>Quel instrument souhaiteriez-vous acquérir ?</div>

            <label>
                <input type="radio" name="instrument" value="1">
                <p>Acoustique</p>
            </label>

            <label>
                <input type="radio" name="instrument" value="2">
                <p>Numérique</p>
            </label>

            <label>
                <input type="radio" name="instrument" value="3">
                <p>Je ne sais pas</p>
            </label>

            <button type="submit">Envoyer</button>
        </form>

    </body>
</html>
<?php
    if(isset($_POST['instrument'])) {
        echo "<p>Vous avez répondu : " . $_POST['instrument'] . "</p>";
        //rajoute pour aller question suivante
    }