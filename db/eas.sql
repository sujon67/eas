-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2016 at 03:28 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_personal_data`
--

CREATE TABLE `employee_personal_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_birth` text NOT NULL,
  `join_date` text NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_personal_data`
--

INSERT INTO `employee_personal_data` (`id`, `name`, `gender`, `date_birth`, `join_date`, `user_name`, `password`) VALUES
(1, 'Sujon Chondro Shil', 'male', '02/01/1993', '12/01/2016', 'sujon', '$2a$08$Mm4iOLWFZDwZsIgqVF5D2OeZuHCdBt0Q59cuzIa5I9xhIHTNLgwhC'),
(2, 'Mohona', 'female', '02/01/1993', '12/01/2016', 'mohona45', '$2a$08$k9Nf.K4LeQIluGR1wN7nJeZGAzTMhKlXAGtohXdU0vS1ZCBGr.mRW'),
(3, 'Ah Cy', 'female', '1/2/1992', '12/01/2016', 'Ah Cy', '$2a$08$JYZsdb0xa11OYkXoeI1D4OsD/iTaS/V2.fIxHcioIfodi3D8haGM2'),
(4, 'Tonoy', 'male', '4/5/1992', '12/01/2016', 'Tonoy', '$2a$08$hAnhpCSaT6Rf8sgb3vaYk.X7vwBdQVpN.2VTTRvNhthsDBgY58FeC');

-- --------------------------------------------------------

--
-- Table structure for table `punch_in_out`
--

CREATE TABLE `punch_in_out` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `punch_in` text NOT NULL,
  `punch_out` text,
  `out_comment` text,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `punch_in_out`
--

INSERT INTO `punch_in_out` (`id`, `employee_id`, `date`, `punch_in`, `punch_out`, `out_comment`, `status`) VALUES
(1, 1, '2016-12-05', '03:24:12', '03:24:29', 'sunday', 'Late'),
(2, 1, '2016-12-05', '03:25:15', '03:25:35', 'Monday', 'Late'),
(3, 4, '2016-12-05', '03:26:47', '03:27:09', 'Tonoy Sunday', 'Late'),
(4, 4, '2016-12-05', '03:27:40', '03:27:58', 'Tonoy monday', 'Late');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_personal_data`
--
ALTER TABLE `employee_personal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punch_in_out`
--
ALTER TABLE `punch_in_out`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_personal_data`
--
ALTER TABLE `employee_personal_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `punch_in_out`
--
ALTER TABLE `punch_in_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
