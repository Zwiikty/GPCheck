-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 04:39 PM
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
(34, 'zObr5Z', '55555555555', '2022-12-21 10:21:00', '', '', 'Teacher1'),
(35, 'kSfeVs', '19/12/22', '2022-12-19 14:18:00', '', '', 'Teacher1'),
(36, 'q7fu9o', '20/12/2022', '2022-12-20 21:26:00', '', '', 'Teacher1');

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
(2, '64309010030', '13/09/2545', 'Pisit Audjai', 1, 'q7fu9o', 0, 0, '2022-12-20 21:29:41', 1),
(4, 'teacher', 'teacher123', 'Teacher1', 2, '', 0, 0, '2022-12-08 07:21:39', 0),
(13, 'student1', 'student123', 'student', 1, '', 0, 0, '0000-00-00 00:00:00', 0),
(14, 'teacher1', 'teacher123', 'teacher2', 2, '', 0, 0, '0000-00-00 00:00:00', 0),
(16, 'test66', 'test666', 'test6666', 2, '', 0, 0, '0000-00-00 00:00:00', 0);

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
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
