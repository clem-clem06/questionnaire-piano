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
            <div>Quel format préféreriez-vous ?</div>

            <label>
                <input type="radio" name="format" value="1">
                <p>Digital</p>
            </label>

            <label>
                <input type="radio" name="format" value="2">
                <p>En personne</p>
            </label>

            <button type="submit">Envoyer</button>
        </form>

    </body>
</html>
<?php
    if(isset($_POST['format'])) {
        echo "<p>Vous avez répondu : " . $_POST['format'] . "</p>";
        //rajoute pour aller question suivante
    }