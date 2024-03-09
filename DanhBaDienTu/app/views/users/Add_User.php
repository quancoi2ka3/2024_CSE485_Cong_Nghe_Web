<?php
require_once __DIR__ . '/../../models/User.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <form action="Add_User_Process.php" method="post">
        <h1 class="text-center">Thêm tài khoản</h1>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="Username">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="Password">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Role" aria-label="Role" aria-describedby="basic-addon1" name="Role">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="EmployeeID" aria-label="EmployeeID" aria-describedby="basic-addon2" name="EmployeeID">

        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>
        <?php if (isset($_GET['msg'])) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_GET['msg'] ?>
                    </div>
                <?php endif; ?>

    </form>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>