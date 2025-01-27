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
}

?>