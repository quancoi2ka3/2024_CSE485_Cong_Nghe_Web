<?php 
require_once APP_ROOT.'/app/models/Employee.php';

class EmployeeService {
    public function getAllEmployees() {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();
        
       if($conn !=null){
          $conn->query('USE dbdt');
          $sql = "SELECT * FROM employees";
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
        $conn->query('USE dbdt');
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
public function addEmployee($employeeid,$fullname, $address, $email, $mobilephone, $position,$avatar, $department_id) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();

    if ($conn != null) {
        $conn->query('USE dbdt');
        
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

        // Thực thi câu truy vấn
        $result = $stmt->execute();

        // Đóng prepared statement
        $stmt->closeCursor();

        // Trả về true nếu thêm thành công, ngược lại trả về false
        return $result;
    } else {
        // Nếu không có kết nối đến cơ sở dữ liệu, trả về false
        return false;
    }
}
// EmployeeService.php

// EmployeeService.php

public function getEmployeeByID($employeeID) {
    $dbconnection = new DBConnection();
    $conn = $dbconnection->getConnection();

    if ($conn != null) {
        $conn->query('USE dbdt');
        
        $sql = "SELECT * FROM employees WHERE EmployeeID = :employeeID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':employeeID', $employeeID);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem có dữ liệu được trả về không
        if ($row) {
            // Tạo một đối tượng Employee từ dữ liệu trong cơ sở dữ liệu
            $employee = new Employee($row["EmployeeID"], $row["FullName"], $row["Address"], $row["Email"], $row["MobilePhone"], $row["Position"], $row["Avatar"], $row["DepartmentID"]);
            return $employee;
        } else {
            // Trả về null nếu không tìm thấy nhân viên
            return null;
        }
    } else {
        return null;
    }
}



}
?>
