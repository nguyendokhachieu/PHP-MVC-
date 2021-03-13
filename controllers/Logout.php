<?php 
    class Logout extends Controller {
        public function __construct() {
            parent::__construct();

            Session::Init();
            Session::destroy();

            //header("location: index.php");
        }

        public function index() {
            $this->view->render('Logout/index');
        }
    }
?>