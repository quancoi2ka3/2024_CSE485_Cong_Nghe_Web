<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infor </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= APP_ROOT.'/public/css/style.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="" method="post">
            <h1 class="text-center">Deital </h1>
            <?php
            // Kiểm tra xem session DepartmentbyID có tồn tại không
            if (isset($_SESSION['ViewUserbyID'])) {
                $user = $_SESSION['ViewUserbyID'];
            ?>
                <label for="validationCustom01" class="form-label">Username</label>
                <input type="text" class="form-control" id="validationCustom01" value="<?= $user->getUsername() ?>" readonly>

                <label for="validationCustom02" class="form-label">Password</label>
                <input type="text" class="form-control" id="validationCustom02" value="<?= $user->getPassword() ?>" readonly>

                <label for="validationCustom03" class="form-label">Role</label>
                <input type="text" class="form-control" id="validationCustom03" value="<?= $user->getRole() ?>" readonly>

                <label for="validationCustom04" class="form-label">EmployeeID</label>
                <input type="text" class="form-control" id="validationCustom04" value="<?= $user->getEmployeeID() ?>" readonly>


                <a href="<?=DOMAIN.'/public/?controller=department'?>" class="btn btn-primary"><i class="fa-solid fa-house"></i> Quay lại</a>
            <?php
            } else {
                // Xử lý khi không có dữ liệu phòng ban
                echo "Không có dữ liệu để hiển thị";
            }
            ?>
        </form>
    </div>


</body>

</html>