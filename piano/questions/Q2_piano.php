<?php
function Q2_piano(){
    ?>
    <form action="" method="post">
         <div>Avez-vous déjà un piano ?</div>

         <label>
             <input type="radio" name="piano" value="1">
             <p>Acoustique</p>
         </label>

         <label>
             <input type="radio" name="piano" value="2">
             <p>Numérique</p>
         </label>

            <label>
                <input type="radio" name="piano" value="3">
                <p>Je ne possède pas de piano</p>
            </label>

         <button type="submit" class="btn_submit">Envoyer</button>
     </form>
     <?php
}