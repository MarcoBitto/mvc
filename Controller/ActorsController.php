<?php 


class ActorsController{
    private function __construct() {
        
    }

    static function Show_all(){
        require_once("View/actorsView.php");
        require_once("Model/ActorModel.php");
        $actors = ActorModel::get_all();
        actorsView::show_all($actors);

    }

    static function Show(){
        header("location: View\actorShow.php");
    }

    static function Insert(){
        require_once("View\insert.php");
    }

    static function Do_insert(){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        require_once("Model/ActorModel.php");
        ActorModel::Do_insert($firstname, $lastname);
    }

    static function Update(){
        require_once("View\update.php");
    }

    static function Do_update(){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        require_once("Model/ActorModel.php");
        ActorModel::Do_update($id, $firstname, $lastname);
    }

    static function Delete(){
        require_once("View\delete.php");
    }

    static function Do_delete(){
        $id = $_POST['id'];
        require_once("Model/ActorModel.php");
        ActorModel::Do_delete($id);
    }
}

?>