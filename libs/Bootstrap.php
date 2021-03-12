<?php
//thực hiện điều hướng controller và action trên URL đến đúng controller

    class Bootstrap {
        public function __construct() {
            $controllerURL = (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
            $actionURL = (isset($_GET['action'])) ? $_GET['action'] : 'index';

            $controllerName = ucfirst($controllerURL);

            $fileName = './controllers/' . $controllerName . '.php';

            $isGoing = true;

            if (file_exists($fileName)) {
                require_once ($fileName);
                $control = new $controllerName();

                if (method_exists($control, $actionURL)) {
                    $control->$actionURL();
                } else {
                    $isGoing = false;
                }

            } else {
                $isGoing = false;
            }
            
            if (!$isGoing) {
                require_once './controllers/ErrorRequest.php';
                $e = new ErrorRequest();
            }
            
        }
    }
?>