<?php 
require_once("DbConnection.php");
require_once("config.php");

class FilmsController{
    private function __construct() {
        
    }

    static function Show_all(){
        require_once("../View/filmShowAll.php");
        header("location: filmShowAll.php");

    }

    static function Show(){
        header("location: View\filmShow.php");
    }
}

?>