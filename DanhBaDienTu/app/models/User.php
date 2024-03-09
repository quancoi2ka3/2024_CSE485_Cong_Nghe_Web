<?php
require_once __DIR__.'/../database.php';


function getUsers() {
    $conn = connectDB();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $users = array();
    while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
    }
    mysqli_free_result($result);
    return $users;
    }
    function getUserById($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $user;
    }
    function addUser($username, $email, $password) {
    $conn = connectDB();
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?,
    ?)";
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email,
    $hashed_password);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
    }
    function updateUser($id, $username, $email, $password) {
    $conn = connectDB();
    $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE
    id = ?";
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $username, $email,
    $hashed_password, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
    }
    function deleteUser($id) {
    $conn = connectDB();
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;}
    function isUserExist($id) {
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
    }
    function login($username, $password, $role) {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE Username = ? AND Password = ? AND Role = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $username, $password, $role);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            return $row['Role'];
        } else {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            return null;
        }
    }
    function getCountUser(){
        $conn = connectDB();
        $sql = "SELECT COUNT(*) AS count FROM users";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count_users = $row['count'];
        mysqli_free_result($result);
        return $count_users;
    }
    

?>