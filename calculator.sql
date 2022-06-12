-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 05:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `timestamp` varchar(255) NOT NULL,
  `bil1` float NOT NULL,
  `bil2` float NOT NULL,
  `operasi` varchar(255) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`timestamp`, `bil1`, `bil2`, `operasi`, `hasil`) VALUES
('12/06/2022 05:32:36', 1, 2, 'tambah', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`timestamp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
