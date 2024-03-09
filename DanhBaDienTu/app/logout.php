<?php
session_start();
session_regenerate_id(true); // Generate a new session ID for enhanced security
session_destroy();
setcookie('logged_in', "", time() - 3600, "/", "", false, true);

header('Location: http://localhost/DB%C4%90T/DanhBaDienTu/app/views/login/login.php'); 
exit; // Đảm bảo không có mã HTML hoặc dòng lệnh nào được thêm vào sau header
?>
