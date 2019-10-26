-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 06:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(51, 'Kherrie Tejare', 'https://www.facebook.com/kherrieluchi.tejare', 'https://www.instagram.com/_kherriebels/', 100),
(56, 'Franze Beatriz Caballero', 'https://www.facebook.com/franzefries', 'https://www.instagram.com/franzebeatriz/', 90),
(57, ' Juliana Gevela Llaguno', 'https://www.facebook.com/Julillaguno13', 'https://www.instagram.com/yanaallaguno/', 90),
(58, ' Zoe Dominique Gudio', 'https://www.facebook.com/thedarkzoe', 'https://www.instagram.com/zoegudio/', 90),
(60, 'Kate Tejare', 'https://www.facebook.com/kristine.tejare', 'https://www.instagram.com/_kateypery/', 95),
(61, 'Erika Dalucanog', 'None', 'None', 96);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `head_of_the_family` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `rr` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `pe_findings` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `lab_request` varchar(50) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consultation_id`, `patient_id`, `date`, `head_of_the_family`, `weight`, `bp`, `temp`, `rr`, `pr`, `complaints`, `pe_findings`, `diagnosis`, `lab_request`, `month`, `year`, `status`, `date_time`) VALUES
(1, 4, 'October 24, 2019', 'Tatay', '78', '130/50', '37.50', '28', '80', 'Reklamo', 'Nag P.E kag nag Findings', 'bulong', 'requst sa property kung mayu ulo mo', 'Oct', '2019', 'No Prescription', 'October 24, 2019 - 09:34 am'),
(2, 4, 'October 24, 2019', 'Tatay', '78', '130/50', '37.50', '28', '80', 'Reklamo', 'Nag P.E kag nag Findings', 'bulong', 'requst sa property kung mayu ulo mo', 'Oct', '2019', 'With Prescription', 'October 24, 2019 - 09:34 am'),
(3, 4, 'October 20, 2019', 'Tatay', '78', '130/50', '37.50', '28', '80', 'Reklamo', 'Nag P.E kag nag Findings', 'bulong', 'requst sa property kung mayu ulo mo', 'Oct', '2019', 'With Prescription', 'October 24, 2019 - 09:34 am'),
(5, 12, 'October 24, 2019', 'Salvador Latosa', '58', '130/50', '37.5', '28', '80', 'Sakit Tiyan', 'NONE', 'NONE', 'NONE', 'Oct', '2019', 'No Prescription', 'October 24, 2019 - 09:34 am'),
(6, 5, 'October 24, 2019', 'Daddy', '60', '130/80', '37.5', '28', '89', 'Allergy', 'NONE', 'NONE', 'NONE', 'Oct', '2019', 'No Prescription', 'October 24, 2019 - 09:34 am'),
(7, 11, 'October 25, 2019', 'Mommy Cuachon', '80', '170/80', '37.5', '28', '80', 'Sakit Itlog', 'NONE', 'NONE', 'NONE', 'Oct', '2019', 'No Prescription', 'October 25, 2019 - 11:34 am');

-- --------------------------------------------------------

--
-- Table structure for table `db_backup`
--

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_backup`
--

INSERT INTO `db_backup` (`back_up_id`, `user_id`, `activity`, `date`, `time`, `activity_status`) VALUES
(3, '27', 'Export', 'September 22, 2019', '11:17 pm', 'Successfully Exported Database'),
(4, '26', 'Export', 'September 24, 2019', '4:23 am', 'Successfully Exported Database'),
(5, '27', 'Export', 'September 25, 2019', '12:50 pm', 'Successfully Exported Database'),
(6, '27', 'Export', 'October 3, 2019', '4:41 pm', 'Successfully Exported Database'),
(7, '27', 'Export', 'October 4, 2019', '3:23 am', 'Successfully Exported Database'),
(8, '27', 'Export', 'October 4, 2019', '12:27 pm', 'Successfully Exported Database'),
(9, '27', 'Export', 'October 5, 2019', '1:44 am', 'Successfully Exported Database'),
(10, '27', 'Export', 'October 5, 2019', '1:44 am', 'Successfully Exported Database'),
(11, '27', 'Export', 'October 11, 2019', '3:07 am', 'Successfully Exported Database'),
(12, '28', 'Export', 'October 11, 2019', '3:13 am', 'Successfully Exported Database'),
(13, '28', 'Export', 'October 11, 2019', '3:17 am', 'Successfully Exported Database'),
(14, '27', 'Import', 'October 24, 2019', '6:13 pm', 'Successfully Imported Database'),
(15, '27', 'Export', 'October 26, 2019', '11:43 am', 'Successfully Exported Database'),
(16, '27', 'Export', 'October 26, 2019', '12:44 pm', 'Successfully Exported Database');

