-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 03:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `doc_file` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `title`, `doc_file`, `time`) VALUES
(11, 'business assignment 2', 'BUSINESS-STUDIES-NOTES-F3.docx', '2021-03-27 10:09:38.975477'),
(19, 'Essays Assignment', 'BIOLOGY-ESSAY-QUESTIONS-EXPECTED-ANSWERS.pdf', '2021-03-27 20:53:42.046014'),
(22, 'Biology', 'FORM-3-BIOLOGY.docx', '2021-03-31 08:56:42.181015'),
(23, 'Form 2 biology', 'FORM-2-BIOLOGY.docx', '2021-03-31 09:00:52.872645'),
(24, 'Chemistry', 'KCSE-FORM-3-CHEMISTRY-NOTES.pdf', '2021-03-31 13:08:26.492136'),
(25, 'Mocks', 'BIOLOGY-ESSAY-QUESTIONS-EXPECTED-ANSWERS.pdf', '2021-03-31 13:11:06.703737');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_file` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `exam_file`, `time`) VALUES
(1, 'End term 3 2020', 'FORM-2-BIOLOGY.docx', '2021-03-26 09:47:53.358186'),
(2, 'Chemistry paper 3', 'KCSE-FORM-3-CHEMISTRY-NOTES.pdf', '2021-03-26 14:28:45.064035'),
(3, 'Business form 2', 'BUSINESS-STUDIES-FORM-2.docx', '2021-03-31 07:39:01.395300'),
(4, 'Business form 1', 'BUSINESS-STUDIES-NOTES-F1-1.docx', '2021-03-31 12:09:55.512804'),
(6, 'Biology revision booklet', 'BIOLOGY-REVISION-BOOKLET.pdf', '2021-03-31 12:54:17.762108'),
(7, 'Biology Mocks', 'Topical-Mock-Biology-questions.pdf', '2021-03-31 13:31:52.341610');

-- --------------------------------------------------------

--
-- Table structure for table `mail_records`
--

CREATE TABLE `mail_records` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mail_message` varchar(255) NOT NULL,
  `send_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `publisher`, `content`, `time`) VALUES
(1, 'Jared vasques', 'please improve the water supply', '2021-03-31 08:26:42.357215'),
(2, 'Cal stone', 'Please add more exams to the system', '2021-03-31 08:27:55.740181'),
(3, 'Edu starboi', 'I would like you to bring entertainment on sunday\r\n', '2021-03-31 13:29:21.815071');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `adm_no` int(255) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `adm_no`, `passcode`, `user_mail`, `created_at`) VALUES
(2, 'michaela stone', 10958, '1205', 'michaela@gmail.com', '2021-03-29 19:35:43.257316'),
(14, 'Cal stone', 8280, '6523', 'calstone@gmail.com', '2021-03-30 19:15:19.018777'),
(15, 'Jared vasques', 5112, '8280', 'jaredvasques8@gmail.com', '2021-03-31 08:04:32.118411'),
(16, 'James blunt', 12688, '15644', 'jamesblunt40@gmail.com', '2021-03-31 08:02:50.590905'),
(17, 'Edu starboi', 1508, '1508', 'edustar@gmail.com', '2021-03-31 13:28:08.907302');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_records`
--
ALTER TABLE `mail_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mail_records`
--
ALTER TABLE `mail_records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
