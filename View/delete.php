<!DOCTYPE html>
<html lang = "it">
    <body>
    <form action="index.php?controller=actors&action=do_delete" method = "POST">
        
        <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $id = $_GET['id'];  
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
        ?>
        
        ELIMINAZIONE ATTORE: <?php echo $firstname . " " . $lastname ?> <br>
  
        <input type="submit" value="elimina"><br><br>
        
        <?php } ?>

        <input type = "hidden" name = "id" value = "<?php echo $id?>">
        
        
        
        </form>
    </body>
</html>