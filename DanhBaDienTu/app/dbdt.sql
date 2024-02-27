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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table dbdt.categories: ~10 rows (approximately)
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

-- Dumping data for table dbdt.departments: ~10 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentID`) VALUES
	(1, 'Human Resources', '7945 Ryan Center', 'augo0@studiopress.com', '560-117-1713', 'http://dummyimage.com/189x100.png/cc0000/ffffff', 'https://quantcast.com/suspendisse/accumsan/tortor/quis.json?sit=cubilia&amet=curae&nulla=donec&quisque=pharetra&arcu=magna&libero=vestibulum&rutrum=aliquet&ac=ultrices', 1),
	(2, 'Marketing', '2 Westerfield Drive', 'dhryskiewicz1@sohu.com', '957-519-1045', 'http://dummyimage.com/222x100.png/cc0000/ffffff', 'https://slideshare.net/cursus/id/turpis.jpg?non=id&mattis=ligula&pulvinar=suspendisse&nulla=ornare&pede=consequat&ullamcorper=lectus&augue=in&a=est&suscipit=risus&nulla=auctor', 2),
	(3, 'Support', '04883 Gateway Pass', 'lmacgahey2@ftc.gov', '538-846-0283', 'http://dummyimage.com/181x100.png/cc0000/ffffff', 'https://china.com.cn/eu/orci/mauris/lacinia/sapien.png', 3),
	(4, 'Support', '94422 Rowland Circle', 'btoothill3@nhs.uk', '546-186-4751', 'http://dummyimage.com/187x100.png/5fa2dd/ffffff', 'http://google.com/pellentesque/at/nulla/suspendisse.xml', 4),
	(5, 'Services', '74 Rusk Lane', 'aconnolly4@disqus.com', '358-420-6530', 'http://dummyimage.com/204x100.png/5fa2dd/ffffff', 'http://google.co.jp/sed/sagittis/nam/congue.html', 5),
	(6, 'Services', '6058 Manitowish Plaza', 'rbillingham5@harvard.edu', '425-366-7636', 'http://dummyimage.com/102x100.png/ff4444/ffffff', 'https://harvard.edu/condimentum/curabitur.json', 6),
	(7, 'Product Management', '8 Scofield Avenue', 'amalafe6@tmall.com', '109-345-2886', 'http://dummyimage.com/161x100.png/dddddd/000000', 'https://bluehost.com/urna/ut/tellus/nulla/ut.js', 7),
	(8, 'Services', '1416 Truax Terrace', 'vwhittington7@earthlink.net', '686-753-2100', 'http://dummyimage.com/170x100.png/ff4444/ffffff', 'https://squarespace.com/curabitur.json', 8),
	(9, 'Engineering', '1771 Scofield Parkway', 'jdedrick8@reddit.com', '435-268-5498', 'http://dummyimage.com/194x100.png/5fa2dd/ffffff', 'https://hud.gov/ridiculus.html', 9),
	(10, 'Sales', '826 Kenwood Avenue', 'rcochrane9@cornell.edu', '174-999-3349', 'http://dummyimage.com/103x100.png/cc0000/ffffff', 'http://usnews.com/lobortis/sapien.jsp', 10);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL CHECK (`Role` in ('admin','regular')),
  `EmployeeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Username`),
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbdt.users: ~10 rows (approximately)
INSERT INTO `users` (`Username`, `Password`, `Role`, `EmployeeID`) VALUES
	('agomme6', 'vW6}rXwn', 'regular', 7),
	('anhnguyen', '222222', 'admin', 3),
	('bgatrill7', 'iC4}IB1<hobIVJ', 'regular', 8),
	('cclaige9', 'uQ5,LXuH', 'regular', 10),
	('ctkling', '111111', 'admin', 2),
	('lmoseby5', 'oF2!kkwXu', 'regular', 6),
	('mquan', '123456', 'admin', 1),
	('qhuy', '333333', 'admin', 4),
	('tcathrall8', 'hH6~o_FCY@zo', 'regular', 9),
	('user1', '444444', 'regular', 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
