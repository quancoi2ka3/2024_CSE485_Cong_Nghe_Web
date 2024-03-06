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
                <h3>CHỨC NĂNG CHÍNH CỦA WEBSITE</h3>
                <div style="display: flex; padding: 0 150px" class="mt-4 mb-5">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Chức năng</th>
                            <th>Mô tả</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lưu trữ thông tin liên lạc</td>
                            <td>Danh bạ điện tử cho phép người dùng lưu trữ các thông tin liên lạc cơ bản của mọi người như tên, chức vụ, số điện thoại, địa chỉ email, địa chỉ nhà và thông tin liên lạc khác.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Quản lý danh sách liên lạc</td>
                            <td>Người dùng có thể tổ chức và quản lý danh sách liên lạc của họ theo nhiều cách khác nhau, bao gồm sắp xếp theo tên, nhóm, hoặc tự do tạo nhãn để dễ dàng tìm kiếm và truy cập thông tin.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tìm kiếm nhanh chóng</td>
                            <td>Danh bạ điện tử cung cấp chức năng tìm kiếm giúp người dùng nhanh chóng tìm kiếm và truy cập thông tin liên lạc của mọi người trong danh sách liên lạc của họ.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Chia sẻ thông tin liên lạc</td>
                            <td>Người dùng có thể chia sẻ thông tin liên lạc với người khác từ danh bạ điện tử của họ, giúp dễ dàng giao tiếp và kết nối với bạn bè, đồng nghiệp, và đối tác kinh doanh.</td>
                        </tr>
                        </tbody>
                    </table>
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