<?php
class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        error_log('Login :: __construct() -> inicio de login');
    }
    // function loadModel()
    // {

    // }
    function render()
    {
        $this->view->render('login/index');
    }
}
