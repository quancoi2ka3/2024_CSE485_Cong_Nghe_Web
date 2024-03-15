<?php
session_start();
require_once APP_ROOT . '/app/services/DepartmentService.php';
class DepartmentController
{
    public function index()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        include APP_ROOT . '/app/views/department/index.php';
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $DepartmentName = $_POST['DepartmentName'];
            $Address = $_POST['Address'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $Logo = $_POST['Logo'];
            $Website = $_POST['Website'];
            $ParentDepartmentID = $_POST['ParentDepartmentID'];
            // Lấy Logo và Website từ các nguồn phù hợp

            // Gọi phương thức addDepartment với các tham số đã lấy được
            $departmentService = new DepartmentService();
            $add = $departmentService->addDepartment($DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID);
            $errors = $departmentService->validateDepartmentData();

            // Kiểm tra kết quả và xử lý tùy thuộc vào thành công hay thất bại
            if ($add) {
                if (isset($_POST['add_department'])) {
                    $_SESSION['success_msg'] = "Thêm mới thành công";
                    header("Location:" . DOMAIN . "public/?controller=department&action=index");
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
            include APP_ROOT . '/app/views/department/add.php';
        }
    }
    public function view($DepartmentID)
    {
        $DepartmentID = $_GET['id'];
        $departmentService = new DepartmentService();
        $_SESSION['DepartmentbyID'] = $departmentService->getDepartmentById($DepartmentID);
        if ($_SESSION['DepartmentbyID']) {
            // Hiển thị trang xem chi tiết thông tin phòng ban
            include APP_ROOT . '/app/views/department/view.php';
        } else {
            // Xử lý khi không tìm thấy phòng ban
            echo "Không tìm thấy phòng ban có ID = $DepartmentID";
        }
    }
    public function delete($DepartmentID)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $DepartmentID = $_GET['id'];
            $departmentService = new DepartmentService();
            $delete = $departmentService->deleteDepartment($DepartmentID);
            if ($delete) {
                $_SESSION['success_msg'] = "Xóa thành công";
            } else {
                $_SESSION['error_msg'] = "Xóa thất bại";
            }
            header("Location:" . DOMAIN . "public/?controller=department&action=index");
            exit;
        } else {
            // Hiển thị trang xác nhận xóa
            include APP_ROOT . '/app/views/department/delete.php';
        }
    }
    public function edit($DepartmentID)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $DepartmentID = $_SESSION['ID'];
            $DepartmentName = $_POST['DepartmentName'];
            $Address = $_POST['Address'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $Logo = $_POST['Logo'];
            $Website = $_POST['Website'];
            $ParentDepartmentID = $_POST['ParentDepartmentID'];
            // Lấy Logo và Website từ các nguồn phù hợp

            // Gọi phương thức addDepartment với các tham số đã lấy được
            $departmentService = new DepartmentService();
           if($ParentDepartmentID!=null){
            $add = $departmentService->updateParentDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID);
           }else{
            $add = $departmentService->updateDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website);
           }
            $errors = $departmentService->validateDepartmentData();

            // Kiểm tra kết quả và xử lý tùy thuộc vào thành công hay thất bại
            if ($add) {
                if (isset($_POST['save_department'])) {
                    $_SESSION['success_msg'] = "Cập nhật thành công";
                    header("Location:" . DOMAIN . "public/?controller=department&action=edit");
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
            include APP_ROOT . '/app/views/department/edit.php';
        }
    }
}
