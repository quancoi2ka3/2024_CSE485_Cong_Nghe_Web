CREATE TABLE Departments (
  DepartmentID INT PRIMARY KEY AUTO_INCREMENT,
  DepartmentName VARCHAR(255) NOT NULL,
  Address VARCHAR(255) DEFAULT NULL,
  Email VARCHAR(255) DEFAULT NULL,
  Phone VARCHAR(20) DEFAULT NULL,
  Logo VARCHAR(255) DEFAULT NULL,
  Website VARCHAR(255) DEFAULT NULL,
  ParentDepartmentID INT DEFAULT NULL,
  FOREIGN KEY (ParentDepartmentID) REFERENCES Departments(DepartmentID) ON DELETE SET NULL
);
CREATE TABLE Employees (
  EmployeeID INT PRIMARY KEY AUTO_INCREMENT,
  FullName VARCHAR(255) NOT NULL,
  Address VARCHAR(255) DEFAULT NULL,
  Email VARCHAR(255) DEFAULT NULL,
  MobilePhone VARCHAR(20) DEFAULT NULL,
  Position VARCHAR(255) DEFAULT NULL,
  Avatar VARCHAR(255) DEFAULT NULL,
  DepartmentID INT NOT NULL,
  FOREIGN KEY (DepartmentID) REFERENCES Departments(DepartmentID)
);
CREATE TABLE Users (
  Username VARCHAR(255) PRIMARY KEY,
  Password VARCHAR(255) NOT NULL,  -- Sử dụng thuật toán băm mật khẩu an toàn
  Role ENUM('admin', 'regular') NOT NULL DEFAULT 'regular',
  EmployeeID INT NOT NULL UNIQUE,
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

INSERT INTO Departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID)
VALUES
    ('Khoa Công nghệ thông tin', '123 Đường ABC, Quận XYZ, TP. HCM', 'kcntt@tlu.edu.vn', '123456789', 'logo1.jpg', 'http://kcntt.tlu.edu.vn', NULL),
    ('Khoa Kỹ thuật xây dựng', '456 Đường XYZ, Quận ABC, TP. HCM', 'ktxd@tlu.edu.vn', '987654321', 'logo2.jpg', 'http://ktxd.tlu.edu.vn', NULL),
    ('Khoa Quản lý xây dựng', '789 Đường XYZ, Quận ABC, TP. HCM', 'kqlxd@tlu.edu.vn', '555555555', 'logo3.jpg', 'http://kqlxd.tlu.edu.vn', NULL),
    ('Khoa Khoa học cơ bản', '012 Đường ABC, Quận XYZ, TP. HCM', 'khcb@tlu.edu.vn', '333333333', 'logo4.jpg', 'http://khcb.tlu.edu.vn', NULL),
    ('Khoa Kỹ thuật Công trình Thủy', '789 Đường XYZ, Quận ABC, TP. HCM', 'kktct@tlu.edu.vn', '666666666', 'logo5.jpg', 'http://kktct.tlu.edu.vn', NULL),
    ('Khoa Kỹ thuật Công trình Giao thông', '012 Đường ABC, Quận XYZ, TP. HCM', 'kktcgt@tlu.edu.vn', '777777777', 'logo6.jpg', 'http://kktcgt.tlu.edu.vn', NULL),
    ('Khoa Điện - Điện tử', '123 Đường XYZ, Quận ABC, TP. HCM', 'kddt@tlu.edu.vn', '888888888', 'logo7.jpg', 'http://kddt.tlu.edu.vn', NULL),
    ('Khoa Công nghệ hóa học', '456 Đường ABC, Quận XYZ, TP. HCM', 'knhh@tlu.edu.vn', '999999999', 'logo8.jpg', 'http://knhh.tlu.edu.vn', NULL),
    ('Khoa Khoa học và Kỹ thuật Môi trường', '789 Đường XYZ, Quận ABC, TP. HCM', 'khktmt@tlu.edu.vn', '111111111', 'logo9.jpg', 'http://khktmt.tlu.edu.vn', NULL),
    ('Khoa Kỹ thuật Hạ tầng và Giao thông', '012 Đường ABC, Quận XYZ, TP. HCM', 'kkthtgt@tlu.edu.vn', '222222222', 'logo10.jpg', 'http://kkthtgt.tlu.edu.vn', NULL),
    ('Khoa Kỹ thuật Hệ thống Điện', '123 Đường XYZ, Quận ABC, TP. HCM', 'kkthtd@tlu.edu.vn', '333333333', 'logo11.jpg', 'http://kkthtd.tlu.edu.vn', NULL),
    ('Khoa Công nghệ Sinh học', '456 Đường ABC, Quận XYZ, TP. HCM', 'kcnsh@tlu.edu.vn', '444444444', 'logo12.jpg', 'http://kcnsh.tlu.edu.vn', NULL),
    ('Khoa Kỹ thuật Công nghệ Thông tin', '789 Đường XYZ, Quận ABC, TP. HCM', 'kkcn@tlu.edu.vn', '555555555', 'logo13.jpg', 'http://kkcn.tlu.edu.vn', NULL),
    ('Khoa Quản lý xây dựng - Công nghệ', '012 Đường ABC, Quận XYZ, TP. HCM', 'klxd_cn@tlu.edu.vn', '666666666', 'logo14.jpg', 'http://klxd_cn.tlu.edu.vn', NULL),
    ('Khoa Khoa học và Kỹ thuật Vật liệu', '123 Đường XYZ, Quận ABC, TP. HCM', 'khktvl@tlu.edu.vn', '777777777', 'logo15.jpg', 'http://khktvl.tlu.edu.vn', NULL)

