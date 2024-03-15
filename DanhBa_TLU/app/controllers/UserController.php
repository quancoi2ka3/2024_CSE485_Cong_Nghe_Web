<?php
    require_once('D:/Anh/MON_HOC/Cong_nghe_web/danh_ba/2024_CSE485_Cong_Nghe_Web/DanhBa_TLU/app/config/config.php');
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = '';
    }

    switch ($action) {
        case 'add_user':
           // lay du lieu tu view de truyen vao model
            if(isset($_POST['add'])){
                $Username = $_POST['username'];
                $Role = $_POST['role'];
                $Password1 = $_POST['password1'];
                $Password2 = $_POST['password2'];
                if($Password1 != $Password2){
                    $error[] = 'password_error';
                }
                else{
                     $Password = password_hash($Password1, PASSWORD_DEFAULT);
                    if($db->insertUser($Username, $Password, $Role)){
                        $success[] = 'add_success';
                }
                else{
                    $success[] = 'add_fail';
                }
                }
                //băm mật khẩu
               
            }
            include 'app/views/user/add.php';;
            break;
        case 'update_user':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $table = 'users';
                $data = $db->getUserByID($id, $table);
                if(isset($_POST['edit'])){
                    $Username = $_POST['username'];
                    $Password = $_POST['password'];
                    //Băm mật khẩu
                    $Password = password_hash($Password, PASSWORD_DEFAULT);
                    $Role = $_POST['role'];
                    if($db->updateUser($Username, $Password, $Role)){
                        $success[] = 'edit_success';
                    }
                    else{
                        $success[] = 'edit_fail';
                    }
                }
            }

            include 'app/views/user/edit.php';;
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $Username = $_GET['id'];
                $table1 = 'employees';
                $table2 = 'users';
                $EmployeeID = $db->getEmployeeID($Username, $table2);
                if($db->deleteUser($Username, $EmployeeID, $table1, $table2)){
                    header('location: index.php?controller=user&action=user');
                }
                else{
                    echo 'Xóa thất bại!';   
                } 
            }
            else{
                header('location: index.php?controller=user&action=user');
            }
            break;
        case 'user':
            $table = 'users';
            $users = $db->getAllUser($table);
            include 'app/views/user/list.php';
            break;
        case 'view':
            if(isset($_GET['id'])){
                $Username = $_GET['id'];
                $table1 = 'users';
                $table2 = 'employees';
                $user = $db->getUserEmployee($Username, $table1, $table2);
            }
            include 'app/views/user/view.php';
            break;
        case 'info':
            // if(isset($_GET['id'])){
            //     $Username = $_GET['id'];
            //     $table1 = 'users';
            //     $table2 = 'employees';
            //     $user = $db->getUserEmployee($Username, $table1, $table2);
            // }
            include 'app/views/user/info.php';
            break;
        case 'update_info':
            // if(isset($_GET['id'])){
            //     $Username = $_GET['id'];
            //     $table1 = 'users';
            //     $table2 = 'employees';
            //     $user = $db->getUserEmployee($Username, $table1, $table2);
            //     if(isset($_POST['edit'])){
            //         $Username = $_POST['username'];
            //         $Password = $_POST['password'];
            //         //Băm mật khẩu
            //         $Password = password_hash($Password, PASSWORD_DEFAULT);
            //         $Role = $_POST['role'];
            //         $EmployeeID = $_POST['employeeid'];
            //         $FullName = $_POST['fullname'];
            //         $Address = $_POST['address'];
            //         $Email = $_POST['email'];
            //         $MobilePhone = $_POST['mobilephone'];
            //         $Position = $_POST['position'];
            //         $Avartar = $_POST['avartar'];
            //         if($db->updateUserEmployee($Username, $Password, $Role, $EmployeeID, $FullName, $Address, $Email, $MobilePhone, $Position, $Avartar)){
            //             $success[] = 'edit_success';
            //         }
            //         else{
            //             $success[] = 'edit_fail';
            //         }
            //     }
            // }

            include 'app/views/user/update_info.php';;
            break;

        case 'search':
            if(isset($_GET['tukhoa'])){
                $key = $_GET['tukhoa'];
                $table = "users";
                //Lấy dữ liệu tu model : file config.php
                $users = $db->search($key, $table);
                   
            }
            include 'app/views/user/search.php';
            break;
        case 'login':
            if(isset($_POST['login'])){
                $Username = $_POST['username'];
                $Password = $_POST['password'];
                $table = 'users';
                $user = $db->getAllUser($table);
                if($user && password_verify($Password, $user['Password'])){
                    $_SESSION['user'] = $user;
                    header('location: index.php?controller=user&action=user');
                }
                else{
                    $error[] = 'login_error';
                }
            }
            include 'app/views/user/login.php';
            break;
        default:{
            include 'app/views/user/list.php';
            break;
        }
    }

?>