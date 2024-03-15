<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
    .content{
        height: 700px;
        width: 600px;
        border: 10px solid grey;
        border-radius:10px;
    }
    img{
        height: 100px;
        width: 100px;
        border: 1px solid grey;
    }
    label{
       font-weight:bold;
    }
    
    
</style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center">
        <div class="content mt-3">
        
          <h3>Employee Information</h3>
          <div class="d-flex justify-content-center">
          <img src="<?php echo $employee->get_avatar();?>" class="rounded-circle float-right " alt="...">
</div> 
<div class="row mt-5 mx-5">
        <div class="col-md-4">
        <label for="">Employee ID</label>
        </div>
        <div class="col-md-3">

        <span><?php echo $employee->get_employeeid();?></span>
        </div>
        </div>
         <div class="row mt-5 mx-5">
        <div class="col-md-4">
        <label for="">FullName</label>
        </div>
        <div class="col-md-3">

        <span><?php echo $employee->get_fullname();?></span>
        </div>
        </div>
        <div class="row mt-5 mx-5">
        <div class="col-md-4">
        <label for="">Address</label>
        </div>
        <div class="col-md-5">

        <span><?php echo $employee->get_address();?></span>
        </div>
        </div>
        <div class="row mt-5 mx-5">
        <div class="col-md-4">
        <label for="">Email</label>
        </div>
        <div class="col-md-1">

        <span><?php echo $employee->get_email();?></span>
        </div>
        </div>
        <div class="row mt-5 mx-5">
        <div class="col-md-4">
        <label for="">Mobile Phone </label>
        </div>
        <div class="col-md-4">

        <span><?php echo $employee->get_mobilephone();?></span>
        </div>
        </div>
        <div class="row mt-5 mx-5 row-6">
        <div class="col-md-4 col-9">
        <label for="">Position</label>
        </div>
        <div class="col-md-5">

        <span><?php echo $employee->get_position();?></span>
        </div>
        </div>
        <div class="row mt-5 mx-5">
        <div class="col-md-4">
        <label for="">Department Name</label>
        </div>
        <div class="col-md-5">

        <span><?php echo $departments[$employee->get_departmentid()]; ?></span>

        </div>
        </div>
        </div>
        
        </div>
        
        </div>
        
        </div>
        
    </div>
</body>
</html>