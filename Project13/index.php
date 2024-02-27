<?php
    require_once './db.php';
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