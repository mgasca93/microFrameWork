<?php 

class Controller{

    public $view;
    public $session;
    public $model; 
    public $modelActive;

    public function __construct($activeController)
    {   
        $this->view = new View($activeController);  
        $this->model = new Model($activeController);
        $this->session = new Session();

        /**
         * Verifico si existe un modelo para el controlador
         * activo y lo cargo a la interfaz
         */
        $this->modelActive = $this->model->getModel();    
    }

    /**
     * Establezco la funcion render que me mostrara una vista
     * si el controlador tiene una.
     */
    final public function render($view){
        $this->view->render($view);
    }

}