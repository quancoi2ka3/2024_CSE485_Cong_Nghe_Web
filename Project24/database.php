<?php
$users = [
[
"username" => "john",
"password" => password_hash("123", PASSWORD_DEFAULT),
"name" => "John Doe",
"email" => "johndoe@example.com",
"role" => "user"
],
[
"username" => "huy",
"password" => password_hash("1234", PASSWORD_DEFAULT),
"name" => "Huy",
"email" => "admin@example.com",
"role" => "admin"
],
// ... add more users
];
$authorization_levels = [
"user" => [
"access_profile" => true,
"edit_profile" => true,
"access_admin_panel" => false,
],
"admin" => [
"access_profile" => true,
"edit_profile" => true,
"access_admin_panel" => true,
"manage_users" => true,
],
// ... add more levels
];
?>