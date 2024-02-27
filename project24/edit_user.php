<?php
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
        header('Location: login.php');
    }
    require('db.php');
    $username = $_GET['username'];
    foreach($users as $user) {
        echo "<h2>Edit User: " . $user['name'] . "</h2>";
    }
?>