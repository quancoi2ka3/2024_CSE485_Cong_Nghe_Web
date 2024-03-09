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
function getUserByID($UserID)
{
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE ID =?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $UserID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $users = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $users;
}
//Thêm 1 đơn vị mới
function AddUser($Username,$Password,$Role,$EmployeeID)
{
    try {
        // Validate user input to prevent SQL injection (prepared statements already help, but additional validation is recommended)
        $Username = filter_var($Username); // Sanitize username
        $Password = password_hash($Password, PASSWORD_DEFAULT); // Hash password securely
    
        if (!in_array($Role, ['admin', 'regular'])) {
          throw new InvalidArgumentException('Invalid Role. Must be "admin" or "regular".');
        }
    
        $conn = connectDB();
        $sql = "INSERT INTO users (Username, Password, Role, EmployeeID) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $Username, $Password, $Role, $EmployeeID);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        return $result;
      } catch (InvalidArgumentException $e) {
        echo "Invalid user data: " . $e->getMessage();
      } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
      }
}


function UpdateUser($Username, $Password, $Role, $EmployeeID, $UserID) {
    try {
      // Validate user input and ensure UserID is an integer
      $Username = filter_var($Username, FILTER_SANITIZE_STRING);
      
      $UserID = filter_var($UserID, FILTER_VALIDATE_INT);
      if (!$UserID) {
        throw new InvalidArgumentException('Invalid UserID. Must be an integer.');
      }
  
      if (!in_array($Role, ['admin', 'regular'])) {
        throw new InvalidArgumentException('Invalid Role. Must be "admin" or "regular".');
      }
  
      $conn = connectDB();
      $sql = "UPDATE users SET Username = ?, Password = ?, Role = ?, EmployeeID = ? WHERE ID = ?";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "ssssi", $Username, $Password, $Role, $EmployeeID, $UserID);
      $result = mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
  
      return $result;
    } catch (InvalidArgumentException $e) {
      echo "Invalid user data: " . $e->getMessage();
    } catch (PDOException $e) {
      echo "Database error: " . $e->getMessage();
    }
  }
function deleteUser($Username)
{
    $conn = connectDB();
    $sql = "DELETE FROM users WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $Username);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function isUserExist($Username)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM users WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $Username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function searchUsers($keyword) {
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE Username LIKE ? OR Password LIKE ? OR Role LIKE ? OR EmployeeID LIKE ? ";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $keyword,$keyword,$keyword,$keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row; 
    }
    return $users;
}
?>