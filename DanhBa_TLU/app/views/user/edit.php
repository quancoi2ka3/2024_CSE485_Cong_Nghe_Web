<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <div class="container mt-5" style="width: 50%; margin: 0 auto; border: 2px solid green; border-radius: 20px; padding: 40px 80px;">
      
        <h3 class="text-success text-center">Sửa thông tin người dùng</h3>
        
        <?php
            if(isset($success) && in_array('edit_success', $success)){
                echo '<div class="alert alert-success text-center" role="alert">Chỉnh sửa thành công!</div>';
            }
            elseif(isset($success) && in_array('edit_fail', $success)){
                echo '<div class="alert alert-danger text-center" role="alert">Chỉnh sửa thất bại</div>';
            }
            
        ?>
        <form action="" method="POST">
                    
                    <div class="mb-3">
                        <label for="username" class="form-label"><b>Tên</b></label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['Username'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Mật khẩu</b></label>
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $data['Password'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label"><b>Vị trí</b></label>
                        <input type="text" class="form-control" id="role" name="role" value="<?php echo $data['Role'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="edit"><i class="bi bi-floppy-fill"></i> Lưu</button> &nbsp;
                    <a class="btn btn-success" href = "index.php?controller=user&action=user" class="actor"> <i class="bi bi-arrow-counterclockwise"></i> Danh sách</a>
        </form>
    </div>
</body>
</html>