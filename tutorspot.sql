-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 05:12 AM
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
('PDC', 'qwerty', 'Prasanth', 3001, 'qwerty@gamil.com'),
('JavaProgramming', 'abc', '', 0, 'abc@gmail.com'),
('Software Engineering', 'abc', 'Shiva', 2001, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `coursename` varchar(30) NOT NULL,
  `tutorname` varchar(30) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `tutorid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`coursename`, `tutorname`, `duration`, `tutorid`) VALUES
('Software Engineering', 'Shiva', '30Hr', 2001),
('Microprocessor', 'Gautham', '30Hr', 1001),
('PDC', 'Prasanth', '30Hr', 3001),
('ISM', 'Selvi', '20Hr', 5001),
('ISM', 'Selvi', '20Hr', 40003),
('ISM', 'Selvi', '20Hr', 40003),
('JavaProgramming', '', '', 0);

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
('tutor@gmail.com', 'newTutor', '123', 'na', 'na'),
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
('aadharsh.s2020@vitstudent.ac.i', 'adc', '1234', 'na', 'na'),
('alappattsaadharsh@gmail.com', 'Aadharsh', '1234', 'completed', 'na'),
('qwe@gmail.com', 'qwe', '1234', 'completed', 'na'),
('tutor@gmail.com', 'tutor', '123', 'completed', 'na');

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
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `temail` varchar(40) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `sstart` date NOT NULL DEFAULT current_timestamp(),
  `stime` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`temail`, `tname`, `code`, `topic`, `id`, `sstart`, `stime`) VALUES
('alappattsaadharsh@gmail.com', 'Aadarsh', 'CSE2006', 'ALP for 8086', 17, '2023-04-15', '06:40:00'),
('tutor@gmail.com', 'Anna', 'CSE2006', 'ALP for 8086', 18, '2023-04-27', '19:47:00');

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
(7, 'Heart Foundation', 'Shreya', 'agfh@gmail.com', '9823618462', '20', '12', 'We would love this opportunity to collaborate!', NULL),
(8, 'kjvsbdk', 'akshata', 'annna@gmail.com', '8591121312', '20', '20', 'hvjhvj', NULL),
(9, 'hope', 'Vinita Kishore Vaswani Rajpal', 'a@email.com', '8591121312', '12', '12', 'teggh', NULL);

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
('abc@gmail.com', 'Vinita Kishore Vaswani Rajpal', 20, 'female', '8591121312', '2024', 'Vellore', 'VIT', 'na'),
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
('alappattsaadharsh@gmail.com', 'Aadharsh', 20, 'male', '9994468003', 0, 'Coimbatore', 'VIT', 'na'),
('alappattsaadharsh@gmail.com', 'Aadharsh', 20, 'male', '8591121312', 3, 'Mumbai', 'VJTI', 'na'),
('qwe@gmail.com', 'qwe', 20, 'male', '6887', 0, 'Coimbatore', 'VIT', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'ram_singh@gmail.com', 'ramsingh');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_created`) VALUES
(25, 'Software Engineering', '2023-04-08 19:30:48'),
(26, 'Data Visualization', '2023-04-08 19:31:06'),
(65, 'Machine Learning', '2023-04-08 19:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `examinee_tbl`
--

CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL,
  `exmne_fullname` varchar(1000) NOT NULL,
  `exmne_course` varchar(1000) NOT NULL,
  `exmne_gender` varchar(1000) NOT NULL,
  `exmne_birthdate` varchar(1000) NOT NULL,
  `exmne_year_level` varchar(1000) NOT NULL,
  `exmne_email` varchar(1000) NOT NULL,
  `exmne_password` varchar(1000) NOT NULL,
  `exmne_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinee_tbl`
--

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_fullname`, `exmne_course`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(4, 'Madhusmita Mukherjee', '26', 'Female', '2002-07-13', 'third year', 'mm@gmail.com', 'madhusmita', 'active'),
(5, 'Saloni A', '25', 'female', '2003-03-14', 'second year', 'sal@gmail.com', 'saloni', 'active'),
(7, 'Maddy', '26', 'female', '2001-11-25', 'second year', 'maddy@gmail.com', 'maddy', 'active'),
(9, 'Akshata', '26', 'female', '2002-02-21', 'third year', 'aks@gmail.com', 'akshata', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(316, 8, 12, 18, 'Programmable Lift Computer', 'new', '2023-04-05 03:18:35'),
(317, 8, 12, 14, 'Operating System', 'new', '2023-04-05 03:18:35'),
(318, 8, 12, 20, 'Einstein oscillation', 'new', '2023-04-05 03:18:35'),
(319, 8, 12, 21, 'Temporary file', 'new', '2023-04-05 03:18:35'),
(320, 8, 12, 25, 'Diode, inverted, pointer', 'new', '2023-04-05 03:18:35'),
(321, 4, 25, 31, '2', 'new', '2023-04-04 17:15:33'),
(322, 4, 25, 32, '0', 'new', '2023-04-04 17:15:33'),
(323, 4, 26, 33, '2', 'new', '2023-04-06 07:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_attempt`
--

INSERT INTO `exam_attempt` (`examat_id`, `exmne_id`, `exam_id`, `examat_status`) VALUES
(51, 6, 12, 'used'),
(52, 4, 11, 'used'),
(53, 4, 12, 'used'),
(54, 8, 12, 'used'),
(55, 4, 25, 'used'),
(56, 4, 26, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tbl`
--

CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(1000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`) VALUES
(31, 25, '1+2', '12', '2', '3', '4', '3', 'active'),
(32, 25, '4/2', '2', '1.5', '1', '0', '2', 'active'),
(33, 26, '1+2', '1', '2', '3', '4', '3', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`ex_id`, `cou_id`, `ex_title`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`) VALUES
(24, 26, 'Quiz-1', '10', 5, 'aaa', '2023-04-02 06:11:39'),
(25, 26, 'Sample Quiz', '20', 5, 'All the best', '2023-04-04 17:06:58'),
(26, 26, 'demo quiz', '10', 3, 'atb', '2023-04-06 07:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(9, 8, 'Anonymous', 'dfsdf', 'January 05, 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `logint`
--
ALTER TABLE `logint`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  ADD PRIMARY KEY (`exmne_id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  ADD PRIMARY KEY (`eqt_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  ADD PRIMARY KEY (`fb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ngo_registration`
--
ALTER TABLE `ngo_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ngo_students`
--
ALTER TABLE `ngo_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
