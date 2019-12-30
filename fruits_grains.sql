-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 09:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruits_grains`
--

-- --------------------------------------------------------

--
-- Table structure for table `fg`
--

CREATE TABLE `fg` (
  `fg_id` int(11) NOT NULL,
  `fg_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fg`
--

INSERT INTO `fg` (`fg_id`, `fg_name`) VALUES
(1, 'Fruits'),
(2, 'Grains');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `list_name` varchar(250) NOT NULL,
  `fg_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`list_id`, `list_name`, `fg_id`) VALUES
(1, 'Oranges', 1),
(2, 'Blueberries', 1),
(3, 'Pineapple', 1),
(4, 'Grapefruit', 1),
(4, 'Millet', 2),
(5, 'Whole Wheat', 2),
(6, 'Oats', 2),
(7, 'Barley', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fg`
--
ALTER TABLE `fg`
  ADD PRIMARY KEY (`fg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
