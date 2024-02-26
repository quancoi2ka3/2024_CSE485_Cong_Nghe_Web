<?php session_start(); 
 if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {     header('Location: login.php');  }  $username = $_SESSION['user_id'];   
 $users = [
   [
      "username" => "johndoe",         "password" => password_hash("123", PASSWORD_DEFAULT),
      "name" => "John Doe",         "email" => "johndoe@example.com"
   ],
];
 foreach ($users as $u) {     if ($u['username'] === $username) {         $user = $u;         break;     } }  if ($user) {        echo "Welcome, " . $user['name'] . "!";     echo "<br>Email: " . $user['email'];      } 
 else {     echo "Error: User not found."; }
  ?>