<?php session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
   header('Location: login.php');
}
$users = [
   ["username" => "quan",         "password" => password_hash("456", PASSWORD_DEFAULT),         "name" => "Quan",         "email" => "Quan@example.com",         "role" => "user"],
   ["username" => "nauQ",         "password" => password_hash("123", PASSWORD_DEFAULT),         "name" => "nauQ",         "email" => "nauQ@example.com",         "role" => "admin"],
];
$authorization_levels = ["user" => ["access_profile" => true,         "edit_profile" => true,         "access_admin_panel" => false],     "admin" => ["access_profile" => true,         "edit_profile" => true,         "access_admin_panel" => true,         "manage_users" => true]];
$username = $_GET['username'];
foreach ($users as $u){
   echo "<h2>Edit User: ". $u['name'] . "</h2>";
}