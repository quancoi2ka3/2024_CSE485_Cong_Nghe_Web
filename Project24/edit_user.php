<?php
require 'database.php';
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
$_SESSION['user_role'] !== "admin") {
header('Location: login.php');
}
$username = $_GET['username']; // Get username from URL
// ... find user data (use prepared statements in real DB)
// Display user information and edit form
foreach($users as $user){
    echo "<h2>".$user['name']."</h2>";
}
?>
