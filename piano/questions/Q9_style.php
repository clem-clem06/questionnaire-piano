<?php
function Q9_style(){
?>
<form action="" method="post" novalidate class="form" id="style">
            <div>Quel(s) style(s) jouez-vous ?</div>

            <label>
                <input type="checkbox" name="style[]" value="1">
                <span>Jazz</span>
            </label>

            <label>
                <input type="checkbox" name="style[]" value="2">
                <span>Classique</span>
            </label>

            <label for="textarea_autre">
                <input type="checkbox" name="style[]" value="3" class="checkbox_autre">
                <span>Autre</span>
            </label>
            <textarea id="textarea_autre" rows="5" cols="33" placeholder="exprimez-vous librement" name="style[]" class="textarea_autre"></textarea>

            <p id="message" class="message-erreur"></p>

            <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
            <button type="submit" name="action" class="btn_submit">Envoyer</button>
 </form>
<?php
}