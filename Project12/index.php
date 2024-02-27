<?php
    require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Navigation</title>
    <!-- Thêm link để sử dụng Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/menu.css">
</head>
<body>
<nav>
    <i class="fas fa-home home-icon"></i>
    <ul>
        <?php
        foreach ($navItems as $item) {
            echo "<li><a href='#'>$item</a></li>";
        }
        ?>
    </ul>
</nav>
</body>
</html>
