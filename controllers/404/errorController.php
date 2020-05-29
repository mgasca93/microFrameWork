<?php

class ManagerError extends Controller{

    public function __construct(){
        parent::__construct(); 
    }
    
    public function render($view){
        $this->view->render($view);
    }
}