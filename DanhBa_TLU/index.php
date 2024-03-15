<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/assets/css/view.css">
    <link rel="stylesheet" href="public/assets/css/login.css">
    <title> Danh Bạ Điện Tử</title>
</head>
<body>
</body>
</html>
<?php
    include 'app/services/UserService.php';
    $db = new Database();
    $db->connect();
    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = '';
    }
    switch ($controller) {
        case 'user':
            require_once('app/controllers/UserController.php');
            break;
    }

?>
