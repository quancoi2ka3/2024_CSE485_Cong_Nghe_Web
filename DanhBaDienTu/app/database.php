<?php
function connect(){
     //b1: Kết nối database server(mysql)
     $conn = mysqli_connect('localhost', 'root','', 'dbdt');
     if(!$conn){
          die('Không thể kết nối.');
     }
     return $conn;
}
?>