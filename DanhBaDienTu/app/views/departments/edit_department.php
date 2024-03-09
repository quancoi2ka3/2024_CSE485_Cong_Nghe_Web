<?php
require_once __DIR__ . '/../../models/Department.php';
?>
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
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="Edit_Department_Process.php" method="post">
            <h1 class="text-center">Sửa phòng ban</h1>
            <?php
            require_once('../../models/Department.php');
            if (isset($_GET['id'])) {
                $DepartmentID = $_GET['id'];
                $department = getDepartmentById($DepartmentID);
            }
            ?>
            <label for="validationCustom01" class="form-label">Department ID</label>
            <input type="text" class="form-control" name="DepartmentID" value=<?php echo $department['DepartmentID'] ?>>

            <label for="validationCustom01" class="form-label">Department Name</label>
            <input type="text" class="form-control" name="DepartmentName" value=<?php echo $department['DepartmentName'] ?>>
            <label for="validationCustom01" class="form-label">Address</label>
            <input type="text" class="form-control" name="Address" value=<?php echo $department['Address'] ?>>
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" class="form-control" name="Email" value=<?php echo $department['Email'] ?>>
            <label for="validationCustom01" class="form-label">Phone</label>
            <input type="text" class="form-control" name="Phone" value=<?php echo $department['Phone'] ?>>
            <label for="validationCustom01" class="form-label">Logo</label>
            <input type="text" class="form-control" name="Logo" value=<?php echo $department['Logo'] ?>>
            <label for="validationCustom01" class="form-label">Website</label>
            <input type="text" class="form-control" name="Website" value=<?php echo $department['Website'] ?>>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>
            <?php if (isset($_GET['msg'])) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['msg'] ?>
                </div>
            <?php endif; ?>


        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>