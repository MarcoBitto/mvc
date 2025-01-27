<?php

class ActorModel{
    private $actor_id;
    private $first_name;
    private $last_name;
    private $last_update;

    public function __construct($actor_id, $first_name, $last_name, $last_update){
        $this->actor_id = $actor_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->last_update = $last_update;
    }


    static function get_all(){
        $con = DbConnection::getConnection();
        $query = "SELECT actor_id, first_name, last_name, last_update FROM actor;";
        if($stmt = $con->prepare($query)){
            $stmt -> execute();
            $stmt -> bind_result($id, $firstname, $lastname, $lastupdate);
            $actors = [];
            while ($stmt->fetch()) {
                $actors[] = new ActorModel($id, $firstname, $lastname, $lastupdate);
            }
            $stmt->close();
        } else{
            echo "query non riuscita";
            die("operazione non riuscita");
        }
        return $actors;
    }

    public function getId(){
        return $this->actor_id;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getLastUpdate(){
        return $this->last_update;
    }


    static function show($id){

    }

    static function Do_insert($first_name, $last_name){
        $con = DbConnection::getConnection();
        $query = "INSERT INTO ACTOR (first_name, last_name) VALUES(?, ?);";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ss', $first_name, $last_name);
        $stmt->execute();
        $stmt->close();
        $con->close();
    }

    static function Do_update($id, $firstname, $lastname){
        $con = DbConnection::getConnection();
        $query = "UPDATE ACTOR SET first_name = ?, last_name= ? WHERE actor_id = ?;";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ssi', $firstname, $lastname, $id);
        $stmt->execute();
        $stmt->close();
        $con->close();
    }

    static function Do_delete($id){
        $con = DbConnection::getConnection();
        $query = "DELETE FROM ACTOR WHERE actor_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
        $con->close();
    }

}
?>