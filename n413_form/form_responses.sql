-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 23, 2020 at 05:07 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampjam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_responses`
--

CREATE TABLE `form_responses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_responses`
--

INSERT INTO `form_responses` (`id`, `name`, `email`, `comment`, `timestamp`) VALUES
(1, 'Oscar Wilde', 'oscar@wilde.com', 'Be yourself; everyone else is already taken.', '2020-04-19 18:05:09'),
(2, 'Albert Einstein', 'al@emc2.com', 'Two things are infinite: the universe and human stupidity; and I\'m not sure about the universe.', '2020-04-19 18:05:53'),
(3, 'Frank Zappa', 'z@eatyellowsnow.com', 'So many books, so little time.', '2020-04-19 18:07:22'),
(4, 'Mark Twain', 'mark@twain.com', 'If you tell the truth, you don\'t have to remember anything.', '2020-04-19 18:09:06'),
(5, 'John Lennon', 'John@fabfour.com', 'Life is what happens when you\'re busy making other plans.', '2020-04-19 18:11:45'),
(6, 'Dr. Strangelove', 'strange@love.com', 'Gentlemen, you can\'t fight in here! This is the war room!', '2020-04-19 18:31:42'),
(7, 'Groot', 'groot@guardians.com', 'I am Groot.', '2020-04-19 18:32:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_responses`
--
ALTER TABLE `form_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_responses`
--
ALTER TABLE `form_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
