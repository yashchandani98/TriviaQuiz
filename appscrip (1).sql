-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 11:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appscrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE `tbl_options` (
  `Option_id` int(11) NOT NULL,
  `Option_name` varchar(50) NOT NULL,
  `Question_id` int(10) NOT NULL,
  `Question_correct_id` int(11) NOT NULL COMMENT 'if greater than 0 then correct anf if equal to 0 then it is incorrect',
  `Status` int(10) NOT NULL DEFAULT '1' COMMENT '0:Inactive,1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_options`
--

INSERT INTO `tbl_options` (`Option_id`, `Option_name`, `Question_id`, `Question_correct_id`, `Status`) VALUES
(1, 'Sachin Tendulkar', 1, 0, 1),
(2, 'Virat Kohli', 1, 1, 1),
(3, 'Adam Gilchirst', 1, 0, 1),
(4, 'Jacques Kallis', 1, 0, 1),
(5, 'White', 2, 2, 1),
(6, 'Yellow', 2, 0, 1),
(7, 'Orange', 2, 2, 1),
(8, 'Green', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_option_chosen`
--

CREATE TABLE `tbl_option_chosen` (
  `Pk_id` int(11) NOT NULL,
  `Session_id` int(11) NOT NULL,
  `Question_id` int(11) NOT NULL,
  `Option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_option_chosen`
--

INSERT INTO `tbl_option_chosen` (`Pk_id`, `Session_id`, `Question_id`, `Option_id`) VALUES
(1, 2105, 1, 1),
(2, 2105, 2, 7),
(3, 2105, 2, 8),
(4, 3213, 1, 1),
(5, 3213, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `Pk_id` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Options_correct` int(10) NOT NULL DEFAULT '1' COMMENT 'Nummber of options correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`Pk_id`, `Question`, `Options_correct`) VALUES
(1, 'Who is the best cricketer in the world?', 1),
(2, 'What are the colors in the Indian national flag?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_session`
--

CREATE TABLE `tbl_quiz_session` (
  `Pk_id` int(11) NOT NULL,
  `Session_id` int(10) NOT NULL COMMENT 'tbl_users(JOIN)',
  `Question_id` int(10) NOT NULL COMMENT 'tbl_questions(JOIN)',
  `Date_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Pk_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `Date_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_answer`
--

CREATE TABLE `tbl_user_answer` (
  `Pk_id` int(100) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `user_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_options`
--
ALTER TABLE `tbl_options`
  ADD PRIMARY KEY (`Option_id`);

--
-- Indexes for table `tbl_option_chosen`
--
ALTER TABLE `tbl_option_chosen`
  ADD PRIMARY KEY (`Pk_id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`Pk_id`);

--
-- Indexes for table `tbl_quiz_session`
--
ALTER TABLE `tbl_quiz_session`
  ADD PRIMARY KEY (`Pk_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Pk_id`);

--
-- Indexes for table `tbl_user_answer`
--
ALTER TABLE `tbl_user_answer`
  ADD PRIMARY KEY (`Pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_options`
--
ALTER TABLE `tbl_options`
  MODIFY `Option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_option_chosen`
--
ALTER TABLE `tbl_option_chosen`
  MODIFY `Pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `Pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quiz_session`
--
ALTER TABLE `tbl_quiz_session`
  MODIFY `Pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `Pk_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
