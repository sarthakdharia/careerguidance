-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 08:02 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'aditid2701@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5b13ed3a6e006', '5b13ed3a9436a'),
('5b13ed72489d8', '5b13ed7263d70'),

('scique1', 'scique1op1'),
('scique2', 'scique2op1'),
('scique3', 'scique3op1'),
('scique4', 'scique4op1'),
('scique5', 'scique5op1'),
('scique6', 'scique6op1'),
('scique7', 'scique7op1'),
('scique8', 'scique8op1'),
('scique9', 'scique9op1'),
('scique10', 'scique10op1'),
('comque1', 'comque1op1'),
('comque2', 'comque2op1'),
('comque3', 'comque3op1'),
('comque4', 'comque4op1'),
('comque5', 'comque5op1'),
('comque6', 'comque6op1'),
('comque7', 'comque7op1'),
('comque8', 'comque8op1'),
('comque9', 'comque9op1'),
('comque10', 'comque10op1'),
('artsque1', 'artsque1op1'),
('artsque2', 'artsque2op1'),
('artsque3', 'artsque3op1'),
('artsque4', 'artsque4op1'),
('artsque5', 'artsque5op1'),
('artsque6', 'artsque6op1'),
('artsque7', 'artsque7op1'),
('artsque8', 'artsque8op1'),
('artsque9', 'artsque9op1'),
('artsque10', 'artsque10op1');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `Yes` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `Yes`, `No`, `date`) VALUES
('suryaprasadtripathy8@gmail.com', 'science', 22, 10, 8, 2, '2018-06-03 16:56:00'),
('pinky@gmail.com', 'science', 30, 10, 10, 0, '2018-06-03 16:57:45'),
('priyanka@gmail.com', 'science', 22, 10, 8, 2, '2018-06-03 16:59:06'),
('suryaprasadtripathy8@gmail.com', 'commerce', 26, 10, 9, 1, '2018-06-03 17:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5b13ed3a6e006', 'sdb', '5b13ed3a9436a'),
('5b13ed3a6e006', 'jsdb', '5b13ed3a94374'),
('5b13ed3a6e006', 'dsbv', '5b13ed3a94377'),
('5b13ed3a6e006', 'jbdv', '5b13ed3a94379'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d70'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7a'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7d'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d80'),
('scique1', 'Yes', 'scique1op1'),
('scique1', 'No', 'scique1op2'),
('scique2', 'Yes', 'scique2op1'),
('scique2', 'No', 'scique2op2'),
('scique3', 'yes', 'scique3op1'),
('scique3', 'no', 'scique3op2'),
('scique4', 'Yes', 'scique4op1'),
('scique4', 'No', 'scique4op2'),
('scique5', 'No', 'scique5op2'),
('scique5', 'Yes', 'scique5op1'),
('scique6', 'Yes', 'scique6op1'),
('scique6', 'No', 'scique6op2'),
('scique7', 'Yes', 'scique7op1'),
('scique7', 'No', 'scique7op2'),
('scique8', 'Yes', 'scique8op1'),
('scique8', 'NO', 'scique8op2'),
('scique9', 'Yes', 'scique9op1'),
('scique9', 'No', 'scique9op2'),
('scique10', 'Yes', 'scique10op1'),
('scique10', 'No', 'scique10op2'),
('comque1', 'No', 'comque1op2'),
('comque1', 'Yes', 'comque1op1'),
('comque2', 'No', 'comque2op2'),
('comque2', 'Yes', 'comque2op1'),
('comque3', 'No', 'comque3op2'),
('comque3', 'Yes', 'comque3op1'),
('comque4', 'NO', 'comque4op2'),
('comque4', 'Yes', 'comque4op1'),
('comque5', 'Yes', 'comque5op1'),
('comque5', 'No', 'comque5op2'),
('comque6', 'No', 'comque6op2'),
('comque6', 'Yes', 'comque6op1'),
('comque7', 'No', 'comque7op2'),
('comque7', 'Yes', 'comque7op1'),
('comque8', 'No', 'comque8op2'),
('comque8', 'Yes', 'comque8op1'),
('comque9', 'Yes', 'comque9op1'),
('comque9', 'NO', 'comque9op2'),
('comque10', 'No', 'comque10op2'),
('comque10', 'Yes', 'comque10op1'),
('artsque1', 'No', 'artsque1op2'),
('artsque1', 'Yes', 'artsque1op1'),
('artsque2', 'No', 'artsque2op2'),
('artsque2', 'Yes', 'artsque2op1'),
('artsque3', 'No', 'artsque3op2'),
('artsque3', 'Yes', 'artsque3op1'),
('artsque4', 'NO', 'artsque4op2'),
('artsque4', 'Yes', 'artsque4op1'),
('artsque5', 'Yes', 'artsque5op1'),
('artsque5', 'No', 'artsque5op2'),
('artsque6', 'No', 'artsque6op2'),
('artsque6', 'Yes', 'artsque6op1'),
('artsque7', 'No', 'artsque7op2'),
('artsque7', 'Yes', 'artsque7op1'),
('artsque8', 'No', 'artsque8op2'),
('artsque8', 'Yes', 'dcdomque8op1'),
('artsque9', 'Yes', 'artsque9op1'),
('artsque9', 'NO', 'artsque9op2'),
('artsque10', 'No', 'artsque10op2'),
('artsque10', 'Yes', 'artsque10op1');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5b13ed30cd71f', '5b13ed3a6e006', 'dbjb', 4, 1),
('5b13ed6bb8bcd', '5b13ed72489d8', 'dvsd', 4, 1),
('science', 'scique1', 'Are you curious?', 2, 1),
('science', 'scique2', 'Are you practical?', 2, 2),
('science', 'scique3', 'Are you scientific?', 2, 3),
('science', 'scique4', 'Are you athletic?', 2, 4),
('science', 'scique5', 'Are you precise?', 2, 5),
('science', 'scique6', 'Do you like to investigate?', 2, 6),
('science', 'scique7', 'Are you observant?', 2, 7),
('science', 'scique8', 'Are you able to operate tools and machinary?', 2, 8),
('science', 'scique9', 'Can you play a sport?', 2, 9),
('science', 'scique10', 'Can you solve math problems?', 2, 10),
('commerce', 'comque1', 'Are you effecient?', 2, 1),
('commerce', 'comque2', 'Are you assertive?', 2, 2),
('commerce', 'comque3', 'Can you do lot of paperwork in short time?', 2, 3),
('commerce', 'comque4', 'Are you methodical?', 2, 4),
('commerce', 'comque5', 'Are you well groomed?', 2, 5),
('commerce', 'comque6', 'Are you persuasive?', 2, 6),
('commerce', 'comque7', 'Can you sell things or promote ideas?', 2, 7),
('commerce', 'comque8', 'Can you write useful business letters?', 2, 8),
('commerce', 'comque9', 'Do you like to work with numbers?', 2, 9),
('commerce', 'comque10', 'Can you keep accurate records?', 2, 10),
('arts', 'artsque1', 'Are you creative?', 2, 1),
('arts', 'artsque2', 'Are you imaginative?', 2, 2),
('arts', 'artsque3', 'Do you like to do volunteer service?', 2, 3),
('arts', 'artsque4', 'Do you like to read fiction, plays and poetry?', 2, 4),
('arts', 'artsque5', 'Can you sketch draw or paint?', 2, 5),
('arts', 'artsque6', 'Do you like to write/read poems?', 2, 6),
('arts', 'artsque7', 'Do you like story writing?', 2, 7),
('arts', 'artsque8', 'Are you intuitive?', 2, 8),
('arts', 'artsque9', 'Can you design fashion or interior?', 2, 9),
('arts', 'artsque10', 'Can you mediate disputes?', 2, 10);


