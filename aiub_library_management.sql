-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 12:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub_library_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) NOT NULL,
  `house` varchar(255) DEFAULT NULL,
  `road` varchar(255) DEFAULT NULL,
  `thana` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `house`, `road`, `thana`, `city`) VALUES
(1, 'Iusto voluptate est', 'Consectetur aliquid ', 'In lorem ut atque qu', 'Velit est eius eu qu');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `book_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `book_id`) VALUES
(9, 'C 10', 'Accusantium ipsum vo'),
(10, 'Chelsea Mullins', 'svx'),
(11, 'Cedric Mccullough', 'Nulla id architecto'),
(13, 'Asperiores 789', 'Palmer  85'),
(14, 'Rose Michael', 'Qui ut quaerat recus'),
(15, 'Erich Potter', 'Nam maxime error err');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `emp_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `name`, `department`) VALUES
(4, '52', 'Samson Hughes', '23');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `lib_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `lib_id`, `name`, `department`) VALUES
(1, 'Amet sint aut quos ', 'Alyssa Flowers', 'Aspernatur velit lau');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `department`, `student_id`) VALUES
(2, 'Jonas ', 'xc ', 'Eligendi proident r'),
(3, 'Drew Foley', 'Nesciunt aliqua Na', 'Aut commodo amet et'),
(4, 'Bo Barton', 'Praesentium velit ve', 'Cupidatat molestiae ');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `teacher_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `gender`, `password`, `first_name`, `last_name`, `phone_number`, `department`, `address`, `date_of_birth`, `teacher_id`) VALUES
(14, 'admin', 'admin@gmail.com', 'Others', 'asd', 'Susan asd', 'Cross asd', '+1 (274) 507-5682', 'departmentadaw', 'Ex et ipsum officia', '2022-12-08', '85'),
(15, 'abcd', 'hanec@mailinator.com', 'Male', '123456', 'Marny', 'Gamble', '+1 (247) 846-8251', 'Quaerat repellendus', 'Soluta recusandae A', '1984-03-29', 'Irure omnis magni pr'),
(16, 'dil', 'qacace@mailinator.com', 'Female', '123456', 'Abdul', 'Griffith', '+1 (765) 771-4717', 'Quia dicta aliquid s', 'Ipsum omnis enim se', '2013-05-26', 'Labore ut vitae magn'),
(17, 'jasyvidugu', 'caduw@mailinator.com', 'Male', 'Dicta iste repellend', '', 'Wilkerson', '+1 (127) 291-4101', 'Laboris sunt et dese', 'Do nulla consequuntu', '1982-05-10', 'Consectetur exceptur'),
(18, 'sewufyzy', 'zyjy@mailinator.com', 'Male', 'Dolorum laborum Eum', '', '', '+1 (631) 363-3411', 'Laboris obcaecati du', 'Hic pariatur Aut re', '1988-03-05', 'Ab tempore maiores '),
(19, 'gomoma', 'bawoqyvo@mailinator.com', 'Male', 'Id ut ut doloribus e', 'Addison', '', '', 'Quia suscipit minus ', 'Ipsum ut accusamus ', '2010-11-03', 'Dolor sapiente conse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
