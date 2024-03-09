<<<<<<< HEAD
<?php 
session_start();
require_once __DIR__.'/../models/User.php';
?>
=======
<?php
 session_start();
 ?>
>>>>>>> 2311e795fd4d5a9586da4194d0f20458f147f2fa
<!DOCTYPE html>
<html>
<head>
    <!-- <title>DANH BẠ ĐIỆN TỬ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../public/assets/css/styles.css"> -->
</head>
<body>  
        <header>
            <div>
                <img class="image" src="../../public/assets/images/baner.png" class="img-fluid" alt="banner">
            </div>
            <nav class="navbar navbar-expand-lg mt-1">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="home.php">Trang chủ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-uppercase" href="#" data-bs-toggle="dropdown">Giới thiệu</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="deverlopment_history.php">Lịch sử hình thành</a></li>
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="main_function.php">Chức năng chính</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="statistical.php">Thống kê danh bạ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-uppercase" href=""  data-bs-toggle="dropdown">Tra cứu danh bạ</a>
                                <ul class="dropdown-menu ms-3">
                                    <li>
                                        <a class="dropdown-item" href="unit_directory.php">Danh bạ đơn vị</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="employee_directory.php">Danh bạ nhân viên</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="news_evens.php">Tin tức & sự kiện</a>
                                <!-- <ul class="dropdown-menu ms-4">
                                    <li><a class="dropdown-item" href="#">Tin tức</a></li>
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="#">Sự kiện</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="contact.php" tabindex="-1" aria-disabled="true">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item" style="border-right: none; padding:0;">
                                    <a class="nav-link" href="#"> <i class="bi bi-person-fill"></i></a>
                                </li>
<<<<<<< HEAD
                                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <?php 
    if (isset($_SESSION['user_id']) || isset($_COOKIE['logged_in'])) {
        $username = $_SESSION['user_id'];
            echo "Welcome, " .$_SESSION['user_id'];
            
        }
    
    else{
        echo '<label>Đăng Nhập</label>';

    }
    
    
    ?>
    
  </button>
  <?php 
  if (
    isset($_SESSION['user_id']) || isset($_COOKIE['logged_in'])
) {
    $username = $_SESSION['user_id'];
    echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
    echo '<li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/components/dropdowns/#accessibility">Trang cá nhân</a></li>';
    echo '<li><a class="dropdown-item" href="">Another action</a></li>';
    echo '<li><a class="dropdown-item" href="/DBĐT/DanhBaDienTu/app/logout.php">Đăng xuất</a></li>';
    echo '</ul>';    
}
else{
    echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
    echo '<li><a class="dropdown-item" href="/DBĐT/DanhBaDienTu/app/logout.php">Đi Đến Trang Đăng Nhập</a></li>';
}
  ?>
</div>
=======
                                <li class="nav-item dropdown" style="border-right: none; padding:0;">
                                    <a class="nav-link dropdown-toggle" href="#" tabindex="-1" aria-disabled="true" data-bs-toggle="dropdown"><?php
                                        echo "Hello User : " .$_SESSION['user_id'];
                                        ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="info.php">Trang cá nhân</a></li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="../logout.php"><i class="bi bi-person-plus-fill"></i> &nbsp Đăng xuất</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="users/Edit_User.php"><i class="bi bi-box-arrow-right"></i> &nbsp Chỉnh sửa thông tin cá nhân</a>
                                        </li>
                                    </ul>
                                </li>
>>>>>>> 2311e795fd4d5a9586da4194d0f20458f147f2fa
                            </ul>
                        </div>
                </div>
            </nav>
        </header>
</body>
</html>