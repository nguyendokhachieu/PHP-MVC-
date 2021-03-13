<?php
    // định nghĩa các đường dẫn
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT_PATH', dirname(__FILE__));
    define('LIBRARY_PATH', ROOT_PATH . DS . 'libs' . DS);
    define('CONTROLLER_PATH', ROOT_PATH . DS . 'controllers' . DS);
    define('MODEL_PATH', ROOT_PATH . DS . 'models' . DS);
    define('VIEW_PATH', ROOT_PATH . DS . 'views' . DS);
    define('PUBLIC_PATH', ROOT_PATH . DS . 'public' . DS);

    // định nghĩa cơ sở dữ liệu
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'manage_user');
    define('DB_TABLE', 'user');
?>