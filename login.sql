-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 10:09 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `DeviceName` varchar(30) NOT NULL,
  `ImageName` varchar(20) NOT NULL,
  `Pros` varchar(1000) NOT NULL,
  `Cons` varchar(1000) NOT NULL,
  `Specification` varchar(10000) NOT NULL,
  `OvRat` int(3) NOT NULL,
  `PerRat` int(3) NOT NULL,
  `DesRat` int(3) NOT NULL,
  `SatRat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `DeviceName` varchar(30) NOT NULL,
  `ImageName` varchar(20) NOT NULL,
  `Pros` varchar(1000) NOT NULL,
  `Cons` varchar(1000) NOT NULL,
  `Specification` varchar(10000) NOT NULL,
  `OvRat` int(3) NOT NULL,
  `PerRat` int(3) NOT NULL,
  `DesRat` int(3) NOT NULL,
  `SatRat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`DeviceName`, `ImageName`, `Pros`, `Cons`, `Specification`, `OvRat`, `PerRat`, `DesRat`, `SatRat`) VALUES
('Lenovo K6 Power', 'Screenshot (5).png', 'Long Battery', 'Low Power', 'sadf', 72, 75, 75, 74),
('One Plus 6T', 'oneplus-6t.jpg', 'Long Battery', 'Low Power', 'Awesome', 98, 97, 95, 92);

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `DeviceName` varchar(30) NOT NULL,
  `ImageName` varchar(20) NOT NULL,
  `Pros` varchar(1000) NOT NULL,
  `Cons` varchar(1000) NOT NULL,
  `Specification` varchar(10000) NOT NULL,
  `OvRat` int(3) NOT NULL,
  `PerRat` int(3) NOT NULL,
  `DesRat` int(3) NOT NULL,
  `SatRat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `pass`) VALUES
('admi', 'admi'),
('admin', 'admin'),
('hello', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`DeviceName`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`DeviceName`);

--
-- Indexes for table `hello`
--
ALTER TABLE `hello`
  ADD PRIMARY KEY (`DeviceName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
