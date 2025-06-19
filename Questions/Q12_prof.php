<?php
function Q12_prof(){
?>
<form action="" method="post">
            <div>Êtes-vous professeur ?</div>

            <label>
                <input type="radio" name="prof" value="1">
                <p>Oui dans un établissement public</p>
            </label>

            <label>
                <input type="radio" name="prof" value="2">
                <p>Oui en privé</p>
            </label>

            <label>
                <input type="radio" name="prof" value="3">
                <p>Non</p>
            </label>

            <button type="submit">Envoyer</button>
        </form>
<?php
}