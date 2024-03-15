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
            if (isset($_SESSION['ViewDepartmentbyID'])) {
                $department = $_SESSION['ViewDepartmentbyID'];
            ?>
                <label for="validationCustom01" class="form-label">Department ID</label>
                <input type="text" class="form-control" id="validationCustom01" value="<?= $department->getID() ?>" readonly>

                <label for="validationCustom02" class="form-label">Department Name</label>
                <input type="text" class="form-control" id="validationCustom02" value="<?= $department->getName() ?>" readonly>

                <label for="validationCustom03" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationCustom03" value="<?= $department->getAddress() ?>" readonly>

                <label for="validationCustom04" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationCustom04" value="<?= $department->getEmail() ?>" readonly>

                <label for="validationCustom05" class="form-label">Phone</label>
                <input type="text" class="form-control" id="validationCustom05" value="<?= $department->getPhone() ?>" readonly>

                <label for="validationCustom06" class="form-label">Logo</label><br>
                <img src="<?= $department->getLogo() ?>" alt="Logo Department"><br>

                <label for="validationCustom07" class="form-label">Website</label>
                <input type="text" class="form-control" id="validationCustom07" value="<?= $department->getWebsite() ?>" readonly>

                <label for="validationCustom07" class="form-label">ParentDepartmentID</label>
                <input type="text" class="form-control" id="validationCustom07" value="<?= $department->getParentID() ?>" readonly>

                <a href="<?=DOMAIN.'/public/?controller=department'?>" class="btn btn-primary"><i class="fa-solid fa-house"></i> Quay lại</a>
            <?php
            } else {
                // Xử lý khi không có dữ liệu phòng ban
                echo "Không có dữ liệu phòng ban để hiển thị";
            }
            ?>
        </form>
    </div>


</body>

</html>