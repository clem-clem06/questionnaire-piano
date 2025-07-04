<?php
function Q4_experience(){
    ?>
    <form action="" method="post">
        <div>Quelle est votre expérience ?</div>

        <label>
            <input type="radio" name="experience" value="1">
            <span>Moins de 5 ans</span>
        </label>

        <label>
            <input type="radio" name="experience" value="2">
            <span>Entre 5 et 10 ans</span>
        </label>

        <label>
            <input type="radio" name="experience" value="3">
            <span>Plus de 10 ans</span>
        </label>

        <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
        <button type="submit" name="action" class="btn_submit">Envoyer</button>
    </form>
    <?php
}