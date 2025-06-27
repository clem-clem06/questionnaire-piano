<?php
function Q1_pianiste() {
?>
<form action="" method="post">
     <div>Êtes-vous déjà pianiste ?</div>

     <label>
         <input type="radio" name="pianiste" value="1">
         <span>Oui, je suis pianiste</span>
     </label>

     <label>
         <input type="radio" name="pianiste" value="2">
         <span>Non, je ne suis pas pianiste</span>
     </label>

    <button type="submit" name="action" class="btn_submit">Envoyer</button>
    <button type="submit" name="action" class="btn_retour" value="retour">Retour</button>
 </form>
<?php
}