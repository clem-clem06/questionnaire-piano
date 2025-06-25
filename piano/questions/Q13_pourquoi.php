<?php
function Q13_pourquoi(){
    ?>
    <form action="" method="post" novalidate class="form" id="pourquoi">
                <div>Pour quelle(s) raisson l'Académie ne vous interesse pas ?</div>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="1">
                    <p>Je ne me sens pas du niveau</p>
                </label>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="2">
                    <p>Je n'ai pas le budget nécessaire</p>
                </label>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="3">
                    <p>Je n'ai pas le temps</p>
                </label>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="4" class="checkbox_autre">
                    <p>Autre(s) raison(s)</p>
                </label>
                <textarea rows="5" cols="33" placeholder="Exprimez-vous librement" name="pourquoi[]" class="textarea_autre"></textarea>

                <p id="message" class="message-erreur"></p>

                <button type="submit" class="btn_submit">Envoyer</button>
            </form>
    <?php
}