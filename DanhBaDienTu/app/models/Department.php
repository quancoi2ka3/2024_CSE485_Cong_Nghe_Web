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
function getDepartmentById($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE id =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $department = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $department;
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

function updateDepartment($id, $name, $description)
{
    $conn = connectDB();
    $sql = "UPDATE departments SET name = ?, description = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $name, $description, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function deleteDepartment($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM departments WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function isDepartmentExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM departments WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
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
function getCountDepartment(){
    $conn = connectDB();
    $sql = "SELECT COUNT(*) AS count FROM departments";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count_departments = $row['count'];
    mysqli_free_result($result);
    return $count_departments;
}