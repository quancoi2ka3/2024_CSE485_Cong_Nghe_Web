<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo tài khoản</title>
    <style>
        body {
    font-family: "Times New Roman", sans-serif;
    margin: 0;
    padding: 20px;
    background-image: url("https://reviewedu.net/wp-content/uploads/2021/11/thuy-loi.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}

/* Container Styles */
.signup-container {
    max-width: 400px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    bottom: 0;
    right: 0;
    opacity: 0.8;
}

/* Header Image Styles */
.header-image {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

/* Form Styles */
.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size:14px;
}

.gender-group {
    display: inline-flex;
    align-items: center;
    margin-bottom: 5px;
}

input[type="radio"],
input[type="file"] {
    margin-right: 5px;
}

/* Submit Button Styles */
input[type="submit"] {
    padding: 10px 20px;
    background-color: #ef3114;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>


    <body>
    <div class="signup-container">
        <img class="header-image" src="../../../public/assets/images/banner.png" alt="Banner Image">

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
                        <a href="../login/login.php">Quay về trang đăng nhập</a>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </body>

</html>