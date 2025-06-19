<?php
function Q3_pro_am(){
    ?>
    <form action="" method="post">
        <div>Quel pianiste êtes-vous ?</div>

        <label>
            <input type="radio" name="pro/am" value="1">
            <p>Amateur</p>
        </label>

        <label>
            <input type="radio" name="pro/am" value="2">
            <p>Professionnel</p>
        </label>

        <button type="submit">Envoyer</button>
    </form>
    <?php
}