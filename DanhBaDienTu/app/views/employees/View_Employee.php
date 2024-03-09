<?php
require_once __DIR__ . '/../../models/Department.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/../../../public/assets/css/form_employee.ss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="" method="post">
            <h1 class="text-center">Chi tiết nhân viên</h1>
            <?php
            require_once('../../models/Employee.php');
            if (isset($_GET['id'])) {
                $EmployeeID = $_GET['id'];
                $employee = getEmployeeById($EmployeeID);
            }
            ?>
            <label for="validationCustom01" class="form-label">Employee ID</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $employee['DepartmentID']?> >
            <label for="validationCustom01" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $employee['FullName']?> >
            <label for="validationCustom01" class="form-label">Address</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $employee['Address']?> >
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $employee['Email']?> >
            <label for="validationCustom01" class="form-label">Mobile Phone</label>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $employee['MobilePhone']?> >
            <label for="validationCustom01" class="form-label">Position</label><br>
            <input type="text" class="form-control" id="validationCustom01" value=<?php echo $employee['Position']?> >
            <img src="<?php echo $employee['Avatar']?>" alt="Avatar Employee"><br>
            <label for="validationCustom01" class="form-label">Avatar</label>
            

            <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>

        </form>
    </div>

</body>

</html>