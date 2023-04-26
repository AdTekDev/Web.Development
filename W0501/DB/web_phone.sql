-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2023 at 03:35 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_phone`
--
CREATE DATABASE IF NOT EXISTS `web_phone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `web_phone`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `permission` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'User',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `fullname`, `password`, `email`, `status`, `permission`, `time`) VALUES
('aTu', 'Tu A Ka', '123456', 'TuAKa@GiangHoChoLon.com', 1, 'Admin', '2023-04-21 04:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `MaSP` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TenSP` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `MoTaSP` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DonViTinh` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DonGia` int NOT NULL,
  `SoLuong` int NOT NULL DEFAULT '0',
  `ThoiDiemCapNhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LinkHinhAnh` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`MaSP`, `TenSP`, `MoTaSP`, `DonViTinh`, `DonGia`, `SoLuong`, `ThoiDiemCapNhat`, `LinkHinhAnh`) VALUES
('Vostro5890', 'Dell Vostro 58xx', 'Máy Dell\r\nDòng Vostro 58xx\r\n\r\nChip: intel i7 11456\r\n\r\n.........', 'Cái', 37000000, 5, '2023-04-21 04:30:47', 'public/img/vostro-58xx.jpg'),
('Vostro5880', 'Dell Vostro 58xx', 'Máy Dell\r\nDòng Vostro 58xx\r\n\r\nChip: intel i7 11456\r\n\r\n.........', 'Cái', 37000000, 5, '2023-04-21 04:30:47', 'public/img/vostro-588x.jpg'),
('Vostro5860', 'Dell Vostro 58xx', 'Máy Dell\r\nDòng Vostro 58xx\r\n\r\nChip: intel i7 11456\r\n\r\n.........', 'Cái', 37000000, 5, '2023-04-21 04:30:47', 'public/img/vostro-586x.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
