-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 05:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcecodester_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_visitor`
--

CREATE TABLE `info_visitor` (
  `Serial` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `meetingTo` varchar(100) NOT NULL,
  `department` varchar(255) NOT NULL,
  `day` varchar(50) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `Date` date NOT NULL,
  `TimeIN` time NOT NULL,
  `ReceiptID` int(6) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `HomeAddress` varchar(255) NOT NULL,
  `TimeOUT` time NOT NULL,
  `registeredBy` varchar(30) NOT NULL,
  `loggedOutBy` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_visitor`
--

INSERT INTO `info_visitor` (`Serial`, `FirstName`, `LastName`, `gender`, `Contact`, `Purpose`, `meetingTo`, `department`, `day`, `month`, `year`, `Date`, `TimeIN`, `ReceiptID`, `Status`, `HomeAddress`, `TimeOUT`, `registeredBy`, `loggedOutBy`) VALUES
(6, 'sam', 'sam', '', '090887788798', 'testing', 'testing', '', '27', 3, 2022, '2022-03-27', '18:12:56', 762458, 'OFFLINE', 'testing', '20:23:11', 'shreya', 'shreya'),
(7, 'kay', 'ola', '', '09088776655', 'Meeting', 'Meeting', '', '27', 3, 2022, '2022-03-27', '18:22:21', 796998, 'OFFLINE', '23 lagos island', '23:13:07', 'shreya', 'shreya'),
(8, 'seun', 'ade', 'Male', '09087654333', 'Meeting', 'Metting', '', '28', 3, 2022, '2022-03-28', '15:37:23', 408445, 'OFFLINE', '23 surulere', '20:26:27', 'shreya', 'shreya'),
(9, 'Ola', 'Kemi', '', '09190887366', 'chatting', 'chatting', '', '28', 3, 2022, '2022-03-28', '15:41:17', 762171, 'OFFLINE', '10, Ajangbadi', '20:29:07', 'shreya', 'shreya'),
(10, 'Demilade', 'Ola', 'Female', '09190887366', 'Testing', 'Testing', '', '28', 3, 2022, '2022-03-28', '15:43:57', 542561, 'OFFLINE', '23, banana Island', '03:54:56', 'shreya', 'shreya'),
(11, 'Kemi', 'Dada', 'Male', '09190887366', 'Meeting', 'Meeting', '', '28', 3, 2022, '2022-03-28', '15:52:23', 197060, 'OFFLINE', '77, Ojuelegba', '06:10:45', 'shreya', 'shreya'),
(12, 'seyi', 'Makinde', '', '09190887366', 'None', 'None', '', '28', 3, 2022, '2022-03-28', '04:20:38', 747578, 'ONLINE', 'lagos mainland', '00:00:00', 'shreya', ''),
(13, 'bamidele', 'Olawale', 'Male', '09190887366', 'Testing', 'Falade Oshikoya', '', '28', 3, 2022, '2022-03-28', '05:09:45', 886744, 'ONLINE', '23, banana island', '00:00:00', 'shreya', ''),
(14, 'gffgfggsfggf', 'gfgf', 'Male', '09085903948', 'gfsfgs', 'agfaga', 'Releasing', '28', 3, 2022, '2022-03-28', '05:15:03', 691278, 'OFFLINE', 'agfgadfga', '11:58:18', 'shreya', 'admin'),
(15, 'Kola', 'Daniel', 'Male', '09190887366', 'Food supply', 'James Osheneye', 'Planning and statistics', '28', 3, 2022, '2022-03-28', '05:33:09', 654513, 'ONLINE', '66, oko afo', '00:00:00', 'shreya', ''),
(16, 'Tomi', 'Ola', 'Male', '09087654321', 'Checking', 'Checking', 'Safety', '31', 3, 2022, '2022-03-31', '12:44:34', 571113, 'ONLINE', '22, Ojota papalanto', '00:00:00', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `SnoPrimary` int(11) NOT NULL,
  `userName` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`SnoPrimary`, `userName`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'shreya', 'shreya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_visitor`
--
ALTER TABLE `info_visitor`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`SnoPrimary`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_visitor`
--
ALTER TABLE `info_visitor`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `SnoPrimary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
