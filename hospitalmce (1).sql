-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 11:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmce`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(20) NOT NULL,
  `did` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL,
  `Specialist` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `hid` varchar(25) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `did`, `dname`, `ph`, `Specialist`, `description`, `hid`, `pic`, `Status`) VALUES
(1, 'D501', 'Dr Prakesh Chandra', '9801250312', 'Anesthesiologists', 'These doctors give you drugs to numb your pain or to put you under during surgery', 'H1003', 'image/D501.jpeg', 'Status'),
(2, 'D502', 'Dr Krishna Kumar', '9850231453', 'Dermatologists', 'Hair,Skin,Neil Problems', 'H1003', 'image/D502.jpg', 'Status'),
(3, 'D503', 'Dr Kumar', '7852036001', 'Cardiologists', 'They’re experts on the heart and blood vessels.', 'H1002', 'image/D503.jpg', 'Status'),
(4, 'D504', 'Dr Ramesh', '9844438331', 'Heart Speclization', 'Fever,Hear Cord., Hear Inj,Heart Surjury etc', 'H1003', 'image/no.jpg', 'Active'),
(5, 'D505', 'Ramesh Hosur', '9878987897', 'Heart Speclization', '    edcecrfcr', 'H1001', 'image/D505.jpg', 'Active'),
(6, 'D506', 'Dr Raj Nayak', '9857685675', 'Heart Sargery', '    fever , hear ', 'H1003', 'image/D506.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(20) NOT NULL,
  `hid` varchar(20) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `ph` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `taluk` varchar(100) NOT NULL DEFAULT 'None',
  `district` varchar(50) NOT NULL,
  `village` varchar(25) DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hid`, `hname`, `ph`, `address`, `psw`, `taluk`, `district`, `village`) VALUES
(1, 'H1001', 'Government Hospital', '9844438331', 'Government Hospital Near to Bus Stand', 'H1001', 'Hassan', 'Hassan', 'none'),
(2, 'H1002', 'Sri Chamarajendra Hospital', '9964499117', 'Government Hospital Near RC Road Hassan', 'H1002', 'Hassan', 'Hassan', 'none'),
(3, 'H1003', 'HIMS Teaching Hospital', '9852012123', '        Govt Hospital Hassan   \r\nNear Old bus stand Road Hassan     ', 'H1003', 'Hassan', 'Hassan', 'none'),
(5, 'H1005', 'Taluk Hospital ', '9905263810', 'Taluk Hospital ,Sakleshapura ,Government', 'H1005', 'Sakleshapura', 'Hassan', 'Malli'),
(6, 'H1006', ' Arasikere Taluk Hospital Government', '6380524196', 'Arasikere', 'H1006', 'Arasikere', 'Hassan', 'Agarahara'),
(7, 'H1007', 'Aluru Taluk Hospital Government', '9001526353', 'Aluru Taluk Hospital Government', 'H1007', 'Aluru', 'Hassan', 'Aluru Urban'),
(8, 'H1008', 'Channarapatna  Booth 2 Government', '8960511120', 'Arkalgud TH Booth 2 Government', 'H1008', 'Channarapatna  ', 'Hassan', 'Ahaladhalli'),
(9, 'H1009', 'Gandasi Hospital Government', '7852635241', 'Gandasi Hospital  Government', 'H1009', 'Gandasi', 'Hassan', 'none'),
(10, 'H1010', 'Holenarsipura Taluk Hospital-2 Government', '7526301254', 'Holenarsipura Taluk Hospital-2 Government', 'H1010', 'Holenarsipura', 'Hassan', 'Andur');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Type`, `usn`, `psw`, `email`, `Status`) VALUES
(1, 'Admin', 'admin', '1234', 'rrr@gmail.com', 'Active'),
(2, 'Doctor', 'krhsn', '1234', 'kr@gmail.com', 'Active'),
(3, 'THO', 'ideal', '1234', 'tho@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(20) NOT NULL,
  `adimin` varchar(20) NOT NULL,
  `pid` varchar(30) NOT NULL,
  `pname` varchar(80) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Disease` varchar(100) NOT NULL,
  `did` varchar(20) NOT NULL,
  `hid` varchar(20) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `adimin`, `pid`, `pname`, `lastname`, `ph`, `Address`, `place`, `taluk`, `district`, `age`, `gender`, `Disease`, `did`, `hid`, `Status`) VALUES
