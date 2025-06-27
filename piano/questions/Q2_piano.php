<?php
function Q2_piano(){
    ?>
    <form action="" method="post">
        <div>Avez-vous déjà un piano ?</div>

        <label>
            <input type="radio" name="piano" value="1">
            <span>Acoustique</span>
         </label>

        <label>
            <input type="radio" name="piano" value="2">
            <span>Numérique</span>
        </label>

        <label>
            <input type="radio" name="piano" value="3">
            <span>Je ne possède pas de piano</span>
        </label>

        <button type="submit" name="action" class="btn_submit">Envoyer</button>
        <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
    </form>
     <?php
}