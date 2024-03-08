<?php
require_once __DIR__.'/../../models/Employee.php';

// Khởi tạo biến success
$success = false;

// Kiểm tra nếu có dữ liệu POST được gửi lên
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $EmployeeID = $_POST['EmployeeID'];
    $newName = $_POST['newName'];
    $newAddress=$_POST['newAddress'];
    $newEmail = $_POST['newEmail'];
    $newPhone = $_POST['newPhone'];
    $newPosition = $_POST['newPosition'];

    // Gọi hàm updateEmployee từ model
    if (updateEmployee($EmployeeID, $newName,  $newAddress, $newEmail, $newPhone, $newPosition)) {
        // Nếu cập nhật thành công, đặt biến $success thành true
        $success = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Update Employee</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="EmployeeID" class="form-label">Employee ID</label>
                <input type="number" class="form-control" id="EmployeeID" name="EmployeeID" required>
            </div>
            <div class="mb-3">
                <label for="newName" class="form-label">New Name</label>
                <input type="text" class="form-control" id="newName" name="newName" required>
            </div>
            <div class="mb-3">
                <label for="newName" class="form-label">New Address</label>
                <input type="text" class="form-control" id="newName" name="newAddress" required>
            </div>
            <div class="mb-3">
                <label for="newEmail" class="form-label">New Email</label>
                <input type="email" class="form-control" id="newEmail" name="newEmail" required>
            </div>
            <div class="mb-3">
                <label for="newPhone" class="form-label">New Phone</label>
                <input type="text" class="form-control" id="newPhone" name="newPhone" required>
            </div>
            <div class="mb-3">
                <label for="newDepartment" class="form-label">New Position</label>
                <input type="text" class="form-control" id="newDepartment" name="newPosition" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <?php if ($success): ?>
            <div class="alert alert-success mt-3" role="alert">
                Employee updated successfully!
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
