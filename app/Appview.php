<?php 
class View{

    public function __construct(){
       
    }

    public function render($view){
        $archivoView = "views/" . $view . "/index.php";
        if(file_exists($archivoView)){
            require_once $archivoView;
        }
    }
}