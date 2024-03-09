<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo tài khoản</title>
    <link rel="stylesheet" href="../../../public/assets/css/singup.css">
</head>


    <body>
    <div class="signup-container">
        <img class="header-image" src="../../../public/assets/images/baner.png" alt="Banner Image">

            <h2>Tạo tài khoản cá nhân</h2>
            <form action="Signup_Process.php" method="post">
                <div class="form-group">
                    <label for="avatar">Ảnh đại diện:</label>
                    <input type="file" name="Avatar" id="avatar">
                </div>
                <div class="form-group">
                    <label for="full-name">Tên:</label>
                    <input type="text" name="FullName" id="full-name" required>
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" name="Address" id="address" required>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Số điện thoại:</label>
                    <input type="phonenumber" name="MobilePhone" id="phonenumber" required>
                </div>

                <div class="form-group">
                    <label for="position">Chức vụ:</label>
                    <select name="Position" id="position">
                        <option value="hr">Hiệu trưởng</option>
                        <option value="finance">Thạc sĩ</option>
                        <option value="it">Tiến sĩ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="Email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="role">Tên đăng nhập:</label>
                    <input type="text" name="Username" id="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" name="Password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Xác nhận mật khẩu:</label>
                    <input type="password" name="Re_Pass" id="confirm-password" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Tạo tài khoản">
                </div>
                <?php if (isset($_GET['msg'])) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_GET['msg'] ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </body>

</html>