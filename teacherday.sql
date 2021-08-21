-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 07:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacherday`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `std_id` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `grade` int(2) NOT NULL,
  `comment` text NOT NULL,
  `major` varchar(200) NOT NULL,
  `tray` int(2) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `std_id`, `name`, `grade`, `comment`, `major`, `tray`, `teacher_id`, `time_stamp`) VALUES
(7, '613020892-2', 'Narattha', 1, 'HBD', 'เทคโนโลยีสารสนเทศ (IT)', 1, 0, '2021-08-21 16:21:15'),
(8, '613020024-1', 'Panuwat', 2, 'ขอให้อาจารย์สุขภาพแข็งแรงนะครับ', 'เทคโนโลยีสารสนเทศ (IT)', 1, 0, '2021-08-21 16:21:15'),
(9, '613020024-1', 'ภานุวัฒน์ ยี่สุ่นซ้อน', 2, 'เลิกสอนง่วง', '2', 1, 0, '2021-08-21 16:22:34'),
(10, '613020533-0', 'Supawadee', 2, 'พักกกกกกก', '2', 1, 17, '2021-08-21 16:27:50'),
(11, '613020024-1', 'Panuwat', 1, 'sssss', '1', 1, 5, '2021-08-21 17:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`) VALUES
(1, 'อาจารย์ทุกท่าน'),
(2, 'รศ.ดร.ศาสตรา   วงศ์ธนวสุ'),
(3, 'รศ.ดร.สิรภัทร   เชี่ยวชาญวัฒนา'),
(4, 'รศ.ดร.ปัญญาพล   หอระตะ'),
(5, 'ผศ.ดร.พุธษดี   ศิริแสงตระกูล'),
(6, 'ผศ.ดร.สันติ   ทินตะนัย'),
(7, 'ผศ.ดร.คำรณ   สุนัติ'),
(8, 'ผศ.ดร.ชิตสุธา   สุ่มเล็ก'),
(9, 'ผศ.ดร.บุญทรัพย์   ไวคำ'),
(10, 'ผศ.ดร.สิลดา   อินทรโสธรฉันท์'),
(11, 'ผศ.ดร.อุรฉัตร   โคแก้ว'),
(12, 'อาจารย์ วชิราวุธ   ธรรมวิเศษ'),
(13, 'อาจารย์ ธนพล   ตั้งชูพงศ์'),
(14, 'อาจารย์ ไพรสันต์   ผดุงเวียง'),
(15, 'รศ.ดร.สมจิตร   อาจอินทร์'),
(16, 'รศ.ดร.งามนิจ   อาจอินทร์'),
(17, 'รศ.ดร.จักรชัย   โสอินทร์'),
(18, 'ผศ.ดร.ปวีณา   วันชัย'),
(19, 'ผศ.ดร.สายยัญ   สายยศ'),
(20, 'ผศ.ดร.สุมณฑา   เกษมวิลาศ'),
(21, 'ผศ.ดร.วรารัตน์   สงฆ์แป้น'),
(22, 'ผศ.ดร.มัลลิกา   วัฒนะ'),
(23, 'อาจารย์ รภัสสิทธิ์   ชินภัทรจีรัสถ์'),
(24, 'อาจารย์ วรัญญา   วรรณศรี'),
(25, 'อาจารย์ เพชร    อิ่มทองคำ'),
(26, 'อาจารย์ ชานนท์   เดชสุภา'),
(27, 'รองศาสตราจารย์   ชัยพล   กีรติกสิกร'),
(28, 'ผู้ช่วยศาสตราจารย์   รัศมี   สุวรรณวีระกำธร'),
(29, 'ผู้ช่วยศาสตราจารย์   พิพัธน์   เรืองแสง'),
(30, 'ผู้ช่วยศาสตราจารย์   อุราวรรณ   จันทร์เกษ'),
(31, 'ผู้ช่วยศาสตราจารย์   ณกร   วัฒนกิจ'),
(32, 'อาจารย์   ศรัณย์   อภิชนตระกูล'),
(33, 'อาจารย์   ศักดิ์พจน์   ทองเลี่ยมนาค');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
