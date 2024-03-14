<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<h1 class="text-center">View Employees</h1>
<a class="btn btn-success" href="<?= DOMAIN."public/index.php?controller=employee&action=add"?>">Add Employees</a>

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
    <?php foreach($employees as $key=>$employee): 
    
      ?>
    <tr>
      <th scope="row"><?php echo $key+1; ?></th>
      <td><?php echo $employee->get_fullname()?></td>
      <td><?php echo $employee->get_address()?></td>
      <td><?php echo $employee->get_email()?></td>
      <td><?php echo $employee->get_mobilephone()?></td>
      <td><?php echo $employee->get_position()?></td>
      <td><img src="<?php echo $employee->get_avatar();?>" alt=""></td>
      <td ><a href="<?=DOMAIN."public/index.php?controller=employee&action=edit&id={$employee->get_employeeid()}"?>"><i class="fa-solid fa-pen-to-square mt-4"></i></a></td>
      <td ><a href=""><i class="fa-solid fa-trash mt-4"></i></a></td>
      <td ><a href=""><i class="fa-solid fa-eye mt-4"></i></a></td>
      
  
    </tr>
    <?php endforeach;?>
   
  </tbody>
</table>
</body>
</html>