-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `Yes` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `Yes`, `No`, `total`, `date`) VALUES
('science', 'Science', 3, 1, 10, '2018-06-03 16:46:56'),
('commerce', 'Commerce', 3, 1, 10, '2018-06-03 17:02:22'),
('arts', 'Arts', 3, 1, 10, '2018-06-03 18:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('pinky@gmail.com', 30, '2018-06-03 16:57:45'),
('priyanka@gmail.com', 22, '2018-06-03 16:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--


--
-- Indexes for dumped tables
CREATE TABLE `appointment` (
  `appId` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `appSymptom` varchar(100) NOT NULL,
  `appComment` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `email`, `scheduleId`, `appSymptom`, `appComment`, `status`) VALUES
(86,'abc@exam.in', 40, 'abc', 'abc', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `counselor`
--

CREATE TABLE `counselor` (
  `iccounselor` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `counselorId` int(3) NOT NULL,
  `counselorFirstName` varchar(50) NOT NULL,
  `counselorLastName` varchar(50) NOT NULL,
  `counselorAddress` varchar(100) NOT NULL,
  `counselorPhone` varchar(15) NOT NULL,
  `counselorEmail` varchar(20) NOT NULL,
  `counselorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counselor`
--

INSERT INTO `counselor` (`iccounselor`, `password`, `counselorId`, `counselorFirstName`, `counselorLastName`, `counselorAddress`, `counselorPhone`, `counselorEmail`, `counselorDOB`) VALUES
(123456789, '123', 123, 'counsellor', 'xyz', 'mumbai', '0173567758', 'xyzcounsellor@gmail.com', '1990-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `counselorschedule`
--

CREATE TABLE `counselorschedule` (
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `scheduleDay` varchar(15) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counselorschedule`
--

INSERT INTO `counselorschedule` (`scheduleId`, `scheduleDate`, `scheduleDay`, `startTime`, `endTime`, `bookAvail`) VALUES
(40, '2015-12-13', 'Sunday', '09:00:00', '10:00:00', 'notavail'),
(41, '2015-12-13', 'Sunday', '10:00:00', '11:00:00', 'available'),
(42, '2015-12-13', 'Sunday', '11:00:00', '12:00:00', 'available'),
(43, '2015-12-14', 'Monday', '11:00:00', '12:00:00', 'available'),
(44, '2015-12-13', 'Sunday', '01:00:00', '02:00:00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `school` varchar(20) NOT NULL,
  `studentMaritialStatus` varchar(10) NOT NULL,
  `studentDOB` date NOT NULL,
  `studentGender` varchar(10) NOT NULL,
  `studentAddress` varchar(100) NOT NULL,
  `studentPhone` varchar(15) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `password`, `name`, `school`, `studentMaritialStatus`, `studentDOB`, `studentGender`, `studentAddress`, `studentPhone`, `userid`) VALUES
('abc@exam.in', '123', 'Mohd', 'Mazlan', 'single', '1992-05-17', 'male', 'NO 153 BLOK MURNI\r\nKOLEJ CANSELOR UNIVERSITI PUTRA MALAYSIA', '173567758', '23114');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `email` (`email`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`iccounselor`);

--
-- Indexes for table `counselorschedule`
--
ALTER TABLE `counselorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `counselorschedule`
--
ALTER TABLE `counselorschedule`
  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_7` FOREIGN KEY (`email`) REFERENCES `student` (`email`),
  ADD CONSTRAINT `appointment_ibfk_6` FOREIGN KEY (`scheduleId`) REFERENCES `counselorschedule` (`scheduleId`);
COMMIT;

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `student`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
