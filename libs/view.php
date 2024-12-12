<?php

class View{
    function __construct(){

    }
    function render($nombre,$data=[]){
        $this->d=$data;
        $this->handleMessages();

        require 'views/' .$nombre .'.php';
    }
    private function handleMessages(){
        if(isset($_GET['success']) && isset($_GET['error'])){
            //error
        }else if(isset($_GET['success'])){
            $this->handleSuccess();

            }else if(isset($_GET['error'])){
                $this->handleError();
            }
        }

        private function handleError(){
            $hash= $_GET['error'];
            $error=new Errors();

            if($error->existsKey($hash)){
                $this->d['error']=$error->get($hash);
            }
        }
        private function handlesuccess(){
            $hash= $_GET['success'];
            $success=new Success();

            if($success->existsKey($hash)){
                $this->d['error']=$success->get($hash);
            }
        }

        public function showMassages(){
            $this->showErrors();
            $this->showSuccess();
        }
        public function showErrors(){
                if(array_key_exists('error',$this->d)){
                    echo '<div class "error">' .$this->d['error'] . '</div>';
                }
        }
        public function showSuccess(){
            if(array_key_exists('success',$this->d)){
                echo '<div class "success">' .$this->d['success'] . '</div>';
            }
        }




    }


