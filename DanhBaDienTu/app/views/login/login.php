<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../../public/assets/css/login.css">
</head>

<body>
<div class="login-container">
    <img class="header-image" src="../../../public/assets/images/baner.png" alt="Banner Image">
    <h2>Vui lòng đăng nhập thông tin!</h2>
    <form>
        <div class="form-group">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="role">Vai trò:</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">Người dùng</option>
                <option value="guest">Khách</option>
            </select>
        </div>

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
</body>

</html>