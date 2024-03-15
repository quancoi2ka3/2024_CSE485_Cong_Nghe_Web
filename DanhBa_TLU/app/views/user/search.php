<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search user</title>
</head>
<body>
    <div class="container-fluid">
        <main class="mt-3">
           <div class="row">
                <div class="col-md">
                <!-- thanh search -->
                <div class="timkiem mt-3 mb-3">
                    <form action="" method="GET">
                        <table>
                            <tr>
                                <input type="hidden" name="controller" value="user">
                                <td><input type="text" name="tukhoa" placeholder="Nhập từ khóa"></td>
                                <td><input type="submit" value="Tìm kiếm"></td>
                            </tr>
                        </table>
                        <input type="hidden" name="action" value="search">
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">STT</th>
                            <th scope="col" class="text-center">Tên</th>
                            <th scope="col" class="text-center">Mật khẩu</th>
                            <th scope="col" class="text-center">Vị trí</th>
                            <th scope="col" colspan="3" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                         $perPage = 10;
                         $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                         $start = ($currentPage - 1) * $perPage;
                         $end = $start + $perPage;
                         $usersCount = count($users);
                         $users = array_slice($users, $start, $perPage);
                        
                        ?>
                        <?php if (is_array($users) || is_object($users)): ?>
                            <?php foreach($users as $user):?>
                                <tr>
                                    <td class="text-center"><?php echo $count; ?></td>
                                    <td><?php echo $user['Username']; ?></td>
                                    <td><?php echo $user['Password']; ?></td>
                                    <td class="text-center"><?php echo $user['Role']; ?></td>
                                    <th scope="col" class="text-center">
                                        <a href="index.php?controller=user&action=view&id=<?php echo $user['Username'];?>" class="btn"><i class="bi bi-eye-fill"></i></a>
                                    </th>
                                    <th scope="col" class="text-center">
                                        <a href="index.php?controller=user&action=edit&id=<?php echo $user['Username'];?>" class="btn"><i class="bi bi-pencil-fill"></i></a>
                                    </th>
                                    <th scope="col" class="text-center">
                                        <a onclick="return confirm('Are you sure you want to delete it?')" href="index.php?controller=user&action=delete&id=<?php echo $user['Username'];?>" title="delete" class="btn"><i class="bi bi-trash-fill"></i></a>
                                    </th>
                                </tr>
                                <?php  $count++; ?>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php
                 $totalPages = ceil($usersCount / $perPage);
                ?>
                <div class="pagination">
                    <?php if ($currentPage > 1): ?>
                        <a href="index.php?controller=user&action=list&page=<?php echo $currentPage - 1; ?>" class="pagination-link">Trước</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <a href="index.php?controller=user&action=list&page=<?php echo $i; ?>" class="pagination-link"><?php echo $i; ?></a>
                    <?php endfor; ?>

                    <?php if ($currentPage < $totalPages): ?>
                        <a href="index.php?controller=user&action=list&page=<?php echo $currentPage + 1; ?>" class="pagination-link">Sau</a>
                    <?php endif; ?>
                </div>
                </div>
           </div>
        </main>
    </div>
</body>
</html>