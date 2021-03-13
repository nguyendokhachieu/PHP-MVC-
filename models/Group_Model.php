<?php
    class Group_Model extends Model {

        public function __construct() {
            parent::__construct();
            
        }

        public function loadGroup() { // lấy về ra danh sách các group

            $query =   "SELECT `g`.`id`, `g`.`name`, `g`.`status`, `g`.`ordering`,  COUNT(`u`.`id`) as `member`
                        FROM `user` as `u` RIGHT JOIN `group` as `g`
                        ON (`u`.`group_id` = `g`.`id`)
                        GROUP BY `g`.`id`";

            $this->query($query);
            $result = $this->listRecord();
            return $result;
        }
    }
?>