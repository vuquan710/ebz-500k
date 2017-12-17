-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 07:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebz`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `shift_1` varchar(200) NOT NULL,
  `shift_2` varchar(200) NOT NULL,
  `shift_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date1`, `shift_1`, `shift_2`, `shift_3`) VALUES
(2, '2017-12-02', 'Trần Hà Phương', 'Trần Hà Phương', 'Trần Hà Phương'),
(3, '2017-12-18', 'Trần Hà Phương', 'Trần Hà Phương', 'Trần Hà Phương'),
(4, '2017-12-09', 'Vu Tung Quan', 'Vũ Thu Trang', 'Phùng Thị Phấn'),
(7, '2017-12-01', 'Trần Hà Phương', 'Trần Hà Phương', 'Trần Hà Phương'),
(8, '2017-12-03', 'Vu Tung Quan', 'Vu Tung Quan', 'Vu Tung Quan');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `year_of_birth` int(4) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `phone` int(11) NOT NULL,
  `cmt` int(12) NOT NULL,
  `shift` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `schedule_id`, `full_name`, `year_of_birth`, `address`, `sex`, `phone`, `cmt`, `shift`) VALUES
(3, 1, 'Vu Tung Quan', 1995, 'Hanu', 1, 1688587941, 21474, 2),
(4, 2, 'Vũ Thu Trang', 1995, 'Hanu', 1, 123456789, 12211221, 1),
(5, 3, 'Đinh Thị Hằng', 1994, 'Ninh Bình', 1, 12345678, 12345678, 2),
(6, 0, 'Phùng Thị Phấn', 1996, 'Hanu', 2, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
