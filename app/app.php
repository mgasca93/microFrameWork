<?php

class App{

    private $url;
    private $controller;

    public function __construct($flagDebug = false){
        
        $this->debug($flagDebug);

        $this->url = empty($_GET['url']) ? "welcome" : $_GET['url'];                
        $this->url = rtrim($this->url,"/");
        $this->url = explode("/",$this->url);
               
    }

    /**
     * Me permite gestionar el modo debug para la
     */
    public function debug($flag){
        if($flag){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }

    /**
     * Punto de entrada de la aplicacion
     */
    final public function run(){
         
        $archivoController = "controllers/" . $this->url[0] . "/" . $this->url[0] . "Controller.php";        
        
        if(file_exists($archivoController)){
            require_once $archivoController;
            $this->controller = new $this->url[0]();
            $this->controller->loadModel($this->url[0]);
            
            $nparams = sizeof($this->url);
            
            if($nparams > 1){                
                if($nparams > 2){

                    $params = [];
                    for($i = 2; $i < $nparams; $i++){
                        array_push($params, $this->url[$i]);
                    }
                    $this->controller->{$this->url[1]}($params);
                }else{
                    $this->controller->{$this->url[1]}();
                }                
            }else{
                $this->controller->render($this->url[0]);
            }
        }else{
            require_once "controllers/404/errorController.php";
            $this->controller = new ManagerError();
            $this->controller->render("404");
        }
    }
}