-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2025 at 06:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclesys`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `VID` int(255) NOT NULL,
  `PID` int(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `method` decimal(65,0) NOT NULL,
  `date` date NOT NULL,
  `validated_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `proof_ID` int(255) NOT NULL,
  `violation_iD` int(255) NOT NULL,
  `picture_violation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `numID` int(255) NOT NULL,
  `kldMail` varchar(255) NOT NULL,
  `user_type` int(2) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `validation_picture`
--

CREATE TABLE `validation_picture` (
  `VID` int(255) NOT NULL,
  `VPID` int(255) NOT NULL,
  `picture_vehicle` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `pic_OR` varchar(255) NOT NULL,
  `pic_CR` varchar(255) NOT NULL,
  `valid_ID` varchar(255) NOT NULL,
  `driver_license` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `ID_FK` int(255) NOT NULL,
  `VID` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `plate_number` varchar(252) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `vehicle_category` varchar(255) NOT NULL,
  `year_model` int(255) NOT NULL,
  `date_purchase` date NOT NULL,
  `vehicle_OR` varchar(255) NOT NULL,
  `vehicle_CR` varchar(255) NOT NULL,
  `driver_license` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `violation`
--

CREATE TABLE `violation` (
  `ID` int(255) NOT NULL,
  `VID` int(255) NOT NULL,
  `violation_ID` int(255) NOT NULL,
  `description` text NOT NULL,
  `penalty_sum` decimal(65,0) NOT NULL,
  `date` date NOT NULL,
  `validated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `VID` (`VID`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`proof_ID`),
  ADD KEY `violation_iD` (`violation_iD`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `validation_picture`
--
ALTER TABLE `validation_picture`
  ADD PRIMARY KEY (`VPID`),
  ADD KEY `VID` (`VID`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`VID`),
  ADD KEY `ID_FK` (`ID_FK`);

--
-- Indexes for table `violation`
--
ALTER TABLE `violation`
  ADD PRIMARY KEY (`violation_ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `violation_ibfk_1` (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `proof_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `VID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `violation_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`VID`) REFERENCES `vehicle_info` (`VID`);

--
-- Constraints for table `proof`
--
ALTER TABLE `proof`
  ADD CONSTRAINT `proof_ibfk_1` FOREIGN KEY (`violation_iD`) REFERENCES `violation` (`violation_ID`);

--
-- Constraints for table `validation_picture`
--
ALTER TABLE `validation_picture`
  ADD CONSTRAINT `validation_picture_ibfk_1` FOREIGN KEY (`VID`) REFERENCES `vehicle_info` (`VID`);

--
-- Constraints for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD CONSTRAINT `vehicle_info_ibfk_1` FOREIGN KEY (`ID_FK`) REFERENCES `registration` (`ID`);

--
-- Constraints for table `violation`
--
ALTER TABLE `violation`
  ADD CONSTRAINT `violation_ibfk_1` FOREIGN KEY (`VID`) REFERENCES `vehicle_info` (`VID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
