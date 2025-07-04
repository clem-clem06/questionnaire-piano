<?php
function Q10_acquerir(){
?>
<form action="" method="post">
            <div>Quel instrument souhaiteriez-vous acquérir ?</div>

            <label>
                <input type="radio" name="instrument" value="1">
                <span>Acoustique</span>
            </label>

            <label>
                <input type="radio" name="instrument" value="2">
                <span>Numérique</span>
            </label>

            <label>
                <input type="radio" name="instrument" value="3">
                <span>Je ne sais pas</span>
            </label>

    <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
    <button type="submit" name="action" class="btn_submit">Continuer</button>
</form>
<?php
}