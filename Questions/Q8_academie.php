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
<?php
    if(isset($_POST['academie'])) {
        echo "<p>Vous avez répondu : " . $_POST['academie'] . "</p>";
        //rajoute pour aller question suivante
    }