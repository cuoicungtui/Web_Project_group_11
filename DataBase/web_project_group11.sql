-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2021 lúc 04:30 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_project_group11`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `UseName` varchar(25) NOT NULL,
  `PASSWORD` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id`, `UseName`, `PASSWORD`) VALUES
(4, 'admin', '$2y$10$RQv9PPfR1RcyhMnFVC8Qb.Ba6z62AGe4jaaIMealKT4WjoVoRfvNq'),
(5, 'quocvuong', '$2y$10$rDK6vD3HbP9xkYjZIALKpOuhbd0kRvyy0N13SQ2XAVL6BKYors68W'),
(6, 'cuoicungtui', '$2y$10$Hw9MHbEGlxr7qU1UOsvnoubltJhuhBLzJbzj.RcnyRbN31G20Aoli');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dl`
--

CREATE TABLE `dl` (
  `ID` int(11) NOT NULL,
  `Title` varchar(2000) NOT NULL,
  `Prg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dl`
--

INSERT INTO `dl` (`ID`, `Title`, `Prg`) VALUES
(15, 'BAMBOO AIRWAYS MỞ BÁN VÉ BAY THẲNG TP HCM – ĐIỆN BIÊN, GIÁ TỪ 159.000 ĐỒNG', 'Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng.'),
(16, 'HÀ NỘI ĐIỀU CHỈNH QUY ĐỊNH KIỂM SOÁT DỊCH ĐỐI VỚI NGƯỜI VỀ TỪ ĐỊA PHƯƠNG KHÁC', 'Ngày 18/11/2021, Ủy ban Nhân dân thành phố Hà Nội đã triển khai công điện hoả tốc số 24-CĐ/UBND, điều chỉnh một số yêu cầu kiểm soát dịch đối với người đến/về Hà Nội từ địa phương khác.'),
(17, 'HƯỚNG DẪN BAY AN TOÀN DÀNH CHO KHÁCH BAY NỘI ĐỊA', 'Theo Công văn số 11244/BGTVT-CYT của Bộ Giao thông Vận tải, các hành khách khi đi bay sẽ không phải thực hiện việc kê khai thông tin bằng Bản cam kết phòng chống dịch Covid-19 (bản cứng) từ 12h00 ngày 26/10/2010.'),
(18, 'HAHALOLO TUYỂN ĐẠI LÝ VÉ MÁY BAY CẤP 2 TRÊN TOÀN QUỐC.', 'Hahalolo hiện đang là đại lý cấp 1 của tất cả các hãng hàng không nội địa: Vietnam Airlines, Bamboo Airways, Vietjet Air, Vietravel Airlines và là đối tác được tin cậy của các hãng hàng không quốc tế. Nhằm mở rộng và phát triển hệ thống mạng lưới bán vé máy bay cả trong và ngoài nước. Hahalolo cần tìm đối tác là cá nhân, doanh nghiệp, công ty du lịch, ... có nguyện vọng làm đại lý vé máy bay cấp 2.'),
(19, 'CÓ NÊN MUA BẢO HIỂM HÀNG KHÔNG KHI ĐẶT VÉ MÁY BAY?', 'Nhiều Quý khách hàng luôn thắc mắc “Bảo hiểm hàng không là gì?” và “Có được những quyền lợi gì khi tham gia bảo hiểm”. Để giải đáp những thắc mắc trên, hãy cùng Hahalolo tìm hiểu kỹ hơn về bảo hiểm vé máy bay ở bài viết dưới đây nhé!'),
(20, 'LOWER PRICE - HIGHER COMMISSION', '“No funds released, tons of profit received”: Do you believe that you will earn tons of profit without having to spend any money? Yes, it is an undoubted truth. Hurry to become an airline ticketing collaborator for Hahalolo to relish that incentive.'),
(21, 'HAHALOLO - THE LOWEST FLIGHT TICKETS ON THE MARKET', 'Cheap flight tickets are always a viral topic for globetrotters though not all of them can find a reputable place offering many alluring promotions, especially the lowest prices on the market. Let\'s find out the favorable aspects when booking on Hahalolo so that you can hunt for super cheap tickets.'),
(22, 'WHAT SOLUTIONS ARE DESTINED FOR THOSE WHO \"FAVOR\" THE CHANGE? HAHALOLO', 'You are a busy person who always finds plane traveling needed, yet your schedule is very changeable. The difficulty found in contacting airlines to change tickets, airlines hotline overloaded, and busy operators will certainly trouble you.'),
(23, 'IF YOU ARE A TRAVELHOLIC', '“The world is a book, and those who do not travel read only one page.”'),
(24, 'TIPS TO MAKE YOUR BODY MORE COMFORTABLE ON AN AIRPLANE', 'Most travel devotees are certainly not unfamiliar with long-haul flights. Long flights can cause fatigue in your body.'),
(25, 'GIÁ VÉ SIÊU RẺ – HOA HỒNG MỚI MẺ', '“0 đồng vốn, 4 đồng lời”: Bạn có tin bạn sẽ kiếm được 4 đồng lời mà không bỏ đồng vốn nào không? Đó là sự thật, hãy nhanh tay trở thành cộng tác viên bán vé máy bay của Hahalolo để được hưởng ưu đãi đó.'),
(26, 'HAHALOLO – VÉ MÁY BAY GIÁ RẺ NHẤT THỊ TRƯỜNG', 'Vé máy bay giá rẻ luôn là chủ đề \"Hot\" đối với những người yêu thích du lịch, tuy nhiên không phải ai cũng tìm được một nơi uy tín, có nhiều chương trình khuyến mãi hấp dẫn và điều đặc biệt là giá vé rẻ nhất thị trường.'),
(27, 'NẾU BẠN LÀ TÍN ĐỒ MÊ DU LỊCH, YÊU THÍCH XÊ DỊCH', '\"Thế giới là một cuốn sách kì thú, và những người không trải nghiệm du lịch sẽ chỉ đọc duy nhất một trang”.'),
(28, 'MÁCH BẠN GIÚP CƠ THỂ THOẢI MÁI HƠN KHI ĐI MÁY BAY', 'Với các tín đồ du lịch, chắc chắn không xa lạ với những chuyến bay đường dài. Các chuyến bay nhiều tiếng đồng hồ có thể gây ra sự mệt mỏi cho cơ thể bạn.'),
(29, 'TẠI SAO NÊN MUA VÉ MÁY BAY QUA ĐẠI LÝ?', 'Máy bay giờ đây đã trở thành phương tiện di chuyển vô cùng phổ biến bởi sự an toàn và nhanh chóng. Hãy cùng Hahalolo tìm hiểu những lợi ích của việc đặt vé qua đại lý ngay dưới đây.'),
(30, 'GIẢI PHÁP NÀO DÀNH CHO NGƯỜI \"ƯA\" SỰ THAY ĐỔI - HAHALOLO', 'Bạn là người bận rộn, luôn phải di chuyển bằng máy bay nhưng lịch trình lại hay thay đổi nhưng lại quá khó khăn để liên hệ các Hãng hàng không thay đổi vé, hotline của Hãng luôn quá tải, tổng đài viên luôn bận.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_customer`
--

