<?php
require_once __DIR__.'/../../models/Employee.php';
$employees=getEmployees();
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
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center">
    <?php foreach($employees as $employee)?>
    <form action="" class="form-control mt-5" style="height:600px; width:600px;">
        <img src="<?php
        echo $employee['Avatar'];
        ?>" alt="ảnh">
    </form>
</div>

</body>
</html>