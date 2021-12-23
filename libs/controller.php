<?php
class Controller
{
    //controlador base de los cuales los demas controladores estaran heredando
    function __construct()
    {
        //indicar que vista queremos cargar
        $this->view = new View();
    }
    function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';
        if (file_exists($url)) {
            //llamamos al archivo
            require_once $url;
            //inicializamos un nuevo objeto
            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}
