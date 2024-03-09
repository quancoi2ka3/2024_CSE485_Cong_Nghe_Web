<?php
require_once __DIR__ . '/../../models/User.php';
$users = getUsers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../../public/assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="login-container">
        <img class="header-image" src="../../../public/assets/images/baner.png" alt="Banner Image">
        <h2>Vui lòng đăng nhập thông tin!</h2>


        <form method="POST" action="../../proccess_login.php">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <?php if (isset($_GET['msg'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['msg'] ?>
                </div>
            <?php endif ?>


            <div class="form-group">
                <div class="submit-container">
                    <input type="submit" value="Đăng nhập">
                    <div class="forgot-password">
                        <a href="forgot-password.php">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>

            <div class="form-group create-account">
                <p>Chưa có tài khoản? <a href="../singup/singup.php">Tạo tài khoản mới</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>