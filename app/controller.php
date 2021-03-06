<?php 

class Controller{

    public $view;
    public $session;
    public $model;

    public function __construct()
    {   
        $this->view = new View();  
        $this->session = new Session();
        
    }

    /** 
     * Si un controlador tiene un modelo, creo el objeto para acceder a
     * su información en la base de datos.
     */
    public function loadModel($model)
    {
        $archivoModelo = "models/" . $model . "/" . $model . "Model.php";
        $modelo = array();
        if(file_exists($archivoModelo))
        {
            require_once $archivoModelo;
            $modelName = $model . "Model";
            $modelo = new $modelName();
        }

        $this->model = $modelo;
    }

    /**
     * Establezco la funcion render que me mostrara una vista
     * si el controlador tiene una.
     */
    final public function render($view){
        $this->view->render($view);
    }
}