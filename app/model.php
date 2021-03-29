<?php 

class Model{

    public $fileModel;
    public $modelObject;
    public $modelName;

    public function __construct($modelactive){
        $this->modelName = $modelactive;
        $this->db = new DB();
        $this->modelObject = false;         
    }
    
     /** 
     * Verifico si el controlador activo tiene un modelo
     * y retorno un flag bool
     */
    public function modelExists(){
        
        $this->fileModel = "models/{$this->modelName}/{$this->modelName}Model.php";
        $flag = false;
        if(file_exists($this->fileModel))
        {
            $flag = true;
        }

        return $flag;
    }

    /**
     * Si el controlador activo tiene
     * un modelo, retorno el objeto modelo 
     */
    public function getModel(){    
        if($this->modelExists())
        {
            require_once $this->fileModel;

            $modelName = $this->modelName . "Model";            
            $this->modelObject = new $modelName($this->modelName);
        }
        return $this->modelObject;
    }
}