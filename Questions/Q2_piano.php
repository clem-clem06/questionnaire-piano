 <form action="" method="post">
     <div>Avez-vous déjà un piano ?</div>

     <label>
         <input type="radio" name="instrument" value="1">
         <p>Acoustique</p>
     </label>

     <label>
         <input type="radio" name="instrument" value="2">
         <p>Numérique</p>
     </label>

     <label>
         <input type="radio" name="instrument" value="3">
         <p>Je ne possede pas de piano</p>
     </label>

     <button type="submit">Envoyer</button>
 </form>
 <?php
 if(isset($_POST['instrument'])) {
     echo "<p>Vous avez répondu : " . $_POST['instrument'] . "</p>";
 }