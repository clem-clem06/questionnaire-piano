<?php
function Q3_pro_am(){
    ?>
    <form action="" method="post">
        <div>Quel pianiste êtes-vous ?</div>

        <label>
            <input type="radio" name="pro/am" value="1">
            <span>Amateur</span>
        </label>

        <label>
            <input type="radio" name="pro/am" value="2">
            <span>Professionnel</span>
        </label>

        <button type="submit" name="action" class="btn_submit">Envoyer</button>
        <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
    </form>
    <?php
}