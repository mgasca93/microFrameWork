<?php



class Session{

    public function __construct(){
        session_start();
    }

    /**
     * Esta funcion recibe un arreglo con los valores
     * para establecer las session
     */
    public function set($arraySession){
        foreach($arraySession as $clave => $valor){
            $_SESSION[$clave] = $valor;
        }
    }

    /**
     * Esta funcion recibe como argumento la clave de la session
     * en caso de ser establecida retorn todas las sessiones existen
     */
    public function get($clave = ''){
        if(strlen($clave) == 0){
            return $_SESSION;
        }else{
            return $_SESSION[$clave];
        }
    }        

    /*
    * Verifica si existen sessiones activas
    */
    public function sessionExists(){
        if(isset($_SESSION) && count($_SESSION) > 0){
            return true;
        }else{
            return false;
        }
    }
    
    /*
    * Destruimos todas las sessiones
    */
    public function closeSession(){
        session_unset();
        session_destroy();
    }

}