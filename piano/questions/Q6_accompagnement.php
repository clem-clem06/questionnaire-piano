<?php
function Q6_accompagnement(){
?>
<form action="" method="post">
    <div>Préféreriez-vous un accompagnement</div>

    <label>
        <input type="radio" name="accompagnement" value="1">
        <span>En groupe</span>
    </label>

    <label>
        <input type="radio" name="accompagnement" value="2">
        <span>Individuel</span>
    </label>

    <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
    <button type="submit" name="action" class="btn_submit">Continuer</button>
</form>
<?php
}