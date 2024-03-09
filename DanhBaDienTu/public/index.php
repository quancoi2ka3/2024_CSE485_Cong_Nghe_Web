<?php

//localhost/danhbadientu/index.php?controller=A&action=B

$controller = isset($_GET['controller']) ? $_GET['controller']:'home';
$action = isset($_GET['action']) ? $_GET['action']:'index';

$controller =ucfirst($controller);

$path = 'app/models/'.$controller.'.php';

if(!file_exists($path)){
    die('tep tin k ton tai');
}else{
    echo $path;
}

require($path);

//Muc tieu
//Goi ra controller 

// Khai báo thư viện 
require_once '../app/config.php';
require_once '../app/functions.php';
// Khởi tạo các biến 
$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$data = $_POST;
// Xử lý yêu cầu 
if ($url === '/' && $method === 'GET') {
    // Hiển thị trang chủ   
    require_once '../views/home.php';
} elseif ($url === '/login' && $method === 'POST') {
    // Xử lý đăng nhập   
    $username = $data['username'];
    $password = $data['password'];
    // ... 
} else {
    // Hiển thị thông báo lỗi 404   
    echo "<h1>404 Not Found</h1>";
}
