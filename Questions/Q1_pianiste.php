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
                <div>Êtes-vous déjà pianiste ?</div>

                <label>
                    <input type="radio" name="pianiste" value="1">
                    <p>Oui, je suis pianiste</p>
                </label>

                <label>
                    <input type="radio" name="pianiste" value="2">
                    <p>Non, je ne suis pas pianiste</p>
                </label>

                <button type="submit">Envoyer</button>
            </form>

        </body>
    </html>
<?php
    if(isset($_POST['pianiste'])) {
        echo "<p>Vous avez répondu : " . $_POST['pianiste'] . "</p>";
        //rajoute pour aller question suivante
    }