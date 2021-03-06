<?php

require_once 'controllers/errores.php';

class App
{
    function __construct()
    {
        // echo "<p>Hola! New app!</p>";
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if (empty($url[0])) {
            $archController = 'controllers/login.php';
            require_once  $archController;
            $controller = new Login();
            $controller->loadModel('login');
            $controller->render();
            return false;
        }

        $archController = 'controllers/' . $url[0] . '.php';
        if (file_exists($archController)) {
            require_once  $archController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->render();
            }
        } else {
            $controller = new Errores();
        }
    }
}
