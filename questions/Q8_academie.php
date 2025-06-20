<?php
function Q8_academie()
{
    ?>
    <form action="" method="post">
                <div>L'académie vous interesse t'elle ?</div>

                <label>
                    <input type="radio" name="academie" value="1">
                    <p>Oui</p>
                </label>

                <label>
                    <input type="radio" name="academie" value="2">
                    <p>Non</p>
                </label>

                <button type="submit">Envoyer</button>
     </form>
    <?php
}