<?php
require_once __DIR__ . '/models/User.php';
session_start();
$users = getAllUsers();
$username = $_POST['username'];
$password = $_POST['password'];

$user_found = false;
foreach ($users as $u) {
    if ($u['Username'] == $username && password_verify($password, $u['Password'])) {
        $user_found = true;
        $_SESSION['user_id'] = $u['Username'];
        $_SESSION['user_role'] = $u['Role'];
        break;
    }
}
if ($user_found) {
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
    header('Location:views/admin_dashboard.php?msg=Đăng nhập thành công');
} else {
    header('Location:views/login/login.php?msg=Đăng nhập thất bại');
}
