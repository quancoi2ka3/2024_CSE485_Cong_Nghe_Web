<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="departments/index.php">Department Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="employees/index.php">Employee Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users/index.php">Users Manage</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <h3 for="">Account : </h3>
                        <button class="btn btn-outline-danger" type="submit">Log Out</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số phòng ban</h5>
                            <p class="card-text"><?php require_once('../models/Department.php');echo sizeof(getDepartments())?></p>
                            <a href="#" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số nhân viên</h5>
                            <p class="card-text"><?php require_once('../models/Employee.php');echo sizeof(getEmployees())?></p>
                            <a href="#" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số người dùng</h5>
                            <p class="card-text"><?php require_once('../models/User.php');echo sizeof(getAllUsers())?></p>
                            <a href="#" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>