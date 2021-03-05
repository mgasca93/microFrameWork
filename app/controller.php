<?php 

class Controller{

    public function __construct(){
        $this->view = new View();  
        $this->Session = new Session();            
    }

    public function loadModel($model){
        $archivoModelo = "models/" . $model . "/" . $model . "Model.php";        
        if(file_exists($archivoModelo)){        
            require_once $archivoModelo;
            $modelName = $model . "Model";
            $this->model = new $modelName();
        }
    }

    final public function render($view){
        $this->view->render($view);
    }

    public function redirect($controller){
        $ruta = constant("URL") . $controller;
        header("location: $ruta");
    }
        
}