<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link rel="stylesheet" href="<?= APP_ROOT.'/public/css/style.css'?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= APP_ROOT.'/public/css/style.css' ?>">
</head>

<body>
    <form action="" method="post">
        <h1 class="text-center text-success ">Add New Department</h1><br>
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

        <label class="input-group-text" for="inputGroupFile02">Logo</label>
        <img id="previewLogo" src="" alt="Logo Department" class="img-fluid"><br>
        <input name="Logo" type="file" class="form-control" id="inputGroupFile02" onchange="previewImage(event)"><br>


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
            <input type="text" class="form-control" placeholder="Website" aria-label="Website" aria-describedby="basic-addon1" name="Website">
        </div>
        <div class="input-group mb-3">
            <input type="number" class="form-control" placeholder="ParentDepartmentID" aria-label="ParentDepartmentID" aria-describedby="basic-addon1" name="ParentDepartmentID">
        </div>


        <button type="submit" class="btn btn-primary" name="add_department">Add</button><br>
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