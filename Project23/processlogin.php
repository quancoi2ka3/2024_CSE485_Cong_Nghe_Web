
<?php
$users = [[
    "username" => "huy",
    "password" => password_hash("1234", PASSWORD_DEFAULT), // Store hashed
    "name" => "John Doe",
    "email" => "johndoe@example.com"
    ],
    ];
session_start(); 
$username = $_POST['username'];
$password = $_POST['password'];
// Check if username exists
$user = null;
foreach ($users as $u) {
if ($u['username'] === $username) {
$user = $u;
break;
}
}
if ($user && password_verify($password, $user['password'])) {
// Login successful
$_SESSION['user_id'] = $user['username']; // Store user ID in session
setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); 
header('Location: /phpdemo/Project23/profile.php'); // Redirect to profile page
} else {
// Login failed
echo "Invalid username or password.";
}
?>