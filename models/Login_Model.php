<?php 
    class Login_Model extends Model {
        public function __construct() {
            parent::__construct();
        }

        public function authenticate($query) {
            $newQuery = $this->query($query);
            return mysqli_num_rows($newQuery);
        }
    }
?>