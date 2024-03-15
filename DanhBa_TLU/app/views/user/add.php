<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <?php
         if(isset($success) && in_array('add_success', $success)){
            echo '<div class="alert alert-success text-center" role="alert">Thêm thành công!</div>';
        }
        elseif(isset($success) && in_array('add_fail', $success)){
            echo '<div class="alert alert-danger text-center" role="alert">Thêm thất bại</div>';
        }
        if(isset($error) && in_array('empty', $error)){
            echo '<div class="alert alert-danger text-center" role="alert">Vui lòng nhập đầy đủ thông tin!</div>';
        }
    ?>
    <div class="container mt-5" style="width: 40%; margin: 0 auto; border: 3px solid green; border-radius: 20px; padding: 40px 0;">
      
        <h3 class="text-success text-center">Thêm người dùng</h3>
        <br>
        <form style="width: 45%; margin: 0 auto;" action="" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label"><b>Tên</b></label>
                        <?php
                            if(isset($error) && in_array('username_exist', $error)){
                                echo '<div class="alert alert-danger text-center" role="alert">Tên đăng nhập đã tồn tại!</div>';
                            }
                        ?>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Họ và tên">
                    </div>
                    <?php
                                    
                        if(isset($error) && in_array('password_length', $error)){
                            echo '<div class="alert alert-danger text-center" role="alert">Vui lòng nhập mật khẩu dài tối thiểu 6 kí tự!</div>';
                        }
                    ?>
                    <?php
                        if(isset($error) && in_array('password_error', $error)){
                            echo '<div class="alert alert-danger text-center" role="alert">Vui lòng nhập mật khẩu trùng khớp!</div>';
                        }
                    ?>
                    <div class="mb-3">
                        <label for="password1" class="form-label"><b>Mật khẩu</b></label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Mật khẩu">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label"><b>Nhập lại mật khẩu</b></label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Xác nhận mật khẩu">
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label"><b>Vị trí</b></label>
                        <select class="form-select" id="role" name="role">
                            <option value="admin">admin</option>
                            <option value="regular">regular</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="add"><i class="bi bi-floppy-fill"></i> Lưu</button> &nbsp;
                    <a class="btn btn-success" href = "index.php?controller=user&action=user" class="user"><i class="bi bi-arrow-counterclockwise"></i> Danh sách</a>
        </form>
    </div>
</body>
</html>