

<?php
require_once(APP_ROOT . '/app/models/Department.php');

class DepartmentService
{
    function getAllDepartments()
    {
        try {
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "SELECT * FROM departments ";
                $stmt = $conn->query($sql);
                $departments = [];
                while ($row = $stmt->fetch()) {
                    $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                    $departments[] = $department;
                }
                return $departments;
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
            if (empty($_POST['DepartmentName'])) {
                $errors[] = 'Tên phòng ban không được để trống';
            }

            if (empty($_POST['Address'])) {
                $errors[] = 'Địa chỉ không được để trống';
            }

            if (empty($_POST['Email']) || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email không hợp lệ';
            }

            if (empty($_POST['Phone']) || !preg_match('/^\d+$/', $_POST['Phone'])) {
                $errors[] = 'Số điện thoại không hợp lệ';
            }

            if (isset($_FILES['Logo']) && !empty($_FILES['Logo']['name'])) {
                $allowedExtensions = ['jpg', 'png', 'gif'];
                $extension = pathinfo($_FILES['Logo']['name'], PATHINFO_EXTENSION);
                if (!in_array($extension, $allowedExtensions)) {
                    $errors[] = 'Định dạng file logo không hợp lệ';
                }
            }

            if (empty($_POST['Website'])) {
                $errors[] = 'Website không được để trống';
            }

            if (empty($_POST['ParentDepartmentID'])) {
                $errors[] = 'ID Phòng ban trực thuộc không được để trống';
            }
        }


        if (!empty($errors)) {
            throw new Exception(implode(', ', $errors));
        }
        return $errors;
    }


    function addDepartment($DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID)
    {
        try {
            // Kiểm tra dữ liệu đầu vào
            $this->validateDepartmentData();

            // Tiếp tục thêm bộ phận nếu dữ liệu hợp lệ
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "INSERT INTO departments ( DepartmentName, Address, Email, Phone,Logo, Website,ParentDepartmentID) VALUES ( ?, ?, ?,?, ?, ?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID]);
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

    public function getDepartmentById($DepartmentID)
    {
        try {
            $DepartmentID =$_GET['id'];
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "SELECT * FROM departments WHERE DepartmentID = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$DepartmentID]);
                $row = $stmt->fetch();
                if ($row) {
                    // Tạo một đối tượng Department từ dữ liệu trong bản ghi và trả về
                    return new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
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
    function updateDepartment($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID)
    {
        try {
            $DepartmentID =$_GET['id'];
            $ParentDepartmentID = $_POST['ParentDepartmentID'];
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null && $ParentDepartmentID != null) {
                $sql = "UPDATE departments SET DepartmentName=?, Address=?, Email=?, Phone=?, Logo=?, Website=?, ParentDepartmentID=? WHERE DepartmentID=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID, $DepartmentID]);
                return true;
            }
            if($conn != null){
                $sql = "UPDATE departments SET DepartmentName=?, Address=?, Email=?, Phone=?, Logo=?, Website=? WHERE DepartmentID=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $DepartmentID]);
                return true;
            }
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }

    function deleteDepartment($DepartmentID)
    {
        try {
            $DepartmentID =$_GET['id'];
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "DELETE FROM departments WHERE DepartmentID=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$DepartmentID]);
                return true;
            }
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
}
