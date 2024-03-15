<?php 
require_once APP_ROOT.'/app/services/EmployeeService.php';
class EmployeeController{
    public function index() {
        $limit = 5;
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($currentPage - 1) * $limit;
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployeesWithLimit($offset, $limit);
        $totalEmployees = count($employeeService->getAllEmployees());
        $totalPages = ceil($totalEmployees / $limit);
        include APP_ROOT . '/app/views/admin_dashboard/header.php';
        include APP_ROOT . '/app/views/employee/view.php';
    }
    
    public function add(){
        $employeeService = new EmployeeService();
        $departments = $employeeService->getAllDepartments();
        if(isset($_POST['employeeid'],$_POST['fullname'], $_POST['address'], $_POST['email'], $_POST['mobilephone'], $_POST['position'],$_POST['avatar'], $_POST['department_id'])){
            $employeeid = $_POST['employeeid'];
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $mobilephone = $_POST['mobilephone'];
            $position = $_POST['position'];
            $avatar= $_POST['avatar'];
            $department_id = $_POST['department_id'];
    
    
            $employeeService->addEmployee($employeeid,$fullname, $address, $email, $mobilephone, $position,$avatar,$department_id);
            $success = true;
            header("Location: index.php?controller=employee&action=view&success=true");
            
        }
        
        include APP_ROOT.'/app/views/employee/add.php';
    }

   
    public function editByID() {
        if(isset($_GET['id'])) {
            $employeeID = $_GET['id'];
            $employeeService = new EmployeeService();
            $employee = $employeeService->getEmployeeByID($employeeID);
            
            if($employee) {
                $departments = $employeeService->getAllDepartments();
                
                if(isset($_POST['submit'])) {
                  
                    $employeeID= $_POST['employeeid'];
                    $fullname = $_POST['fullname'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $mobilephone = $_POST['mobilephone'];
                    $position = $_POST['position'];
                    $avatar = $_POST['avatar'];
                    $department_id = $_POST['department_id'];
    
                    // Gọi phương thức để cập nhật thông tin của nhân viên
                    $result = $employeeService->updateEmployee($employeeID, $fullname, $address, $email, $mobilephone, $position, $avatar, $department_id);
                    
                    if($result) {
                        // Chuyển hướng người dùng sau khi cập nhật thành công
                        header('Location: ' . DOMAIN . 'public/index.php?controller=employee&action=view');
                        echo "<h1>'Update Success'</h1>";
                    } else {
                        echo 'Failed to update employee.';
                    }
                } else {
                    // Hiển thị form để chỉnh sửa thông tin người dùng
                    include APP_ROOT . '/app/views/employee/edit.php';
                }
            } else {
                // Nếu không tìm thấy nhân viên, hiển thị thông báo lỗi
                echo 'Employee not found.';
            }
        } else {
            echo 'Employee ID not provided.';
        }
    }
    

    public function search() {
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $employeeModel = new EmployeeService();
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $employees = $employeeModel->searchEmployee($keyword);
        } else {
            $employees = []; 
        }
    
        include APP_ROOT.'/app/views/employee/search_results.php';
    }    
    
    
    
    
    
    
    

    
    public function deleteEmployeeAndUsers() {
        if(isset($_GET['id'])) {
            $employeeID = $_GET['id'];
            $employeeService = new EmployeeService();
            $result = $employeeService->deleteEmployeeAndUsers($employeeID);
            if($result) {
                // Chuyển hướng sau khi xóa thành công
                header('Location: '.DOMAIN.'public/index.php?controller=employee&action=view');
                exit();
            } else {
                echo 'Failed to delete employee and related users.';
            }
        } else {
            echo 'Employee ID not provided.';
        }
    }
    public function getDetailById(){
        if(isset($_GET['id'])) {
            $employeeID = $_GET['id'];
            $employeeService = new EmployeeService();
            $departments = $employeeService->getAllDepartments();
            $employee = $employeeService->getEmployeeByID($employeeID);
           
            include APP_ROOT .'/app/views/employee/detail.php';  
        
    }
    }
}
    
?>