<?php
function retour()
{
    if (isset($_POST['action']) && $_POST['action'] === 'retour') {
        if (!empty($_SESSION['reponses'])) {
            end($_SESSION['reponses']);
            $derniere_question = key($_SESSION['reponses']);
            unset($_SESSION['reponses'][$derniere_question]);
            echo '<div class="div_intro"><p class="intro">Vous avez été redirigé vers la question précédente.</p></div>';

        }
    }
}