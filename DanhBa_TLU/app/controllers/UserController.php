<?php
require_once APP_ROOT . '/app/services/UserService.php';
class UserController
{
    public function index()
    {
        $limit = 5;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($currentPage - 1) * $limit;
        $userService = new UserService();
        $users = $userService->getUsersWithLimit($offset, $limit);
        $totalUsers = count($userService->getAllUsers());
        $totalPages = ceil($totalUsers / $limit);
        include APP_ROOT . '/app/views/user/index.php';
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Username = $_POST['Username'];
            $Password = $_POST['Address'];
            $Role = $_POST['Role'];
            $EmployeeID = $_POST['EmployeeID'];

            // Lấy Logo và Website từ các nguồn phù hợp

            // Gọi phương thức addDepartment với các tham số đã lấy được
            $userService = new UserService();
            $add = $userService->addUser($Username, $Password, $Role, $EmployeeID);
            $errors = $userService->validateDepartmentData();

            // Kiểm tra kết quả và xử lý tùy thuộc vào thành công hay thất bại
            if ($add) {
                if (isset($_POST['add_user'])) {
                    $_SESSION['add_success'] = "Thêm mới thành công";
                    header("Location:" . DOMAIN . "public/?controller=user&action=index");
                    exit; // Đảm bảo chương trình dừng ngay sau lệnh header
                }
                exit;
            }
            if (!empty($errors)) {
                // Gán thông điệp lỗi vào session và reload trang
                $_SESSION['error_msg'] = "Thêm mới thất bại vì các lỗi sau: " . implode(', ', $errors);
                header("Location: {$_SERVER['PHP_SELF']}");
                exit;
            }
        } else {
            include APP_ROOT . '/app/views/user/add.php';
        }
    }
    public function view($EmployeeID)
    {
        $EmployeeID = $_GET['id'];
        $userService = new UserService();
        $_SESSION['ViewUserbyID'] = $userService->getUserById($EmployeeID);
        if ($_SESSION['ViewUserbyID']) {
            // Hiển thị trang xem chi tiết thông tin phòng ban
            include APP_ROOT . '/app/views/user/view.php';
        } else {
            // Xử lý khi không tìm thấy phòng ban
            echo "Không tìm thấy user có ID = $EmployeeID";
        }
    }
    public function delete($EmployeeID)
    {
        if (isset($_GET['id'])) {
            $EmployeeID = $_GET['id'];
            $userService = new UserService();
            $delete = $userService->deleteUser($EmployeeID);
            if ($delete) {
                $_SESSION['delete_success'] = "Xóa thành công";
                header("Location:" . DOMAIN . "public/?controller=user&action=index&msg=" . $_SESSION['delete_success']);
            } else {
                $_SESSION['delete_error'] = "Xóa thất bại";
                header("Location:" . DOMAIN . "public/?controller=user&action=index&msg=" . $_SESSION['delete_error']);
            }
            exit;
        } else {
            // // Hiển thị trang xác nhận xóa
            include APP_ROOT . '/app/views/user/delete.php';
        }
    }
    public function edit($EmployeeID)
    {
        $EmployeeID = $_GET['id'];
        $userService = new UserService();
        $_SESSION['ViewUserbyID'] = $userService->getUserById($EmployeeID);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $Role = $_POST['Role'];
            $EmployeeID = $_POST['EmployeeID'];

            // Gọi phương thức addDepartment với các tham số đã lấy được
            $userService = new UserService();
            if ($EmployeeID != null) {
                $add = $userService->updateUser($Username, $Password, $Role, $EmployeeID);
            } 
            $errors = $userService->validateDepartmentData();

            // Kiểm tra kết quả và xử lý tùy thuộc vào thành công hay thất bại
            if ($add) {
                if (isset($_POST['save_user'])) {
                    $_SESSION['edit_success'] = "Cập nhật thành công";
                    header("Location:" . DOMAIN . "public/?controller=user&action=edit&id=" . $_GET['id'] . "&msg=" . $_SESSION['success_msg']);
                    exit; // Đảm bảo chương trình dừng ngay sau lệnh header
                }
                exit;
            }
            if (!empty($errors)) {
                // Gán thông điệp lỗi vào session và reload trang
                $_SESSION['error_msg'] = "Thêm mới thất bại vì các lỗi sau: " . implode(', ', $errors);
                header("Location: {$_SERVER['PHP_SELF']}");
                exit;
            }
        } else {
            include APP_ROOT . '/app/views/user/edit.php';
        }
    }
    public function search()
    {
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $userService = new UserService();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = $userService->searchUser($keyword);
        }

        include APP_ROOT . '/app/views/user/search.php';
    }
}
