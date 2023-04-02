-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 02:01 PM
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
  `password` varchar(20) NOT NULL,
  `completed` varchar(20) NOT NULL DEFAULT 'na',
  `ngo` varchar(40) NOT NULL DEFAULT 'na'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`, `completed`, `ngo`) VALUES
('aadharsh.s2020@vitstudent.ac.i', 'adf', '213', 'na', 'na'),
('abc@gmail.com', 'abc', 'abc', 'completed', 'na'),
('abcd@gmail.com', 'abcd', '123445', 'na', 'na'),
('adkj@gka', 'sjkd', '1234', 'na', 'na'),
('ads@gmail.com', 'adc', '12345', 'na', 'na'),
('alappattsaadharsh@gmail.com', 'aads', '12334', 'na', 'na'),
('anna@gmail.com', 'aNNa', 'anna123', 'completed', 'na'),
('cuhhugkh@gmail.com', 'oonvq', 'L\\`gS$vAZl', 'na', 'Ayuda'),
('dqnzsoyl@gmail.com', 'nlcnv', 'baG;NLpkC|', 'na', 'Ayuda'),
('hhhgcitm@gmail.com', 'oqloc', 'tb\'5OGx!>O', 'na', 'Ayuda'),
('iqneqvvo@gmail.com', 'fcsnv', '`k&G{sm/jN', 'na', 'Ayuda'),
('ixumtaxe@gmail.com', 'mcigh', '%S%5QF~CxU', 'na', 'Ayuda'),
('lipbacqf@gmail.com', 'ednep', '}38*)p)A+Y', 'na', 'Ayuda'),
('lmnchizc@gmail.com', 'qeajh', '!^Ldv#1?z7', 'na', 'Ayuda'),
('pwqougxj@gmail.com', 'orxmm', 'DiaSOF4oNr', 'na', 'Ayuda'),
('tsmxjhzp@gmail.com', 'ucjoz', '\"oil.B&Y<*', 'na', 'Ayuda'),
('vinita@gmail.com', 'vinita24', '12345', 'completed', 'na'),
('womjvrhh@gmail.com', 'itovl', 'x7Y2z;Z*vw', 'na', 'Ayuda');

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

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `email` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `yearOfStudy` varchar(4) NOT NULL,
  `location` varchar(40) NOT NULL,
  `university` varchar(300) NOT NULL,
  `ngo` varchar(40) NOT NULL DEFAULT 'na'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`email`, `name`, `age`, `gender`, `phone`, `yearOfStudy`, `location`, `university`, `ngo`) VALUES
('abc@gmail.com', 'Vinita Kishore Vaswani Rajpal', 20, 'female', '8591121312', '2024', 'Mumbai', 'VIT', 'na'),
('anna@gmail.com', 'Anna Jai Joseph', 20, 'female', '8591121312', '2024', 'Vellore', 'VIT', 'na'),
('vinita@gmail.com', 'Vinita Kishore Vaswani Rajpal', 20, 'female', '8591121312', '2025', 'Mumbai', 'VIT', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
