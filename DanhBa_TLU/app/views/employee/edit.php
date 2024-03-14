

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Employee</h1>
        <?php if($employee): ?>
        <form action="" method="post">
            <input type="hidden" name="employeeid" value="<?php echo $employee->getEmployeeID(); ?>">
            <div class="mb-3">
                
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $employee->getFullName(); ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $employee->getAddress(); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $employee->getEmail(); ?>" required>
            </div>
            <div class="mb-3">
                <label for="mobilephone" class="form-label">Mobile Phone</label>
                <input type="text" class="form-control" id="mobilephone" name="mobilephone" value="<?php echo $employee->getMobilePhone(); ?>" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="<?php echo $employee->getPosition(); ?>" required>
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input type="text" class="form-control" id="avatar" name="avatar" value="<?php echo $employee->getAvatar(); ?>">
            </div>
            <div class="mb-3">
                <label for="department_id" class="form-label">Department</label>
                <select name="department_id" id="department_id" class="form-control">
                    <?php foreach($departments as $dept_id => $dept_name): ?>
                        <option value="<?php echo $dept_id; ?>" <?php if($dept_id == $employee->getDepartmentID()) echo 'selected'; ?>><?php echo $dept_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Employee not found!
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
