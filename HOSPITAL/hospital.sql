-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 03:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DOCTOR_ID` int(100) NOT NULL,
  `DOCTOR_NAME` varchar(100) NOT NULL,
  `SPECIALITY` varchar(100) NOT NULL,
  `YEAR_OF_EXP` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DOCTOR_ID`, `DOCTOR_NAME`, `SPECIALITY`, `YEAR_OF_EXP`) VALUES
(1203, 'Aparna', 'Cardiology', 12),
(1203, 'Aparna', 'Cardiology', 12);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `DRUGNAME` varchar(100) NOT NULL,
  `CHEMICALFORMULAE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `NAME` varchar(100) NOT NULL,
  `LASTNAME` varchar(100) NOT NULL,
  `AGE` int(10) NOT NULL,
  `APPOINTMENTDATE` date NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `SYMPTOMS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`NAME`, `LASTNAME`, `AGE`, `APPOINTMENTDATE`, `ADDRESS`, `SYMPTOMS`) VALUES
('Kokila', 'Thottempudi', 19, '2022-12-22', 'Vijayawada', 'Cold'),
('Sowmya', 'Tata', 20, '2022-12-24', 'Hyderabad', 'Bodypains'),
('Kokila', 'Thottempudi', 19, '2022-12-22', 'Vijayawada', 'Cold'),
('Sowmya', 'Tata', 20, '2022-12-24', 'Hyderabad', 'Bodypains');

-- --------------------------------------------------------

--
-- Table structure for table `pharmaceutical company`
--

CREATE TABLE `pharmaceutical company` (
  `PH_NAME` varchar(100) NOT NULL,
  `PH_NO` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `PHARMACY_NAME` varchar(100) NOT NULL,
  `PHARMACY_AREA` varchar(100) NOT NULL,
  `PHARMACY_NO` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
