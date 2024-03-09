<?php

require_once __DIR__ . '/../../models/User.php';
try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];

        // Kiểm tra dữ liệu đầu vào
        $Username = trim($_POST['Username']);
        if (empty($Username)) {
            $errors[] = 'Tên đăng nhập không được để trống';
        }

        $Password = trim($_POST['Password']);
        if (empty($Password)) {
            $errors[] = 'Mật khẩu không được để trống';
        }

        $Role = trim($_POST['Role']);
        if (empty($Role)) {
            $errors[] = 'Vai trò không được để trống';
        }



        // Xử lý lỗi

        if (!empty($errors)) {
            echo "<p style='color: red'>Thêm phòng ban thất bại vì các lỗi sau :</p>";
            foreach ($errors as $error) {
                echo "<p style='color: red'>$error</p>";
            }
        } else {
            // Kiểm tra kết quả
            if (AddUser($Username, $Password, $Role)) {
                header("Location:index.php?msg=Thêm mới thành công");
            } else {
                header("Location:Add_User.php?msg=Thêm mới thất bại");
            }
        }
    }
} catch (PDOException $e) {
    echo "<p style='color: red'>Lỗi : " . $e->getMessage() . "</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Process</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <a href="index.php" class="btn btn-primary">Quay lại</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>