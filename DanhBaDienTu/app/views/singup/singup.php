<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo tài khoản</title>
    <link rel="stylesheet" href="../../../public/assets/css/singup.css">
</head>


    <body>
    <div class="signup-container">
        <img class="header-image" src="../../../public/assets/images/baner.png" alt="Banner Image">

            <h2>Tạo tài khoản cá nhân</h2>
            <form>
                <div class="form-group">
                    <label for="avatar">Ảnh đại diện:</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <div class="form-group">
                    <label for="full-name">Tên:</label>
                    <input type="text" name="full-name" id="full-name" required>
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Số điện thoại:</label>
                    <input type="phonenumber" name="phonenumber" id="phonenumber" required>
                </div>
                
                <div class="form-group">
                    <label>Giới tính:</label>
                    <div class="gender-group">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Nam</label>
                    </div>
                    <div class="gender-group">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Nữ</label>
                    </div>
                    <div class="gender-group">
                        <input type="radio" id="other" name="gender" value="other" required>
                        <label for="other">Khác</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="position">Chức vụ:</label>
                    <select name="position" id="position">
                        <option value="hr">Hiệu trưởng</option>
                        <option value="finance">Thạc sĩ</option>
                        <option value="it">Tiến sĩ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="department">Phòng ban:</label>
                    <select name="department" id="department">
                        <option value="hr">Chính trị và công tác sinh viên</option>
                        <option value="finance">Trạm y tế </option>
                        <option value="it">Thư viện</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="role">Vai trò:</label>
                    <input type="text" name="role" id="role" required>
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Xác nhận mật khẩu:</label>
                    <input type="password" name="confirm-password" id="confirm-password" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Tạo tài khoản">
                </div>
            </form>
        </div>
    </body>

</html>