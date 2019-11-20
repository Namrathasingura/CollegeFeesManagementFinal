-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 07:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegefee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbranch`
--

CREATE TABLE `tblbranch` (
  `id` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bcode` varchar(100) NOT NULL,
  `hod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbranch`
--

INSERT INTO `tblbranch` (`id`, `bname`, `bcode`, `hod`) VALUES
(1, 'comp sc', 'CSE', 'anand'),
(8, 'civil engg', 'CIV', 'shekar'),
(11, 'Info science', 'ISE', 'Anand'),
(12, 'Mechanical', 'MEC', 'Ravi'),
(13, 'Electronic', 'EC', 'Shama'),
(14, 'Aeronotical', 'AE', 'Priya'),
(15, 'fwdfw', 'wfde', 'wed'),
(16, 'zfrd', 'zfrd', 'avxjh');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblfee`
--

CREATE TABLE `tblfee` (
  `id` int(11) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `year` int(11) NOT NULL,
  `quota` varchar(100) NOT NULL,
  `admission` float NOT NULL,
  `exam` float NOT NULL,
  `feast` float NOT NULL,
  `stationary` float NOT NULL,
  `softskill` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfee`
--

INSERT INTO `tblfee` (`id`, `branch`, `year`, `quota`, `admission`, `exam`, `feast`, `stationary`, `softskill`) VALUES
(1, 'CSE', 1, 'SNQ', 18000, 1500, 2500, 3000, 3500),
(3, 'CSE', 1, 'Management', 58000, 1500, 2500, 3000, 3500),
(5, 'ISE', 1, 'SNQ', 18000, 1500, 2500, 3000, 3500),
(6, 'ISE', 1, 'Management', 58000, 1500, 2500, 3000, 3500),
(7, 'AE', 1, 'SNQ', 16500, 1500, 2500, 3000, 3500),
(8, 'AE', 1, 'Management', 56500, 1500, 2500, 3000, 3500),
(9, 'EC', 1, 'SNQ', 16000, 1500, 2500, 3000, 3500),
(10, 'EC', 1, 'Management', 56000, 1500, 2500, 3000, 3500),
(11, 'CIV', 1, 'SNQ', 15500, 1500, 2500, 3000, 3500),
(12, 'CIV', 1, 'Management', 55500, 1500, 2500, 3000, 3500),
(13, 'MEC', 1, 'SNQ', 15000, 1500, 2500, 3000, 3500),
(14, 'MEC', 1, 'Management', 55000, 1500, 2500, 3000, 3500),
(15, 'CSE', 2, 'SNQ', 18500, 1500, 2000, 3000, 3500),
(16, 'CSE', 2, 'Management', 585000, 1500, 2000, 3000, 3500),
(17, 'ISE', 2, 'SNQ', 18500, 1500, 2000, 3000, 3500),
(18, 'ISE', 2, 'Management', 585000, 1500, 2000, 3000, 3500),
(19, 'AE', 2, 'SNQ', 17000, 1500, 2000, 3000, 3500),
(20, 'AE', 2, 'Management', 57000, 1500, 2000, 3000, 3500),
(21, 'EC', 2, 'SNQ', 16500, 1500, 2000, 3000, 3500),
(22, 'EC', 2, 'Management', 56500, 1500, 2000, 3000, 3500),
(23, 'CIV', 2, 'SNQ', 16000, 1500, 2000, 3000, 3500),
(24, 'CIV', 2, 'Management', 56000, 1500, 2000, 3000, 3500),
(25, 'MEC', 2, 'SNQ', 15500, 1500, 2000, 3000, 3500),
(26, 'MEC', 2, 'Management', 55500, 1500, 2000, 3000, 3500),
(27, 'CSE', 3, 'SNQ', 17000, 1500, 2000, 3000, 3500),
(28, 'CSE', 3, 'Management', 57000, 1500, 2000, 3000, 3500),
(29, 'ISE', 3, 'SNQ', 17000, 1500, 2000, 3000, 3500),
(30, 'ISE', 3, 'Management', 57000, 1500, 2000, 3000, 3500),
(31, 'AE', 3, 'SNQ', 15500, 1500, 2000, 3000, 3500),
(32, 'AE', 3, 'Management', 55500, 1500, 2000, 3000, 3500),
(33, 'EC', 3, 'SNQ', 15000, 1500, 2000, 3000, 3500),
(34, 'EC', 3, 'Management', 55000, 1500, 2000, 3000, 3500),
(35, 'CIV', 3, 'SNQ', 14500, 1500, 2000, 3000, 3500),
(36, 'CIV', 3, 'Management', 54500, 1500, 2000, 3000, 3500),
(37, 'MEC', 3, 'SNQ', 14500, 1500, 2000, 3000, 3500),
(38, 'MEC', 3, 'Management', 54500, 1500, 2000, 3000, 3500),
(39, 'CSE', 4, 'SNQ', 17500, 1500, 2000, 3000, 3500),
(40, 'CSE', 4, 'Management', 57500, 1500, 2000, 3000, 3500),
(41, 'ISE', 4, 'SNQ', 17500, 1500, 2000, 3000, 3500),
(42, 'ISE', 4, 'Management', 57500, 1500, 2000, 3000, 3500),
(43, 'AE', 4, 'SNQ', 16000, 1500, 2000, 3000, 3500),
(44, 'AE', 4, 'Management', 56000, 1500, 2000, 3000, 3500),
(45, 'EC', 4, 'SNQ', 15500, 1500, 2000, 3000, 3500),
(46, 'EC', 4, 'Management', 55000, 1500, 2000, 3000, 3500),
(47, 'CIV', 4, 'SNQ', 15000, 1500, 2000, 3000, 3500),
(48, 'CIV', 4, 'Management', 55000, 1500, 2000, 3000, 3500),
(49, 'MEC', 4, 'SNQ', 14500, 1500, 2000, 3000, 3500),
(50, 'MEC', 4, 'Management', 54500, 1500, 2000, 3000, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `tblhostel`
--

CREATE TABLE `tblhostel` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhostel`
--

INSERT INTO `tblhostel` (`id`, `type`, `fee`) VALUES
(1, 'Day Scholar', 0),
(2, 'Hostel', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotes`
--

CREATE TABLE `tblnotes` (
  `id` int(11) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `sem` int(11) NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotes`
--

INSERT INTO `tblnotes` (`id`, `branch`, `sem`, `notes`) VALUES
(1, 'CSE', 1, 'webmod1.pdf'),
(2, 'IS', 6, 'pymod.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tblreport`
--

CREATE TABLE `tblreport` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `year` int(11) NOT NULL,
  `quota` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `bus` float NOT NULL,
  `source` varchar(200) NOT NULL,
  `admission` float NOT NULL,
  `exam` float NOT NULL,
  `feast` float NOT NULL,
  `stationary` float NOT NULL,
  `softskill` float NOT NULL,
  `hostel` float NOT NULL,
  `total` float NOT NULL,
  `paid` float NOT NULL,
  `balance` double NOT NULL,
  `dob` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreport`
--

INSERT INTO `tblreport` (`id`, `fname`, `mname`, `lname`, `email`, `branch`, `year`, `quota`, `type`, `bus`, `source`, `admission`, `exam`, `feast`, `stationary`, `softskill`, `hostel`, `total`, `paid`, `balance`, `dob`, `username`) VALUES
(18, 'Asha', 'latha', 'S', 'ash@gmail.com', 'MEC', 1, 'SNQ', 'Hostel', 0, 'hostel', 0, 0, 0, 0, 0, 0, 84500, 0, 84500, '2019', 'nam@gmail.com'),
(19, 'Nam', 'Sing', 'A', 'namra@gmail.com', 'IS', 3, 'SNQ', 'Day Scholar', 0, 'no', 0, 0, 0, 0, 0, 0, 87500, 0, 87500, '2019', 'asha@gmail.com'),
(22, 'A', 'B', 'C', 'D', '', 0, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'I', 'J'),
(23, 'kaveri', '', 'XSNJK', 'kaveri@gmail.com', 'CSE', 1, 'SNQ', 'Day Scholar', 0, 'hostel', 0, 0, 0, 0, 0, 0, 37500, 0, 37500, '2019-11-28', 'nam@gmail.com'),
(24, 'isha', '7894561233', 'S', 'isha@gmail.com', 'CSE', 2, 'SNQ', 'Day Scholar', 0, 'kerala', 0, 0, 0, 0, 0, 0, 40500, 0, 40500, '2019-11-06', 'isha@gmail.com'),
(25, 'isha', '7894561233', 'S', 'isha@gmail.com', 'CSE', 2, 'SNQ', 'Day Scholar', 0, 'kerala', 0, 0, 0, 0, 0, 0, 40500, 0, 40500, '2019-11-06', 'isha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblsource`
--

CREATE TABLE `tblsource` (
  `id` int(11) NOT NULL,
  `source` varchar(200) NOT NULL,
  `fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsource`
--

INSERT INTO `tblsource` (`id`, `source`, `fee`) VALUES
(1, 'pumpwell', 9000),
(2, 'kerala', 12000),
(3, 'vitla', 11000),
(4, 'kankanady', 9500),
(5, 'hostel', 9000),
(6, 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `year` int(11) NOT NULL,
  `quota` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `bus` float NOT NULL,
  `source` varchar(200) NOT NULL,
  `admission` float NOT NULL,
  `exam` float NOT NULL,
  `feast` float NOT NULL,
  `stationary` float NOT NULL,
  `softskill` float NOT NULL,
  `hostel` float NOT NULL,
  `total` float NOT NULL,
  `paid` float NOT NULL,
  `balance` float NOT NULL,
  `dob` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `fname`, `mname`, `lname`, `email`, `branch`, `year`, `quota`, `type`, `bus`, `source`, `admission`, `exam`, `feast`, `stationary`, `softskill`, `hostel`, `total`, `paid`, `balance`, `dob`, `username`) VALUES
(48, 'Asha', 'latha', 'S', 'ash@gmail.com', 'MEC', 1, 'SNQ', 'Hostel', 9000, 'hostel', 15000, 1500, 2500, 3000, 3500, 50000, 84500, 0, 84500, '2019-11-01', 'nam@gmail.com'),
(49, 'Nam', 'Sing', 'P', 'namra@gmail.com', 'IS', 3, 'SNQ', 'Day Scholar', 0, 'no', 18000, 2000, 2500, 3000, 3500, 0, 57500, 0, 57500, '2019-09-09', 'asha@gmail.com'),
(52, 'isha', 'R', 'K', 'isha@gmail.com', 'CSE', 2, 'SNQ', 'Day Scholar', 12000, 'kerala', 18500, 1500, 2000, 3000, 3500, 0, 40500, 0, 40500, '2019-11-06', 'isha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `phone`, `address`, `dob`) VALUES
(5, 'Asha', '1', '9972889057', 'KunjathBail', '24/05/1999'),
(11, 'asha', '12', '7845123698', 'mangalore', '12/98/23'),
(29, 'asha@gmail.com', '1', '9998877665', 'poone', '2019-11-28'),
(30, 'isha', '1', '7894561233', 'kavoor', '2019-03-29'),
(31, 'isha@gmail.com', '1', '7894561233', 'kavoor', '2019-03-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbranch`
--
ALTER TABLE `tblbranch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfee`
--
ALTER TABLE `tblfee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhostel`
--
ALTER TABLE `tblhostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotes`
--
ALTER TABLE `tblnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblreport`
--
ALTER TABLE `tblreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsource`
--
ALTER TABLE `tblsource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbranch`
--
ALTER TABLE `tblbranch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblfee`
--
ALTER TABLE `tblfee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tblhostel`
--
ALTER TABLE `tblhostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblnotes`
--
ALTER TABLE `tblnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblreport`
--
ALTER TABLE `tblreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblsource`
--
ALTER TABLE `tblsource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
