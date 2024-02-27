<?php
function getAllUsers(){
   //b1: Kết nối database server(mysql)
   $conn = mysqli_connect('localhost', 'root','123456', 'news');
   if(!$conn){
        die('Không thể kết nối.');
   }
   
   //b2:viết câu lệnh sql
   $sql = "SELECT * FROM users";

   //b3: thực thi câu lệnh
   $result = mysqli_query($conn, $sql);

   //b4: tạo mảng chứa dl
   $users = [];
   if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
   }
   //b5: đóng kết nối
   mysqli_close($conn);
    return $users;
}
$users = getAllUsers();
?>