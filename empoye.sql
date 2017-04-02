-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 11:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empoye`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_id` int(11) NOT NULL,
  `name_surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `name_surname`, `user`, `password`, `Email`, `phone`, `Status`, `image`) VALUES
(2, 'pacharapa chomprakot', '5721207008', '241238', 'chanalza105@ho516tmail.com', '0991605228', 1, ''),
(8, 'apirat parmchana', 'ikool009New', '069079311', 'apirat14121ice@hotmail.com', '028900407', 1, ''),
(9, 'apirat parmchana', 'ikool009', '069079311', 'apirat14121ice@hotmail.com', '028900407', 1, ''),
(10, 'asiorjhvuhwt', 'rootnew 123456', 'ujiik009', 'sdjhsdjghdajio', '65498148941', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
