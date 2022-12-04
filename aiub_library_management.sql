-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2022 at 12:14 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`) VALUES
(3, 'gourabjfgv'),
(5, 'fbsdv'),
(7, ' bxxbfgzxfcv');

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
(7, 'habotysaru', 'loma@mailinator.com', 'Female', 'Quidem quam quis occ', 'Bell', 'Daniel', '+1 (504) 662-8541', NULL, 'Voluptatem optio de', '2001-12-09', NULL),
(8, 'xilylimumy', 'kopeba@mailinator.com', 'Male', 'Est deserunt explica', 'Wallace', 'Schwartz', '+1 (727) 602-6999', 'Quis magna accusanti', 'Et dolore sapiente a', '2019-12-27', 'Dolorem laboris proi'),
(9, 'xydiluxid', 'fihaziho@mailinator.com', 'Female', 'Eu adipisci dolore a', 'Demetrius', 'Bartlett', '+1 (266) 443-7711', 'Possimus possimus ', 'Similique enim repre', '1974-03-14', 'Minus est enim nostr'),
(10, 'pytytu', 'zety@mailinator.com', 'Male', 'Autem deleniti qui n', 'Irma', 'Franklin', '+1 (695) 372-5502', 'Perspiciatis blandi', 'Natus pariatur Beat', '1988-09-13', 'Quasi consequuntur q'),
(11, 'qoric', 'vypybim@mailinator.com', 'Female', 'Quod nihil in magna ', 'Jermaine', 'Parsons', '+1 (164) 104-1251', 'Nulla sunt sunt mod', 'Amet perspiciatis ', '1991-02-03', 'Quia ut tempore ut '),
(12, '', '', '', '', '', '', '', '', '', '', ''),
(13, 'kehenunuja', 'loro@mailinator.com', 'Male', 'At aute sit archite', 'Mari', 'Hamilton', '+1 (735) 393-8382', 'Odit ipsa optio ob', 'Vitae reprehenderit ', '2016-01-14', 'Neque facere qui odi'),
(14, 'admin', 'admin@gmail.com', 'Male', '123456', 'Susan', 'Cross', '+1 (274) 507-5682', 'Ut qui voluptatem I', 'Ex et ipsum officia', '1976-11-10', 'Iusto in voluptate v'),
(15, 'siqokere', 'metepeq@mailinator.com', 'Male', 'Velit rerum voluptat', 'Lesley', 'Garza', '+1 (604) 976-3084', 'Deserunt quia rerum ', 'Atque nostrum nesciu', '1977-01-27', 'Ex quia nesciunt iu'),
(16, 'lufaqi', 'kuda@mailinator.com', 'Others', 'Facere voluptatem E', 'Daria', 'Nolan', '+1 (938) 433-5643', 'Maxime aliquam et no', 'Nostrud molestiae as', '1982-08-13', 'Ut voluptatem Quia ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
