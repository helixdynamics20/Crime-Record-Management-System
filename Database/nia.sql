-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 06:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nia`
--

-- --------------------------------------------------------

--
-- Table structure for table `accused`
--

CREATE TABLE `accused` (
  `accused_id` int(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `age` int(3) NOT NULL,
  `status` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `locked_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accused`
--

INSERT INTO `accused` (`accused_id`, `name`, `father_name`, `gender`, `age`, `status`, `contact`, `street`, `city`, `state`, `locked_at`) VALUES
(3, 'Vishal Kumar', 'Ram Kumar ', 'M', 20, 'Jail', 962894580, 'Mall Road', 'Kanpur', 'Uttar Pradesh', '2019-11-26 16:21:42'),
(4, 'Shivam Singh', 'Manoj Singh', 'M', 30, 'Bail', 983456725, 'Bithoor', 'kanpur', 'Uttar Pradesh', '2019-11-26 16:27:34'),
(5, 'Kishan Katiyar', 'Shyam Katiyar', 'M', 40, 'Jail', 12574646, 'Jajmau', 'varanasi', 'Uttar Pradesh', '2019-11-26 16:31:07'),
(6, 'Rishab Singh', 'Gopal Singh', 'M', 33, 'Jail', 98465842, 'Budh Naghar', 'Mumbai', 'Maharashtra', '2019-11-26 16:36:37'),
(7, 'Shivangi Sarine', 'Ramu Sarine', 'F', 26, 'Bail', 868754256, 'Sangam Vihar', 'Mirzapur', 'Uttar pradesh', '2019-11-26 16:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `loged_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `loged_at`) VALUES
(1, 'vishal2612304@gmail.com', '1234', '2019-11-12 18:34:55'),
(2, 'akhilesh@gmail.com', '208024', '2019-11-26 16:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `case_id` int(11) NOT NULL,
  `io_id` int(11) NOT NULL,
  `details` varchar(100) NOT NULL,
  `fir_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`case_id`, `io_id`, `details`, `fir_number`) VALUES
(1, 1, 'Investigating', 2468),
(2, 2, 'Investigating', 13579);

-- --------------------------------------------------------

--
-- Table structure for table `caseoutcome`
--

CREATE TABLE `caseoutcome` (
  `case_outcome_id` int(10) NOT NULL,
  `case_id` int(10) NOT NULL,
  `section_of_law` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseoutcome`
--

INSERT INTO `caseoutcome` (`case_outcome_id`, `case_id`, `section_of_law`, `status`, `details`) VALUES
(1, 1, '377A', 'Jail', 'Completed'),
(2, 2, '45A', 'Jail', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `fir_num` int(30) NOT NULL,
  `petitioner_name` varchar(50) NOT NULL,
  `victim_name` varchar(50) NOT NULL,
  `date_filled` date NOT NULL,
  `time_filled` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_incident` date NOT NULL,
  `time_incident` time NOT NULL,
  `place_incident` varchar(40) NOT NULL,
  `accused_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`fir_num`, `petitioner_name`, `victim_name`, `date_filled`, `time_filled`, `date_incident`, `time_incident`, `place_incident`, `accused_name`) VALUES
(2468, 'Kishan Singh', 'Vishnu Chauhan', '2019-11-04', '2019-11-26 17:16:45', '2019-11-01', '10:09:00', 'Kanpur', 'Vishal Kumar'),
(13579, 'Shivangi Sarine ', 'Shivangi Sarine ', '2019-10-02', '2019-11-26 17:16:45', '2019-06-06', '11:09:00', 'Bithoor', 'Shivam Singh');

-- --------------------------------------------------------

--
-- Table structure for table `investigate`
--

CREATE TABLE `investigate` (
  `investigation_id` int(10) NOT NULL,
  `case_id` int(10) NOT NULL,
  `investigation_officer` varchar(40) NOT NULL,
  `date_of_start` date NOT NULL,
  `date_of_end` date NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investigate`
--

INSERT INTO `investigate` (`investigation_id`, `case_id`, `investigation_officer`, `date_of_start`, `date_of_end`, `details`) VALUES
(2, 1, 'Vishal Kumar', '2019-06-05', '2019-08-24', 'Investigation completed'),
(3, 2, 'Akhilesh Tiwari', '2019-08-20', '2019-08-21', 'Investigation complited');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `loged_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `loged_at`) VALUES
(1, 'vishal2612304@gmail.com', 'vishal', '0000-00-00 00:00:00'),
(5, 'sharad@gmail.com', '12345', '0000-00-00 00:00:00'),
(7, 'akhilesh@gmail.com', '208024', '2019-11-27 00:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `io_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` int(15) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `date_of_appointment` date NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`io_id`, `name`, `father_name`, `gender`, `age`, `contact`, `rank`, `date_of_appointment`, `street`, `city`, `state`, `email`, `password`) VALUES
(1, 'Vishal Kumar', 'Manoj ', 'M', 21, 962894580, 'Inspector', '2019-11-10', 'Maal Road', 'kanpur', 'Uttar Pradesh', 'vishal2612304@gmail.com', '1234'),
(2, 'Akhilesh Tiwari', 'Ram Kumar ', 'M', 20, 962894800, 'IPS', '2019-11-05', 'Bithoor', 'kanpur', 'Uttar Pradesh', 'akhilesh@gmail.com', '208024');

-- --------------------------------------------------------

--
-- Table structure for table `petitioner`
--

CREATE TABLE `petitioner` (
  `petitioner_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `filed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petitioner`
--

INSERT INTO `petitioner` (`petitioner_id`, `name`, `father_name`, `gender`, `age`, `contact`, `street`, `city`, `state`, `filed_at`) VALUES
(1, 'Kishan Katiyar', 'Kuma', 'M', 33, 98465842, 'Mall Road', 'kanpur', 'Uttar Pradesh', '2019-11-27 05:40:26'),
(2, 'Shivangi Sarine', 'Ram Sarine', 'F', 26, 95344215, 'Bithoor', 'Mirzapur', 'Uttar pradesh', '2019-11-26 16:50:06'),
(26, 'VISHAL KUMAR', 'Manoj Singh', 'M', 23, 9628945800, 'St. Jeorge Preparatory School Sarnath', 'varanasi', 'Uttar Pradesh', '2019-11-27 05:00:04'),
(29, 'akhilesh', 'Manoj Singh', 'M', 50, 96289458, 'St. Jeorge Preparatory School Sarnath', 'varanasi', 'Uttar Pradesh', '2019-11-27 06:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `sectionoflaw`
--

CREATE TABLE `sectionoflaw` (
  `sol_id` int(10) NOT NULL,
  `section_of_law` varchar(20) NOT NULL,
  `sentence` varchar(20) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectionoflaw`
--

INSERT INTO `sectionoflaw` (`sol_id`, `section_of_law`, `sentence`, `detail`) VALUES
(1, '377A', 'Jail', 'Rape'),
(2, '45A', 'Jail', 'Murdered');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `victim_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` int(15) NOT NULL,
  `situation` varchar(100) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `accident at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`victim_id`, `name`, `father_name`, `gender`, `age`, `contact`, `situation`, `street`, `city`, `state`, `accident at`) VALUES
(1, 'Kishan Katiyar', 'Manoj Kumar', 'M', 33, 98465842, 'Injured', 'Maal Road', 'kanpur', 'Uttar Pradesh', '2019-11-26 17:00:42'),
(2, 'Shivangi Sarine', 'Ram Sarine', 'F', 26, 65645115, 'Injured', 'Sangam Vihar', 'Mirzapur', 'Uttar pradesh', '2019-11-26 17:00:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accused`
--
ALTER TABLE `accused`
  ADD PRIMARY KEY (`accused_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `caseoutcome`
--
ALTER TABLE `caseoutcome`
  ADD PRIMARY KEY (`case_outcome_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`fir_num`);

--
-- Indexes for table `investigate`
--
ALTER TABLE `investigate`
  ADD PRIMARY KEY (`investigation_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`io_id`);

--
-- Indexes for table `petitioner`
--
ALTER TABLE `petitioner`
  ADD PRIMARY KEY (`petitioner_id`);

--
-- Indexes for table `sectionoflaw`
--
ALTER TABLE `sectionoflaw`
  ADD PRIMARY KEY (`sol_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`victim_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accused`
--
ALTER TABLE `accused`
  MODIFY `accused_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `caseoutcome`
--
ALTER TABLE `caseoutcome`
  MODIFY `case_outcome_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investigate`
--
ALTER TABLE `investigate`
  MODIFY `investigation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `io_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petitioner`
--
ALTER TABLE `petitioner`
  MODIFY `petitioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sectionoflaw`
--
ALTER TABLE `sectionoflaw`
  MODIFY `sol_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `victim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
