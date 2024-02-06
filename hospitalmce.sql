-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 08:02 AM
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
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(20) NOT NULL,
  `dcode` int(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL DEFAULT '9844438331'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `dcode`, `dist`, `psw`, `ph`) VALUES
(1, 1001, 'Bagalkot', '1001', '9844438331'),
(2, 1002, 'Ballari', '1002', '9844438331'),
(3, 1003, 'Belagavi', '1003', '9844438331'),
(4, 1004, 'Bengaluru Rural', '1004', '9844438331'),
(5, 1005, 'Bangalore Urban', '1005', '9844438331'),
(6, 1006, 'Bidar', '1006', '9844438331'),
(7, 1007, 'Chamarajanagar', '1007', '9844438331'),
(8, 1008, 'Chikballapur', '1008', '9844438331'),
(9, 1009, 'Chikkamagaluru', '1009', '9844438331'),
(10, 1010, 'Chitradurga', '1010', '9844438331'),
(11, 1011, 'Dakshina Kannada', '1011', '9844438331'),
(12, 1012, 'Davangere', '1012', '9844438331'),
(13, 1013, 'Dharwad', '1013', '9844438331'),
(14, 1014, 'Gadag', '1014', '9844438331'),
(15, 1015, 'Hassan', '1015', '9844438331'),
(16, 1016, 'Haveri', '1016', '9844438331'),
(17, 1017, 'Gulbarga', '1017', '9844438331'),
(18, 1018, 'Kodagu', '1018', '9844438331'),
(19, 1019, 'Kolar', '1019', '9844438331'),
(20, 1020, 'Koppal', '1020', '9844438331'),
(21, 1021, 'Mandya', '1021', '9844438331'),
(22, 1022, 'Mysuru', '1022', '9844438331'),
(23, 1023, 'Raichur', '1023', '9844438331'),
(24, 1024, 'Ramanagara', '1024', '9844438331'),
(25, 1025, 'Shivamogga', '1025', '9844438331'),
(26, 1026, 'Tumakuru', '1026', '9844438331'),
(27, 1027, 'Udupi', '1027', '9844438331'),
(28, 1028, 'Uttara Kannada', '1028', '9844438331'),
(29, 1029, 'Vijayapura', '1029', '9844438331'),
(30, 1030, 'Yadgir', '1030', '9844438331');

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
-- Stand-in structure for view `doc_view`
-- (See below for the actual view)
--
CREATE TABLE `doc_view` (
`pid` varchar(30)
,`adimin` varchar(20)
,`pname` varchar(80)
,`age` int(20)
,`Disease` varchar(100)
,`did` varchar(20)
,`hid` varchar(20)
);

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
(6, 'H1004', ' Arasikere Taluk Hospital Government', '6380524196', 'Arasikere', 'H1004', 'Arasikere', 'Hassan', 'Agarahara'),
(7, 'H1006', 'Aluru Taluk Hospital Government', '9001526353', 'Aluru Taluk Hospital Government', 'H1006', 'Aluru', 'Hassan', 'Aluru Urban'),
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
(4, '2022-04-15', 'P1004', 'Santhosh Gowda', 'C', '9852016352', 'Dhodda Bomana Halli HN Pura', 'H N Pura', 'Hassan', 'Hassan', 25, 'male', 'Hear Pain', 'D501', 'H1004', 'Active'),
(5, '2022-04-15', 'P1005', 'Mallamma S', 'D', '9852036524', 'Ramnahalli Hassan', 'Saklashpura', 'Hassan', 'Hassan', 35, 'female', 'Stomach Pain', 'D502', 'H1004', 'Emergancy'),
(6, '2022-04-15', 'P1006', 'Radha kumari', 'P M', '9501120362', '    Unsanalli Main Kaplu Hassan', 'H N Pura', 'Hassan', 'Hassan', 52, 'female', 'Fever', 'D501', 'H1004', 'Normal'),
(7, '2022-05-06', 'P1007', 'Mayandra H N', 'S', '9852016352', '    Ramnahalli Hassan', 'Saklashpura', 'Sakleshapura', 'Hassan', 53, 'male', 'Fever', 'D502', 'H1005', 'Critical'),
(8, '2022-05-06', 'P1008', 'Putta Swammy', 'V', '9502362541', ' Kangatanalli Durga Chanarapatna Hassan', 'C N Patana', 'Sakleshapura', 'Hassan', 42, 'male', 'Eye Injuray ', 'D501', 'H1005', 'Critical'),
(9, '2022-05-06', 'P1009', 'Kumar Swamy N R', 'M R', '9850241850', '   Marathilii Near Gansi Post C N Pura', 'C N Patana', 'Aluru', 'Hassan', 26, 'male', 'Leg Inj Neel Pain', 'D501', 'H1006', 'Emergancy'),
(10, '2022-05-07', 'P1010', 'Durga Swamy', 'B P', '9845214578', '    RC Road 1 st stage Hassan', 'Saklashpura', 'Holenarsipura', 'Hassan', 52, 'male', 'Hear Pain', 'D504', 'H1010', 'Emergancy'),
(11, '2022-05-10', 'P1011', 'Raj kumar', 'Kumar', '9852635428', '   K R Puram Hassan ', 'H N Pura', 'Holenarsipura', 'Hassan', 30, 'male', 'Hear Pain', 'D501', 'H1010', 'Emergancy'),
(12, '2022-05-14', 'P1012', 'Sagar Gowda', 'D B', '9852565425', '    Shayadri circle Hassan', 'H N Pura', 'Holenarsipura', 'Hassan', 52, 'male', 'Fever', 'D502', 'H1010', 'Emergancy');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pat_view`
-- (See below for the actual view)
--
CREATE TABLE `pat_view` (
`pid` varchar(30)
,`adimin` varchar(20)
,`pname` varchar(80)
,`age` int(20)
,`Disease` varchar(100)
,`dname` varchar(50)
,`hid` varchar(20)
,`district` varchar(50)
,`taluk` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `tho`
--

CREATE TABLE `tho` (
  `id` int(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tho`
