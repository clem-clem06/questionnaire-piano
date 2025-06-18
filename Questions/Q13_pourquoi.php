<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/normalize.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/script.js"></script>
    <title>Document</title>
</head>
    <body>
        
        <form action="" method="post">
            <div>Pour quelle(s) raisson l'Académie ne vous interesse pas  ?</div>

            <label>
                <input type="checkbox" name="Pourquoi[]" value="1">
                <p>Je ne me sens pas du niveau</p>
            </label>

            <label>
                <input type="checkbox" name="Pourquoi[]" value="2">
                <p>Je n'ai pas le budget nécessaire</p>
            </label>

            <label>
                <input type="checkbox" name="Pourquoi[]" value="3">
                <p>Je n'ai pas le temps</p>
            </label>

            <label>
                <input type="checkbox" name="Pourquoi[]" value="4" class="checkbox_autre">
                <p>Autre(s) raison(s)</p>
            </label>
            <textarea rows="5" cols="33" placeholder="exprimez-vous librement" class="textarea_autre"></textarea>
            <!--faire apparaitre et disparaitre si coche-->

            <button type="submit">Envoyer</button>
        </form>

    </body>
</html>
<?php
if(isset($_POST['Pourquoi'])) {
    foreach($_POST['Pourquoi'] as $Pourquoi) {
        echo "<p>Vous avez répondu : " . ($Pourquoi) . "</p>";
    }
    //rajoute pour aller question suivante
}