-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 12:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_advising_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `advisor_id` int(11) NOT NULL,
  `advisor_name` varchar(100) NOT NULL,
  `advisor_email` varchar(50) NOT NULL,
  `advisor_pass` varchar(150) NOT NULL,
  `advisor_contact` varchar(15) NOT NULL,
  `advisor_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `announcement_subject` varchar(100) NOT NULL,
  `announcement_message` varchar(1024) NOT NULL,
  `attached_file` varchar(500) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `announcement_subject`, `announcement_message`, `attached_file`, `date`) VALUES
(30, 'Newestestest', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam maecenas ultricies mi eget mauris pharetra et ultrices neque. Consequat semper viverra nam libero justo laoreet. Arcu vitae elementum curabitur vitae nunc. Purus semper eget duis at tellus at urna. Sit amet mauris commodo quis imperdiet massa. Molestie a iaculis at erat pellentesque. Lacus viverra vitae congue eu consequat ac. Fringilla urna porttitor rhoncus dolor purus. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Lacinia quis vel eros donec ac odio tempor orci. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt.', '', '2022-02-26'),
(31, 'Who is the Dean of Students', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '../files/announcement_uploads/superheros_wall_droidviews_13.jpg', '2022-02-26'),
(32, 'No file test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '../files/announcement_uploads/superheros_wall_droidviews_14.jpg', '2022-02-26'),
(33, 'Actual No file test', 'For real this time, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', '', '2022-02-26'),
(34, 'Actual No file test', 'For real real this time, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea co', '', '2022-02-26'),
(35, 'Actual No file test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '2022-02-26'),
(36, 'Actual No file test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '2022-02-26'),
(37, 'Actual No file test', 'No file here baby. Just Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com', '', '2022-02-26'),
(38, 'Who is the Dean of Students', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aut', '', '2022-02-26'),
(39, 'Who is the Dean of Students', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aut', '', '2022-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(120) NOT NULL,
  `course_name` varchar(120) NOT NULL,
  `course_passgrade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_prerequisite`
--

CREATE TABLE `course_prerequisite` (
  `course_id` int(11) NOT NULL,
  `course_prerequisite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_category` varchar(100) NOT NULL,
  `faq_question` varchar(100) NOT NULL,
  `faq_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_category`, `faq_question`, `faq_answer`) VALUES
(0, '', 'Who is the Dean of Students?', 'Dean Abdul Madhi');

-- --------------------------------------------------------

--
-- Table structure for table `shared_files`
--

CREATE TABLE `shared_files` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_desc` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shared_files`
--

INSERT INTO `shared_files` (`file_id`, `file_name`, `file_desc`, `file`) VALUES
(0, 'Homework 1', 'Lorem ipsum dolor sit amet.', '../files/product/');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_pass` varchar(150) NOT NULL,
  `student_contact` varchar(15) NOT NULL,
  `student_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
