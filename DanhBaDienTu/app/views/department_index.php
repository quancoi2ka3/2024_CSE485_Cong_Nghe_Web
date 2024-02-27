<?php
require_once'../models/Department.php';
$departments = getDepartments();
// echo'<pre>';
// print_r($departments);
// '</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Department Manage</title>
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
              <a class="nav-link" aria-current="page" href="../admin_dashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Department Manage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../employees/index.php">Employee Manage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../users/index.php">Users Manage</a>
            </li>
          </ul>
          <form class="d-flex">
            <h4 for="" class="text-success">Account : mquan </h4>
            <button class="btn btn-outline-danger" type="submit">Log Out</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid mt-5">
      <div class="row">
        <h1 class="text-primary text-center mb-5">Danh sách phòng ban</h1>
        <div class="col-sm"><a href="#" class="btn btn-primary">Thêm mới</a></div>
        <table class="table">

          <thead>
            <tr>
              <th scope="col">Department ID</th>
              <th scope="col">Department Name</th>
              <th scope="col">Address</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Logo</th>
              <th scope="col">Website</th>
              <th scope="col" colspan="4" class="text-center">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php $i =0;?>
            <?php foreach($departments as $key=>$department):?>
            <tr>
              <th scope="row"><?=++$i?></th>
              <td><?= $department['DepartmentName']?></td>
              <td><?= $department['Address']?></td>
              <td><?= $department['Email']?></td>
              <td><?= $department['Phone']?></td>
              <td><?= $department['Logo']?></td>
              <td><?= $department['Website']?></td>
              <td><a href="#" class="btn btn-primary">Chi tiết</a></td>
              <td><a href="#" class="btn btn-danger">Xóa</a></td>
              <td><a href="#" class="btn btn-warning">Sửa</a></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Trước</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Sau</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>