<?php
    class Database{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db_name = "dbdt";
        private $conn = null;
        private $result = null;
        public function connect(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if(!$this->conn){
                echo "Ket noi that bai!";
                exit();
            }
            else{
                //khac phuc tinh trang loi phong tieng viet
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }

        //phuong thuc: thuc thi cau lenh truy van
        public function execute($sql){

            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        //phuong thuc: lay du lieu
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        

        //phuong thuc: lay toan bo du lieu
        public function getAllUser($table){
            
            $sql = "select * from $table ORDER BY created_at DESC";
            $this->execute($sql);
            if($this->num_rows() == 0){
                $data = 0;
            }
            else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }
       
        //phuong thuc dem so ban ghi
        public function num_rows(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
        }

        //phuong thuc them du lieu
        public function insertUser($Username, $Password, $Role){
            //Kiểm tra xem Role có giá trị là admin or regular hay không
           try{
            if (!in_array($Role, ['admin', 'regular'])) {
              throw new InvalidArgumentException('Invalid Role. Must be "admin" or "regular".');
            }
            //Kiểm tra xem Username đã tồn tại trong database chưa
            $sql = "SELECT * FROM users WHERE Username = '$Username'";
            $this->execute($sql);
            if ($this->num_rows() == 0) {
              //Nếu chưa tồn tại thì thêm mới
              $sql = "INSERT INTO users(Username, Password, Role) VALUES('$Username', '$Password', '$Role')";
              return $this->execute($sql);
            } else {
              return false;
            }
           } catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
           }
        }

        //hàm check tên đăng nhập đã tồn tại chưa
        public function checkUsername($Username){
            $sql = "SELECT * FROM users WHERE Username = '$Username'";
            $this->execute($sql);
            if($this->num_rows() == 0){
                return true;
            }
            else{
                return false;
            }
        }
        //thêm vào cả 1 bảng users và employees
        public function insertUserEmployee($Username, $Password, $Role, $EmployeeID, $FullName, $Address, $Email, $MobilePhone, $Position, $Avatar){
            try {
                // Bắt đầu một giao dịch
                $this->conn->begin_transaction();
        
                // Thêm bản ghi vào bảng employees
                $sql1 = "INSERT INTO employees(EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar) VALUES('$EmployeeID', '$FullName', '$Address', '$Email', '$MobilePhone', '$Position', '$Avatar')";
                $this->execute($sql1);
        
                // Thêm bản ghi vào bảng users
                $sql2 = "INSERT INTO users(Username, Password, Role, EmployeeID) VALUES('$Username', '$Password', '$Role', '$EmployeeID')";
                $this->execute($sql2);
        
                // Commit giao dịch
                $this->conn->commit();
        
                return true; // Trả về true nếu cả hai truy vấn đều thành công
            } catch (Exception $e) {
                echo "Transaction failed: " . $e->getMessage();
                return false; // Trả về false nếu có lỗi xảy ra trong quá trình thêm
            }
        }
            //phuong thuc sua du lieu
            public function updateUserEmployee($Username, $Password, $Role, $EmployeeID, $FullName, $Address, $Email, $MobilePhone, $Position, $Avatar) {
                try {
                    $sql1 = "UPDATE employees SET FullName = '$FullName', Address = '$Address', Email = '$Email', MobilePhone = '$MobilePhone', Position = '$Position', Avatar = '$Avatar' WHERE EmployeeID = $EmployeeID";
                    $sql2 = "UPDATE users SET Password = '$Password', Role = '$Role' WHERE Username = '$Username'";
                    
                    $this->execute($sql1);
                    $this->execute($sql2);
            
                    return true; // Trả về true nếu cả hai truy vấn đều thành công
                } catch (Exception $e) {
                    echo "Transaction failed: " . $e->getMessage();
                    return false; // Trả về false nếu có lỗi xảy ra trong quá trình cập nhật
                }
            }
            
        //lay dl ra de edit
        public function getUserEmployee($Username, $table1, $table2){
            $sql = "SELECT * FROM $table1 JOIN employees ON $table1.EmployeeID = $table2.EmployeeID WHERE users.Username = '$Username'";
            $this->execute($sql);
            if ($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }
            return $data;
        }
        //phuong thuc xoa
        public function deleteUser($Username, $EmployeeID, $table1, $table2) {
            try {
                // Xóa bản ghi từ bảng chứa khóa ngoại (users)
                $sql2 = "DELETE FROM $table2 WHERE Username = '$Username'";
                $this->execute($sql2);
        
                // Xóa bản ghi từ bảng chứa khóa chính (employees)
                $sql1 = "DELETE FROM $table1 WHERE EmployeeID = '$EmployeeID'";
                $this->execute($sql1);
        
                return true; // Trả về true nếu xóa thành công từ cả hai bảng
            } catch (Exception $e) {
                echo "Transaction failed: " . $e->getMessage();
                return false; // Trả về false nếu có lỗi xảy ra trong quá trình xóa
            }
        }
        //lấy EmployeeID trong bảng users ra để xóa dữ liệu bên bảng employees
        public function getEmployeeID($Username, $table2){
            $sql = "SELECT EmployeeID FROM $table2 WHERE Username = '$Username'";
            $this->execute($sql);
            if($this->num_rows() != 0){
                $data = mysqli_fetch_array($this->result);
                return $data['EmployeeID']; // Trả về giá trị EmployeeID duy nhất
            } else {
                return 0; // Trả về 0 nếu không tìm thấy EmployeeID
            }
        }
        
        public function updateUser($Username, $Password, $Role){
            $sql = "update users set Password = '$Password', Role = '$Role' where Username = '$Username'";
            return $this->execute($sql);
        }
        //phuong thuc lay du lieu theo id
        public function getUserByID($id, $table){
            $sql = "SELECT * FROM $table WHERE Username = '$id'";
            $this->execute($sql);
            if($this->num_rows() != 0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }

        //phuong thuc tim kiem
        public function search($key, $table){
            $sql = "SELECT * FROM $table where Role REGEXP '$key' ORDER BY Username DESC";
            $this->execute($sql);
            if($this->num_rows() == 0){
                $data = 0;
            }
            else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }
        
    }
?>