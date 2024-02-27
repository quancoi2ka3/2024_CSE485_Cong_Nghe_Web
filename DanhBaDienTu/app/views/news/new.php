<?php
   require_once '../models/News.php'; 
    $news = getAllNews();
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
<div class="paper">
    <div class="alert" role="alert">
        <div class="alert-heading text-center">
            <h5>THÔNG BÁO</h5>
        </div>
        <div id="notificationContainer">
            <?php foreach($news as $new): ?>
            <marquee behavior="scroll" direction="up" scrollamount="2" height="150">
                <a href="<?php echo $new['URL_Image'];?>" class="text-decoration-none text-right"><i class="bi bi-megaphone text-danger"></i> &nbsp; <?php echo $new['Title'];?></a> <br>
                <a href="<?php echo $new['URL_Image'];?>" class="text-decoration-none text-right"><?php echo $new['Content'];?></a><br>
                <a href="<?php echo $new['URL_Image'];?>" class="text-decoration-none text-right"><?php echo $new['Public_Date'];?></a>
                <hr>
                </marquee>
            <?php endforeach; ?>
        </div>
    </div>
    <script>                  
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
                <a href="https://www.tlu.edu.vn/tin-tuc/le-trao-quyet-dinh-thanh-lap-vien-26144" class="text-decoration-none text-right"><i class="bi bi-book-half text-danger"></i> &nbsp; Lễ trao quyết định thành lập Viện Nghiên cứu ứng dụng công nghệ và hợp tác Doanh nghiệp</a>
                <hr>
                <a href="https://www.tlu.edu.vn/tin-tuc/loi-khang-dinh-dang-cap-cua-duong-kim-a-26140" class="text-decoration-none text-right"><i class="bi bi-book-half text-danger"></i> &nbsp; Lời khẳng định đẳng cấp của đương kim á quân Trường ĐH Thủy lợi</a>
                <hr>
                <a href="https://www.tlu.edu.vn/tin-tuc/chien-thang-qua-man-nhan-cua-truong-dh-26139" class="text-decoration-none text-right"><i class="bi bi-book-half text-danger"></i> &nbsp; Chiến thắng quá mãn nhãn của Trường ĐH Thủy lợi</a>
                <hr>
                <a href="https://www.tlu.edu.vn/tin-tuc/le-ky-ket-thoa-thuan-hop-tac-giua-26133" class="text-decoration-none text-right"><i class="bi bi-book-half text-danger"></i> &nbsp; Lễ ký kết thỏa thuận hợp tác giữa Trường Đại học Thủy lợi và Tập đoàn Alibaba Cloud và Hội thảo “Cơ hội nghề nghiệp trong thị trường Cloud”</a>
                <hr>
                <a href="https://www.tlu.edu.vn/tin-tuc/ncs-le-ngoc-vien-bao-ve-luan-an-tien-si-26132" class="text-decoration-none text-right"><i class="bi bi-book-half text-danger"></i> &nbsp; NCS Lê Ngọc Viên bảo vệ luận án tiến sĩ cấp Trường</a>
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
</body>
</html>