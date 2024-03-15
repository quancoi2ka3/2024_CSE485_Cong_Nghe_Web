<?php
session_start();
require_once APP_ROOT . '/app/services/DepartmentService.php';
class DepartmentController
{
    public function index()
    {
        $limit = 5;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($currentPage - 1) * $limit;
        $departmentService = new DepartmentService();
        $departments = $departmentService->getDepartmentsWithLimit($offset, $limit);
        $totalDepartments = count($departmentService->getAllDepartments());
        $totalPages = ceil($totalDepartments / $limit);
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
                    $_SESSION['add_success'] = "Thêm mới thành công";
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
        $_SESSION['ViewDepartmentbyID'] = $departmentService->getDepartmentById($DepartmentID);
        if ($_SESSION['ViewDepartmentbyID']) {
            // Hiển thị trang xem chi tiết thông tin phòng ban
            include APP_ROOT . '/app/views/department/view.php';
        } else {
            // Xử lý khi không tìm thấy phòng ban
            echo "Không tìm thấy phòng ban có ID = $DepartmentID";
        }
    }
    public function delete($DepartmentID)
    {
        if (isset($_GET['id'])) {
            $DepartmentID = $_GET['id'];
            $departmentService = new DepartmentService();
            $delete = $departmentService->deleteDepartment($DepartmentID);
            if ($delete) {
                $_SESSION['delete_success'] = "Xóa thành công";
                header("Location:" . DOMAIN . "public/?controller=department&action=index&msg=" . $_SESSION['delete_success']);
            } else {
                $_SESSION['delete_error'] = "Xóa thất bại";
                header("Location:" . DOMAIN . "public/?controller=department&action=index&msg=" . $_SESSION['delete_error']);
            }
            exit;
        } else {
            // // Hiển thị trang xác nhận xóa
            include APP_ROOT . '/app/views/department/delete.php';
        }
    }
    public function edit($DepartmentID)
    {
        $DepartmentID = $_GET['id'];
        $departmentService = new DepartmentService();
        $_SESSION['ViewDepartmentbyID'] = $departmentService->getDepartmentById($DepartmentID);
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
            if ($ParentDepartmentID != null) {
                $add = $departmentService->updateDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID);
            } else {
                $add = $departmentService->updateParentDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website);
            }
            $errors = $departmentService->validateDepartmentData();

            // Kiểm tra kết quả và xử lý tùy thuộc vào thành công hay thất bại
            if ($add) {
                if (isset($_POST['save_department'])) {
                    $_SESSION['edit_success'] = "Cập nhật thành công";
                    header("Location:" . DOMAIN . "public/?controller=department&action=edit&id=" . $_GET['id'] . "&msg=" . $_SESSION['success_msg']);
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
    public function search()
    {
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $departmentService = new DepartmentService();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $departments = $departmentService->searchDepartment($keyword);
        }

        include APP_ROOT . '/app/views/department/search.php';
    }
}
