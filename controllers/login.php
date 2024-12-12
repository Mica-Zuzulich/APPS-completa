<?php

class Login extends Controller{
    function __construct(){
        parent::__construct();
        error_log('Login::construct->Incio Login');
    }
    function render(){
        $this->view->render('login/index');

    }
}
?>