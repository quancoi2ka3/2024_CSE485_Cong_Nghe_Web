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


-- Dumping database structure for dbdt
CREATE DATABASE IF NOT EXISTS `dbdt` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci */;
USE `dbdt`;

-- Dumping structure for table dbdt.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbdt.categories: ~8 rows (approximately)
INSERT INTO `categories` (`category_id`, `parent_id`, `category_name`) VALUES
	(1, NULL, 'Trang chủ'),
	(2, NULL, 'Giới Thiệu'),
	(3, 2, 'Lịch sử hình thành'),
	(4, 2, 'Chức năng chính'),
	(5, 2, 'Thống kê danh bạ'),
	(6, NULL, 'Tra cứu danh bạ'),
	(7, 6, 'Danh bạ đơn vị'),
	(8, 6, 'Danh bạ nhân viên'),
	(9, NULL, 'Tin tức & sự kiện'),
	(10, NULL, 'Liên hệ');

-- Dumping structure for table dbdt.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int(11) NOT NULL,
  `DepartmentName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `ParentDepartmentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentID` (`ParentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbdt.departments: ~18 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentID`) VALUES
	(0, '33', 'quanmn', 'hanoi', 'abcdzzz@gmail.com', '2138885444', NULL, NULL),
	(1, 'Khoa Công Nghệ Thông Tin', 'Nhà C1', 'vpkcntt@tlu.edu.vn', '(+84)-024 3 5632211', '../../../public/images/logo_cntt.png', 'https://cse.tlu.edu.vn/', 1),
	(2, 'Khoa Công Trình', 'P402, Tầng 4, nhà A1', 'vpkhoacongtrinh@tlu.edu.vn', '(024) 3852.2024', 'public/assets/images/logo_khoacongtrinh', 'https://ce.tlu.edu.vn/', 2),
	(3, 'Khoa Kinh Tế và Quản lý', 'P.206-207 A5', 'KhoaK@tlu.edu.vn', '(04) 3852.2028', 'http://dummyimage.com/181x100.png/cc0000/ffffff', 'https://fem.tlu.edu.vn/', 3),
	(4, 'Khoa Hóa và Môi Trường', 'P316 nhà A5', 'vpkhoamt@tlu.edu.vn', '(024) 3564.0704', 'http://dummyimage.com/187x100.png/5fa2dd/ffffff', 'https://env.tlu.edu.vn/', 4),
	(5, 'Khoa Điện-Điện tử', 'P.401, 403 A1', 'vpkhoae@tlu.edu.vn', '(024) 3852.8025', 'http://dummyimage.com/204x100.png/5fa2dd/ffffff', 'https://ee.tlu.edu.vn/', 5),
	(6, 'Khoa Cơ Khí', 'P.312-314 A1', 'KhoaM@tlu.edu.vn', '(04) 3853.3082', 'http://dummyimage.com/102x100.png/ff4444/ffffff', 'https://khoacokhi.tlu.edu.vn/en-us/', 6),
	(7, 'Trung tâm Đào tạo quốc tế', 'Phòng 111 -Nhà KTX số 4', 'sie@tlu.edu.vn', '(0243) 564-2795 / (0243) 853-2746', 'http://dummyimage.com/161x100.png/dddddd/000000', 'https://sie.tlu.edu.vn/', 7),
	(8, ' Khoa Luật và lý luận chính trị', '175 Tây Sơn, Đống Đa, Hà Nội', 'phonghcth@tlu.edu.vn', '(024) 38522201 ', 'http://dummyimage.com/170x100.png/ff4444/ffffff', 'https://pl.tlu.edu.vn/', 8),
	(9, 'Viện ĐT và KHUD Miền Trung', 'Trường Đại Học Thủy Lợi', 'vdtkh@tlu.edu.vn', '0259.3823027', 'http://dummyimage.com/194x100.png/5fa2dd/ffffff', 'http://vienmientrung.edu.vn/', 9),
	(10, 'Phân hiệu Đại học Thủy Lợi', 'Số 2 Trường Sa, P.17, Q. Bình Thạnh', 'phanhieu@tlu.edu.vn', '(84).28.38400532', 'http://dummyimage.com/103x100.png/cc0000/ffffff', 'https://tlus.edu.vn/', 10),
	(11, 'khó', 'abcd', '1234', '88888', 'map.png', 'jqk.com', NULL),
	(14, 'quan', 'dddd', 'abc@gmail.com', '9999222', NULL, NULL, NULL),
	(15, 'gggg', 'uk', '123444@gmail.com', '12312312', NULL, 'uk', NULL),
	(20, 'phongvukhi', 'p430a2', 'pvk@gmail.com', '9430013322', NULL, 'p430a2', NULL),
	(21, 'phongvukhi', 'p430a2', 'pvk@gmail.com', '9430013322', NULL, 'p430a2', NULL),
	(25, 'phongvukhi', 'p430a2', 'pvk@gmail.com', '9430013322', NULL, 'p430a2', NULL),
	(27, 'phongvukhi', 'p430a2', 'pvk@gmail.com', '9430013322', NULL, 'p430a2', NULL);

-- Dumping structure for table dbdt.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeID` int(11) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobilePhone` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `DepartmentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `DepartmentID` (`DepartmentID`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`DepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbdt.employees: ~10 rows (approximately)
INSERT INTO `employees` (`EmployeeID`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentID`) VALUES
	(1, 'Eduino Walewski', '91 Larry Park', 'ewalewski0@state.gov', '934-710-8529', 'Research Nurse', 'https://robohash.org/consequaturincumque.png?size=50x50&set=set1', 1),
	(2, 'Skell Trounson', '65072 Dottie Point', 'strounson1@seattletimes.com', '388-497-4849', 'Accountant III', 'https://robohash.org/fugaquoipsa.png?size=50x50&set=set1', 2),
	(3, 'Huntlee Bagshawe', '86 Russell Lane', 'hbagshawe2@ebay.com', '208-872-6949', 'Product Engineer', 'https://robohash.org/repellendusetearum.png?size=50x50&set=set1', 3),
	(4, 'Mathilde McGaugie', '28281 Sage Parkway', 'mmcgaugie3@odnoklassniki.ru', '650-986-6069', 'Junior Executive', 'https://robohash.org/evenietquiquasi.png?size=50x50&set=set1', 4),
	(5, 'Seumas Sille', '810 Village Green Road', 'ssille4@ucla.edu', '591-127-2979', 'Environmental Tech', 'https://robohash.org/quodelenitilaudantium.png?size=50x50&set=set1', 5),
	(6, 'Phillip Acheson', '946 Debs Court', 'pacheson5@etsy.com', '872-875-2266', 'Research Nurse', 'https://robohash.org/ametassumendamaiores.png?size=50x50&set=set1', 6),
	(7, 'Nickie Johannes', '8617 Pearson Point', 'njohannes6@mapquest.com', '854-336-0585', 'Nurse Practicioner', 'https://robohash.org/utquamet.png?size=50x50&set=set1', 7),
	(8, 'Keith Bessant', '76 Oneill Pass', 'kbessant7@chron.com', '714-971-1775', 'Office Assistant II', 'https://robohash.org/delenitirepudiandaeaperiam.png?size=50x50&set=set1', 8),
	(9, 'Lilith Villa', '5161 Sheridan Way', 'lvilla8@biglobe.ne.jp', '423-529-8416', 'Geological Engineer', 'https://robohash.org/nonplaceateveniet.png?size=50x50&set=set1', 9),
	(10, 'Denny Stelle', '7 Brown Hill', 'dstelle9@vistaprint.com', '883-698-7970', 'Assistant Manager', 'https://robohash.org/dolorimpeditrerum.png?size=50x50&set=set1', 10);

