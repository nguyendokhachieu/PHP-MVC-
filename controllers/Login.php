<?php
    class Login extends Controller {
        public function index() {
            
            //Session::Init();
            if (Session::get("loggedIn") == true) {
                header("location: index.php");
            } else {
                $this->view->render('Login/index');
            }

            if (isset($_POST['submit'])) {
                // echo '<pre>';
                // echo print_r($_POST);
                // echo '<pre>';

                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = "SELECT `username`, `password` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";

                // echo '<pre>';
                // echo print_r($this->db->listRecord());
                // echo '<pre>';

                if ($this->db->authenticate($query) == 1) {
                    Session::Init();
                    Session::set("loggedIn", true);

                    header("location: index.php");
                }
            }
        }
    }
?>