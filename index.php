<?php
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors', TRUE);

    ini_set('display_errors', FALSE);

    ini_set('log_errors', TRUE);
    
    ini_set("error_log", "C:/xampp/htdocs/Dentista/php-error.log");

    error_log("inicio de aplicacion");

    /*cargamos una libreria donde tendremos los archivos base 
    para que funcione la aplicacion*/
    require_once 'libs/app.php';

    /*creamos un nuevo objeto de nuestra libs/app y se ejecutara 
    automaticamente el constructor de nuestra clase App*/
    $app = new App();
