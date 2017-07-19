-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 07:22 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` varchar(30) NOT NULL,
  `A_USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `A_EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_USERNAME`, `PASSWORD`, `A_EMAIL`) VALUES
('1', 'ADMIN', 'ADMIN', 'ADMIN@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `CLIENT_ID` varchar(10) NOT NULL,
  `DOCTORID` varchar(10) NOT NULL,
  `STATUS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`CLIENT_ID`, `DOCTORID`, `STATUS`) VALUES
('1', '1', 'Y'),
('1', '2', 'Y'),
('2', '2', 'Y'),
('1', '3', 'Y'),
('1', '1', 'Y'),
('2', '1', 'Y'),
('3', '1', 'Y'),
('1', '1', 'Y'),
('2', '1', 'Y'),
('3', '1', 'Y'),
('1', '1', 'Y'),
('2', '1', 'Y'),
('3', '1', 'Y'),
('1', '1', 'Y'),
('2', '1', 'Y'),
('3', '1', 'Y'),
('51', '2', 'Y'),
('51', '1', 'Y'),
('52', '2', 'Y'),
('53', '3', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CLIENT_ID` varchar(30) NOT NULL,
  `CPASSWORD` varchar(50) NOT NULL,
  `CEMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clientdetails`
--

CREATE TABLE `clientdetails` (
  `CLIENT_ID` int(30) NOT NULL,
  `C_NAME` varchar(50) NOT NULL,
  `C_USERNAME` varchar(30) NOT NULL,
  `C_DOB` date NOT NULL,
  `C_ADDRESS` varchar(100) NOT NULL,
  `C_EMAIL` varchar(100) NOT NULL,
  `C_CONTACT` int(10) NOT NULL,
  `C_PASSWORD` varchar(100) NOT NULL,
  `C_GENDER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientdetails`
--

INSERT INTO `clientdetails` (`CLIENT_ID`, `C_NAME`, `C_USERNAME`, `C_DOB`, `C_ADDRESS`, `C_EMAIL`, `C_CONTACT`, `C_PASSWORD`, `C_GENDER`) VALUES
(62, 'akash', 'akashdeep', '1996-03-07', 'delhi faridabad', 'akash@', 1236547891, 'google@123', 'male'),
(63, 'akash', 'akash', '1996-03-07', 'faridabad delhi', 'AKASH@', 1234567899, 'google@123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `cpara`
--

CREATE TABLE `cpara` (
  `CLIENT_ID` int(30) DEFAULT NULL,
  `PARAMETER1` int(7) NOT NULL,
  `PARAMETER2` int(7) NOT NULL,
  `PARAMETER3` int(7) NOT NULL,
  `RESULT1` varchar(30) NOT NULL,
  `RESULT2` varchar(30) NOT NULL,
  `RESULT3` varchar(30) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpara`
--

INSERT INTO `cpara` (`CLIENT_ID`, `PARAMETER1`, `PARAMETER2`, `PARAMETER3`, `RESULT1`, `RESULT2`, `RESULT3`, `TIME`) VALUES
(0, 100, 109, 111, 'Your heart rate is too high , ', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-01-06 06:31:34'),
(0, 100, 109, 111, '', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-01-06 06:47:59'),
(0, 100, 109, 111, '', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-01-06 06:48:25'),
(0, 100, 109, 111, '', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-01-06 06:48:28'),
(0, 100, 109, 111, '', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-01-06 06:48:50'),
(0, 100, 101, 11, 'Your heart rate is too high , ', 'Your Systolic BP is totally fi', 'Your Diastolic BP is too Low ,', '2016-01-06 06:50:01'),
(0, 100, 100, 100, 'Your heart rate is too high , ', 'Your Systolic BP is totally fi', 'Your Diastolic BP is higher th', '2016-01-06 06:52:26'),
(0, 100, 121, 167, 'Your heart rate is too high , ', 'Your Systolic BP is in PreHigh', ' Your Diastolic BP is too High', '2016-01-06 07:14:17'),
(0, 101, 120, 101, 'Your heart rate is too high , ', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-03-14 19:57:25'),
(0, 100, 120, 101, 'Your heart rate is too high , ', 'Your Systolic BP is totally fi', ' Your Diastolic BP is too High', '2016-03-14 20:03:13'),
(0, 90, 111, 80, 'Your Heart rate is high right ', 'Your Systolic BP is totally fi', 'Your Diastolic BP is totally f', '2016-03-15 05:44:34'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 13:44:28'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 13:45:33'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 13:50:33'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 13:51:07'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 13:51:34'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 13:53:51'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 14:43:26'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 14:45:26'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 14:59:05'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 15:00:20'),
(0, 0, 0, 0, 'Your heart rate is too low , s', '', '', '2016-03-17 15:01:05'),
(0, 0, 0, 0, 'Your heart rate is too low , s', '', '', '2016-03-17 15:01:15'),
(0, 100, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-17 15:03:43'),
(0, 0, 0, 0, 'Your heart rate is too low , s', '', '', '2016-03-17 15:03:48'),
(0, 0, 0, 0, 'Your heart rate is too low , s', '', '', '2016-03-17 15:04:13'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 03:47:16'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 03:48:26'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 03:55:18'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 03:57:01'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 04:06:19'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 04:06:24'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 04:07:23'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 04:07:27'),
(0, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 04:07:31'),
(63, 101, 0, 0, 'Your heart rate is too high , ', '', '', '2016-03-18 04:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DOCTORID` varchar(30) NOT NULL,
  `DPASSWORD` varchar(50) NOT NULL,
  `DEMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `DOCTORID` int(30) NOT NULL,
  `D_NAME` varchar(50) NOT NULL,
  `D_USERNAME` varchar(50) NOT NULL,
  `D_ADDRESS` varchar(100) NOT NULL,
  `D_CONTACTNO` int(10) NOT NULL,
  `D_SPECIALIZATION` varchar(100) NOT NULL,
  `D_EMAIL` varchar(100) NOT NULL,
  `D_PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `P_ID` varchar(30) NOT NULL,
  `RANGE1` varchar(30) NOT NULL,
  `RECOMMENDATIONS` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pdp`
--

CREATE TABLE `pdp` (
  `CLIENT_ID` varchar(30) NOT NULL,
  `DOCTORID` varchar(30) NOT NULL,
  `C_USERNAME` varchar(30) NOT NULL,
  `D_USERNAME` varchar(50) NOT NULL,
  `COMMENTS` varchar(1000) NOT NULL,
  `RECOMMENDATIONS` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENT_ID`);

--
-- Indexes for table `clientdetails`
--
ALTER TABLE `clientdetails`
  ADD PRIMARY KEY (`CLIENT_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DOCTORID`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`DOCTORID`);

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `pdp`
--
ALTER TABLE `pdp`
  ADD PRIMARY KEY (`DOCTORID`,`CLIENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientdetails`
--
ALTER TABLE `clientdetails`
  MODIFY `CLIENT_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `DOCTORID` int(30) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
