-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 08:48 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `fac_id` int(16) NOT NULL,
  `degree` text NOT NULL COMMENT 'Ph.D./M.E/B.E./Diploma',
  `subject` text NOT NULL COMMENT 'Course Stream',
  `thesis_title` text,
  `year` year(4) NOT NULL,
  `institute` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`fac_id`, `degree`, `subject`, `thesis_title`, `year`, `institute`) VALUES
(1002, 'Ph.D.', 'Computer Science', 'NA', 2011, 'DMCE'),
(20439, 'M.E.', 'Computer Science', 'Robotics', 2012, 'MIT');

-- --------------------------------------------------------

--
-- Table structure for table `fac_info`
--

CREATE TABLE `fac_info` (
  `fac_id` int(16) UNSIGNED NOT NULL,
  `salut` varchar(4) NOT NULL,
  `fname` varchar(16) NOT NULL,
  `mname` varchar(16) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `occupation` varchar(16) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `join_dt` date DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_info`
--

INSERT INTO `fac_info` (`fac_id`, `salut`, `fname`, `mname`, `lname`, `email`, `occupation`, `pwd`, `gender`, `join_dt`, `image`) VALUES
(1002, 'Mr.', 'A', 'B', 'XYZ', 'abc@gmail.com', 'H.O.D.', '12345678', 'Male', '2016-02-01', 'images/1.jpg'),
(1352, 'Ms.', 'S', 'T', 'XYZ', 'st12@gmail.com', 'Asst. Professor', 'st1234567', 'Female', '2015-06-01', 'images/2.jpg'),
(1621, 'Mr.', 'P', 'Q', 'RST', 'pq12@gmail.com', 'Asst. Professor', 'pq12345', 'Male', '2014-09-01', 'images/1.jpg'),
(16006, 'Mrs.', 'Shila', 'Sumol', 'Jawale', 'shila.jawale@dmce.ac.in', 'Asst. Professor', '12345', 'Female', '2005-06-28', 'images/2.jpg'),
(20439, 'Mr.', 'T', 'J', 'Jenkins', 'tj68@gmail.com', 'Asst.Professor', 'tj123', 'Male', '2014-01-02', 'images/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `fac_id` int(16) NOT NULL,
  `students_name` varchar(512) NOT NULL,
  `project_name` varchar(512) NOT NULL,
  `project_scope` varchar(255) DEFAULT NULL,
  `sw_used` varchar(255) DEFAULT NULL,
  `hw_used` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`fac_id`, `students_name`, `project_name`, `project_scope`, `sw_used`, `hw_used`) VALUES
(20439, '1.ABC\n2.XYZ\n3.PQR', 'IOT based Face recognition System', 'Security Purpose', 'Raspbian,OpenCV', 'Raspberry Pie 3, Camera Module');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `fac_id` int(16) NOT NULL,
  `nat_con` varchar(4) NOT NULL,
  `nat_jour` varchar(4) NOT NULL,
  `in_con` varchar(4) NOT NULL,
  `in_jour` varchar(4) NOT NULL,
  `title` varchar(32) NOT NULL,
  `date_of_pub` date NOT NULL,
  `name_of_pub` varchar(16) NOT NULL,
  `author` varchar(32) NOT NULL,
  `co_author` varchar(32) NOT NULL,
  `impact_factor` varchar(32) NOT NULL,
  `h_index` varchar(16) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `books` varchar(1024) NOT NULL,
  `monographs` varchar(512) NOT NULL,
  `chapters_in_books` varchar(512) NOT NULL,
  `book_edited` varchar(256) NOT NULL,
  `book_with_isbn` varchar(32) NOT NULL,
  `publisher` varchar(256) NOT NULL,
  `citation_index` varchar(128) NOT NULL,
  `snip` varchar(16) NOT NULL,
  `sjr` varchar(16) NOT NULL,
  `articles_or_case` varchar(256) NOT NULL,
  `patent_filed` varchar(64) NOT NULL,
  `patent_reg` varchar(64) NOT NULL,
  `phd_present_stud` varchar(64) DEFAULT NULL,
  `phd_degree_awded` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`fac_id`, `nat_con`, `nat_jour`, `in_con`, `in_jour`, `title`, `date_of_pub`, `name_of_pub`, `author`, `co_author`, `impact_factor`, `h_index`, `isbn`, `books`, `monographs`, `chapters_in_books`, `book_edited`, `book_with_isbn`, `publisher`, `citation_index`, `snip`, `sjr`, `articles_or_case`, `patent_filed`, `patent_reg`, `phd_present_stud`, `phd_degree_awded`) VALUES
(1621, 'Yes', 'Yes', 'No', 'No', 'Computer Networks', '2018-02-09', 'Wiley Publicatio', 'Eden Zecko', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'AN', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(20439, 'Yes', 'No', 'No', 'No', 'AI', '2016-06-09', 'ABC', 'T.Jenkins', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '2', '1', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_taught`
--

CREATE TABLE `subjects_taught` (
  `fac_id` int(16) NOT NULL,
  `sr_no` int(8) NOT NULL,
  `subject_name` varchar(32) NOT NULL,
  `teaching_level` varchar(32) NOT NULL COMMENT 'UG/PG',
  `teaching_duration` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_taught`
--

INSERT INTO `subjects_taught` (`fac_id`, `sr_no`, `subject_name`, `teaching_level`, `teaching_duration`) VALUES
(0, 0, '', '', ''),
(20439, 1, 'Computer Organisation', 'Under-Graduate', '2015 to Current');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `fac_id` int(16) NOT NULL,
  `year` int(4) NOT NULL,
  `workshop_type` varchar(32) NOT NULL COMMENT 'Seminar/Conference/Symposium/Workshop',
  `workshop_for` varchar(16) NOT NULL COMMENT 'Teacher/Student',
  `date` date NOT NULL,
  `workshop_name` varchar(512) NOT NULL,
  `workshop_level` varchar(32) NOT NULL COMMENT 'International/National/State/University/College/Other',
  `duration` varchar(16) NOT NULL,
  `speaker_name` varchar(64) NOT NULL,
  `speaker_designation` varchar(50) DEFAULT NULL,
  `speaker_institute` varchar(256) DEFAULT NULL,
  `participants_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`fac_id`, `year`, `workshop_type`, `workshop_for`, `date`, `workshop_name`, `workshop_level`, `duration`, `speaker_name`, `speaker_designation`, `speaker_institute`, `participants_no`) VALUES
(1002, 2016, 'workshop', '', '2016-09-21', 'Web Technologies', 'inter', '6 hrs', 'Mr. A.B.XYZ', 'H.O.D', 'DMCE', 50),
(1621, 2017, 'workshop', 'student', '2017-08-18', 'Artificial Inteligence', 'university', '8 hrs', 'Ms. S.T.XYZ', 'Asst. Professor', 'DMCE', 40),
(20439, 2016, 'Workshop', 'student', '2016-08-10', 'Cloud Computing', 'inter', '5 Hrs.', 'T.Jenkins', 'Asst. Professor', 'DMCE', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `fac_info`
--
ALTER TABLE `fac_info`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `subjects_taught`
--
ALTER TABLE `subjects_taught`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`fac_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
