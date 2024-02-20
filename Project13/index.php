<!DOCTYPE html>
<html lang="en">
<head>
    <title>Khóa học</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách khóa học</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/phpdemo/Project13/assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar"><h2 id="head">KHÓA HỌC SẮP KHAI GIẢNG</h2></nav>
<div class="container">
    <?php
    $courses = [['title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'],
        ['title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        ['title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        ['title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        ['title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        ['title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm']
    ];
    $images =[];
    foreach ($courses as $course) {
        echo '<div class="course">';

        echo'<img src="https://aptech.vn/wp-content/uploads/2023/10/banner-web.png.webp">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p><i class="fa-solid fa-gift"></i> Học phí: '. $course['fee'] . '</p>';
        echo '<p><i class="fa-solid fa-clock"></i> Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p><i class="fa-solid fa-bookmark"></i> Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>'; }
    ?>

</div>
</body>
</html>