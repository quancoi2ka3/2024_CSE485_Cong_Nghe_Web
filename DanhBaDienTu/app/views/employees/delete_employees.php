<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <form action="" method="post">
        <h1 class="text-center">Xóa nhân viên</h1>
      
          
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
         
          <button type="submit" class="btn btn-primary">Delete</button>
      
    </form>
    <?php 
    require_once __DIR__.'/../../models/Employee.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $EmployeeID=$_POST['EmployeeID'];
      
       if( deleteEmployee($EmployeeID) ){
        echo 'Xóa thành công';
       }
       else{
        echo 'Xóa thất bại';
       }
    }
    ?>
</body>
</html>