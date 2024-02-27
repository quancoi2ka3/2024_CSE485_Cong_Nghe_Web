<?php
require_once 'config.php';
function connectDB(){
      
     $conn = mysqli_connect(DB_HOST, DB_USERNAME,DB_PASSWORD, DB_DATABASE);
     mysqli_set_charset($conn, 'UTF8');
     if(!$conn){
          die('Không thể kết nối.'.mysqli_connect_error());
     }
     return $conn;
}
//Hàm thực hiện truy vấn SQL
function query($sql){
     $conn = connectDB();
     $result = mysqli_query($conn,$sql);
     if(!$result){
          die("Lỗi truy vấn database: ".mysqli_error($conn));

     }
     return $result;
}
?>