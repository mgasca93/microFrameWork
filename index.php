<?php

class microFramework{

    public $directory;

    public function __construct($flagDebug = false){
    
        $this->debug($flagDebug);
        /**
         * Establecemos los directorios de carga
         */
        $this->directory = array(
            'app',
            'config',
        );

        /**
         * Creamos la auto carga de clases
         */
        for($i = 0; $i < count($this->directory); $i++){
            $this->autoload($this->directory[$i]);
        }        

        /**
         * Se inicializa la aplicacion
         */
        $app = new App();
        $app->run();
    }

    /**
     * Me permite gestionar el modo debug para la
     */
    public function debug($flag){
        if($flag){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }

    public function autoload($directorio)
    {
        //Obtengo todos los archivos dentro del directorio dado
        $archivos = array_diff(scandir($directorio), array('.','..'));
        foreach($archivos as $archivo)
        {
            //Verifico si es un subdirectorio y lo cargo de forma recursiva
            $ruta = $directorio . "/" . $archivo;
            if(is_dir($ruta))
            {
                $this->autoload($ruta);
            }

            //Si es un archivo creo la auto carga
            if(file_exists($ruta) && is_file($ruta))
            {
                require_once $ruta;                
            }             
        }
    }
}

$aplication = new microFramework();