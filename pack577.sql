-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2020 at 10:38 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pack577`
--
CREATE DATABASE IF NOT EXISTS `pack577` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pack577`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `scout_name` varchar(255) NOT NULL,
  `den` int(11) NOT NULL,
  `signin_date` date NOT NULL,
  `signin_time` time NOT NULL,
  `requirements` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dens`
--

CREATE TABLE `dens` (
  `id` int(11) NOT NULL,
  `den` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dens`
--

INSERT INTO `dens` (`id`, `den`) VALUES
(1, 'Lion'),
(2, 'Tiger'),
(3, 'Wolf'),
(4, 'Bear'),
(5, 'Webelos'),
(6, 'AOL');

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE `scouts` (
  `id` int(11) NOT NULL,
  `scout` varchar(255) NOT NULL,
  `den_id` int(11) NOT NULL,
  `parent_guardian` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alt_phone` varchar(255) DEFAULT NULL,
  `allergies` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scouts` (Names and phone numbers have changed to protect sensitive data)
--

INSERT INTO `scouts` (`id`, `scout`, `den_id`, `parent_guardian`, `phone`, `alt_phone`, `allergies`) VALUES
(1, 'Anthony Roberts', 2, 'Jennifer Roberts', '602-776-1953', '', ''),
(2, 'David Clark', 2, 'Crystal Clark', '480-608-7825', '', ''),
(3, 'Dexter Smith', 2, 'Debbie & Lisa Smith', '863-601-9860', '', ''),
(4, 'Julian Taylor', 2, 'Erik Taylor', '480-558-8680', '', ''),
(5, 'Arthur Hamilton', 3, 'Leon Hamilton', '619-948-8003', '', ''),
(6, 'Edwin Cameron', 3, 'Jay Cameron', '602-575-3165', '', ''),
(7, 'Eric Russell', 3, 'Paul Russell', '480-302-0415', '', ''),
(8, 'Frederick Evans', 3, 'Kevan Evans', '414-317-1571', '', ''),
(9, 'Henry Bailey', 3, 'Daniel Bailey', '480-323-9955', '', ''),
(10, 'Jack Baker', 3, 'Lindsey Baker', '480-268-0895', '', ''),
(11, 'Julian Perkins', 3, 'Christopher/Tricia Perkins', '480-537-7006', '480-506-9784', 'Penicillin'),
(12, 'Lyndon Martin', 3, 'Kelley Martin', '602-234-6453', '', ''),
(13, 'Tyler Roberts', 3, 'Eddy Roberts', '602-307-1196', '', ''),
(14, 'Aiden Perry', 4, 'Kate Perry', '315-927-4223', '', ''),
(15, 'Alexander Clark', 4, 'Gus Clark', '480-642-1789', '', ''),
(16, 'Carlos Walker', 4, 'Petra Walker', '703-587-9933', '', ''),
(17, 'Dainton Morgan', 4, 'Debbie & Lisa Morgan', '863-601-9860', '', ''),
(18, 'Frederick Tucker', 4, 'Dale Tucker', '480-805-1980', '', ''),
(19, 'Kevin Adams', 4, 'Theadra Adams', '480-992-3885', '', ''),
(20, 'Luke Payne', 4, 'Kelley Payne', '602-234-6453', '', ''),
(21, 'Paul Turner', 4, 'Steven & Shannon Turner', '480-623-2019', '', ''),
(22, 'Aiden Morris', 5, 'Matthew & Jennifer Morris', '602-906-4435', '', ''),
(23, 'Ashton Andrews', 5, 'James & Raven Andrews', '480-872-2305', '', ''),
(24, 'Eddy Jones', 5, 'Bianca Jones', '928-209-3965', '', ''),
(25, 'Edgar Scott', 5, 'Suzette Scott', '602-613-6515', '', ''),
(26, 'Fenton Craig', 5, 'John Craig', '480-632-3764', '', ''),
(27, 'Gary Harris', 5, 'Carl & Gilane Harris', '602-226-7910', '', ''),
(28, 'Maximilian Murphy', 5, 'Jennifer Murphy', '602-677-3591', '', 'LACTOSE'),
(29, 'Andrew Kelley', 6, 'Danielle Kelley', '843-817-4435', '', ''),
(30, 'Aston Morrison', 6, 'Ashley & Cipriano Morrison', '480-832-9910', '', ''),
(31, 'Daryl Tucker', 6, 'Tad Tucker', '913-855-0756', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `scout_name` (`scout_name`);

--
-- Indexes for table `dens`
--
ALTER TABLE `dens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scouts`
--
ALTER TABLE `scouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `den` (`den_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dens`
--
ALTER TABLE `dens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scouts`
--
ALTER TABLE `scouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
