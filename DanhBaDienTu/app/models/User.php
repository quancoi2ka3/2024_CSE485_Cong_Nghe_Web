<?php
require_once __DIR__.'/../database.php';
$conn = connectDB();

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
function getUserByUserName($Username)
{
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE Username =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $Username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $users = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $users;
}
//Thêm 1 đơn vị mới
function AddUser($Username,$Password,$Role,$EmployeeID)
{
 try{
    $conn = connectDB();
    $sql = "INSERT INTO users (Username,Password,Role,EmployeeID) VALUES (?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $Username,$Password,$Role,$EmployeeID);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
 }catch(PDOException $e){
    
    echo "Lỗi" ;
 }
}

function updateDepartment($Username,$Password,$Role,$EmployeeID)
{
    $conn = connectDB();
    $sql = "UPDATE departments SET DepartmentName = ?, Address = ?, Email = ?, Phone = ?, Logo = ?, Website = ? WHERE DepartmentID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi", $DepartmentID,$DepartmentName,$Address,$Email,$Phone,$Logo,$Website);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function deleteDepartment($DepartmentID)
{
    $conn = connectDB();
    $sql = "DELETE FROM departments WHERE DepartmentID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $DepartmentID);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function isDepartmentExist($DepartmentID)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM departments WHERE DepartmentID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $DepartmentID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function searchDepartments($keyword) {
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE DepartmentID LIKE ? OR DepartmentName LIKE ? OR Address LIKE ? OR Email LIKE ? OR Phone LIKE ? OR Website LIKE ? ";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "isssss", $keyword,$keyword,$keyword,$keyword,$keyword,$keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $departments = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row; 
    }
    return $departments;
}
?>