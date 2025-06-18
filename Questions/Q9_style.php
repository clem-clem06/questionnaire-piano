 <form action="" method="post">
            <div>Quel(s) style(s) jouez-vous ?</div>

            <label>
                <input type="checkbox" name="style[]" value="1">
                <p>Jazz</p>
            </label>

            <label>
                <input type="checkbox" name="style[]" value="2">
                <p>Classique</p>
            </label>

            <label>
                <input type="checkbox" name="style[]" value="3" class="checkbox_autre">
                <p>Autre</p>
            </label>
            <textarea rows="5" cols="33" placeholder="exprimez-vous librement" class="textarea_autre"></textarea>
            <!--faire apparaitre et disparaitre si coche-->

            <button type="submit">Envoyer</button>
 </form>
<?php
    if(isset($_POST['style'])) {
        foreach($_POST['style'] as $style) {
            echo "<p>Vous avez répondu : " . ($style) . "</p>";
        }
        //rajoute pour aller question suivante
    }