<?php
    class Group extends Controller {
        public function __construct() {
            parent::__construct();
            
            Session::Init(); //important: sử dụng get thay vì kiểm tra isset $_SESSION[]

            if (!Session::get("loggedIn")) {
                header("location: index.php");
            }
        }

        public function index() {
            
            $this->db->setTable('group');
            
            $this->view->data = $this->db->loadGroup();
            $this->view->render("Group/index");
        }

        public function delete() {
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $query = "DELETE FROM `group` WHERE `id` = '$id'";
                echo $this->db->query($query);
            }
        }
    }
?>