<?php
    $localhost = "localhost";
    $user = "root";
    $passwd = "";
    $database = "hotel_reservation";

    class Connection {
        public $con;
        public function __construct() {
            try {
                $this->con = new mysqli($this->localhost, $this->user,$this->passwd, $this->database);
            } catch (Exception $e) {
                echo "Not connected!" . $e->getMessage();
            }
        }
        public function getC() {
            return $this->con;
        }
    } 

?>