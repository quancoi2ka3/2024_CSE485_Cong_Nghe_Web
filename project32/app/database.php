<?php
    require_once 'config.php';
    function connect(){
        global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME;
        $conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
        if(!$conn){
            die('Kết nối thất bại.').mysqli_connect_error();
        }
        return $conn;
    }

?>