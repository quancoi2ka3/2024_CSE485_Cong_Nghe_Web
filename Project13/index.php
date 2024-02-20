<?php
$courses = [
[
    'image' => 'https://aptech.vn/wp-content/uploads/2023/10/banner-web.png',
    'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
    'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
    'free' => 'Học bổng 15.000.000 VNĐ',
    'start_date' => '2/2024',
    'duration' => '2 - 2.5 năm',
],

[
    'image' => 'https://niithanoi.edu.vn/pic/News/tai-sao-nen-hoc-lap-trinh-full-stack.jpg',
    'title' => 'LẬP TRÌNH WEB FULLSTACK',
    'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
    'free' => 'Ưu đãi giảm 15% học phí',
    'start_date' => '2/2024',
    'duration' => '6 tháng',
],
[
    'image' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-java.png',
    'title' => 'LẬP TRÌNH JAVA FULLSTACK',
    'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Serviet, JSP, Spring Framework, EJB,...',
    'free' => 'Ưu đãi giảm 15% học phí',    
    'start_date' => '2/2024',
    'duration' => '236 giờ',
],
[
    'image' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-php.png',
    'title' => 'LẬP TRÌNH PHP & LARAVEL',
    'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP và Laravel.',
    'free' => 'Học phí 9.600.000 VNĐ',
    'start_date' => '5/2/2024',
    'duration' => '36 giờ',
],
[
    'image' => 'https://aptech.vn/wp-content/uploads/2020/03/Banner_laptrinh.net_-01.png',
    'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
    'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
    'free' => 'Học phí 6.000.000 VNĐ',
    'start_date' => '2/2024',
    'duration' => '40 giờ',
],
[
    'image' => 'https://aptech.vn/wp-content/uploads/2021/06/lap-trinh-csdl-voi-sql.png.webp',
    'title' => 'LẬP TRÌNH SQL SERVER',
    'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
    'free' => '4.500.000 VNĐ',
    'start_date' => '2/2024',
    'duration' => '30 giờ',
],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h4>KHÓA HỌC SẮP KHAI GIẢNG</h4>
       <?php
            $count = 0;
            foreach($courses as $course) {
                if($count % 3 == 0) {
                    echo '<div class="row justify-content-between">';
                }
                
                echo '<div class="course col-md-4">';
                echo '<img src="'. $course['image'] .'" alt="" class="course-image">';
                echo '<h5>'. $course['title'] .'</h5>';
                echo '<p>'. $course['description'] .'</p>';
                echo '<p><i class="fas fa-gift"></i> ' . $course['free'] . '</p>';
                echo '<p><i class="far fa-clock"></i> Khai giảng: '. $course['start_date'] .'</p>';  
                echo '<p><i class="fas fa-hourglass-half"></i> Thời lượng: '. $course['duration'] .'</p>';
                echo '</div>';
                
                if($count % 3 == 2) {
                    echo '</div>';
                }
                
                $count++;
            }    
       ?>
    </div>

</body>
</html>