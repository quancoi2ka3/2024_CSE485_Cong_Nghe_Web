<?php
require_once '../database.php';
$conn = connect();

function getAllUsers(){
    global $conn; 

    $sql = "SELECT * FROM users";
 
    // Thực thi câu lệnh
    $result = mysqli_query($conn, $sql);
 
    // Tạo mảng chứa dữ liệu
    $users = [];
    if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
             $users[] = $row;
         }
    }
    // Đóng kết nối
    mysqli_close($conn);
    return $users;
}

?>