<?php session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
   header('Location: login.php');
}
$users = [["username" => "quan",         "password" => password_hash("456", PASSWORD_DEFAULT),         "name" => "Quan",         "email" => "Quan@example.com",         "role" => "user"],    
 ["username" => "nauQ",         "password" => password_hash("123", PASSWORD_DEFAULT),         "name" => "nauQ",         "email" => "nauQ@example.com",         "role" => "admin"],];
$authorization_levels = ["user" => ["access_profile" => true,         "edit_profile_basic" => true,         "access_admin_panel" => false],     "admin" => ["access_profile" => true,         "edit_profile_basic" => true,         "access_admin_panel" => true,         "manage_users" => true]];
$username = $_SESSION['user_id'];
$user = null;
foreach ($users as $u) {
   if ($u['username'] === $username) {
      $user = $u;
      break;
   }
}
if ($user) {
   $user_role = $_SESSION['user_role'];
   echo "Welcome, " . $user['name'] . "!";
   echo "<br>Email: " . $user['email'];
   if ($authorization_levels[$user_role]['edit_profile_basic']) {
      echo "<br>Edit basic profile information (link)";
   }
   if ($user_role === "admin" && $authorization_levels[$user_role]['access_admin_panel']) {
      echo "<br><a href='admin_panel.php'>Admin Panel</a>";
   }
} else {
   echo "Error: User not found.";
}