-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2021 lúc 03:25 PM
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
(8, 'cuoicungtui', '$2y$10$L6sj49nYGJgwfmL./S2Bi.LEwiPqu/sef2wjZ/ViQhMcl/5Goz4Iy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `conten`
--

CREATE TABLE `conten` (
  `ID_tb` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `index_` int(11) NOT NULL,
  `h5` varchar(200) DEFAULT NULL,
  `p` varchar(1000) DEFAULT NULL,
  `img` char(200) DEFAULT NULL,
  `img_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `conten`
--

INSERT INTO `conten` (`ID_tb`, `ID`, `index_`, `h5`, `p`, `img`, `img_name`) VALUES
(8, 15, 1, '', 'Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng.', '', ''),
(9, 15, 2, '', 'Cụ thể, Bamboo Airways đã chính thức mở bán vé đường bay thẳng khứ hồi kết nối TP HCM – Điện Biên với tần suất 05 chuyến khứ hồi/ tuần và mức giá từ 159.000 đồng/ vé. Hai khung giờ khởi hành dự kiến của hãng là 10h20 cất cánh từ TP. HCM và 13h10 cất cánh từ Điện Biên. Tần suất chung sẽ tăng dần tùy theo điều kiện thực tế và nhu cầu của hành khách.', '', ''),
(10, 15, 3, '', 'Ngay khi đi vào hoạt động, đường bay thẳng TP. HCM – Điện Biên của Bamboo Airways sẽ góp phần rút ngắn đáng kể thời gian di chuyển giữa 2 thành phố ở hai đầu đất nước. Dự kiến, tổng thời gian hành trình bay giữa TP. HCM – Điện Biên khai thác bằng máy bay phản lực Embraer của Bamboo Airways sẽ chỉ còn hơn 2 tiếng đồng hồ.', '', ''),
(11, 15, 4, '', '', './assets/img/1.png', 'Ảnh 1: Thời gian di chuyển giữa 2 thành phố ở 2 đầu đất nước được rút ngắn đáng kể bằng các chuyến b'),
(12, 15, 5, '', 'Nhân dịp mở bán đường bay thẳng lần đầu tiên được vận hành trong lịch sử ngành hàng không này, Bamboo Airways tung loạt ưu đãi giá vé hấp dẫn để tri ân khách hàng.', '', ''),
(13, 15, 6, '', 'Trong 30 ngày đầu tiên mở bán, khi đặt vé theo đoàn từ 10 – 25 người, khách hàng sẽ được hưởng ngay ưu đãi giá vé chỉ từ 630.000 đồng/chặng (đã bao gồm toàn bộ thuế phí). Thời gian khởi hành áp dụng ưu đãi từ ngày 18/12/2021 đến hết 27/03/2022.', '', ''),
(14, 15, 7, '', 'Ngay từ hôm nay, hành khách đã có thể tiến hành đặt vé bay Bamboo Airways thông qua tất cả các kênh phân phối như website, ứng dụng di động, hệ thống phòng vé và các đại lý chính thức của hãng trên toàn quốc để được hưởng ngay ưu đãi giá vé hấp dẫn này.', '', ''),
(15, 15, 8, '', '', './assets/img/2.jpg', 'Ảnh 2: Bamboo Airways tung loạt ưu đãi hấp dẫn mừng mở bán đường bay thẳng lịch sử TP HCM – Điện Biê'),
(16, 15, 9, '', 'Trước đó, vào tháng 10/2021, Bamboo Airways đã chính thức đưa vào khai thác đường bay thẳng Hà Nội – Điện Biên bằng máy bay phản lực Embraer 190. Với thời gian hành trình chỉ xấp xỉ 1 giờ đồng hồ, tiết kiệm đáng kể so với hành trình kéo dài từ 9 – 12 giờ nếu di chuyển bằng đường bộ, đường bay của Bamboo Airways đã nhận được sự quan tâm của đông đảo hành khách và nhanh chóng kín chỗ ngay từ những ngày đầu mở bán vé.', '', ''),
(17, 16, 1, '', '', './assets/img/63d747faad2f585bf12961ead90f7979-1637309110.jpg', ''),
(18, 16, 2, '', 'Ngày 18/11/2021, Ủy ban Nhân dân thành phố Hà Nội đã triển khai công điện hoả tốc số 24-CĐ/UBND, điều chỉnh một số yêu cầu kiểm soát dịch đối với người đến/về Hà Nội từ địa phương khác, cụ thể:', '', ''),
(19, 16, 3, '', 'Người đã tiêm đủ liều vắc xin phòng COVID-19 (thẻ xanh trên Sổ Sức khoẻ điện tử hoặc giấy chứng nhận tiêm đủ liều vắc xin của cơ quan có thẩm quyền cấp) hoặc đã khỏi bệnh COVID-19 trong vòng 06 tháng tính đến thời điểm về địa phương (có giấy ra viện/giấy xác nhận khỏi bệnh COVID-19): tự theo dõi sức khoẻ ở nhà, nơi lưu trú trong vòng 07 ngày kể từ ngày về địa phương và nghiêm túc thực hiện Thông điệp 5K, thực hiện xét nghiệm SARS-CoV-2 vào ngày thứ nhất. Nếu có dấu hiệu bất thường về sức khoẻ như ho, sốt, khó thở, đau rát họng, mất vị giác thì báo cho cơ quan y tế để theo dõi và xử trí theo quy định.', '', ''),
(20, 16, 4, '', 'Người tiêm chưa đủ liều vắc xin phòng COVID-19 (thẻ vàng trên Sổ Sức khoẻ khoẻ điện tử hoặc giấy chứng nhận tiêm chủng của cơ quan có thẩm quyền cấp(sad) thực hiện cách ly tại nơi cư trú, lưu trú 07 ngày kể từ ngày về địa phương, tiếp tục theo dõi sức khoẻ trong 07 ngày tiếp theo và luôn thực hiện Thông điệp 5K; xét nghiệm SARS-CoV-2 vào ngày thứ nhất, ngày thứ 07 kể từ ngày về địa phương.', '', ''),
(21, 16, 5, '', 'Người chưa tiêm vắc xin phòng COVID-19: Thực hiện cách ly 14 ngày kể từ ngày về địa phương, tiếp tục theo dõi sức khoẻ trong 14 ngày tiếp theo và nghiêm túc thực hiện Thông điệp 5K; xét nghiệm SARS-CoV-2 vào ngày thứ nhất, ngày thứ 07 và ngày thứ 14 kể từ ngày về địa phương.', '', ''),
(22, 16, 6, '', 'Người đã tiêm chủng vắc xin phòng COVID-19 tại nước ngoài thì việc kiểm tra và công nhận giấy chứng nhận tiêm chủng, giấy xác nhận khỏi bệnh COVID-19 hoặc giấy tờ tương đương khác của nước ngoài theo hướng dẫn của Bộ Ngoại giao.', '', ''),
(23, 18, 1, '', '', './assets/img/429d21bdd41a5304967df5d6549944f8-1633922383.jpg', ''),
(24, 18, 2, 'I. Giới thiệu sơ lược về Hahalolo.', 'Hahalolo ra đời với mục tiêu trở thành trung tâm cung cấp đầy đủ thông tin về khách sạn, tour du lịch, địa điểm du lịch, địa điểm mua sắm và giải trí, các phương tiện đi lại, ... và đặc biệt là phần Trải nghiệm để chia sẻ về chuyến du lịch đầy lý thú trên Hahalolo dưới dạng mạng xã hội trực tuyến.', '', ''),
(25, 18, 3, '', 'Hahalolo là một Mạng xã hội du lịch trực tuyến, thương mại điện tử và truyền thông được thực hiện bởi người Việt Nam chủ động, sáng tạo, thiết kế, tích hợp sản phẩm tại Việt Nam và đóng góp vào quá trình phát triển cộng đồng công nghệ.', '', ''),
(26, 18, 4, '', '', './assets/img/04d603e8d2c1f92f991d8c5272ad4cc0-1633922505.png', ''),
(27, 18, 5, '', 'Hahalolo là một Mạng xã hội du lịch trực tuyến, thương mại điện tử và truyền thông được thực hiện bởi người Việt Nam chủ động, sáng tạo, thiết kế, tích hợp sản phẩm tại Việt Nam và đóng góp vào quá trình phát triển cộng đồng công nghệ.', '', ''),
(29, 18, 6, 'II. Tuyển dụng đại lý vé máy bay trên toàn quốc.', 'Hahalolo hiện đang là đại lý cấp 1 của tất cả các hãng hàng không nội địa: Vietnam Airlines, Bamboo Airways, Vietjet Air, Vietravel Airlines và là đối tác được tin cậy của các hãng hàng không quốc tế.', '', ''),
(30, 18, 7, '', '', './assets/img/08f307371310fd05693001d1ec132357-1633922434.jpg', ''),
(31, 18, 8, '', 'Nhằm mở rộng và phát triển hệ thống mạng lưới bán vé máy bay cả trong và ngoài nước. Hahalolo cần tìm đối tác là cá nhân, doanh nghiệp, công ty du lịch, ... có nguyện vọng làm đại lý vé máy bay cấp 2.', '', ''),
(32, 18, 9, '1. Quyền lợi của đại lý cấp 2.', 'Có thể ký quỹ với nhiều gói khác nhau, chỉ cần với 5 triệu đồng đã có thể trở thành Đại lý cấp 2 của Hahalolo. Được đào tạo và cung cấp thông tin đầy đủ.\r\nĐặc biệt: Hahalolo sẽ hỗ trợ chi phí làm bảng hiệu trong trường hợp đại lý yêu cầu.\r\nChủ động về doanh số bán vé.\r\nĐược lấy giá gốc từ các hãng hàng không.\r\nChủ động đặt và xuất vé từ các hãng.', '', ''),
(33, 18, 10, '2. Hahalolo cam kết:', '', '', ''),
(34, 18, 11, '', 'Xử lý, hỗ trợ đại lý một cách nhanh chóng và hiệu quả nhất từ 07:00 đến 22:15 hằng ngày và các trường hợp gấp có thể được hỗ trợ ngoài khung giờ trên, kể cả lễ Tết.\r\nHỗ trợ tất cả các chuyến bay kể cả những lúc cao điểm, lễ Tết, vé đi gấp, …\r\nCập nhật chương trình khuyến mại từ các hãng hàng không đến đại lý nhanh nhất.', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dl`
--

CREATE TABLE `dl` (
  `ID` int(11) NOT NULL,
  `img` char(200) DEFAULT NULL,
  `Title` varchar(2000) DEFAULT NULL,
  `Prg` varchar(5000) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dl`
--

INSERT INTO `dl` (`ID`, `img`, `Title`, `Prg`, `date`) VALUES
(15, './assets/img/p1.jpg', 'BAMBOO AIRWAYS MỞ BÁN VÉ BAY THẲNG TP HCM – ĐIỆN BIÊN, GIÁ TỪ 159.000 ĐỒNG', '                        Với những hành trình bay bằng phản lực Embraer của Bamboo Airways, lần đầu tiên trong lịch sử, khoảng cách gần 2000km giữa TP HCM và Điện Biên sẽ chỉ còn gói gọn trong hơn 2 giờ bay thẳng.                        ', '2021-12-26'),
(16, './assets/img/p2.jpg', 'HÀ NỘI ĐIỀU CHỈNH QUY ĐỊNH KIỂM SOÁT DỊCH ĐỐI VỚI NGƯỜI VỀ TỪ ĐỊA PHƯƠNG KHÁC', '            Ngày 18/11/2021, Ủy ban Nhân dân thành phố Hà Nội đã triển khai công điện hoả tốc số 24-CĐ/UBND, điều chỉnh một số yêu cầu kiểm soát dịch đối với người đến/về Hà Nội từ địa phương khác.            ', '2021-12-13'),
(18, './assets/img/p4.jpg', 'HAHALOLO TUYỂN ĐẠI LÝ VÉ MÁY BAY CẤP 2 TRÊN TOÀN QUỐC.', '            Hahalolo hiện đang là đại lý cấp 1 của tất cả các hãng hàng không nội địa: Vietnam Airlines, Bamboo Airways, Vietjet Air, Vietravel Airlines và là đối tác được tin cậy của các hãng hàng không quốc tế. Nhằm mở rộng và phát triển hệ thống mạng lưới bán vé máy bay cả trong và ngoài nước. Hahalolo cần tìm đối tác là cá nhân, doanh nghiệp, công ty du lịch, ... có nguyện vọng làm đại lý vé máy bay cấp 2.            ', '2021-12-27'),
(19, './assets/img/p5.jpg', 'CÓ NÊN MUA BẢO HIỂM HÀNG KHÔNG KHI ĐẶT VÉ MÁY BAY?', '                        Nhiều Quý khách hàng luôn thắc mắc “Bảo hiểm hàng không là gì?” và “Có được những quyền lợi gì khi tham gia bảo hiểm”. Để giải đáp những thắc mắc trên, hãy cùng Hahalolo tìm hiểu kỹ hơn về bảo hiểm vé máy bay ở bài viết dưới đây nhé!                        ', '2021-12-27'),
(20, './assets/img/p6.jpg', 'LOWER PRICE - HIGHER COMMISSION', '            “No funds released, tons of profit received”: Do you believe that you will earn tons of profit without having to spend any money? Yes, it is an undoubted truth. Hurry to become an airline ticketing collaborator for Hahalolo to relish that incentive.            ', '2021-12-27'),
(21, './assets/img/p11.jpg', 'HAHALOLO - THE LOWEST FLIGHT TICKETS ON THE MARKET', 'Cheap flight tickets are always a viral topic for globetrotters though not all of them can find a reputable place offering many alluring promotions, especially the lowest prices on the market. Let\'s find out the favorable aspects when booking on Hahalolo so that you can hunt for super cheap tickets.', '2021-12-20'),
(22, './assets/img/p10.jpg', 'WHAT SOLUTIONS ARE DESTINED FOR THOSE WHO ', '                        You are a busy person who always finds plane traveling needed, yet your schedule is very changeable. The difficulty found in contacting airlines to change tickets, airlines hotline overloaded, and busy operators will certainly trouble you.                        ', '2021-12-06'),
(23, './assets/img/p12.jpg', 'IF YOU ARE A TRAVELHOLIC', '                        “The world is a book, and those who do not travel read only one page.”                        ', '2021-12-24'),
(24, './assets/img/p11.jpg', 'TIPS TO MAKE YOUR BODY MORE COMFORTABLE ON AN AIRPLANE', '            Most travel devotees are certainly not unfamiliar with long-haul flights. Long flights can cause fatigue in your body.            ', '2021-12-19'),
(25, './assets/img/p12.jpg', 'GIÁ VÉ SIÊU RẺ – HOA HỒNG MỚI MẺ', '                        “0 đồng vốn, 4 đồng lời”: Bạn có tin bạn sẽ kiếm được 4 đồng lời mà không bỏ đồng vốn nào không? Đó là sự thật, hãy nhanh tay trở thành cộng tác viên bán vé máy bay của Hahalolo để được hưởng ưu đãi đó.                        ', '2021-12-17'),
(26, './assets/img/p10.jpg', 'HAHALOLO – VÉ MÁY BAY GIÁ RẺ NHẤT THỊ TRƯỜNG', '                        Vé máy bay giá rẻ luôn là chủ đề \"Hot\" đối với những người yêu thích du lịch, tuy nhiên không phải ai cũng tìm được một nơi uy tín, có nhiều chương trình khuyến mãi hấp dẫn và điều đặc biệt là giá vé rẻ nhất thị trường.                        ', '2021-12-19'),
(27, './assets/img/p11.jpg', 'NẾU BẠN LÀ TÍN ĐỒ MÊ DU LỊCH, YÊU THÍCH XÊ DỊCH', '            \"Thế giới là một cuốn sách kì thú, và những người không trải nghiệm du lịch sẽ chỉ đọc duy nhất một trang”.            ', '2021-12-05'),
(28, './assets/img/p11.jpg', 'MÁCH BẠN GIÚP CƠ THỂ THOẢI MÁI HƠN KHI ĐI MÁY BAY', '                        Với các tín đồ du lịch, chắc chắn không xa lạ với những chuyến bay đường dài. Các chuyến bay nhiều tiếng đồng hồ có thể gây ra sự mệt mỏi cho cơ thể bạn.                        ', '2021-12-05'),
(29, './assets/img/p12.jpg', 'TẠI SAO NÊN MUA VÉ MÁY BAY QUA ĐẠI LÝ?', '                        Máy bay giờ đây đã trở thành phương tiện di chuyển vô cùng phổ biến bởi sự an toàn và nhanh chóng. Hãy cùng Hahalolo tìm hiểu những lợi ích của việc đặt vé qua đại lý ngay dưới đây.                        ', '2021-12-11'),
(30, './assets/img/p11.jpg', 'GIẢI PHÁP NÀO DÀNH CHO NGƯỜI ', '            Bạn là người bận rộn, luôn phải di chuyển bằng máy bay nhưng lịch trình lại hay thay đổi nhưng lại quá khó khăn để liên hệ các Hãng hàng không thay đổi vé, hotline của Hãng luôn quá tải, tổng đài viên luôn bận.            ', '2021-12-25');

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
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Departure_Plane` varchar(25) NOT NULL,
  `To_Plane` varchar(25) NOT NULL,
  `Price_L1` int(11) NOT NULL,
  `Price_L2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list_flight`
--

INSERT INTO `list_flight` (`Code_Flight`, `Code_Plane`, `Start_Date`, `End_Date`, `Start_Time`, `End_Time`, `Departure_Plane`, `To_Plane`, `Price_L1`, `Price_L2`) VALUES
('1233454', 'BBA123', '2021-12-15', '2021-12-16', '09:30:00', '12:15:00', 'Sài Gòn', 'Vinh', 1500000, 700000),
('1234567', 'VJA123', '2021-12-13', '2021-12-13', '11:30:00', '14:30:00', 'Hà Nội', 'Sài Gòn', 0, 0);

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_login`
--

INSERT INTO `user_login` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(11, 'Tưởng đăng', 'quốc', 'tuondangvuongquoc901@gmail.com', '$2y$10$zvuzB/xq7oL/skQrwAqVFurPKJJS8ydwQBPjix7HLt18Zn51GLIi6');

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
-- Chỉ mục cho bảng `conten`
--
ALTER TABLE `conten`
  ADD PRIMARY KEY (`ID_tb`),
  ADD KEY `FK_DL` (`ID`);

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
-- Chỉ mục cho bảng `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `conten`
--
ALTER TABLE `conten`
  MODIFY `ID_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `dl`
--
ALTER TABLE `dl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
-- AUTO_INCREMENT cho bảng `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `conten`
--
ALTER TABLE `conten`
  ADD CONSTRAINT `FK_DL` FOREIGN KEY (`ID`) REFERENCES `dl` (`ID`);

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
