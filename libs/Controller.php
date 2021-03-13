<?php

    class Controller {
        public function __construct() {
            $this->view = new View();
        }

        public function loadModel($name) {
            $path = './models/' . $name . '_Model.php';
            $mName = ucfirst($name) . '_Model';
            
            if (file_exists($path)) {
                require_once $path;
                $this->db = new $mName();
            }
        }
    }
?>