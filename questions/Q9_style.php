<?php
function Q9_style(){
?>
<form action="" method="post" novalidate class="form">
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
            <textarea rows="5" cols="33" placeholder="exprimez-vous librement" name="style[]" class="textarea_autre"></textarea>

            <p id="message" class="message-erreur"></p>

            <button type="submit" class="btn_submit">Envoyer</button>

 </form>
<?php
    if(isset($_POST['style'])) {
        foreach($_POST['style'] as $style) {
            echo "<p>Vous avez répondu : " . ($style) . "</p>";
        }
    }
}