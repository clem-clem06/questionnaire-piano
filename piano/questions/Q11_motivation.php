<?php
function Q11_motivation(){
?>
<form action="" method="post" id="motivation">
            <div>Quelle est votre motivation pour jouer du piano ?</div>

            <textarea rows="5" cols="33" placeholder="exprimez-vous librement" name="motivation"></textarea>

            <p id="message" class="message-erreur"></p>

            <button type="submit" class="btn_submit">Envoyer</button>
            <button type="button" class="btn_retour">Retour</button>
        </form>
<?php
}