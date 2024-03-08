<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <form action="" method="post">
        <h1 class="text-center">Thêm nhân viên</h1>
      
          
          <div class="mb-3">
            <label for="" class="form-label">EmployeeID</label>
            <input
                type="number"
                class="form-control"
                name="EmployeeID"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">FullName</label>
            <input
                type="text"
                class="form-control"
                name="FullName"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input
                type="text"
                class="form-control"
                name="Address"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                name="Email"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">MobilePhone</label>
            <input
                type="number"
                class="form-control"
                name="MobilePhone"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Position</label>
            <input
                type="text"
                class="form-control"
                name="Position"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
    <?php 
    require_once __DIR__.'/../../models/Employee.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $EmployeeID=$_POST['EmployeeID'];
       $FullName=$_POST['FullName'];
       $Address=$_POST['Address'];
       $Email=$_POST['Email'];
       $MobilePhone=$_POST['MobilePhone'];
       $Position=$_POST['Position'];
       if(addEmployee($EmployeeID, $FullName, $Address,$Email,$MobilePhone,$Position)){
        echo 'Thêm thành công';
       }
       else{
        echo 'Thêm thất bại';
       }
    }
    ?>
</body>
</html>