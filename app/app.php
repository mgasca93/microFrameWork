<?php

class App{

    public function __construct(){
        $url = empty($_GET['url']) ? "welcome" : $_GET['url'];                
        $url = rtrim($url,"/");
        $url = explode("/",$url);
        
        
        $archivoController = "controllers/" . $url[0] . "/" . $url[0] . "Controller.php";        
        
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0]();
            $controller->loadModel($url[0]);
            
            $nparams = sizeof($url);
            
            if($nparams > 1){                
                if($nparams > 2){

                    $params = [];
                    for($i = 2; $i < $nparams; $i++){
                        array_push($params, $url[$i]);
                    }
                    $controller->{$url[1]}($params);
                }else{
                    $controller->{$url[1]}();
                }                
            }else{
                $controller->render($url[0]);
            }
        }else{
            require_once "controllers/404/errorController.php";
            $controller = new ManagerError();
            $controller->render("404");
        }
    }
}