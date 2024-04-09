-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 06:26 AM
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
-- Table structure for table `mitm_campus_placement`
--

CREATE TABLE `mitm_campus_placement` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `branch` longtext NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `company_name` longtext NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_campus_placement`
--

INSERT INTO `mitm_campus_placement` (`id`, `image`, `year`, `branch`, `student_name`, `company_name`, `date_of_upload`, `status`) VALUES
(9, '6613db6fc2097.jpg', 2022, 'COMPUTER SCIENCE ENGINEERING', 'sarmistha das', 'techgeering', '2024-04-08 11:56:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_contact`
--

CREATE TABLE `mitm_contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_message` longtext NOT NULL,
  `dte_tim` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_contact`
--

INSERT INTO `mitm_contact` (`id`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`, `dte_tim`) VALUES
(21, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', 'ertr5yt6uh', '2024-01-30 17:58:45'),
(22, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', 'tyuhjn', '2024-01-30 18:04:11'),
(23, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', 'heloooo', '2024-01-30 18:06:49'),
(29, 'sushree das', 'sarmisthadas065@gmail.com', '1111111111', 'asdfg', '2024-02-08 09:51:48'),
(30, 'jkhyjvghbj jnhbmknjjkjnnj', 'manasbariha@gmail.com', '2222222222', 'thank you', '2024-02-10 18:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `mitm_enquiry`
--

CREATE TABLE `mitm_enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_name` varchar(50) NOT NULL,
  `enquiry_email` varchar(50) NOT NULL,
  `enquiry_mobile` varchar(20) NOT NULL,
  `enquiry_course` varchar(50) NOT NULL,
  `enquiry_message` longtext NOT NULL,
  `dte` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_enquiry`
--

INSERT INTO `mitm_enquiry` (`id`, `enquiry_name`, `enquiry_email`, `enquiry_mobile`, `enquiry_course`, `enquiry_message`, `dte`) VALUES
(1, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', '5', 'dfgvhbjn', '2024-02-01 08:50:06'),
(3, 'sarmistha', 'sarmisthadas065@gmail.com', '1233345678', '5', 'edrftgyh', '2024-02-01 08:50:06'),
(4, 'sushree sarmistha', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(MECH)', 'hello', '2024-02-01 08:50:06'),
(5, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(CSE)', 'hrr', '2024-02-01 08:59:03'),
(6, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(CSE)', 'hrr', '2024-02-01 08:59:08'),
(7, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(CSE)', 'hrr', '2024-02-01 08:59:09'),
(8, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(CSE)', 'grg', '2024-02-01 09:00:11'),
(9, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(CSE)', 'wdfgb', '2024-02-01 09:01:31'),
(12, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(MECH)', 'fghbnj', '2024-02-10 18:27:45'),
(13, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(MECH)', 'aswderty', '2024-02-11 14:58:17'),
(14, 'sushree', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(MECH)', 'hyyyyy', '2024-02-11 15:11:35'),
(15, '34546tygh', 'sarmisthadas065@gmail.com', '1233345678', 'B.Tech(EEE)', 'edtrfyguihjok', '2024-02-12 01:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `mitm_faculty`
--

CREATE TABLE `mitm_faculty` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `designation` mediumtext NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_faculty`
--

INSERT INTO `mitm_faculty` (`id`, `image`, `faculty_name`, `designation`, `status`) VALUES
(7, '6613cad454834.jpg', 'Mr. Binayak Sahoo', 'HOD OF COMPUTER SCIENCE & ENGINEERING', 1),
(8, '6613caf60fdae.jpg', 'Mr. Suryapratap Biswajit Puhan', 'HOD OF CIVIL ENGINEERING', 1),
(9, '6613cb25d77d7.jpg', 'Mrs. Shradhanjali Panda', 'HOD OF ELECTRONICS AND COMMUNICATION ENGINEERING', 1),
(10, '6613deb8282f7.jpg', 'Mr. Debasish Hota', 'HOD OF ELECTRICAL AND ELECTRONICS ENGINEERING', 1),
(11, '6613cb78c8f8d.jpg', 'Mr. Girija Sankar Panigrahi', 'HOD OF ELECTRICAL ENGINEERING', 1),
(12, '6613ddf67fb27.jpg', 'Mr. Naresh Kumar Ojha', 'HOD OF MBA', 1),
(13, '6613d99f4f5d6.jpg', 'Mr. Ajit Kumar Dhal', 'HOD OF MECHANICAL ENGINEERING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_life_image`
--

CREATE TABLE `mitm_life_image` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_life_image`
--

INSERT INTO `mitm_life_image` (`id`, `image`, `date_of_upload`, `status`) VALUES
(1, '65bc7c605570e.jpg', '2024-02-08 04:07:48', 0),
(2, '65bc7cc4c8f8f.jpg', '2024-02-08 04:07:51', 0),
(8, '65c0aa79b7ac9.jpg', '2024-02-05 09:29:29', 1),
(9, '65c45387b0c09.jpg', '2024-02-08 04:07:35', 1),
(10, '65c4585f8ad55.jpg', '2024-02-08 04:28:15', 1),
(11, '65c5d36bea6b0.jpg', '2024-02-09 07:25:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_life_video`
--

CREATE TABLE `mitm_life_video` (
  `id` int(11) NOT NULL,
  `video` longtext NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_life_video`
--

INSERT INTO `mitm_life_video` (`id`, `video`, `date_of_upload`, `status`) VALUES
(1, 'bno03RUhMIY', '2024-02-02 06:44:46', 1),
(2, 'FKVf1E78Wb8', '2024-02-08 04:53:03', 1),
(3, 'favi7avxIag', '2024-02-05 06:56:39', 1),
(5, 'bno03RUhMIY', '2024-02-08 04:56:17', 1),
(6, 'FKVf1E78Wb8', '2024-02-09 07:30:48', 1),
(7, 'favi7avxIag', '2024-02-09 10:39:31', 1),
(8, 'MU3WSdJW8rI', '2024-02-09 10:40:21', 1);

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
(13, 'Another important news item', '2024-02-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_placement`
--

CREATE TABLE `mitm_placement` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_placement`
--

INSERT INTO `mitm_placement` (`id`, `image`, `date_of_upload`, `status`) VALUES
(2, '65c5ac0638a55.png', '2024-02-09 05:21:49', 0),
(3, '65c5b63633713.png', '2024-02-09 05:20:54', 1),
(4, '65c5d63f57837.jpeg', '2024-02-09 07:37:35', 1),
(5, '65c5ffafcc434.jpeg', '2024-02-09 10:34:23', 1),
(6, '6613d75128f28.png', '2024-04-08 11:38:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitm_user`
--

CREATE TABLE `mitm_user` (
  `id` int(11) NOT NULL,
  `mitm_user_username` varchar(50) NOT NULL,
  `mitm_user_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitm_user`
--

INSERT INTO `mitm_user` (`id`, `mitm_user_username`, `mitm_user_password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mitm_campus_placement`
--
ALTER TABLE `mitm_campus_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mitm_contact`
--
ALTER TABLE `mitm_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mitm_enquiry`
--
ALTER TABLE `mitm_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mitm_faculty`
--
ALTER TABLE `mitm_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mitm_life_image`
--
ALTER TABLE `mitm_life_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mitm_life_video`
--
ALTER TABLE `mitm_life_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mitm_news`
--
ALTER TABLE `mitm_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mitm_notice`
--
ALTER TABLE `mitm_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mitm_placement`
--
ALTER TABLE `mitm_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mitm_user`
--
ALTER TABLE `mitm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
