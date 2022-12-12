-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 05:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpcheckdb`
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
  `r_latitude` varchar(10) NOT NULL,
  `r_longitude` varchar(10) NOT NULL,
  `r_teacher` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `r_code`, `r_name`, `r_time`, `r_latitude`, `r_longitude`, `r_teacher`) VALUES
(29, 'boUBMZ', '12', '2022-12-12 16:13:00', '', '', 'Teacher1'),
(30, 'qzOUVo', '22', '2022-12-13 16:13:00', '', '', 'Teacher1'),
(31, 'imxot3', 'admin', '2022-12-12 20:26:00', '', '', 'Admin '),
(32, '4K1Arq', 'sadsad', '2022-12-12 22:22:00', '', '', 'Teacher1');

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
  `user_latitude` int(10) NOT NULL,
  `user_longitude` int(10) NOT NULL,
  `user_time` datetime NOT NULL,
  `user_checkstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_status`, `user_r_code`, `user_latitude`, `user_longitude`, `user_time`, `user_checkstatus`) VALUES
(1, 'admin', 'admin123', 'Admin ', 0, '', 0, 0, '2022-11-21 00:00:00', 0),
(2, '64309010030', '13/09/2545', 'Pisit Audjai', 1, 'qzOUVo', 0, 0, '2022-12-08 07:19:51', 1),
(4, 'teacher', 'teacher123', 'Teacher1', 2, '', 0, 0, '2022-12-08 07:21:39', 0);

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
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
