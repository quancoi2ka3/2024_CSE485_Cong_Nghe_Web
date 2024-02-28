<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
    ];
    echo '<nav class="navbar" >
    <ul><a href="index.php" style ="color : white;text-decoration: none"><i class="fas fa-home home-icon"></i></a>';
    foreach ($navItems as $item) {
        echo "<li class='nav-item' ><a href='#' style ='color : white;text-decoration: none'>$item</a></li>";
    }
    
    

    echo '</ul></nav>';
    ?>


</body>

</html>