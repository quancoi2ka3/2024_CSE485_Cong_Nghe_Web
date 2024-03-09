<?php
require_once __DIR__ . '/../database.php';


function getUsers()
{
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
function AddUser($Username, $Password, $Role)
{
  try {
    // Validate user input to prevent SQL injection (prepared statements already help, but additional validation is recommended)
    $Username = filter_var($Username); // Sanitize username // Hash password securely

    if (!in_array($Role, ['admin', 'regular'])) {
      throw new InvalidArgumentException('Invalid Role. Must be "admin" or "regular".');
    }

    $conn = connectDB();
    $sql = "INSERT INTO users (Username, Password, Role) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $Username, $Password, $Role);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $result;
  } catch (InvalidArgumentException $e) {
    echo "Invalid user data: " . $e->getMessage();
  } catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
  }
}
function SignUp($Username, $Password, $FullName,$Address, $Email, $MobilePhone, $Position, $Avatar)
{
  try {
    $conn = connectDB();

    // Kiểm tra trùng lặp username và email
    $sql_check = "SELECT Username FROM users WHERE Username = ?";
    $stmt_check = mysqli_prepare($conn, $sql_check);
    mysqli_stmt_bind_param($stmt_check, "s", $Username);
    mysqli_stmt_execute($stmt_check);
    $result_check = mysqli_stmt_get_result($stmt_check);
    if (mysqli_num_rows($result_check) > 0) {
      throw new Exception("Username already exists!");
    }
    mysqli_stmt_close($stmt_check);

    // Mã hóa mật khẩu

    // Chuẩn bị câu lệnh INSERT cho bảng users
    $sql_users = "INSERT INTO users (Username, Password, Role) VALUES (?, ?, 'regular')";
    $stmt_users = mysqli_prepare($conn, $sql_users);
    mysqli_stmt_bind_param($stmt_users, "ss", $Username, $Password);

    // Chuẩn bị câu lệnh INSERT cho bảng employee
    $sql_employee = "INSERT INTO employees (FullName, Address, Email, MobilePhone, Position, Avatar) 
                      VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_employee = mysqli_prepare($conn, $sql_employee);
    mysqli_stmt_bind_param($stmt_employee, "ssssss", $FullName, $Address, $Email, $MobilePhone, $Position, $Avatar);

    // Thực thi cả hai câu lệnh INSERT
    mysqli_stmt_execute($stmt_users);
    mysqli_stmt_execute($stmt_employee);

    mysqli_stmt_close($stmt_users);
    mysqli_stmt_close($stmt_employee);

    return true;
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    return false;
  } finally {
    mysqli_close($conn);
  }
}



function UpdateUser($Username, $Password, $Role, $EmployeeID, $UserID)
{
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
function searchUsers($keyword)
{
  $conn = connectDB();
  $sql = "SELECT * FROM users WHERE Username LIKE ? OR Password LIKE ? OR Role LIKE ? OR EmployeeID LIKE ? ";
  $keyword = "%$keyword%";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "sssi", $keyword, $keyword, $keyword, $keyword);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $users = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
  }
  return $users;
}
