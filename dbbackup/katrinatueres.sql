-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 03:28 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmhc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chicks`
--

CREATE TABLE `chicks` (
  `chicks_id` int(11) NOT NULL,
  `chicksname` varchar(30) NOT NULL,
  `fblink` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `beautypercentage` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicks`
--

INSERT INTO `chicks` (`chicks_id`, `chicksname`, `fblink`, `instagram`, `beautypercentage`) VALUES
(45, 'Darriene Gayle Dusaran', 'https://www.facebook.com/darrienegayle.dusaran', 'https://www.instagram.com/gayle_du/', 80),
(46, 'Danielle Gwen Dusaran', 'https://www.facebook.com/gwenyydusaran', 'https://www.instagram.com/dsrn_/', 80),
(51, 'Kherrie Tejare', 'https://www.facebook.com/kherrieluchi.tejare', 'https://www.instagram.com/_kherriebels/', 100),
(56, 'Franze Beatriz Caballero', 'https://www.facebook.com/franzefries', 'https://www.instagram.com/franzebeatriz/', 90),
(57, ' Juliana Gevela Llaguno', 'https://www.facebook.com/Julillaguno13', 'https://www.instagram.com/yanaallaguno/', 90),
(58, ' Zoe Dominique Gudio', 'https://www.facebook.com/thedarkzoe', 'https://www.instagram.com/zoegudio/', 90);

-- --------------------------------------------------------

--
-- Table structure for table `db_backup`
--

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_backup`
--

INSERT INTO `db_backup` (`back_up_id`, `user_id`, `activity`, `date`, `time`, `activity_status`) VALUES
(1, '22', 'Export', 'July 29, 201', '2:26 am', 'Successfully Exported Database'),
(2, '182', 'Export', 'July 29, 201', '2:42 am', 'Successfully Exported Database'),
(3, '22', 'Export', 'July 29, 201', '2:45 am', 'Successfully Exported Database'),
(4, '22', 'Export', 'July 29, 201', '2:54 am', 'Successfully Exported Database'),
(5, '22', 'Export', 'July 29, 201', '2:58 am', 'Successfully Exported Database'),
(6, '22', 'Export', 'July 29, 201', '3:01 am', 'Successfully Exported Database');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `height` int(10) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `region_province` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `philhealth_no` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `emergency_no` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `address`, `birthdate`, `height`, `contact_no`, `region_province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `status`, `year`) VALUES
(1, 'Jesse Franco Latosa', 20, 'Male', 'Mansilingan, Bacolod City', '08-30-1997', 178, '09163195904', 'Negros Occidental', 'Student', 'Not Applicable', 'Alvin Yanson', '433-2449', 'Registered', 2019),
(3, 'Alvin yanson', 20, 'Male', 'e3qeq', '2019-08-01', 123, '23123', 'dadeq', 'qeqe', 'eqeq', 'eqweq', 'eqeq', 'Registered', 0),
(5, 'Kate Tejare', 20, 'Female', 'Bacolod City', '2019-08-01', 170, '123456', 'Negros Occidental', 'Student', '23131', 'Jesse Franco Latosa', '4332449', 'Registered', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(8) NOT NULL,
  `login` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `time_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `license`, `position`, `username`, `password`, `status`, `login`, `date_created`, `time_created`) VALUES
(21, 'Kherrie Tejare', 'Coming Soon', 'Medical Officer', 'kherrie', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj6cbed987e46bd7dc15cb13cbd1d2d5f445e41514', '1', 'August 11, 2019, 8:56 pm', 'July 29, 2019', '1:58 am'),
(22, 'Jesse Franco Latosa', 'No License', 'Medical Officer', 'admin', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997', '1', 'July 29, 2019, 2:45 am', 'July 29, 2019', '2:00 am'),
(23, 'Daniel Andrew Go', 'Drivers License', 'Midwife', 'daniel', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj1ec558a60b5dda24597816c924776716018caf8b', '1', '', 'July 29, 2019', '3:00 am'),
(24, 'John Phillip Dela Cruz', 'Mothers License', 'Nurse', 'jp', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4', '1', '', 'July 29, 2019', '3:01 am');

-- --------------------------------------------------------

--
-- Table structure for table `users_activity_log`
--

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_activity_log`
--

INSERT INTO `users_activity_log` (`log_id`, `user_id`, `action`, `date_time`) VALUES
(43, 22, 'Updated account of Kherrie Tejare', 'July 29, 2019 - 3:00 am'),
(44, 22, 'Added Daniel Andrew Go as New User', 'July 29, 2019 - 3:00 am'),
(45, 22, 'Added John Phillip Dela Cruz as New User', 'July 29, 2019 - 3:01 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chicks`
--
ALTER TABLE `chicks`
  ADD PRIMARY KEY (`chicks_id`);

--
-- Indexes for table `db_backup`
--
ALTER TABLE `db_backup`
  ADD PRIMARY KEY (`back_up_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_activity_log`
--
ALTER TABLE `users_activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chicks`
--
ALTER TABLE `chicks`
  MODIFY `chicks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `db_backup`
--
ALTER TABLE `db_backup`
  MODIFY `back_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users_activity_log`
--
ALTER TABLE `users_activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
