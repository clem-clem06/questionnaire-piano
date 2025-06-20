<?php
function demande_mail()
{
    ?>
    <div>
        <p>Bonjour,</p>
        <p>Voici quelques questions qui vont me permettre de mieux vous connaître et de savoir précisément comment je peux vous aider.</p>
        <p>Promis, ça ne prend pas longtemps.</p>
        <p>Lorsque j'aurai lu vos réponses, je vous enverrai une vidéo de quelques minutes avec des conseils personnalisés.</p>
        <p>Si vous ne savez pas quel accompagnement vous correspond le mieux, continuez ici.</p>
        <p>C'est parti !</p>
    </div>

    <form action="" method="post" novalidate>
        <div>Entre votre mail</div>

        <label>
            <input type="email" name="mail" placeholder="exemple@email.com">
        </label>

        <p id="message" class="message-erreur"></p>

        <button type="submit">Continuer</button>
    </form>
<?php
}
