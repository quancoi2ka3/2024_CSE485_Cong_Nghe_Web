<?php
require_once __DIR__ . '/../../models/Department.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin phòng ban</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/../../../public/assets/css/form_employee.ss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="" method="post">
            <h1 class="text-center">Chi tiết phòng ban</h1>
            <?php
            require_once('../../models/Department.php');
            if (isset($_GET['id'])) {
                $DepartmentID = $_GET['id'];
                $department = getDepartmentById($DepartmentID);
            }
            ?>
            <label for="validationCustom01" class="form-label">Department ID</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $department['DepartmentID']?> >
            <label for="validationCustom01" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $department['DepartmentName']?> >
            <label for="validationCustom01" class="form-label">Address</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $department['Address']?> >
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $department['Email']?> >
            <label for="validationCustom01" class="form-label">Phone</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $department['Phone']?> >
            <label for="validationCustom01" class="form-label">Logo</label><br>
            <img src="<?php echo $department['Logo']?>" alt="Logo Department"><br>
            <label for="validationCustom01" class="form-label">Website</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $department['Website']?> >
            <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>

        </form>
    </div>

</body>

</html>