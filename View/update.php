<!DOCTYPE html>
<html lang = "it">
    <body>
    <form action="index.php?controller=actors&action=do_update" id="form" method="POST">
        
        <?php 
        $id = $_GET['id'];  
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        ?>
        
        AGGIORNAMENTO ATTORE: <?php echo $firstname . " " . $lastname ?> <br>
        
        <input type = "hidden" name = "id" value = "<?php echo $id?>">

        First name <input type="text" name="firstname"><br>
        
        Last name <input type="text" name="lastname"><br>


        
        <input type="submit" value="inserisci"><br><br>
        
        </form>
    </body>
</html>