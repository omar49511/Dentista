<?php

class Errores extends Controller{
    function __construct()
    {
        parent::__construct();
        error_log('Errores::__construct()-> inicio de errores');
    }
    // function loadModel()
    // {

    // }
    function render()
    {
        $this->view->render('errors/index');
    }
}