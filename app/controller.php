<?php 

class Controller{

    public $view;
    public $session;
    // public $model; 

    public function __construct()
    {   
        $this->view = new View();  
        $this->session = new Session();
        
    }

    /** 
     * Si un controlador tiene un modelo, creo el objeto para acceder a
     * su información en la base de datos.
     */
    final public function loadModel($model)
    {
        $archivoModelo = "models/" . $model . "/" . $model . "Model.php";
        if(file_exists($archivoModelo))
        {
            require_once $archivoModelo;
            $modelName = $model . "Model";
            $this->model = new $modelName();            
        }
    }

    /**
     * Establezco la funcion render que me mostrara una vista
     * si el controlador tiene una.
     */
    final public function render($view){
        $this->view->render($view);
    }
}