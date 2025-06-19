<?php
function Q5_problematiques($prof = null) {
    ?>
    <form action="" method="post">
        <div>Quelles sont vos problématique(s) ?</div>

        <label>
            <input type="checkbox" name="problematiques[]" value="1">
            <p>Le toucher</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="2">
            <p>La technique</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="3">
            <p>J'ai des douleurs quand je joue</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="4">
            <p>Les méthodes de travail</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="5">
            <p>L'interprétation</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="6">
            <p>La gestion du jeu en public</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="7">
            <p>Le son</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="8">
            <p>L'expression</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="9">
            <p>La mémorisation</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="10">
            <p>La vision professionnelle</p>
        </label>

        <label>
            <input type="checkbox" name="problematiques[]" value="11">
            <p>L'improvisation</p>
        </label>

        <?php
    if (in_array($prof, ['1', '2'])) {
            ?>
            <label>
                <input type="checkbox" name="problematiques[]" value="12">
                <p>La pédagogie</p>
            </label>
            <?php
        }
        ?>

        <label>
            <input type="checkbox" name="problematiques[]" value="13" class="checkbox_autre">
            <p>Autre(s) problématique(s)</p>
        </label>

        <textarea rows="5" cols="33" placeholder="Exprimez-vous librement" name="problematiques[]" class="textarea_autre"></textarea>

        <button type="submit">Envoyer</button>
    </form>
    <?php
}