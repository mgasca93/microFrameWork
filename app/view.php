<?php 
class View{

    public $pageTitle;
    
    public function __construct($page){
       $this->pageTitle = $this->setTitle($page);
    }

    public function render($view){
        $archivoView = "views/" . $view . "/index.php";
        if(file_exists($archivoView)){
            require_once $archivoView;
        }
    }

    /**
     * Al utilizar el nombre del controlador como titulo de la pagina
     * es posible recibir por ej. WelcomeControllerDefault y es necesario
     * añadir espacios entre cada palabra
     */
    public function setTitle($titlePage)
    {        
        $pageTitleArray = str_split($titlePage);
        $title = '';
        $counter = 0;
        foreach($pageTitleArray as $letter)
        {            
            if(!ctype_upper($letter) && $counter == 0)
            {
                $title .= $letter;
            }else if(ctype_upper($letter) && $counter > 0)
            {
                $title .= ' ' . $letter;
            }else
            {
                $title .= $letter;
            }
            $counter++;
        }          
        $title = ucfirst($title);
        return $title;
    }
}