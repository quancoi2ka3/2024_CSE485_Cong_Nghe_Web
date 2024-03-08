<?php
    require_once '../models/Employee.php';
    $employees = getEmployees();
?>

<!DOCTYPE html>
<html>
<head>
    <title>DANH BẠ ĐIỆN TỬ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>  
<div class="container-fluid">
        <?php
            require_once 'header.php';
        ?>
        <main class="mt-3">
            <div class="container" style=" padding-right: 0;">
                <div class="row">
                    <div class="col-md-9">
                        <div>
                            <h3>DANH BẠ NỔI BẬT</h3>
                            <div class="row">
                                <div class="col-md-2">
                                    <select onchange="" id="search" class="form-select">
                                        <option selected value="0">Tên</option>
                                        <option value="1">Chức vụ</option>
                                        <option value="2">Số điện thoại</option>
                                        <option value="2">Email</option>
                                        <option value="2">Địa chỉ</option>
                                    </select>
                                </div>
                                <div class="col-md-7 ms-4">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                                </div>
                                <div class="col-md ms-2">
                                    <a href="search.blade.php" class="btn btn-danger"> <i class="bi bi-search"></i> &nbsp Tìm kiếm nâng cao</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <?php
                                // Number of users per page
                                $items = 20;

                                // tính tổng số trang
                                $totalPages = ceil(count($employees) / $items);

                               //trang mặc định là trang 1
                                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                                // tính số item của 1 trang xem đủ chưa
                                $startIndex = ($currentPage - 1) * $items;

                                // lấy ra các user cho trang hiện tại
                                $employeesForPage = array_slice($employees, $startIndex, $items);
                            ?>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Họ tên</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>MobilePhone</th>
                                        <th>Chức vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($employeesForPage as $employee): ?>
                                    <tr>
                                        <td><?php echo $employee['FullName']; ?></td>
                                        <td><?php echo $employee['Address']; ?></td>
                                        <td><?php echo $employee['Email']; ?></td>
                                        <td><?php echo $employee['MobilePhone']; ?></td>
                                        <td><?php echo $employee['Position']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <ul class="pagination">
                                <?php if ($currentPage > 1): ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Trước</a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php endfor; ?>

                                <?php if ($currentPage < $totalPages): ?>
                                <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Sau</a></li>
                                <?php endif; ?>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php
                            require_once 'news/new.php';
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-4">
            <?php
                require_once 'footer.php';
            ?>
        </footer>
    </div>
</body>
</html>