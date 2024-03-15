<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <img class="header-image" src="D:/Anh/MON_HOC/Cong_nghe_web/danh_ba/2024_CSE485_Cong_Nghe_Web/DanhBa_TLU/public/assets/images/banner (1).png" alt="BannerImage">
        <h2>Vui lòng đăng nhập thông tin!</h2>
        <form method="POST" action="">
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
                    <input style="width: 87%;" type="submit" value="Đăng nhập">
                    <div class="forgot-password">
                        <a href="forgot_password.php">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>

            <div class="form-group create-account">
                <p>Chưa có tài khoản? <a href="">Tạo tài khoản mới</a></p>
            </div>
        </form>
    </div>
</body>

</html>