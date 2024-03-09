<?php

require_once __DIR__ . '/../../models/Department.php';
try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];

        // Kiểm tra dữ liệu đầu vào
        $DepartmentID = trim($_POST['DepartmentID']);
        if (empty($DepartmentID)) {
            $errors[] = 'Mã phòng ban không được để trống';
        }

        $DepartmentName = trim($_POST['DepartmentName']);
        if (empty($DepartmentName)) {
            $errors[] = 'Tên phòng ban không được để trống';
        }

        $Address = trim($_POST['Address']);
        if (empty($Address)) {
            $errors[] = 'Địa chỉ không được để trống';
        }

        $Email = trim($_POST['Email']);
        if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email không hợp lệ';
        }

        $Phone = trim($_POST['Phone']);
        if (empty($Phone) || !preg_match('/^\d+$/', $Phone)) {
            $errors[] = 'Số điện thoại không hợp lệ';
        }
        $Logo = null;
        if (isset($_FILES['Logo']) && !empty($_FILES['Logo']['name'])) {
            $allowedExtensions = ['jpg', 'png', 'gif'];
            $extension = pathinfo($_FILES['Logo']['name'], PATHINFO_EXTENSION);
            if (!in_array($extension, $allowedExtensions)) {
                $errors[] = 'Định dạng file logo không hợp lệ';
            } else {
                $targetDir = 'uploads/'; // Update with your upload directory
                $fileName = uniqid() . '.' . $extension;
                $targetFile = $targetDir . $fileName;
                if (move_uploaded_file($_FILES['Logo']['tmp_name'], $targetFile)) {
                    $Logo = $targetFile;
                } else {
                    $errors[] = 'Lỗi upload file logo';
                }
            }
        }
        $Website = trim($_POST['Address']);
        if (empty($Website)) {
            $errors[] = 'Website không được để trống';
        }
        // Xử lý lỗi

        if (!empty($errors)) {
            echo "<p style='color: red'>Thêm phòng ban thất bại vì các lỗi sau :</p>";
            foreach ($errors as $error) {
                echo "<p style='color: red'>$error</p>";
            }
        } else {
            // Kiểm tra kết quả
            if (UpdateDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website)) {
                header("Location:index.php?msg=Sửa thành công");
            } else {
                header("Location:Edit_Department.php?msg=Sửa thất bại");
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
    <title>Edit Process</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="index.php" class="btn btn-primary">Quay lại</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>