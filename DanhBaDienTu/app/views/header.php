<?php
    require_once '../models/Category.php';
    $categories = getAllCategories();
    $save1 = [];
    $save2 = [];
    foreach($categories as $category){
        if($category['category_id'] == $category['parent_id']){
            $save1[] = $category;
        }
        if($category['category_id'] != $category['parent_id']){
            $save2[] = $category;
        }
    }
?>

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
                                <li class="nav-item dropdown" style="border-right: none; padding:0;">
                                    <a class="nav-link dropdown-toggle" href="#" tabindex="-1" aria-disabled="true" data-bs-toggle="dropdown">Đăng nhập</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="info.php">Thông tin cá nhân</a></li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="bi bi-person-plus-fill"></i> &nbsp Đăng kí</a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> &nbsp Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
        </header>
</body>
</html>