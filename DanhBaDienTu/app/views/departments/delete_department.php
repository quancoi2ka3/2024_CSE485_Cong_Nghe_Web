<?php
            require_once('../../models/Department.php');
            if (isset($_GET['id'])) {
                $DepartmentID = $_GET['id'];
                $department = deleteDepartment($DepartmentID);
                if(deleteDepartment($DepartmentID)){
                    header("Location:index.php?msg=Xóa tài khoản thành công");
                }
            }
            
?>