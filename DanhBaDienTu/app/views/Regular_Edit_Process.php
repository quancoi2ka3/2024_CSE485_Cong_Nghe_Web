<?php
require_once('../models/User.php');
require_once('../models/Employee.php');

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];

        // Kiểm tra dữ liệu đầu vào
        $Username = trim($_POST['Username']);
        if (empty($Username)) {
            $errors[] = 'Tên đăng nhập không được để trống';
        }

        $Password = trim($_POST['Password']);
        if (empty($Password)) {
            $errors[] = 'Mật khẩu không được để trống';
        }
        $Re_Pass = trim($_POST['Re_Pass']);
        if($Password!=$Re_Pass){
            $errors[] ='Mật khẩu chưa khớp';
        }
        $FullName = trim($_POST['FullName']);
        if (empty($FullName)) {
            $errors[] = 'Họ tên không được để trống';
        }
        $Address = trim($_POST['Address']);
        if (empty($Address)) {
            $errors[] = 'Địa chỉ không được để trống';
        }
        $Email = trim($_POST['Email']);
        if (empty($Email)) {
            $errors[] = 'Email không được để trống';
        }
        $MobilePhone = trim($_POST['MobilePhone']);
        if (empty($MobilePhone)) {
            $errors[] = 'SDT không được để trống';
        }
        $Position = trim($_POST['Position']);
        if (empty($Position)) {
            $errors[] = 'Chức vụ không được để trống';
        }
        $Avatar = trim($_POST['Avatar']);

        // Xử lý lỗi

        if (!empty($errors)) {
            echo "<p style='color: red'>Đăng kí người dùng thất bại vì các lỗi sau :</p>";
            foreach ($errors as $error) {
                echo "<p style='color: red'>$error</p>";
            }
        } else {
            // Kiểm tra kết quả
            if (SignUp($Username, $Password, $FullName,$Address, $Email, $MobilePhone, $Position, $Avatar)) {
                header("Location:SignUp.php?msg=Đăng kí thành công");
            } else {
                
            }
        }
    }
} catch (PDOException $e) {
    echo "<p style='color: red'>Lỗi : " . $e->getMessage() . "</p>";
}