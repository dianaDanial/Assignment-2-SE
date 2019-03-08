-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: March 7, 2018 at 02:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highEd`
--
-- --------------------------------------------------------

--
-- Table structure for table `SASadmin`
--

CREATE TABLE `SASadmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UniAdmin'
--

INSERT INTO `SASadmin` (`username`, `password`, `name`, `email`) VALUES
('teresa', '12345', 'Teresa Miller','teresa@gmail.com' ),
('paul', '12345', 'Paul Frank', 'paul@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `UniAdmin`
--

CREATE TABLE `uniAdmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UniAdmin'
--

INSERT INTO `uniAdmin` (`username`, `password`, `name`, `email`) VALUES
('amber', '12345', 'Amber Gold','amber@gmail.com' ),
('ben', 'ben', 'Benjamin Gardner', 'ben@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `IDtype` varchar(30) NOT NULL,
  `IDnumber` int(20) NOT NULL,
  `mobileNo` varchar(50) NOT NULL,
  `dateOfBirth`date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`username`, `password`, `name`, `email`, `IDtype`, `IDnumber`,`mobileNo`,`dateOfBirth`) VALUES
('blair', 'blair', 'Blair Waldorf', 'blair@gmail.com', 'passport',311195851, '01912651188','1999-02-12'),
('adam', 'adam', 'Ahmad Adam', 'adam@gmail.com', 'IC',981117081561, '0123334861','1998-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualificationID` int(20) NOT NULL,
  `qualificationName` varchar(50) NOT NULL,
  `minimumScore` int(10) NOT NULL,
  `maximumScore` int(10) NOT NULL,
  `resultCalcDescription` varchar(100) NOT NULL,
  `gradeList` varchar(100) NOT NULL,
  `SASadmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualificationID`,`qualificationName`, `minimumScore`, `maximumScore`, `resultCalcDescription`,`gradeList`,`SASadmin`) VALUES
(101, 'A-Levels', 0.0, 5.0, 'Average of best 3 Subjects','A - 5 points, B- 4 points, C - 3 points, D - 2 points, A - 1 points','paul'),
(102, 'STPM', 0.0, 4.0, 'Average of best 3 Subjects','A (4.00), A- (3.67), B+ (3.33), B (3.00), B- (2.67), C+ (2.33), C (2.00), C- (1.67), D+ (1.33), D (1.00), F (0.00)','paul');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `universityID` int(20) NOT NULL,
  `universitName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`universityID`, `universitName`) VALUES
(1,'University of Malaya'),
(2,'University of Victoria');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programmeID`int(20) NOT NULL,
  `programmeName` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `closingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`programmeID`, `programmeName`, `description`, `closingDate`) VALUES
(001, 'Account', ' Accounting is an important part of businesses as it is a means of determining the financial stability of a business.','2019-02-16' ),
(002, 'Business', ' Studying for a business management degree allows you to develop a broad understanding of business organisations.','2019-02-17' );
-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicationID` int(20) NOT NULL,
  `applicationDate` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicationID`, `applicationDate`,`status`) VALUES
(1001,'2019-01-08','Pending'),
(1002,'2019-01-10','Pending');

-- --------------------------------------------------------
--
-- Table structure for table `qualificationObtained`
--

CREATE TABLE `qualificationObtained` (
  `overallScore` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualificationObtained`
--

INSERT INTO `qualificationObtained` (`overallScore`) VALUES
(4.5),
(3.67);

-- --------------------------------------------------------
--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `subjectName`varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `score`int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`subjectName`,`grade`,`score`) VALUES
('Chemistry', 'B+', 76.5);

-- --------------------------------------------------------
--
-- Indexes for table `uniAdmin`
--
ALTER TABLE `uniAdmin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `SASadmin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualificationID`),
  ADD UNIQUE KEY `qualificationID` (`qualificationID`),
  ADD KEY `SASadmin` (`SASadmin`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`universityID`);

--
-- Indexes for table `service`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programmeID`),
  ADD UNIQUE KEY `programmeID` (`programmeID`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`),
  ADD UNIQUE KEY `applicationID` (`applicationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualificationID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `applicationID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `universityID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programmeID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=001;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`SASadmin`) REFERENCES `SASadmin` (`username`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
