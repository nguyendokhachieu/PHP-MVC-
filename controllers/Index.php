<?php
    class Index extends Controller {
        public function __construct() {
            parent::__construct(); //lấy view
        }

        public function index() { //hiển thị danh sách
            $this->view->render('Index/index');
        }

        public function add() {
            $this->view->render('Index/add');
        }
    }
?>