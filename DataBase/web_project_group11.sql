-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2021 lúc 03:40 PM
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
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id`, `UseName`, `PASSWORD`) VALUES
(1, 'admin', 'admin'),
(2, 'cuoicungtui', '123456');

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `list_customer`
--
ALTER TABLE `list_customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
