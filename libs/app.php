<?php
//la clase siempre empieza con mayuscula y se debe de llamar igual que el archivo
class App
{
    function __construct()
    {
        /*obtiene lo que se encuentra en la url esto sirve para 
        llamar a carpetas archivos, metodos, pasar parametros.*/
        $url = isset($_GET['url']) ? $_GET['url'] : null;

        /*borrar cualquier / al final de la url */
        $url = rtrim($url, '/');

        /*divide la url cada vez que encuentre un '/' y lo transforma en un arreglo */
        $url = explode('/', $url);

        /*iniciamos con las validaciones */
        if (empty($url[0])) {
            error_log('App:: __construct() -> no existe aun la carpeta controllers/login.php');
            /*guardo en una variable la ruta de mi controlador*/
            $archivoController = 'controllers/login.php';
            /*importamos nuestro archivo */
            require_once $archivoController;
            /*creamos una nueva instacia del controlador */
            $controller = new Login ();
            /*cargamos su modelo */
            $controller->loadModel('login');      
            /*renderizamos la vista*/
            $controller->render();
            return false; 
        }
    

    }
}
