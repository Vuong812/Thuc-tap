-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2021 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `taikhoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTin` varchar(30) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `TheLoai` varchar(50) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `NoiDung` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`MaTin`, `TieuDe`, `TheLoai`, `Image`, `NoiDung`) VALUES
('810', 'Vultr Coupon Code tháng 08/2020 – Tặng tới 103 USD miễn phí', 'Tài Chính', 'hawkhost-coupon-giappham-thumb.jpg', 'Chào đón mùa hè tới (tại Mỹ) Hawk Host tung ra loạt mã giảm giá Hawk Host giảm ngay 55%…'),
('812', 'COVID-19', 'Sức Khỏe', 'cach deo khau trang y te chuan 2.jpg', 'huhu'),
('Tin 4', 'Hawk Host Coupon Tháng 8/2020 – Giảm lên tới 40% Hosting, có coupon trọn đời', 'Sức Khỏe', 'cach pha nuoc rua tay chong covid.jpg', 'haha');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
