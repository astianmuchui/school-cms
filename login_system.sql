-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 09:06 PM
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
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `title`, `content`, `image`, `author`, `created_at`) VALUES
(1, 'Vehicles', 'cars are a good thing', 'car-1300629_1280.png', 'The principal', '2021-04-01 15:39:58.404697'),
(2, 'Watches', 'Watches keep our time and remind us when we are needed somewhere', 'pexels-manas-saxena-5828508.jpg', 'Deputy Principal', '2021-04-01 15:43:32.246030');

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

--
-- Dumping data for table `mail_records`
--

INSERT INTO `mail_records` (`id`, `title`, `mail_message`, `send_time`) VALUES
(1, 'Good morning', 'hi there how are you', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sent_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `sent_at`) VALUES
(4, 'jane doe', 'janedoe3@gmail.com', 'Hi, how are you, I hope you are fine', '2021-04-02 15:53:06.535032');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `title`, `message`, `time`) VALUES
(1, 'Machines', 'A machine is a combination of bodies so connected that their relative motions are constrained Example gears, wheelbarrows and ironically even zips', '2021-04-02 17:37:30.606324');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `qtn` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `username`, `user_email`, `qtn`, `time`) VALUES
(1, 'John doe', 'johndoe@gmail.com', 'how do i recover my password', '2021-03-31 17:54:37.691246'),
(2, 'Dean collins', 'deancollins@gmail.com', 'How do i submit my assignment', '2021-03-31 20:44:26.870469');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `type`, `subject`, `time`) VALUES
(1, 'Chris parker', 'Assignment request', 'Biology', '2021-04-01 14:17:11.866648');

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
(3, 'John williams', 'I would like you to bring entertainment on sunday\r\n', '2021-03-31 13:29:21.815071'),
(4, 'michaela stone', 'Please add 10 minutes lesson time', '2021-03-31 17:06:08.885090');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `distinction` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `email`, `distinction`, `time`) VALUES
(1, 'John doe', 'johndoe@gmail.com', 'Normal Teacher', '2021-03-31 21:28:14.903300'),
(2, 'Mr james blunt', 'jamesblunt@gmail.com', 'Club patron', '2021-04-01 11:33:53.689902'),
(3, 'mr timothy', 'timothy@gmail.com', 'Senior Teacher', '2021-04-01 11:53:40.466023');

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
(2, 'michaela stone', 10958, '1205', 'michaela25@gmail.com', '2021-04-01 19:01:37.596728'),
(14, 'Cal stone', 8280, '6523', 'calstone22@gmail.com', '2021-03-31 16:59:03.884977'),
(15, 'Jared vasques', 5112, '8280', 'jaredvasques8@gmail.com', '2021-03-31 08:04:32.118411'),
(16, 'James blunt', 12688, '15644', 'blunt@gmail.com', '2021-04-02 12:29:17.686134'),
(17, 'john doe', 1508, '1508', 'johndoe@gmail.com', '2021-03-31 20:11:50.945886');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mail_records`
--
ALTER TABLE `mail_records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
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
