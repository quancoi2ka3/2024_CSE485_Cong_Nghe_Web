<?php session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
   header('Location: login.php');
}
echo "<h2>Users</h2>";
echo "<table border='1'>";
echo "<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
$users = [
   ["username" => "quan",         "password" => password_hash("456", PASSWORD_DEFAULT),         "name" => "Quan",         "email" => "Quan@example.com",         "role" => "user"],
   ["username" => "nauQ",         "password" => password_hash("123", PASSWORD_DEFAULT),         "name" => "nauQ",         "email" => "nauQ@example.com",         "role" => "admin"],
];
$authorization_levels = ["user" => ["access_profile" => true,         "edit_profile" => true,         "access_admin_panel" => false],     "admin" => ["access_profile" => true,         "edit_profile" => true,         "access_admin_panel" => true,         "manage_users" => true]];
foreach ($users as $u) {
   echo "<tr>";
   echo "<td>" . $u['username'] . "</td>";
   echo "<td>" . $u['name'] . "</td>";
   echo "<td>" . $u['email'] . "</td>";
   echo "<td>" . $u['role'] . "</td>";
   echo "<td>";
   if ($u['username'] !== $_SESSION['user_id']) {
      echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
   }
   echo "</td>";
   echo "</tr>";
}
echo "</table>";