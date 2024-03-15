<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View info</title>
</head>
<body>
    <div id="container" style="border-radius: 20px;">
        <form class="form" action="" method="POST">
            <h2 style="margin-top: -5px;" class="text-success">Chi tiết người dùng</h2>
            <br><br>
           <div class="form-group row">
                <div class = "col-sm-3 col-form-label">
                    <label for="profile"><b>Ảnh đại diện</b></label>
                </div>
                <div class="col-sm-9 mt-5" for="avatar">
                    <img src="<?php echo isset($user['Avatar']) ? $user['Avatar'] : ''; ?>" alt="avatar" width="200px" height="150px">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="billing" class="col-sm-3 col-form-label"><b>Thông tin</b></label>
                <div class="col-sm-7">
                    <br>
                    <br>
                    <label for="billing"><b>Họ và tên</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo isset($user['FullName']) ? $user['FullName'] : ''; ?>">
                    <br>
                    <label for="billing"><b>Vị trí</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo isset($user['Role']) ? $user['Role'] : ''; ?>">
                    <br>
                    <label for="billing"><b>Chức vụ</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo isset($user['Position']) ? $user['Position'] : ''; ?>">
                    <br>
                    <label for="billing"><b>Địa chỉ</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo isset($user['Address']) ? $user['Address'] : ''; ?>">
                    <br>
                    <label for="billing"><b>Email</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo isset($user['Email']) ? $user['Email'] : ''; ?>">
                    <br>
                    <label for="billing"><b>Số điện thoại</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo isset($user['MobilePhone']) ? $user['MobilePhone'] : ''; ?>">
                </div>
            </div>
            <br>
            <a class="btn btn-success" style ="margin-left: 230px;" href="index.php?controller=user&action=user" class="actor"> <i class="bi bi-arrow-counterclockwise"></i> Danh sách</a>
        </form>
    </div>
</body>
</html>