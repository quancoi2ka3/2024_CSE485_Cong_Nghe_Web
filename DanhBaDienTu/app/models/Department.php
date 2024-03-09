<?php 
require_once __DIR__.'/../database.php';

// Hàm lấy danh sách bộ phận 
function getDepartments()
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments";
    $result = mysqli_query($conn, $sql);
    $departments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row;
    }
    mysqli_free_result($result);
    return $departments;
}
// Tìm đơn vị theo ID
function getDepartmentById($DepartmentID)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE DepartmentID =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $DepartmentID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $departments = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $departments;
}
//Thêm 1 đơn vị mới
function addDepartment($DepartmentID,$DepartmentName,$Address,$Email,$Phone,$Logo,$Website)
{
 try{
    $conn = connectDB();
    $sql = "INSERT INTO departments (DepartmentID, DepartmentName,Address,Email,Phone,Logo,Website) VALUES (?, ?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "isssiss", $DepartmentID, $DepartmentName,$Address,$Email,$Phone,$Logo,$Website);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
 }catch(PDOException $e){
    
    echo "Lỗi" ;
 }
}

function updateDepartment($DepartmentID,$DepartmentName,$Address,$Email,$Phone,$Logo,$Website)
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