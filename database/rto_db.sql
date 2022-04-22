-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2022 at 12:51 AM
-- Server version: 8.0.20
-- PHP Version: 7.4.29
-- Authur: Vinay Gawade.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `aadhar` char(12) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `aadhar` char(12) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` char(10) NOT NULL,
  `mail_id` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `aadhar` char(12) NOT NULL,
  `cdate` date NOT NULL,
  `cdesc` text NOT NULL,
  `cid` int NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `dl`
--

CREATE TABLE `dl` (
  `aadhar` char(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cov` varchar(20) NOT NULL,
  `edate` date NOT NULL,
  `eid` varchar(10) NOT NULL,
  `dl_id` int NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `dl_status` int NOT NULL DEFAULT '0',
  `dl_issue_date` date DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

CREATE TABLE `inspector` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privilege` varchar(5) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int NOT NULL,
  `aadhar` char(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `license_no` varchar(20) NOT NULL,
  `cov` varchar(20) NOT NULL,
  `license_issue_date` date NOT NULL,
  `license_expiry_date` date NOT NULL,
  `mail_id` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `llr`
--

CREATE TABLE `llr` (
  `aadhar` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cov` varchar(20) NOT NULL,
  `edate` date NOT NULL,
  `eid` varchar(10) NOT NULL,
  `llr_id` int NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `llr_status` int NOT NULL DEFAULT '0',
  `llr_issue_date` text
);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `district` varchar(30) NOT NULL,
  `rto_address` varchar(200) NOT NULL
);

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`district`, `rto_address`) VALUES
('Sindhudurg', 'Oros');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `addhar` char(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cov` varchar(30) NOT NULL,
  `model` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `rdate` date NOT NULL,
  `r_id` int NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `reg_status` int NOT NULL DEFAULT '0',
  `reg_issue_date` text,
  `vno` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reg_expiry_date` text
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `complaint_ibfk_1` (`aadhar`);

--
-- Indexes for table `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`dl_id`),
  ADD KEY `Foreign key` (`aadhar`);

--
-- Indexes for table `inspector`
--
ALTER TABLE `inspector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`,`aadhar`),
  ADD KEY `license_ibfk_1` (`aadhar`);

--
-- Indexes for table `llr`
--
ALTER TABLE `llr`
  ADD PRIMARY KEY (`llr_id`),
  ADD KEY `foregin key` (`aadhar`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`district`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `Foreign` (`addhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dl`
--
ALTER TABLE `dl`
  MODIFY `dl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspector`
--
ALTER TABLE `inspector`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `llr`
--
ALTER TABLE `llr`
  MODIFY `llr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `r_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`aadhar`) REFERENCES `citizen` (`aadhar`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`aadhar`) REFERENCES `citizen` (`aadhar`);

--
-- Constraints for table `dl`
--
ALTER TABLE `dl`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`aadhar`) REFERENCES `address` (`aadhar`);

--
-- Constraints for table `license`
--
ALTER TABLE `license`
  ADD CONSTRAINT `license_ibfk_1` FOREIGN KEY (`aadhar`) REFERENCES `citizen` (`aadhar`);

--
-- Constraints for table `llr`
--
ALTER TABLE `llr`
  ADD CONSTRAINT `foregin key` FOREIGN KEY (`aadhar`) REFERENCES `address` (`aadhar`);

--
-- Constraints for table `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `Foreign` FOREIGN KEY (`addhar`) REFERENCES `address` (`aadhar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
