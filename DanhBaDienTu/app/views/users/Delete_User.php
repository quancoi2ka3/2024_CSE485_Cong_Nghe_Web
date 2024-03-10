<?php
            require_once('../../models/User.php');
            if (isset($_GET['id'])) {
                $UserID = $_GET['id'];
                $user = deleteUser($UserID);
                if(deleteUser($UserID)){
                    header("Location:index.php?msg=Xóa tài khoản thành công");
                }
            }
            
?>