<!DOCTYPE html>
<html lang = "it">
    <body>
    <form action="../Model/do_update.php" id="form" method="POST">
        
        <?php 
        $id = $_GET['id'];  
        $firstname = $_GET['nome'];
        $lastname = $_GET['cognome'];
        ?>
        
        AGGIORNAMENTO ATTORE: <?php echo $firstname . " " . $lastname ?> <br>
        
        <input type = "hidden" name = "id" value = "<?php echo $id?>">

        First name <input type="text" name="firstname"><br>
        
        Last name <input type="text" name="lastname"><br>


        
        <input type="submit" value="inserisci"><br><br>
        
        </form>
    </body>
</html>