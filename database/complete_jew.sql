-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 04:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellwery`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `Name`, `type`, `color`, `price`) VALUES
(22, 'dolozox', 'medicine', 'white', 20),
(23, 'paracetamol', 'medicine', 'yellow', 12),
(24, 'meftal', 'medicine', 'yellow', 15),
(25, 'benedryl', 'seryp', 'yellow', 180),
(26, 'bandage', 'stick', 'blue', 12),
(27, 'scizzor', 'metal', 'silver', 60),
(28, 'bandage', 'bandage', 'white', 100),
(29, 'stretcher', 'furniture', 'white', 180),
(30, 'bed', 'furniture', 'blue', 7000),
(31, 'poster', 'flex', 'green', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `Name`, `type`, `color`, `price`) VALUES
(1, 'bangles', 'gold', 'brown', 2000),
(2, 'ring', 'silver', 'grey', 300),
(3, 'neckless', 'gold', 'yellow', 5000),
(4, 'bracelet', 'silver', 'pink', 340),
(5, 'anklet', 'silver', 'gray', 230),
(6, 'neckless', 'diamond', 'pink', 7000),
(7, 'chain', 'gold', 'yellow', 6000),
(8, 'payal', 'gold', 'white', 5050),
(9, 'nose ring', 'gold', 'yellow', 180),
(10, 'earring', 'diamond', 'white', 7800);

-- --------------------------------------------------------

--
-- Table structure for table `dresses`
--

CREATE TABLE `dresses` (
  `id` int(11) NOT NULL,
  `dress` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dresses`
--

INSERT INTO `dresses` (`id`, `dress`, `type`, `color`, `price`) VALUES
(66, 'top', 'cotton', 'pink', 230),
(67, 'jeans', 'denim', 'blue', 900),
(68, 'kurti', 'silk', 'black', 500),
(69, 'kurti', 'cotton', 'yellow', 700),
(70, 'saree', 'satten', 'brown', 8000),
(71, 'anarkali', 'cotton', 'blue', 500),
(72, 'legging', 'cotton', 'white', 80),
(73, 'shorts', 'cotton', 'red', 100),
(74, 'onepiece', 'silk', 'green', 560),
(75, 'gown', 'satten', 'pink', 2300);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `S.no` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`S.no`, `Name`, `DOB`, `Address`, `Mobile`) VALUES
(1, 'Mansi', '2011-10-25', 'bhilwara', 7665715546),
(2, 'khushi', '2021-08-01', 'bhilwara', 8000729705),
(3, 'raj', '2021-12-16', 'chittor', 9413641457),
(4, 'tannu', '2021-07-11', 'chiittor', 7878350481),
(5, 'champu', '2013-02-09', 'banglore', 9876554321),
(6, 'giriraj', '2021-10-17', 'galodiya', 9461262293),
(7, 'saroj', '2021-10-30', 'gangapur', 9427899102),
(8, 'ratan', '2021-10-26', 'baroda', 7890654328),
(9, 'sanwar', '2021-11-01', 'bhilwara', 9567845678),
(10, 'b l sharma', '2021-04-06', 'mumbai', 7742657157);

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `name`, `type`, `color`, `price`) VALUES
(321, 'teddy', 'soft toy', 'pink', 3),
(322, 'frame', 'wooden', 'brown', 700),
(323, 'barbie', 'soft toy', 'blue', 1000),
(324, 'robot', 'hard toy', 'gray', 1300),
(325, 'pic_pillow', 'soft toy', 'red', 180),
(326, 'keychain', 'steal', 'blue', 250),
(327, 'mug', 'artificial', 'black', 50),
(328, 'bracelet', 'acessoeries', 'golden', 660),
(329, 'watch', 'acessoeries', 'silver', 1500),
(330, 'card', 'paper', 'purple', 180);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `brands` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `brands`, `type`, `ram`, `price`) VALUES
(51, 'dell', 'pc', 4, 243560),
(52, 'dell', 'laptop', 8, 20000),
(53, 'dell', 'tablet', 8, 23400),
(54, 'lenovo', 'pc', 8, 18000),
(55, 'lenovo', 'laptop', 16, 25000),
(56, 'lenovo', 'tablet', 16, 18000),
(57, 'apple', 'pc', 16, 100000),
(58, 'apple', 'laptop', 32, 180000),
(59, 'apple', 'tablet', 16, 180000),
(60, 'apple', 'mobile', 32, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

CREATE TABLE `makeup` (
  `id` int(11) NOT NULL,
  `product` varchar(20) NOT NULL,
  `expiry date` date NOT NULL,
  `brand` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`id`, `product`, `expiry date`, `brand`, `price`) VALUES
(324, 'eye liner', '2021-11-27', 'lakme', 250),
(325, 'kajal', '2021-10-18', 'swiss', 180),
(326, 'muskara', '2021-11-06', 'maybelline', 500),
(327, 'lipstick', '2022-04-22', 'L\'Oreal', 650),
(328, 'foundation', '2021-12-02', 'MAC', 600),
(329, 'primer', '2022-07-09', 'lakme', 400),
(330, 'lotion', '2021-10-05', 'nivia', 350),
(331, 'serum', '2022-02-23', 'streax', 550),
(332, 'blush', '2021-11-27', 'revlon', 1148),
(333, 'concealer', '2021-10-07', 'lakme', 700);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Roll_no` int(11) NOT NULL,
  `student.name` varchar(11) NOT NULL,
  `hindi` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `maths` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Roll_no`, `student.name`, `hindi`, `eng`, `maths`) VALUES
