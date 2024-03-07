CREATE TABLE categories(
  category_id int NOT NULL AUTO_INCREMENT,
  parent_id int DEFAULT NULL,
  category_name varchar(255) NOT NULL,
  PRIMARY KEY (category_id),
  FOREIGN KEY (parent_id) REFERENCES categories(category_id)
);

INSERT INTO categories (category_id, parent_id, category_name) VALUES
    (1, NULL, 'Thế giới'),
    (2, 1, 'Chính trị'),
    (3, 1, 'Xã hội'),
    (4, 1, 'Giáo dục'),
    (5, NULL, 'Giải trí'),
    (6, 5, 'Điện ảnh'),
    (7, 5, 'Âm nhạc'),
    (8, NULL, 'Thể thao'),
    (9, 8, 'Bóng đá'),
    (10, 8, 'Thể thao điện tử');

SELECT * FROM categories


CREATE TABLE news (
    NewID INTEGER PRIMARY KEY,
    Title VARCHAR(255),
    Content VARCHAR(255),
    Public_Date DATETIME,
    URL_Image VARCHAR(255)
);

INSERT INTO news (NewID , Title, Content, Public_Date,  URL_Image) VALUES
    (1, 'Việt Nam đạt được thành tựu kinh tế ấn tượng', 'Nội dung bài viết về thành tựu kinh tế...', '2024-02-29 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
    (2, 'Ứng dụng mới giúp cuộc sống dễ dàng hơn', 'Bài viết giới thiệu về ứng dụng tiện ích...', '2024-02-28 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
    (3, 'Samsung ra mắt điện thoại Galaxy S25 mới', 'Tin tức ra mắt sản phẩm mới của Samsung...', '2024-02-27 00:00:00', 'https://picsum.photos/seed/picsum/200/300'),
    (4, 'Giải pháp bảo vệ môi trường hiệu quả', 'Bài viết chia sẻ các giải pháp bảo vệ môi trường...', '2024-02-26 00:00:00',  'https://picsum.photos/seed/picsum/200/300'),
    (5, 'Bí quyết sống khỏe mạnh mỗi ngày', 'Các mẹo giúp bạn duy trì sức khỏe tốt...', '2024-02-25 00:00:00',  'https://picsum.photos/seed/picsum/200/300'),
    (6, 'Du lịch Đà Nẵng: Thành phố đáng đến', 'Kinh nghiệm du lịch, khám phá Đà Nẵng xinh đẹp...', '2024-02-24 00:00:00',  'https://picsum.photos/seed/picsum/200/300'),
    (7, 'Công nghệ trí tuệ nhân tạo phát triển vượt bậc', 'Những ứng dụng thú vị của trí tuệ nhân tạo...', '2024-02-23 00:00:00',  'https://picsum.photos/seed/picsum/200/300'),
    (8, 'Tuyệt chiêu nấu món phở bò thơm ngon', 'Hướng dẫn chi tiết cách nấu phở bò chuẩn vị Hà Nội...', '2024-02-22 00:00:00',  'https://picsum.photos/seed/picsum/200/300'),
    (9, 'Các bộ phim điện ảnh Việt Nam hay nhất', 'Top 5 bộ phim điện ảnh Việt Nam đáng xem...', '2024-02-21 00:00:00',  'https://picsum.photos/seed/picsum/200/300'),
    (10, 'Những địa điểm du lịch hấp dẫn tại châu Âu', 'Khám phá những địa danh nổi tiếng ở châu Âu...', '2024-02-20 00:00:00', 'https://picsum.photos/seed/picsum/200/300');users



CREATE TABLE Departments (
    DepartmentID INTEGER PRIMARY KEY,
    DepartmentName VARCHAR(255),
    Address VARCHAR(255),
    Email VARCHAR(255),
    Phone VARCHAR(255),
    Logo VARCHAR(255),
    Website VARCHAR(255),
    ParentDepartmentID INTEGER,
    FOREIGN KEY (ParentDepartmentID) REFERENCES Departments(DepartmentID)
);
CREATE TABLE Employees (
    EmployeeID INTEGER PRIMARY KEY,
    FullName VARCHAR(255),
    Address VARCHAR(255),
    Email VARCHAR(255),
    MobilePhone VARCHAR(255),
    Position VARCHAR(255),
    Avatar VARCHAR(255),
    DepartmentID INTEGER,
    FOREIGN KEY (DepartmentID) REFERENCES Departments(DepartmentID)
);
CREATE TABLE Users (
    Username VARCHAR(255) PRIMARY KEY,
    Password VARCHAR(255),
    Role VARCHAR(50) CHECK (Role IN ('admin', 'regular')),
    EmployeeID INTEGER,
    FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (1departments, 'Training', '514 Manufacturers Avenue', 'trosevear0@wired.com', '757-961-4430', 'http://dummyimage.com/132x100.png/ff4444/ffffff', 'https://sourceforge.net/eget/rutrum/at.json', 1);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (2, 'Services', '6 Ridge Oak Alley', 'zdunkerk1@godaddy.com', '335-577-3956', 'http://dummyimage.com/219x100.png/dddddd/000000', 'https://flickr.com/sapien/non/mi.xml', 2);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (3, 'Support', '04883 Gateway Pass', 'lmacgahey2@ftc.gov', '538-846-0283', 'http://dummyimage.com/181x100.png/cc0000/ffffff', 'https://china.com.cn/eu/orci/mauris/lacinia/sapien.png', 3);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (4, 'Support', '94422 Rowland Circle', 'btoothill3@nhs.uk', '546-186-4751', 'http://dummyimage.com/187x100.png/5fa2dd/ffffff', 'http://google.com/pellentesque/at/nulla/suspendisse.xml', 4);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (5, 'Services', '74 Rusk Lane', 'aconnolly4@disqus.com', '358-420-6530', 'http://dummyimage.com/204x100.png/5fa2dd/ffffff', 'http://google.co.jp/sed/sagittis/nam/congue.html', 5);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (6, 'Services', '6058 Manitowish Plaza', 'rbillingham5@harvard.edu', '425-366-7636', 'http://dummyimage.com/102x100.png/ff4444/ffffff', 'https://harvard.edu/condimentum/curabitur.json', 6);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (7, 'Product Management', '8 Scofield Avenue', 'amalafe6@tmall.com', '109-345-2886', 'http://dummyimage.com/161x100.png/dddddd/000000', 'https://bluehost.com/urna/ut/tellus/nulla/ut.js', 7);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (8, 'Services', '1416 Truax Terrace', 'vwhittington7@earthlink.net', '686-753-2100', 'http://dummyimage.com/170x100.png/ff4444/ffffff', 'https://squarespace.com/curabitur.json', 8);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (9, 'Engineering', '1771 Scofield Parkway', 'jdedrick8@reddit.com', '435-268-5498', 'http://dummyimage.com/194x100.png/5fa2dd/ffffff', 'https://hud.gov/ridiculus.html', 9);
insert into departments (DepartmentID, DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) values (10, 'Sales', '826 Kenwood Avenue', 'rcochrane9@cornell.edu', '174-999-3349', 'http://dummyimage.com/103x100.png/cc0000/ffffff', 'http://usnews.com/lobortis/sapien.jsp', 10);

insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (1, 'Eduino Walewski', '91 Larry Park', 'ewalewski0@state.gov', '934-710-8529', 'Research Nurse', 'https://robohash.org/consequaturincumque.png?size=50x50&set=set1', 1);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (2, 'Skell Trounson', '65072 Dottie Point', 'strounson1@seattletimes.com', '388-497-4849', 'Accountant III', 'https://robohash.org/fugaquoipsa.png?size=50x50&set=set1', 2);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (3, 'Huntlee Bagshawe', '86 Russell Lane', 'hbagshawe2@ebay.com', '208-872-6949', 'Product Engineer', 'https://robohash.org/repellendusetearum.png?size=50x50&set=set1', 3);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (4, 'Mathilde McGaugie', '28281 Sage Parkway', 'mmcgaugie3@odnoklassniki.ru', '650-986-6069', 'Junior Executive', 'https://robohash.org/evenietquiquasi.png?size=50x50&set=set1', 4);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (5, 'Seumas Sille', '810 Village Green Road', 'ssille4@ucla.edu', '591-127-2979', 'Environmental Tech', 'https://robohash.org/quodelenitilaudantium.png?size=50x50&set=set1', 5);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (6, 'Phillip Acheson', '946 Debs Court', 'pacheson5@etsy.com', '872-875-2266', 'Research Nurse', 'https://robohash.org/ametassumendamaiores.png?size=50x50&set=set1', 6);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (7, 'Nickie Johannes', '8617 Pearson Point', 'njohannes6@mapquest.com', '854-336-0585', 'Nurse Practicioner', 'https://robohash.org/utquamet.png?size=50x50&set=set1', 7);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (8, 'Keith Bessant', '76 Oneill Pass', 'kbessant7@chron.com', '714-971-1775', 'Office Assistant II', 'https://robohash.org/delenitirepudiandaeaperiam.png?size=50x50&set=set1', 8);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (9, 'Lilith Villa', '5161 Sheridan Way', 'lvilla8@biglobe.ne.jp', '423-529-8416', 'Geological Engineer', 'https://robohash.org/nonplaceateveniet.png?size=50x50&set=set1', 9);
insert into employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) values (10, 'Denny Stelle', '7 Brown Hill', 'dstelle9@vistaprint.com', '883-698-7970', 'Assistant Manager', 'https://robohash.org/dolorimpeditrerum.png?size=50x50&set=set1', 10);

insert INTO users (Username, Password, Role, EmployeeID) values ('mquan', '123456', 'admin', 1);
insert into users (Username, Password, Role, EmployeeID) values ('ctkling', '111111', 'admin', 2);
insert into users (Username, Password, Role, EmployeeID) values ('anhnguyen', '222222', 'admin', 3);
insert into users (Username, Password, Role, EmployeeID) values ('qhuy', '333333', 'admin', 4);
insert into users (Username, Password, Role, EmployeeID) VALUES ('user1', '444444', 'regular', 5);
insert into users (Username, Password, Role, EmployeeID) values ('lmoseby5', 'oF2!kkwXu', 'regular', 6);
insert into users (Username, Password, Role, EmployeeID) values ('agomme6', 'vW6}rXwn', 'regular', 7);
insert into users (Username, Password, Role, EmployeeID) values ('bgatrill7', 'iC4}IB1<hobI\VJ', 'regular', 8);
insert into users (Username, Password, Role, EmployeeID) values ('tcathrall8', 'hH6~o_FCY@zo', 'regular', 9);
insert into users (Username, Password, Role, EmployeeID) values ('cclaige9', 'uQ5,LXuH', 'regular', 10);


