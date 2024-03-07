<?php
require_once '../database.php';
$conn = connect();

function getAllNews(){
    global $conn;
    
    //b2:viết câu lệnh sql
    $sql = "SELECT * FROM news";
 
    //b3: thực thi câu lệnh
    $result = mysqli_query($conn, $sql);
 
    //b4: tạo mảng chứa dl
    $news = [];
    if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
            $news[] = $row;
         }
    }
    //b5: đóng kết nối
    mysqli_close($conn);
     return  $news;
 }
 
?>