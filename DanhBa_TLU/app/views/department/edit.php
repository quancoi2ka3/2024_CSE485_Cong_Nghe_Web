<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <form action="" method="post">
        <h1 class="text-center text-success ">Edit Department</h1><br>
        <?php
        // Kiểm tra xem session DepartmentbyID có tồn tại không
        if (isset($_SESSION['DepartmentbyID'])) {
            $department = $_SESSION['DepartmentbyID'];
        ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="DepartmentID" aria-label="DepartmentID" aria-describedby="basic-addon1" name="DepartmentID" value="<?= $department->getID() ?>">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="DepartmentName" aria-label="DepartmentName" aria-describedby="basic-addon1" name="DepartmentName" value="<?= $department->getName() ?>">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" name="Address" value="<?= $department->getAddress() ?>">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" name="Email" value="<?= $department->getEmail() ?>">

            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1" name="Phone" value="<?= $department->getPhone() ?>">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile02">Logo</label>
                <img id="previewLogo" src="<?= $department->getLogo() ?>" alt="Logo Department"><br>
                <input type="file" class="form-control" id="inputGroupFile02" name="Logo" onchange="previewImage(event)">
            </div>

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
                <input type="text" class="form-control" placeholder="Website" aria-label="Website" aria-describedby="basic-addon1" name="Website" value="<?= $department->getWebsite() ?>">
            </div>
            <?php if ($department->getParentID() !== null) : ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="ParentDepartmentID" aria-label="ParentDepartmentID" aria-describedby="basic-addon1" name="ParentDepartmentID" value="<?= $department->getParentID() ?>">
                </div>
            <?php endif; ?>


            <button type="submit" class="btn btn-primary" name="save_department">Save</button><br>
        <?php
        } else {
            // Xử lý khi không có dữ liệu phòng ban
            echo "Không có dữ liệu phòng ban để hiển thị";
        }
        ?>
        <?php
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