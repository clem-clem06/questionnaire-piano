<?php
function Q15_autre(){
?>
<form action="" method="post" novalidate class="form" id="autre">
    <div>Avez-vous d’autres informations à me faire passer ?</div>

    <label for="textarea_autre">
        <input type="radio" name="autre[]" value="2" class="checkbox_autre">
        <span>Oui</span>
    </label>
    <textarea id="textarea_autre" rows="5" cols="33" placeholder="Exprimez-vous librement" name="autre[]" class="textarea_autre"></textarea>

    <label>
        <input type="radio" name="autre[]" value="1">
        <span>Non</span>
    </label>

    <p id="message" class="message-erreur"></p>

    <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
    <button type="submit" name="action" class="btn_submit" id="submit_autre">Envoyer</button>
</form>
<?php
}