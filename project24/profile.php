<?php
    session_start();
    require('db.php');
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
        header('Location: login.php');
    }
    $username = $_SESSION['user_id'];
    $user = null;
    // Retrieve user data based on username (use prepared statements in real DB)
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
    if ($user_role === "user" && $authorization_levels[$user_role]['access_admin_panel']) {
        echo "<br><a href='edit_user.php'>Edit user</a>";
    }
    if ($user_role === "admin" && $authorization_levels[$user_role]['access_admin_panel']) {
        echo "<br><a href='admin_panel.php'>Admin Panel</a>";
    }

    } else {
        echo "Error: User not found.";
    }
?>