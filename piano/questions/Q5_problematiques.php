<?php
function Q5_problematiques($prof,$experience) {
    if($experience !='1'){
        ?>
            <div class="div_intro">
                <p class="intro">Bravo ! Vous avez déjà une belle expérience. </p>
            </div>
        <?php
    }
    ?>

    <form action="" method="post" novalidate class="form" id="problematiques">
        <div>Quelles sont vos problématique(s) ?</div>

        <label>
            <input type="checkbox" name="problematiques[]" value="1">
            <span>Le toucher</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="2">
            <span>La technique</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="3">
            <span>J'ai des douleurs quand je joue</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="4">
            <span>Les méthodes de travail</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="5">
            <span>L'interprétation</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="6">
            <span>La gestion du jeu en public</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="7">
            <span>Le son</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="8">
            <span>L'expression</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="9">
            <span>La mémorisation</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="10">
            <span>La vision professionnelle</span>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="11">
            <span>L'improvisation</span>
        </label>

        <?php
    if (in_array($prof, ['1', '2'])) {
            ?>
            <label>
                <input type="checkbox" name="problematiques[]" value="12">
                <span>La pédagogie</span>
            </label>
            <?php
        }
        ?>

        <label for="textarea_problematiques">
            <input type="checkbox" name="problematiques[]" value="13" class="checkbox_autre">
            <span>Autre(s) problématique(s)</span>
        </label>

        <textarea id="textarea_problematiques" rows="5" cols="33" placeholder="Exprimez-vous librement" name="problematiques[]" class="textarea_autre"></textarea>

        <p id="message" class="message-erreur"></p>

        <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
        <button type="submit" name="action" class="btn_submit">Continuer</button>
    </form>
    <?php
}