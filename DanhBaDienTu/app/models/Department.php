<?php
require_once '../database.php';
$conn = connect();

function getAllDepartments(){
    global $conn; 

    $sql = "SELECT * FROM departments";
 
    // Thực thi câu lệnh
    $result = mysqli_query($conn, $sql);
 
    // Tạo mảng chứa dữ liệu
    $departments = [];
    if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
             $departments[] = $row;
         }
    }
    // Đóng kết nối
    mysqli_close($conn);
    return $departments;
}

?>