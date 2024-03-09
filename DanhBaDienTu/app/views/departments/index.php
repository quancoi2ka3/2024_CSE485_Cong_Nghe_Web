<?php
require_once __DIR__ . '/../../models/Department.php';
require_once 'delete_department.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                            <a class="nav-link active" href="#">Department Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../employees/index.php">Employee Manage</a>
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
        <div class="container-fluid mt-5">
            <div class="row">
                <h1 class="text-primary text-center mb-5">Quản lý phòng ban</h1>
                <div class="col-sm"><a href="add_department.php" class="btn btn-primary"> Add <i class="fa-solid fa-plus"></i></a></div>
                <?php
                require_once __DIR__ . '/../../models/Department.php';
                // Kiểm tra xem có từ khóa tìm kiếm được gửi lên từ form hay không
                if (isset($_GET['keyword'])) {
                    $keyword = $_GET['keyword'];
                    // Gọi hàm searchEmployees để tìm kiếm nhân viên
                    $departments = searchDepartments($keyword);
                } else {
                    // Nếu không có từ khóa tìm kiếm, lấy danh sách nhân viên bình thường
                    $departments = getDepartments();
                }
                ?>
                <form class="d-flex" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">Number</th>
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
                        <?php
                        $i = 0;
                        // Number of users per page
                        $items = 3;

                        // tính tổng số trang
                        $totalPages = ceil(count($departments) / $items);

                        //trang mặc định là trang 1
                        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                        // tính số item của 1 trang xem đủ chưa
                        $startIndex = ($currentPage - 1) * $items;

                        // lấy ra các user cho trang hiện tại
                        $departmentsForPage = array_slice($departments, $startIndex, $items);
                        ?>

                        <?php foreach ($departmentsForPage as $department) : ?>
                            <tr>
                                <th scope="row"><?= ++$i ?></th>
                                <td><?= $department['DepartmentID'] ?></td>
                                <td><?= $department['DepartmentName'] ?></td>
                                <td><?= $department['Address'] ?></td>
                                <td><?= $department['Email'] ?></td>
                                <td><?= $department['Phone'] ?></td>
                                <td><?= $department['Logo'] ?></td>
                                <td><?= $department['Website'] ?></td>
                                <td><a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                <td><a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                <td><a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php if ($currentPage > 1) : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Trước</a></li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>

                        <?php if ($currentPage < $totalPages) : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Sau</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>