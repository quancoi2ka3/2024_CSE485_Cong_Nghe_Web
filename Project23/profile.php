<?php
$users = [[
    "username" => "huy",
    "password" => password_hash("1234", PASSWORD_DEFAULT), // Store hashed
    "name" => "John Doe",
    "email" => "johndoe@example.com"
    ],
    ];
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
header('Location: login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];
// Retrieve user data from array using the username
$user = null;
foreach ($users as $u){
if ($u['username'] == $username) {
$user = $u;
break;
}
}
if ($user) {
// Display user information
echo "Welcome, " . $user['name'] . "!";
echo "<br>Email: " . $user['email'];

echo '<br><a href="/phpdemo/Project23/login.php" style="color:red;">Logout</a>';
} else {
echo "Error: User not found.";
}
?>
