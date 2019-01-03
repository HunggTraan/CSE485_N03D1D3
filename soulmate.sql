-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 09:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soulmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Fullname` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ContactNumber` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `AccessLevel` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Username`, `Password`, `Email`, `Fullname`, `Address`, `ContactNumber`, `Age`, `AccessLevel`) VALUES
('Admin123', 'Admin', 'Admin123@gmail.com', 'Adminn', 'Here', 'no', 100, 'Admin'),
('Duy1234', 'Duy1234', 'duy1234@gmail.com', 'Duy123', 'DuyAddress', '09563729475', 25, 'Member'),
('Hung1234', 'Hung1234', 'hung1234@gmail.com', 'Hung', 'HungAddress', '232323232323', 26, 'Member'),
('Linh1234', 'Linh1234', 'linh1234@gmail.com', 'Linhlinh', 'linhlinhlinh', '6969696969', 23, 'Member'),
('NguyenDuy', '57ba172a6be125cca2f449826f9980ca', 'DuyNguyen123@gmail.com', 'Nguyen Duy', 'HaNoi', '0123456789', 20, 'Member'),
('Tuan1234', 'Tuan1234', 'Tuan1234@gmail.com', 'TuanTuan', 'TuanAddress', '6990599343', 12, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
