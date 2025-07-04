<?php
function Q13_pourquoi(){
    ?>
    <form action="" method="post" novalidate class="form" id="pourquoi">
                <div>Pour quelle(s) raisson l'Académie ne vous interesse pas ?</div>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="1">
                    <span>Je ne me sens pas du niveau</span>
                </label>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="2">
                    <span>Je n'ai pas le budget nécessaire</span>
                </label>

                <label>
                    <input type="checkbox" name="pourquoi[]" value="3">
                    <span>Je n'ai pas le temps</span>
                </label>

                <label for="textarea_pourquoi">
                    <input type="checkbox" name="pourquoi[]" value="4" class="checkbox_autre">
                    <span>Autre(s) raison(s)</span>
                </label>
                <textarea id="textarea_pourquoi" rows="5" cols="33" placeholder="Exprimez-vous librement" name="pourquoi[]" class="textarea_autre"></textarea>

                <p id="message" class="message-erreur"></p>

        <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
        <button type="submit" name="action" class="btn_submit">Envoyer</button>
            </form>
    <?php
}