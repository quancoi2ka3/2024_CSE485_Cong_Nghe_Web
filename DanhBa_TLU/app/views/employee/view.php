

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
      img{
        height: 50px;
        width: 50px;
      }
    </style>
</head>
<body>

<h1 class="text-center">View Employees</h1>

<form class="d-flex align-items-center" method="POST" action="<?= DOMAIN."public/index.php?controller=employee&action=search" ?>">
    <input class="form-control me-2 flex-grow-1" name="keyword" type="search" placeholder="Search" aria-label="Search" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>



<a class="btn btn-success" href="<?= DOMAIN."public/index.php?controller=employee&action=add"?>">Add Employees</a>
<main>
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
    <?php if (!empty($employees)): ?>
        <?php foreach($employees as $key=>$employee): ?>
            <tr>
                <th scope="row"><?php echo ($currentPage - 1) * $limit + $key + 1; ?></th>
                <td><?php echo $employee->get_fullname()?></td>
                <td><?php echo $employee->get_address()?></td>
                <td><?php echo $employee->get_email()?></td>
                <td><?php echo $employee->get_mobilephone()?></td>
                <td><?php echo $employee->get_position()?></td>
                <td><img src="<?php echo $employee->get_avatar();?>" alt=""></td>
                <td><a href="<?= DOMAIN.'public/index.php?controller=employee&action=edit&id='.$employee->get_employeeid()?>"><i class="fa-solid fa-pen-to-square mt-4"></i></a></td>
                <td> <a class="deleteBtn" href="<?= DOMAIN.'public/index.php?controller=employee&action=delete&id='.$employee->get_employeeid()?>" onclick="return confirm('Are you sure you want to delete this employee?')"><i class="fa-solid fa-trash mt-4"></i></a></td>
                <td><a href="<?= DOMAIN.'public/index.php?controller=employee&action=detail&id='.$employee->get_employeeid()?>"><i class="fa-solid fa-eye mt-4"></i></a></td>
            </tr>
        <?php endforeach;?>
    <?php else: ?>
        <tr>
            <td colspan="9">No employees found</td>
        </tr>
    <?php endif; ?>
</tbody>


</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item <?= $currentPage == 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="<?= DOMAIN . "public/index.php?controller=employee&action=view&page=" . ($currentPage - 1) ?>">Previous</a>
        </li>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <li class="page-item"><a class="page-link <?= $i == $currentPage ? 'active' : '' ?>" href="<?= DOMAIN . "public/index.php?controller=employee&action=view&page=$i" ?>"><?= $i ?></a></li>
        <?php endfor; ?>
        <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : '' ?>">
            <a class="page-link" href="<?= DOMAIN . "public/index.php?controller=employee&action=view&page=" . ($currentPage + 1) ?>">Next</a>
        </li>
    </ul>
</nav>

</main>
</body>
</html>