
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
                <h3 class="text-center">THỐNG KÊ DANH BẠ</h3>
                <div class="mt-4">
                            <?php
                                //Thống kê theo từng chức vụ
                                $positions = array();
                                foreach ($employees as $employee) {
                                    $position = $employee['Position'];
                                    if (isset($positions[$position])) {
                                        $positions[$position]++;
                                    } else {
                                        $positions[$position] = 1;
                                    }
                                }

                                //Thống kê theo đơn vị
                                // $departments = array();
                                // foreach ($departments as $department) {
                                //     $department = $department['DepartmentName'];
                                //     if (isset($departments[$department])) {
                                //         $departments[$department]++;
                                //     } else {
                                //         $departments[$department] = 1;
                                //     }
                                // }
                            ?>

                            <div class="mt-3" style="margin: 0 200px;">
                            <?php
                                     // Number of positions per page
                                     $position_items = 10;
                                     // tính tổng số trang
                                     $totalPositionPages = ceil(count($positions) / $position_items);

                                    //trang mặc định là trang 1
                                    $currentPositionPage = isset($_GET['position_page']) ? $_GET['position_page'] : 1;

                                    // tính số item của 1 trang xem đủ chưa
                                     $startPositionIndex = ($currentPositionPage - 1) * $position_items;

                                    // lấy ra tất cả các item
                                    $positionsForPage = array_slice($positions, $startPositionIndex, $position_items);
                                ?>
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Chức vụ</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php foreach ($positionsForPage as $position => $positionCount): ?>
                                                    <tr>
                                                        <td><?php echo $position; ?></td>
                                                        <td><?php echo $positionCount; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                          
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <?php if ($currentPositionPage > 1): ?>
                                        <li class="page-item"><a class="page-link" href="?position_page=<?php echo $currentPositionPage - 1; ?>">Trước</a></li>
                                    <?php endif; ?>
                                    <?php for ($i = 1; $i <= $totalPositionPages; $i++): ?>
                                        <li class="page-item <?php echo ($i == $currentPositionPage) ? 'active' : ''; ?>"><a class="page-link" href="?position_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                                    <?php if ($currentPositionPage < $totalPositionPages): ?>
                                        <li class="page-item"><a class="page-link" href="?position_page=<?php echo $currentPositionPage + 1; ?>">Sau</a></li>
                                    <?php endif; ?>
                                </ul>
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