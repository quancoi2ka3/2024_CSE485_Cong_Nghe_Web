<?php
require_once __DIR__ . '/../../models/User.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
<div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="Edit_User_Process.php" method="post">
            <h1 class="text-center">Sửa tài khoản</h1>
            <?php
            require_once('../../models/User.php');
            if (isset($_GET['id'])) {
                $UserID = $_GET['id'];
                $user = getUserById($UserID);
            }
            ?>
            <label for="validationCustom01" class="form-label">User ID</label>
            <input type="text" class="form-control" name="ID"value=<?php echo $user['ID']?> readonly>
            
            <label for="validationCustom01" class="form-label">Username</label>
            <input type="text" class="form-control" name="Username"value=<?php echo $user['Username']?> >
            <label for="validationCustom01" class="form-label">Password</label>
            <input type="text" class="form-control"  name="Password" value=<?php echo $user['Password']?> >
            <label for="validationCustom01" class="form-label">Role</label>
            <input type="text" class="form-control"  name="Role" value=<?php echo $user['Role']?> >
            <label for="validationCustom01" class="form-label">EmployeeID</label>
            <input type="text" class="form-control"  name="EmployeeID" value=<?php echo $user['EmployeeID']?> >
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>

        </form>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>