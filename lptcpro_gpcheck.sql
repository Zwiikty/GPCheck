-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2023 at 11:11 AM
-- Server version: 10.3.24-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lptcpro_gpcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `r_id` int(11) NOT NULL,
  `r_code` varchar(6) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_time` datetime NOT NULL,
  `r_latitude` double NOT NULL,
  `r_longitude` double NOT NULL,
  `r_teacher` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `r_code`, `r_name`, `r_time`, `r_latitude`, `r_longitude`, `r_teacher`) VALUES
(39, 'bWXPBt', 'แผนก', '2022-12-24 20:05:00', 18.289168, 99.483426, 'Teacher1'),
(42, '0mBeAo', 'NY', '2022-12-26 19:52:00', 40.71285, -74.013991, 'Teacher1'),
(44, 'pBLCun', 'Hali Iceland', '2022-12-26 19:54:00', 64.129811, -16.017196, 'Teacher1'),
(45, 'VnmObx', 'ข้างบ้าน', '2022-12-26 19:54:00', 18.249292, 99.488585, 'Teacher1'),
(55, '5xAESm', 'sadsa', '0000-00-00 00:00:00', 18.8942314, 99.0792263, 'Teacher1'),
(58, 'npJt0K', '1234', '2023-01-23 17:42:00', 18.2492239, 99.488819, 'Teacher1'),
(59, 'mYp0nf', 'Ggggg', '2023-01-23 17:51:00', 18.2492253, 99.4888216, 'Teacher1'),
(60, 'n9RKOi', 'Tttttt', '0000-00-00 00:00:00', 18.2492253, 99.4888216, 'Teacher1'),
(61, 'ogPsx0', 'assasas', '2023-01-23 20:06:00', 18.8942314, 99.0792263, 'Teacher1'),
(67, 'tA98E5', 'hello world', '2023-01-27 21:41:00', 30, 30, 'teacher1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_username` varchar(11) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_status` int(1) NOT NULL,
  `user_r_code` varchar(6) NOT NULL,
  `user_latitude` double NOT NULL,
  `user_longitude` double NOT NULL,
  `user_time` datetime NOT NULL,
  `user_checkstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_status`, `user_r_code`, `user_latitude`, `user_longitude`, `user_time`, `user_checkstatus`) VALUES
(1, 'admin', '!Admin123', 'Admin ', 0, '', 0, 0, '2022-11-21 00:00:00', 0),
(2, '64309010030', '13/09/2545', 'Pisit Audjai', 1, 'S7B5uf', 18.2492291, 99.4888468, '2023-01-23 18:30:36', 1),
(4, 'teacher', 'teacher123', 'Teacher', 2, '', 0, 0, '2022-12-08 07:21:39', 0),
(13, 'student1', 'student123', 'student1', 1, 'XiVDhf', 0, 0, '2023-01-25 09:30:43', 1),
(14, 'teacher1', 'teacher123', 'teacher1', 2, '', 0, 0, '0000-00-00 00:00:00', 0),
(16, 'test4545', 'test123', 'test4545', 1, '', 0, 0, '0000-00-00 00:00:00', 0),
(17, 'student2', 'student123', 'student2', 1, 'mYp0nf', 18.2492241, 99.4888246, '2023-01-23 21:04:55', 1),
(18, 'student3', 'student123', 'student3', 1, 'bWXPBt', 18.2891276, 99.4833287, '2023-01-25 10:39:32', 1),
(20, 'teacher2', 'teacher123', 'teacher2', 2, '', 0, 0, '0000-00-00 00:00:00', 0),
(21, 'teacher3', 'teacher123', 'teacher3', 2, '', 0, 0, '0000-00-00 00:00:00', 0),
(29, 'student4', 'student123', 'student4', 1, '', 0, 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
