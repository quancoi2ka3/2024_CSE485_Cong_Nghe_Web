<?php session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$user_found = false;
$users = [["username" => "quan",         "password" => password_hash("456", PASSWORD_DEFAULT),         "name" => "Quan",         "email" => "Quan@example.com",         "role" => "user"],    
 ["username" => "nauQ",         "password" => password_hash("123", PASSWORD_DEFAULT),         "name" => "nauQ",         "email" => "nauQ@example.com",         "role" => "admin"],];
$authorization_levels = ["user" => ["access_profile" => true,         "edit_profile" => true,         "access_admin_panel" => false],     "admin" => ["access_profile" => true,         "edit_profile" => true,         "access_admin_panel" => true,         "manage_users" => true]];
foreach ($users as $u) {
   if ($u['username'] === $username && password_verify($password, $u['password'])) {
      $user_found = true;
      $_SESSION['user_id'] = $u['username'];
      $_SESSION['user_role'] = $u['role'];
      break;
   }
}
if ($user_found) {
   setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
   header('Location: profile.php');
} else {
   echo "Invalid username or password.";
}