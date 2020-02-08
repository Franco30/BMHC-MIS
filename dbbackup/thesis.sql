-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 06:08 AM
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
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL,
  `remarks` char(40) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings`
--

CREATE TABLE `clinical_findings` (
  `clinical_id` int(10) NOT NULL,
  `date_visited` varchar(30) NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_findings`
--

INSERT INTO `clinical_findings` (`clinical_id`, `date_visited`, `weight`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `patient_id`) VALUES
(1, 'October 24, 2018', 208, 'X', 'X', 'X', '?', '?', 'Itchiness,Vomiting,Abnormal Pain,Joint Paints,Numbness,Yellowing of Sclerae and skin,Visual Disturba', 1),
(2, 'September 21, 2019', 666, 'X', 'âœ“', 'âœ“', 'âœ“', 'âœ“', 'Skin Rashes,Joint Paints,Visual Disturbance,', 1),
(3, 'September 23, 2019', 45, 'âœ“', 'âœ“', 'âœ“', 'âœ“', 'âœ“', 'Itchiness,Skin Rashes,Vomiting,Abnormal Pain,Joint Paints,Numbness,Yellowing of Sclerae and skin,Vis', 1),
(4, 'September 30, 2019', 64, 'âœ“', 'âœ“', 'âœ“', 'X', 'X', 'Skin Rashes,Joint Paints,', 3),
(5, 'November 7, 2019', 111, 'âœ“', 'âœ“', 'âœ“', 'âœ“', 'âœ“', 'Vomiting,Numbness,', 3),
(6, 'November 7, 2019', 78, 'X', 'X', 'X', 'X', 'X', 'No Side Effects', 3);

-- --------------------------------------------------------

--
-- Table structure for table `clinical_findings_ipt`
--

