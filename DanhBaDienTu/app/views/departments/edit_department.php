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
    <form action="edit_department_process.php" method="post">
        <h1 class="text-center">Sửa phònng ban</h1>

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
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>

    </form>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>