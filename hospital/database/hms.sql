-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 09, 2022 at 08:52 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(2, 'Admin', 'Admin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `announcement` varchar(50) NOT NULL,
  `bloodneed` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dat` date NOT NULL,
  `organizer` varchar(50) CHARACTER SET latin1 NOT NULL,
  `requirements` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announcement`, `bloodneed`, `dat`, `organizer`, `requirements`) VALUES
(1, 'test', 'A+', '2022-09-11', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(26, 'Eye specialist', 16, 15, 5000, '2022-07-26', '12:15 AM', '2022-07-28 18:48:12', 1, 0, '2022-07-30 10:34:44'),
(27, 'Eye specialist', 16, 15, 50000, '2022-08-27', '10:45 PM', '2022-08-01 17:14:43', 0, 1, '2022-08-01 17:15:09'),
(28, 'Eye specialist', 16, 17, 50000, '2022-10-27', '2:45 AM', '2022-10-15 09:08:58', 1, 1, NULL),
(29, 'Eye specialist', 17, 2, 5000, '2022-10-27', '3:00 AM', '2022-10-15 09:22:20', 1, 1, NULL),
(30, 'Eye specialist', 17, 17, 5000, '2022-10-28', '3:00 PM', '2022-10-15 09:23:41', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaigndb`
--

CREATE TABLE `campaigndb` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `phn` int(10) NOT NULL,
  `cdate` date NOT NULL,
  `descp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaigndb`
--

INSERT INTO `campaigndb` (`id`, `cname`, `oname`, `phn`, `cdate`, `descp`) VALUES
(4, 'test', 'test', 714567894, '2022-09-07', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(16, 'Eye specialist', 'test', 'test', '50000', 71345678, 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-28 18:46:05', '2022-08-01 17:07:00'),
(17, 'Eye specialist', 'kavi', 'mount Lavinia', '5000', 715678906, 'kavi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2022-10-15 09:21:09', NULL),
(18, 'Eye specialist', 'kavindra', 'mount levinia', '5000', 715678987, 'kavindra@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2022-10-24 17:39:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(141, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:22:54', NULL, 1),
(142, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:23:35', NULL, 1),
(143, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:33:49', NULL, 1),
(144, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:35:10', NULL, 1),
(145, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:37:16', NULL, 1),
(146, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:40:13', NULL, 1),
(147, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:50:08', '30-07-2022 04:37:33 PM', 1),
(148, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-31 08:09:36', '31-07-2022 01:39:42 PM', 1),
(149, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:05:41', NULL, 0),
(150, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:06:13', NULL, 1),
(151, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:10:15', NULL, 1),
(152, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:12:14', '01-08-2022 10:43:24 PM', 1),
(153, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-02 14:13:25', NULL, 1),
(154, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-02 14:21:57', NULL, 1),
(155, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-02 18:25:37', '03-08-2022 12:18:41 AM', 1),
(156, NULL, 'Admin', 0x3a3a3100000000000000000000000000, '2022-08-26 19:41:12', NULL, 0),
(157, NULL, 'Admin', 0x3a3a3100000000000000000000000000, '2022-08-26 19:41:20', NULL, 0),
(158, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 18:47:36', '31-08-2022 12:17:49 AM', 1),
(159, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 18:50:46', NULL, 0),
(160, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 18:50:57', NULL, 0),
(161, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 18:51:10', NULL, 0),
(162, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 18:51:18', NULL, 0),
(163, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 18:51:28', NULL, 0),
(164, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:54:47', NULL, 0),
(165, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:54:52', '15-10-2022 02:24:59 PM', 1),
(166, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:56:31', NULL, 0),
(167, 16, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:57:26', '15-10-2022 02:36:04 PM', 1),
(168, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 09:18:04', NULL, 0),
(169, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 09:18:11', NULL, 0),
(170, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 09:18:19', NULL, 0),
(171, 17, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 09:22:36', '15-10-2022 10:17:34 PM', 1),
(172, 17, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:55:37', NULL, 1),
(173, 17, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-24 16:52:09', '24-10-2022 10:48:13 PM', 1),
(174, 17, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-24 17:18:24', NULL, 1),
(175, 17, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-11-04 17:06:19', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(19, 'Eye specialist', '2022-04-02 06:52:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES
(1, 'test', 'test', 'M', '2022-09-03', 43, 'B+', 'test@gmail.com', 'test', '0715678976', 'test', '12345'),
(2, 'test', 'test', 'M', '2022-09-03', 43, 'A+', 'test@gmail.com', 'test', '0715678976', 'test', '12345'),
(3, 'test', 'test', 'M', '2022-09-02', 43, 'A+', 'test@gmail.com', 'test', '071234567', 'test@gmail.com', '123456'),
(4, 'kavindra', 'kavi', 'M', '2022-10-09', 34, 'B+', 'kavindra@gmail.com', 'mount leviniya', '0711478987', 'kavindra@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `kidney`
--

CREATE TABLE `kidney` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `collection` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kidney`
--

INSERT INTO `kidney` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `contact`, `collection`) VALUES
(1, 'test', 'M', '2022-09-08', 43, 'B+', 'test', '772829292', '2022-09-11'),
(2, 'kavindra', 'M', '2022-11-22', 43, 'A+', 'mount leviniya', '0715678907', '2022-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `kidneyadmin`
--

CREATE TABLE `kidneyadmin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kidneyadmin`
--

INSERT INTO `kidneyadmin` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kidneyusers`
--

CREATE TABLE `kidneyusers` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `donorname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(4, 'okitha', 'odevkalana@gmail.com', 711587157, 'Is there specialist in this hospital', '2022-03-12 14:37:34', 'yes', '2022-04-12 11:37:34', 1),
(5, 'okitha', 'odevkalana@gmail.com', 711587157, 'jfjf', '2022-03-13 08:57:02', NULL, NULL, NULL),
(6, 'milani', 'mdulyanthi@gmail.com', 717886493, ' kjsjsk', '2022-03-13 09:47:43', NULL, NULL, NULL),
(7, 'sakya', 'sakya@gmail.com', 789809876, ' Hi', '2022-03-29 03:18:02', NULL, NULL, NULL),
(8, 'okitha', 'odevkalana@gmail.com', 711587157, ' Is there specialist in the hospital?', '2022-04-19 06:09:18', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(9, 6, '22', '22', '62', '22', 'Advil', '2022-04-08 15:35:15'),
(10, 6, '78', '67', '89', '98', 'Panadol', '2022-04-14 15:33:41'),
(11, 6, '44', '44', '33', '33', 'Tylenol\r\n', '2022-02-16 14:23:45'),
(12, 6, '56', '44', '44', '44', 'Diclofenac', '2022-04-18 15:37:46'),
(16, 6, '34', '45', '23', '45', 'panadol', '2022-04-19 06:18:34'),
(17, 2, '18', '16', '43', '23', 'test', '2022-07-30 10:38:39'),
(18, 2, '18', '16', '43', '23', '--', '2022-08-01 17:10:31'),
(19, 3, '18', '13', '67', '34', 'panadol', '2022-10-15 09:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(1, 16, 'kavindra', 714567896, 'kavindra@gmail.com', 'male', 'mount Lavinia', 21, '--', '2022-07-30 10:36:04', NULL),
(2, 16, 'testp', 714567896, 'testp@gmail.com', 'male', 'test', 18, '--', '2022-07-30 10:38:14', NULL),
(3, 17, 'test', 714567896, 'testp1@gmail.com', 'Male', 'test', 21, '--', '2022-10-15 09:24:49', '2022-10-15 09:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marks`
--

CREATE TABLE `tbl_marks` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_marks`
--

INSERT INTO `tbl_marks` (`student_id`, `student_name`, `marks`) VALUES
(1, 'okitha ', 98),
(2, 'chamila', 99),
(3, 'akila', 88),
(4, 'piumi', 89),
(5, 'sanuja', 54);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(174, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 08:12:43', NULL, 1),
(175, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 09:51:14', NULL, 1),
(176, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:22:31', NULL, 1),
(177, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:33:33', NULL, 1),
(178, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:34:57', NULL, 1),
(179, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:36:57', NULL, 1),
(180, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:38:55', NULL, 1),
(181, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 10:41:52', NULL, 1),
(182, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 11:14:56', NULL, 0),
(183, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-30 11:14:59', NULL, 1),
(184, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:09:38', NULL, 1),
(185, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:10:40', NULL, 1),
(186, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:13:34', NULL, 1),
(187, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-01 17:15:57', '01-08-2022 10:46:19 PM', 1),
(188, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-02 14:16:39', NULL, 1),
(189, 15, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-02 14:24:59', NULL, 1),
(190, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 19:03:13', NULL, 0),
(191, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 19:03:23', NULL, 0),
(192, NULL, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-30 19:03:29', NULL, 0),
(193, NULL, 'kavindra@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:44:07', NULL, 0),
(194, NULL, 'kavindra@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:45:56', NULL, 0),
(195, NULL, '', 0x3a3a3100000000000000000000000000, '2022-10-15 08:45:58', NULL, 0),
(196, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:47:11', NULL, 0),
(197, NULL, 'testp@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:47:20', NULL, 0),
(198, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 08:48:14', '15-10-2022 02:24:00 PM', 1),
(199, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 09:06:30', NULL, 1),
(200, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:47:02', NULL, 0),
(201, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:47:10', NULL, 0),
(202, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:47:17', NULL, 0),
(203, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:47:24', NULL, 0),
(204, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:47:40', NULL, 0),
(205, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:47:47', NULL, 0),
(206, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:48:07', NULL, 0),
(207, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:48:42', NULL, 1),
(208, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-15 16:55:18', NULL, 1),
(209, NULL, 'kavi@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-24 16:41:19', NULL, 0),
(210, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-24 16:41:23', '24-10-2022 10:22:02 PM', 1),
(211, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-24 17:15:40', NULL, 1),
(212, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-10-24 17:18:42', NULL, 1),
(213, NULL, 'Admin', 0x3a3a3100000000000000000000000000, '2022-11-04 17:05:32', NULL, 0),
(214, 17, 'testp1@gmail.com', 0x3a3a3100000000000000000000000000, '2022-11-04 17:06:27', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(13, 'nuwan', 'ganw', 'kottawa', 'male', 'nuwan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-07-26 14:54:43', NULL),
(15, 'testp', 'testp', 'testp', 'male', 'testp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-28 18:47:51', NULL),
(16, 'kavindra', 'mount leviniya', 'mount leviniya', 'male', 'kavindra@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-10-15 07:27:44', NULL),
(17, 'test', 'test', 'testp', 'male', 'testp1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-15 08:47:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigndb`
--
ALTER TABLE `campaigndb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidney`
--
ALTER TABLE `kidney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidneyadmin`
--
ALTER TABLE `kidneyadmin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `kidneyusers`
--
ALTER TABLE `kidneyusers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `campaigndb`
--
ALTER TABLE `campaigndb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kidney`
--
ALTER TABLE `kidney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kidneyadmin`
--
ALTER TABLE `kidneyadmin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kidneyusers`
--
ALTER TABLE `kidneyusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
