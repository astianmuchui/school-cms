-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:56 AM
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
(3, 'Watches', 'Watches keep time', 'pexels-max-avans-5058216.jpg', 'Deputy Principal', '2021-04-17 09:58:19.545374'),
(4, 'Time', 'time is a resource', 'pexels-cottonbro-5054541.jpg', 'jamal', '2021-04-17 10:03:01.393762');

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
(7, 'Biology Mocks', 'Topical-Mock-Biology-questions.pdf', '2021-03-31 13:31:52.341610'),
(8, 'Business form 2', 'BIOLOGY-REVISION-BOOKLET.pdf', '2021-04-25 10:46:11.738173'),
(9, 'Kevins exam', 'COMPUTER STUDIES PAPER ONE KENNEDY M KALAWA 3330.pdf', '2021-05-02 10:39:17.977021');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `image`, `time`) VALUES
(1, 'cartoon', 'fileName.jpg', '2021-04-05 15:18:05.025566'),
(2, 'vanilla street', 'vanilla street.jpg', '2021-04-05 18:56:48.820733'),
(3, 'car', '02_Desktop.jpg', '2021-04-05 19:55:59.653313'),
(4, 'watch', 'pexels-max-avans-5058216.jpg', '2021-04-12 20:54:51.999945');

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
(4, 'jane doe', 'janedoe3@gmail.com', 'Hi, how are you, I hope you are fine', '2021-04-02 15:53:06.535032'),
(5, 'Kim jeffreys', 'kim@gmail.com', 'hey', '2021-04-05 21:26:07.009446'),
(6, 'michaela stone', 'michaela@gmail.com', 'Hi there', '2021-04-10 09:58:31.860142'),
(7, 'Cal stone', 'calstone145@gmail.com', 'Hi there', '2021-04-17 09:21:52.377673'),
(8, 'michaela stone', 'michaela12@gmail.com', 'How are you doing', '2021-05-01 11:42:13.993394'),
(9, 'Kevin Thuranira', 'kevothura@gmail.com', 'Hi admin', '2021-05-02 10:38:04.514170'),
(10, 'Iman mutegi', 'iman45@gmail.com', 'hi teacher', '2021-05-03 12:45:50.024751');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `heading`, `body`, `time`) VALUES
(1, 'Paradigm shift', 'this is a change in how we think', '2021-04-05 14:35:12.857164'),
(2, 'Paradigm shift', 'this is a change in how we think', '2021-04-05 14:35:47.596203'),
(3, 'Paradigm shift', 'this is a change in how we think', '2021-04-05 14:36:47.923884'),
(4, 'Paradigm shift', 'hi', '2021-04-07 18:12:47.335037');

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
(1, 'Machines', 'A machine is a combination of bodies so connected that their relative motions are constrained Example gears, wheelbarrows and ironically even zips', '2021-04-02 17:37:30.606324'),
(2, 'momentum', 'hi', '2021-04-07 18:15:30.875431'),
(3, 'momentum', 'hi', '2021-04-07 18:17:36.965133'),
(4, 'momentum', 'hi', '2021-04-07 18:18:03.144645'),
(5, 'momentum', 'hi', '2021-04-17 11:09:52.299447'),
(6, 'momentum', 'hi', '2021-04-17 11:10:44.374101'),
(7, 'momentum', 'hi', '2021-04-17 11:12:09.726286');

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
(2, 'Dean collins', 'deancollins@gmail.com', 'How do i submit my assignment', '2021-03-31 20:44:26.870469'),
(3, 'michaela stone', 'michaela12@gmail.com', 'What is my name', '2021-05-01 11:41:28.352047'),
(4, 'Kevin Thuranira', 'kevothura@gmail.com', 'What is chemistry', '2021-05-02 10:37:40.257375'),
(5, 'Iman mutegi', 'iman45@gmail.com', 'what ?', '2021-05-03 12:45:17.867317');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `email`, `time`) VALUES
(1, 'jamal@gmail.com', '2021-04-17 10:27:32.639505');

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
(7, 'Jared vasques', 'Exam request', 'maths', '2021-04-10 09:39:24.716092'),
(8, 'Jared vasques', 'Assignment request', 'relegious education', '2021-04-12 20:33:08.103902'),
(9, 'michaela stone', 'Assignment request', 'maths', '2021-05-01 11:40:34.457529'),
(10, 'Kevin Thuranira', 'Exam request', 'biology', '2021-05-02 10:37:00.417875'),
(11, 'Iman mutegi', 'Assignment request', 'chemistry', '2021-05-03 12:44:32.938436');

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
(3, 'John doe', 'I would like you to bring entertainment on sunday\r\n', '2021-03-31 13:29:21.815071'),
(4, 'michaela stone', 'Please add 10 minutes lesson time', '2021-03-31 17:06:08.885090'),
(5, 'Cal stone', 'Stupid idiot', '2021-04-05 05:36:04.471791'),
(6, 'Paul Levesque', 'You can at times be unintentionally entertaining', '2021-04-05 21:18:54.895380'),
(7, 'Liz karimi', 'stupid', '2021-04-25 10:47:37.478490'),
(8, 'immanuel muroki', 'very bad', '2021-05-01 04:50:26.898326'),
(9, 'michaela stone', 'Please improve', '2021-05-01 11:40:15.257031'),
(10, 'Kevin Thuranira', 'Add more books', '2021-05-02 10:36:47.122888'),
(11, 'Iman mutegi', 'very good', '2021-05-03 12:44:19.106395');

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
(3, 'mr timothy', 'timothy@gmail.com', 'Senior Teacher', '2021-04-01 11:53:40.466023'),
(4, 'Mr jason', 'jason@gmail.com', 'Club patron', '2021-04-12 14:44:22.252282'),
(5, 'Mr jason', 'jason@gmail.com', 'Head of department', '2021-04-12 14:48:21.287587');

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
(2, 'michaela stone', 10958, '1205', 'michaela12@gmail.com', '2021-05-01 11:40:55.175592'),
(14, 'Cal stone', 8280, '6523', 'calstone145@gmail.com', '2021-04-12 16:30:25.606217'),
(15, 'Jared vasques', 5112, '8280', 'jaredvasques8@gmail.com', '2021-03-31 08:04:32.118411'),
(16, 'James blunt', 12688, '15644', 'blunt@gmail.com', '2021-04-02 12:29:17.686134'),
(17, 'john doe', 1508, '1508', 'johndoe@gmail.com', '2021-04-05 16:07:26.601841'),
(18, 'Jared vasques', 2035, '293664', 'vasques8@gmail.com', '2021-04-05 05:29:23.593780'),
(19, 'Paul Levesque', 1996, '120022', 'paullevesque@gmail.com', '2021-04-07 17:42:43.599622'),
(20, 'Liz karimi', 8411, '36368411', 'rianliz30@gmail.com', '2021-04-25 10:44:49.223497'),
(21, 'immanuel muroki', 1234, '4567', 'imanuel@gmail.com', '2021-05-01 04:49:22.079099'),
(22, 'Kevin Thuranira', 4563, '78910', 'kevothura@gmail.com', '2021-05-02 10:37:13.631729'),
(23, 'Iman mutegi', 4567, '1234567', 'iman45@gmail.com', '2021-05-03 12:44:50.593237');

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
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
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail_records`
--
ALTER TABLE `mail_records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
