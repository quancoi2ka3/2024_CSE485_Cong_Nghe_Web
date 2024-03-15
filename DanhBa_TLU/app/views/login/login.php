
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
    font-family: "Times New Roman", sans-serif;
    margin: 0;
    padding: 20px;
    background-image: url("https://reviewedu.net/wp-content/uploads/2021/11/thuy-loi.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.login-container {
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

.login-container h2 {
   text-align: center;
   color: #0e0d0d;
}

.form-group {
   margin-bottom: 20px;
}

.form-group label {
   display: block;
   margin-bottom: 5px;
   color: #0c00fd;
}

.form-group input[type="text"],
.form-group input[type="password"] {
   width: 100%;
   padding: 8px;
   border: 1px solid #ccc;
   border-radius: 3px;
}

.form-group input[type="submit"] {
   padding: 10px 160px;
   background-color: #EF3114;
   color: #fff;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   font-family: "Times New Roman", sans-serif;
   font-size: 20px;
   margin-right: 10px;
   margin-bottom: 5px;
}

.form-group input[type="submit"]:hover {
   background-color: #0e1b5b;
}
.form-group .forgot-password{
   display: block;
   width: 50%;
   text-align: center;
}

.form-group .forgot-password a
{
   color: #2240d3;
   text-decoration: none;
   display: block;
   text-align: left;
}

.form-group .create-account {
   text-align: center;
   margin-top: 20px;
}

.form-group .create-account a {
   color: #2240d3;
   text-decoration: none;
}

.header-image {
   display: block;
   width: 100%;
   height: auto;
   margin-bottom: 20px;
}
.form-group {
   display: flex;
   align-items: center;
}

.form-group label {
   flex: 0 0 100px;
   margin-right: 10px;
   color: #060606;
}

.form-group select {
   flex: 1;
   padding: 8px;
   border: 1px solid #444241;
   border-radius: 3px;
}
    </style>
</head>

<body>
    <div class="login-container">
        <img class="header-image" src="../../../public/assets/images/banner.png" alt="Banner Image">
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
                    <input style = "width: 88%" type="submit" value="Đăng nhập">
                    <div class="forgot-password">
                        <a href="forgot_password.php">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>

            <div class="form-group create-account">
                <p>Chưa có tài khoản? <a href="../singup/SignUp.php">Tạo tài khoản mới</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
