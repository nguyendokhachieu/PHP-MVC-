<?php
    class ErrorRequest extends Controller {
        // public function __construct() {
            // đóng comment, nếu không sẽ không thể lấy được đối tượng $this->view
            // có thể tạo ra đối tượng view mới nếu mở comment
        // }

        public function index() {
            $msg = 'Something went wrong.';
            $this->view->message = $msg;
            $this->view->render('ErrorRequest/index');
        }
    }
?>