-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 05:16 AM
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
-- Table structure for table `brothers_and_sisters`
--

CREATE TABLE `brothers_and_sisters` (
  `bs_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `birthdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brothers_and_sisters`
--

INSERT INTO `brothers_and_sisters` (`bs_id`, `child_id`, `fullname`, `gender`, `birthdate`) VALUES
(1, 3, 'John Michael Sipat', 'Male', 'August 30, 1998'),
(2, 3, 'Michaela Sipat', 'Female', 'June 25, 1998'),
(3, 3, 'Desmond Sipat', 'Male', 'April 21, 1994'),
(4, 6, 'Sansa Stark', 'Female', 'April 14, 2010');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `consultation_date` varchar(50) NOT NULL,
  `head_of_the_family` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `rr` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `complaints` varchar(600) NOT NULL,
  `complaints_description` varchar(300) NOT NULL,
  `pe_findings` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `lab_request` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consultation_id`, `patient_id`, `consultation_date`, `head_of_the_family`, `weight`, `height`, `bp`, `temp`, `rr`, `pr`, `complaints`, `complaints_description`, `pe_findings`, `diagnosis`, `lab_request`, `age`, `gender`, `purok`, `month`, `year`, `status`, `date_time`) VALUES
(57, 7, '2020-02-01', '333', '33', '33', '333/33', '33.3', '333', '333', 'Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others', 'adfa', 'af', 'asdfadf', 'asf', '21', 'Male', 'Gauzon', 'Feb', '2020', 'No Prescription', 'February 1, 2020 - 9:25 pm'),
(58, 37, '2020-02-01', '3333', '333', '33', '333/33', '33.3', '33', '33', 'Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache', 'asdf', 'asdf', 'asdf', 'asdf', '21', 'Male', 'Kasilingan', 'Feb', '2020', 'No Prescription', 'February 1, 2020 - 9:27 pm'),
(59, 27, '2020-02-01', '33aEFADF', '33', '33', '333/33', '33.3', '33', '33', 'Stomach Ache', 'ADF', 'ASDF', 'ASDF', 'ASDF', '50', 'Female', 'Katilingban', 'Feb', '2020', 'No Prescription', 'February 1, 2020 - 9:28 pm'),
(60, 7, '2020-02-01', '333', '33', '33', '333/33', '33.3', '333', '333', 'Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others', 'adfa', 'af', 'asdfadf', 'asf', '21', 'Male', 'Gauzon', 'Jan', '2020', 'No Prescription', 'February 1, 2020 - 9:25 pm'),
(61, 5, '2020-02-01', '33', '33', '33', '333/33', '33.3', '33', '33', 'Conjunctivitis', '343', '3434', '343', '34', '21', 'Male', 'Katilingban', 'Feb', '2020', 'No Prescription', 'February 1, 2020 - 9:32 pm'),
(62, 39, '2020-02-02', 'Salvador Latosa', '60', '178', '120/50', '36.9', '80', '60', 'Colds and Flu, Fever, Headache', 'samp;le text', '`1!@#$%^&*', '!@~!@#$%^&*(', 'sdfaddf', '21', 'Male', 'Mabinuligon', 'Feb', '2020', 'With Prescription', 'February 2, 2020 - 1:31 pm');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_prescription`
--

CREATE TABLE `consultation_prescription` (
  `prescription_id` int(11) NOT NULL,
  `consultation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medicine_category` varchar(50) NOT NULL,
  `medname` varchar(50) NOT NULL,
  `6am` varchar(10) NOT NULL,
  `8am` varchar(10) NOT NULL,
  `12nn` varchar(10) NOT NULL,
  `2pm` varchar(10) NOT NULL,
  `4pm` varchar(10) NOT NULL,
  `6pm` varchar(10) NOT NULL,
  `8pm` varchar(10) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `recommendation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation_prescription`
--

INSERT INTO `consultation_prescription` (`prescription_id`, `consultation_id`, `patient_id`, `user_id`, `medicine_category`, `medname`, `6am`, `8am`, `12nn`, `2pm`, `4pm`, `6pm`, `8pm`, `qty`, `recommendation`) VALUES
(54, 45, 29, 27, 'Anti-TB Drugs', 'Rifampicin + isoniazid', '?', '', '?', '', '?', '', '', '3', '33'),
(55, 48, 37, 27, 'Antibiotic', 'Cefalexin 250 ', 'âœ“', '', 'âœ“', '', 'âœ“', '', '', '3', 'dfdf'),
(56, 47, 29, 27, 'Antibiotic', 'Cefalexin 250 ', 'âœ“', '', 'âœ“', '', 'âœ“', '', 'âœ“', '4', '4'),
(57, 49, 30, 27, 'Anti-TB Drugs', 'Rifapentine', 'âœ“', '', 'âœ“', '', 'âœ“', '', '', '33', '33'),
(58, 50, 38, 27, 'Antibiotic', 'Cefalexin 250 ', '', 'âœ“', '', 'âœ“', 'âœ“', '', '', '3', 'adfasdf'),
(59, 62, 39, 27, 'Antipyretic', 'Biogesic', 'âœ“', '', 'âœ“', '', 'âœ“', '', '', '33', '33');

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
(41, '27', 'Export', '01/15/2020', '10:46 pm', 'Successfully Exported Database'),
(42, '27', 'Export', '01/19/2020', '11:40 am', 'Successfully Exported Database'),
(43, '27', 'Export', '02/01/2020', '9:31 pm', 'Successfully Exported Database');

-- --------------------------------------------------------

--
-- Table structure for table `family_planning`
--

CREATE TABLE `family_planning` (
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `type_of_acceptor` varchar(50) NOT NULL,
  `prev_used_method` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `patient_highest_education` varchar(100) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `spouse_birthdate` varchar(50) NOT NULL,
  `spouse_highest_education` varchar(50) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `average_monthly_income` varchar(100) NOT NULL,
  `no_of_living_children` varchar(50) NOT NULL,
  `plan_more_children` varchar(30) NOT NULL,
  `reason_for_practicing_fp` varchar(100) NOT NULL,
  `method_accepted` varchar(200) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`family_planning_id`, `patient_id`, `type_of_acceptor`, `prev_used_method`, `date_time`, `patient_highest_education`, `spouse_name`, `spouse_birthdate`, `spouse_highest_education`, `spouse_occupation`, `average_monthly_income`, `no_of_living_children`, `plan_more_children`, `reason_for_practicing_fp`, `method_accepted`, `purok`, `status`, `month`, `year`) VALUES
(44, 4, 'New to the Program', 'None', '2019-11-01 8:37 PM', 'College', 'Marvin Gerose', 'May 16, 1974', 'College', 'Businessman', '15000', '3', 'No', 'Sex Drive', 'Condom', 'Kasilingan', 'Assessed', 'Nov', '2019'),
(45, 20, 'New to the Program', 'None', '2018-11-01 8:37 PM', 'College', 'James Mendez', 'August 4, 1986', 'College', 'Businessman', '15000', '2', 'No', 'To prevent the chance of having a child', 'COC', 'Kahirup B', 'Assessed', 'Dec', '2019'),
(46, 38, 'New to the Program', 'COC', '2020/01/20 8:57 PM', 'fdfdf', 'adfad', '2020-01-22', 'dfdf', 'dfd', '333333', '3', 'No', 'edf3', 'Condom', 'Kasilingan', 'Assessed', 'Jan', '2020'),
(47, 38, 'Continuing User', 'Condom', '2020/01/29 9:11 PM', '3', '33', '2020-01-30', '3', '3', '33', '3', 'No', '\'; DROP TABLE hhello; #', 'IUD', 'Kasilingan', 'Assessed', 'Jan', '2020');

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
  `next_service_date` varchar(50) NOT NULL,
  `follow_up_status` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fp_follow_up`
--

INSERT INTO `fp_follow_up` (`fp_follow_up_id`, `patient_id`, `date_service_given`, `method_brand`, `no_of_units`, `remarks`, `name_of_provider`, `next_service_date`, `follow_up_status`) VALUES
(40, 4, '12-02-2019', 'Condom', '4', 'Try kung magbusong ka or indi', 'Imelita 0. Anjao', '12-23-2019', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `immunization_id` int(30) NOT NULL,
  `child_id` int(30) NOT NULL,
  `philhealth_no` varchar(30) NOT NULL,
  `birthtime` varchar(30) NOT NULL,
  `birth_weight` varchar(30) NOT NULL,
  `cp_no` varchar(30) NOT NULL,
  `gravida` varchar(30) NOT NULL,
  `para` varchar(30) NOT NULL,
  `abortion` varchar(30) NOT NULL,
  `mother_age` varchar(30) NOT NULL,
  `father_age` varchar(30) NOT NULL,
  `place_of_prenatal` varchar(30) NOT NULL,
  `place_of_delivery` varchar(30) NOT NULL,
  `type_of_delivery` varchar(30) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`immunization_id`, `child_id`, `philhealth_no`, `birthtime`, `birth_weight`, `cp_no`, `gravida`, `para`, `abortion`, `mother_age`, `father_age`, `place_of_prenatal`, `place_of_delivery`, `type_of_delivery`, `purok`, `gender`, `status`, `month`, `year`, `date_time`) VALUES
