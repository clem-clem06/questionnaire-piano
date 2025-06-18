 <form action="" method="post">
     <div>Êtes-vous déjà pianiste ?</div>

     <label>
         <input type="radio" name="pianiste" value="1">
         <p>Oui, je suis pianiste</p>
     </label>

     <label>
         <input type="radio" name="pianiste" value="2">
         <p>Non, je ne suis pas pianiste</p>
     </label>

     <button type="submit">Envoyer</button>
 </form>
<?php
    if(isset($_POST['pianiste'])) {
        echo "<p>Vous avez répondu : " . $_POST['pianiste'] . "</p>";
    }