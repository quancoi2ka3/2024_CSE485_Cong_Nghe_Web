<?php
require_once __DIR__.'/../database.php';
$conn = connectDB();

function getEmployees() {
    $conn = connectDB();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    $employees = array();
    while ($row = mysqli_fetch_assoc($result)) {
    $employees[] = $row;
    }
    mysqli_free_result($result);
    return $employees;
    }
    function getEmployeeById($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE id = ?";$stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employee = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $employee;
    }
    function addEmployee($EmployeeID, $FullName, $Address,$Email,$MobilePhone,$Position){
    $conn = connectDB();
    $sql = "INSERT INTO employees (EmployeeID, FullName, Address,Email,MobilePhone,Position) VALUES (?,
    ?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "isssis",$EmployeeID, $FullName, $Address,$Email,$MobilePhone,$Position);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
    }
    function updateEmployee($EmployeeID, $FullName, $Address, $Email, $MobilePhone, $Position){
        $conn = connectDB();
        $sql = "UPDATE employees SET FullName = ?, Address = ?, Email = ?, MobilePhone = ?, Position = ?
        WHERE EmployeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssi", $FullName, $Address, $Email, $MobilePhone, $Position, $EmployeeID);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        return $result;
    }
    
    function deleteEmployee($EmployeeID) {
    $conn = connectDB();
    $sql = "DELETE FROM employees WHERE EmployeeID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $EmployeeID);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
    }function isEmployeeExist($id) {
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM employees WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
    }
    function searchEmployees($Position, $keyword) {
        $conn = connectDB();
        $sql = "SELECT * FROM employees WHERE Position = ? AND (FullName LIKE ? OR Address LIKE ? OR Email LIKE ? OR MobilePhone LIKE ? OR DepartmentID IN (SELECT DepartmentID FROM departments WHERE DepartmentName LIKE ?))";
        $keyword = "%$keyword%";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss", $Position, $keyword, $keyword, $keyword, $keyword, $keyword);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $employees = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row; 
        }
        return $employees;
    }
    
    
?>