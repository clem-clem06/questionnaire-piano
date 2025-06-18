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
<?php
    if(isset($_POST['format'])) {
        echo "<p>Vous avez répondu : " . $_POST['format'] . "</p>";
        //rajoute pour aller question suivante
    }