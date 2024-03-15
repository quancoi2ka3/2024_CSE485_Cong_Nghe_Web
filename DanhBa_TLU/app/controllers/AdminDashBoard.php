<?php
require_once APP_ROOT . '/app/services/DepartmentService.php';
class AdminDashBoard
{
    public function index()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        include APP_ROOT.'/app/views/admin_dashboard/main.php';
    }
}
