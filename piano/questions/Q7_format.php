<?php
function Q7_format(){
?>
<form action="" method="post">
            <div>Quel format préféreriez-vous ?</div>

            <label>
                <input type="radio" name="format" value="1">
                <p>Digital</p>
            </label>

            <label>
                <input type="radio" name="format" value="2">
                <p>En personne</p>
            </label>

            <button type="submit" class="btn_submit">Envoyer</button>
        </form>
<?php
}