<?php
require_once '../database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>DANH BẠ ĐIỆN TỬ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>  
<div class="container-fluid">
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
                                    <li><a class="dropdown-item" href="#">Lịch sử hình thành</a></li>
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
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="phonebook.php">Danh bạ nổi bật</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-uppercase" href="users.php" data-bs-toggle="dropdown">Tin tức & sự kiện</a>
                                <ul class="dropdown-menu ms-4">
                                    <li><a class="dropdown-item" href="#">Tin tức</a></li>
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="#">Sự kiện</a>
                                    </li>
                                </ul>
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
        <main class="mt-3">
            <div class="container" style=" padding-right: 0;">
                <h3>LỊCH SỬ PHÁT TRIỂN</h3>
                <div style="display: flex" class="mt-4">
                    <div>
                        <img style="width: 300px; height: 150px; margin-left: 250px" src="https://www.tlu.edu.vn/Portals/0/1609.png" alt="logo">
                    </div>
                    <div class="ms-4 mt-2 text-right">
                        <a href="" class="text-decoration-none" style="color: black; font-size: 20px;"><b>Giai đoạn 2006 – 2019: Thực hiện chiến lược phát triển</b></a>
                        <p>07/10/2021 09:39</p>
                        <p class="text-right mt-5">
                            <a href="https://www.tlu.edu.vn/lich-su-su-kien/giai-doan-2006-2019-thuc-hien-chien-14883" class="text-decoration-none">
                                <i class="bi bi-chevron-right"></i>
                                <em>Xem chi tiết</em>
                            </a>
                        </p>
                    </div>
                </div>

                <br><br>
                <hr style="border: none;border-top: 1px dashed #000;">

                <div style="display: flex" class="mt-5">
                    <div>
                        <img style="width: 300px; height: 150px; margin-left: 250px" src="https://www.tlu.edu.vn/Portals/0/ht.png" alt="logo">
                    </div>
                    <div class="ms-4 mt-2 text-right">
                        <a href="" class="text-decoration-none" style="color: black; font-size: 20px;"><b>Giai đoạn 1986 – 2005: Cùng đất nước đổi mới</b></a>
                        <p>07/10/2021 09:30</p>
                        <p class="text-right mt-5">
                            <a href="https://www.tlu.edu.vn/lich-su-su-kien/giai-doan-1986-2005-cung-dat-nuoc-14882" class="text-decoration-none">
                                <i class="bi bi-chevron-right"></i>
                                <em>Xem chi tiết</em>
                            </a>
                        </p>
                    </div>
                </div>

                <br><br>
                <hr style="border: none;border-top: 1px dashed #000;">

                <div style="display: flex" class="mt-5">
                    <div>
                        <img style="width: 300px; height: 150px; margin-left: 250px" src="https://www.tlu.edu.vn/Portals/0/dhtl.jpg" alt="logo">
                    </div>
                    <div class="ms-4 text-right">
                        <a href="" class="text-decoration-none" style="color: black; font-size: 20px;"><b>Giai đoạn 1976 – 1985: Xây dựng và phát triển gắn với nhiệm vụ kiến thiết đất nước sau chiến tranh</b></a>
                        <p>07/10/2021 09:28</p>
                        <p class="text-right mt-4">
                            <a href="https://www.tlu.edu.vn/lich-su-su-kien/giai-doan-1976-1985-xay-dung-va-phat-14881" class="text-decoration-none">
                                <i class="bi bi-chevron-right"></i>
                                <em>Xem chi tiết</em>
                            </a>
                        </p>
                    </div>
                </div>

                <br><br>
                <hr style="border: none;border-top: 1px dashed #000;">

                <div style="display: flex" class="mt-5">
                    <div>
                        <img style="width: 300px; height: 150px; margin-left: 250px" src="https://www.tlu.edu.vn/Portals/0/images-1-.jpg" alt="logo">
                    </div>
                    <div class="ms-4 mt-2 text-right">
                        <a href="" class="text-decoration-none" style="color: black; font-size: 20px;"><b>Giai đoạn 1965 – 1975: Vươn lên trong điều kiện chiến tranh ác liệt</b></a>
                        <p>07/10/2021 09:24</p>
                        <p class="text-right mt-5">
                            <a href="https://www.tlu.edu.vn/gioi-thieu/giai-doan-1965-1975-vuon-len-trong-14880" class="text-decoration-none">
                                <i class="bi bi-chevron-right"></i>
                                <em>Xem chi tiết</em>
                            </a>
                        </p>
                    </div>
                </div>

                <br><br>
                <hr style="border: none;border-top: 1px dashed #000;">

                <div style="display: flex" class="mt-5 mb-5">
                    <div>
                        <img style="width: 300px; height: 150px; margin-left: 250px" src="https://www.tlu.edu.vn/Portals/0/khoa14.jpg" alt="logo">
                    </div>
                    <div class="ms-4  mt-2 text-right">
                        <a href="" class="text-decoration-none" style="color: black; font-size: 20px;"><b>Giai đoạn 1959 – 1964: Sự ra đời của Nhà trường và những bước đi ban đầu</b></a>
                        <p>07/10/2021 09:22</p>
                        <p class="text-right mt-5">
                            <a href="https://www.tlu.edu.vn/gioi-thieu/giai-doan-1959-1964-su-ra-doi-cua-14879" class="text-decoration-none">
                                <i class="bi bi-chevron-right"></i>
                                <em>Xem chi tiết</em>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-4">
            <div class="row ">
                <div class="col-md-6 col-xxl-6">
                    <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Th%E1%BB%A7y+l%E1%BB%A3i/@21.0073466,105.8221555,17z/data=!3m1!4b1!4m6!3m5!1s0x3135ac8109765ba5:0xd84740ece05680ee!8m2!3d21.0073466!4d105.8247304!16s%2Fm%2F02r3ch_?hl=vi&entry=ttu">
                        <img src="../../public/assets/images/map.png" class="image-logo" alt="logo">
                    </a>
                </div>
                <div class="col-md-6 col-xxl-6" style="color: white; padding: 20px 0;">
                    <h5><b>TRƯỜNG ĐẠI HỌC THỦY LỢI</b></h5>
                    <p>Địa chỉ: 175 Tây Sơn, Quận Đống Đa, thành phố Hà Nội</p>
                    <p>Điện thoại: (024) 38522201 - Fax: (024) 35633351</p>
                    <p>Email: phonghcth@tlu.edu.vn</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>