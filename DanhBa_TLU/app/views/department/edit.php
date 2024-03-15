<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= APP_ROOT . '/public/css/style.css' ?>">
</head>

<body>
    <form action="" method="post">
        <h1 class="text-center text-success ">Edit Department</h1><br>
        <?php
        // Kiểm tra xem session DepartmentbyID có tồn tại không
        if (isset($_SESSION['ViewDepartmentbyID'])) {
            $department = $_SESSION['ViewDepartmentbyID'];
        ?>
            <div class="input-group mb-3">
                <label for="DepartmentID" class="form-label">Department ID</label>
                <input type="text" class="form-control" placeholder="DepartmentID" aria-label="DepartmentID" aria-describedby="basic-addon1" name="DepartmentID" value="<?= $department->getID() ?>">
            </div>
            <div class="input-group mb-3">
                <label for="DepartmentName" class="form-label">Department Name</label>
                <input type="text" class="form-control" placeholder="DepartmentName" aria-label="DepartmentName" aria-describedby="basic-addon1" name="DepartmentName" value="<?= $department->getName() ?>">
            </div>
            <div class="input-group mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" name="Address" value="<?= $department->getAddress() ?>">
            </div>

            <div class="input-group mb-3">
                <label for="Email" class="form-label">Email</label><br>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" name="Email" value="<?= $department->getEmail() ?>">

            </div>
            <div class="input-group mb-3">
                <label for="Phone" class="form-label">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1" name="Phone" value="<?= $department->getPhone() ?>">
            </div>
            <div class="input-group mb-3" name="Logo">
                <label class="input-group-text" for="inputGroupFile02">Logo</label>
                <img id="previewLogo" src="<?= $department->getLogo() ?>" alt="Logo Department"><br>

                <input name="Logo" type="file" class="form-control" id="inputGroupFile02" onchange="previewImage(event)">
            </div>
            <?php if (isset($_POST['Logo'])) {
                $logo = $_POST['Logo'];
            ?><img id="previewLogo" src="<?= $department->setLogo($logo) ?>" alt="Logo Department"><br><?php
                                                                                                    }

                                                                                                        ?>
            <script>
                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        var output = document.getElementById('previewLogo');
                        output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                };
            </script>


            <div class="input-group mb-3">
                <label for="Website" class="form-label">Website</label>
                <input type="text" class="form-control" placeholder="Website" aria-label="Website" aria-describedby="basic-addon1" name="Website" value="<?= $department->getWebsite() ?>">
            </div>

            <div class="mb-3">
                <label for="department_id" class="form-label">ParentDepartment ID</label>
                <input type="number" name="ParentDepartmentID" value="<?= $department->getParentID() ?>">



                <div class="d-flex " style="justify-content:space-around ">
                    <button type="submit" class="btn btn-primary" name="save_department">Save</button><br>
                    <a href="<?= DOMAIN . '/public/?controller=department' ?>" class="btn btn-primary"><i class="fa-solid fa-house"></i> Quay lại</a>
                </div>
            <?php
        } else {
            // Xử lý khi không có dữ liệu phòng ban
            echo "Không có dữ liệu phòng ban để hiển thị";
        }
            ?>
            <?php

            // Kiểm tra và hiển thị thông điệp lỗi nếu có
            if (isset($_SESSION['edit_success'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['edit_success'] . '</div>';
                unset($_SESSION['edit_success']); // Xóa thông điệp lỗi sau khi đã hiển thị
            }

            // Kiểm tra và hiển thị thông điệp lỗi nếu có
            if (isset($_SESSION['error_msg'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_msg'] . '</div>';
                unset($_SESSION['error_msg']); // Xóa thông điệp lỗi sau khi đã hiển thị
            }
            ?>

    </form><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>