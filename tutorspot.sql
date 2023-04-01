-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 08:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursereg`
--

CREATE TABLE `coursereg` (
  `coursename` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tutorname` varchar(30) NOT NULL,
  `tutorid` int(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursereg`
--

INSERT INTO `coursereg` (`coursename`, `username`, `tutorname`, `tutorid`, `email`) VALUES
('Microprocessor', 'abc', 'Gautham', 1001, 'abc@gmail.com'),
('ISM', 'abc', 'Selvi', 5001, 'abc@gmail.com'),
('PDC', 'axcz', 'Prasanth', 3001, 'qwhj@asdj'),
('Software Engineering', 'qwerty', 'Shiva', 2001, 'qwerty@gamil.com'),
('PDC', 'qwerty', 'Prasanth', 3001, 'qwerty@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `coursename` varchar(30) NOT NULL,
  `tutorname` varchar(30) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `tutorid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`coursename`, `tutorname`, `duration`, `tutorid`) VALUES
('Software Engineering', 'Shiva', '30Hr', 2001),
('Microprocessor', 'Gautham', '30Hr', 1001),
('PDC', 'Prasanth', '30Hr', 3001),
('ISM', 'Selvi', '20Hr', 5001);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`) VALUES
('abc@gmail.com', 'abc', 'abc'),
('ads@gmail.com', 'adc', '12345'),
('abcd@gmail.com', 'abcd', '123445'),
('alappattsaadharsh@gmail.com', 'aads', '12334'),
('aadharsh.s2020@vitstudent.ac.i', 'adf', '213'),
('adkj@gka', 'sjkd', '1234'),
('lkas@dkjq', 'kjawd', '1234'),
('qwhj@asdj', 'axcz', '1234'),
('qwerty@gamil.com', 'qwerty', '12345'),
('karthik@gmail.com', 'karthik', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `coursename` varchar(30) NOT NULL,
  `tutorname` varchar(30) NOT NULL,
  `filename` varchar(60) NOT NULL,
  `tutorid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`coursename`, `tutorname`, `filename`, `tutorid`) VALUES
('Microprocessor', 'Gautham', 'MICRO.pdf', 1001),
('PDC', 'Prasanth', 'PDC.pdf', 3001);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
