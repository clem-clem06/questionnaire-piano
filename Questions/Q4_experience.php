<form action="" method="post">
    <div>Quelle est votre expérience ?</div>

    <label>
        <input type="radio" name="experience" value="1">
        <p>Moins de 5 ans</p>
    </label>

    <label>
        <input type="radio" name="experience" value="2">
        <p>Entre 5 et 10 ans</p>
    </label>

    <label>
        <input type="radio" name="experience" value="3">
        <p>Plus de 10 ans</p>
    </label>

    <button type="submit">Envoyer</button>
</form>
<?php
if(isset($_POST['experience'])) {
    echo "<p>Vous avez répondu : " . $_POST['experience'] . "</p>";
}