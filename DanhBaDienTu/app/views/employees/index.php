<?php 
require_once __DIR__.'/../../models/Employee.php';
$employees=getEmployees();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Manage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                            <a class="nav-link" aria-current="page" href="/../admin_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../departments/index.php">Department Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../employees/index.php">Employee Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../users/index.php">Users Manage</a>
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
        <h1 class="text-center">Quản lý nhân viên</h1>
        <div class="row-g-2">
    <div class="col-5">
        <a href="/DBĐT/DanhBaDienTu/app/views/employees/add_employees.php" class="btn btn-primary">Thêm mới</a>
    </div>
    <?php 
require_once __DIR__.'/../../models/Employee.php';

// Kiểm tra xem có từ khóa tìm kiếm được gửi lên từ form hay không
if(isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    // Gọi hàm searchEmployees để tìm kiếm nhân viên
    $employees = searchEmployees($keyword);
} else {
    // Nếu không có từ khóa tìm kiếm, lấy danh sách nhân viên bình thường
    $employees = getEmployees();
}
?>
    <form class="d-flex" method="GET">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

</div>

           

    <table class="table">
  <thead>
    <tr>
      <th scope="col">EmployeeID</th>
      <th scope="col">FullName</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">MobilePhone</th>
      <th scope="col">Position</th>
      <th scope="col">DepartmentID</th>
      <th scope="col" colspan="3">Thao tác</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($employees): ?>
<?php foreach($employees as $employee): ?>
<tr>
<td><?php echo $employee['EmployeeID']?></td>
<td><?php echo $employee['FullName']?></td>
<td><?php echo $employee['Address']?></td>
<td><?php echo $employee['Email']?></td>
<td><?php echo $employee['MobilePhone']?></td>
<td><?php echo $employee['Position']?></td>
<td><?php echo $employee['DepartmentID']?></td>
<td><a href="/DBĐT/DanhBaDienTu/app/views/employees/edit_employees.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
<td><a href="/DBĐT/DanhBaDienTu/app/views/employees/delete_employees.php"><i class="fa-solid fa-trash"></i></a></td>
<td><a href=""><i class="fa-solid fa-ellipsis"></i></a></td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr>
<td colspan="9">Không tìm thấy kết quả</td>
</tr>
<?php endif; ?>
    
  </tbody>
</table>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>

</html>