-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 01:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability_table`
--

CREATE TABLE `availability_table` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `availability` varchar(100) NOT NULL DEFAULT 'Not Available',
  `set_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability_table`
--

INSERT INTO `availability_table` (`id`, `name`, `availability`, `set_date`) VALUES
(1, 'Dats Astapan', 'Available', '2018-11-05'),
(2, 'Jayson Gwapo', 'Available', '2018-11-05'),
(3, 'Alfredo Joe', 'Not Available', '0000-00-00'),
(4, 'Qwerty Rey', 'Available', '2018-11-05'),
(5, 'Hey Chan', 'Not Available', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`) VALUES
(58, 'Cris', 'Jcsantibanez0827@gmail.com', '1b5d0f9dfe4e932c4f7df9a75faf2351'),
(60, 'Dats', 'dats@gmail.com', '1a5c2a71177acf7fe479933b2468a171'),
(66, 'Jayson Astapan', 'jayson@gmail.com', '3bc7b0fecbd8e586fcdaf70feaeaab9e');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `type` enum('Artist','ProjectLeader') NOT NULL DEFAULT 'Artist'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `name`, `password`, `type`) VALUES
(1, 'dats', 'Dats Astapan', '1a5c2a71177acf7fe479933b2468a171', 'ProjectLeader'),
(2, 'jayson', 'Jayson Gwapo', '9eef6a1f927654f24801f58fe67bb1d4', 'Artist'),
(3, 'alfureedo', 'Alfredo Joe', '9eb6b4372bf24b0b0995f58a957701d1', 'Artist'),
(4, 'qwerty', 'Qwerty Rey', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Artist'),
(5, 'hey', 'Hey Chan', '63191e4ece37523c9fe6bb62a5e64d45', 'Artist');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_id` int(10) NOT NULL,
  `OrderNo` int(10) NOT NULL,
  `OrderDetails` varchar(50) NOT NULL,
  `DateOrdered` date NOT NULL,
  `Quantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_id`, `OrderNo`, `OrderDetails`, `DateOrdered`, `Quantity`) VALUES
(60, 115, 'Wedding Card Layout1:  Flowery flowery', '2018-11-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_request`
--

CREATE TABLE `order_request` (
  `reqno` int(11) NOT NULL,
  `OrderNo` int(11) NOT NULL,
  `OrderDetails` varchar(50) NOT NULL,
  `DateOrdered` date NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_request`
--

INSERT INTO `order_request` (`reqno`, `OrderNo`, `OrderDetails`, `DateOrdered`, `Quantity`) VALUES
(113, 115, 'Wedding Card Layout1:  Flowery flowery', '2018-11-05', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability_table`
--
ALTER TABLE `availability_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNo`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_request`
--
ALTER TABLE `order_request`
  ADD PRIMARY KEY (`reqno`) USING BTREE,
  ADD UNIQUE KEY `req` (`OrderNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `order_request`
--
ALTER TABLE `order_request`
  MODIFY `reqno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