--

INSERT INTO `tho` (`id`, `usn`, `psw`, `Status`) VALUES
(1, 'tadmin', '1234', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(20) NOT NULL,
  `tdate` date NOT NULL,
  `tname` varchar(50) NOT NULL,
  `Medican` varchar(200) NOT NULL DEFAULT 'No Medicen Given',
  `pid` varchar(20) NOT NULL,
  `hid` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `tdate`, `tname`, `Medican`, `pid`, `hid`, `dname`, `status`) VALUES
(1, '2022-05-18', 'Ram Swamy', 'MB2 HLP , HRP CL S01', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(2, '2022-05-19', 'Ram Swamy', 'No Medicen Given', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(3, '2022-05-19', 'Santhosh', 'Cal par2,Tsloc 2 Mg ', 'P1001', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(4, '2022-05-20', 'Santhosh', 'No Medicen Given', 'P1001', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(5, '2022-05-20', 'Ram Swamy', 'No Medicen Given', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(12, '2022-05-30', 'Ram', 'fghgfhgfh', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(13, '2022-05-30', 'Ram', 'dgdgdfgfd', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(14, '2022-06-08', 'Ram', 'mdjcjff', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(15, '2022-06-07', 'Ram', 'pl 2mg,  taloc 34/3 6', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending'),
(16, '2022-06-08', 'Ram', '3gdb  scan', 'P1002', 'H1003', 'Dr Prakesh Chandra', 'Pending');

-- --------------------------------------------------------

--
-- Structure for view `doc_view`
--
DROP TABLE IF EXISTS `doc_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `doc_view`  AS  select `p`.`pid` AS `pid`,`p`.`adimin` AS `adimin`,`p`.`pname` AS `pname`,`p`.`age` AS `age`,`p`.`Disease` AS `Disease`,`p`.`did` AS `did`,`p`.`hid` AS `hid` from `patient` `p` where (`p`.`did` = 'D501') ;

-- --------------------------------------------------------

--
-- Structure for view `pat_view`
--
DROP TABLE IF EXISTS `pat_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pat_view`  AS  select `p`.`pid` AS `pid`,`p`.`adimin` AS `adimin`,`p`.`pname` AS `pname`,`p`.`age` AS `age`,`p`.`Disease` AS `Disease`,`d`.`dname` AS `dname`,`p`.`hid` AS `hid`,`p`.`district` AS `district`,`p`.`taluk` AS `taluk` from (`patient` `p` join `doctor` `d`) where ((`p`.`district` = 'Hassan') and (`p`.`did` = `d`.`did`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tho`
--
ALTER TABLE `tho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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

--
-- AUTO_INCREMENT for table `tho`
--
ALTER TABLE `tho`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
