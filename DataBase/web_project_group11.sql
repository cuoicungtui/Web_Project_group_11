-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2021 lúc 09:29 AM
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
-- Cấu trúc bảng cho bảng `dl`
--

CREATE TABLE `dl` (
  `ID` int(11) NOT NULL,
  `img` char(200) NOT NULL,
  `Title` varchar(2000) NOT NULL,
  `Prg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dl`
--

INSERT INTO `dl` (`ID`, `img`, `Title`, `Prg`) VALUES
(15, '\"./assets/img/p11.jpg\"', 'BAMBOO AIRWAYS MỞ BÁN VÉ BAY THẲNG TP HCM – ĐIỆN BIÊN, GIÁ TỪ 159.000 ĐỒNG', 'Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng.'),
(16, '\"./assets/img/p11.jpg\"', 'HÀ NỘI ĐIỀU CHỈNH QUY ĐỊNH KIỂM SOÁT DỊCH ĐỐI VỚI NGƯỜI VỀ TỪ ĐỊA PHƯƠNG KHÁC', 'Ngày 18/11/2021, Ủy ban Nhân dân thành phố Hà Nội đã triển khai công điện hoả tốc số 24-CĐ/UBND, điều chỉnh một số yêu cầu kiểm soát dịch đối với người đến/về Hà Nội từ địa phương khác.'),
(17, '\"./assets/img/p11.jpg\"', 'HƯỚNG DẪN BAY AN TOÀN DÀNH CHO KHÁCH BAY NỘI ĐỊA', 'Theo Công văn số 11244/BGTVT-CYT của Bộ Giao thông Vận tải, các hành khách khi đi bay sẽ không phải thực hiện việc kê khai thông tin bằng Bản cam kết phòng chống dịch Covid-19 (bản cứng) từ 12h00 ngày 26/10/2010.'),
(18, '\"./assets/img/p11.jpg\"', 'HAHALOLO TUYỂN ĐẠI LÝ VÉ MÁY BAY CẤP 2 TRÊN TOÀN QUỐC.', 'Hahalolo hiện đang là đại lý cấp 1 của tất cả các hãng hàng không nội địa: Vietnam Airlines, Bamboo Airways, Vietjet Air, Vietravel Airlines và là đối tác được tin cậy của các hãng hàng không quốc tế. Nhằm mở rộng và phát triển hệ thống mạng lưới bán vé máy bay cả trong và ngoài nước. Hahalolo cần tìm đối tác là cá nhân, doanh nghiệp, công ty du lịch, ... có nguyện vọng làm đại lý vé máy bay cấp 2.'),
(19, '\"./assets/img/p11.jpg\"', 'CÓ NÊN MUA BẢO HIỂM HÀNG KHÔNG KHI ĐẶT VÉ MÁY BAY?', 'Nhiều Quý khách hàng luôn thắc mắc “Bảo hiểm hàng không là gì?” và “Có được những quyền lợi gì khi tham gia bảo hiểm”. Để giải đáp những thắc mắc trên, hãy cùng Hahalolo tìm hiểu kỹ hơn về bảo hiểm vé máy bay ở bài viết dưới đây nhé!'),
(20, '\"./assets/img/p11.jpg\"', 'LOWER PRICE - HIGHER COMMISSION', '“No funds released, tons of profit received”: Do you believe that you will earn tons of profit without having to spend any money? Yes, it is an undoubted truth. Hurry to become an airline ticketing collaborator for Hahalolo to relish that incentive.'),
(21, '\"./assets/img/p11.jpg\"', 'HAHALOLO - THE LOWEST FLIGHT TICKETS ON THE MARKET', 'Cheap flight tickets are always a viral topic for globetrotters though not all of them can find a reputable place offering many alluring promotions, especially the lowest prices on the market. Let\'s find out the favorable aspects when booking on Hahalolo so that you can hunt for super cheap tickets.'),
(22, '\"./assets/img/p11.jpg\"', 'WHAT SOLUTIONS ARE DESTINED FOR THOSE WHO \"FAVOR\" THE CHANGE? HAHALOLO', 'You are a busy person who always finds plane traveling needed, yet your schedule is very changeable. The difficulty found in contacting airlines to change tickets, airlines hotline overloaded, and busy operators will certainly trouble you.'),
(23, '\"./assets/img/p11.jpg\"', 'IF YOU ARE A TRAVELHOLIC', '“The world is a book, and those who do not travel read only one page.”'),
(24, '\"./assets/img/p11.jpg\"', 'TIPS TO MAKE YOUR BODY MORE COMFORTABLE ON AN AIRPLANE', 'Most travel devotees are certainly not unfamiliar with long-haul flights. Long flights can cause fatigue in your body.'),
(25, '\"./assets/img/p11.jpg\"', 'GIÁ VÉ SIÊU RẺ – HOA HỒNG MỚI MẺ', '“0 đồng vốn, 4 đồng lời”: Bạn có tin bạn sẽ kiếm được 4 đồng lời mà không bỏ đồng vốn nào không? Đó là sự thật, hãy nhanh tay trở thành cộng tác viên bán vé máy bay của Hahalolo để được hưởng ưu đãi đó.'),
(26, '\"./assets/img/p11.jpg\"', 'HAHALOLO – VÉ MÁY BAY GIÁ RẺ NHẤT THỊ TRƯỜNG', 'Vé máy bay giá rẻ luôn là chủ đề \"Hot\" đối với những người yêu thích du lịch, tuy nhiên không phải ai cũng tìm được một nơi uy tín, có nhiều chương trình khuyến mãi hấp dẫn và điều đặc biệt là giá vé rẻ nhất thị trường.'),
(27, '\"./assets/img/p11.jpg\"', 'NẾU BẠN LÀ TÍN ĐỒ MÊ DU LỊCH, YÊU THÍCH XÊ DỊCH', '\"Thế giới là một cuốn sách kì thú, và những người không trải nghiệm du lịch sẽ chỉ đọc duy nhất một trang”.'),
(28, '\"./assets/img/p11.jpg\"', 'MÁCH BẠN GIÚP CƠ THỂ THOẢI MÁI HƠN KHI ĐI MÁY BAY', 'Với các tín đồ du lịch, chắc chắn không xa lạ với những chuyến bay đường dài. Các chuyến bay nhiều tiếng đồng hồ có thể gây ra sự mệt mỏi cho cơ thể bạn.'),
(29, '\"./assets/img/p11.jpg\"', 'TẠI SAO NÊN MUA VÉ MÁY BAY QUA ĐẠI LÝ?', 'Máy bay giờ đây đã trở thành phương tiện di chuyển vô cùng phổ biến bởi sự an toàn và nhanh chóng. Hãy cùng Hahalolo tìm hiểu những lợi ích của việc đặt vé qua đại lý ngay dưới đây.'),
(30, '\"./assets/img/p11.jpg\"', 'GIẢI PHÁP NÀO DÀNH CHO NGƯỜI \"ƯA\" SỰ THAY ĐỔI - HAHALOLO', 'Bạn là người bận rộn, luôn phải di chuyển bằng máy bay nhưng lịch trình lại hay thay đổi nhưng lại quá khó khăn để liên hệ các Hãng hàng không thay đổi vé, hotline của Hãng luôn quá tải, tổng đài viên luôn bận.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dl`
--
ALTER TABLE `dl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
