<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        img {
            height: 50px;
            width: 50px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Employee</h1>
        <form action="<?= DOMAIN . 'public/index.php?controller=employee&action=edit&id=' . $employeeID ?>" method="post">

            <div class="mb-3">
                <label for="fullname" class="form-label">Employee ID</label>
                <input type="text" class="form-control" name="employeeid" value="<?php echo $employee->get_employeeid(); ?>">

            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required value="<?php echo $employee->get_fullname(); ?>">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required value="<?php echo $employee->get_address(); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address" required value="<?php echo $employee->get_email(); ?>">
            </div>
            <div class="mb-3">
                <label for="mobilephone" class="form-label">Mobile Phone</label>
                <input type="text" class="form-control" id="mobilephone" name="mobilephone" pattern="^\d{10}$" title="Please enter a 10-digit phone number" required value="<?php echo $employee->get_mobilephone(); ?>">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" required value="<?php echo $employee->get_position(); ?>">
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <img src="<?php echo $employee->get_avatar(); ?>" alt="">
                <input type="text" class="form-control" id="avatar" name="avatar" value="<?php echo $employee->get_avatar(); ?>">
            </div>
            <div class="mb-3">
                <label for="department_id" class="form-label">Department</label>
                <select name="department_id" id="department_id" class="form-control">
                    <?php foreach ($departments as $dept_id => $dept_name) : ?>
                        <option value="<?php echo $dept_id; ?>" <?php if ($dept_id == $employee->get_departmentid()) echo 'selected'; ?>><?php echo $dept_name; ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update Employee</button>

        </form>
    </div>
</body>

</html>