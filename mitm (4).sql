-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 03:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitm`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `college_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_type`) VALUES
(1, 'mitm'),
(2, 'naumi');

-- --------------------------------------------------------

--
-- Table structure for table `college_notice`
--

CREATE TABLE `college_notice` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `publish_date` date NOT NULL,
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_notice`
--

INSERT INTO `college_notice` (`id`, `title`, `publish_date`, `status`, `college_type`) VALUES
(3, 'sweedrfg', '2024-05-02', 1, 1),
(4, '1st and extension of Provisional affiliation of B. Sc. in Medical Laboratory Technology with 11, etc. to Hi-Tech Medical College and Hospital, Pandara, BBSR.	', '2024-04-10', 1, 2),
(6, 'MD Pediatrics with 06 seats for 2021-22, etc. to Hi-Tech Medical\r\n                                    College and Hospital, Pandara, BBSR. to Hi-Tech Medical College and Hospital, Pandara,\r\n                                    BBSR.', '0000-00-00', 1, 1),
(9, 'MD Pediatrics with 06 seats for 2021-22, etc. to Hi-Tech Medical\r\n                                    College and Hospital, Pandara, BBSR. to Hi-Tech Medical College and Hospital, Pandara,\r\n                                    BBSR.', '0000-00-00', 1, 2),
(10, 'MBBS Programme with 150 seats to Hi-Tech Medical College and\r\n                                    Hospital, Pandara, BBSR.', '0000-00-00', 1, 2),
(11, 'df', '0000-00-00', 1, 2),
(12, 'ffffffff', '2024-06-13', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_notice`
--

CREATE TABLE `exam_notice` (
  `id` int(11) NOT NULL,
  `noticetitle` longtext NOT NULL,
  `publish_date` date NOT NULL,
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_notice`
--

INSERT INTO `exam_notice` (`id`, `noticetitle`, `publish_date`, `status`, `college_type`) VALUES
(4, 'redtfygh', '2024-04-12', 1, 1),
(5, 'wesrgdthfghjn', '2024-04-08', 1, 1),
(6, 'sax', '0000-00-00', 1, 2),
(7, 'MD Pediatrics with 06 seats for 2021-22, etc. to Hi-Tech Medical College and\r\n                Hospital, Pandara, BBSR. to Hi-Tech Medical College and Hospital, Pandara, BBSR.', '0000-00-00', 1, 2),
(8, 'MBBS Programme with 150 seats to Hi-Tech Medical College and Hospital, Pandara,\r\n                BBSR.', '0000-00-00', 1, 2),
(9, 'wesrgdthfghjn', '2024-06-08', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_campus_placement`
--

CREATE TABLE `mitm_campus_placement` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` longtext NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `company_name` longtext NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_campus_placement`
--

INSERT INTO `mitm_campus_placement` (`id`, `image`, `year`, `branch`, `student_name`, `company_name`, `date_of_upload`, `status`, `college_type`) VALUES
(26, '6617a6d7b641d.png', '2023-24', 'COMPUTER SCIENCE ENGINEERING', 'BARSHARANI DALLAI', 'FLIPKART', '2024-05-20 06:25:34', 1, 1),
(27, '6617a71ce7732.png', '2023-24', 'COMPUTER SCIENCE ENGINEERING', 'KHITISH KUMAR DAS', 'ODISHA POLICE ', '2024-05-20 06:25:29', 1, 1),
(28, '6617a75c97c2e.png', '2023-24', 'COMPUTER SCIENCE ENGINEERING', 'ASHUTOSH DASH', 'BMC  ', '2024-05-20 06:25:25', 1, 1),
(29, '6617a796240ad.png', '2023-24', 'COMPUTER SCIENCE ENGINEERING', 'AYESHAKANTA SATAPATHY', 'JIO ', '2024-05-20 06:25:17', 1, 1),
(30, '6617a7cd1220d.png', '2023-24', 'COMPUTER SCIENCE ENGINEERING', 'MAHESWAR BEHERA', ' HG INFRA ENGINEERING LTD ', '2024-05-20 06:25:12', 1, 1),
(31, '6617a871bb081.png', '2023-24', 'MECHANICAL ENGINEERING', 'TAPAN KUMAR SAHOO', 'SPCPL', '2024-05-20 06:25:06', 1, 1),
(32, '6617a8a06da2b.png', '2023-24', 'MECHANICAL ENGINEERING', 'RASHMIRANJAN BARIK ', 'TOYODA GOSEI SOUTH INDIAN PVT. LTD.', '2024-05-20 06:25:01', 1, 1),
(33, '6617a8ce74f87.png', '2023-24', 'MECHANICAL ENGINEERING', 'ANIL KUMAR NAYAK', 'GOVERNMENT OF ODISHA', '2024-05-20 06:24:50', 1, 1),
(34, '6617a90c93583.png', '2023-24', 'MECHANICAL ENGINEERING', 'BIKASH DEBNATH', 'GODREJ & BOYCE MFG. CO. LTD.', '2024-05-20 06:24:44', 1, 1),
(35, '6617a941a32ed.png', '2023-24', 'MECHANICAL ENGINEERING', 'SUBHAJIT SAHOO', 'GOVERNMENT OF ODISHA', '2024-05-20 06:24:40', 1, 1),
(36, '6617a96ee1f95.png', '2023-24', 'MECHANICAL ENGINEERING', 'NARENDRA NANDI', 'AMNS INDIA LTD ', '2024-05-20 06:24:34', 1, 1),
(37, '6617a99cebe20.png', '2023-24', 'MECHANICAL ENGINEERING', 'PRATAP MAHAKHUDA', 'GOVERNMENT OF ODISHA', '2024-05-20 06:24:26', 1, 1),
(38, '6617a9cce8c80.png', '2023-24', 'MECHANICAL ENGINEERING', 'SUPROVAT SARKAR', 'UMPESL VOLTAS', '2024-05-20 06:24:22', 1, 1),
(39, '6617aa182ed88.png', '2023-24', 'MECHANICAL ENGINEERING', 'SUVENDU KUMAR BARIK', 'TATA STEEL LTD.', '2024-05-20 06:24:17', 1, 1),
(40, '6617aab77df31.png', '2023-24', 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'AJAY MAHARANA', 'SIEMENS LTD.', '2024-05-20 06:24:10', 1, 1),
(41, '6617ab6a32880.png', '2023-24', 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'HEMANTI MAJHI', 'ECONOMIC EXPLOSIVES LT D.', '2024-05-20 06:24:04', 1, 1),
(42, '6617ab9571a38.png', '2023-24', 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'BASANT KUMAR NAYAK', 'GODREJ & BOYCE MFG. CO. LTD.', '2024-05-20 06:23:58', 1, 1),
(43, '6617abc064756.png', '2023-24', 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'PRAKASH NAIK', 'AMNS INDIA', '2024-05-20 06:23:53', 1, 1),
(44, '6617ac26b202f.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'ANIMA NAYAK', 'R.K. SOLUTIONS', '2024-05-20 06:23:46', 1, 1),
(45, '6617ac590b622.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'DANIAL ALAM', 'NEHAL TRADING COMPANY', '2024-05-20 06:23:40', 1, 1),
(46, '6617ac8ba7fb1.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'DEBA PRASAD  BEHERA', 'CTTC', '2024-05-20 06:23:36', 1, 1),
(47, '6617acb8d98de.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'PRITIJINTA  TARAI', 'CTTC', '2024-05-20 06:23:31', 1, 1),
(48, '6617aceacad64.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'PRITISH MAHALIK', 'TATA AGRICO', '2024-05-20 06:23:26', 1, 1),
(49, '6617ad301b0e3.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'MITRABHANU  SAHOO', 'WAZIR SKILLS', '2024-05-20 06:23:22', 1, 1),
(50, '6617ad585fa98.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'PRAMOD KUMAR  BARIK', 'RITES LTD.', '2024-05-20 06:23:18', 1, 1),
(51, '6617ada494d52.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'SMRUTIRANJAN  BISWAL', 'LEGAL TERMINUS PVT. LTD', '2024-05-20 06:23:13', 1, 1),
(52, '6617ade19edf5.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'SWETALINA  PATRA', 'IMS & SUM HOSPITAL', '2024-05-20 06:23:09', 1, 1),
(53, '6617ae1bb5699.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'DEBAPREET  SETHI', 'DCB BANK LTD', '2024-05-20 06:23:03', 1, 1),
(54, '6617ae4f8a99c.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'RANJAN KUMAR  BALABANTARAY', 'NTPC', '2024-05-20 06:22:57', 1, 1),
(55, '6617ae85121c8.png', '2023-24', 'MASTERS IN BUSINESS ADMINISTRATIVE', 'SANJAYA KUMAR  PATRA', 'TATA  STEEL  OPERATION', '2024-05-20 06:22:53', 1, 1),
(56, '6617aefe9534d.png', '2023-24', 'ELECTRICAL ENGINEERING', 'PRAMOD MANDAL', 'ROUNAK PVT. LTD.', '2024-05-20 06:22:48', 1, 1),
(57, '6617af3147775.png', '2023-24', 'ELECTRICAL ENGINEERING', 'PRIYANKA PANIGRAHI', 'ADITYA BIRLA HINDALCO INDUSTRIES LTD. ', '2024-05-20 06:22:42', 1, 1),
(58, '6617af65f39bf.png', '2023-24', 'ELECTRICAL ENGINEERING', 'ISWARI BAG', 'F.B POWER LTD', '2024-05-18 05:25:51', 1, 1),
(59, '6617afb47afd4.png', '2023-24', 'ELECTRICAL ENGINEERING', 'ASHOK KUMAR JENA', 'Sindler INDIA LTD', '2024-05-20 06:22:36', 1, 1),
(60, '6617b085d33f6.png', '2023-24', 'CIVIL ENGINEERING', 'ADITYA RANJAN MISHRA', 'SAI DESIGN AND CONSTRUCTION', '2024-05-20 06:22:30', 1, 1),
(61, '6617b0c7553d0.png', '2023-24', 'CIVIL ENGINEERING', 'PURNANCHANDRA BEHURA ', 'SANKARSAMBHU ENGINEERS PVT. LTD.', '2024-05-20 06:22:26', 1, 1),
(62, '6617b0f11a82d.png', '2023-24', 'CIVIL ENGINEERING', 'SWETAPADMA DASH', 'GOVERNMENT OF ODISHA', '2024-05-20 06:22:22', 1, 1),
(63, '6617b123a0b31.png', '2023-24', 'CIVIL ENGINEERING', 'OMM PRAKASH JENA', 'M/s NEHA CONSTRUCTION', '2024-05-20 06:22:15', 1, 1),
(64, '6617b15c865b2.png', '2023-24', 'CIVIL ENGINEERING', 'KASHINATH MALLIK', 'ARM STRONG INTERNATIONAL PVT. LTD. ', '2024-05-20 06:22:10', 1, 1),
(65, '6617b18ddc592.png', '2023-24', 'CIVIL ENGINEERING', 'BIKRAM KUMAR SETHI', 'SUSANT SETHI ‘B’ CLASS CONTACTOR', '2024-05-20 06:22:04', 1, 1),
(66, '6617b1ba11902.png', '2023-24', 'CIVIL ENGINEERING', 'JOGENDRA KHILAR', 'GOVERNMENT OF ODISHA', '2024-05-20 06:21:57', 1, 1),
(67, '6617b1e869c76.png', '2023-24', 'CIVIL ENGINEERING', 'ANKIT PRASAD', 'TATA POWER CENTRAL ODISHA LTD.', '2024-05-20 06:21:51', 1, 1),
(69, '6617b26377cb4.png', '2023-24', 'CIVIL ENGINEERING', 'AMIYA KUMAR SAHOO', 'SELF- EMPLOYED CONSTRUCTION FIRM', '2024-05-20 06:21:38', 1, 1),
(70, '666030e1c3481.png', '2022-23', 'COMPUTER SCIENCE ENGINEERING', 'SUJATA DAS', 'Next Geospatial Analytics Solutions ', '2024-06-05 09:33:21', 1, 1),
(71, '6617b2d1abcdb.png', '2023-24', 'CIVIL ENGINEERING', 'HIMANSU SEKHAR MALIK', 'Sudarshan swin & Associates ', '2024-05-18 05:24:59', 1, 1),
(72, '6617b2fc7ce53.png', '2023-24', 'CIVIL ENGINEERING', 'SUBRAT SETHY', 'Aspire', '2024-05-18 05:24:38', 1, 1),
(73, '6617b327d7068.png', '2023-24', 'CIVIL ENGINEERING', 'BHARGO NARAYAN  RANA ', 'Govt ITI HIRAKUD SAMBALPUR ', '2024-05-18 05:24:28', 1, 1),
(74, '66602f9cad52e.png', '2022-23', 'COMPUTER SCIENCE ENGINEERING', 'NIKITA PRADHAN', 'HINDALCO- ADITYA BIRLA GROUP', '2024-06-05 09:27:56', 1, 1),
(76, '6617b3d2731b4.png', '2023-24', 'CIVIL ENGINEERING', 'BIJAYA KUMAR NAYAK ', 'UTKAL MANUFACTURING AND SERVICE LTD.', '2024-05-18 05:23:50', 1, 1),
(77, '6617b3fedd2c6.png', '2023-24', 'CIVIL ENGINEERING', 'VOONASAIKRISHNA', 'DALMIA CEMENT ', '2024-05-18 05:22:58', 1, 1),
(78, '66602ee5aa044.png', '2022-23', 'COMPUTER SCIENCE ENGINEERING', 'ADURAM MAJHI ', 'PRBN PVT LTD UNDER OPTCL AND PGCIL  ', '2024-06-05 09:24:53', 1, 1),
(92, '664b1bfa699c2.png', '2022-23', 'Master Of Business Application', 'ANIMA NAYAK ', 'R.K. SOLUTIONS', '2024-05-20 09:46:34', 1, 2),
(93, '664b1c475f8fe.png', '2022-23', 'Master Of Business Application', 'DANIAL ALAM ', 'NEHAL TRADING COMPANY', '2024-05-20 09:47:51', 1, 2),
(94, '664b1c7dc9a7c.png', '2022-23', 'Master Of Computer Application', 'Pramod Mandal', 'NEHAL TRADING COMPANY', '2024-05-20 09:48:45', 1, 2),
(95, '664b1c9f43d52.png', '2023-24', 'Master Of Business Application', 'Pramod Mandal', 'Aditya Birla Hindalco Industries LTD.', '2024-05-20 09:49:19', 1, 2),
(96, '664b1cd48fb8f.png', '2023-24', 'Master Of Computer Application', 'Pramod Mandal', 'Rounak PVT.LTD.', '2024-05-20 09:50:12', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_committees`
--

CREATE TABLE `mitm_committees` (
  `id` int(11) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `committees` mediumtext NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mitm_contact`
--

CREATE TABLE `mitm_contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_subject` mediumtext NOT NULL,
  `contact_message` longtext NOT NULL,
  `dte_tim` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_contact`
--

INSERT INTO `mitm_contact` (`id`, `contact_name`, `contact_email`, `contact_phone`, `contact_subject`, `contact_message`, `dte_tim`, `college_type`) VALUES
(21, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', '', 'ertr5yt6uh', '2024-01-30 17:58:45', 0),
(22, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', '', 'tyuhjn', '2024-01-30 18:04:11', 0),
(23, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', '', 'heloooo', '2024-01-30 18:06:49', 0),
(29, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', '', 'asdfg', '2024-02-08 09:51:48', 0),
(30, 'jkhyjvghbj jnhbmknjjkjnnj', 'manasbariha@gmail.com', '2222222222', '', 'thank you', '2024-02-10 18:11:18', 0),
(31, 'sushree das', 'sarmisthadas065@gmail.com', '3434343434', '', 'hello', '2024-05-14 05:31:14', 0),
(32, 'sushree', 'sarmisthadas065@gmail.com', '7735839981', '', 'sssssssssssshello', '2024-05-14 08:32:40', 0),
(33, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', '', 'hellllooo', '2024-05-14 08:34:02', 0),
(34, 'lipi', 'lipi@gmail.com', '1324354567', '', 'hyyyy', '2024-05-14 08:41:46', 2),
(35, 'sushree sarmistha', 'sarmisthadas065@gmail.com', '1111111111', '', 'hyy mitm', '2024-05-14 08:43:34', 1),
(36, 'sushree', 'sarmisthadas065@gmail.com', '9937469880', 'testing', 'hello', '2024-05-14 10:01:00', 2),
(37, 'smita das', 'smita@gmail.com', '1111111111', '', 'hyy', '2024-05-14 10:02:07', 1),
(38, 'sushree', 'chinu12@gmail.com', '9937469880', 'erftygyhj', 'sdfg', '2024-05-14 11:45:03', 2),
(39, 'sushree sarmistha', 'sarmisthadas065@gmail.com', '3434343434', '', 'dddd', '2024-05-14 11:57:57', 1),
(40, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', '', 'awsedrtfy', '2024-05-16 07:26:39', 1),
(41, 'sushree', 'chinu@gmail.com', '9999999999', 'hyyy', 'hhhh', '2024-05-21 07:47:34', 2),
(42, 'sushree', 'sarmisthadas065@gmail.com', '9937469880', 'assdgfhj', 'sdfgh', '2024-05-21 17:26:09', 2),
(43, 'kkk', 'chinu12@gmail.com', '7735839981', 'vb', 'ghjbn', '2024-05-22 05:12:40', 2),
(44, 'sushree', 'sarmisthadas065@gmail.com', '7735839981', 'hello', 'hello', '2024-05-22 07:33:13', 2),
(45, 'sushree', 'sarmisthadas065@gmail.com', '7735839981', 'drfghb', 'szsdxfcgvhb', '2024-05-22 09:02:12', 2),
(46, 'sushree sarmistha', 'chinu12@gmail.com', '7735839981', ' bn', 'bn', '2024-05-22 09:06:02', 2),
(47, 'smita', 'smita@gmail.com', '9937469880', 'testing', 'helloo', '2024-05-22 09:16:33', 2),
(48, 'John Smith', 'chinu@gmail.com', '8888888888', 'cfcgvhb', 'rkjngregnjkre', '2024-05-22 17:56:39', 2),
(49, 'sushree sarmistha', 'chinu@gmail.com', '8888888888', 'wde', 'wdevf', '2024-05-22 17:58:57', 2),
(50, 'sushree sarmistha', 'h@gmail.com', '8888888888', 'helooo', 'sxdcfvg', '2024-05-22 18:03:49', 2),
(51, 'John Smith', 'chinu@gmail.com', '8888888888', 'helooo', 'efrdg', '2024-05-22 18:09:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_enquiry`
--

CREATE TABLE `mitm_enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_name` varchar(50) NOT NULL,
  `enquiry_email` varchar(50) NOT NULL,
  `enquiry_mobile` varchar(20) NOT NULL,
  `enquiry_address` mediumtext NOT NULL,
  `enquiry_course` varchar(50) NOT NULL,
  `last_exam_appeared` varchar(50) NOT NULL,
  `last_exam_percentage` varchar(10) NOT NULL,
  `entrance_appeared` varchar(50) NOT NULL,
  `dte` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_enquiry`
--

INSERT INTO `mitm_enquiry` (`id`, `enquiry_name`, `enquiry_email`, `enquiry_mobile`, `enquiry_address`, `enquiry_course`, `last_exam_appeared`, `last_exam_percentage`, `entrance_appeared`, `dte`) VALUES
(22, 'linu', 'linu@gmail.com', '1111111111', 'llllll jyfgh hgg', 'B.Tech(MECH)', 'wedr', '22%', 'qwa', '2024-04-10 11:27:45'),
(23, 'sagarika', 'saa@gmail.com', '9996666666', 'defrgtb', 'B.Tech(EEE)', 'werf', '33', 'defg', '2024-04-10 11:33:58'),
(24, 'wer', 'sarmidas065@gmail.com', '1233345678', 'qwerf', 'B.Tech(MECH)', 'sdf', '22', 'asdfg', '2024-04-10 11:37:52'),
(25, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'wed', 'B.Tech(CSE)', 'tygrf', '32', 'cxd', '2024-05-16 12:12:15'),
(26, 'sagarika', 'sagarika@gmail.com', '9999999999', 'r4tgf', 'B.Tech(ECE)', 'erfg', '55', 'wer', '2024-05-16 12:14:13'),
(27, 'sssss', 'ss@gmail.com', '1233345678', 'qwsed', 'B.Tech(CIVIL)', 'sdf', '77', 'xsdcf', '2024-05-16 12:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `mitm_faculty`
--

CREATE TABLE `mitm_faculty` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `designation` mediumtext NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_faculty`
--

INSERT INTO `mitm_faculty` (`id`, `image`, `faculty_name`, `designation`, `phone_number`, `email_id`, `status`, `college_type`) VALUES
(21, '664ae5b899bff.jpg', 'Mr. Binayak Sahoo', 'Associate Professor', '', '', 1, 2),
(22, '664ae5ed74b2d.jpg', 'Mr. Suryapratap Biswajit Puhan', 'HOD OF CIVIL ENGINEERING', '', '', 1, 2),
(23, '664af8eb67829.jpg', 'sushree', 'iujh', '', '', 1, 2),
(27, '6683dd0f62a64.jpg', 'Mr. Binayak Sahoo', 'HOD OF COMPUTER SCIENCE & ENGINEERING', '1212121212', 'binayak12@gmail.com', 1, 1),
(28, '6683dd93b2bd7.jpg', 'Mr. Suryapratap Biswajit Puhan', 'HOD OF CIVIL ENGINEERING', '1233244323', 'suryapratap11@gmail.com', 1, 1),
(29, '6683dde276b61.jpg', 'Mrs. Shradhanjali Panda', 'HOD OF ELECTRONICS AND COMMUNICATION ENGINEERING', '2342332453', 'shradha@gmail.com', 1, 1),
(30, '6683de41b3c62.jpg', 'Mr. Debasish Hota', 'HOD OF ELECTRICAL AND ELECTRONICS ENGINEERING', '1111111111', 'debasish11@gmail.com', 1, 1),
(31, '6683de864d006.jpg', 'Mr. Girija Sankar Panigrahi', 'HOD OF ELECTRICAL ENGINEERING', '2323232323', 'girija@11gmail.com', 1, 1),
(32, '6683df3b9e0de.jpg', 'Mr. Naresh Kumar Ojha', 'HOD OF MBA', '3232323232', 'naresh@12gmail.com', 1, 1),
(33, '6683df8862c30.jpg', 'Mr. Ajit Kumar Dhal', 'HOD OF MECHANICAL ENGINEERING', '4545454545', 'ajit34@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_feedback`
--

CREATE TABLE `mitm_feedback` (
  `id` int(11) NOT NULL,
  `feedback_role` varchar(50) NOT NULL,
  `feedback_name` varchar(50) NOT NULL,
  `feedback_number` varchar(10) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `feedback` longtext NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_feedback`
--

INSERT INTO `mitm_feedback` (`id`, `feedback_role`, `feedback_name`, `feedback_number`, `feedback_email`, `feedback`, `date_of_upload`) VALUES
(2, 'Staff', 'sarmistha', '1111111111', 'sushri@gmail.com', 'nbfgvdcsx', '2024-04-10 04:15:11'),
(3, 'Parent', 'sushree sarmistha das', '8989544367', 'sarmistha@gmail.com', 'ftyuhhuhytfdc fdrtyguhj', '2024-04-10 04:15:11'),
(4, 'Alumni', 'allu', '9997869871', 'all@gmail.com', 'dxcfvgbhn', '2024-04-10 04:23:24'),
(5, 'Student', 'sushree', '8989544367', 'sushree@gmail.com', 'awert5y6ukjinbhgv', '2024-04-10 04:31:12'),
(6, 'Parent', 'sushree sarmistha', '7735839981', 'sushree12@gmail.com', 'ertfygh', '2024-06-05 10:27:46'),
(7, 'Alumni', 'subhalaxmi', '9098834127', 'subhalaxmi@gmail.com', 'hello', '2024-06-05 10:55:41'),
(8, 'Employer', 'smita', '4456654376', 'smita12@gmail.com', 'hello smita', '2024-06-05 11:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `mitm_grievance`
--

CREATE TABLE `mitm_grievance` (
  `id` int(11) NOT NULL,
  `grievance_name` varchar(50) NOT NULL,
  `grievance_registration` varchar(10) NOT NULL,
  `grievance_branch` mediumtext NOT NULL,
  `grievance_year` int(20) NOT NULL,
  `grievance_gender` varchar(20) NOT NULL,
  `grievance_phone` varchar(10) NOT NULL,
  `grievance_email` varchar(50) NOT NULL,
  `grievance` longtext NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_grievance`
--

INSERT INTO `mitm_grievance` (`id`, `grievance_name`, `grievance_registration`, `grievance_branch`, `grievance_year`, `grievance_gender`, `grievance_phone`, `grievance_email`, `grievance`, `date_of_upload`) VALUES
(2, 'sushree ', '234324', 'mca', 2024, 'female', '3455467854', 'sushree@gmail.com', 'dtrfyghb', '2024-04-10 09:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `mitm_life_image`
--

CREATE TABLE `mitm_life_image` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_life_image`
--

INSERT INTO `mitm_life_image` (`id`, `image`, `date_of_upload`, `status`, `college_type`) VALUES
(14, '664b2831b9a72.jpg', '2024-05-20 10:38:41', 1, 0),
(15, '664b29cbdd42e.JPG', '2024-05-20 10:45:31', 1, 0),
(18, '664b3bb6deb4b.JPG', '2024-05-20 12:01:58', 1, 2),
(19, '664b3ef8f0d87.jpg', '2024-05-20 12:15:52', 1, 2),
(20, '664b3f3d4ed62.JPG', '2024-05-20 12:17:01', 1, 2),
(29, '666001d79bfd6.JPG', '2024-06-05 06:12:39', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_life_video`
--

CREATE TABLE `mitm_life_video` (
  `id` int(11) NOT NULL,
  `video` longtext NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_life_video`
--

INSERT INTO `mitm_life_video` (`id`, `video`, `date_of_upload`, `status`, `college_type`) VALUES
(1, 'bno03RUhMIY', '2024-02-02 06:44:46', 1, 0),
(2, 'FKVf1E78Wb8', '2024-02-08 04:53:03', 1, 0),
(3, 'favi7avxIag', '2024-02-05 06:56:39', 1, 0),
(5, 'bno03RUhMIY', '2024-02-08 04:56:17', 1, 0),
(6, 'FKVf1E78Wb8', '2024-02-09 07:30:48', 1, 0),
(7, 'favi7avxIag', '2024-05-20 11:40:44', 1, 1),
(8, 'MU3WSdJW8rI', '2024-05-20 11:40:38', 1, 1),
(9, 'bno03RUhMIY', '2024-05-20 12:30:26', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_news`
--

CREATE TABLE `mitm_news` (
  `id` int(11) NOT NULL,
  `link` longtext NOT NULL,
  `date_of_upload` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_news`
--

INSERT INTO `mitm_news` (`id`, `link`, `date_of_upload`, `status`) VALUES
(6, 'ros time stamps of multi hosts', '2024-01-15', 1),
(7, 'ros time stamps of multi hosts', '2023-12-02', 0),
(9, 'ros time stamps', '2024-02-17', 1),
(10, 'ros time stamp', '2024-02-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_notice`
--

CREATE TABLE `mitm_notice` (
  `id` int(11) NOT NULL,
  `notice` longtext NOT NULL,
  `date_of_upload` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_notice`
--

INSERT INTO `mitm_notice` (`id`, `notice`, `date_of_upload`, `status`) VALUES
(7, 'Breaking news', '2024-02-22', 1),
(8, 'Another important news item', '2024-02-09', 1),
(13, 'Another important news item', '2024-02-15', 1),
(14, 'exam notice', '2024-05-08', 1),
(17, 'Breaking news', '2024-06-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_placement`
--

CREATE TABLE `mitm_placement` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL,
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_placement`
--

INSERT INTO `mitm_placement` (`id`, `image`, `date_of_upload`, `status`, `college_type`) VALUES
(2, '65c5ac0638a55.png', '2024-02-09 05:21:49', 0, 0),
(3, '65c5b63633713.png', '2024-02-09 05:20:54', 1, 0),
(4, '65c5d63f57837.jpeg', '2024-02-09 07:37:35', 1, 0),
(5, '65c5ffafcc434.jpeg', '2024-02-09 10:34:23', 1, 0),
(9, '6648562dde202.png', '2024-05-18 07:18:05', 1, 2),
(10, '6648584a7348b.png', '2024-05-18 07:27:06', 1, 2),
(11, '6648599600747.jpeg', '2024-05-18 07:32:38', 1, 2),
(12, '664859d8d40a3.png', '2024-05-18 07:33:44', 1, 2),
(13, '66485a8a693b8.png', '2024-05-18 07:36:42', 1, 2),
(14, '66485ad05220a.png', '2024-05-18 07:37:52', 1, 2),
(15, '66485b23586bb.jpeg', '2024-05-18 07:39:15', 1, 2),
(17, '664a20e6c16e8.jpeg', '2024-05-19 15:55:18', 1, 2),
(18, '664af87b60301.jpeg', '2024-05-20 07:15:07', 1, 2),
(19, '664af8a23027b.png', '2024-05-20 07:15:46', 1, 2),
(21, '664e388b6e213.jpeg', '2024-05-22 18:25:15', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_user`
--

CREATE TABLE `mitm_user` (
  `id` int(11) NOT NULL,
  `mitm_user_username` varchar(50) NOT NULL,
  `mitm_user_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `college_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_user`
--

INSERT INTO `mitm_user` (`id`, `mitm_user_username`, `mitm_user_password`, `college_type`) VALUES
(1, 'mitm.edu.in', 'admin', 1),
(2, 'nbsbhubaneswar.com', 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `naumi_contact`
--

CREATE TABLE `naumi_contact` (
  `id` int(11) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_email` varchar(50) NOT NULL,
  `cont_number` varchar(10) NOT NULL,
  `cont_subject` mediumtext NOT NULL,
  `cont_message` longtext NOT NULL,
  `dte_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `college_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `naumi_contact`
--

INSERT INTO `naumi_contact` (`id`, `cont_name`, `cont_email`, `cont_number`, `cont_subject`, `cont_message`, `dte_of_upload`, `college_type`) VALUES
(2, 'sushree', 'chinu12@gmail.com', '7539809401', 'edfrgth', 'zxcv', '2024-05-14 05:04:31', 0),
(3, 'sushree', 'sarmisthadas065@gmail.com', '7735839981', 'sadswefdr', 'ssssssssss', '2024-05-14 05:25:44', 2),
(4, 'sushree', 'sarmisthadas065@gmail.com', '8260501319', 'edfrgth', 'dxcfgv', '2024-05-14 07:03:25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_notice`
--
ALTER TABLE `college_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_notice`
--
ALTER TABLE `exam_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_campus_placement`
--
ALTER TABLE `mitm_campus_placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_contact`
--
ALTER TABLE `mitm_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_enquiry`
--
ALTER TABLE `mitm_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_faculty`
--
ALTER TABLE `mitm_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_feedback`
--
ALTER TABLE `mitm_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_grievance`
--
ALTER TABLE `mitm_grievance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_life_image`
--
ALTER TABLE `mitm_life_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_life_video`
--
ALTER TABLE `mitm_life_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_news`
--
ALTER TABLE `mitm_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_notice`
--
ALTER TABLE `mitm_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_placement`
--
ALTER TABLE `mitm_placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitm_user`
--
ALTER TABLE `mitm_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naumi_contact`
--
ALTER TABLE `naumi_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college_notice`
--
ALTER TABLE `college_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `exam_notice`
--
ALTER TABLE `exam_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mitm_campus_placement`
--
ALTER TABLE `mitm_campus_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `mitm_contact`
--
ALTER TABLE `mitm_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `mitm_enquiry`
--
ALTER TABLE `mitm_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mitm_faculty`
--
ALTER TABLE `mitm_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `mitm_feedback`
--
ALTER TABLE `mitm_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mitm_grievance`
--
ALTER TABLE `mitm_grievance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mitm_life_image`
--
ALTER TABLE `mitm_life_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mitm_life_video`
--
ALTER TABLE `mitm_life_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mitm_news`
--
ALTER TABLE `mitm_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mitm_notice`
--
ALTER TABLE `mitm_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mitm_placement`
--
ALTER TABLE `mitm_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mitm_user`
--
ALTER TABLE `mitm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `naumi_contact`
--
ALTER TABLE `naumi_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
