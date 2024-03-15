<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        img {
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Search Results</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($employees)): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">FullName</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">MobilePhone</th>
                                <th scope="col">Position</th>
                                <th scope="col">Avatar</th>
                                <th scope="col" colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($employees as $key => $employee): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $employee['FullName']; ?></td>
                                    <td><?php echo $employee['Address']; ?></td>
                                    <td><?php echo $employee['Email']; ?></td>
                                    <td><?php echo $employee['MobilePhone']; ?></td>
                                    <td><?php echo $employee['Position']; ?></td>
                                    <td><img src="<?php echo $employee['Avatar']; ?>" alt="Avatar"></td>
                                    <td><a href="<?= DOMAIN.'public/index.php?controller=employee&action=edit&id='.$employee['EmployeeID']?>"><i class="fa-solid fa-pen-to-square mt-4"></i></a></td>
                <td> <a class="deleteBtn" href="<?= DOMAIN.'public/index.php?controller=employee&action=delete&id='.$employee['EmployeeID']?>" onclick="return confirm('Are you sure you want to delete this employee?')"><i class="fa-solid fa-trash mt-4"></i></a></td>
                <td><a href="<?= DOMAIN.'public/index.php?controller=employee&action=detail&id='.$employee['EmployeeID']?>"><i class="fa-solid fa-eye mt-4"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No results found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
