<?php

class Welcome extends Controller{

    public function __construct(){
        parent::__construct();        
    } 
          
    public function render($view){
        $this->view->render($view);
    }    
}