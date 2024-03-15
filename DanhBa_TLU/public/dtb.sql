-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.3.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_tlu
CREATE DATABASE IF NOT EXISTS `db_tlu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci */;
USE `db_tlu`;

-- Dumping structure for table db_tlu.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int(11) NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png',
  `Website` varchar(255) DEFAULT NULL,
  `ParentDepartmentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentID` (`ParentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentID`) REFERENCES `departments` (`DepartmentID`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_tlu.departments: ~29 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentID`) VALUES
	(1, 'Khoa Công nghệ thông tin', '123 Đường ABC, Quận XYZ, TP. HCM', 'kcntt@tlu.edu.vn', '123456789', NULL, 'http://kcntt.tlu.edu.vn', 1),
	(2, 'Khoa Kỹ thuật xây dựng', '456 Đường XYZ, Quận ABC, TP. HCM', 'ktxd@tlu.edu.vn', '987654321', 'logo2.jpg', 'http://ktxd.tlu.edu.vn', NULL),
	(3, 'Khoa Quản lý xây dựng', '789 Đường XYZ, Quận ABC, TP. HCM', 'kqlxd@tlu.edu.vn', '555555555', 'logo3.jpg', 'http://kqlxd.tlu.edu.vn', NULL),
	(4, 'Khoa Khoa học cơ bản', '012 Đường ABC, Quận XYZ, TP. HCM', 'khcb@tlu.edu.vn', '333333333', 'logo4.jpg', 'http://khcb.tlu.edu.vn', NULL),
	(6, 'Khoa Kỹ thuật Công trình Giao thông', '012 Đường ABC, Quận XYZ, TP. HCM', 'kktcgt@tlu.edu.vn', '777777777', 'logo6.jpg', 'http://kktcgt.tlu.edu.vn', NULL),
	(7, 'Khoa Điện - Điện tử', '123 Đường XYZ, Quận ABC, TP. HCM', 'kddt@tlu.edu.vn', '888888888', 'logo7.jpg', 'http://kddt.tlu.edu.vn', NULL),
	(8, 'Khoa Công nghệ hóa học', '456 Đường ABC, Quận XYZ, TP. HCM', 'knhh@tlu.edu.vn', '999999999', 'logo8.jpg', 'http://knhh.tlu.edu.vn', NULL),
	(9, 'Khoa Khoa học và Kỹ thuật Môi trường', '789 Đường XYZ, Quận ABC, TP. HCM', 'khktmt@tlu.edu.vn', '111111111', 'logo9.jpg', 'http://khktmt.tlu.edu.vn', NULL),
	(10, 'Khoa Kỹ thuật Hạ tầng và Giao thông', '012 Đường ABC, Quận XYZ, TP. HCM', 'kkthtgt@tlu.edu.vn', '222222222', 'logo10.jpg', 'http://kkthtgt.tlu.edu.vn', NULL),
	(11, 'Khoa Kỹ thuật Hệ thống Điện', '123 Đường XYZ, Quận ABC, TP. HCM', 'kkthtd@tlu.edu.vn', '333333333', 'logo11.jpg', 'http://kkthtd.tlu.edu.vn', NULL),
	(12, 'Khoa Công nghệ Sinh học', '456 Đường ABC, Quận XYZ, TP. HCM', 'kcnsh@tlu.edu.vn', '444444444', 'logo12.jpg', 'http://kcnsh.tlu.edu.vn', NULL),
	(13, 'Khoa Kỹ thuật Công nghệ Thông tin', '789 Đường XYZ, Quận ABC, TP. HCM', 'kkcn@tlu.edu.vn', '555555555', 'logo13.jpg', 'http://kkcn.tlu.edu.vn', NULL),
	(14, 'Khoa Quản lý xây dựng - Công nghệ', '012 Đường ABC, Quận XYZ, TP. HCM', 'klxd_cn@tlu.edu.vn', '666666666', 'logo14.jpg', 'http://klxd_cn.tlu.edu.vn', NULL),
	(15, 'Khoa Khoa học và Kỹ thuật Vật liệu', '123 Đường XYZ, Quận ABC, TP. HCM', 'khktvl@tlu.edu.vn', '777777777', 'logo15.jpg', 'http://khktvl.tlu.edu.vn', NULL),
	(16, 'Ban Văn Nghệ', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 1),
	(17, 'phongvukhi', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 2),
	(18, 'ban nhậu', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 4),
	(19, 'ban học', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 1),
	(20, 'ban học', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 1),
	(21, 'ban học', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 1),
	(22, 'ban học', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 1),
	(23, 'ban văn hóa', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'https://www.tlu.edu.vn/Portals/0/2014/Logo-WRU.png', 'bvn.com', 3),
	(24, 'ban chém gió', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', '', 'bvn.com', 9),
	(25, 'ban nhảy', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', 'logo_cntt.png', 'bvn.com', 1),
	(26, 'ban đua xe', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', NULL, 'bvn.com', 2),
	(27, 'ban hóng hớt', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', NULL, 'bvn.com', NULL),
	(28, 'ban tia gái', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', NULL, 'bvn.com', 11),
	(29, 'ban trồng cây', 'p430a2', 'nguyenmanhquan17072003@gmail.com', '0968031328', NULL, 'bvn.com', 1),
	(30, 'ban hiếu học', '1', 'nguyenmanhquan17072003@gmail.com', '0968031328', NULL, 'bvn.com', 1);

-- Dumping structure for table db_tlu.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobilePhone` varchar(20) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg',
  `DepartmentID` int(11) NOT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `DepartmentID` (`DepartmentID`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`DepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_tlu.employees: ~14 rows (approximately)
INSERT INTO `employees` (`EmployeeID`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentID`) VALUES
	(1, 'Nam', 'HaNoi', 'nam123@gmail.com', '0129388421', 'IT Help Desk', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 1),
	(2, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(3, 'Anh', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(4, 'Linh', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(7, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(8, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(9, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(10, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(11, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(12, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(13, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(14, 'Quan', 'HCM', 'quan12333@gmail.com', '0234458874', 'PlayGame', 'https://static.vecteezy.com/system/resources/previews/009/292/244/original/default-avatar-icon-of-social-media-user-vector.jpg', 25),
	(20, 'Nhan', 'HCM', 'nguyenmanhquan17072003@gmail.com', '0923912399', 'Dev', '', 1),
	(201, 'Nhan', 'HCM', 'nguyenmanhquan17072003@gmail.com', '0923912399', 'Dev', '', 1);

-- Dumping structure for table db_tlu.users
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` enum('admin','regular') NOT NULL DEFAULT 'regular',
  `EmployeeID` int(11) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_tlu.users: ~5 rows (approximately)
INSERT INTO `users` (`Username`, `Password`, `Role`, `EmployeeID`) VALUES
	('anh', '1', 'admin', 3),
	('huy', '1', 'admin', 1),
	('linh', '1', 'regular', 4),
	('mquan', '1', 'admin', 2),
	('nam', '1', 'regular', 20);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
