<?php


require_once('../app/config/config.php');
require_once(APP_ROOT . '/app/config/DBConnection.php');
require_once APP_ROOT . '/app/controllers/AdminDashBoard.php';
require_once APP_ROOT . '/app/controllers/DepartmentController.php';
require_once APP_ROOT . '/app/controllers/HomeController.php';
require_once APP_ROOT . '/app/controllers/UserController.php';




$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller == 'home' && $action == 'index') {
    $departmentController = new AdminDashBoard();
    $departmentController->index();
}
else if ($controller == 'admin' && $action == 'index') {
    $departmentController = new AdminDashBoard();
    $departmentController->index();
} else if ($controller == 'department' && $action == 'index') {
    $departmentController = new DepartmentController();
    $departmentController->index();
} else if ($controller == 'department' && $action == 'add') {
    $departmentController = new DepartmentController();
    $departmentController->add();
} else if ($controller == 'department' && $action == 'edit') {
    $departmentController = new DepartmentController();
    $departmentController->edit($_GET['id']);
} else if ($controller == 'department' && $action == 'search') {
    $departmentController = new DepartmentController();
    $departmentController->search();
} else if ($controller == 'department' && $action == 'delete') {
    $departmentController = new DepartmentController();
    $departmentController->delete($_GET['id']);
} else if ($controller == 'department' && $action == 'view') {
    $departmentController = new DepartmentController();
    $departmentController->view($_GET['id']);
} else if ($controller == 'employee' && $action == 'index') {
    require_once APP_ROOT . '/app/controllers/EmployeeController.php';
    $employeeController = new EmployeeController();
    $employeeController->index();
} else if ($controller == 'employee' && $action == 'add') {
    require_once APP_ROOT . '/app/controllers/EmployeeController.php';
    $employeeController = new EmployeeController();
    $employeeController->add();
} else if ($controller == 'employee' && $action == 'edit') {
    require_once APP_ROOT . '/app/controllers/EmployeeController.php';
    $employeeController = new EmployeeController();
    $employeeController->edit();
} else if ($controller == 'employee' && $action == 'search') {
    require_once APP_ROOT . '/app/controllers/EmployeeController.php';
    $employeeController = new EmployeeController();
    $employeeController->search();
} else if ($controller == 'employee' && $action == 'delete') {
    require_once APP_ROOT . '/app/controllers/EmployeeController.php';
    $employeeController = new EmployeeController();
    $employeeController->delete();
} else if ($controller == 'employee' && $action == 'detail') {
    require_once APP_ROOT . '/app/controllers/EmployeeController.php';
    $employeeController = new EmployeeController();
    $employeeController->view();
} else if ($controller == 'user' && $action == 'index') {
    $userController = new UserController();
    $userController->index();
} else if ($controller == 'user' && $action == 'add') {
    $userController = new UserController();
    $userController->add();
} else if ($controller == 'user' && $action == 'edit') {
    $userController = new UserController();
    $userController->edit($_GET['id']);
} else if ($controller == 'user' && $action == 'search') {
    $userController = new UserController();
    $userController->search();
} else if ($controller == 'user' && $action == 'delete') {
    $userController = new UserController();
    $userController->delete($_GET['id']);
} else if ($controller == 'user' && $action == 'view') {
    $userController = new UserController();
    $userController->view($_GET['id']);
}
