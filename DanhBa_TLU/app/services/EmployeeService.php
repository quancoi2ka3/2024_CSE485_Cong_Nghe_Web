<?php 
require_once APP_ROOT.'/app/models/Employee.php';

class EmployeeService {
   
    public function getAllEmployees() {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        
       if($conn !=null){
          $conn->query('USE db_tlu');
          $sql = "SELECT * FROM employees ORDER BY EmployeeID DESC";
          $stmt = $conn->query($sql);
          $employees=[];
          while($row = $stmt->fetch()){
            $employee = new Employee($row["EmployeeID"],$row["FullName"],$row["Address"],$row["Email"],$row["MobilePhone"],$row["Position"],$row["Avatar"],$row["DepartmentID"]);   
            $employees[]=$employee;          
       }
       return $employees;
    }

}

public function getAllDepartments(){
    $dbconnection=new DBConnection();
    $conn= $dbconnection->getConnection();
 
    
    if($conn != null){
        $conn->query('USE db_tlu');
        $sql= 'SELECT * FROM departments';
        $stmt = $conn->query($sql);
        $departments = []; 
        if($stmt){
            while($row = $stmt->fetch()){
                $departments[$row['DepartmentID']] = $row['DepartmentName']; 
            }
        }
    }
    return $departments;
}
public function getEmployeeByID($employeeid) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();

    if ($conn != null) {
        $conn->query('USE db_tlu');
        $sql = "SELECT * FROM employees WHERE EmployeeID = :employeeID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':employeeID', $employeeid);
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row) {
    
            $employee = new Employee($row["EmployeeID"], $row["FullName"], $row["Address"], $row["Email"], $row["MobilePhone"], $row["Position"], $row["Avatar"], $row["DepartmentID"]);
            return $employee;
        } else {
          
            return null;
        }
    } else {
      
        return null;
    }
}
public function searchEmployee($keyword) {
    // Kiểm tra nếu keyword là chuỗi rỗng thì không cần thực hiện truy vấn
    if (empty($keyword)) {
        return [];
    }

    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();
    if ($conn != null) {
        $conn->query("USE db_tlu");
        $sql = "SELECT * FROM employees WHERE EmployeeID LIKE :keyword OR FullName LIKE :keyword OR Address LIKE :keyword OR Email LIKE :keyword OR MobilePhone LIKE :keyword OR Position LIKE :keyword OR Avatar LIKE :keyword OR DepartmentID LIKE :keyword";
        $param = "%" . $keyword . "%";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':keyword', $param, PDO::PARAM_STR);
        $stmt->execute();
        $result  = $stmt->fetchAll();
        
        return $result;
    } else {
        return [];
    }
}



public function addEmployee($employeeid,$fullname, $address, $email, $mobilephone, $position,$avatar, $department_id) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();

    if ($conn != null) {
        $conn->query('USE db_tlu');
        
        // Chuẩn bị câu truy vấn SQL để chèn dữ liệu vào bảng employees
        $sql = "INSERT INTO employees (EmployeeID,FullName, Address, Email, MobilePhone, Position,Avatar,DepartmentID) VALUES (:employeeid, :fullname, :address, :email, :mobilephone, :position, :avatar ,:department_id)";
        
        // Sử dụng prepared statements để tránh tấn công SQL Injection
        $stmt = $conn->prepare($sql);

        // Bind các tham số vào câu truy vấn
        $stmt->bindParam(':employeeid', $employeeid);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobilephone', $mobilephone);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':avatar', $avatar);
        $stmt->bindParam(':department_id', $department_id);
        $result = $stmt->execute();
        $stmt->closeCursor();
        if($result) {

            echo '<script>alert("Employee updated successfully.");</script>';
        } else {
        
            echo '<script>alert("Failed to update employee.");</script>';
        }

        return $result;
    } else {
        echo '<script>alert("Database connection failed.");</script>';
        return false;
    }
   
}


public function updateEmployee($employeeID, $fullname, $address, $email, $mobilephone, $position, $avatar, $department_id) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();

    if ($conn != null) {
        $conn->query('USE db_tlu');
        $sql = "UPDATE employees SET FullName = :fullname, Address = :address, Email = :email, MobilePhone = :mobilephone, Position = :position, Avatar = :avatar, DepartmentID = :department_id WHERE EmployeeID = :employeeID";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':employeeID', $employeeID);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobilephone', $mobilephone);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':avatar', $avatar);
        $stmt->bindParam(':department_id', $department_id);

        $result = $stmt->execute();
        $stmt->closeCursor();

        if($result) {
            echo 'Employee updated successfully.';
        } else {
            echo 'Failed to update employee.';
        }
        return $result;
    } else {
        echo 'Database connection failed.';
        return false;
    }
    

}

public function getEmployeesWithLimit($offset, $limit) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();
    
    if ($conn != null) {
        $conn->query('USE db_tlu');
        $sql = "SELECT * FROM employees LIMIT :limit OFFSET :offset";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $employees = [];
        while ($row = $stmt->fetch()) {
            $employee = new Employee($row["EmployeeID"], $row["FullName"], $row["Address"], $row["Email"], $row["MobilePhone"], $row["Position"], $row["Avatar"], $row["DepartmentID"]);
            $employees[] = $employee;
        }
        return $employees;
    } else {
        return [];
    }
}



public function deleteEmployeeAndUsers($employeeID) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();

    if ($conn != null) {
        try {
            $conn->query('USE db_tlu');
            $conn->beginTransaction();
            $sqlDeleteUsers = "DELETE FROM users WHERE EmployeeID = :employeeID";
            $stmtDeleteUsers = $conn->prepare($sqlDeleteUsers);
            $stmtDeleteUsers->bindParam(':employeeID', $employeeID);
            $stmtDeleteUsers->execute();

            $sqlDeleteEmployees = "DELETE FROM employees WHERE EmployeeID = :employeeID";
            $stmtDeleteEmployees = $conn->prepare($sqlDeleteEmployees);
            $stmtDeleteEmployees->bindParam(':employeeID', $employeeID);
            $stmtDeleteEmployees->execute();
            $conn->commit();

            return true;
        } catch (PDOException $e) {
            $conn->rollBack();
            echo "Error: " . $e->getMessage();
            return false;
        }
    } else {
        return false;
    }
}



}
?>