(1, '2022-04-12', 'P1001', 'Santhosh', 'HN', '9844438331', 'Shayadri Circle Hassan', 'Hassan', 'Hassan', 'Hassan', 35, 'Male', 'Fever', 'D501', 'H1003', 'Active'),
(2, '2022-04-15', 'P1002', 'Ram Swamy', 'R', '9852021152', 'K R Nagar 1 stage Bangalore', 'Bangalore', 'Hassan', 'Hassan', 45, 'Male', 'Hear Pain', 'D501', 'H1003', 'Active'),
(3, '2022-04-15', 'P1003', 'Kumar T M', 'A', '9852036524', 'K R Puram 1 st Main 7 Cross Hassan', 'Hassan', 'Hassan', 'Hassan', 25, 'male', 'Fever', 'D503', 'H1003', 'Active'),
(4, '2022-04-15', 'P1004', 'Santhosh Gowda', 'C', '9852016352', 'Dhodda Bomana Halli HN Pura', 'H N Pura', 'Hassan', 'Hassan', 25, 'male', 'Hear Pain', 'D501', 'H1003', 'Active'),
(5, '2022-04-15', 'P1005', 'Mallamma S', 'D', '9852036524', 'Ramnahalli Hassan', 'Saklashpura', 'Hassan', 'Hassan', 35, 'female', 'Stomach Pain', 'D502', 'H1003', 'Emergancy'),
(6, '2022-04-15', 'P1006', 'Radha kumari', 'P M', '9501120362', '    Unsanalli Main Kaplu Hassan', 'H N Pura', 'Hassan', 'Hassan', 52, 'female', 'Fever', 'D501', 'H1003', 'Normal'),
(7, '2022-05-06', 'P1007', 'Mayandra H N', 'S', '9852016352', '    Ramnahalli Hassan', 'Saklashpura', 'Hassan', 'Hassan', 53, 'male', 'Fever', 'D502', 'H1003', 'Critical'),
(8, '2022-05-06', 'P1008', 'Putta Swammy', 'V', '9502362541', ' Kangatanalli Durga Chanarapatna Hassan', 'C N Patana', 'Hassan', 'Hassan', 42, 'male', 'Eye Injuray ', 'D504', 'H1003', 'Critical'),
(9, '2022-05-06', 'P1009', 'Kumar Swamy N R', 'M R', '9850241850', '   Marathilii Near Gansi Post C N Pura', 'C N Patana', 'Hassan', 'Hassan', 26, 'male', 'Leg Inj Neel Pain', 'D502', 'H1003', 'Emergancy'),
(10, '2022-05-07', 'P1010', 'Durga Swamy', 'B P', '9845214578', '    RC Road 1 st stage Hassan', 'Saklashpura', 'Hassan', 'Hassan', 52, 'male', 'Hear Pain', 'D504', 'H1003', 'Emergancy'),
(11, '2022-05-10', 'P1011', 'Raj kumar', 'Kumar', '9852635428', '   K R Puram Hassan ', 'H N Pura', 'Hassan', 'Hassan', 30, 'male', 'Hear Pain', 'D505', 'H1003', 'Emergancy'),
(12, '2022-05-14', 'P1012', 'Sagar Gowda', 'D B', '9852565425', '    Shayadri circle Hassan', 'H N Pura', 'Hassan', 'Hassan', 52, 'male', 'Fever', 'D502', 'H1003', 'Emergancy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
