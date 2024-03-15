<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete</h1>
    <form action="index.php?controller=employee&action=delete" method="post">
        <div class="mb-3">
                <label for="fullname" class="form-label"><?php echo $employee->get_employeeid();?></label>
                <input type="text" class="form-control" id="employeeid" name="employeeid" required>
                <button type="submit">Submit</button>
            </div>
    </form>
</body>
</html>