<?php
function Q12_prof(){
?>
<form action="" method="post">
            <div>Êtes-vous professeur ?</div>

            <label>
                <input type="radio" name="prof" value="1">
                <span>Oui dans un établissement public</span>
            </label>

            <label>
                <input type="radio" name="prof" value="2">
                <span>Oui en privé</span>
            </label>

            <label>
                <input type="radio" name="prof" value="3">
                <span>Non</span>
            </label>

            <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
            <button type="submit" name="action" class="btn_submit">Envoyer</button>
        </form>
<?php
}