<?php
    //thực hiện điều hướng controller và action trên URL đến đúng controller
    class Bootstrap {
        public function __construct() {
            $controllerURL = (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
            $actionURL = (isset($_GET['action'])) ? $_GET['action'] : 'index';

            $controllerName = ucfirst($controllerURL);

            $fileName = './controllers/' . $controllerName . '.php';

            if (file_exists($fileName)) {
                require_once ($fileName);
                $control = new $controllerName();

                if (method_exists($control, $actionURL)) {
                    $control->loadModel($controllerName); // gọi model
                    $control->$actionURL(); // gọi phương thức trong controller
                } else {
                    $this->error();
                }

            } else {
                $this->error();
            }            
        }

        private function error() {
            require_once './controllers/ErrorRequest.php';
            $e = new ErrorRequest();
            $e->index();
        }
    }
?>