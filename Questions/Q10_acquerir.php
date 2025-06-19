<?php
function Q10_acquerir(){
?>
<form action="" method="post">
            <div>Quel instrument souhaiteriez-vous acquérir ?</div>

            <label>
                <input type="radio" name="instrument" value="1">
                <p>Acoustique</p>
            </label>

            <label>
                <input type="radio" name="instrument" value="2">
                <p>Numérique</p>
            </label>

            <label>
                <input type="radio" name="instrument" value="3">
                <p>Je ne sais pas</p>
            </label>

            <button type="submit">Envoyer</button>
</form>
<?php
}