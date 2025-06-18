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
<?php
    if(isset($_POST['accompagnement'])) {
        echo "<p>Vous avez répondu : " . $_POST['accompagnement'] . "</p>";
    }