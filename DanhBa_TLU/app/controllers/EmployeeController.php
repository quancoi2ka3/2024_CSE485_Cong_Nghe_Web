<?php 
require_once APP_ROOT.'/app/services/EmployeeService.php';
class EmployeeController{
    public function index(){
        $employeeService=new EmployeeService();
        $employees=$employeeService->getAllEmployees();
        include APP_ROOT.'/app/views/employee/view.php';
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
          
            header('Location: http://localhost/DanhBa_TLU/public/index.php?controller=employee&action=view');
            
        }
        // Truyền biến $departments vào view
        
        include APP_ROOT.'/app/views/employee/add.php';
    }
    // EmployeeController.php
// EmployeeController.php

public function edit() {
    if(isset($_GET['id'])) {
        $employeeID = $_GET['id'];
        $employeeService = new EmployeeService();
        $employee = $employeeService->getEmployeeByID($employeeID);
        
        if($employee) {
            // Truyền dữ liệu nhân viên vào view
            include APP_ROOT.'/app/views/employee/edit.php';
        } else {
            // Xử lý khi không tìm thấy nhân viên
        }
    } else {
        // Xử lý khi không có ID trong URL
    }
}



    
    
    }
?>