(10, 3, '33-483838338-3', '12:00 PM', '4.9', '(09) 934374343', '1', '1', '0', '43', '47', 'MHC', 'CHO Bacolod', 'Normal', 'Kahirup B', 'Female', 'Registered', 'Nov', '2019', '2019-01-01'),
(11, 8, '11-025666793-2', '6:05 AM', '2.83', '(09) 038383838', '1', '1', '0', '25', '22', 'CHO Lying In', 'CHO Lying In', 'Normal', 'Kasilingan', 'Female', 'Registered', 'Dec', '2019', '2019-01-01'),
(13, 10, '33-333333333-3', '8:28 AM', '3.04', '', '3', '3', '9', '20', '21', 'Taculing Health Center', 'CHO - Bacolod', 'NSVD', 'Paglaum', 'Male', 'Registered', 'Dec', '2019', '2020-01-01'),
(14, 11, '83-838389383-8', '12:15 AM', '2.5', '(09) 100306293', '2', '2', '0', '27', '22', 'MHC', 'BCHC', 'NSVD', 'Matahum', 'Female', 'Registered', 'Dec', '2019', '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `immunization_consultation`
--

CREATE TABLE `immunization_consultation` (
  `ic_id` int(11) NOT NULL,
  `immunization_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `nutritional_status` varchar(50) NOT NULL,
  `medical_history` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `rr` varchar(50) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `plan_of_action` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immunization_consultation`
--

INSERT INTO `immunization_consultation` (`ic_id`, `immunization_id`, `child_id`, `nutritional_status`, `medical_history`, `date`, `temp`, `rr`, `bp`, `weight`, `complaints`, `diagnosis`, `plan_of_action`, `remarks`) VALUES
(7, 10, 3, 'SAMPLE 1 ', 'SAMPLE 2', 'November 27, 2019', '35.0', '90', '140/40', '30', 'SAMPLE 3', 'SAMPLE 5', 'SAMPLE 6', 'SAMPLE 7');

-- --------------------------------------------------------

--
-- Table structure for table `immunization_treatment`
--

CREATE TABLE `immunization_treatment` (
  `treatment_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `treatment_type` varchar(30) NOT NULL,
  `treatment_date` varchar(30) NOT NULL,
  `treatment_age` varchar(30) NOT NULL,
  `treatment_weight` varchar(30) NOT NULL,
  `treatment_height` varchar(30) NOT NULL,
  `treatment_temp` varchar(30) NOT NULL,
  `treatment_remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immunization_treatment`
--

INSERT INTO `immunization_treatment` (`treatment_id`, `child_id`, `treatment_type`, `treatment_date`, `treatment_age`, `treatment_weight`, `treatment_height`, `treatment_temp`, `treatment_remarks`) VALUES
(15, 3, 'BCG', 'November 20, 2019', '1 month + 15 days', '4.9', '54', '37.0', ''),
(16, 8, 'BCG', 'November 18, 2018', '', '', '', '', ''),
(17, 8, 'HEPA B', 'November 8, 2018', '', '', '', '', ''),
(18, 8, 'PHIB 1', 'January 1, 2019', '9 weeks and 6 days', '4.7', '54', '36.2', 'Hrm 13'),
(19, 8, 'PHIB 2', 'February 6, 2019', '', '5.5', '55', '46.6', ''),
(20, 8, 'PHIB 3', 'March 6, 2019', '', '6.3', '60', '36.3', '14.8'),
(21, 8, 'OPV 1', 'January 9, 2019', '', '', '', '', ''),
(22, 8, 'OPV 2', 'February 6, 2019', '', '', '', '', ''),
(23, 8, 'OPV 3', 'March 6, 2019', '', '', '', '', ''),
(24, 8, 'IPV', 'March 6, 2019', '', '', '', '', ''),
(25, 8, 'PCV 1', 'January 9, 2019', '', '', '', '', ''),
(26, 8, 'PCV 2', 'February 6, 2019', '', '', '', '', ''),
(27, 8, 'PCV 3', 'March 6, 2019', '', '', '', '', ''),
(28, 8, 'MVO(6 mos.)', 'May 15, 2019', '', '6.9', '61', '36.7', ''),
(29, 8, 'MV(9 mos.)', 'August 14, 2019', '39 weeks', '8', '64', '36.8', ''),
(30, 8, 'MMR', 'November 19, 2019', '53 weeks', '8.2', '68.5', '36.1', ''),
(31, 9, 'BCG', 'September 4, 2019', '', '', '', '', ''),
(32, 9, 'HEPA B', 'September 3, 2019', '', '', '', '', ''),
(33, 9, 'PHIB 1', 'November 23, 2019', '7 weeks 1 day', '4', '53', '36.4', ''),
(34, 9, 'PHIB 2', 'November 20, 2019', '11 weeks', '4.5', '54.1', '36.8', '\n'),
(35, 9, 'OPV 1', 'October 23, 2019', '', '', '', '', ''),
(36, 9, 'OPV 2', 'November 20, 2019', '', '', '', '', ''),
(37, 9, 'PCV 1', 'November 23, 2019', '', '', '', '', ''),
(38, 9, 'PCV 2', 'November 20, 2019', '', '', '', '', ''),
(39, 10, 'BCG', 'July 25, 2019', '', '', '', '', ''),
(40, 10, 'HEPA B', 'July 24, 2019', '', '', '', '', ''),
(41, 10, 'PHIB 1', 'November 13, 2019', '16 weeks', '8.7', '61.5', '36.7', ''),
(42, 10, 'OPV 1', 'November 13, 2019', '', '', '', '', ''),
(43, 10, 'PCV 1', 'November 13, 2019', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `medical_history_id` int(11) NOT NULL,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `heent` varchar(500) NOT NULL,
  `chest_heart` varchar(500) NOT NULL,
  `abdomen` varchar(500) NOT NULL,
  `genital` varchar(500) NOT NULL,
  `extremities` varchar(500) NOT NULL,
  `skin` varchar(500) NOT NULL,
  `history` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`medical_history_id`, `family_planning_id`, `patient_id`, `heent`, `chest_heart`, `abdomen`, `genital`, `extremities`, `skin`, `history`) VALUES
(31, 44, 4, 'Epilepsy/Convulsion/Seizure', 'Severe chest pain', 'Mass in the abdomen', 'Mass in the uterus', 'Severe varicosities', 'Yellowish Skin', 'Diabetes'),
(32, 45, 20, 'Epilepsy/Convulsion/Seizure, Severe Headache/dizziness', 'Severe chest pain, Shortness of breath and easy fatigability', 'Mass in the abdomen', 'Mass in the uterus, Vaginal discharge', 'Severe varicosities', 'Yellowish Skin', 'Smoking, Drug Intake (anti-tuberculosis,\n                                                                            anti-diabetic,\n                                                                            anticonvulsant)'),
(33, 46, 38, 'Epilepsy/Convulsion/Seizure', 'Shortness of breath and easy fatigability', 'History of gallbladder disease', 'Vaginal discharge', 'Severe varicosities', 'Yellowish Skin', 'Diabetes'),
(34, 47, 38, 'Epilepsy/Convulsion/Seizure', 'Severe chest pain', 'Mass in the abdomen', 'Vaginal discharge', 'Severe varicosities', 'Yellowish Skin', 'Diabetes');

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
(47, 5, 19, 'Consultation', '12-08-19', '5:56 pm', 'Dec', '2019', 2, 'December 8, 2019 5:56 pm'),
(48, 27, 19, 'Consultation', '12-08-19', '6:04 pm', 'Dec', '2019', 5, 'December 8, 2019 6:04 pm');

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
(2, 'Ambroxol', 'Tablet', 'Cough Preparation', 31, 'August 11, 2019 11:42 pm'),
(3, 'Cefalexin 250 ', 'Tablet', 'Antibiotic', 25, 'August 11, 2019 11:44 pm'),
(4, 'Rifampicin 150 mg', 'Tablet', 'Anti-TB Drugs', 14, 'September 23, 2019 - 5:30 pm'),
(5, 'Isoniazid', 'Tablet', 'Anti-TB Drugs', 9, 'September 23, 2019 - 5:30 pm'),
(6, 'Rifapentine', 'Tablet', 'Anti-TB Drugs', 20, 'September 27, 2019 - 1:47 am'),
(9, 'Biogesic', 'Tablet', 'Antipyretic', 30, 'October 25, 2019 - 2:14 am'),
(10, 'Cecon 500 mg', 'Tablet', 'Vitamins', 20, 'November 17, 2019 - 12:42 pm'),
(13, 'Rifampicin + isoniazid', 'Tablet', 'Anti-TB Drugs', 0, 'November 27, 2019 - 2:49 pm'),
(15, 'Rifampicin + isoniazid + Pyrazinamide + Ethambutol', 'Tablet', 'Anti-TB Drugs', 25, 'November 27, 2019 - 2:50 pm'),
(16, 'Calcium Carbonate (Calcimate)', 'Tablet', 'Antibiotic', 25, 'November 27, 2019 - 2:51 pm'),
(17, 'Ferrous Sulphate + Folic Acid', 'Tablet', 'Vitamins', 20, 'November 27, 2019 - 2:54 pm'),
(18, 'Vitamin B Complex', 'Tablet', 'Vitamins', 20, 'December 3, 2019 - 11:38 pm'),
(19, 'Celecoxib 200 mg', 'Capsule', 'Analgesic', 15, 'December 3, 2019 - 11:42 pm');

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
(94, '10', 20, '12-08-19 5:59 pm'),
(95, '18', 5, '12-08-19 6:01 pm');

-- --------------------------------------------------------

--
-- Table structure for table `obstetrical_history`
--

CREATE TABLE `obstetrical_history` (
  `obstetrical_history_id` int(11) NOT NULL,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `num_of_pregnancies` varchar(30) NOT NULL,
  `full_term` varchar(30) NOT NULL,
  `premature` varchar(30) NOT NULL,
  `abortions` varchar(30) NOT NULL,
  `living_children` varchar(30) NOT NULL,
  `dateoflastdelivery` varchar(30) NOT NULL,
  `typeoflastdelivery` varchar(100) NOT NULL,
  `pastmenstrualperiod` varchar(200) NOT NULL,
  `lastmenstrualperiod` varchar(200) NOT NULL,
  `dcmenstrualbleeding` varchar(200) NOT NULL,
  `history` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obstetrical_history`
--

INSERT INTO `obstetrical_history` (`obstetrical_history_id`, `family_planning_id`, `patient_id`, `num_of_pregnancies`, `full_term`, `premature`, `abortions`, `living_children`, `dateoflastdelivery`, `typeoflastdelivery`, `pastmenstrualperiod`, `lastmenstrualperiod`, `dcmenstrualbleeding`, `history`) VALUES
(31, 44, 4, '1', '2', '3', '0', '3', 'November 11, 2019 ', 'Normal ', '3', '3', '1 Hour', 'Hydatidiform mole (within the last 12\n                                                                    months)'),
(32, 45, 20, '1', '2', '1', '0', '2', 'May 22, 2018 ', 'Normal ', '2', '1', '30 mins', 'Hydatidiform mole (within the last 12\n                                                                    months)'),
(33, 46, 38, '3', '3', '3', '3', '3', '2020-01-15 ', '3 ', '3', '3', '3', 'Hydatidiform mole (within the last 12\n                                                                    months)'),
(34, 47, 38, '3', '3', '3', '3', '3', '2020-01-12 ', '3 ', '3', '3', '$sample', 'Hydatidiform mole (within the last 12\n                                                                    months)');

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
  `year` int(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `civil_status`, `age`, `gender`, `street_address`, `purok`, `birthdate`, `height`, `weight`, `contact_no`, `region_province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `status`, `month`, `year`, `date`) VALUES
(4, 'Lolita Villarosa Gerose', 'Single', 53, 'Female', '#54 Area 51, Mansilingan', 'Kasilingan', 'July 20, 1966', 168, 78, '(09) 051312999', 'Negros Occidental', 'BHW', '88-334939733-4', 'Marvin Gerose', '(09) 073773443', 'Active', 'Sep', 2019, '2019-09-01'),
(5, 'Daniel Andrew Go', 'Single', 21, 'Male', '#1 Area 51, Mansilingan', 'Katilingban', 'April 14, 1998', 176, 60, '(09) 061613101', 'Negros Occidental', 'Student', '34-343435343-3', 'Charles Go', '(09) 061613101', 'Active', 'Oct', 2019, '2019-10-01'),
(6, 'Bernard Bermo', 'Married', 49, 'Male', '#1n Sebastian, Mansilingan', 'Gauzon', '03-10-1970', 174, 174, '(88) 888888888', 'Negros Occidental', 'Farmer', '34-343434343-4', 'Erika Bermo', '(30) 303030454', 'Active', 'Oct', 2019, '2019-10-01'),
(7, 'John Matthew Lorizo', 'Single', 21, 'Male', '#51 Area 52, Mansilingan', 'Gauzon', 'April 07, 1998', 165, 165, '(09) 061613101', 'Negros Occidental', 'Student', '34-343456454-6', 'John Michael Lorizo', '(93) 939343433', 'Active', 'Oct', 2019, '2019-10-01'),
(8, 'Janeil Alcano', 'Single', 13, 'Male', '#3 Magsaysay, Mansilingan', 'Gauzon', 'August 23, 2006', 174, 55, '(34) 343434333', 'Negros Occidental', 'Student', '33-333333333-3', 'Jona Alcano', '(33) 333333454', 'Active', 'Oct', 2019, '2019-10-01'),
(9, 'Margarita Diana', 'Married', 43, 'Female', 'Block 17 Lot 19, Mansilingan', 'Lasalle Ville', 'July 20, 1966', 165, 60, '(09) 051312999', 'Negros Occidental', 'BHW', '88-334939733-4', 'Jose Diana', '(09) 073773443', 'Active', 'Sep', 2019, '2019-09-01'),
(10, 'Mercy Buenafuente', 'Married', 38, 'Female', '#3 Everlasting, Mansilingan', 'Kasilingan', 'July 20, 1966', 177, 60, '09051312999', 'Negros Occidental', 'BHW', '88334939733434', 'Johny Buenafuente', '0907377344343', 'Active', 'Sep', 2019, '2019-09-01'),
(13, 'Maria Cafra', 'Single', 21, 'Male', '#51 Area 51, Mansilingan', 'Gauzon', '04-07-1998', 165, 165, '(09) 061613101', 'Negros Occidental', 'Student', '34-343456454-6', 'John Michael Lorizo', '(93) 939343433', 'Active', 'Aug', 2019, '2019-08-01'),
(14, 'Renzo Nono', 'Married', 53, 'Male', '#3 Everlasting, Mansilingan', 'Kasilingan', '07-20-1966', 165, 60, '(09) 051312999', 'Negros Occidental', 'BHW', '88-334939733-4', 'Renzy Nono', '(09) 073773443', 'Active', 'Jun', 2019, '2019-06-01'),
(15, 'Rommel Adricula', 'Married', 38, 'Male', '#51 Area 51, Mansilingan', 'Gauzon', '04-07-1981', 165, 165, '(09) 061613101', 'Negros Occidental', 'Student', '34-343456454-6', 'Rommy Adryx', '(93) 939343433', 'Active', 'Jul', 2019, '2019-07-01'),
(17, 'Jan Mark Ballados', 'Single', 24, 'Male', '#3 Area 51, Mansilingan', 'Kasilingan', '06-14-1995', 178, 178, '(09) 054441414', 'Negros Occidental', 'E-Jeep Driver', '99-393933393-9', 'Mark John Ballados', '(09) 333434343', 'Active', 'Oct', 2019, '2019-10-01'),
(18, 'Ariane Torres', 'Single', 33, 'Male', '#2 Area 51, Mansilingan', 'Paglaum', '03-19-1986', 170, 170, '(09) 033434343', 'Negros Occidental', 'Teacher', '39-333393939-3', 'Ariane ', '(09) 232323232', 'Active', 'Oct', 2019, '2019-10-01'),
(19, 'Kizsha Lauriaga', 'Single', 28, 'Female', '#3 Everlasting, Mansilingan', 'Kahirup A', '08-21-1991', 160, 160, '(09) 062623232', 'Negros Occidental', 'Street Vendor', '30-303030303-0', 'Mark Panabe', '(09) 334734343', 'Active', 'Oct', 2019, '2019-10-01'),
(20, 'Wilma Mendez', 'Single', 21, 'Female', '#3 Everlasting, Mansilingan', 'Kahirup B', '05-31-1998', 169, 169, '(09) 061134343', 'Negros Occidental', 'HRM', '30-390393030-3', 'Minda Resuma', '(09) 028393434', 'Active', 'Nov', 2019, '2019-11-01'),
(22, 'Stay Bagagrel', 'Widowed', 39, 'Female', '#3 Kasilingan, Mansilingan', 'Paghidaet', '06-10-1980', 178, 178, '(09) 073738343', 'Negros Occidental', 'BHW', '04-303030303-0', 'Michael Bagagrel', '(09) 484383434', 'Active', 'Nov', 2019, '2019-11-01'),
(23, 'Marie Bazagrel', 'Single', 12, 'Female', '#5 Kasilingan, Mansilingan', 'Kahirup B', '06-01-2007', 173, 173, '(09) 343434343', 'Negros Occidental', 'Student', '39-393938838-4', 'Mama Mo', '(09) 343434343', 'Active', 'Nov', 2019, '2019-11-01'),
(24, 'Anne Berquist', 'Single', 42, 'Female', '#3 Mahimayaon, Mansilingan', 'Kasilingan', '03-15-1977', 178, 178, '(09) 034343434', 'Negros Occidental', 'Nurse', '33-434343434-3', 'John Berquist', '(09) 073433434', 'Active', 'Nov', 2019, '2019-11-01'),
(25, 'Anita Nelson', 'Widowed', 43, 'Female', '#4 Area 52, Mansilingan', 'Paghidaet', 'April 08, 1976', 178, 178, '(09) 454545454', 'Negros Occidental', 'BHW', '33-303033030-3', 'Willie Nelson', '(09) 455454545', 'Active', 'Nov', 2019, '2019-11-01'),
(26, 'Slena Wasky', 'Single', 43, 'Female', '#3 Tagbalayan, Mansilingan', 'Gauzon', '08-24-1976', 176, 176, '(09) 348743745', 'Negros Occidental', 'BHW', '43-459045454-5', 'Wilson Slena', '(09) 454545454', 'Active', 'Nov', 2019, '2019-11-01'),
(27, 'Rose Zirilli', 'Widowed', 50, 'Female', '#52 Area 41, Mansilingan', 'Katilingban', '06-11-1969', 178, 178, '(09) 387383838', 'Negros Occidental', 'Teacher', '94-394848484-8', 'Jimmy Zirili', '(09) 454655553', 'Active', 'Nov', 2019, '2019-11-01'),
(28, 'Esperanza Consolacion', 'Married', 89, 'Female', '#52 Area 41, Mansilingan', 'Katilingban', 'June 11, 1969', 178, 89, '(09) 387383838', 'Negros Occidental', 'Teacher', '94-394848484-8', 'Sergio Consolacion', '(09) 454655553', 'Deceased', 'Nov', 2019, '2019-10-01'),
(29, 'Markh B. Jamandre', 'Married', 43, 'Male', '#3 Everlasting, Mansilingan', 'Mabinuligon', '10-14-1976', 176, 176, '(09) 373737337', 'Negross Occidental', 'Teacher', '39-338939383-9', 'Ms. Olive Jamandre', '(09) 373737373', 'Active', 'Nov', 2019, '2019-11-01'),
(30, 'Lagrimas Casabuena Campa', 'Married', 65, 'Female', 'Arceo, Mansilingan', 'Kahirup A', '12-20-1953', 154, 154, '(09) 061613101', 'Negros Occidental', 'None', '39-033883938-3', 'Jesus Campa', '(09) 038373737', 'Active', 'Dec', 2019, '2019-12-01'),
(37, 'Emmanuel James Tan', 'Single', 21, 'Male', '#3 Everlasting, Mansilingan', 'Kasilingan', '04-14-1998', 175, 175, '(09) 061613101', 'Negros Occidental', 'Student', '84-849439393-9', 'Rambo Tan', '(09) 027338383', 'Active', 'Dec', 2019, '2019-12-01'),
(38, 'Freya Allan', 'Single', 18, 'Female', '#3 Area 51, Mansilingan', 'Kasilingan', '07-25-2001', 178, 178, '(09) 061613101', 'Negros Occidental', 'Student', '94-393874930-3', 'Jemar Allan', '(09) 383334343', 'Active', 'Jan', 2020, '2020-01-20'),
(39, 'Jesse Franco Latosa', 'Single', 21, 'Male', '#3 Area 51, Mansilingan', 'Mabinuligon', '08-30-1998', 178, 178, '(09) 061613101', 'Negros Occidental', 'Graphic Designer', '39-383930030-3', 'Jesse Latosa', '(09) 061613101', 'Active', 'Feb', 2020, '2020-02-02');

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
  `status` varchar(50) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_child`
--

INSERT INTO `patient_child` (`child_id`, `child_name`, `gender`, `mother_name`, `mother_education`, `mother_occupation`, `father_name`, `father_education`, `father_occupation`, `date_first_seen`, `birthdate`, `birth_weight`, `place_of_delivery`, `birth_register_date`, `purok`, `street_address`, `status`, `month`, `year`, `date`) VALUES
(3, 'Hilary Ahmor Sipat', 'Female', 'Mary Ann Sipat', 'High School Graduate', 'BHW', 'Hilario Dorimon', 'College Graduate', 'Sr. Salesman', '06/01/2007', '06/01/2007', '20', 'CLMMRH', '11/29/2005', 'Kahirup B', '#15 Everlasting', 'Registered Immunization', 'Nov', '2019', '2019-11-01'),
(8, 'Zemira Anndrey Torrecarion Sabordo', 'Female', 'Mae Ann Torrecarion Sabordo', 'None', 'None', 'Renante Hanon Dulce', 'College', 'Calibration Technician', '11/08/2018', '11/08/2018', '2.83', 'CHO', '12/12/2018', 'Kasilingan', 'Hyacinth I, Mansilingan', 'Registered Immunization', 'Dec', '2019', '2019-12-01'),
(10, 'Klyde Parar Ramos', 'Male', 'Novelyn Tupas Parar', 'College', 'None', 'Christian Efren Ramos', 'High School', 'Driver', '07/24/2019', '07/24/2019', '3.04', 'CHO', '08/14/2019', 'Paglaum', 'n/a, Mansilingan', 'Registered Immunization', 'Dec', '2019', '2019-12-01'),
(11, 'Leanne Mandolado Tacdoro', 'Female', 'Roxanne Jabonete Mandolado', 'College', 'None', 'Lester John Gelito Tacdoro', 'College', 'Factory Worker', '09/03/2019', '09/03/2019', '2.5', 'MHC', '12/19/2019', 'Matahum', 'Cottage Rd., Mansilingan', 'Registered Immunization', 'Dec', '2019', '2019-12-01'),
(12, 'Freya Allan', 'Female', 'asdf', 'afa', 'dfdf', 'sdfd', 'dfsd', 'adfdasf', '2020-01-15', 'January 07, 2020', '22', 'zdfd', '2020-01-13', 'Kahirup B', 'dfadf, Mansilingan', 'Registered', 'Jan', '2020', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pelvic_examination`
--

CREATE TABLE `pelvic_examination` (
  `pelvic_examination_id` int(11) NOT NULL,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `perineum` varchar(500) NOT NULL,
  `vagina` varchar(500) NOT NULL,
  `cervix` varchar(500) NOT NULL,
  `consistency` varchar(500) NOT NULL,
  `uterus_position` varchar(500) NOT NULL,
  `uterus_size` varchar(500) NOT NULL,
  `uterus_mass` varchar(500) NOT NULL,
  `uterine_depth` varchar(500) NOT NULL,
  `adnexa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelvic_examination`
--

INSERT INTO `pelvic_examination` (`pelvic_examination_id`, `family_planning_id`, `patient_id`, `perineum`, `vagina`, `cervix`, `consistency`, `uterus_position`, `uterus_size`, `uterus_mass`, `uterine_depth`, `adnexa`) VALUES
(41, 44, 4, 'Scars', 'Congested, Bartholin cyst', 'Congested, Erosion', 'Firm, Soft', 'Anteflexed, Retroflexed', 'Normal, Small', 'Yes', '50', 'Mass'),
(42, 45, 20, 'Warts', 'Congested', 'Discharge', 'Firm', 'Anteflexed', 'Small', 'Yes', '10', 'Mass'),
(43, 46, 38, 'Scars', 'Congested', 'Congested', 'Soft', 'Mid', 'Small', 'Yes', '3', 'Mass'),
(44, 47, 38, 'Reddish', 'Congested', 'Congested', 'Soft', 'Anteflexed', 'Small', 'Yes', '3', 'Mass');

-- --------------------------------------------------------

--
-- Table structure for table `physical_examination`
--

CREATE TABLE `physical_examination` (
  `physical_examination_id` int(11) NOT NULL,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `conjunctiva` varchar(200) NOT NULL,
  `neck` varchar(200) NOT NULL,
  `breast` varchar(200) NOT NULL,
  `thorax` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `extremities` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_examination`
--

INSERT INTO `physical_examination` (`physical_examination_id`, `family_planning_id`, `patient_id`, `bp`, `weight`, `height`, `pr`, `conjunctiva`, `neck`, `breast`, `thorax`, `abdomen`, `extremities`) VALUES
(31, 44, 4, '120/50', '89', '178', '90', 'Pale', 'Enlarged thyroid', 'Mass', 'Abnormal heart sounds/cardiac rate, Abnormal breath sounds/respiratory rate', 'Enlarged liver, Mass', 'Edema'),
(32, 45, 20, '111/11', '89', '175', '90', 'Pale', 'Enlarged thyroid', 'Mass', 'Abnormal breath sounds/respiratory rate', 'Enlarged liver', 'Varicosities'),
(33, 46, 38, '333/33', '333', '3', '3', 'Yellowish', 'Enlarged thyroid', 'Nipple discharge', 'Abnormal heart sounds/cardiac rate', 'Enlarged liver', ''),
(34, 47, 38, '333/33', '3', '3', '3', 'Yellowish', 'Enlarged thyroid', 'Nipple discharge', 'Abnormal heart sounds/cardiac rate', 'Enlarged liver', 'Edema');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal`
--

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `husband` varchar(50) NOT NULL,
  `prenatal_date` varchar(50) NOT NULL,
  `menstrual_hx` varchar(30) NOT NULL,
  `menarch` varchar(30) NOT NULL,
  `cycle` varchar(30) NOT NULL,
  `flow` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `dysmenorrhea` varchar(30) NOT NULL,
  `obgynehx` varchar(500) NOT NULL,
  `past_medical_hx` varchar(500) NOT NULL,
  `bloodtype` varchar(30) NOT NULL,
  `tt1` varchar(50) NOT NULL,
  `tt2` varchar(50) NOT NULL,
  `tt3` varchar(50) NOT NULL,
  `tt4` varchar(50) NOT NULL,
  `tt5` varchar(50) NOT NULL,
  `purok` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenatal`
--

INSERT INTO `prenatal` (`prenatal_id`, `patient_id`, `husband`, `prenatal_date`, `menstrual_hx`, `menarch`, `cycle`, `flow`, `duration`, `dysmenorrhea`, `obgynehx`, `past_medical_hx`, `bloodtype`, `tt1`, `tt2`, `tt3`, `tt4`, `tt5`, `purok`, `month`, `year`) VALUES
(14, 38, 'adfsadf', '2020-01-15', 'asdfasdf', 'asdf', 'df', 'asdsf', 'sdf', 'asdf', 'adf', 'aasdf', 'd', '0000-00-00', '2020-01-20', '2020-01-27', '2020-01-15', '2020-01-27', 'Kasilingan', 'Jan', '2020'),
(15, 38, 'afd', '2020-01-18', 'adf', 'asfsda', '3', 'safd', '3', 'af', 'sadfsadsa', 'asfda', '3', '2020-01-22', '', '', '', '', 'Kasilingan', 'Jan', '2020'),
(16, 38, 'afd', '2019-01-18', 'adf', 'asfsda', '3', 'safd', '3', 'af', 'sadfsadsa', 'asfda', '3', '2020-01-22', '', '', '', '', 'Kasilingan', 'Jan', '2020'),
(17, 38, 'adfsadf', '2018-01-15', 'asdfasdf', 'asdf', 'df', 'asdsf', 'sdf', 'asdf', 'adf', 'aasdf', 'd', '0000-00-00', '2020-01-20', '2020-01-27', '2020-01-15', '2020-01-27', 'Kasilingan', 'Jan', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal_consultation`
--

CREATE TABLE `prenatal_consultation` (
  `prenatal_consultation_id` int(11) NOT NULL,
  `prenatal_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctors_order_advice` varchar(500) NOT NULL,
  `date` varchar(30) NOT NULL,
  `g` varchar(30) NOT NULL,
  `p` varchar(30) NOT NULL,
  `ft` varchar(30) NOT NULL,
  `pt` varchar(30) NOT NULL,
  `a` varchar(30) NOT NULL,
  `lb` varchar(30) NOT NULL,
  `lmp` varchar(30) NOT NULL,
  `fh` varchar(30) NOT NULL,
  `fhb` varchar(30) NOT NULL,
  `edc` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `aog` varchar(30) NOT NULL,
  `presentation` varchar(500) NOT NULL,
  `complaints` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenatal_consultation`
--

INSERT INTO `prenatal_consultation` (`prenatal_consultation_id`, `prenatal_id`, `patient_id`, `doctors_order_advice`, `date`, `g`, `p`, `ft`, `pt`, `a`, `lb`, `lmp`, `fh`, `fhb`, `edc`, `bp`, `temp`, `weight`, `height`, `aog`, `presentation`, `complaints`, `status`) VALUES
(13, 14, 38, 'adfad', '2020-01-08', '3', '3', '3', '3', '3', '3', '2020-01-09', '33', '33', '2020-01-06', '333/33', '33.3', '33', '33', '33', 'adfad', 'asdasdf', 'first'),
(14, 15, 38, 'dfd', '2020-01-10', '3', '3', '3', '3', '3', '3', '2020-01-13', '3', 'e3', '2020-01-07', '333/33', '33.3', '3', '3', '3', 'dfd', 'dfdf', 'first'),
(15, 15, 38, '333', '2020-01-02', '', '', '', '', '', '', '', '33', '33', '', '333/33', '', '33', '', '33', '33', 'adf', '');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal_follow_up`
--

CREATE TABLE `prenatal_follow_up` (
  `follow_up_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `follow_up_status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `prenatal_follow_up`
--

INSERT INTO `prenatal_follow_up` (`follow_up_id`, `user_id`, `patient_id`, `follow_up_date_time`, `remarks`, `follow_up_status`) VALUES
(32, 27, 9, '11/13/2019 4:26 PM', 'd', 'Done'),
(33, 27, 22, '12/09/2019 4:27 PM', 'dfd', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `referral_id` int(11) NOT NULL,
  `referral_date` varchar(50) NOT NULL,
  `from_clinic` varchar(100) NOT NULL,
  `to_hospital` varchar(100) NOT NULL,
  `origin_address` varchar(100) NOT NULL,
  `destination_address` varchar(100) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `referred_by` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`referral_id`, `referral_date`, `from_clinic`, `to_hospital`, `origin_address`, `destination_address`, `patient_name`, `weight`, `bp`, `temp`, `age`, `complaints`, `referred_by`, `gender`, `month`, `year`, `date_time`) VALUES
(15, '2019-12-01', 'Mansilingan Health Center', 'CLMMRH', 'Mansilingan, Bacolod City', 'Lacson Street', 'John Michael Aguillon', '80', '110/30', '37.5', '21', 'Broken leg, due to motorcycle accident', 'Jesse Franco Latosa', 'Male', 'Dec', '2019', 'December 8, 2019 5:32 pm'),
(16, '2019-12-01', 'Mansilingan Health Center', 'CLMMRH', 'Mansilingan, Bacolod City', 'Lacson Street', 'Emmanuel James Tan', '80', '110/00', '37.0', '21', 'fractured arm', 'Manilyn V. Jimera', 'Male', 'Dec', '2019', 'December 9, 2019 4:51 pm'),
(17, '2019-12-01', 'Mansilingan Health Center', 'CLLMRH', 'Mansilingan, Bacolod City', 'Lacson st.', 'Sherlock', '79', '100/50', '36.5', '19', 'fractured arm', 'Manilyn V. Jimera', 'Male', 'Dec', '2019', 'December 9, 2019 4:53 pm'),
(19, '2020-02-12', 'Mansilingan Health Center', '555', 'Mansilingan, Bacolod City', '55', 'Freya Allan', '55', '555/55', '55.5', '55', '555', 'Jesse Franco Latosa', 'Female', 'Feb', '2020', 'February 1, 2020 9:11 pm');

-- --------------------------------------------------------

--
-- Table structure for table `referral_prenatal`
--

CREATE TABLE `referral_prenatal` (
  `referral_id` int(11) NOT NULL,
  `referral_date` varchar(50) NOT NULL,
  `from_clinic` varchar(100) NOT NULL,
  `to_hospital` varchar(100) NOT NULL,
  `origin_address` varchar(100) NOT NULL,
  `destination_address` varchar(100) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `gravida` varchar(50) NOT NULL,
  `para` varchar(50) NOT NULL,
  `fh` varchar(50) NOT NULL,
  `fhb` varchar(50) NOT NULL,
  `tt` varchar(50) NOT NULL,
  `given` varchar(50) NOT NULL,
  `referred_by` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral_prenatal`
--

INSERT INTO `referral_prenatal` (`referral_id`, `referral_date`, `from_clinic`, `to_hospital`, `origin_address`, `destination_address`, `patient_name`, `weight`, `bp`, `temp`, `age`, `complaints`, `gravida`, `para`, `fh`, `fhb`, `tt`, `given`, `referred_by`, `month`, `year`, `date_time`) VALUES
(8, '2019-10-21', 'Mansilingan Health Center', 'CLMH', 'Mansilingan, Bacolod City', 'Lacson st.', 'Kherrie Tejare', '50', '130/40', '37.5', '18', 'Fever', '1', '1', '2', '2', 'TT3', 'October 22, 2019', 'Jesse Franco Latosa', 'Oct', '2019', 'October 26, 2019 9:00 AM'),
(9, '2019-10-21', 'Mansilingan Health Center', 'CLMH', 'Mansilingan, Bacolod City', 'Lacson st.', 'Kherrie Tejare', '50', '130/40', '37.5', '18', 'Fever', '1', '1', '2', '2', 'TT3', 'October 22, 2019', 'Jesse Franco Latosa', 'Oct', '2019', 'October 26, 2019 9:00 AM'),
(10, '2019-10-21', 'Mansilingan Health Center', 'CLMH', 'Mansilingan, Bacolod City', 'Lacson St.', 'Franze Beatriz Caballero', '78', '150/55', '37.6', '17', 'Fever', '1', '1', '1', '1', 'TT1', 'October 22, 2019', 'Jesse Franco Latosa', 'Oct', '2019', 'October 26, 2019 11:19 pm'),
(15, '2019-10-21', 'Mansilingan Health Center', 'CLMH', 'Mansilingan, Bacolod City', 'Lacson St.', 'Franze Beatriz Caballero', '66', '150/55', '36.6', '17', 'Fever', '0', '1', '1', '1', 'TT3', 'October 23, 2019', 'Jesse Franco Latosa', 'Oct', '2019', 'October 26, 2019 11:27 pm'),
(16, '2019-11-21', 'Mansilingan Health Center', 'City Health Center', 'Mansilingan, Bacolod City', 'Shopping', 'Marian Guadalupe', '89', '130/50', '36.5', '39', 'Stomach Ache', '0', '0', '0', '0', 'TT1', 'November 23, 2019', 'Manilyn V. Jimera', 'Nov', '2019', 'November 25, 2019 8:35 pm'),
(17, '2019-11-21', 'Mansilingan Health Center', 'CHO', 'Mansilingan, Bacolod City', 'Shopping Lasalle', 'Barbie Imperial', '90', '120/50', '37.5', '28', 'Gasakit ang tiyan 1 hour', '1', '1', '3', '30', 'TT 1', 'November 20, 2019', 'Jesse Franco Latosa', 'Nov', '2019', 'November 28, 2019 7:08 pm'),
(19, '2019-11-21', 'Mansilingan Health Center', 'CHO', 'Mansilingan, Bacolod City', 'Lacson St.', 'Wilma Mendez', '90', '103/50', '37.5', '30', 'Gasakit ang tiyan isa na ka oras pero wala man gabatyag nga manuguwa na ang bata', '1', '1', '3', '40', 'TT 4', 'October 15, 2019', 'Manilyn V. Jimera', 'Nov', '2019', 'November 28, 2019 7:15 pm');

-- --------------------------------------------------------

--
-- Table structure for table `risk_for_vaw`
--

CREATE TABLE `risk_for_vaw` (
  `risk_for_vaw_id` int(11) NOT NULL,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `risks` varchar(500) NOT NULL,
  `referred_to` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risk_for_vaw`
--

INSERT INTO `risk_for_vaw` (`risk_for_vaw_id`, `family_planning_id`, `patient_id`, `risks`, `referred_to`) VALUES
(23, 44, 4, 'Partner does not approve of the visit to FP Clinic', 'Others - BDO'),
(24, 45, 20, 'Unpleasant relationship with partner', 'DSWD - '),
(25, 46, 38, 'Unpleasant relationship with partner', 'NGOs - '),
(26, 47, 38, 'Partner does not approve of the visit to FP Clinic', 'Others - NICE');

-- --------------------------------------------------------

--
-- Table structure for table `sti_risks`
--

CREATE TABLE `sti_risks` (
  `sti_risks_id` int(11) NOT NULL,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `sti_risk` varchar(100) NOT NULL,
  `forwomen` varchar(500) NOT NULL,
  `formen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sti_risks`
--

INSERT INTO `sti_risks` (`sti_risks_id`, `family_planning_id`, `patient_id`, `sti_risk`, `forwomen`, `formen`) VALUES
(31, 44, 4, 'With history of multiple partners', 'Treated for STIs in the past', 'Treated for STIs in the past'),
(32, 45, 20, 'With history of multiple partners', 'Pain or burning sensation, Treated for STIs in the past', 'None'),
(33, 46, 38, 'With history of multiple partners', 'Treated for STIs in the past', '>Swollen testicles or penis'),
(34, 47, 38, 'With history of multiple partners', 'Treated for STIs in the past', '>Swollen testicles or penis');

-- --------------------------------------------------------

--
-- Table structure for table `tetanus_toxoid`
--

CREATE TABLE `tetanus_toxoid` (
  `tetanus_toxoid_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `tt1` varchar(30) NOT NULL,
  `tt2` varchar(30) NOT NULL,
  `tt3` varchar(30) NOT NULL,
  `tt4` varchar(30) NOT NULL,
  `tt5` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tetanus_toxoid`
--

INSERT INTO `tetanus_toxoid` (`tetanus_toxoid_id`, `child_id`, `tt1`, `tt2`, `tt3`, `tt4`, `tt5`, `ttl`) VALUES
(3, 3, '', '', '', '', '', ''),
(4, 8, 'July 10, 2019', '', '', '', '', ''),
(5, 9, 'December 28, 2017', 'January 25, 2018', 'June 13, 2019', '', '', ''),
(6, 10, 'January 13, 2016', 'June 8, 2016', 'May 27, 2019', '', '', ''),
(7, 11, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tetanus_toxoid_fp`
--

CREATE TABLE `tetanus_toxoid_fp` (
  `tetanus_toxoid_fp_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `btl` varchar(30) NOT NULL,
  `1_year` varchar(30) NOT NULL,
  `vit_a` varchar(30) NOT NULL,
  `feso4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tetanus_toxoid_fp`
--

INSERT INTO `tetanus_toxoid_fp` (`tetanus_toxoid_fp_id`, `child_id`, `uid`, `btl`, `1_year`, `vit_a`, `feso4`) VALUES
(4, 3, 'November 13, 2019', 'October 29, 2019', '', '', ''),
(5, 8, '', '', '', '', ''),
(6, 9, '', '', '', '', ''),
(7, 10, '', '', '', '', ''),
(8, 11, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_feeding`
--

CREATE TABLE `type_of_feeding` (
  `type_of_feeding_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `ebf` varchar(11) NOT NULL,
  `mf` varchar(11) NOT NULL,
  `bff` varchar(11) NOT NULL,
  `tof_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_feeding`
--

INSERT INTO `type_of_feeding` (`type_of_feeding_id`, `child_id`, `ebf`, `mf`, `bff`, `tof_date`) VALUES
(11, 3, '', '?', '', 'November 20, 2019'),
(12, 3, '', '', '?', 'November 28, 2019'),
(14, 8, '?', '', '', 'December 1, 2019'),
(15, 8, '?', '', '', 'December 10, 2019'),
(16, 8, '?', '', '', 'December 25, 2019'),
(17, 8, '?', '', '', 'December 31, 2019'),
(18, 8, '?', '', '', 'November 19, 2019'),
(25, 8, '', 'âœ“', '', '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_feeding_2`
--

CREATE TABLE `type_of_feeding_2` (
  `type_of_feeding_2_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `vit_a` varchar(30) NOT NULL,
  `6_months` varchar(30) NOT NULL,
  `1_year` varchar(30) NOT NULL,
  `nbs` varchar(30) NOT NULL,
  `vit_k` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_feeding_2`
--

INSERT INTO `type_of_feeding_2` (`type_of_feeding_2_id`, `child_id`, `vit_a`, `6_months`, `1_year`, `nbs`, `vit_k`) VALUES
(4, 3, 'November 12, 2019', '', '', '', ''),
(5, 8, '', 'May 15, 2019', 'November 20, 2019', 'November 9, 2019', 'November 8, 2019'),
(6, 9, '', '', '', 'September 4, 2019', 'September 3, 2019'),
(7, 10, '', '', '', 'July 25, 2019', 'July 24, 2019'),
(8, 11, '', '', '', '', '');

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
  `password` varchar(300) NOT NULL,
  `status` char(8) NOT NULL,
  `login` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `time_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `license`, `position`, `username`, `password`, `status`, `login`, `date_created`, `time_created`) VALUES
(23, 'Daniel Andrew Go', 'Drivers License', 'Midwife', 'daniel', '$2y$10$yhkB7S3FyI5nm2o187mVJuYntg5VJs2tUEBSj9Ml7Z1PIrEsK1o9m', '1', 'November 5, 2019, 3:53 pm', 'July 29, 2019', '3:00 am'),
(24, 'John Phillip Dela Cruz', 'Mothers License', 'Nurse', 'jp', '$2y$10$MDC.OKbb4X41APh3g.nJPez63/7iaepg4cSujwpt8jYLZm4W.JIeW', '1', 'September 13, 2019, 8:43 pm', 'July 29, 2019', '3:01 am'),
(26, 'Jesse Franco Latosa', 'dfdfdadf', 'Nurse', 'jfranco30', '$2y$10$AmErpVx3eb6EMXQjWl4/ouahb11YQvXJfjsGgSEK2.QVdNO046s.K', '1', 'November 12, 2019, 5:26 pm', 'September 20, 2019', '12:25 am'),
(27, 'Diana Rose S. Laput', '123456789', 'Medical Officer', 'admin', '$2y$10$xdDjYSYJFksfk9PbNV98WO54PHxAt4mGImSA/.V3x.u9oXTWb5BRS', '1', 'February 8, 2020, 12:14 pm', 'September 22, 2019', '4:01 am'),
(28, 'Manilyn V. Jimera', '343433434', 'Nurse', 'nurse101', '$2y$10$nC9iALapDw9Fq.HyO1jm3eq5w6eYmTCtFC9uaerCDkjkYip1o1LHq', '1', 'October 11, 2019, 3:11 am', 'September 22, 2019', '4:01 am'),
(29, 'Imelita 0. Anjao', '345343', 'Midwife', 'midwife101', '$2y$10$U5yakieAi0iObyzb68dtTORgd0cSf82Ro72COmfZgPJv6rygNlrQy', '1', '', 'September 22, 2019', '4:02 am'),
(30, 'Arian M. Garcia', '3487y98u9', 'Midwife', 'midwife', '$2y$10$JLIAeWbBY1RY2j.KtaLGMO2byjeT6rqNWaw/FsWVQk1EC9yxiwF0m', '1', '', 'September 22, 2019', '4:02 am'),
(31, 'Kherrie Tejare', '939389283', 'Medical Officer', 'kherrie', '$2y$10$Ped3W9tvCLwQ48JoMSQPTeM2BhHIk9zw1OfaQyy87qHFl9qqGzSh.', '1', 'November 5, 2019, 3:51 pm', 'November 5, 2019', '2:10 pm'),
(32, 'Alvin Mananquil', '39393838', 'Nurse', 'alvin', '$2y$10$ilYtIOT30qrBMlVQKXnMe.mEkofRMty5iQqiX7v2k6QZBY8yYncaC', '1', '', 'November 15, 2019', '8:22 pm');

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
(532, 27, 'Edited  Patient Profile', 'October 28, 2019 - 11:23 pm'),
(533, 27, 'Edited  Patient Profile', 'October 28, 2019 - 11:36 pm'),
(534, 27, 'Edited  Patient Profile', 'October 28, 2019 - 11:41 pm'),
(535, 27, 'Edited  Patient Profile', 'October 28, 2019 - 11:41 pm'),
(536, 27, 'Edited  Patient Profile', 'October 28, 2019 - 11:41 pm'),
(537, 27, 'Edited  Patient Profile', 'October 28, 2019 - 11:44 pm'),
(538, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'October 28, 2019 - 11:47 pm'),
(539, 27, 'Edited Hilary Ahmor Sipat3 Child Patient Profile', 'October 28, 2019 - 11:48 pm'),
(540, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'October 28, 2019 - 11:50 pm'),
(541, 27, 'Edited Arya Stark Child Patient Profile', 'October 28, 2019 - 11:51 pm'),
(542, 27, 'Edited Jamie Lannister Child Patient Profile', 'October 28, 2019 - 11:52 pm'),
(543, 27, 'Edited Jonathan Simmons Child Patient Profile', 'October 28, 2019 - 11:53 pm'),
(544, 27, 'Edited Jonathan Simmons Child Patient Profile', 'October 28, 2019 - 11:56 pm'),
(545, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 28, 2019 - 11:59 pm'),
(546, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 28, 2019 - 11:59 pm'),
(547, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 28, 2019 - 11:59 pm'),
(548, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:00 am'),
(549, 27, 'Edited Dennzel Quatchons Patient Profile', 'October 29, 2019 - 12:02 am'),
(550, 27, 'Edited Dennzel Quatchons Patient Profile', 'October 29, 2019 - 12:02 am'),
(551, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:04 am'),
(552, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:04 am'),
(553, 27, 'Edited Daniel Andrew Go Patient Profile', 'October 29, 2019 - 12:04 am'),
(554, 27, 'Edited Dennzel Quatchon Patient Profile', 'October 29, 2019 - 12:04 am'),
(555, 27, 'Edited Dennzel Quatchonssssssss Patient Profile', 'October 29, 2019 - 12:05 am'),
(556, 27, 'Edited Dennzel Quatchon Patient Profile', 'October 29, 2019 - 12:05 am'),
(557, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:05 am'),
(558, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:06 am'),
(559, 27, 'Edited Janeil Alcano Patient Profile', 'October 29, 2019 - 12:06 am'),
(560, 27, 'Edited Dennzel Quatchon Patient Profile', 'October 29, 2019 - 12:07 am'),
(561, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:09 am'),
(562, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 29, 2019 - 12:14 am'),
(563, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 29, 2019 - 12:20 am'),
(564, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 29, 2019 - 12:20 am'),
(565, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:25 am'),
(566, 27, 'Edited Rommel Adricula Patient Profile', 'October 29, 2019 - 12:25 am'),
(567, 27, 'Edited Rommel Adricula Patient Profile', 'October 29, 2019 - 12:26 am'),
(568, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 29, 2019 - 12:26 am'),
(569, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'October 29, 2019 - 12:26 am'),
(570, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 29, 2019 - 12:35 am'),
(571, 27, 'Edited Arya Stark Child Patient Profile', 'October 29, 2019 - 12:37 am'),
(572, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 29, 2019 - 12:44 am'),
(573, 27, 'Updated the Prenatal follow-up date for Lolita Villarosa Gerose', 'October 30, 2019 - 9:00 pm'),
(574, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'October 30, 2019 - 9:00 pm'),
(575, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'October 30, 2019 - 9:00 pm'),
(576, 27, 'Deactivated User Account', 'October 30, 2019 - 9:08 pm'),
(577, 27, 'Activated User Account', 'October 30, 2019 - 9:08 pm'),
(578, 27, 'Deactivated User Account', 'October 31, 2019 - 5:19 pm'),
(579, 27, 'Deactivated User Account', 'October 31, 2019 - 5:23 pm'),
(580, 27, 'Deactivated User Account', 'October 31, 2019 - 5:23 pm'),
(581, 27, 'Activated User Account', 'October 31, 2019 - 5:24 pm'),
(582, 27, 'Edited Kizsha Lauriaga Patient Profile', 'October 31, 2019 - 5:40 pm'),
(583, 27, 'added 3 pieces of Isoniazid to stocks', 'October 31, 2019 6:23 pm'),
(584, 27, 'dispensed 5 Cefalexin 250  to ', 'October 31, 2019 6:25 pm'),
(585, 27, 'added 3 pieces of Cefalexin 250  to stocks', 'October 31, 2019 6:25 pm'),
(586, 27, 'dispensed 4 Isoniazid to Margarita Diana', 'October 31, 2019 6:26 pm'),
(587, 27, 'dispensed 3 Rifampicin 150 mg to Janeil Alcano', 'October 31, 2019 6:26 pm'),
(588, 27, 'added 5 pieces of Biogesic to stocks', 'October 31, 2019 6:39 pm'),
(589, 27, 'added 20 pieces of Celin to stocks', 'October 31, 2019 6:40 pm'),
(590, 27, 'dispensed 5 Celin to Margarita Diana', 'October 31, 2019 6:40 pm'),
(591, 27, 'Registered Windel Mae Nangan Resuma as new Patient', 'October 31, 2019 - 6:50 pm'),
(592, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 8:51 pm'),
(593, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 8:58 pm'),
(594, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:02 pm'),
(595, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:14 pm'),
(596, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:32 pm'),
(597, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:40 pm'),
(598, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:42 pm'),
(599, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:43 pm'),
(600, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:46 pm'),
(601, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:50 pm'),
(602, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 9:54 pm'),
(603, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:05 pm'),
(604, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:09 pm'),
(605, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:14 pm'),
(606, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:17 pm'),
(607, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:23 pm'),
(608, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:24 pm'),
(609, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:27 pm'),
(610, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:30 pm'),
(611, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:33 pm'),
(612, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:34 pm'),
(613, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:35 pm'),
(614, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:35 pm'),
(615, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:36 pm'),
(616, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:37 pm'),
(617, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:37 pm'),
(618, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:39 pm'),
(619, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:41 pm'),
(620, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'October 31, 2019 - 10:43 pm'),
(621, 27, 'Added Lolita Villarosa Gerose to Family Planning', 'October 31, 2019 - 10:47 pm'),
(622, 27, 'Added Mercy Buenafuente to Family Planning', 'October 31, 2019 - 11:09 pm'),
(623, 27, 'Added a Family Planning follow-up date for Windel Mae Nangan Resuma', 'November 1, 2019 - 9:20 pm'),
(624, 27, 'dispensed 3 Rifapentine to John Matthew Lorizo', 'November 1, 2019 10:56 pm'),
(625, 27, 'Added Windel Mae Nangan Resuma to Family Planning', 'November 2, 2019 - 11:26 am'),
(626, 182, 'Updated the Prenatal follow-up date for Lolita Villarosa Gerose', 'November 2, 2019 - 11:47 am'),
(627, 184, 'Added Windel Mae Nangan Resuma to Consultation', 'November 2, 2019 - 11:52 am'),
(628, 182, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'November 2, 2019 - 12:25 pm'),
(629, 182, 'dispensed 23 Ambroxol to Daniel Andrew Go', 'November 2, 2019 12:29 pm'),
(630, 182, 'Successfully Backup the database', 'November 2, 2019, 12:32 pm'),
(631, 182, 'Successfully Backup the database', 'November 2, 2019, 12:32 pm'),
(632, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'November 3, 2019 - 1:43 pm'),
(633, 27, 'Added a Family Planning follow-up date for Mercy Buenafuente', 'November 3, 2019 - 2:09 pm'),
(634, 182, 'Added Rommel Adricula to Consultation', 'November 3, 2019 - 2:19 pm'),
(635, 27, 'Added a Family Planning follow-up date for Mercy Buenafuente', 'November 3, 2019 - 3:26 pm'),
(636, 182, 'dispensed 3 Biogesic to Margarita Diana', 'November 3, 2019 4:39 pm'),
(637, 182, 'dispensed 5 Cefalexin 250  to Janeil Alcano', 'November 3, 2019 4:48 pm'),
(638, 182, 'dispensed 5 Celin to Janeil Alcano', 'November 3, 2019 4:51 pm'),
(639, 27, 'Added Kizsha Lauriaga to Family Planning', 'November 4, 2019 - 5:48 pm'),
(640, 27, 'Added a New Individual Referral Record', 'November 4, 2019 8:33 pm'),
(641, 27, 'dispensed 10 Isoniazid to Ariane Torres', 'November 4, 2019 8:39 pm'),
(642, 27, 'Registered Alvin Mananquil as new Patient', 'November 5, 2019 - 1:02 pm'),
(643, 57, 'Added Kherrie Tejare as New User', 'November 5, 2019 - 2:10 pm'),
(644, 31, 'Updated account of Kherrie Tejare', 'November 5, 2019 - 3:51 pm'),
(645, 31, 'Updated account of Daniel Andrew Go', 'November 5, 2019 - 3:53 pm'),
(646, 23, 'Updated account of John Phillip Dela Cruz', 'November 5, 2019 - 3:54 pm'),
(647, 23, 'Updated account of Jesse Franco Latosa', 'November 5, 2019 - 3:54 pm'),
(648, 23, 'Updated account of Diana Rose S. Laput', 'November 5, 2019 - 3:54 pm'),
(649, 23, 'Updated account of Manilyn V. Jimera', 'November 5, 2019 - 3:55 pm'),
(650, 23, 'Updated account of Imelita 0. Anjao', 'November 5, 2019 - 3:55 pm'),
(651, 23, 'Updated account of Arian M. Garcia', 'November 5, 2019 - 3:55 pm'),
(652, 23, 'Updated account of Kherrie Tejare', 'November 5, 2019 - 3:55 pm'),
(653, 27, 'Deactivated User Account', 'November 5, 2019 - 3:58 pm'),
(654, 27, 'Activated User Account', 'November 5, 2019 - 3:58 pm'),
(655, 26, 'Updated account of Jesse Franco Latosa', 'November 5, 2019 - 4:02 pm'),
(656, 26, 'Updated account of Jesse Franco Latosa', 'November 5, 2019 - 4:03 pm'),
(657, 27, 'dispensed 10 Claritin to Alvin Mananquil', 'November 5, 2019 4:25 pm'),
(658, 27, 'dispensed 5 Rifampicin 150 mg to Ariane Torres', 'November 5, 2019 4:28 pm'),
(659, 27, 'dispensed 3 Rifampicin 150 mg to Margarita Diana', 'November 5, 2019 4:31 pm'),
(660, 27, 'dispensed 5 Claritin to Janeil Alcano', 'November 5, 2019 4:42 pm'),
(661, 27, 'added 500 pieces of Ceterizine to stocks', 'November 5, 2019 4:44 pm'),
(662, 27, 'dispensed 400 Ceterizine to John Matthew Lorizo', 'November 5, 2019 4:45 pm'),
(663, 27, 'dispensed 50 Ceterizine to Windel Mae Nangan Resuma', 'November 5, 2019 4:46 pm'),
(664, 27, 'Registered Stay Bagagrel as new Patient', 'November 5, 2019 - 5:34 pm'),
(665, 27, 'Successfully Backup the database', 'November 5, 2019, 5:41 pm'),
(666, 57, 'Edited Lolita Villarosa Gerose Patient Profile', 'November 5, 2019 - 6:24 pm'),
(667, 57, 'Edited Daniel Andrew Go Patient Profile', 'November 5, 2019 - 6:27 pm'),
(668, 57, 'Edited Bernard Bermo Patient Profile', 'November 5, 2019 - 6:27 pm'),
(669, 57, 'Edited John Matthew Lorizo Patient Profile', 'November 5, 2019 - 6:27 pm'),
(670, 57, 'Edited Janeil Alcano Patient Profile', 'November 5, 2019 - 6:27 pm'),
(671, 57, 'Edited Margarita Diana Patient Profile', 'November 5, 2019 - 6:30 pm'),
(672, 57, 'Edited Dennzel Quatchon Patient Profile', 'November 5, 2019 - 6:30 pm'),
(673, 57, 'Edited Lolita Villarosa Gerose Patient Profile', 'November 5, 2019 - 6:31 pm'),
(674, 57, 'Edited Daniel Andrew Go Patient Profile', 'November 5, 2019 - 6:31 pm'),
(675, 57, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'November 5, 2019 - 6:37 pm'),
(676, 57, 'Edited Lolita Villarosa Gerose Patient Profile', 'November 5, 2019 - 6:38 pm'),
(677, 57, 'Registered Marie Bazagrel as new Patient', 'November 5, 2019 - 6:44 pm'),
(678, 57, 'Edited Windel Mae Nangan Resuma Patient Profile', 'November 5, 2019 - 6:57 pm'),
(679, 57, 'Registered Anne Berquist as new Patient', 'November 5, 2019 - 7:14 pm'),
(680, 27, 'Registered Anita Nelson as new Patient', 'November 5, 2019 - 7:17 pm'),
(681, 27, 'Registered Slena Wasky as new Patient', 'November 5, 2019 - 7:20 pm'),
(682, 27, 'Registered Rose Zirilli as new Patient', 'November 5, 2019 - 7:24 pm'),
(683, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:21 pm'),
(684, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:24 pm'),
(685, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:25 pm'),
(686, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:34 pm'),
(687, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:37 pm'),
(688, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:39 pm'),
(689, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:40 pm'),
(690, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:41 pm'),
(691, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:42 pm'),
(692, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:45 pm'),
(693, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:50 pm'),
(694, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:52 pm'),
(695, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 8:57 pm'),
(696, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:01 pm'),
(697, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:04 pm'),
(698, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:05 pm'),
(699, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:11 pm'),
(700, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:16 pm'),
(701, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:17 pm'),
(702, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:17 pm'),
(703, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:22 pm'),
(704, 57, 'Added Prescription to Daniel Andrew Go', 'November 7, 2019 - 9:36 pm'),
(705, 57, 'Added Prescription to Daniel Andrew Go', 'November 8, 2019 - 7:29 am'),
(706, 57, 'Added Prescription to ', 'November 8, 2019 - 7:45 am'),
(707, 27, 'Added Prescription to ', 'November 8, 2019 - 7:47 am'),
(708, 27, 'Added Prescription to Jesse Franco Latosa', 'November 8, 2019 - 7:51 am'),
(709, 27, 'Added Prescription to Daniel Andrew Go', 'November 8, 2019 - 8:13 am'),
(710, 27, 'Added Prescription to Daniel Andrew Go', 'November 8, 2019 - 8:25 am'),
(711, 27, 'Added Prescription to Jesse Franco Latosa', 'November 8, 2019 - 8:34 am'),
(712, 27, 'Added Prescription to Daniel Andrew Go', 'November 8, 2019 - 8:55 am'),
(713, 27, 'Added Prescription to Lolita Villarosa Gerose', 'November 8, 2019 - 8:56 am'),
(714, 27, 'Added Prescription to Lolita Villarosa Gerose', 'November 8, 2019 - 8:56 am'),
(715, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 8:57 am'),
(716, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 8:58 am'),
(717, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:02 am'),
(718, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:04 am'),
(719, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:05 am'),
(720, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:06 am'),
(721, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:07 am'),
(722, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:08 am'),
(723, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:13 am'),
(724, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:18 am'),
(725, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:19 am'),
(726, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:20 am'),
(727, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:21 am'),
(728, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:22 am'),
(729, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:22 am'),
(730, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:24 am'),
(731, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:25 am'),
(732, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:27 am'),
(733, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:28 am'),
(734, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:30 am'),
(735, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:34 am'),
(736, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:35 am'),
(737, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:36 am'),
(738, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:41 am'),
(739, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:44 am'),
(740, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:44 am'),
(741, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:45 am'),
(742, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:46 am'),
(743, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 9:47 am'),
(744, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 10:11 am'),
(745, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 10:31 am'),
(746, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 10:54 am'),
(747, 27, 'Added Prescription to Jesse Franco Latosa', 'November 8, 2019 - 10:58 am'),
(748, 27, 'Added Prescription to Rommel Adricula', 'November 8, 2019 - 11:12 am'),
(749, 27, 'Added Prescription to Rommel Adricula', 'November 8, 2019 - 11:12 am'),
(750, 27, 'Added Prescription to Rommel Adricula', 'November 8, 2019 - 11:19 am'),
(751, 27, 'Added Prescription to Windel Mae Nangan Resuma', 'November 8, 2019 - 11:24 am'),
(752, 27, 'Added Prescription to Dennzel Quatchon', 'November 8, 2019 - 11:32 am'),
(753, 27, 'Added Daniel Andrew Go to Consultation', 'November 8, 2019 - 11:41 am'),
(754, 27, 'Added Prescription to Daniel Andrew Go', 'November 12, 2019 - 3:36 pm'),
(755, 27, 'Added Prescription to Daniel Andrew Go', 'November 12, 2019 - 3:38 pm'),
(756, 27, 'Added Prescription to Daniel Andrew Go', 'November 12, 2019 - 3:51 pm'),
(757, 27, 'Added Jesse Franco Latosa to Consultation', 'November 12, 2019 - 4:17 pm'),
(758, 27, 'Added Prescription to Jesse Franco Latosa', 'November 12, 2019 - 4:18 pm'),
(759, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'November 12, 2019 - 4:36 pm'),
(760, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 12, 2019 - 4:37 pm'),
(761, 27, 'Added Marie Bazagrel to Consultation', 'November 12, 2019 - 4:47 pm'),
(762, 27, 'Added Prescription to Marie Bazagrel', 'November 12, 2019 - 4:55 pm'),
(763, 27, 'added 10 pieces of Biogesic to stocks', 'November 12, 2019 4:58 pm'),
(764, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'November 12, 2019 - 5:10 pm'),
(765, 27, 'dispensed 5 Ceterizine to Windel Mae Nangan Resuma', 'November 12, 2019 5:31 pm'),
(766, 27, 'Edited Wilma Mendez Patient Profile', 'November 12, 2019 - 5:58 pm'),
(767, 27, 'Added Wilma Mendez to Consultation', 'November 12, 2019 - 6:21 pm'),
(768, 27, 'Added Prescription to Wilma Mendez', 'November 12, 2019 - 6:23 pm'),
(769, 27, 'Added Wilma Mendez to Consultation', 'November 12, 2019 - 6:25 pm'),
(770, 27, 'Added Prescription to Wilma Mendez', 'November 12, 2019 - 6:27 pm'),
(771, 27, 'Added Jesse Franco Latosa to Consultation', 'November 12, 2019 - 6:33 pm'),
(772, 27, 'Added Prescription to Jesse Franco Latosa', 'November 12, 2019 - 8:42 pm'),
(773, 27, 'Added Prescription to Jesse Franco Latosa', 'November 12, 2019 - 8:44 pm'),
(774, 27, 'Added Prescription to Jesse Franco Latosa', 'November 12, 2019 - 8:47 pm'),
(775, 27, 'Added Prescription to Jesse Franco Latosa', 'November 12, 2019 - 8:48 pm'),
(776, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 13, 2019 - 1:51 pm'),
(777, 27, 'Added Wilma Mendez to Consultation', 'November 13, 2019 - 2:06 pm'),
(778, 27, 'Added Prescription to Wilma Mendez', 'November 14, 2019 - 6:48 pm'),
(779, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 6:51 pm'),
(780, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 6:53 pm'),
(781, 27, 'Updated the Family Planning follow-up date for Wilma Mendez', 'November 14, 2019 - 6:56 pm'),
(782, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:02 pm'),
(783, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:03 pm'),
(784, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:04 pm'),
(785, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 7:06 pm'),
(786, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:07 pm'),
(787, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:08 pm'),
(788, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 7:09 pm'),
(789, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:10 pm'),
(790, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:11 pm'),
(791, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:12 pm'),
(792, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 7:12 pm'),
(793, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 7:24 pm'),
(794, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 7:31 pm'),
(795, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 7:47 pm'),
(796, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:39 pm'),
(797, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:40 pm'),
(798, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:40 pm'),
(799, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:45 pm'),
(800, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:46 pm'),
(801, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:46 pm'),
(802, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:47 pm'),
(803, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:48 pm'),
(804, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:49 pm'),
(805, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:50 pm'),
(806, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 14, 2019 - 8:50 pm'),
(807, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:51 pm'),
(808, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:52 pm'),
(809, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:53 pm'),
(810, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 8:53 pm'),
(811, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:01 pm'),
(812, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:03 pm'),
(813, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:04 pm'),
(814, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:05 pm'),
(815, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:06 pm'),
(816, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:06 pm'),
(817, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:07 pm'),
(818, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'November 14, 2019 - 9:08 pm'),
(819, 27, 'dispensed 30 Ceterizine to John Matthew Lorizo', 'November 15, 2019 7:59 pm'),
(820, 27, 'added 30 pieces of Ambroxol to stocks', 'November 15, 2019 8:01 pm'),
(821, 27, 'added 30 pieces of Biogesic to stocks', 'November 15, 2019 8:01 pm'),
(822, 27, 'added 20 pieces of Celin to stocks', 'November 15, 2019 8:01 pm'),
(823, 27, 'added 25 pieces of Cefalexin 250  to stocks', 'November 15, 2019 8:02 pm'),
(824, 27, 'added 20 pieces of Claritin to stocks', 'November 15, 2019 8:02 pm'),
(825, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'November 15, 2019 - 8:06 pm'),
(826, 27, 'Added a Prenatal follow-up date for Lolita Villarosa Gerose', 'November 15, 2019 - 8:10 pm'),
(827, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 15, 2019 - 8:12 pm'),
(828, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 15, 2019 - 8:12 pm'),
(829, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 15, 2019 - 8:12 pm'),
(830, 27, 'Updated the Family Planning follow-up date for Wilma Mendez', 'November 15, 2019 - 8:13 pm'),
(831, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 15, 2019 - 8:13 pm'),
(832, 27, 'Updated the Family Planning follow-up date for Wilma Mendez', 'November 15, 2019 - 8:15 pm'),
(833, 27, 'Added Alvin Mananquil as New User', 'November 15, 2019 - 8:22 pm'),
(834, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'November 15, 2019 - 8:29 pm'),
(835, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'November 15, 2019 - 8:29 pm'),
(836, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'November 15, 2019 - 8:33 pm'),
(837, 27, 'Edited Lolita Villarosa Gerose Patient Profile', 'November 15, 2019 - 8:33 pm'),
(838, 27, 'Added a New Individual Referral Record', 'November 16, 2019 9:37 pm'),
(839, 27, 'Added a New Individual Referral Record', 'November 16, 2019 9:40 pm'),
(840, 27, 'Added Cecon 500 mg as new medicine', 'November 17, 2019 - 12:42 pm'),
(841, 27, 'Added Dolfenal as new medicine', 'November 17, 2019 - 12:44 pm'),
(842, 27, 'Added Levocetirizine as new medicine', 'November 17, 2019 - 12:46 pm'),
(843, 27, 'Edited Slena Wasky Patient Profile', 'November 18, 2019 - 5:41 pm'),
(844, 27, 'Edited Rose Zirilli Patient Profile', 'November 18, 2019 - 5:41 pm'),
(845, 27, 'Added Arya Stark to Immunization', 'November 18, 2019 - 9:03 pm'),
(846, 27, 'Added Sansa Stark to Immunization', 'November 18, 2019 - 9:15 pm'),
(847, 27, 'Successfully Backup the database', 'November 18, 2019, 9:17 pm'),
(848, 27, 'Added Immunization Treatment to ', 'November 18, 2019 - 10:44 pm'),
(849, 27, 'Added Immunization Treatment to ', 'November 18, 2019 - 10:48 pm'),
(850, 27, 'Added Immunization Treatment to ', 'November 18, 2019 - 10:49 pm'),
(851, 27, 'Added Immunization Treatment to ', 'November 18, 2019 - 10:51 pm'),
(852, 27, 'Added Immunization Treatment to ', 'November 18, 2019 - 10:54 pm'),
(853, 27, 'Added Immunization Treatment to Arya Stark', 'November 18, 2019 - 11:02 pm'),
(854, 27, 'Added Immunization Treatment to Arya Stark', 'November 18, 2019 - 11:08 pm'),
(855, 27, 'Added Immunization Treatment to Arya Stark', 'November 18, 2019 - 11:19 pm'),
(856, 27, 'Added Immunization Treatment to Arya Stark', 'November 18, 2019 - 11:20 pm'),
(857, 27, 'Added Immunization Treatment to Sansa Stark', 'November 19, 2019 - 6:43 pm'),
(858, 27, 'Added Jamie Lannister to Immunization', 'November 19, 2019 - 7:42 pm'),
(859, 27, 'Added Immunization Treatment to Jamie Lannister', 'November 19, 2019 - 7:44 pm'),
(860, 27, 'Added Hilary Ahmor Sipat to Immunization', 'November 19, 2019 - 9:11 pm'),
(861, 27, 'Added Immunization Treatment to Arya Stark', 'November 19, 2019 - 10:10 pm'),
(862, 27, 'Added Immunization Treatment to Arya Stark', 'November 19, 2019 - 10:10 pm'),
(863, 27, 'Successfully Backup the database', 'November 19, 2019, 10:45 pm'),
(864, 27, 'Added Arya Stark to Immunization', 'November 19, 2019 - 10:49 pm'),
(865, 27, 'Added Immunization Treatment to Arya Stark', 'November 19, 2019 - 10:50 pm'),
(866, 27, 'Successfully Backup the database', 'November 19, 2019, 10:50 pm'),
(867, 27, 'Successfully Backup the database', 'November 19, 2019, 10:52 pm'),
(868, 27, 'Successfully Backup the database', 'November 19, 2019, 10:53 pm'),
(869, 27, 'Successfully Backup the database', 'November 19, 2019, 10:54 pm'),
(870, 27, 'Successfully Backup the database', 'November 19, 2019, 10:54 pm'),
(871, 27, 'Added Hilary Ahmor Sipat to Immunization', 'November 20, 2019 - 1:23 pm'),
(872, 27, 'Added Immunization Treatment to Hilary Ahmor Sipat', 'November 20, 2019 - 1:25 pm'),
(873, 27, 'Added Daniel Andrew Go to Consultation', 'November 20, 2019 - 1:39 pm'),
(874, 27, 'Added Prescription to Daniel Andrew Go', 'November 20, 2019 - 1:40 pm'),
(875, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'November 20, 2019 - 1:46 pm'),
(876, 27, 'Added a Family Planning follow-up date for Mercy Buenafuente', 'November 20, 2019 - 1:47 pm'),
(877, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'November 20, 2019 - 1:52 pm'),
(878, 27, 'Added John Matthew Lorizo to Consultation', 'November 20, 2019 - 3:47 pm'),
(879, 27, 'Added Lolita Villarosa Gerose to Consultation', 'November 20, 2019 - 3:59 pm'),
(880, 27, 'Added Prescription to Lolita Villarosa Gerose', 'November 20, 2019 - 4:02 pm'),
(881, 27, 'Added Bernard Bermo to Consultation', 'November 20, 2019 - 4:03 pm'),
(882, 27, 'Added Prescription to Bernard Bermo', 'November 20, 2019 - 6:44 pm'),
(883, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 20, 2019 - 7:15 pm'),
(884, 182, 'Added Daniel Andrew Go to Consultation', 'November 20, 2019 - 9:07 pm'),
(885, 182, 'Added Prescription to Daniel Andrew Go', 'November 20, 2019 - 9:07 pm'),
(886, 27, 'Added Jesse Franco Latosa to Consultation', 'November 23, 2019 - 3:24 pm'),
(887, 27, 'Added Jesse Franco Latosa to Consultation', 'November 23, 2019 - 3:27 pm'),
(888, 27, 'Added Prescription to Jesse Franco Latosa', 'November 23, 2019 - 3:28 pm'),
(889, 27, 'Added Prescription to ', 'November 23, 2019 - 3:28 pm'),
(890, 27, 'Added Prescription to ', 'November 23, 2019 - 4:06 pm'),
(891, 27, 'Added Jesse Franco Latosa to Consultation', 'November 23, 2019 - 4:10 pm'),
(892, 27, 'Added Prescription to Jesse Franco Latosa', 'November 23, 2019 - 4:12 pm'),
(893, 27, 'Added Jesse Franco Latosa to Consultation', 'November 23, 2019 - 4:14 pm'),
(894, 27, 'Added Prescription to Jesse Franco Latosa', 'November 23, 2019 - 4:15 pm'),
(895, 27, 'Added Daniel Andrew Go to Consultation', 'November 23, 2019 - 4:16 pm'),
(896, 27, 'Added Prescription to Daniel Andrew Go', 'November 23, 2019 - 4:17 pm'),
(897, 27, 'Added Jan Mark Ballados to Consultation', 'November 23, 2019 - 4:22 pm'),
(898, 27, 'Added Prescription to Jan Mark Ballados', 'November 23, 2019 - 4:25 pm'),
(899, 27, 'Added Janeil Alcano to Consultation', 'November 23, 2019 - 4:27 pm'),
(900, 27, 'Added Prescription to Janeil Alcano', 'November 23, 2019 - 4:28 pm'),
(901, 27, 'Added Prescription to Janeil Alcano', 'November 23, 2019 - 4:28 pm'),
(902, 27, 'Added Prescription to Janeil Alcano', 'November 23, 2019 - 4:38 pm'),
(903, 27, 'Added Prescription to Janeil Alcano', 'November 23, 2019 - 4:38 pm'),
(904, 27, 'Added Jesse Franco Latosa to Consultation', 'November 23, 2019 - 6:41 pm'),
(905, 27, 'Added Prescription to Jesse Franco Latosa', 'November 23, 2019 - 6:42 pm'),
(906, 27, 'Added Prescription to Jesse Franco Latosa', 'November 23, 2019 - 6:42 pm'),
(907, 27, 'Registered Markh B. Jamandre as new Patient', 'November 23, 2019 - 7:27 pm'),
(908, 27, 'Added Markh B. Jamandre to Consultation', 'November 23, 2019 - 7:28 pm'),
(909, 27, 'Added Prescription to Markh B. Jamandre', 'November 23, 2019 - 7:28 pm'),
(910, 27, 'Successfully Backup the database', 'November 23, 2019, 7:29 pm'),
(911, 27, 'Added Jesse Franco Latosa to Consultation', 'November 23, 2019 - 8:16 pm'),
(912, 27, 'Added Prescription to Jesse Franco Latosa', 'November 23, 2019 - 8:17 pm'),
(913, 27, 'Added Lolita Villarosa Gerose to Consultation', 'November 24, 2019 - 3:11 pm'),
(914, 27, 'Added Prescription to Lolita Villarosa Gerose', 'November 24, 2019 - 3:12 pm'),
(915, 27, 'Added Dennzel Quatchon to Consultation', 'November 24, 2019 - 3:19 pm'),
(916, 27, 'Added Prescription to Dennzel Quatchon', 'November 24, 2019 - 3:19 pm'),
(917, 27, 'Added Prescription to Dennzel Quatchon', 'November 24, 2019 - 3:20 pm'),
(918, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'November 24, 2019 - 3:24 pm'),
(919, 27, 'Updated the Prenatal follow-up date for Lolita Villarosa Gerose', 'November 24, 2019 - 4:33 pm'),
(920, 27, 'Successfully Backup the database', 'November 24, 2019, 4:36 pm'),
(921, 27, 'Added Janeil Alcano to Consultation', 'November 25, 2019 - 4:26 pm'),
(922, 27, 'Added Prescription to Janeil Alcano', 'November 25, 2019 - 4:28 pm'),
(923, 27, 'Updated the Prenatal follow-up date for Lolita Villarosa Gerose', 'November 25, 2019 - 4:39 pm'),
(924, 27, 'Added a New Individual Referral Record', 'November 25, 2019 8:22 pm'),
(925, 27, 'Added a New Prenatal Referral Record', 'November 25, 2019 8:35 pm'),
(926, 27, 'Added Markh B. Jamandre to Consultation', 'November 25, 2019 - 9:09 pm'),
(927, 27, 'Added Bernard Bermo to Consultation', 'November 25, 2019 - 9:12 pm'),
(928, 27, 'Added Prescription to Bernard Bermo', 'November 25, 2019 - 9:12 pm'),
(929, 27, 'Added Prescription to Jesse Franco Latosa', 'November 26, 2019 - 12:22 am'),
(930, 27, 'Added Prescription to Jesse Franco Latosa', 'November 26, 2019 - 12:22 am'),
(931, 27, 'Added Prescription to Jesse Franco Latosa', 'November 26, 2019 - 12:22 am'),
(932, 27, 'Added Margarita Diana to Family Planning', 'November 26, 2019 - 10:53 pm'),
(933, 27, 'Added Margarita Diana to Family Planning', 'November 26, 2019 - 11:09 pm'),
(934, 27, 'Added Lolita Villarosa Gerose to Family Planning Assessment', 'November 26, 2019 - 11:24 pm'),
(935, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 10:47 am'),
(936, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 10:47 am'),
(937, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 10:48 am'),
(938, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 11:39 am'),
(939, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 11:42 am'),
(940, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 11:44 am'),
(941, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 11:46 am'),
(942, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 11:46 am'),
(943, 27, 'Added Rifampicin + isoniazid as new medicine', 'November 27, 2019 - 2:49 pm'),
(944, 27, 'Added Rifampicin + isoniazid + Pyrazinamide + Ethambutol as new medicine', 'November 27, 2019 - 2:49 pm'),
(945, 27, 'Added Rifampicin + isoniazid + Pyrazinamide + Ethambutol as new medicine', 'November 27, 2019 - 2:50 pm'),
(946, 27, 'Added Calcium Carbonate (Calcimate) as new medicine', 'November 27, 2019 - 2:51 pm'),
(947, 27, 'Added Ferrous Sulphate + Folic Acid as new medicine', 'November 27, 2019 - 2:54 pm'),
(948, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'November 27, 2019 - 5:21 pm'),
(949, 27, 'Successfully Backup the database', 'November 27, 2019, 5:25 pm'),
(950, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 27, 2019 - 5:38 pm'),
(951, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 27, 2019 - 5:38 pm'),
(952, 27, 'Updated the Family Planning follow-up date for Mercy Buenafuente', 'November 27, 2019 - 5:38 pm'),
(953, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 27, 2019 - 5:46 pm'),
(954, 27, 'Added Lolita Villarosa Gerose to Family Planning', 'November 27, 2019 - 6:19 pm'),
(955, 27, 'Added Lolita Villarosa Gerose to Family Planning', 'November 27, 2019 - 6:25 pm'),
(956, 27, 'Added Lolita Villarosa Gerose to Family Planning', 'November 27, 2019 - 6:45 pm'),
(957, 27, 'Added Lolita Villarosa Gerose to Family Planning Assessment', 'November 27, 2019 - 6:49 pm'),
(958, 27, 'Added Kizsha Lauriaga to Family Planning', 'November 27, 2019 - 6:50 pm'),
(959, 27, 'Added Wilma Mendez to Family Planning', 'November 27, 2019 - 6:54 pm'),
(960, 27, 'Added Janeil Alcano to Consultation', 'November 27, 2019 - 8:13 pm'),
(961, 27, 'Added Prescription to Janeil Alcano', 'November 27, 2019 - 8:15 pm'),
(962, 27, 'Added Daniel Andrew Go to Consultation', 'November 27, 2019 - 8:34 pm'),
(963, 27, 'Added Prescription to Daniel Andrew Go', 'November 27, 2019 - 8:35 pm'),
(964, 27, 'Added Lolita Villarosa Gerose to Family Planning', 'November 27, 2019 - 8:37 pm'),
(965, 27, 'Added Lolita Villarosa Gerose to Family Planning Assessment', 'November 27, 2019 - 8:40 pm'),
(966, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'November 27, 2019 - 9:53 pm'),
(967, 27, 'Added a New Individual Referral Record', 'November 28, 2019 6:43 pm'),
(968, 27, 'Added a New Individual Referral Record', 'November 28, 2019 6:52 pm'),
(969, 27, 'Added a New Individual Referral Record', 'November 28, 2019 6:57 pm'),
(970, 27, 'Added a New Individual Referral Record', 'November 28, 2019 7:00 pm'),
(971, 27, 'Added a New Prenatal Referral Record', 'November 28, 2019 7:08 pm'),
(972, 27, 'Added a New Prenatal Referral Record', 'November 28, 2019 7:12 pm'),
(973, 27, 'Added a New Prenatal Referral Record', 'November 28, 2019 7:15 pm'),
(974, 27, 'Deactivated User Account', 'November 28, 2019 - 7:26 pm'),
(975, 27, 'Activated User Account', 'November 28, 2019 - 7:27 pm'),
(976, 27, 'Successfully Backup the database', 'November 28, 2019, 8:15 pm'),
(977, 27, 'Added Mercy Buenafuente to Prenatal', 'November 28, 2019 - 10:57 pm'),
(978, 27, 'Added Kizsha Lauriaga to Prenatal', 'November 29, 2019 - 12:58 am'),
(979, 27, 'Added Stay Bagagrel to Prenatal', 'November 29, 2019 - 1:02 am'),
(980, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'November 29, 2019 - 6:13 pm'),
(981, 27, 'Updated account of Diana Rose S. Laput', 'November 29, 2019 - 7:23 pm'),
(982, 27, 'Updated account of Diana Rose S. Laput', 'November 29, 2019 - 7:23 pm'),
(983, 27, 'Updated account of Diana Rose S. Laput', 'November 29, 2019 - 7:24 pm'),
(984, 27, 'Updated account of Diana Rose S. Laput', 'November 29, 2019 - 7:25 pm'),
(985, 27, 'Updated account of Diana Rose S. Laput', 'November 29, 2019 - 7:26 pm'),
(986, 27, 'Updated account of Diana Rose S. Laput', 'November 29, 2019 - 7:26 pm'),
(987, 27, 'added 20 pieces of Ferrous Sulphate + Folic Acid to stocks', 'November 29, 2019 8:01 pm'),
(988, 27, 'added 25 pieces of Rifampicin + isoniazid + Pyrazinamide + Ethambutol to stocks', 'November 29, 2019 8:02 pm'),
(989, 27, 'added 25 pieces of Calcium Carbonate (Calcimate) to stocks', 'November 29, 2019 8:02 pm'),
(990, 27, 'added 10 pieces of Rifapentine to stocks', 'November 29, 2019 8:03 pm'),
(991, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'November 29, 2019 - 8:47 pm'),
(992, 27, 'Successfully Backup the database', 'November 29, 2019, 9:27 pm'),
(993, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'November 29, 2019 - 10:15 pm'),
(994, 27, 'Added Stay Bagagrel to Prenatal Consultation', 'November 29, 2019 - 10:58 pm'),
(995, 27, 'Added Stay Bagagrel to Prenatal Consultation', 'November 29, 2019 - 11:27 pm'),
(996, 27, 'Successfully Backup the database', 'November 29, 2019, 11:41 pm'),
(997, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'November 29, 2019 - 11:55 pm'),
(998, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'November 30, 2019 - 7:33 pm'),
(999, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'November 30, 2019 - 7:37 pm'),
(1000, 27, 'Added Lolita Villarosa Gerose to Consultation', 'November 30, 2019 - 8:09 pm'),
(1001, 27, 'Added Prescription to Lolita Villarosa Gerose', 'November 30, 2019 - 8:10 pm'),
(1002, 27, 'Added Janeil Alcano to Consultation', 'November 30, 2019 - 8:20 pm'),
(1003, 27, 'Added Prescription to Janeil Alcano', 'November 30, 2019 - 8:20 pm'),
(1004, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'December 2, 2019 - 12:25 pm'),
(1005, 27, 'Added Mercy Buenafuente to Prenatal Consultation', 'December 2, 2019 - 12:26 pm'),
(1006, 27, 'Added Mercy Buenafuente to Consultation', 'December 2, 2019 - 12:29 pm'),
(1007, 27, 'Added Prescription to Mercy Buenafuente', 'December 2, 2019 - 12:29 pm'),
(1008, 27, 'dispensed 5 Biogesic to Dennzel Quatchon', 'December 2, 2019 4:41 pm'),
(1009, 27, 'Added Daniel Andrew Go to Consultation', 'December 2, 2019 - 4:58 pm'),
(1010, 27, 'Added Prescription to Daniel Andrew Go', 'December 2, 2019 - 4:59 pm'),
(1011, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'December 2, 2019 - 10:58 pm'),
(1012, 27, 'Registered Lagrimas Casabuena Campa as new Patient', 'December 3, 2019 - 11:27 pm'),
(1013, 27, 'Added Lagrimas Casabuena Campa to Consultation', 'December 3, 2019 - 11:31 pm'),
(1014, 27, 'Added Vitamin B Complex as new medicine', 'December 3, 2019 - 11:38 pm'),
(1015, 27, 'Added Celecoxib 200mg as new medicine', 'December 3, 2019 - 11:42 pm'),
(1016, 27, 'added 20 pieces of Celecoxib 200mg to stocks', 'December 3, 2019 11:43 pm'),
(1017, 27, 'added 20 pieces of Vitamin B Complex to stocks', 'December 3, 2019 11:46 pm'),
(1018, 27, 'Added Prescription to Lagrimas Casabuena Campa', 'December 3, 2019 - 11:48 pm'),
(1019, 27, 'Registered Zemira Anndrey Torrecarion Sabordo as new Child Patient', 'December 3, 2019 - 11:58 pm'),
(1020, 27, 'Registered Leanne Mandolado Tacdoro as new Child Patient', 'December 4, 2019 - 12:00 am'),
(1021, 27, 'Registered Klyde Parar Ramos as new Child Patient', 'December 4, 2019 - 12:02 am'),
(1022, 27, 'Added Zemira Anndrey Torrecarion Sabordo to Immunization', 'December 4, 2019 - 12:05 am'),
(1023, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:15 am'),
(1024, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:17 am'),
(1025, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:18 am'),
(1026, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:19 am'),
(1027, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:23 am'),
(1028, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:23 am'),
(1029, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:24 am'),
(1030, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:25 am'),
(1031, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:25 am'),
(1032, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:25 am'),
(1033, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:26 am'),
(1034, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:26 am'),
(1035, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:27 am'),
(1036, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:27 am'),
(1037, 27, 'Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo', 'December 4, 2019 - 12:31 am'),
(1038, 27, 'Added Leanne Mandolado Tacdoro to Immunization', 'December 4, 2019 - 12:37 am'),
(1039, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:37 am'),
(1040, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:38 am'),
(1041, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:39 am'),
(1042, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:40 am'),
(1043, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:40 am'),
(1044, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:40 am'),
(1045, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:41 am'),
(1046, 27, 'Added Immunization Treatment to Leanne Mandolado Tacdoro', 'December 4, 2019 - 12:41 am'),
(1047, 27, 'Added Klyde Parar Ramos to Immunization', 'December 4, 2019 - 12:45 am'),
(1048, 27, 'Added Immunization Treatment to Klyde Parar Ramos', 'December 4, 2019 - 12:45 am'),
(1049, 27, 'Added Immunization Treatment to Klyde Parar Ramos', 'December 4, 2019 - 12:46 am'),
(1050, 27, 'Added Immunization Treatment to Klyde Parar Ramos', 'December 4, 2019 - 12:47 am'),
(1051, 27, 'Added Immunization Treatment to Klyde Parar Ramos', 'December 4, 2019 - 12:47 am'),
(1052, 27, 'Added Immunization Treatment to Klyde Parar Ramos', 'December 4, 2019 - 12:47 am'),
(1053, 27, 'dispensed 5 Vitamin B Complex to Lagrimas Casabuena Campa', 'December 4, 2019 1:00 am'),
(1054, 27, 'dispensed 3 Celecoxib 200 mg to Lagrimas Casabuena Campa', 'December 4, 2019 1:00 am'),
(1055, 27, 'Successfully Backup the database', 'December 4, 2019, 12:43 pm'),
(1056, 27, 'Added Wilma Mendez to Family Planning', 'December 4, 2019 - 1:14 pm'),
(1057, 27, 'Added Wilma Mendez to Family Planning Assessment', 'December 4, 2019 - 1:19 pm'),
(1058, 27, 'Added Margarita Diana to Prenatal', 'December 4, 2019 - 1:28 pm'),
(1059, 27, 'Added Margarita Diana to Prenatal Consultation', 'December 4, 2019 - 1:34 pm'),
(1060, 27, 'Added Margarita Diana to Prenatal Consultation', 'December 4, 2019 - 1:36 pm'),
(1061, 27, 'Added Markh B. Jamandre to Consultation', 'December 4, 2019 - 2:03 pm'),
(1062, 27, 'Added Prescription to Markh B. Jamandre', 'December 4, 2019 - 2:07 pm'),
(1063, 27, 'Added a New Individual Referral Record', 'December 4, 2019 2:14 pm'),
(1064, 182, 'Registered Itot as new Patient', 'December 5, 2019 - 6:58 pm'),
(1065, 182, 'Registered James Yap as new Patient', 'December 5, 2019 - 7:00 pm'),
(1066, 182, 'Registered Nathaniel Ventor as new Patient', 'December 5, 2019 - 7:13 pm'),
(1067, 27, 'Registered James Yap as new Patient', 'December 5, 2019 - 7:21 pm'),
(1068, 27, 'Registered Franze Beatriz Caballero as new Patient', 'December 5, 2019 - 7:25 pm'),
(1069, 27, 'Registered Itot as new Patient', 'December 5, 2019 - 7:45 pm'),
(1070, 27, 'Registered Emmanuel James Tan as new Patient', 'December 5, 2019 - 8:11 pm'),
(1071, 27, 'Registered Franze Beatriz Caballero as new Patient', 'December 5, 2019 - 8:13 pm'),
(1072, 27, 'Registered Danielle Gwen Dusaran as new Patient', 'December 5, 2019 - 8:19 pm'),
(1073, 27, 'Registered 3 as new Child Patient', 'December 5, 2019 - 8:33 pm'),
(1074, 27, 'Edited Jesse Franco Latosa Patient Profile', 'December 6, 2019 - 5:45 pm'),
(1075, 27, 'Edited Emmanuel James Tan Patient Profile', 'December 6, 2019 - 5:53 pm'),
(1076, 27, 'Edited Lagrimas Casabuena Campa Patient Profile', 'December 6, 2019 - 5:54 pm'),
(1077, 27, 'Edited Markh B. Jamandre Patient Profile', 'December 6, 2019 - 5:55 pm'),
(1078, 27, 'Edited Rose Zirilli Patient Profile', 'December 6, 2019 - 5:56 pm'),
(1079, 27, 'Edited Slena Wasky Patient Profile', 'December 6, 2019 - 5:57 pm'),
(1080, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 6, 2019 - 5:58 pm'),
(1081, 27, 'Edited Anne Berquist Patient Profile', 'December 6, 2019 - 6:09 pm'),
(1082, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 6, 2019 - 6:10 pm'),
(1083, 27, 'Edited Marie Bazagrel Patient Profile', 'December 6, 2019 - 6:10 pm'),
(1084, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 6, 2019 - 6:11 pm'),
(1085, 27, 'Edited Stay Bagagrel Patient Profile', 'December 6, 2019 - 6:12 pm'),
(1086, 27, 'Edited Wilma Mendez Patient Profile', 'December 6, 2019 - 6:12 pm'),
(1087, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 6, 2019 - 6:13 pm'),
(1088, 27, 'Edited Kizsha Lauriaga Patient Profile', 'December 6, 2019 - 6:13 pm'),
(1089, 27, 'Edited Ariane Torres Patient Profile', 'December 6, 2019 - 6:14 pm'),
(1090, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'December 6, 2019 - 6:15 pm'),
(1091, 27, 'Edited Jan Mark Ballados Patient Profile', 'December 6, 2019 - 6:15 pm'),
(1092, 27, 'Edited Rommel Adricula Patient Profile', 'December 6, 2019 - 6:16 pm'),
(1093, 27, 'Edited Renzo Nono Patient Profile', 'December 6, 2019 - 6:18 pm'),
(1094, 27, 'Edited Maria Cafra Patient Profile', 'December 6, 2019 - 6:18 pm'),
(1095, 27, 'Edited Bernard Bermo Patient Profile', 'December 6, 2019 - 6:20 pm'),
(1096, 27, 'Edited Dennzel Quatchon Patient Profile', 'December 6, 2019 - 6:23 pm');
INSERT INTO `users_activity_log` (`log_id`, `user_id`, `action`, `date_time`) VALUES
(1097, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 6, 2019 - 6:28 pm'),
(1098, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'December 6, 2019 - 6:30 pm'),
(1099, 27, 'dispensed 6 Rifapentine to Daniel Andrew Go', 'December 6, 2019 6:42 pm'),
(1100, 27, 'dispensed 4 Cefalexin 250  to Bernard Bermo', 'December 6, 2019 6:44 pm'),
(1101, 27, 'Added 3 as new medicine', 'December 6, 2019 - 6:44 pm'),
(1102, 27, 'dispensed 5 Cefalexin 250  to Lolita Villarosa Gerose', 'December 6, 2019 6:45 pm'),
(1103, 27, 'dispensed 2 Biogesic to Janeil Alcano', 'December 6, 2019 6:55 pm'),
(1104, 27, 'dispensed 5 Biogesic to Margarita Diana', 'December 6, 2019 6:58 pm'),
(1105, 27, 'Added a New Individual Referral Record', 'December 8, 2019 5:32 pm'),
(1106, 27, 'Added a Prenatal follow-up date for Stay Bagagrel', 'December 8, 2019 - 5:39 pm'),
(1107, 27, 'Updated the Family Planning follow-up date for Lolita Villarosa Gerose', 'December 8, 2019 - 5:49 pm'),
(1108, 27, 'Added a Prenatal follow-up date for Margarita Diana', 'December 8, 2019 - 5:50 pm'),
(1109, 27, 'Updated the Prenatal follow-up date for Margarita Diana', 'December 8, 2019 - 5:50 pm'),
(1110, 27, 'Added a Prenatal follow-up date for Stay Bagagrel', 'December 8, 2019 - 5:50 pm'),
(1111, 27, 'Added a Prenatal follow-up date for Mercy Buenafuente', 'December 8, 2019 - 5:50 pm'),
(1112, 27, 'Updated the Prenatal follow-up date for Margarita Diana', 'December 8, 2019 - 5:51 pm'),
(1113, 27, 'Updated the Prenatal follow-up date for Stay Bagagrel', 'December 8, 2019 - 5:51 pm'),
(1114, 27, 'dispensed 2 Celecoxib 200 mg to Daniel Andrew Go', 'December 8, 2019 5:56 pm'),
(1115, 27, 'added 5 pieces of Celecoxib 200 mg to stocks', 'December 8, 2019 5:58 pm'),
(1116, 27, 'added 20 pieces of Cecon 500 mg to stocks', 'December 8, 2019 5:59 pm'),
(1117, 27, 'added 5 pieces of Vitamin B Complex to stocks', 'December 8, 2019 6:01 pm'),
(1118, 27, 'dispensed 5 Celecoxib 200 mg to Rose Zirilli', 'December 8, 2019 6:04 pm'),
(1119, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:02 pm'),
(1120, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:03 pm'),
(1121, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:03 pm'),
(1122, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:03 pm'),
(1123, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 8, 2019 - 7:05 pm'),
(1124, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 8, 2019 - 7:05 pm'),
(1125, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:06 pm'),
(1126, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 8, 2019 - 7:06 pm'),
(1127, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 8, 2019 - 7:07 pm'),
(1128, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:07 pm'),
(1129, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:08 pm'),
(1130, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 8, 2019 - 7:09 pm'),
(1131, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 8, 2019 - 7:09 pm'),
(1132, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:09 pm'),
(1133, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:10 pm'),
(1134, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:10 pm'),
(1135, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:11 pm'),
(1136, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:12 pm'),
(1137, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:14 pm'),
(1138, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:21 pm'),
(1139, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 8, 2019 - 7:22 pm'),
(1140, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 8, 2019 - 7:22 pm'),
(1141, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:29 pm'),
(1142, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:31 pm'),
(1143, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:31 pm'),
(1144, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 8, 2019 - 7:32 pm'),
(1145, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 8, 2019 - 7:32 pm'),
(1146, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 8, 2019 - 7:44 pm'),
(1147, 27, 'Edited Klyde Parar Ramos Child Patient Profile', 'December 8, 2019 - 7:44 pm'),
(1148, 27, 'Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile', 'December 8, 2019 - 7:44 pm'),
(1149, 27, 'Edited Emmanuel James Tan Patient Profile', 'December 8, 2019 - 7:58 pm'),
(1150, 27, 'Edited Lagrimas Casabuena Campa Patient Profile', 'December 8, 2019 - 8:14 pm'),
(1151, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'December 8, 2019 - 8:51 pm'),
(1152, 27, 'Edited Hilary Ahmor Sipat Child Patient Profile', 'December 8, 2019 - 11:11 pm'),
(1153, 27, 'Registered Leanne Mandolado Tacdoro as new Child Patient', 'December 9, 2019 - 12:05 am'),
(1154, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 9, 2019 - 12:05 am'),
(1155, 27, 'Edited Leanne Mandolado Tacdoro Child Patient Profile', 'December 9, 2019 - 12:06 am'),
(1156, 27, 'Added Leanne Mandolado Tacdoro to Immunization', 'December 9, 2019 - 12:09 am'),
(1157, 27, 'Added a Prenatal follow-up date for Stay Bagagrel', 'December 9, 2019 - 4:08 pm'),
(1158, 27, 'Added a Prenatal follow-up date for Mercy Buenafuente', 'December 9, 2019 - 4:18 pm'),
(1159, 27, 'Added a Prenatal follow-up date for Stay Bagagrel', 'December 9, 2019 - 4:19 pm'),
(1160, 27, 'Updated the Prenatal follow-up date for Stay Bagagrel', 'December 9, 2019 - 4:20 pm'),
(1161, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'December 9, 2019 - 4:20 pm'),
(1162, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'December 9, 2019 - 4:22 pm'),
(1163, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'December 9, 2019 - 4:22 pm'),
(1164, 27, 'Updated the Prenatal follow-up date for Mercy Buenafuente', 'December 9, 2019 - 4:22 pm'),
(1165, 27, 'Added a Prenatal follow-up date for Margarita Diana', 'December 9, 2019 - 4:27 pm'),
(1166, 27, 'Updated the Prenatal follow-up date for Margarita Diana', 'December 9, 2019 - 4:27 pm'),
(1167, 27, 'Added a Prenatal follow-up date for Stay Bagagrel', 'December 9, 2019 - 4:27 pm'),
(1168, 27, 'Added a New Individual Referral Record', 'December 9, 2019 4:51 pm'),
(1169, 27, 'Added a New Individual Referral Record', 'December 9, 2019 4:53 pm'),
(1170, 27, 'Successfully Backup the database', 'December 9, 2019, 10:48 pm'),
(1171, 27, 'Updated the Prenatal follow-up date for Stay Bagagrel', 'December 10, 2019 - 1:10 pm'),
(1172, 27, 'Added a Prenatal follow-up date for Mercy Buenafuente', 'December 10, 2019 - 1:10 pm'),
(1173, 27, 'Added a Family Planning follow-up date for Wilma Mendez', 'December 10, 2019 - 1:11 pm'),
(1174, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 2:32 pm'),
(1175, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 2:34 pm'),
(1176, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 2:34 pm'),
(1177, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 2:35 pm'),
(1178, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 2:35 pm'),
(1179, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 2:43 pm'),
(1180, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 3:08 pm'),
(1181, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 3:09 pm'),
(1182, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 3:09 pm'),
(1183, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 3:10 pm'),
(1184, 27, 'Edited  Family Planning Form', 'December 10, 2019 - 3:10 pm'),
(1185, 27, 'Added Mercy Buenafuente to Prenatal', 'December 10, 2019 - 3:16 pm'),
(1186, 27, 'Added  to Prenatal', 'December 10, 2019 - 3:22 pm'),
(1187, 27, 'Added  to Prenatal', 'December 10, 2019 - 3:23 pm'),
(1188, 27, 'Added  to Prenatal', 'December 10, 2019 - 3:24 pm'),
(1189, 27, 'Added  to Prenatal', 'December 10, 2019 - 3:24 pm'),
(1190, 27, 'Added  to Prenatal', 'December 10, 2019 - 3:25 pm'),
(1191, 27, 'Edited  Consultation Form', 'December 10, 2019 - 4:00 pm'),
(1192, 27, 'Edited  Consultation Form', 'December 10, 2019 - 4:00 pm'),
(1193, 27, 'Edited  Immunization Form', 'December 10, 2019 - 4:55 pm'),
(1194, 27, 'Edited  Immunization Form', 'December 10, 2019 - 4:56 pm'),
(1195, 27, 'Edited  Immunization Form', 'December 10, 2019 - 4:57 pm'),
(1196, 27, 'Edited  Immunization Form', 'December 10, 2019 - 4:59 pm'),
(1197, 27, 'Edited  Immunization Form', 'December 10, 2019 - 4:59 pm'),
(1198, 27, 'Edited  Immunization Form', 'December 10, 2019 - 4:59 pm'),
(1199, 27, 'Edited  Immunization Form', 'December 10, 2019 - 5:00 pm'),
(1200, 27, 'Edited John Michael Aguillona Referral Record', 'December 10, 2019 6:43 pm'),
(1201, 27, 'Edited John Michael Aguillons Referral Record', 'December 10, 2019 6:53 pm'),
(1202, 27, 'Edited John Michael Aguillons Referral Record', 'December 10, 2019 6:56 pm'),
(1203, 27, 'Edited Sherlock Finch Referral Record', 'December 10, 2019 6:57 pm'),
(1204, 27, 'Edited John Michael Aguillon Referral Record', 'December 10, 2019 6:57 pm'),
(1205, 27, 'Edited John Michael Aguillon Referral Record', 'December 10, 2019 6:58 pm'),
(1206, 27, 'Edited Kherrie Tejare Prenatal Referral Record', 'December 10, 2019 7:29 pm'),
(1207, 27, 'Edited Kherrie Tejaresss Prenatal Referral Record', 'December 10, 2019 7:31 pm'),
(1208, 27, 'Edited Kherrie Tejaresss Prenatal Referral Record', 'December 10, 2019 7:32 pm'),
(1209, 27, 'Edited Kherrie Tejare Prenatal Referral Record', 'December 10, 2019 7:32 pm'),
(1210, 27, 'Edited Kherrie Tejare Prenatal Referral Record', 'December 10, 2019 7:33 pm'),
(1211, 27, 'Edited Franze Beatriz Caballero Prenatal Referral Record', 'December 10, 2019 7:34 pm'),
(1212, 27, 'Edited Franze Beatriz Caballero Prenatal Referral Record', 'December 10, 2019 7:34 pm'),
(1213, 27, 'Added Mercy Buenafuente to Family Planning', 'December 10, 2019 - 7:47 pm'),
(1214, 27, 'Added Mercy Buenafuente to Family Planning Assessment', 'December 10, 2019 - 7:50 pm'),
(1215, 27, 'Added Lolita Villarosa Gerose to Family Planning', 'December 10, 2019 - 7:51 pm'),
(1216, 27, 'Added Lolita Villarosa Gerose to Family Planning Assessment', 'December 10, 2019 - 7:53 pm'),
(1217, 27, 'Added Lagrimas Casabuena Campa to Family Planning', 'December 11, 2019 - 1:24 pm'),
(1218, 27, 'Edited  Consultation Form', 'December 12, 2019 - 4:16 pm'),
(1219, 27, 'Registered Dfdfd as new Patient', 'December 12, 2019 - 4:26 pm'),
(1220, 27, 'Registered Joseph Narren F. Tabayo as new Patient', 'January 15, 2020 - 12:58 pm'),
(1221, 27, 'Deactivated User Account', 'January 15, 2020 - 1:23 pm'),
(1222, 27, 'Activated User Account', 'January 15, 2020 - 1:23 pm'),
(1223, 27, 'Successfully Backup the database', 'January 15, 2020, 7:05 pm'),
(1224, 27, 'Successfully Backup the database', 'January 15, 2020, 7:06 pm'),
(1225, 27, 'Successfully Backup the database', 'January 15, 2020, 10:45 pm'),
(1226, 27, 'Successfully Backup the database', 'January 15, 2020, 10:46 pm'),
(1227, 27, 'Registered Freya Allan as new Patient', 'January 18, 2020 - 11:51 am'),
(1228, 27, 'Added Freya Allan to Prenatal', 'January 18, 2020 - 9:16 pm'),
(1229, 27, 'Added Freya Allan to Prenatal', 'January 18, 2020 - 9:20 pm'),
(1230, 27, 'Added Freya Allan to Prenatal', 'January 18, 2020 - 9:23 pm'),
(1231, 27, 'Added Freya Allan to Prenatal', 'January 18, 2020 - 9:29 pm'),
(1232, 27, 'Added Freya Allan to Prenatal', 'January 18, 2020 - 11:50 pm'),
(1233, 27, 'Added Freya Allan to Prenatal Consultation', 'January 18, 2020 - 11:51 pm'),
(1234, 27, 'Added Freya Allan to Prenatal', 'January 18, 2020 - 11:54 pm'),
(1235, 27, 'Added Freya Allan to Prenatal Consultation', 'January 18, 2020 - 11:54 pm'),
(1236, 27, 'Added Freya Allan to Prenatal Consultation', 'January 19, 2020 - 12:00 am'),
(1237, 27, 'Updated the Prenatal follow-up date for Stay Bagagrel', 'January 19, 2020 - 12:13 am'),
(1238, 27, 'Added Markh B. Jamandre to Consultation', 'January 19, 2020 - 12:26 am'),
(1239, 27, 'Added Prescription to Markh B. Jamandre', 'January 19, 2020 - 12:27 am'),
(1240, 27, 'Registered Freya Allan as new Child Patient', 'January 19, 2020 - 10:37 am'),
(1241, 27, 'Successfully Backup the database', 'January 19, 2020, 11:40 am'),
(1242, 27, 'Added Emmanuel James Tan to Consultation', 'January 29, 2020 - 4:46 pm'),
(1243, 27, 'Added Prescription to Emmanuel James Tan', 'January 29, 2020 - 4:46 pm'),
(1244, 27, 'Added dfdf as new medicine', 'January 29, 2020 - 5:02 pm'),
(1245, 27, 'Added  as new medicine', 'January 29, 2020 - 5:23 pm'),
(1246, 27, 'Added  as new medicine', 'January 29, 2020 - 5:27 pm'),
(1247, 27, 'Added  as new medicine', 'January 29, 2020 - 5:51 pm'),
(1248, 27, 'Added \'; DROP TABLE fuck; -- as new medicine', 'January 29, 2020 - 6:06 pm'),
(1249, 27, 'Added !@#$%^%^&*() as new medicine', 'January 29, 2020 - 6:08 pm'),
(1250, 27, 'Added a Family Planning follow-up date for Wilma Mendez', 'January 29, 2020 - 6:18 pm'),
(1251, 27, 'Added a Family Planning follow-up date for Lolita Villarosa Gerose', 'January 29, 2020 - 6:19 pm'),
(1252, 27, 'Added a Family Planning follow-up date for Wilma Mendez', 'January 29, 2020 - 6:37 pm'),
(1253, 27, 'Added a New Individual Referral Record', 'January 29, 2020 7:36 pm'),
(1254, 27, 'Added a New Prenatal Referral Record', 'January 29, 2020 8:06 pm'),
(1255, 27, 'Added Johnny Sins as New User', 'January 29, 2020 - 8:29 pm'),
(1256, 27, 'Updated account of Diana Rose S. Laput', 'January 29, 2020 - 8:48 pm'),
(1257, 27, 'Updated account of Diana Rose S. Laput', 'January 29, 2020 - 8:49 pm'),
(1258, 27, 'Added Freya Allan to Family Planning', 'January 29, 2020 - 8:57 pm'),
(1259, 27, 'Added Freya Allan to Family Planning Assessment', 'January 29, 2020 - 9:08 pm'),
(1260, 27, 'Edited  Family Planning Form', 'January 29, 2020 - 9:09 pm'),
(1261, 27, 'Edited  Family Planning Form', 'January 29, 2020 - 9:10 pm'),
(1262, 27, 'Edited  Family Planning Form', 'January 29, 2020 - 9:10 pm'),
(1263, 27, 'Added Freya Allan to Family Planning', 'January 29, 2020 - 9:11 pm'),
(1264, 27, 'Added Freya Allan to Family Planning Assessment', 'January 29, 2020 - 9:20 pm'),
(1265, 27, 'Edited  Family Planning Form', 'January 29, 2020 - 9:21 pm'),
(1266, 27, 'Added Prescription to Markh B. Jamandre', 'January 29, 2020 - 10:26 pm'),
(1267, 27, 'Added Lagrimas Casabuena Campa to Consultation', 'February 1, 2020 - 6:49 pm'),
(1268, 27, 'Edited  Consultation Form', 'February 1, 2020 - 7:03 pm'),
(1269, 27, 'Added Prescription to Lagrimas Casabuena Campa', 'February 1, 2020 - 7:05 pm'),
(1270, 27, 'Added Freya Allan to Consultation', 'February 1, 2020 - 8:04 pm'),
(1271, 27, 'Added Prescription to Freya Allan', 'February 1, 2020 - 8:07 pm'),
(1272, 27, 'Added Lagrimas Casabuena Campa to Consultation', 'February 1, 2020 - 8:20 pm'),
(1273, 27, 'Added Lagrimas Casabuena Campa to Consultation', 'February 1, 2020 - 8:26 pm'),
(1274, 27, 'Added Emmanuel James Tan to Consultation', 'February 1, 2020 - 8:55 pm'),
(1275, 27, 'Edited  Consultation Form', 'February 1, 2020 - 9:03 pm'),
(1276, 27, 'Added Markh B. Jamandre to Consultation', 'February 1, 2020 - 9:03 pm'),
(1277, 27, 'Added a New Individual Referral Record', 'February 1, 2020 9:11 pm'),
(1278, 27, 'Added John Matthew Lorizo to Consultation', 'February 1, 2020 - 9:22 pm'),
(1279, 27, 'Added John Matthew Lorizo to Consultation', 'February 1, 2020 - 9:25 pm'),
(1280, 27, 'Added Emmanuel James Tan to Consultation', 'February 1, 2020 - 9:27 pm'),
(1281, 27, 'Added Rose Zirilli to Consultation', 'February 1, 2020 - 9:28 pm'),
(1282, 27, 'Successfully Backup the database', 'February 1, 2020, 9:31 pm'),
(1283, 27, 'Added Daniel Andrew Go to Consultation', 'February 1, 2020 - 9:32 pm'),
(1284, 27, 'Registered Jesse Franco Latosa as new Patient', 'February 2, 2020 - 1:29 pm'),
(1285, 27, 'Added Jesse Franco Latosa to Consultation', 'February 2, 2020 - 1:31 pm'),
(1286, 27, 'Added Prescription to Jesse Franco Latosa', 'February 2, 2020 - 1:31 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brothers_and_sisters`
--
ALTER TABLE `brothers_and_sisters`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_id`);

--
-- Indexes for table `consultation_prescription`
--
ALTER TABLE `consultation_prescription`
  ADD PRIMARY KEY (`prescription_id`);

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
-- Indexes for table `immunization_consultation`
--
ALTER TABLE `immunization_consultation`
  ADD PRIMARY KEY (`ic_id`);

--
-- Indexes for table `immunization_treatment`
--
ALTER TABLE `immunization_treatment`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`medical_history_id`);

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
-- Indexes for table `obstetrical_history`
--
ALTER TABLE `obstetrical_history`
  ADD PRIMARY KEY (`obstetrical_history_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_child`
--
ALTER TABLE `patient_child`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `pelvic_examination`
--
ALTER TABLE `pelvic_examination`
  ADD PRIMARY KEY (`pelvic_examination_id`);

--
-- Indexes for table `physical_examination`
--
ALTER TABLE `physical_examination`
  ADD PRIMARY KEY (`physical_examination_id`);

--
-- Indexes for table `prenatal`
--
ALTER TABLE `prenatal`
  ADD PRIMARY KEY (`prenatal_id`);

--
-- Indexes for table `prenatal_consultation`
--
ALTER TABLE `prenatal_consultation`
  ADD PRIMARY KEY (`prenatal_consultation_id`);

--
-- Indexes for table `prenatal_follow_up`
--
ALTER TABLE `prenatal_follow_up`
  ADD PRIMARY KEY (`follow_up_id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`referral_id`);

--
-- Indexes for table `referral_prenatal`
--
ALTER TABLE `referral_prenatal`
  ADD PRIMARY KEY (`referral_id`);

--
-- Indexes for table `risk_for_vaw`
--
ALTER TABLE `risk_for_vaw`
  ADD PRIMARY KEY (`risk_for_vaw_id`);

--
-- Indexes for table `sti_risks`
--
ALTER TABLE `sti_risks`
  ADD PRIMARY KEY (`sti_risks_id`);

--
-- Indexes for table `tetanus_toxoid`
--
ALTER TABLE `tetanus_toxoid`
  ADD PRIMARY KEY (`tetanus_toxoid_id`);

--
-- Indexes for table `tetanus_toxoid_fp`
--
ALTER TABLE `tetanus_toxoid_fp`
  ADD PRIMARY KEY (`tetanus_toxoid_fp_id`);

--
-- Indexes for table `type_of_feeding`
--
ALTER TABLE `type_of_feeding`
  ADD PRIMARY KEY (`type_of_feeding_id`);

--
-- Indexes for table `type_of_feeding_2`
--
ALTER TABLE `type_of_feeding_2`
  ADD PRIMARY KEY (`type_of_feeding_2_id`);

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
-- AUTO_INCREMENT for table `brothers_and_sisters`
--
ALTER TABLE `brothers_and_sisters`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `consultation_prescription`
--
ALTER TABLE `consultation_prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `db_backup`
--
ALTER TABLE `db_backup`
  MODIFY `back_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `family_planning`
--
ALTER TABLE `family_planning`
  MODIFY `family_planning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `fp_follow_up`
--
ALTER TABLE `fp_follow_up`
  MODIFY `fp_follow_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `immunization_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `immunization_consultation`
--
ALTER TABLE `immunization_consultation`
  MODIFY `ic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `immunization_treatment`
--
ALTER TABLE `immunization_treatment`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `medical_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  MODIFY `dispensation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  MODIFY `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `obstetrical_history`
--
ALTER TABLE `obstetrical_history`
  MODIFY `obstetrical_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `patient_child`
--
ALTER TABLE `patient_child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelvic_examination`
--
ALTER TABLE `pelvic_examination`
  MODIFY `pelvic_examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `physical_examination`
--
ALTER TABLE `physical_examination`
  MODIFY `physical_examination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `prenatal`
--
ALTER TABLE `prenatal`
  MODIFY `prenatal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `prenatal_consultation`
--
ALTER TABLE `prenatal_consultation`
  MODIFY `prenatal_consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `prenatal_follow_up`
--
ALTER TABLE `prenatal_follow_up`
  MODIFY `follow_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `referral_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `referral_prenatal`
--
ALTER TABLE `referral_prenatal`
  MODIFY `referral_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `risk_for_vaw`
--
ALTER TABLE `risk_for_vaw`
  MODIFY `risk_for_vaw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sti_risks`
--
ALTER TABLE `sti_risks`
  MODIFY `sti_risks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tetanus_toxoid`
--
ALTER TABLE `tetanus_toxoid`
  MODIFY `tetanus_toxoid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tetanus_toxoid_fp`
--
ALTER TABLE `tetanus_toxoid_fp`
  MODIFY `tetanus_toxoid_fp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `type_of_feeding`
--
ALTER TABLE `type_of_feeding`
  MODIFY `type_of_feeding_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `type_of_feeding_2`
--
ALTER TABLE `type_of_feeding_2`
  MODIFY `type_of_feeding_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users_activity_log`
--
ALTER TABLE `users_activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1287;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
