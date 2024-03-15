<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include('header.php')?>
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số phòng ban</h5>
                            <p class="card-text"><?php
                                                    echo sizeof($departments) ?></p>
                            <a href="<?=DOMAIN.'public/?controller=department' ?>" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số nhân viên</h5>
                            <p class="card-text">
                            </p>
                            <p class="card-text"></p>
                            <a href="employees/index.php" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Số người dùng</h5>


                            <p class="card-text"></p>
                            <a href="users/index.php" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>