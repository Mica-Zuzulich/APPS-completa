<?php

class Controller{

    function __construct(){
        $this->view=new View();
    }

    function LoadModel($model){
        $url='models/' .$model .'model.php';
        if(file_exists($url)){
            require_once $url;

            $modelName=$model.'Model';
            $this->model=new $modelName();
        }
    }

    function existPOST($params){
        foreach($params as $param){
            if(!isset($_POST[$param])){
                error_log('CONTROLLER::existPOST => NO EXISTEN PARAMETROS' .$param);
                return false;
            }
        }
        return true;
    }

    function existGET($params){
        foreach($params as $param){
            if(!isset($_GET[$param])){
                error_log('CONTROLLER::existPOST => NO EXISTEN PARAMETROS' .$param);
                return false;
            }
        }
        return true;
    }
}
?>