
<?php
require 'database.php';
session_start();

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['user_id'];
$user = null;
$user_found = false; 

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        $user_found = true; 
        break;
    }
}
if (!$user_found) {
    echo "Error: User not found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile.php</title>
    <link rel="stylesheet" href="/phpdemo/Project24/assets/css/profile.css">
</head>
<body>
    <div class="container">
        <div class="welcome">
            <?php
            if ($user) {
                // Display user information based on authorization level
                $user_role = $_SESSION['user_role'];
                echo "<h1>Welcome " . $user['name'] ."</h1>";
                echo "<h2>Email: " . $user['email']."</h2>";
                if ($authorization_levels[$user_role]['edit_profile']) {
                if ($user_role === "admin" && $authorization_levels[$user_role]['access_admin_panel']) {
                echo "<span>
                <img src='/phpdemo/Project24/assets/images/leftarrow.webp'>
                <a href='admin_panel.php'>Admin Panel</a>
                </span>";
                }
                else{
                    echo "<span>
                    <img src='/phpdemo/Project24/assets/images/leftarrow.webp'>
                    <a href='/phpdemo/Project22/admin/account.php'>User Panel</a>
                    </span>";
                  
                
                }
                }
                } 
            ?>
        </div>
    </div>
</body>
</html>