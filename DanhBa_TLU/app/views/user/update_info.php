<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bog</title>
</head>
<body>
<div id="container" style="border-radius: 20px;">
        <form class="form" action="" method="POST">
            <h2 class="text-success">Sửa thông tin cá nhân</h2>
            <br><br>
           <div class="form-group row">
                <div class = "col-sm-3 col-form-label">
                    <label for="profile"><b>Ảnh đại diện</b></label>
                </div>
                <div class="col-sm-9" for="avatar">
                    <input type="file" name="avatar" accept="images/*" value="<?php echo $user['Avatar']; ?>">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </div>
            <div class="form-group row mt-5">
                <label for="billing" class="col-sm-3 col-form-label"><b>Thông tin</b></label>
                <div class="col-sm-7">
                    <br>
                    <br>
                    <label for="billing"><b>Họ và tên</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['FullName']; ?>">
                    <br>
                    <label for="billing"><b>Tên</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['Username']; ?>">
                    <br>
                    <label for="billing"><b>Mật khẩu</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['Password']; ?>">
                    <br>
                    <label for="billing"><b>Vị trí</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['Role']; ?>">
                    <br>
                    <label for="billing"><b>Chức vụ</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['Position']; ?>">
                    <br>
                    <label for="billing"><b>Địa chỉ</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['Address']; ?>">
                    <br>
                    <label for="billing"><b>Email</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['Email']; ?>">
                    <br>
                    <label for="billing"><b>Số điện thoại</b></label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['MobilePhone']; ?>">
                </div>
            </div>
            <br>
            <button style="margin-left: 150px;" type="submit" class="btn btn-primary" name="edit"><i class="bi bi-floppy-fill"></i> Lưu</button> &nbsp;
            <a class="btn btn-success" href = "index.php?controller=user&action=info" class="actor"> <i class="bi bi-arrow-counterclockwise"></i> Trang cá nhân</a>
        </form>
    </div>
</body>
</html>