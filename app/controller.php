<?php 

class Controller{

    public $view;
    public $session;
    public $model; 
    public $modelActive;
    public $exceptionCaptured;

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
    final public function index($view){
        $this->view->render($view, $this->exceptionCaptured);
    }

    /**
     * Capturo la exception que se pudo
     * presentar en tiempo de ejcución y la muestro por pantalla
     */
    public function getException(string $exception){
        $this->exceptionCaptured = 'A runtime error was caught: ' . $exception;
        $this->index('exception');       
    }
}