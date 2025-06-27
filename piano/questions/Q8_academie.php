<?php
function Q8_academie()
{
    ?>
        <div class="div_intro">
            <p class="intro">Selon les réponses que vous avez apportées aux questions précédentes, je pense que Sérénité Académie pourrait vous convenir.</p>
            <p class="intro">C’est un accompagnement complet, de groupe, sur une durée de 3 à 12 mois, à distance et en personne.</p>
            <p class="intro">Tout y est organisé pour vous aider à atteindre vos objectifs : espace formation en autonomie, accessible 24h/24 sans limite de temps, cours individuels, communauté, ma présence sur le groupe privé, consultations kiné des musiciens, préparateur mental, masterclasses, vidéos de cours sur le répertoire, stage d’été, etc.</p>
            <p class="intro">L’investissement est de 1998€ pour 3 mois, 3500€ pour 6 mois et 6000€ pour 12 mois.</p>
        </div>
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

                <button type="submit" class="btn_submit">Envoyer</button>
                <button type="button" class="btn_retour">Retour</button>
     </form>
    <?php
}