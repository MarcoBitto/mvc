<?php 
require_once("../DbConnection.php");
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $con = DbConnection::getConnection();

    $query = "INSERT INTO actor(first_name, last_name) VALUES (?, ?);";
    if ($stmt = $con->prepare($query)) {
        $stmt->bind_param("ss", $firstname, $lastname);
        $stmt->execute();
        $stmt->close();
        echo "inserimento correttamente riuscito";
    }else{
        echo "inserimento non riuscito";
    }
    $con -> close();
}
?>