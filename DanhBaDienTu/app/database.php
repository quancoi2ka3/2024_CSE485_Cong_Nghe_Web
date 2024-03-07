<?php
<<<<<<< HEAD
function connect(){
     //b1: Kết nối database server(mysql)
     $conn = mysqli_connect('localhost', 'root','', 'dbdt');
     if(!$conn){
          die('Không thể kết nối.');
     }
     return $conn;
}
=======
require_once'config.php';
function connectDB(){
      
     $conn = mysqli_connect(DB_HOST, DB_USERNAME,DB_PASSWORD, DB_DATABASE);
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

>>>>>>> c8d7c757afbc44c6b41e6b6dd15b5a433c7ce503
?>