

<?php
require_once(APP_ROOT . '/app/models/user.php');

class UserService
{
    function getAllUsers()
    {
        try {
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "SELECT * FROM users ORDER BY EmployeeID DESC ";
                $stmt = $conn->query($sql);
                $users = [];
                while ($row = $stmt->fetch()) {
                    $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                    $users[] = $user;
                }
                return $users;
            }
        } catch (PDOException $e) {
            return [];
        }
    }

    public function validateDepartmentData()
    {
        $errors = [];

        // Kiểm tra dữ liệu đầu vào
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['Username'])) {
                $errors[] = 'Tên tài khoản không được để trống';
            }

            if (empty($_POST['Password'])) {
                $errors[] = 'Mật khẩu không được để trống';
            }

            if (empty($_POST['Role'])) {
                $errors[] = 'Vai trò không được để trống';
            }

            if (empty($_POST['EmployeeID'])) {
                $errors[] = 'Mã nhân viên không được để trống';
            }

           
        }


        if (!empty($errors)) {
            throw new Exception(implode(', ', $errors));
        }
        return $errors;
    }


    function addUser($Username, $Password, $Role, $EmployeeID)
    {
        try {
            // Kiểm tra dữ liệu đầu vào
            $this->validateDepartmentData();

            // Tiếp tục thêm bộ phận nếu dữ liệu hợp lệ
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "INSERT INTO users ( Username, Password, Role, EmployeeID) VALUES ( ?, ?, ?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$Username, $Password, $Role, $EmployeeID]);
                return true;
            }
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        } catch (Exception $ex) {
            echo "Lỗi: " . $ex->getMessage();
            return false;
        }
    }

    public function getUserById($EmployeeID)
    {
        try {
            $EmployeeID = $_GET['id'];
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "SELECT * FROM users WHERE EmployeeID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$EmployeeID]);
                $row = $stmt->fetch();
                if ($row) {
                    // Tạo một đối tượng Department từ dữ liệu trong bản ghi và trả về
                    return new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                } else {
                    // Không tìm thấy bản ghi phù hợp với ID
                    return null;
                }
            }
        } catch (PDOException $e) {
            // Xử lý ngoại lệ nếu có
            return null;
        }
    }
    public function searchUser($keyword) {
        // Kiểm tra nếu keyword là chuỗi rỗng thì không cần thực hiện truy vấn
        if (empty($keyword)) {
            return [];
        }
    
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        if ($conn != null) {
            $conn->query("USE db_tlu");
            $sql = "SELECT * FROM users WHERE EmployeeID LIKE :keyword OR Username LIKE :keyword OR Password LIKE :keyword OR Role LIKE :keyword ";
            $param = "%" . $keyword . "%";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':keyword', $param, PDO::PARAM_STR);
            $stmt->execute();
            $users = [];
            while( $row  = $stmt->fetch()){
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                $users[] = $user;
            }
            
            return $users;
        } else {
            return [];
        }
    }
    function updateUser($Username, $Password, $Role, $EmployeeID)
    {
        try {
            $EmployeeID = $_GET['id'];
            
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "UPDATE users SET Username=?, Password=?, Role=? WHERE EmployeeID=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$Username, $Password, $Role, $EmployeeID]);
                return true;
            }
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
    public function getUsersWithLimit($offset, $limit) {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        
        if ($conn != null) {
            $conn->query('USE db_tlu');
            $sql = "SELECT * FROM users ORDER BY EmployeeID DESC LIMIT :limit OFFSET :offset ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            $users = [];
            while ($row = $stmt->fetch()) {
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                $users[] = $user;
            }
            return $users;
        } else {
            return [];
        }
    }
    function deleteUser($EmployeeID)
    {
        try {
            $EmployeeID = $_GET['id'];
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "DELETE FROM users WHERE EmployeeID=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$EmployeeID]);
                return true;
            }
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
}
