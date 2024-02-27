<?php
    session_start();

    // Include the file containing the $users array
    require_once './db.php';

    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
        header('Location: login.php'); // Redirect to login if not authenticated
    }
    $username = $_SESSION['user_id'];
    // Retrieve user data from array using the username
    $user = null;
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }
    if ($user) {
        // Display user information
        echo "Welcome, " . $user['name'] . "!";
        echo "<br>Email: " . $user['email'];
        // ... display other user details
    } else {
        echo "Error: User not found.";
        }
?>