-- Dumping structure for table dbdt.news
CREATE TABLE IF NOT EXISTS `news` (
  `NewID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Content` varchar(255) DEFAULT NULL,
  `Public_Date` datetime DEFAULT NULL,
  `URL_Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NewID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbdt.news: ~10 rows (approximately)
INSERT INTO `news` (`NewID`, `Title`, `Content`, `Public_Date`, `URL_Image`) VALUES
	(1, 'Việt Nam đạt được thành tựu kinh tế ấn tượng', 'Nội dung bài viết về thành tựu kinh tế...', '2024-02-29 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(2, 'Ứng dụng mới giúp cuộc sống dễ dàng hơn', 'Bài viết giới thiệu về ứng dụng tiện ích...', '2024-02-28 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(3, 'Samsung ra mắt điện thoại Galaxy S25 mới', 'Tin tức ra mắt sản phẩm mới của Samsung...', '2024-02-27 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(4, 'Giải pháp bảo vệ môi trường hiệu quả', 'Bài viết chia sẻ các giải pháp bảo vệ môi trường...', '2024-02-26 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(5, 'Bí quyết sống khỏe mạnh mỗi ngày', 'Các mẹo giúp bạn duy trì sức khỏe tốt...', '2024-02-25 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(6, 'Du lịch Đà Nẵng: Thành phố đáng đến', 'Kinh nghiệm du lịch, khám phá Đà Nẵng xinh đẹp...', '2024-02-24 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(7, 'Công nghệ trí tuệ nhân tạo phát triển vượt bậc', 'Những ứng dụng thú vị của trí tuệ nhân tạo...', '2024-02-23 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(8, 'Tuyệt chiêu nấu món phở bò thơm ngon', 'Hướng dẫn chi tiết cách nấu phở bò chuẩn vị Hà Nội...', '2024-02-22 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(9, 'Các bộ phim điện ảnh Việt Nam hay nhất', 'Top 5 bộ phim điện ảnh Việt Nam đáng xem...', '2024-02-21 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
	(10, 'Những địa điểm du lịch hấp dẫn tại châu Âu', 'Khám phá những địa danh nổi tiếng ở châu Âu...', '2024-02-20 00:00:00', 'https://picsum.photos/seed/picsum/200/300');

-- Dumping structure for table dbdt.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Role` varchar(50) DEFAULT 'admin;regular',
  `EmployeeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbdt.users: ~10 rows (approximately)
INSERT INTO `users` (`ID`, `Username`, `Password`, `Role`, `EmployeeID`) VALUES
	(1, 'aaa', 'vW6}rXwn', 'regular', 7),
	(2, 'bbb', '222222', 'admin', 3),
	(3, 'ccc', 'iC4}IB1<hobIVJ', 'regular', 8),
	(4, 'ddd', 'uQ5,LXuH', 'regular', 10),
	(5, 'quan', '111111', 'admin', 2),
	(6, 'aaavvv', 'oF2!kkwXu', 'regular', 6),
	(7, 'anh', '123456', 'admin', 1),
	(8, 'huy', '333333', 'admin', 4),
	(9, 'hhhh', 'hH6~o_FCY@zo', 'regular', 9),
	(10, 'linh', '444444', 'admin', 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
