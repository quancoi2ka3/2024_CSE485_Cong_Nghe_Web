<!DOCTYPE html>
<html>
<head>
    <title>Website Tra cứu Danh bạ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>  
<div class="container-fluid">
        <header>
            <div>
                <img class="image" src="../../public/assets/images/banner.png" class="img-fluid" alt="banner">
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
                                        <a class="dropdown-item" href="#">Chức năng chính</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="#">Thống kê danh bạ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="../phonebook.php">Danh bạ nổi bật</a>
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
                <div class="row">
                    <div class="col-md-9">
                        <div>
                            <br>
                            <!-- <h3>DANH BẠ ĐIỆN TỬ</h3> -->
                            <div class="row">
                                <div class="col-md-2">
                                    <select onchange="" id="search" class="form-select">
                                        <option selected value="0">Tên</option>
                                        <option value="1">Chức vụ</option>
                                        <option value="2">Số điện thoại</option>
                                        <option value="2">Email</option>
                                    </select>
                                </div>
                                <div class="col-md-7 ms-4">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md ms-2">
                                    <a href="search.php" class="btn btn-danger"> <i class="bi bi-search"></i> &nbsp Tìm kiếm nâng cao</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 info">
                            <h2>LIÊN HỆ</h2>
                                <br>
                                <p><b>Danh bạ điện tử trường Đại học Thủy Lợi</b></p>
                                <br>
                                <p>Địa chỉ: Số 175 Tây sơn - Đống Đa – Hà Nội</p>
                                <br>
                                <p>Điện thoại: (024) 3852 2201</p>
                                <br>
                                <p>Fax: (024) 3563 3351</p>
                                <br>
                                <p>Email: <a href="">phonghcth@tlu.edu.vn</a></p>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="paper">
                                <div class="alert" role="alert">
                                    <div class="alert-heading text-center">
                                        <h5>THÔNG BÁO</h5>
                                    </div>
                                    <div id="notificationContainer">
                                        <marquee behavior="scroll" direction="up" scrollamount="2" height="150">
                                            <a href="#" class="text-decoration-none text-right">Trung tâm Nghiên cứu, ứng dụng và dịch vụ khoa học công nghệ tỉnh Kon Tum hỗ trợ tư vấn đăng ký chứng nhân VietGAP lĩnh vực Trồng trọt</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Thông báo về việc quy định mức thu lệ phí cấp mới, cấp lại, cấp đổi giấy phép lái xe (quốc gia và quốc tế)</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Lịch tiếp công dân định kỳ của Chủ tịch UBND tỉnh tại Trụ sở Tiếp công dân tỉnh, năm 2024</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Thông báo về tiếp nhận hồ sơ đăng ký dự thi tiếng Hàn theo Chương trình EPS năm 2024</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Triệu tập thí sinh đủ điều kiện dự thi vòng 2 kỳ tuyển dụng công chức năm 2023</a>
                                        </marquee>
                                    </div>
                                </div>
                                <script>
                                    // Automatically scroll the notifications
                                    setInterval(function() {
                                    var notificationContainer = document.getElementById("notificationContainer");
                                    notificationContainer.scrollTop += 1;
                                    }, 50);
                                 </script>
                                <div class="alert" role="alert">
                                    <div class="alert-heading text-center">
                                        <h5>VĂN BẢN MỚI</h5>
                                    </div>
                                    <div id="notificationContainer">
                                        <marquee behavior="scroll" direction="up" scrollamount="2" height="150">
                                            <a href="#" class="text-decoration-none text-right">Trung tâm Nghiên cứu, ứng dụng và dịch vụ khoa học công nghệ tỉnh Kon Tum hỗ trợ tư vấn đăng ký chứng nhân VietGAP lĩnh vực Trồng trọt</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Thông báo về việc quy định mức thu lệ phí cấp mới, cấp lại, cấp đổi giấy phép lái xe (quốc gia và quốc tế)</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Lịch tiếp công dân định kỳ của Chủ tịch UBND tỉnh tại Trụ sở Tiếp công dân tỉnh, năm 2024</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Thông báo về tiếp nhận hồ sơ đăng ký dự thi tiếng Hàn theo Chương trình EPS năm 2024</a>
                                            <hr>
                                            <a href="#" class="text-decoration-none text-right">Triệu tập thí sinh đủ điều kiện dự thi vòng 2 kỳ tuyển dụng công chức năm 2023</a>
                                        </marquee>
                                    </div>
                                </div>
                                <div class="alert" role="alert">
                                    <div class="alert-heading text-center">
                                        <h5>DANH BẠ ĐIỆN TỬ KHÁC</h5>
                                    </div>
                                    <div>
                                        <a href="https://bacgiang.gov.vn/danh-ba-dien-tu" class="text-decoration-none">
                                            <p class="text-center">
                                            <img src="../../public/assets/images/bacgiang.png" class="logo-tinh" alt="logo">
                                                Cổng thông tin điện tử Bắc Giang
                                            </p>
                                        </a>
                                        <hr>
                                        <a href="https://www.nghean.gov.vn/danh-ba-dien-thoai" class="text-decoration-none">
                                            <p class="text-center">
                                                <img src="../../public/assets/images/nghean.png" class="logo-tinh" alt="logo">
                                                Cổng thông tin điện tử Nghệ An &nbsp
                                            </p>
                                        </a>
                                        <hr>
                                        <a href="https://sonla.gov.vn/danh-ba-dien-tu" class="text-decoration-none">
                                            <p class="text-center">
                                                <img src="../../public/assets/images/sonla.png" class="logo-tinh" alt="logo">
                                                 Cổng thông tin điện tử Sơn La &nbsp&nbsp&nbsp&nbsp&nbsp
                                            </p>
                                        </a>
                                        <hr>
                                        <a href="https://namtuliem.hanoi.gov.vn/danh-ba-dien-tu" class="text-decoration-none">
                                            <p class="text-center">
                                                <img src="../../public/assets/images/namtuliem.jpg" class="logo-tinh" alt="logo">
                                                Cổng thông tin điện tử quận Nam Từ Liêm
                                            </p>
                                        </a>
                                    </div>
                                </div>
                        </div>
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