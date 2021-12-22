<?php
//la clase siempre empieza con mayuscula y se debe de llamar igual que el archivo
class App
{
    function __construct()
    {
        /*obtiene lo que se encuentra en la url esto sirve para 
        llamar a carpetas archivos, metodos, pasar parametros.*/
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        //borrar cualquier '/' al final de la url 
        $url = rtrim($url, '/');
        //divide la url cada vez que encuentre un '/' y lo transforma en un arreglo
        $url = explode('/', $url);
        //iniciamos con las validaciones 
        if (empty($url[0])) {
            error_log('App:: __construct() -> ya existe la carpeta controllers/login.php');
            //guardo en una variable la ruta de mi controlador
            $archivoController = 'controllers/login.php';
            //importamos nuestro archivo 
            require_once $archivoController;
            //creamos una nueva instacia del controlador 
            $controller = new Login();
            //cargamos su modelo 
            $controller->loadModel('login');
            //renderizamos la vista
            $controller->render();
            return false;
        }
        /* si nuestra url contienen un controlador especificado */
        $archivoController = 'controllers/' . $url[0] . '.php';
        /*valida si el controlador especificado existe */
        if (file_exists($archivoController)) {
            //mandamos a llamar a nuestro controlador
            require_once $archivoController;
            //creamos una nueva instancia
            $controller = new $url[0];
            //cargamos el modelo que se llama igual que el controlador
            $controller->loadModel($url[0]);
            //valida si existen metodos que cargar en la url
            if (isset($url[1])) {
                //validamos si existe el metodo en la url vemos si existe dentro de la clase
                if (method_exists($controller, $url[1]))
                    //validamos que existen los parametros de nuestros metodo
                    if (isset($url[2])) {
                        //contamos el numero de parametros, Nota: se le resta 2 para ignorar a la clase y los metodos
                        $nparam = count($url) - 2;
                        //arreglo de parametros
                        $params = [];
                        //for que recorre nuestro arreglo url para guardar en nuestra arreglo los parametros
                        for ($i = 0; $i < $nparam; $i++) {
                            /*se suma 2 para que empiece desde la seccion de parametros 
                        Ejemplo: $url=/0.Clase/1.Metodo/2.Parametro*/
                            array_push($params, $url[$i + 2]);
                        }
                        $controller->{$url[1]}($params);
                    } else {
                        /*el metodo no tiene parametros, se manda a llamar
                    el metodo tal cual*/
                        $controller->{$url[1]}();
                    }
            } else {
                //carga la pagina principal de cada controlador por default
                $controller->render();
            }
        } else {
            //no existe el archivo, muestra una pagina de error 404
        }
    }
}
