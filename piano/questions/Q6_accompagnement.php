<?php
function Q6_accompagnement(){
?>
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

    <button type="submit" class="btn_submit">Envoyer</button>
    <button type="button" class="btn_retour">Retour</button>
</form>
<?php
}