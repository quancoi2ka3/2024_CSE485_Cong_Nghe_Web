<?php
session_start();  session_regenerate_id(true); session_destroy(); 
 setcookie('logged_in', "", 1, "/", true,httponly:true,secure:true);  header('Location: login.php'); 
?>