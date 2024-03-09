<?php 
require_once __DIR__.'/../../models/Employee.php';
$employees=getEmployees();
$itemsPerPage = 10;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($employees) / $itemsPerPage);
$currentPageItems =array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
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
                            <a class="nav-link" aria-current="page" href="../admin_dashboard.php">Home</a>
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
                    <form action="/DBĐT/DanhBaDienTu/app/logout.php" method="post" class="d-flex">
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
    <form class="d-flex" method="GET">
   
    <select name="Position" id="" select class="form-select" aria-label="Default select example">
        <?php foreach($employees as $employee): ?>
        <option name="Position" value="<?php echo $employee['Position']?>"><?php echo $employee['Position'] ?></option>
        <?php endforeach;?>
        </select>
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="keyword">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<?php 
require_once __DIR__.'/../../models/Employee.php';

if(isset($_GET['keyword']) && isset($_GET['Position'])) {
    $keyword = $_GET['keyword'];
    $Position = $_GET['Position'];
    $employees = searchEmployees($Position, $keyword);
} else {
    $employees = getEmployees();
}
?>
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
                <?php if ($currentPageItems): ?>
                    <?php foreach($currentPageItems as $employee): ?>
                        <tr>
                            <td><?php echo $employee['EmployeeID']?></td>
                            <td><?php echo $employee['FullName']?></td>
                            <td><?php echo $employee['Address']?></td>
                            <td><?php echo $employee['Email']?></td>
                            <td><?php echo $employee['MobilePhone']?></td>
                            <td><?php echo $employee['Position']?></td>
                            <td><?php echo $employee['DepartmentID']?></td>
                            <td><a href="edit_employees.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="delete_employees.php"><i class="fa-solid fa-trash"></i></a></td>
                            <td><a href="infor_employees.php"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">Không tìm thấy kết quả</td>
                    </tr>
                <?php endif; ?>
            </tbody>

</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">

<?php if ($currentPage > 1): ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a></li>
<?php endif; ?><?php for ($i = 1; $i <= $totalPages; $i++): ?>
<?php if ($i == $currentPage): ?>
    <li class="page-item active"><a class="page-link" href="#"><?php echo $i; ?></a></li>
<?php else: ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php endif; ?>
<?php endfor; ?>
<?php if ($currentPage < $totalPages): ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a></li>
<?php endif; ?>
</ul>
</nav>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>

</html>