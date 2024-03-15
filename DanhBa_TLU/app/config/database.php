<?php
require_once 'config.php';
// Hàm kết nối database
    function connectDB() {
        global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE;
        $conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
        if (!$conn) {
        die("Kết nối database thất bại: " . mysqli_connect_error());
        }
        return $conn;
    }
    function query($sql){
        $conn = connectDB();
        $result = mysqli_query($conn,$sql);
        if(!$result){
             die("Lỗi truy vấn database: ".mysqli_error($conn));
   
        }
        return $result;
   }

?>