(991, 'khushbu', 9, 8, 9),
(992, 'VED', 7, 6, 9),
(993, 'ankit', 10, 9, 6),
(994, 'priyanshu', 8, 6, 8),
(995, 'rupal', 5, 5, 7),
(996, 'abhishek', 9, 8, 6),
(997, 'priyanka', 9, 5, 7),
(998, 'aditi', 10, 8, 9),
(999, 'aishwarya', 5, 8, 9),
(1000, 'rohan', 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `id` int(11) NOT NULL,
  `product` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `brand` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `product`, `type`, `brand`, `price`) VALUES
(70, 'pencil', 'sketch', 'natraj', 10),
(71, 'pencil', 'normal', 'sillz', 9),
(31, 'pen', 'bol', 'blue', 180),
(78, 'pen', 'bol', 'black', 180),
(76, 'color', 'pencil', 'natraj', 100),
(77, 'color', 'watercolor', 'natraj', 980),
(75, 'eraser', 'smooth', 'natraj', 20),
(74, 'sharpner', 'plastic', 'natraj', 80),
(73, 'marker', 'white board', 'black', 90),
(72, 'highlighter', 'normal', 'pink', 60);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll_no` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `class` int(11) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll_no`, `Name`, `class`, `Address`, `Mobile`) VALUES
(101, 'koyal', 3, 'azad nagar', 7665715546),
(102, 'somesh', 5, 'nasirabad', 9413641457),
(103, 'bhavesh', 9, 'bapu nagar', 9461262293),
(104, 'santosh', 6, 'bhopal', 8000729705),
(105, 'rajesh', 4, 'chittor', 9876554321),
(106, 'komal', 9, 'bhopalganj', 7665715546),
(107, 'jagdish', 2, 'banglore', 7665715546),
(108, 'maya', 10, 'kiran path', 9876544567),
(109, 'kishan', 8, 'ajmer', 7878350481),
(110, 'happy', 11, 'hyderabad', 9413641457);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dresses`
--
ALTER TABLE `dresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makeup`
--
ALTER TABLE `makeup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Roll_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dresses`
--
ALTER TABLE `dresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `makeup`
--
ALTER TABLE `makeup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `Roll_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Roll_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
