<?php
require_once __DIR__ . '/models/User.php';
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
                header('Location:views/admin_dashboard.php');
            } else {
<<<<<<< HEAD
                header('Location: http://localhost/DB%C4%90T/DanhBaDienTu/app/views/home.php');
=======
                header('Location:views/home.php');
>>>>>>> 2311e795fd4d5a9586da4194d0f20458f147f2fa
            }
            exit;
        }
    }
    header("Location:views/login/login.php?msg=Tên đăng nhập hoặc mật khẩu sai");
} else {
    echo 'Không tồn tại';
}

