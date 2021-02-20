-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 03:32 PM
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
-- Database: `holidays`
--
CREATE DATABASE IF NOT EXISTS `holidays` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `holidays`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `trip` varchar(30) DEFAULT NULL,
  `user_email` varchar(35) DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`trip`, `user_email`, `people`, `phone`, `id`, `status`) VALUES
('Bandarban', 'prohos10@gmail.com', 10, '+08801759458722', 4, 'A'),
('Divine Eco Resort', 'prohos10@gmail.com', 2, '+08801759458722', 5, 'A'),
('Rangamati', 'prohos10@gmail.com', 4, '+08801759458722', 7, 'A'),
('Sundarban', 'prohos10@gmail.com', 4, '+08801759458722', 8, 'R'),
('Sajek', 'prohos10@gmail.com', 4, '+08801759458722', 9, 'R'),
('Divine Eco Resort', 'urmi@gmail.com', 2, '+08801739451555', 11, 'R'),
('Pan Pacific Hotel', 'prohos10@gmail.com', 4, '+08801759458755', 12, 'R'),
('Kuakata', 'prohos10@gmail.com', 5, '+08801759458755', 13, 'R');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pass` varchar(35) DEFAULT NULL,
  `profession` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `phone`, `name`, `age`, `address`, `pass`, `profession`) VALUES
('prohos10@gmail.com', '+08801759458755', 'Prohor Banik', 23, 'mirpur 10 circle, dhaka 1217', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
('urmi@gmail.com', '+08801739451555', 'urmi', 20, 'mohmadpur bus stop', '21b95a0f90138767b0fd324e6be3457b', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