-- --------------------------------------------------------

--
-- Table structure for table `family_planning`
--

CREATE TABLE `family_planning` (
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `type_of_acceptor` varchar(50) NOT NULL,
  `prev_used_method` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `patient_birthdate` varchar(30) NOT NULL,
  `patient_highest_education` varchar(100) NOT NULL,
  `patient_occupation` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `spouse_birthdate` varchar(50) NOT NULL,
  `spouse_highest_education` varchar(50) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `average_monthly_income` varchar(100) NOT NULL,
  `no_of_living_children` varchar(50) NOT NULL,
  `plan_more_children` varchar(30) NOT NULL,
  `reason_for_practicing_fp` varchar(100) NOT NULL,
  `method_accepted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`family_planning_id`, `patient_id`, `type_of_acceptor`, `prev_used_method`, `date`, `time`, `patient_birthdate`, `patient_highest_education`, `patient_occupation`, `address`, `province`, `spouse_name`, `spouse_birthdate`, `spouse_highest_education`, `spouse_occupation`, `average_monthly_income`, `no_of_living_children`, `plan_more_children`, `reason_for_practicing_fp`, `method_accepted`) VALUES
(1, 4, 'New to the Program', 'Pills', '2019-24-09', '3:57 AM', '1986-07-20', 'High School', 'BHW', 'Mansilingan, Bacolod City', 'Negros Occidental', 'Michael Gerose', '1986-03-29', 'College Graduate', 'Business Administrator', '10000', '3', 'Yes', 'Limiting and Spacing', 'SDM, Billings/Cervical Mucus/Ovulation Method'),
(2, 4, 'Continuing User', 'Pills', '2019-01-10', '12:57 PM', '1986-07-20', 'High School', 'BHW', 'Mansilingan, Bacolod City', 'Negros Occidental', 'Michael Gerose', '1986-03-29', 'College Graduate', 'Business Administrator', '10000', '4', 'Yes', 'Limiting and Spacing', 'SDM, Billings/Cervical Mucus');

-- --------------------------------------------------------

--
-- Table structure for table `fp_follow_up`
--

CREATE TABLE `fp_follow_up` (
  `fp_follow_up_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_service_given` varchar(50) NOT NULL,
  `method_brand` varchar(50) NOT NULL,
  `no_of_units` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `name_of_provider` varchar(50) NOT NULL,
  `next_service_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `immunization_id` int(30) NOT NULL,
  `child_id` int(30) NOT NULL,
  `4p's_no` varchar(30) NOT NULL,
  `nhts_no` varchar(30) NOT NULL,
  `philhealth_no` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `birthtime` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth_weight` varchar(30) NOT NULL,
  `cp_no` varchar(30) NOT NULL,
  `gravida` varchar(30) NOT NULL,
  `para` varchar(30) NOT NULL,
  `abortion` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `mother_age` varchar(30) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `father_age` varchar(30) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `place_of_prenatal` varchar(30) NOT NULL,
  `place_of_delivery` varchar(30) NOT NULL,
  `type_of_delivery` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`immunization_id`, `child_id`, `4p's_no`, `nhts_no`, `philhealth_no`, `gender`, `civil_status`, `birthdate`, `birthtime`, `address`, `birth_weight`, `cp_no`, `gravida`, `para`, `abortion`, `mother_name`, `mother_age`, `mother_occupation`, `father_name`, `father_age`, `father_occupation`, `place_of_prenatal`, `place_of_delivery`, `type_of_delivery`) VALUES
(2, 3, '3343', '3434', '343455', 'Female', 'Single', '2005-15-11', '12:00 PM', 'Prk. Mabinuligon #15 Everlasti', '49', '09738838332', '1', '1', '0', 'Mary Ahmor', '44', 'BHW', 'Jose Manalo', '45', 'Jeepney Driver', 'MHC', 'CHO Bacolod', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `medication_dispensation`
--

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `date_given` varchar(30) NOT NULL,
  `time_given` varchar(30) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date_time_call` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`dispensation_id`, `patient_id`, `medicine_id`, `purpose`, `date_given`, `time_given`, `month`, `year`, `quantity`, `date_time_call`) VALUES
(2, 4, 2, 'TB Medicine', 'October 1, 2019', '11:56 pm', 'Oct', '2019', 3, 'October 1, 2019 11:56 pm'),
(3, 4, 2, 'Consultation', 'October 3, 2019', '3:09 pm', 'Oct', '2019', 3, 'October 3, 2019 3:09 pm'),
(4, 5, 3, 'TB Medicine', 'October 3, 2019', '3:15 pm', 'Oct', '2019', 1, 'October 3, 2019 3:15 pm'),
(5, 7, 2, 'Consultation', 'October 11, 2019', '1:20 am', 'Oct', '2019', 5, 'October 11, 2019 1:20 am'),
(7, 7, 1, 'TB Medicine', 'October 11, 2019', '1:20 am', 'Oct', '2019', 5, 'October 11, 2019 1:20 am'),
(8, 9, 1, 'Consultation', 'October 11, 2019', '1:32 am', 'Oct', '2019', 3, 'October 11, 2019 1:32 am'),
(9, 8, 3, 'Consultation', 'October 11, 2019', '1:49 am', 'Oct', '2019', 100, 'October 11, 2019 1:49 am'),
(10, 9, 1, 'Consultation', 'October 11, 2019', '2:37 am', 'Oct', '2019', 10, 'October 11, 2019 2:37 am'),
(11, 7, 1, 'Consultation', 'October 11, 2019', '2:38 am', 'Oct', '2019', 10, 'October 11, 2019 2:38 am'),
(12, 9, 3, 'Consultation', 'October 15, 2019', '1:11 am', 'Oct', '2019', 2, 'October 15, 2019 1:11 am'),
(13, 14, 6, 'TB Medicine', 'October 15, 2019', '11:00 pm', 'Oct', '2019', 14, 'October 15, 2019 11:00 pm'),
(15, 8, 6, 'Select', 'October 16, 2019', '8:52 am', 'Oct', '2019', 4, 'October 16, 2019 8:52 am'),
(16, 9, 6, 'TB Medicine', 'October 16, 2019', '9:06 am', 'Oct', '2019', 2, 'October 16, 2019 9:06 am'),
(17, 0, 6, 'TB Medicine', 'October 16, 2019', '1:27 pm', 'Oct', '2019', 12, 'October 16, 2019 1:27 pm'),
(18, 8, 6, 'TB Medicine', 'October 16, 2019', '1:42 pm', 'Oct', '2019', 13, 'October 16, 2019 1:42 pm'),
(19, 14, 1, 'Consultation', 'October 24, 2019', '10:30 pm', 'Oct', '2019', 25, 'October 24, 2019 10:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_category` varchar(30) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `date_time_call` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_type`, `medicine_category`, `running_balance`, `date_time_call`) VALUES
(1, 'Ceterizine', 'Tablet', 'Antihistamines', 10, 'August 3, 2019 12:46 pm'),
(2, 'Ambroxol', 'Tablet', 'Cough Preparation', 24, 'August 11, 2019 11:42 pm'),
(3, 'Cefalexin 250 ', 'Tablet', 'Antibiotic', 16, 'August 11, 2019 11:44 pm'),
(4, 'Rifampicin 150 mg', 'Tablet', 'Anti-TB Drugs', 25, 'September 23, 2019 - 5:30 pm'),
(5, 'Isoniazid', 'Tablet', 'Anti-TB Drugs', 20, 'September 23, 2019 - 5:30 pm'),
(6, 'Rifapentine', 'Tablet', 'Anti-TB Drugs', 19, 'September 27, 2019 - 1:47 am'),
(7, 'Claritin', 'Tablet', 'Antihistamines', 25, 'October 11, 2019 - 2:04 am'),
(8, 'Celin', 'Tablet', 'Vitamins', 0, 'October 25, 2019 - 2:11 am'),
(9, 'Biogesic', 'Tablet', 'Analgesic', 0, 'October 25, 2019 - 2:14 am');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stocks`
--

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_stocks`
--

INSERT INTO `medicine_stocks` (`medicine_stock_id`, `medicine_id`, `quantity`, `date`) VALUES
(60, '3', 50, 'October 11, 2019 1:39 am'),
(61, '1', 20, 'October 11, 2019 1:47 am'),
(62, '7', 15, 'October 11, 2019 2:40 am'),
(63, '7', 10, 'October 11, 2019 2:40 am'),
(64, '2', 5, 'October 11, 2019 3:04 am'),
(66, '2', 4, 'October 11, 2019 3:09 am'),
(67, '4', 5, 'October 11, 2019 3:10 am'),
(68, '3', 2, 'October 15, 2019 1:12 am'),
(69, '1', 4, 'October 15, 2019 10:46 pm'),
(70, '1', 30, 'October 16, 2019 8:51 am'),
(71, '6', 13, 'October 16, 2019 1:20 pm'),
(72, '6', 13, 'October 16, 2019 1:29 pm'),
(73, '6', 13, 'October 16, 2019 1:43 pm'),
(74, '6', 5, 'October 24, 2019 10:05 pm'),
(75, '1', 5, 'October 24, 2019 10:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `purok` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `region_province` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `philhealth_no` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `emergency_no` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `civil_status`, `age`, `gender`, `street_address`, `purok`, `birthdate`, `height`, `weight`, `contact_no`, `region_province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `status`, `month`, `year`) VALUES
(4, 'Lolita Villarosa Gerose', 'Married', 53, 'Female', '#60 Area 51, Mansilingan', 'Paghidaet', 'July 20, 1966', 165, 68, '(09) 051312999', 'Negros Occidental', 'BHW', '88-334939733-4', 'Marvin Gerose', '(09) 073773443', 'Registered', 'Sep', 2019),
(5, 'Daniel Andrew Go', 'Single', 21, 'Male', '#1 Area 51', 'Katilingban', 'April 14, 1998', 176, 58, '(09) 061613101', 'Negros Occidental', 'Student', '34-343435343-3', 'Charles Go', '(09) 061613101', 'Registered', 'Oct', 2019),
(6, 'Bernard Bermo', 'Married', 49, 'Male', '#1n Sebastian, Mansilingan', 'Gauzon', 'March 10, 1970', 174, 174, '(88) 888888888', 'Negros Occidental', 'Farmer', '34-343434343-4', 'Erika Bermo', '(30) 303030454', 'Registered', 'Oct', 2019),
(7, 'John Matthew Lorizo', 'Single', 21, 'Male', '#51 Area 52, Mansilingan', 'Gauzon', 'April 07, 1998', 165, 165, '09061613101', 'Negros Occidental', 'Student', '343434564546', 'John Michael Lorizo', '93939343433', 'Registered', 'Oct', 2019),
(8, 'Janeil Alcano', 'Single', 13, 'Male', '#3 Magsaysay', 'Gauzon', 'August 23, 2006', 174, 55, '34343434333', 'Negros Occidental', 'Student', '333333333333', 'Jona Alcano', '33333333454545', 'Registered', 'Oct', 2019),
(9, 'Margarita Diana', 'Married', 43, 'Female', 'Block 17 Lot 19, Mansilingan', 'Lasalle Ville', 'July 20, 1966', 165, 60, '09051312999', 'Negros Occidental', 'BHW', '88334939733434', 'Jose Diana', '0907377344343', 'Registered', 'Sep', 2019),
(10, 'Mercy Buenafuente', 'Married', 38, 'Female', '#3 Everlasting, Mansilingan', 'Kasilingan', 'July 20, 1966', 177, 60, '09051312999', 'Negros Occidental', 'BHW', '88334939733434', 'Johny Buenafuente', '0907377344343', 'Registered', 'Sep', 2019),
(11, 'Dennzel Quatchon', 'Single', 21, 'Male', '#51 Area 51, Mansilingan', 'Gauzon', 'April 07, 1998', 165, 165, '09061613101', 'Negros Occidental', 'Student', '343434564546', 'John Michael Lorizo', '93939343433', 'Registered', 'Dec', 2018),
(12, 'Jesse Franco Latosa', 'Single', 21, 'Male', '#51 Area 51, Mansilingan', 'Gauzon', 'April 07, 1998', 165, 67, '09061613101', 'Negros Occidental', 'Student', '343434564546', 'Salvador Latosa', '93939343433', 'Registered', 'Nov', 2018),
(13, 'Maria Cafra', 'Single', 21, 'Male', '#51 Area 51, Mansilingan', 'Gauzon', 'April 07, 1998', 165, 165, '09061613101', 'Negros Occidental', 'Student', '343434564546', 'John Michael Lorizo', '93939343433', 'Registered', 'Aug', 2019),
(14, 'Renzo Nono', 'Married', 25, 'Male', '#3 Everlasting, Mansilingan', 'Kasilingan', 'July 20, 1966', 165, 60, '09051312999', 'Negros Occidental', 'BHW', '88334939733434', 'Renzy Nono', '0907377344343', 'Registered', 'Jun', 2019),
(15, 'Rommel Adricula', 'Single', 38, 'Male', '#51 Area 51, Mansilingan', 'Gauzon', 'April 07, 1998', 165, 165, '09061613101', 'Negros Occidental', 'Student', '343434564546', 'Rommy Adryx', '93939343433', 'Registered', 'Jul', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `patient_child`
--

CREATE TABLE `patient_child` (
  `child_id` int(11) NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_education` varchar(50) NOT NULL,
  `mother_occupation` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_education` varchar(50) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `date_first_seen` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `birth_weight` varchar(50) NOT NULL,
  `place_of_delivery` varchar(50) NOT NULL,
  `birth_register_date` varchar(50) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_child`
--

INSERT INTO `patient_child` (`child_id`, `child_name`, `gender`, `mother_name`, `mother_education`, `mother_occupation`, `father_name`, `father_education`, `father_occupation`, `date_first_seen`, `birthdate`, `birth_weight`, `place_of_delivery`, `birth_register_date`, `purok`, `street_address`, `status`, `year`) VALUES
(3, 'Hilary Ahmor Sipat', 'Female', 'Mary Ann Sipat', 'High School Graduate', 'BHW', 'Hilario Dorimon', 'College Graduate', 'Sr. Salesman', '2005-15-11', '2005-15-11', '49', 'CLMMRH', '2005-15-11', 'Mabinuligon', '#15 Everlasting', 'Registered', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal`
--

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctors_advice` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `presentation` varchar(100) NOT NULL,
  `complaints` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenatal`
--

INSERT INTO `prenatal` (`prenatal_id`, `patient_id`, `doctors_advice`, `date`, `presentation`, `complaints`) VALUES
(1, 4, 'For CBC, urinalysis', '2019-23-09', '', ''),
(2, 10, 'For CBC, urinalysis', '2019-23-09', 'MICROSOFT POWERPOINT', 'NAGDADALANG TAE');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal_follow_up`
--

CREATE TABLE `prenatal_follow_up` (
  `follow_up_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `prenatal_follow_up`
--

INSERT INTO `prenatal_follow_up` (`follow_up_id`, `user_id`, `patient_id`, `follow_up_date_time`, `remarks`) VALUES
(3, 27, 4, 'October 20, 2019 9:00 AM', 'Prenatal Consultation'),
(4, 27, 10, 'October 25, 2019 10:00 AM', 'Prenatal Consultation'),
(5, 27, 9, 'October 20, 2019 9:30 AM', 'Prenatal Consultation'),
(6, 27, 10, 'October 26, 2019 9:28 AM', 'Prenatal Consultation');

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
(23, 'Daniel Andrew Go', 'Drivers License', 'Midwife', 'daniel', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj02e0a999c50b1f88df7a8f5a04e1b76b35ea6a88', '1', 'September 22, 2019, 4:20 am', 'July 29, 2019', '3:00 am'),
(24, 'John Phillip Dela Cruz', 'Mothers License', 'Nurse', 'jp', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4', '1', 'September 13, 2019, 8:43 pm', 'July 29, 2019', '3:01 am'),
(26, 'Jesse Franco Latosa', 'dfdfdadf', 'Nurse', 'doctor101', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997', '1', 'October 4, 2019, 2:47 am', 'September 20, 2019', '12:25 am'),
(27, 'Diana Rose S. Laput', '123456789', 'Medical Officer', 'admin', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997', '1', 'October 26, 2019, 12:06 pm', 'September 22, 2019', '4:01 am'),
(28, 'Manilyn V. Jimera', '343433434', 'Nurse', 'nurse101', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj5b18b25be6c088cda0cc33754c98966b151312f6', '1', 'October 11, 2019, 3:11 am', 'September 22, 2019', '4:01 am'),
(29, 'Imelita 0. Anjao', '345343', 'Midwife', 'midwife101', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60f94e5eec92755f216e913ccb9f1851037ba194', '1', '', 'September 22, 2019', '4:02 am'),
(30, 'Arian M. Garcia', '3487y98u9', 'Midwife', 'midwife', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjb2f3e1167949b5ee9c5b25b3894cbc542f7878c7', '1', '', 'September 22, 2019', '4:02 am');

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
(339, 27, 'added 20 pieces of 1 to stocks', 'October 11, 2019 1:47 am'),
(340, 27, 'dispensed 100 Cefalexin 250  to Janeil Alcano', 'October 11, 2019 1:49 am'),
(341, 27, 'Added Claritin as new medicine', 'October 11, 2019 - 2:04 am'),
(342, 27, 'dispensed 10 Ceterizine to Margarita Diana', 'October 11, 2019 2:37 am'),
(343, 27, 'dispensed 10 Ceterizine to John Matthew Lorizo', 'October 11, 2019 2:38 am'),
(344, 27, 'added 15 pieces of 7 to stocks', 'October 11, 2019 2:40 am'),
(345, 27, 'added 10 pieces of 7 to stocks', 'October 11, 2019 2:40 am'),
(346, 27, 'added 5 pieces of 2 to stocks', 'October 11, 2019 3:04 am'),
(347, 27, 'added 4 pieces of 1 to stocks', 'October 11, 2019 3:08 am'),
(348, 27, 'added 4 pieces of  to stocks', 'October 11, 2019 3:09 am'),
(349, 27, 'added 5 pieces of Rifampicin 150 mg to stocks', 'October 11, 2019 3:10 am'),
(350, 28, 'Successfully Backup the database', 'October 11, 2019, 3:17 am'),
(351, 27, 'dispensed 2 Cefalexin 250  to Margarita Diana', 'October 15, 2019 1:11 am'),
(352, 27, 'added 2 pieces of Cefalexin 250  to stocks', 'October 15, 2019 1:12 am'),
(353, 27, 'Deactivated User Account', 'October 15, 2019 - 1:15 am'),
(354, 27, 'Activated User Account', 'October 15, 2019 - 1:15 am'),
(355, 27, 'added 4 pieces of Ceterizine to stocks', 'October 15, 2019 10:46 pm'),
(356, 182, 'dispensed 14 Rifapentine to Renzo Nono', 'October 15, 2019 11:00 pm'),
(357, 182, 'dispensed 28 Ceterizine to ', 'October 16, 2019 8:50 am'),
(358, 182, 'added 30 pieces of Ceterizine to stocks', 'October 16, 2019 8:51 am'),
(359, 27, 'dispensed 4 Rifapentine to Janeil Alcano', 'October 16, 2019 8:52 am'),
(360, 182, 'dispensed 2 Rifapentine to Margarita Diana', 'October 16, 2019 9:06 am'),
(361, 27, 'added 13 pieces of Rifapentine to stocks', 'October 16, 2019 1:20 pm'),
(362, 27, 'dispensed 12 Rifapentine to ', 'October 16, 2019 1:27 pm'),
(363, 27, 'added 13 pieces of Rifapentine to stocks', 'October 16, 2019 1:29 pm'),
(364, 27, 'dispensed 13 Rifapentine to Janeil Alcano', 'October 16, 2019 1:42 pm'),
(365, 27, 'added 13 pieces of Rifapentine to stocks', 'October 16, 2019 1:43 pm'),
(366, 27, 'added 5 pieces of Rifapentine to stocks', 'October 24, 2019 10:05 pm'),
(367, 27, 'Added Jesse Franco Latosa to Consultation', 'October 24, 2019 - 10:22 pm'),
(368, 27, 'Added Jesse Franco Latosa to Consultation', 'October 24, 2019 - 10:26 pm'),
(369, 27, 'Added Daniel Andrew Go to Consultation', 'October 24, 2019 - 10:28 pm'),
(370, 27, 'dispensed 25 Ceterizine to Renzo Nono', 'October 24, 2019 10:30 pm'),
(371, 27, 'added 5 pieces of Ceterizine to stocks', 'October 24, 2019 10:30 pm'),
(372, 1, 'Added Celin as new medicine', 'October 25, 2019 - 2:11 am'),
(373, 1, 'Added Biogesic as new medicine', 'October 25, 2019 - 2:14 am'),
(374, 27, 'Added Dennzel Quatchon to Consultation', 'October 25, 2019 - 11:34 am'),
(375, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 12:16 pm'),
(376, 27, 'Edited Bernard Bermo Patient Profile', 'October 25, 2019 - 12:16 pm'),
(377, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 12:17 pm'),
(378, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:22 pm'),
(379, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 12:23 pm'),
(380, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 12:24 pm'),
(381, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 12:24 pm'),
(382, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:24 pm'),
(383, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 12:26 pm'),
(384, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:27 pm'),
(385, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:27 pm'),
(386, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:28 pm'),
(387, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:28 pm'),
(388, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 25, 2019 - 12:28 pm'),
(389, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 25, 2019 - 11:26 pm'),
(390, 27, 'Added a follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:31 am'),
(391, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:36 am'),
(392, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:38 am'),
(393, 27, 'Successfully Backup the database', 'October 26, 2019, 11:43 am'),
(394, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:48 am'),
(395, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:50 am'),
(396, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:51 am'),
(397, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:54 am'),
(398, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:55 am'),
(399, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'October 26, 2019 - 11:57 am'),
(400, 27, 'Successfully Backup the database', 'October 26, 2019, 12:44 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chicks`
--
ALTER TABLE `chicks`
  ADD PRIMARY KEY (`chicks_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_id`);

--
-- Indexes for table `db_backup`
--
ALTER TABLE `db_backup`
  ADD PRIMARY KEY (`back_up_id`);

--
-- Indexes for table `family_planning`
--
ALTER TABLE `family_planning`
  ADD PRIMARY KEY (`family_planning_id`);

--
-- Indexes for table `fp_follow_up`
--
ALTER TABLE `fp_follow_up`
  ADD PRIMARY KEY (`fp_follow_up_id`);

--
-- Indexes for table `immunization`
--
ALTER TABLE `immunization`
  ADD PRIMARY KEY (`immunization_id`);

--
-- Indexes for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  ADD PRIMARY KEY (`dispensation_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  ADD PRIMARY KEY (`medicine_stock_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `patient_id_2` (`patient_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_child`
--
ALTER TABLE `patient_child`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `prenatal`
--
ALTER TABLE `prenatal`
  ADD PRIMARY KEY (`prenatal_id`);

--
-- Indexes for table `prenatal_follow_up`
--
ALTER TABLE `prenatal_follow_up`
  ADD PRIMARY KEY (`follow_up_id`);

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
  MODIFY `chicks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_backup`
--
ALTER TABLE `db_backup`
  MODIFY `back_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `family_planning`
--
ALTER TABLE `family_planning`
  MODIFY `family_planning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fp_follow_up`
--
ALTER TABLE `fp_follow_up`
  MODIFY `fp_follow_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `immunization_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  MODIFY `dispensation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  MODIFY `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patient_child`
--
ALTER TABLE `patient_child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prenatal`
--
ALTER TABLE `prenatal`
  MODIFY `prenatal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prenatal_follow_up`
--
ALTER TABLE `prenatal_follow_up`
  MODIFY `follow_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users_activity_log`
--
ALTER TABLE `users_activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
