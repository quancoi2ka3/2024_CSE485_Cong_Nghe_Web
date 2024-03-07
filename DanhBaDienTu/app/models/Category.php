<?php
require_once '../database.php';
$conn = connect();

function getAllCategories(){
    global $conn; 

    $sql = "SELECT * FROM categories";
 
    // Thực thi câu lệnh
    $result = mysqli_query($conn, $sql);
 
    // Tạo mảng chứa dữ liệu
    $categories = [];
    if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
             $categories[] = $row;
         }
    }
    // Đóng kết nối
    mysqli_close($conn);
    return $categories;
}

?>