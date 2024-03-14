<?php 
require_once ('../app/config/config.php');
require_once APP_ROOT.'/app/libs/DBConnection.php';


require_once APP_ROOT.'/app/libs/DBConnection.php';
$controller=isset($_GET['controller'])?$_GET['controller']:'home';
$action=isset($_GET['action'])?$_GET['action']:'index';
if($controller =='employee' && $action == 'view'){
require_once APP_ROOT.'/app/controllers/EmployeeController.php';
$employeeController=new EmployeeController();
$employeeController->index();
}
else if($controller == 'employee'&& $action == 'add'){
    require_once APP_ROOT.'/app/controllers/EmployeeController.php';
$employeeController=new EmployeeController();
$employeeController->add();
}
else if($controller == 'employee'&& $action == 'edit'){
require_once APP_ROOT.'/app/controllers/EmployeeController.php';
$employeeController=new EmployeeController();
$employeeController->edit();
}


?>