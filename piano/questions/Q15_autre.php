<?php
function Q15_autre(){
?>
<form action="" method="post" novalidate class="form" id="autre">
    <div>Avez-vous d’autres informations à me faire passer ?</div>

    <label>
        <input type="radio" name="autre[]" value="2" class="checkbox_autre">
        <p>Oui</p>
    </label>
    <textarea rows="5" cols="33" placeholder="Exprimez-vous librement" name="autre[]" class="textarea_autre"></textarea>

    <label>
        <input type="radio" name="autre[]" value="1">
        <p>Non</p>
    </label>

    <p id="message" class="message-erreur"></p>

    <button type="submit" class="btn_submit" id="submit_autre">Envoyer</button>
    <button type="button" class="btn_retour">Retour</button>
</form>
<?php
}