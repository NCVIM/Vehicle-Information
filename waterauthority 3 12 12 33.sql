-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 07:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterauthority`
--

-- --------------------------------------------------------

--
-- Table structure for table `ae`
--

CREATE TABLE `ae` (
  `MD_Id` int(5) NOT NULL,
  `CE_Id` int(5) NOT NULL,
  `SE_Id` int(5) NOT NULL,
  `EE_Id` int(5) NOT NULL,
  `AXE_Id` int(5) NOT NULL,
  `AE_Id` int(5) NOT NULL,
  `AE_Name` varchar(20) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ae`
--

INSERT INTO `ae` (`MD_Id`, `CE_Id`, `SE_Id`, `EE_Id`, `AXE_Id`, `AE_Id`, `AE_Name`, `Mobile_Number`, `Password`) VALUES
(1, 1, 3, 2, 1, 1, 'AE-1100', 1, '56'),
(1, 1, 3, 2, 2, 2, 'AE-1110', 57, '56'),
(1, 2, 1, 1, 1, 3, 'AE-2100', 1234560090, '56'),
(1, 1, 6, 8, 7, 5, 'Kadakkal', 2147483647, '56'),
(1, 1, 6, 8, 7, 60, 'Madathara', 50, '56'),
(1, 1, 9, 10, 10, 61, 'AE-1101', 9988776611, '12345'),
(1, 1, 9, 10, 10, 62, 'AE-1102', 9876543211, '12345'),
(1, 1, 9, 10, 10, 63, 'AE-1103', 9987564323, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `axe`
--

CREATE TABLE `axe` (
  `MD_Id` int(5) NOT NULL,
  `CE_Id` int(5) NOT NULL,
  `SE_Id` int(5) NOT NULL,
  `EE_Id` int(5) NOT NULL,
  `AXE_Id` int(5) NOT NULL,
  `AXE_Name` varchar(20) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axe`
--

INSERT INTO `axe` (`MD_Id`, `CE_Id`, `SE_Id`, `EE_Id`, `AXE_Id`, `AXE_Name`, `Mobile_Number`, `Password`) VALUES
(1, 1, 3, 2, 1, 'AXE-110', 2147483647, '0'),
(1, 1, 3, 2, 2, 'AXE-111', 1234560090, '0'),
(1, 2, 1, 1, 3, 'AXE-210', 2147483647, '0'),
(1, 2, 1, 6, 4, 'AXE-220', 2147483647, '0'),
(1, 3, 2, 3, 5, 'AXE-310', 2147483647, '0'),
(1, 3, 2, 5, 6, 'AXE-320', 2147483647, '0'),
(1, 1, 6, 8, 7, 'Kadakkal', 1234567890, '0'),
(1, 1, 6, 8, 8, 'Punalur', 2147483647, '0'),
(1, 1, 9, 9, 9, 'AXE-1100', 2147483647, '12345'),
(1, 1, 9, 10, 10, 'AXE-1101', 2147483647, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ce`
--

CREATE TABLE `ce` (
  `MD_Id` int(5) NOT NULL,
  `CE_Id` int(5) NOT NULL,
  `CE_Name` varchar(25) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ce`
--

INSERT INTO `ce` (`MD_Id`, `CE_Id`, `CE_Name`, `Mobile_Number`, `Password`) VALUES
(1, 1, 'CHIEF-SR', 9876543210, '12345'),
(1, 2, 'CHIEF-CR', 8765432190, '12345'),
(1, 3, 'CHIEF-NR', 9765432190, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `C_Id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `panchayath` varchar(20) DEFAULT NULL,
  `AE_Id` int(10) NOT NULL,
  `rectified` varchar(20) NOT NULL,
  `Others` varchar(20) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `Landmark` varchar(20) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`C_Id`, `Date`, `type`, `name`, `district`, `taluk`, `panchayath`, `AE_Id`, `rectified`, `Others`, `Description`, `Landmark`, `Mobile_Number`) VALUES
(1, '2018-11-20 20:34:52', 'leak', 'hari', 'kollam', 'kottarakara', 'Kadakkal', 0, '0', '', '', '', 0),
(2, '2018-11-20 20:34:52', 'leak', 'raj', 'Trivandrum', 'Neyyat', 'Attingal', 0, '1', '', '', '', 0),
(3, '2018-11-20 20:34:52', 'break', 'ravi', 'kollam', 'kottarakara', 'Kumil', 0, '0', '', '', '', 0),
(4, '2018-11-20 20:34:52', 'break', 'baob', 'kollam', 'kottiyam', 'Chenganoor', 0, '0', '', '', '', 0),
(5, '2018-11-20 20:34:52', 'leak', 'rohan', 'kollam', 'paravur', 'Anchal', 0, '0', '', '', '', 0),
(6, '2018-12-03 07:01:03', 'WATER LEAK', 'ddddd', '2', '4', '6', 3, '', '', 'dddddd', 'dssssss', 11221122),
(7, '2018-12-03 07:01:13', 'WATER LEAK', 'ddddd', '2', '4', '6', 3, '', '', 'dddddd', 'dssssss', 11221122),
(8, '2018-12-03 07:01:21', 'WATER LEAK', 'ddddd', '2', '4', '6', 3, '', '', 'dddddd', 'dssssss', 11221122);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `District_Id` int(3) NOT NULL,
  `District_Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`District_Id`, `District_Name`) VALUES
(1, 'Trivandrum'),
(2, 'Kollam'),
(3, 'Pathanamthitta'),
(4, 'Alapuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkad'),
(10, 'Malappuram'),
(11, 'Kozhikode'),
(12, 'Wayyanad'),
(13, 'Kannur'),
(14, 'Kasarkode');

-- --------------------------------------------------------

--
-- Table structure for table `ee`
--

CREATE TABLE `ee` (
  `MD_Id` int(5) NOT NULL,
  `CE_Id` int(5) NOT NULL,
  `SE_Id` int(5) NOT NULL,
  `EE_Id` int(5) NOT NULL,
  `EE_Name` varchar(25) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ee`
--

INSERT INTO `ee` (`MD_Id`, `CE_Id`, `SE_Id`, `EE_Id`, `EE_Name`, `Mobile_Number`, `Password`) VALUES
(1, 2, 1, 1, 'EE-21', 2147483647, ''),
(1, 1, 3, 2, 'EE-11', 1234567890, ''),
(1, 3, 2, 3, 'EE-31', 1234560090, ''),
(1, 1, 4, 4, 'EE-12', 1122334455, ''),
(1, 3, 2, 5, 'EE-32', 2147483647, ''),
(1, 2, 1, 6, 'EE-22', 2147483647, ''),
(1, 1, 6, 7, 'Kollam', 1234567890, ''),
(1, 1, 6, 8, 'Kottarakara', 2147483647, ''),
(1, 1, 9, 9, 'EE001', 2147483647, '12345'),
(1, 1, 9, 10, 'SR-EE1101', 2147483647, '12345'),
(1, 1, 9, 11, 'SR-EE001', 2147483647, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `emp_name` varchar(10) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `pass` int(10) NOT NULL,
  `O_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`emp_name`, `mob`, `pass`, `O_Id`) VALUES
('AE-1100', 1, 56, 6),
('AE-1110', 2, 56, 6),
('AE-2100', 3, 56, 5),
('Kadakkal', 4, 56, 5),
('Madathara', 60, 56, 6),
('AXE-110', 2147483647, 0, 5),
('AXE-111', 1234560090, 0, 5),
('AXE-210', 2147483647, 0, 5),
('AXE-220', 2147483647, 0, 5),
('AXE-310', 2147483647, 0, 5),
('AXE-320', 2147483647, 0, 5),
('Kadakkal', 1234567890, 0, 5),
('Punalur', 2147483647, 0, 5),
('EE1', 23, 20, 4),
('MD', 100, 101, 1),
('CHIEF-SR', 2147483647, 123456789, 2),
('CHIEF-CR', 2147483647, 123456789, 2),
('CHIEF-NR', 2147483647, 123456789, 2),
('SR-EE1101', 2147483647, 123456789, 4),
('SR-EE001', 2147483647, 123456789, 4),
('AXE-1101', 2147483647, 123456789, 5),
('AE-1101', 2147483647, 123456789, 6),
('AE-1102', 2147483647, 123456789, 6),
('AE-1103', 9987564323, 123456789, 6);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `O_Id` int(3) NOT NULL,
  `O_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`O_Id`, `O_Name`) VALUES
(1, 'MANAGING DIRECTOR'),
(2, 'CHIEF ENGINEER'),
(3, 'SUPERINTENDENT ENGINEER'),
(4, 'EXECUTIVE ENGINEER'),
(5, 'ASSISTANT EXECUTIVE '),
(6, 'ASSISTANT ENGINEER');

-- --------------------------------------------------------

--
-- Table structure for table `panchayat`
--

CREATE TABLE `panchayat` (
  `Panchayt_Id` int(6) NOT NULL,
  `Panchayt_Name` varchar(20) NOT NULL,
  `Taluk_Id` int(5) NOT NULL,
  `District_Id` int(3) NOT NULL,
  `AE_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panchayat`
--

INSERT INTO `panchayat` (`Panchayt_Id`, `Panchayt_Name`, `Taluk_Id`, `District_Id`, `AE_Id`) VALUES
(1, 'Attingal', 1, 1, 1),
(2, 'Alappad', 6, 2, 2),
(3, 'Chenganoor', 8, 5, 1),
(4, 'Kadakkal', 11, 2, 5),
(5, 'Kumil', 11, 2, 60),
(6, 'Anchal', 4, 2, 3),
(7, 'Eroor', 4, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `se`
--

CREATE TABLE `se` (
  `MD_Id` int(5) NOT NULL,
  `CE_Id` int(5) NOT NULL,
  `SE_Id` int(5) NOT NULL,
  `SE_Name` varchar(25) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se`
--

INSERT INTO `se` (`MD_Id`, `CE_Id`, `SE_Id`, `SE_Name`, `Mobile_Number`, `Password`) VALUES
(1, 2, 1, 'CR-01', 1234567890, ''),
(1, 3, 2, 'NR-01', 1234567890, ''),
(1, 1, 3, 'SR01', 1234567890, ''),
(1, 1, 4, 'SR02', 2147483647, ''),
(1, 1, 5, 'SR03', 1234567890, ''),
(1, 1, 6, 'Kollam_SE', 2147483647, ''),
(1, 1, 7, 'Trivandrum-SE', 1234567890, ''),
(1, 1, 8, 'Kkkkk', 234567890, ''),
(1, 1, 9, 'PTA_SE', 2147483647, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `taluk`
--

CREATE TABLE `taluk` (
  `Taluk_Id` int(5) NOT NULL,
  `Taluk_Name` varchar(20) NOT NULL,
  `District_Id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluk`
--

INSERT INTO `taluk` (`Taluk_Id`, `Taluk_Name`, `District_Id`) VALUES
(1, 'Varkala', 1),
(2, 'Neyyattinkara', 1),
(3, 'Kollam', 2),
(4, 'Punalur', 2),
(5, '', 1),
(6, 'Karunagapally', 2),
(7, 'Ranni', 3),
(8, 'Nattam', 5),
(9, 'Thaliparamb', 13),
(10, 'Uduma', 14),
(11, 'Chadayamangalam', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ae`
--
ALTER TABLE `ae`
  ADD PRIMARY KEY (`AE_Id`);

--
-- Indexes for table `axe`
--
ALTER TABLE `axe`
  ADD PRIMARY KEY (`AXE_Id`);

--
-- Indexes for table `ce`
--
ALTER TABLE `ce`
  ADD PRIMARY KEY (`CE_Id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`District_Id`);

--
-- Indexes for table `ee`
--
ALTER TABLE `ee`
  ADD PRIMARY KEY (`EE_Id`);

--
-- Indexes for table `panchayat`
--
ALTER TABLE `panchayat`
  ADD PRIMARY KEY (`Panchayt_Id`);

--
-- Indexes for table `se`
--
ALTER TABLE `se`
  ADD PRIMARY KEY (`SE_Id`);

--
-- Indexes for table `taluk`
--
ALTER TABLE `taluk`
  ADD PRIMARY KEY (`Taluk_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ae`
--
ALTER TABLE `ae`
  MODIFY `AE_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `axe`
--
ALTER TABLE `axe`
  MODIFY `AXE_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ce`
--
ALTER TABLE `ce`
  MODIFY `CE_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `District_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ee`
--
ALTER TABLE `ee`
  MODIFY `EE_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `panchayat`
--
ALTER TABLE `panchayat`
  MODIFY `Panchayt_Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `se`
--
ALTER TABLE `se`
  MODIFY `SE_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taluk`
--
ALTER TABLE `taluk`
  MODIFY `Taluk_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
