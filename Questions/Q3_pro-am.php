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
                <div>Quel pianiste êtes-vous ?</div>

                <label>
                    <input type="radio" name="pro/am" value="1">
                    <p>Amateur</p>
                </label>

                <label>
                    <input type="radio" name="pro/am" value="2">
                    <p>Professionnel</p>

                </label>

                <button type="submit">Envoyer</button>
            </form>

        </body>
    </html>
<?php
    if(isset($_POST['pro/am'])) {
        echo "<p>Vous avez répondu : " . $_POST['pro/am'] . "</p>";
        //rajoute pour aller question suivante
    }