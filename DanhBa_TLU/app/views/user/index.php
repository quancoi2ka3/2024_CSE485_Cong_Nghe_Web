<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= APP_ROOT.'/public/css/style.css' ?>">
</head>

<body>
    <?php include(APP_ROOT . '/app/views/admin_dashboard/header.php') ?>
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <h1 class="text-primary text-center mb-5">Manage User</h1>
                <?php
                // Kiểm tra và hiển thị thông điệp lỗi nếu có
                if (isset($_SESSION['add_success'])) {
                    echo '<div class="alert alert-success" role="alert">' . $_SESSION['add_success'] . '</div>';
                    unset($_SESSION['add_success']); // Xóa thông điệp lỗi sau khi đã hiển thị
                } else if (isset($_SESSION['delete_success'])) {
                    echo '<div class="alert alert-success" role="alert">' . $_SESSION['delete_success'] . '</div>';
                    unset($_SESSION['delete_success']); // Xóa thông điệp lỗi sau khi đã hiển thị
                } else if (isset($_SESSION['delete_error'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['delete_error'] . '</div>';
                    unset($_SESSION['delete_error']); // Xóa thông điệp lỗi sau khi đã hiển thị
                }
                ?>
                 <form class="d-flex align-items-center" method="POST" action="<?= DOMAIN . "public/index.php?controller=user&action=search" ?>">
                    <input class="form-control me-2 flex-grow-1" name="keyword" type="search" placeholder="Search" aria-label="Search" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
                    <button class="btn btn-outline-success" type="submit">Search</button><br>
                </form>
                <div class="col-sm"><a href="<?= DOMAIN . 'public/index.php?controller=user&action=add' ?>" class="btn btn-primary"> Add <i class="fa-solid fa-plus"></i></a></div><br>
               
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Number</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password </th>
                            <th scope="col">Role</th>
                            <th scope="col">EmployeeID</th>
                            <th scope="col" colspan="4" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        if (!empty($users))
                            foreach ($users as $key => $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++  ?></th>
                                <td><?= $user->getUsername() ?></td>
                                <td><?= $user->getPassword() ?></td>
                                <td><?= $user->getRole() ?></td>
                                <td><?= $user->getEmployeeID() ?></td>
                                <td>
                                    <a href="<?= DOMAIN . 'public/index.php?controller=user&action=view&id=' . $user->getEmployeeID() ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </td>
                                <td>
                                    <a href="<?= DOMAIN . 'public/index.php?controller=user&action=edit&id=' .  $user->getEmployeeID() ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="<?= DOMAIN . 'public/index.php?controller=user&action=delete&id=' . $user->getEmployeeID() ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this User?')"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php

                            ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?= $currentPage == 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?= DOMAIN . "public/index.php?controller=user&action=index&page=" . ($currentPage - 1) ?>">Previous</a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                                <a class="page-link" href="<?= DOMAIN . "public/index.php?controller=user&action=index&page=$i" ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?= DOMAIN . "public/index.php?controller=user&action=index&page=" . ($currentPage + 1) ?>">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>