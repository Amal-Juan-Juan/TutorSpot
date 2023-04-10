-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 02:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `tutorid` int(10) NOT NULL,
  `tutormail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`coursename`, `tutorname`, `duration`, `tutorid`, `tutormail`) VALUES
('ISM', 'Aadharsh', '20Hr', 1001, 'alappattsaadharsh@gmail.com');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `logint`
--

CREATE TABLE `logint` (
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `completed` varchar(10) NOT NULL DEFAULT 'na',
  `ngo` varchar(20) NOT NULL DEFAULT 'na'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logint`
--

INSERT INTO `logint` (`email`, `username`, `password`, `completed`, `ngo`) VALUES
('alappattsaadharsh@gmail.com', 'Aadharsh', '1234', 'completed', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `coursename` varchar(30) NOT NULL,
  `tutorname` varchar(30) NOT NULL,
  `filename` varchar(60) NOT NULL,
  `tutorid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`coursename`, `tutorname`, `filename`, `tutorid`) VALUES
('Microprocessor', 'Gautham', 'MICRO.pdf', 1001),
('PDC', 'Prasanth', 'PDC.pdf', 3001),
('ISM', 'Selvi', '20BCE0562 SPANISH.pdf', 40003);

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ORG_EMAIL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `email`, `phone`, `ORG_EMAIL`) VALUES
(2, 'Gautham Shastry', 'gautham@gmail.com', '9886732571', 'hope@gmail.com'),
(3, 'Narayan Prakash\r\n', 'narayan@yahoo.com', '6254819264', NULL),
(4, 'Suma P', 'suma@gmail.com\r\n', '9834261827', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_registration`
--

CREATE TABLE `ngo_registration` (
  `id` int(11) NOT NULL,
  `ngo_name` varchar(50) NOT NULL,
  `cord` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `no_stud` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `application` varchar(500) DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ngo_registration`
--

INSERT INTO `ngo_registration` (`id`, `ngo_name`, `cord`, `email`, `phone`, `no_stud`, `age`, `application`, `STATUS`) VALUES
(4, 'Hope Foundation', 'Bhavna Choudhury', 'hope@gmail.com', '8088885354', '12', '8', 'We would like to partner with tutorspot to educate our students and provide them opportunities for a bright futute!', 'Accepted'),
(5, 'Anokha ', 'Amith', 'az@email.com', '8754672392', '20', '8', 'We want to educate or students.', NULL),
(6, 'Light Foundation', 'Akshata ', 'y@email.com', '8088885354', '20', '8', 'jdjdk', NULL),
(7, 'Heart Foundation', 'Shreya', 'agfh@gmail.com', '9823618462', '20', '12', 'We would love this opportunity to collaborate!', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_students`
--

CREATE TABLE `ngo_students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(255) NOT NULL,
  `class` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ngo_students`
--

INSERT INTO `ngo_students` (`id`, `name`, `age`, `class`, `gender`, `location`) VALUES
(2, 'Dhathri B        ', '12', '5', 'Female', 'Vellore'),
(4, 'ganga', '8', '4', 'Female', 'Bangalore'),
(5, 'Chandra', '6', '3', 'Male', 'Kerala'),
(6, 'sumukh', '7', '6', 'Male', 'Vellore'),
(7, 'Ram', '12', '8', 'Male', 'Vellore'),
(26, 'Sumana', '6', '3', 'Female', 'Vellore'),
(30, '', '', '', '', ''),
(31, 'Akshata ', '20', '2024', 'Female', 'Vellore');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`email`, `name`, `age`, `gender`, `phone`, `yearOfStudy`, `location`, `university`, `ngo`) VALUES
('abc@gmail.com', 'Vinita Kishore Vaswani Rajpal', 20, 'female', '8591121312', '2024', 'Mumbai', 'VIT', 'na'),
('anna@gmail.com', 'Anna Jai Joseph', 20, 'female', '8591121312', '2024', 'Vellore', 'VIT', 'na'),
('vinita@gmail.com', 'Vinita Kishore Vaswani Rajpal', 20, 'female', '8591121312', '2025', 'Mumbai', 'VIT', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `tutordetails`
--

CREATE TABLE `tutordetails` (
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `experience` int(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `university` varchar(40) NOT NULL,
  `ngo` varchar(20) NOT NULL DEFAULT 'na'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutordetails`
--

INSERT INTO `tutordetails` (`email`, `username`, `age`, `gender`, `phone`, `experience`, `location`, `university`, `ngo`) VALUES
('alappattsaadharsh@gmail.com', 'Aadharsh', 20, 'male', '9994468003', 0, 'Coimbatore', 'VIT', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_students`
--
ALTER TABLE `ngo_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ngo_students`
--
ALTER TABLE `ngo_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