CREATE TABLE `list_customer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `SDT` char(10) NOT NULL,
  `EMAIL` char(30) NOT NULL,
  `Code_Flight` char(7) NOT NULL,
  `Type_Chair` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list_customer`
--

INSERT INTO `list_customer` (`Id`, `Name`, `SDT`, `EMAIL`, `Code_Flight`, `Type_Chair`) VALUES
(1, 'Tưởng Đăng Vương Quốc', '0988965602', 'quoctuong@gmail.com', '1233454', 'L1'),
(2, 'Ngô Văn Tùng', '0854965666', 'TungNgo@gmail.com', '1234567', 'L2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_flight`
--

CREATE TABLE `list_flight` (
  `Code_Flight` char(7) NOT NULL,
  `Code_Plane` char(7) NOT NULL,
  `Start_Date` datetime NOT NULL,
  `End_Date` datetime NOT NULL,
  `Departure_Plane` varchar(25) NOT NULL,
  `To_Plane` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list_flight`
--

INSERT INTO `list_flight` (`Code_Flight`, `Code_Plane`, `Start_Date`, `End_Date`, `Departure_Plane`, `To_Plane`) VALUES
('1233454', 'BBA123', '2021-12-15 07:35:00', '2021-12-16 21:35:00', 'Sài Gòn', 'Vinh'),
('1234567', 'VJA123', '2021-12-13 08:30:00', '2021-12-13 21:30:00', 'Hà Nội', 'Sài Gòn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_planes`
--

CREATE TABLE `list_planes` (
  `Code_Plane` char(7) NOT NULL,
  `Name_Plane` varchar(25) NOT NULL,
  `Name_Airline` varchar(25) NOT NULL,
  `L1_Chair` int(11) DEFAULT NULL,
  `L2_Chair` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list_planes`
--

INSERT INTO `list_planes` (`Code_Plane`, `Name_Plane`, `Name_Airline`, `L1_Chair`, `L2_Chair`) VALUES
('BBA123', 'BBA_BAe 146', 'Bamboo Airline', 40, 180),
('VJA123', 'VJA_Boing707', 'Vietjet Airline', 50, 150);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_dl`
--

CREATE TABLE `table_dl` (
  `ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Prg` varchar(200) NOT NULL,
  `img` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `table_dl`
--

INSERT INTO `table_dl` (`ID`, `Title`, `Prg`, `img`) VALUES
(1, 'uyuqwuygqwguyqdguq', 'ádadagdfgdgdgdverevevrve', '\"./assets/img/p11.jpg\"');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UseName` (`UseName`);

--
-- Chỉ mục cho bảng `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `list_customer`
--
ALTER TABLE `list_customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `SDT` (`SDT`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `Code_Flight` (`Code_Flight`);

--
-- Chỉ mục cho bảng `list_flight`
--
ALTER TABLE `list_flight`
  ADD PRIMARY KEY (`Code_Flight`),
  ADD UNIQUE KEY `Code_Plane` (`Code_Plane`);

--
-- Chỉ mục cho bảng `list_planes`
--
ALTER TABLE `list_planes`
  ADD PRIMARY KEY (`Code_Plane`),
  ADD UNIQUE KEY `Name_Plane` (`Name_Plane`);

--
-- Chỉ mục cho bảng `table_dl`
--
ALTER TABLE `table_dl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dl`
--
ALTER TABLE `dl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `list_customer`
--
ALTER TABLE `list_customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `table_dl`
--
ALTER TABLE `table_dl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `list_customer`
--
ALTER TABLE `list_customer`
  ADD CONSTRAINT `list_customer_ibfk_1` FOREIGN KEY (`Code_Flight`) REFERENCES `list_flight` (`Code_Flight`);

--
-- Các ràng buộc cho bảng `list_flight`
--
ALTER TABLE `list_flight`
  ADD CONSTRAINT `list_flight_ibfk_1` FOREIGN KEY (`Code_Plane`) REFERENCES `list_planes` (`Code_Plane`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
