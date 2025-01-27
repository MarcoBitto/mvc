<?php

class Router{
    
    private function __construct(){
        
    }
    
    static function route(){
        $controller = $_GET["controller"];
        $action = $_GET["action"];

        $controller = ucfirst($controller);
        $action = ucfirst($action);

        $controllerClass = $controller . "Controller";

        $callFile = $controllerClass . ".php";

        $filePath = "Controller/" . $callFile;

        if(file_exists($filePath)){
            require_once($filePath);
            /*
            $controllerInstance = new ($controller . "Controller")();
            $controllerInstance->$action();
            */
            $controllerClass::$action();
            
        }else{
            echo "non entra nel ciclo file_exists";
        }

    }

}

?>