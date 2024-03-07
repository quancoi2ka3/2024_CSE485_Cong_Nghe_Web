<?php
require_once '../database.php';
$conn = connectDB();

function getAllEmployees(){
    global $conn;
    
    //b2:viết câu lệnh sql
    $sql = "SELECT * FROM employees";
 
    //b3: thực thi câu lệnh
    $result = mysqli_query($conn, $sql);
 
    //b4: tạo mảng chứa dl
    $employees = [];
    if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
            $employees[] = $row;
         }
    }
    //b5: đóng kết nối
    mysqli_close($conn);
     return  $employees;
 }
 
?>