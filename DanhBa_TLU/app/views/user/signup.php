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
    <?php
            if(isset($success) && in_array('add_success', $success)){
                echo '<div class="alert alert-success text-center" role="alert">Đăng ký thành công!</div>';
            }
            elseif(isset($success) && in_array('add_fail', $success)){
                echo '<div class="alert alert-danger text-center" role="alert">Đăng ký thất bại</div>';
            }
            
        ?>
    <div class="signup-container">
        <img class="header-image" src="../../../public/assets/images/banner.png" alt="Banner Image">

            <h2>Tạo tài khoản cá nhân</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="avatar">Ảnh đại diện:</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <div class="form-group">
                    <label for="full-name">Tên:</label>
                    <input type="text" name="fullname" id="fullname" required>
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Số điện thoại:</label>
                    <input type="phonenumber" name="mobilephone" id="phonenumber" required>
                </div>

                <div class="form-group">
                    <label for="position">Chức vụ:</label>
                    <select name="position" id="position">
                        <option value="hr">Hiệu trưởng</option>
                        <option value="finance">Thạc sĩ</option>
                        <option value="it">Tiến sĩ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="role">Vị trí:</label>
                    <select name="role" id="role">
                        <option value="hr">admin</option>
                        <option value="finance">regular</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="employeeid">Mã nhân viên:</label>
                    <input type="employeeid" name="employeeid" id="employeeid" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="role">Tên đăng nhập:</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <input type="submit" name="signup" value="Tạo tài khoản">
                    
                </div>
                
            </form>
        </div>
    </body>

</html>