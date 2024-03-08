<?php
require_once __DIR__ . '/../../models/Department.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <form action="" method="post">
        <h1 class="text-center">Thêm phòng ban</h1>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="DepartmentID" aria-label="DepartmentID" aria-describedby="basic-addon1" name="DepartmentID">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="DepartmentName" aria-label="DepartmentName" aria-describedby="basic-addon1" name="DepartmentName">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" name="Address">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" name="Email">

        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1" name="Phone">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">Logo</label>
            <input type="file" class="form-control" id="inputGroupFile02" name="Logo">

        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Website" aria-label="Website" aria-describedby="basic-addon1" name="Website">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>

    </form>
    <?php
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
                if (addDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website)) {
                    echo "<p style='color: green'>Thêm phòng ban thành công!</p>";
                } else {
                    echo 'Thêm phòng ban thất bại';
                }
            }
        }
    } catch (PDOException $e) {
        echo "<p style='color: red'>Lỗi : " . $e->getMessage() . "</p>";
    }


    ?>

</body>

</html>