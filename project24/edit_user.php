<?php
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
        $_SESSION['user_role'] !== "admin") {
        header('Location: login.php');
        exit; // Add this line to stop executing the rest of the code
    }
    
    $username = $_GET['username'];
    
    echo "<h2>Edit User: " . $user['name'] . "</h2>";
?>