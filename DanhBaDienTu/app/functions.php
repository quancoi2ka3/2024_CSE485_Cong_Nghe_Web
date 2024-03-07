<?php
require_once 'database.php';
require_once 'config.php';


// Hàm kiểm tra đăng nhập 
function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
function getAllEmployees()
{

    //b2:viết câu lệnh sql
    $sql = "SELECT * FROM employees";

    //b3: thực thi câu lệnh
    $result = mysqli_query(connectDB(), $sql);

    //b4: tạo mảng chứa dl
    $employees = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }
    //b5: đóng kết nối
    mysqli_close(connectDB());
    return $employees;
}
$employees = getAllEmployees();
