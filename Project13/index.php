<!DOCTYPE html>
<html lang="en">

<head>
   <title>project13</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Danh sách khóa học</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="/Project13/assets/css/css.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>

<body>
   <nav class="navbar">
      <h2 id="head">KHÓA HỌC SẮP KHAI GIẢNG</h2>
   </nav>
   <div class="container-fluid">
      <?php
    $courses = [[
        'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project13/assets/image/download.png','title' => 'Lập trình viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'],
        [ 'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project13/assets/image/download.png','title' => 'Lập trình web full stack',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        [ 'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project13/assets/image/download.png','title' => 'Lập trình java full stack',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        [ 'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project13/assets/image/download.png','title' => 'Lập trình PHP & LARAVEL',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        [ 'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project13/assets/image/download.png','title' => 'KHOÁ HỌC LẬP TRÌNH  .NET',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'],
        [ 'image_url'=>'.vscode/php/2024_CSE485_Cong_Nghe_Web/project13/assets/image/download.png','title' => 'LẬP TRÌNH SQL SERVER',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm']
    ];
    
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<img src="' . $course['image_url'] . '" alt="' . $course['title'] . '">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p><i class="fa-solid fa-gift" style="color: #c72929;"></i></i>Học phí: ' . $course['fee'] . '</p>';
        echo '<p><i class="fa-solid fa-clock" style="color: #c72929;"></i>Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p><i class="fa-solid fa-tag" style="color: #b81e1e;"></i>Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>'; }
    ?>

   </div>
</body>

</html>