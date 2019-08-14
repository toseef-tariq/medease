-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 01:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medease`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(20) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `patient` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `problem` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `doctor`, `patient`, `contact`, `problem`, `user`) VALUES
(9, '1', 'Ali Abbas', '03583458306', 'high blood pressuer', 'abc@gmail.com'),
(10, '1', 'Haider Ali', '0345252857', 'Aids', 'abc@gmail.com'),
(11, '1', 'jagd uqwgc', 'jwe fkhqjkef', 'djsbf kwf', 'abc@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `fid` varchar(10) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fid`, `uid`, `comment`) VALUES
(1, '8', 'abc@gmail.com', 'khf klahflah falfh al'),
(3, '8', 'abc@gmail.com', 'khf klahflah falfh al'),
(4, '8', 'abc@gmail.com', 'dvwvw'),
(5, '9', 'abc@gmail.com', 'hl flashf'),
(6, '8', 'abc@gmail.com', 'k fnklasfn'),
(7, '9', 'abc@gmail.com', 'bscajsbc'),
(8, '7', 'abc@gmail.com', 'dla bdlnjqjq'),
(9, '8', 'abc@abc.com', ',dnkafc'),
(10, '10', 'abc@abc.com', 'fq kfqgf qgfl  qf'),
(11, '11', 'abc@abc.com', 'h dflqhdlqhld'),
(12, '7', 'abc@abc.com', 'shdfjshs'),
(13, '7', 'abc@abc.com', 'efiwg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(70) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `fees` varchar(20) NOT NULL,
  `time` varchar(30) NOT NULL,
  `special` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `email`, `pass`, `name`, `address`, `contact`, `fees`, `time`, `special`, `description`, `city`, `sex`) VALUES
(1, 'abc@gmail.com', '12345678', 'jkdhkwd', 'House # gcuibv e huww  uiwh ', '0345252857', 'Rs. 500', '10 AM to 5 PM', '1,', 'J wjrlwjefk wekhewighe ighuiwhuiw3', '1', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(10) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `discussion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `uid`, `topic`, `discussion`) VALUES
(7, 'abc@gmail.com', 'hello 1', 'heloo ididhah'),
(8, 'abc@gmail.com', 'AIDS', 'How to prevent from adis??'),
(9, 'abc@gmail.com', 'hello ', 'fh akfhafaw fj kf wdguiweuihuhwirhiwr iwj \r\n rwr iwiih wihiqw\r\n w uhrqwuhr'),
(10, 'abc@abc.com', 'Heart Problem Disease Which doctor is better?', 'dyt wdgwuruwhuhh  iwerj iwejr ijwij irjw ijwie rjiwe rjiwerj ijijwrij riwjiwej ij rijwie jeiorj ijw riojioje jn jkngjnjngjrgngnrowrgniohrogio gioweirhiwriqw riwerienfefnofnfnfn'),
(11, 'abc@abc.com', 'You can easily get involved with us. Reply on other forum topics or create your own by click on the ', 'dk klq');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `email`, `pass`, `sex`) VALUES
(1, 'jkdhkwd', '123456789', 'abc@abc.com', '12345678', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
