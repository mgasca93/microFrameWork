<?php



class Session{

    public function __construct(){
        session_start();
    }

    public function set($clave, $valor){
        if(isset($_SESSION[$clave])){
            return "ERROR 100: SESSION EXISTS.";
        }else{
            $_SESSION[$clave] = $valor;
        }
    }

    public function get($clave){
        if(isset($_SESSION[$clave])){
            return $_SESSION[$clave];
        }else{
            return "ERROR 101: SESSION NOT EXISTS.";
        }
    }        

    //Destruimos todas las sessiones
    public function closeSession(){
        session_unset();
        session_destroy();
    }

}