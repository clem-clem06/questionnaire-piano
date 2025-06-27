<?php
function Q7_format(){
?>
<form action="" method="post">
            <div>Quel format préféreriez-vous ?</div>

            <label>
                <input type="radio" name="format" value="1">
                <span>Digital</span>
            </label>

            <label>
                <input type="radio" name="format" value="2">
                <span>En personne</span>
            </label>

            <button type="submit" name="action" class="btn_submit">Envoyer</button>
            <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
        </form>
<?php
}