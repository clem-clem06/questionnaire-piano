<?php
function Q11_motivation(){
?>
<form action="" method="post" id="motivation">
            <div>Quelle est votre motivation pour jouer du piano ?</div>

            <label>
                <textarea rows="5" cols="33" placeholder="exprimez-vous librement" name="motivation"></textarea>
            </label>

            <p id="message" class="message-erreur"></p>

            <button type="submit" name="action" class="btn_submit">Envoyer</button>
            <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
        </form>
<?php
}