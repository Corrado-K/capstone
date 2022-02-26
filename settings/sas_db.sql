-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2020 at 01:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppn`
--

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

-- --------------------------------------------------------

CREATE TABLE `advisor` (
  `advisor_id` int(11) NOT NULL,
  `advisor_name` varchar(100) NOT NULL,
  `advisor_email` varchar(50) NOT NULL,
  `advisor_pass` varchar(150) NOT NULL,
  `advisor_contact` varchar(15) NOT NULL,
  `advisor_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `scheduled_meeting` (
  `scheduled_meeting_id` int(11) NOT NULL
  `student_id` int(11) NOT NULL,
  `advisor_id` int(11) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` timestamp` NOT NULL,
  `zoom_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL,
  `advisor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `meeting_time` timestamp NOT NULL,
  `meeting_duration` timestamp NOT NULL,
  `meeting_minutes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_category` varchar(100) NOT NULL,
  `faq_question` varchar(100) NOT NULL,
  `faq_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `announcement_subject` varchar(100) NOT NULL,
  `announcement_message` varchar(100) NOT NULL,
  `attached_file` varchar(500) NOT NULL,
  `date` date
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE `shared_files` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_desc` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------