CREATE TABLE `clinical_findings_ipt` (
  `clinical_id` int(10) NOT NULL,
  `date_visited` varchar(50) NOT NULL,
  `weight` int(3) NOT NULL,
  `q1` char(3) NOT NULL,
  `q2` char(3) NOT NULL,
  `q3` char(3) NOT NULL,
  `q4` char(3) NOT NULL,
  `q5` char(3) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `continuation_phase`
--

CREATE TABLE `continuation_phase` (
  `continuation_phase_id` int(10) NOT NULL,
  `dosage` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `date_taken` varchar(20) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continuation_phase`
--

INSERT INTO `continuation_phase` (`continuation_phase_id`, `dosage`, `month`, `date_taken`, `medicine_name`, `year`, `remarks`, `patient_id`) VALUES
(1, '4', 'Sep', 'September 04, 2019', 'Celine', '2019', 'Present', 1),
(2, '6', 'Sep', 'August 08, 2019', 'Cherifer for Kids', '2019', 'Present', 3),
(3, '-', 'Sep', 'September 20, 2019', '', '2019', 'Absent', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cxr`
--

CREATE TABLE `cxr` (
  `cxr_id` int(10) NOT NULL,
  `cxr_findings` varchar(20) NOT NULL,
  `date_of_exam` date NOT NULL,
  `tbdc` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cxr`
--

INSERT INTO `cxr` (`cxr_id`, `cxr_findings`, `date_of_exam`, `tbdc`, `patient_id`) VALUES
(1, 'efdf', '2019-09-03', 'fdfdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `drug_preparations`
--

CREATE TABLE `drug_preparations` (
  `drug_preparation_id` int(10) NOT NULL,
  `date_visited` varchar(30) NOT NULL,
  `isoniazid` varchar(20) NOT NULL,
  `rifampicin` varchar(20) NOT NULL,
  `pyrazinamide` varchar(20) NOT NULL,
  `ethambutol` varchar(20) NOT NULL,
  `streptomycin` varchar(20) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dssm_examination`
--

CREATE TABLE `dssm_examination` (
  `dssm_id` int(11) NOT NULL,
  `date_examined` varchar(30) NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `visual_appearance2` char(15) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `reading2` char(15) NOT NULL,
  `laboratory_diagnosis` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dssm_examination`
--

INSERT INTO `dssm_examination` (`dssm_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `visual_appearance2`, `reading`, `reading2`, `laboratory_diagnosis`, `examined_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(1, 'October 24, 2018', '1', 'Muco-Purulent', 'Salivary', 'wala', 'wala', 'Positive (+)', 'Dr. Jesse Franco Latosa', 'October 24, 2018', 2, 'Oct', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `dst_examination`
--

CREATE TABLE `dst_examination` (
  `dst_id` int(11) NOT NULL,
  `tb_culture_laboratory` varchar(30) NOT NULL,
  `dst_laboratory` varchar(30) NOT NULL,
  `date_collected` varchar(30) NOT NULL,
  `date_received` varchar(30) NOT NULL,
  `method` varchar(20) NOT NULL,
  `isoniazid` varchar(30) NOT NULL,
  `rifampicin` varchar(30) NOT NULL,
  `ethambutol` varchar(30) NOT NULL,
  `streptomycin` varchar(30) NOT NULL,
  `pyrazinamide` varchar(30) NOT NULL,
  `levofloxacin` varchar(30) NOT NULL,
  `kanamycin` varchar(30) NOT NULL,
  `amikacin` varchar(30) NOT NULL,
  `capreomycin` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_member`
--

CREATE TABLE `family_member` (
  `member_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `date_screened` date NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_member`
--

INSERT INTO `family_member` (`member_id`, `name`, `age`, `date_screened`, `patient_id`) VALUES
(1, 'Bronsexual James', 30, '2019-11-20', 1),
(2, 'BILAT', 50, '2019-11-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `follow_up`
--

CREATE TABLE `follow_up` (
  `follow_up_id` int(10) NOT NULL,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up`
--

INSERT INTO `follow_up` (`follow_up_id`, `follow_up_date`, `remarks`, `patient_id`) VALUES
(1, '2019-09-27', 'BALIK DI', 3),
(2, '2019-10-26', 'Balik di kay kwaon mo di listahan sang mag chicks ', 3),
(3, '2019-10-31', 'DAMU DI CHICKS BALIK DI', 3),
(4, '2019-11-20', '', 3),
(5, '2019-12-09', '333', 3),
(6, '2019-12-11', 'dfdf', 3),
(7, '2019-12-13', 'ddf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_ipt`
--

CREATE TABLE `follow_up_ipt` (
  `follow_up_id` int(10) NOT NULL,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_ipt`
--

INSERT INTO `follow_up_ipt` (`follow_up_id`, `follow_up_date`, `remarks`, `patient_id`) VALUES
(1, '2019-09-17', 'BALIK DI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gene_expert_examination`
--

CREATE TABLE `gene_expert_examination` (
  `xpert_id` int(11) NOT NULL,
  `date_examined` varchar(30) NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` varchar(30) NOT NULL,
  `result` varchar(2) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gene_expert_examination`
--

INSERT INTO `gene_expert_examination` (`xpert_id`, `date_examined`, `laboratory_number`, `visual_appearance`, `examined_by`, `date_released`, `result`, `patient_id`, `month`, `year`) VALUES
(1, 'September 07, 2019', '1', 'Salivary', 'Jesse Franco Latosa', 'September 19, 2019', 'RR', 3, 'Sep', '2019'),
(2, 'October 25, 2019', '4434343434', 'Salivary', 'Kherrie Tejare', 'October 25, 2019', 'TI', 3, 'Oct', '2019'),
(3, 'December 02, 2019', '453434', 'Muco-Purulent', 'Ellisa Victoria', 'December 02, 2019', 'RR', 4, 'Dec', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `health_center`
--

CREATE TABLE `health_center` (
  `health_center_id` int(10) NOT NULL,
  `health_center` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `type`, `action`, `date`, `time`) VALUES
(1, 57, 'Data Entry', 'Added Celine as new medicine', 'September 9, 2018', '11:49 pm'),
(2, 57, 'Data Entry', 'Created account for Jesse Franco  Latosa', 'October 24, 2018', '3:39 pm'),
(3, 57, 'Data Entry', 'Edited Celine', 'October 24, 2018', '3:43 pm'),
(4, 57, 'Transactions - Add Stocks', 'added 50 kits of Celine to stocks', 'October 24, 2018', '3:43 pm'),
(5, 57, 'Transaction - Registration', 'added patient - Lebron James', 'October 24, 2018', '3:50 pm'),
(6, 57, 'Transaction - Laboratory Reque', 'added laboratory request for - Lebron James', 'October 24, 2018', '3:52 pm'),
(7, 58, 'Data Entry', 'Added result to TB Culture of  Lebron James', 'October 24, 2018', '3:55 pm'),
(8, 57, 'Transaction - Registration', 'Registers - Lebron James', 'October 24, 2018', '4:09 pm'),
(9, 57, 'Transaction - Registration', 'added patient - Jose Belmor', 'October 24, 2018', '4:12 pm'),
(10, 57, 'Transaction - Laboratory Reque', 'added laboratory request for - Jose Belmor', 'October 24, 2018', '4:14 pm'),
(11, 58, 'Data Entry', 'Added result to DSSM of Jose Belmor', 'October 24, 2018', '4:15 pm'),
(12, 57, 'Transaction - Registration', 'Registers - Jose Belmor', 'October 24, 2018', '4:17 pm'),
(13, 57, 'Data Entry', 'Added Cherifer for Kids as new medicine', 'October 24, 2018', '4:20 pm'),
(14, 57, 'Transactions - Add Stocks', 'added 100 kits of Cherifer for Kids to stocks', 'October 24, 2018', '4:20 pm'),
(15, 57, 'Transactions', 'Added new clinical findings for Lebron James', 'October 24, 2018', '4:27 pm'),
(16, 57, 'Transaction - Registration', 'added patient - Jesse Franco Latosa', 'February 23, 2019', '6:20 pm'),
(17, 57, 'Transaction - Laboratory Reque', 'added laboratory request for - Jesse Franco Latosa', 'February 23, 2019', '7:34 pm'),
(18, 58, 'Data Entry', 'Added result to TB Culture of  Jesse Franco Latosa', 'February 23, 2019', '7:46 pm'),
(19, 182, 'Transactions - Medication Disp', 'dispensed 5 Celine kits to Alijis Barangay Health Station', 'September 7, 2019', '6:02 pm'),
(20, 182, 'Transactions - Medication Disp', 'dispensed 15 Celine kits to Alangilan Barangay Health Station', 'September 7, 2019', '6:02 pm'),
(21, 182, 'Transactions - Medication Disp', 'dispensed 20 Celine kits to Alangilan Barangay Health Station', 'September 7, 2019', '6:03 pm'),
(22, 57, 'Transaction - Registration', 'Registers - Jesse Franco Latosa', 'September 19, 2019', '7:45 pm'),
(23, 57, 'Transaction - Laboratory Reque', 'added laboratory request for - Jesse Franco Latosa', 'September 19, 2019', '7:46 pm'),
(24, 58, 'Data Entry', 'Added result to Xpert MTB/RIF of Jesse Franco Latosa', 'September 19, 2019', '7:48 pm'),
(25, 22, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'September 19, 2019', '9:14 pm'),
(26, 26, 'Transactions', 'Added new clinical findings for Lebron James', 'September 21, 2019', '2:11 pm'),
(27, 57, 'Transactions', 'Added new clinical findings for Lebron James', 'September 23, 2019', '11:00 pm'),
(28, 26, 'Data Entry', 'Edited the personal profile of Lebron James', 'September 23, 2019', '11:25 pm'),
(29, 27, 'Transactions - Medication Disp', 'dispensed 4 Cherifer for Kids kits to Alijis Barangay Health Station', 'September 25, 2019', '5:13 pm'),
(30, 57, 'Transaction - Registration', 'added patient - Alvin Yanson', 'September 28, 2019', '12:15 pm'),
(31, 1, 'Transaction - Laboratory Reque', 'added laboratory request for - Alvin Yanson', 'September 29, 2019', '12:30 am'),
(32, 1, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'September 30, 2019', '6:28 pm'),
(33, 1, 'Transactions', 'Added new clinical findings for Jesse Franco Latosa', 'September 30, 2019', '6:29 pm'),
(34, 1, 'Transactions - Medication Disp', 'dispensed 4 Celine kits to Mansilingan Barangay Health Station', 'September 30, 2019', '6:30 pm'),
(35, 1, 'Transaction - Laboratory Reque', 'added laboratory request for - Alvin Yanson', 'September 30, 2019', '6:33 pm'),
(36, 58, 'Data Entry', 'Added result to TB Culture of  Alvin Yanson', 'September 30, 2019', '6:34 pm'),
(37, 58, 'Data Entry', 'Added result to TB Culture of  Alvin Yanson', 'September 30, 2019', '6:35 pm'),
(38, 27, 'Transaction - Registration', 'Registers - Alvin Yanson', 'October 4, 2019', '9:18 am'),
(39, 57, 'Transactions - Add Stocks', 'added 5 kits of Celine to stocks', 'October 7, 2019', '12:07 am'),
(40, 57, 'Transactions - Add Stocks', 'added 10 kits of Cherifer for Kids to stocks', 'October 7, 2019', '12:10 am'),
(41, 57, 'Transactions - Add Stocks', 'added 10 kits of Celine to stocks', 'October 7, 2019', '12:11 am'),
(42, 57, 'Transactions - Medication Disp', 'dispensed 50 Cherifer for Kids kits to Alijis Barangay Health Station', 'October 7, 2019', '12:11 am'),
(43, 1, 'Transactions - Add Stocks', 'added 3 kits of Celine to stocks', 'October 11, 2019', '1:09 am'),
(44, 1, 'Data Entry', 'Added Alerta as new medicine', 'October 11, 2019', '1:26 am'),
(45, 57, 'Data Entry', 'Created account for Kherrie Tejare', 'October 25, 2019', '1:21 pm'),
(46, 57, 'Transaction - Laboratory Reque', 'added laboratory request for - Jesse Franco Latosa', 'October 25, 2019', '1:35 pm'),
(47, 59, 'Data Entry', 'Added result to Xpert MTB/RIF of Jesse Franco Latosa', 'October 25, 2019', '1:38 pm'),
(48, 57, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'October 25, 2019', '10:56 pm'),
(49, 27, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'October 26, 2019', '12:56 am'),
(50, 57, 'Transaction - Laboratory Reque', 'added laboratory request for - Alvin Yanson', 'November 1, 2019', '9:58 pm'),
(51, 57, 'Transactions', 'Added new clinical findings for Jesse Franco Latosa', 'November 7, 2019', '7:32 pm'),
(52, 57, 'Transactions', 'Added new clinical findings for Jesse Franco Latosa', 'November 7, 2019', '7:33 pm'),
(53, 27, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'November 20, 2019', '8:52 pm'),
(54, 57, 'Data Entry', 'Added Ceterizine as new medicine', 'December 2, 2019', '4:42 pm'),
(55, 57, 'Data Entry', 'Added Rifapentine as new medicine', 'December 2, 2019', '4:42 pm'),
(56, 57, 'Data Entry', 'Added Rifampicin + isoniazid + Pyrazinamide + Ethambutol as new medicine', 'December 2, 2019', '4:45 pm'),
(57, 58, 'Data Entry', 'Added result to Xpert MTB/RIF of Alvin Yanson', 'December 2, 2019', '5:07 pm'),
(58, 57, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'December 9, 2019', '3:39 pm'),
(59, 57, 'Transactions - Follow up', 'Added a follow-up date for Jesse Franco Latosa', 'December 9, 2019', '4:13 pm'),
(60, 57, 'Transactions - Follow up', 'Added a follow-up date for Alvin Yanson', 'December 9, 2019', '4:13 pm'),
(61, 57, 'Data Entry', 'Added \'; DROP TABLE fuck; -- as new medicine', 'January 29, 2020', '5:54 pm');

-- --------------------------------------------------------

--
-- Table structure for table `intensive_phase`
--

CREATE TABLE `intensive_phase` (
  `intensive_phase_id` int(10) NOT NULL,
  `dosage` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `date_taken` varchar(20) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intensive_phase`
--

INSERT INTO `intensive_phase` (`intensive_phase_id`, `dosage`, `month`, `date_taken`, `medicine_name`, `year`, `remarks`, `patient_id`) VALUES
(1, '6', 'Sep', 'September 05, 2019', 'Celine', '2019', 'Present', 1),
(2, '-', 'Sep', 'August 25, 2019', '', '2019', 'Absent', 3),
(3, '5', 'Sep', 'September 20, 2019', 'Celine', '2019', 'Present', 3),
(4, '5', 'Sep', 'September 20, 2019', 'Celine', '2019', 'Present', 3),
(5, '-', 'Sep', 'September 11, 2019', '', '2019', 'Absent', 3);

-- --------------------------------------------------------

--
-- Table structure for table `intensive_phase_ipt`
--

CREATE TABLE `intensive_phase_ipt` (
  `intensive_phase_id` int(10) NOT NULL,
  `dosage` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `date_taken` varchar(20) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `year` char(4) NOT NULL,
  `remarks` char(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intensive_phase_ipt`
--

INSERT INTO `intensive_phase_ipt` (`intensive_phase_id`, `dosage`, `month`, `date_taken`, `medicine_name`, `year`, `remarks`, `patient_id`) VALUES
(1, '3', 'Sep', 'September 03, 2019', 'Isoniazid', '2019', 'Present', 2),
(2, '3', 'Sep', 'September 03, 2019', 'Isoniazid', '2019', 'Present', 2);

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_request`
--

CREATE TABLE `laboratory_request` (
  `lab_request_id` int(10) NOT NULL,
  `collection_unit` varchar(50) NOT NULL,
  `date_of_request` varchar(30) NOT NULL,
  `requesting_physician` varchar(30) NOT NULL,
  `reason_for_examination` varchar(30) NOT NULL,
  `specimen_type` varchar(30) NOT NULL,
  `repeat_collection` char(3) NOT NULL,
  `date_sample_collected` varchar(30) NOT NULL,
  `date_sample_collected2` varchar(30) NOT NULL,
  `sample_collector` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `test_requested` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `status` char(10) NOT NULL,
  `date_today` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory_request`
--

INSERT INTO `laboratory_request` (`lab_request_id`, `collection_unit`, `date_of_request`, `requesting_physician`, `reason_for_examination`, `specimen_type`, `repeat_collection`, `date_sample_collected`, `date_sample_collected2`, `sample_collector`, `designation`, `test_requested`, `patient_id`, `status`, `date_today`, `year`) VALUES
(1, 'Abcasa Barangay Health Station', 'October 24, 2018', 'Dr. Jesse Franco Latosa', 'Diagnostic', 'Sputum', 'No', 'October 24, 2018', 'October 24, 2018', 'JFranco Latoza', 'Barangay Health Worker', 'TB Culture', 1, 'Done', 'October 24, 2018', '2018'),
(2, 'Tangub Barangay Health Station', 'October 24, 2018', 'Dr. Jesse Franco Latosa', 'Diagnostic', 'Sputum', 'Yes', 'October 24, 2018', 'October 24, 2018', 'Ang Ngalan ya', 'Barangay Health Worker', 'DSSM', 2, 'Done', 'October 24, 2018', '2018'),
(3, 'Abcasa Barangay Health Station', 'January 31, 2019', 'asdfdf', 'Baseline', 'Sputum', 'Yes', 'February 13, 2019', 'February 20, 2019', 'asdfasdf', 'Barangay Health Worker', 'TB Culture', 3, 'Done', 'February 23, 2019', '2019'),
(4, 'Alangilan Barangay Health Station', 'September 12, 2019', 'Elmer Haro', 'Diagnostic', 'Sputum', 'Yes', 'September 12, 2019', 'September 05, 2019', 'doctor', 'Barangay Health Worker', 'Xpert MTB/RIF', 3, 'Done', 'September 19, 2019', '2019'),
(5, 'Abcasa Barangay Health Station', 'September 11, 2019', 'Kherrie Tejare', 'Follow-up', 'Sputum', 'Yes', 'September 26, 2019', 'September 27, 2019', 'Kate Tejare', 'Midwife', 'TB Culture', 4, 'Done', 'September 30, 2019', '2019'),
(6, 'Mansilingan Barangay Health Station', 'September 10, 2019', 'John Wick', 'Diagnostic', 'Sputum', 'Yes', 'September 24, 2019', 'September 18, 2019', 'Jesse Franco Latoza', 'Barangay Health Worker', 'TB Culture', 4, 'Done', 'September 30, 2019', '2019'),
(7, 'Mansilingan Barangay Health Station', 'October 25, 2019', 'Kherrie Tejare', 'Diagnostic', 'Sputum', 'Yes', 'October 25, 2019', 'October 25, 2019', 'Erika Dalucanog', 'Barangay Health Worker', 'Xpert MTB/RIF', 3, 'Done', 'October 25, 2019', '2019'),
(8, 'Alangilan Barangay Health Station', 'November 01, 2019', 'dfdf', 'Baseline', 'Sputum', 'Yes', 'November 01, 2019', 'November 01, 2019', 'dfdf', 'Barangay Health Worker', 'Xpert MTB/RIF', 4, 'Done', 'December 2, 2019', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `medication_dispensation`
--

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL,
  `health_center` varchar(50) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` varchar(30) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`dispensation_id`, `health_center`, `medicine_name`, `date_given`, `month`, `year`, `quantity`, `received_by`) VALUES
(1, 'Alijis Barangay Health Station', 'Celine', 'September 7, 2019', 'Sep', '2019', 5, 'Jesse Franco Latosa'),
(2, 'Alangilan Barangay Health Station', 'Celine', 'September 7, 2019', 'Sep', '2019', 15, 'dfdf'),
(3, 'Alangilan Barangay Health Station', 'Celine', 'September 7, 2019', 'Sep', '2019', 20, 'dfdf'),
(4, 'Alijis Barangay Health Station', 'Cherifer for Kids', 'September 25, 2019', 'Sep', '2018', 4, 'Jesse Franco Latosa'),
(5, 'Mansilingan Barangay Health Station', 'Celine', 'September 30, 2019', 'Sep', '2019', 4, 'John Tot'),
(6, 'Alijis Barangay Health Station', 'Cherifer for Kids', 'October 6, 2019', 'Oct', '2019', 50, 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `running_balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_type`, `medicine_description`, `running_balance`) VALUES
(1, 'Celine', 'Syrup', 'Vitamins C can make your singaw fast heal', 24),
(2, 'Cherifer for Kids', 'Syrup', 'It makes you grow ', 56),
(3, 'Alerta', 'Tablet', 'Bulong sa katuol giti', 0),
(4, 'Ceterizine', 'Tablet', 'Nice', 0),
(5, 'Rifapentine', 'Tablet', 'Anti TB-Drugs', 0),
(6, 'Rifampicin + isoniazid + Pyrazinamide + Ethambutol', 'Tablet', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stocks`
--

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_stocks`
--

INSERT INTO `medicine_stocks` (`medicine_stock_id`, `medicine_name`, `quantity`, `date`) VALUES
(27, 'Streptomycin', 100, 'February 8, 2018, 9:41 pm'),
(28, 'Pyrazinamide', 100, 'February 8, 2018, 9:48 pm'),
(29, 'Pyrazinamide', 100, 'February 8, 2018, 9:50 pm'),
(30, 'Sample Medicine', 250, 'February 11, 2018, 1:29 am'),
(31, 'Pyrazinamide', 100, 'February 15, 2018, 10:21 pm'),
(32, 'Levofloxacin', 100, 'February 15, 2018, 10:21 pm'),
(33, 'Pyrazinamide', 100, 'February 15, 2018, 10:26 pm'),
(34, 'Levofloxacin', 50, 'February 17, 2018, 1:09 am'),
(35, 'Levofloxacin', 55, 'February 24, 2018, 9:34 pm'),
(36, 'Kanamycin', 100, 'February 28, 2018, 12:17 am'),
(37, 'Biogesic', 50, 'February 28, 2018, 12:17 am'),
(38, 'Test', 20, 'March 3, 2018'),
(39, 'New Medicine', 20, 'March 3, 2018'),
(40, 'Test', 4, 'March 5, 2018'),
(41, 'Streptomycin', 50, 'March 15, 2018'),
(42, 'Kanamycin', 200, 'March 15, 2018'),
(43, 'Isoniazid', 2147483647, 'March 15, 2018'),
(44, 'Streptomycin', 0, 'March 15, 2018'),
(45, 'New Medicine', 90, 'April 12, 2018'),
(46, 'Celine', 50, 'October 24, 2018'),
(47, 'Cherifer for Kids', 100, 'October 24, 2018'),
(48, 'Celine', 5, 'October 7, 2019'),
(49, 'Cherifer for Kids', 10, 'October 7, 2019'),
(50, 'Celine', 10, 'October 7, 2019'),
(51, 'Celine', 3, 'October 11, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `height` int(3) NOT NULL,
  `contact_number` char(14) NOT NULL,
  `province` varchar(50) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `philhealth_no` varchar(15) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `emergency_no` char(20) NOT NULL,
  `status` char(10) NOT NULL,
  `treatment_partner` char(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `address`, `barangay`, `birthdate`, `height`, `contact_number`, `province`, `occupation`, `philhealth_no`, `contact_person`, `emergency_no`, `status`, `treatment_partner`, `year`) VALUES
(1, 'Lebron James', 32, 'Male', 'Cleveland Ohio', 'Bata', '1985-11-02', 208, '0926268210', 'Negros Occidental', 'NBA Player', '828282828282828', 'Coach Luke Walton', '7773839292323', 'Registered', 'Pending', '2018'),
(2, 'Jose Belmor', 13, 'Male', 'Akina Village', 'Tangub', '2005-03-02', 174, '09232323232323', 'Negros Occidental', '', '', 'Jayme Belmor', '09876645454545454', 'Registered', 'Pending', '2018'),
(3, 'Jesse Franco Latosa', 20, 'Male', 'Bacolod City', 'Felisa', '1998-08-30', 45, '09061613101', 'Negros Occidental', 'Barangay Tanod', '3434334343434', '09061613101', '093434343434', 'Registered', 'Pending', '2019'),
(4, 'Alvin Yanson', 22, 'Male', 'Eroreco', 'Mandalagan', '1997-04-09', 175, '09061613101', 'Negros Occidental', 'Maniniyot', '342356453343434', 'Alvin Mananquil', '397348343434', 'Registered', 'Pending', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ipt`
--

CREATE TABLE `patient_ipt` (
  `patient_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `province` varchar(30) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `emergency_no` varchar(20) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `status` char(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_ipt`
--

INSERT INTO `patient_ipt` (`patient_id`, `name`, `age`, `height`, `gender`, `address`, `province`, `contact_person`, `emergency_no`, `birthdate`, `status`, `year`) VALUES
(1, 'Kherrie Tejare', 1, 169, 'Female', 'Concepcion, Iloilo', 'Negros Occidental', 'Jesse Franco Latosa', '09061613101', '2017-12-10', 'Registered', '2019'),
(2, 'Jesse Franco Latosa', 4, 176, 'Male', 'Casay, Anini-y, Antique', 'Negros Occidental', 'JFranco Latoza', '09061613101', '2015-04-22', 'Registered', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `tb_case_no` int(10) NOT NULL,
  `registration_date` varchar(40) NOT NULL,
  `dots_facility` varchar(50) NOT NULL,
  `source_of_patient` varchar(50) NOT NULL,
  `registration_group` varchar(30) NOT NULL,
  `diagnosis` varchar(20) NOT NULL,
  `bacteriological_status` varchar(30) NOT NULL,
  `classification_of_tb` varchar(20) NOT NULL,
  `bcg_scar` char(8) NOT NULL,
  `history` varchar(10) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `treatment_regimen_category` varchar(30) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `year_ended` char(4) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`tb_case_no`, `registration_date`, `dots_facility`, `source_of_patient`, `registration_group`, `diagnosis`, `bacteriological_status`, `classification_of_tb`, `bcg_scar`, `history`, `duration`, `treatment_regimen_category`, `treatment_partner_name`, `designation_treatment_partner`, `status`, `year_ended`, `patient_id`, `month`, `year`) VALUES
(1, 'October 24, 2018', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'Treatment After Failure', 'TB Disease', 'Clinically Diagnosed', 'Pulmonary', 'Yes', 'Yes', 'Less than 1 month', 'Category I - 2HRZE/4HR', 'Delonte West', 'Midwife', 'Died', '2019', 1, 'Oct', '2018'),
(2, 'October 24, 2018', 'Bacolod City Health TB DOTS Center', 'Other Government Facilities', 'Transfer-in', 'TB Disease', 'Clinically Diagnosed', 'Extra-pulmonary', 'Yes', 'Yes', '1 month or more', 'Category IIa - 2HRZES/1HRZE/9H', 'Jayme Belmor', 'Midwife', 'Lost to followup', '2019', 2, 'Oct', '2018'),
(3, 'September 19, 2019', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'New', 'TB Disease', 'Bacteriologically Confirmed', 'Extra-pulmonary', 'Yes', 'Yes', 'Less than 1 month', 'Category Ia - 2HRZE/10HR', 'SAMPLE NAME', 'Nurse', 'Currently in Treatment', '2019', 3, 'Sep', '2019'),
(4, 'October 4, 2019', 'Bacolod City Health TB DOTS Center', 'Public Health Center', 'Relapse', 'TB Disease', 'Clinically Diagnosed', 'Pulmonary', 'Yes', 'No', 'None', 'Category I - 2HRZE/4HR', '3434', 'Midwife', 'Currently in Treatment', '2019', 4, 'Oct', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `registration_ipt`
--

CREATE TABLE `registration_ipt` (
  `ipt_no` int(10) NOT NULL,
  `date_evaluated` varchar(20) NOT NULL,
  `diagnosis` char(20) NOT NULL,
  `date_ipt_started` varchar(30) NOT NULL,
  `source_of_patient` varchar(30) NOT NULL,
  `treatment_partner_name` varchar(30) NOT NULL,
  `designation_treatment_partner` varchar(30) NOT NULL,
  `dots_facility` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `year_ended` int(4) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_ipt`
--

INSERT INTO `registration_ipt` (`ipt_no`, `date_evaluated`, `diagnosis`, `date_ipt_started`, `source_of_patient`, `treatment_partner_name`, `designation_treatment_partner`, `dots_facility`, `status`, `patient_id`, `year_ended`, `year`) VALUES
(1, 'September 23, 2019', 'TB Infection', 'September 23, 2019', 'Public Health Center', 'Trecia Ortega', 'Barangay Health Worker', 'Bacolod City Health TB DOTS Center', 'Currently in Treatment', 1, 0, '2019'),
(2, 'September 30, 2019', 'TB Infection', 'September 30, 2019', 'Public Health Center', 'Sean Darating', 'Barangay Health Worker', 'Bacolod City Health TB DOTS Center', 'Currently in Treatment', 2, 0, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submission_id` int(10) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `date1` varchar(30) NOT NULL,
  `date2` varchar(30) NOT NULL,
  `specimen_collector` varchar(30) NOT NULL,
  `health_center` varchar(50) NOT NULL,
  `date_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_culture_examination`
--

CREATE TABLE `tb_culture_examination` (
  `tb_culture_id` int(11) NOT NULL,
  `method` varchar(30) NOT NULL,
  `tb_culture_laboratory` char(10) NOT NULL,
  `laboratory_no` varchar(30) NOT NULL,
  `date_sample_collected` date NOT NULL,
  `date_sample_received` date NOT NULL,
  `tb_culture_result` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_culture_examination`
--

INSERT INTO `tb_culture_examination` (`tb_culture_id`, `method`, `tb_culture_laboratory`, `laboratory_no`, `date_sample_collected`, `date_sample_received`, `tb_culture_result`, `remarks`, `examined_by`, `reviewed_by`, `date_released`, `patient_id`, `month`, `year`) VALUES
(1, 'Hilut', 'Barangay c', '88767', '0000-00-00', '0000-00-00', 'Resistant', 'game suspension 2 years', 'me', 'me', '0000-00-00', 1, 'Oct', '2018'),
(2, 'SEAFGSGSDF', 'SDFGSDFG', '4543545', '0000-00-00', '0000-00-00', 'Not Done', 'FGFGFG', 'FGFGFG', 'FGFGFG', '0000-00-00', 3, 'Feb', '2019'),
(3, 'THODME', 'LABO1', 'SDFSAFASDFASDFASD', '0000-00-00', '0000-00-00', 'Resistant', 'ITOT KAMI', 'ITOT MO GANI!', 'AFASFD', '0000-00-00', 4, 'Oct', '2019'),
(4, 'THODME', 'DFDFDFD', 'SDFSAFASDFASDFASD', '0000-00-00', '0000-00-00', 'Not Done', 'ITOT KAMI', 'ITOT MO GANI!', 'AFASFD', '0000-00-00', 4, 'Oct', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tst`
--

CREATE TABLE `tst` (
  `tst_id` int(10) NOT NULL,
  `result` varchar(20) NOT NULL,
  `date_read` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(8) NOT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `license`, `position`, `username`, `password`, `status`, `login`) VALUES
(57, 'Tabitha', 'Lopez', '', 'NTP Nurse Coordinator', 'nurse101', 'aTya03gHJdTyqLkWQfg15yU5b18b25be6c088cda0cc33754c98966b151312f6', 'Active', 'February 8, 2020, 12:25 pm'),
(58, 'Jesse Franco ', 'Latosa', '123456789', 'Medical Technologist', 'medtech101', 'aTya03gHJdTyqLkWQfg15yUc6e9dc91aefe1a00974de3b68c57016e50f96a15', 'Active', 'December 2, 2019, 11:39 pm'),
(59, 'Kherrie', 'Tejare', '39393848481', 'Medical Technologist', 'kherrie', 'aTya03gHJdTyqLkWQfg15yU6cbed987e46bd7dc15cb13cbd1d2d5f445e41514', 'Active', 'October 25, 2019, 1:36 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  ADD PRIMARY KEY (`clinical_id`);

--
-- Indexes for table `clinical_findings_ipt`
--
ALTER TABLE `clinical_findings_ipt`
  ADD PRIMARY KEY (`clinical_id`);

--
-- Indexes for table `continuation_phase`
--
ALTER TABLE `continuation_phase`
  ADD PRIMARY KEY (`continuation_phase_id`);

--
-- Indexes for table `cxr`
--
ALTER TABLE `cxr`
  ADD PRIMARY KEY (`cxr_id`);

--
-- Indexes for table `drug_preparations`
--
ALTER TABLE `drug_preparations`
  ADD PRIMARY KEY (`drug_preparation_id`);

--
-- Indexes for table `dssm_examination`
--
ALTER TABLE `dssm_examination`
  ADD PRIMARY KEY (`dssm_id`);

--
-- Indexes for table `dst_examination`
--
ALTER TABLE `dst_examination`
  ADD PRIMARY KEY (`dst_id`);

--
-- Indexes for table `family_member`
--
ALTER TABLE `family_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `follow_up`
--
ALTER TABLE `follow_up`
  ADD PRIMARY KEY (`follow_up_id`);

--
-- Indexes for table `follow_up_ipt`
--
ALTER TABLE `follow_up_ipt`
  ADD PRIMARY KEY (`follow_up_id`);

--
-- Indexes for table `gene_expert_examination`
--
ALTER TABLE `gene_expert_examination`
  ADD PRIMARY KEY (`xpert_id`);

--
-- Indexes for table `health_center`
--
ALTER TABLE `health_center`
  ADD PRIMARY KEY (`health_center_id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `intensive_phase`
--
ALTER TABLE `intensive_phase`
  ADD PRIMARY KEY (`intensive_phase_id`);

--
-- Indexes for table `intensive_phase_ipt`
--
ALTER TABLE `intensive_phase_ipt`
  ADD PRIMARY KEY (`intensive_phase_id`);

--
-- Indexes for table `laboratory_request`
--
ALTER TABLE `laboratory_request`
  ADD PRIMARY KEY (`lab_request_id`);

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
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_ipt`
--
ALTER TABLE `patient_ipt`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`tb_case_no`);

--
-- Indexes for table `registration_ipt`
--
ALTER TABLE `registration_ipt`
  ADD PRIMARY KEY (`ipt_no`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `tb_culture_examination`
--
ALTER TABLE `tb_culture_examination`
  ADD PRIMARY KEY (`tb_culture_id`);

--
-- Indexes for table `tst`
--
ALTER TABLE `tst`
  ADD PRIMARY KEY (`tst_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `backup_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinical_findings`
--
ALTER TABLE `clinical_findings`
  MODIFY `clinical_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clinical_findings_ipt`
--
ALTER TABLE `clinical_findings_ipt`
  MODIFY `clinical_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `continuation_phase`
--
ALTER TABLE `continuation_phase`
  MODIFY `continuation_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cxr`
--
ALTER TABLE `cxr`
  MODIFY `cxr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drug_preparations`
--
ALTER TABLE `drug_preparations`
  MODIFY `drug_preparation_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dssm_examination`
--
ALTER TABLE `dssm_examination`
  MODIFY `dssm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dst_examination`
--
ALTER TABLE `dst_examination`
  MODIFY `dst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_member`
--
ALTER TABLE `family_member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `follow_up`
--
ALTER TABLE `follow_up`
  MODIFY `follow_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `follow_up_ipt`
--
ALTER TABLE `follow_up_ipt`
  MODIFY `follow_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gene_expert_examination`
--
ALTER TABLE `gene_expert_examination`
  MODIFY `xpert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `health_center`
--
ALTER TABLE `health_center`
  MODIFY `health_center_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `intensive_phase`
--
ALTER TABLE `intensive_phase`
  MODIFY `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intensive_phase_ipt`
--
ALTER TABLE `intensive_phase_ipt`
  MODIFY `intensive_phase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laboratory_request`
--
ALTER TABLE `laboratory_request`
  MODIFY `lab_request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  MODIFY `dispensation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  MODIFY `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_ipt`
--
ALTER TABLE `patient_ipt`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `tb_case_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration_ipt`
--
ALTER TABLE `registration_ipt`
  MODIFY `ipt_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submission_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_culture_examination`
--
ALTER TABLE `tb_culture_examination`
  MODIFY `tb_culture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tst`
--
ALTER TABLE `tst`
  MODIFY `tst_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
