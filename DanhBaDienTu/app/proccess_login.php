<?php 
require_once __DIR__.'/models/User.php';
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['Username'] === $username && $user['Password'] === $password) {
            $_SESSION['user_id'] = $user['Username'];
            $_SESSION['user_role'] = $user['Role'];
            $role = $user['Role'];
            if ($role == 'admin') {
                setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); 
                header('Location: http://localhost/DB%C4%90T/DanhBaDienTu/app/views/admin_dashboard.php');
            } else {
                header('Location: https://www.tlu.edu.vn/');
            }
            exit;
        }
    }
    echo 'Tên đăng nhập hoặc mật khẩu không chính xác';
} else {
    echo 'Không tồn tại';
}
?>
