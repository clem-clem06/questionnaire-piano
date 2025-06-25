<?php
function Q14_info_perso()
{
    ?>
    <div class="div_intro">
        <p class="intro">Bonjour,</p>
        <p class="intro">Voici quelques questions qui vont me permettre de mieux vous connaître et de savoir précisément comment je peux vous aider.</p>
        <p class="intro">Promis, ça ne prend pas longtemps.</p>
        <p class="intro">Si vous ne savez pas quel accompagnement vous correspond le mieux, continuez ici.</p>
        <p class="intro">C'est parti !</p>
    </div>

    <form action="" method="post" novalidate id="info-perso">
        <div>Entrez votre mail</div>

        <label>
            <input type="email" name="mail" placeholder="exemple@email.com">
        </label>

        <div>Entrez votre prénom</div>

        <label>
            <input type="text" name="nom" placeholder="Christine">
        </label>

        <p id="message" class="message-erreur"></p>

        <button type="submit" class="btn_submit">Continuer</button>
    </form>
<?php
}