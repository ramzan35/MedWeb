-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 01:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `catg` varchar(40) NOT NULL,
  `subcatg` varchar(40) NOT NULL,
  `QTY` int(11) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `info` varchar(500) NOT NULL,
  `dat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`catg`, `subcatg`, `QTY`, `itemno`, `price`, `desc`, `info`, `dat`) VALUES
('1', 'drugs and medications', 200, 'cs1', '700', 'cough syrup', 'medicinal drug used in those with coughing and related conditions', '24-07-2016'),
('1', 'drugs and medications', 100, 'cs2', '200', 'pain killers', 'These drugs provide pain management', '24-07-2016'),
('1', 'drugs and medications', 150, 'cs3', '100', 'antibiotics', ' used to treat or prevent bacterial infections', '24-07-2016'),
('1', 'drugs and medications', 100, 'cs4', '900', 'multi vitamins', 'provided in combination with dietary minerals', '24-07-2016'),
('1', 'drugs and medications', 100, 'cs5', '400', 'energy bars', 'supplemental bars containing cereals and other high energy foods targeted at people who require quick energy', '24-07-2016'),
('1', 'medicalaccessories', 200, 'ma1', '500', 'syringes', 'a simple pump consisting of a plunger that fits tightly in a tube', '24-07-2016'),
('1', 'medicalaccessories', 100, 'ma2', '200', 'gloves', 'disposable gloves used during medical examinations and procedures', '24-07-2016'),
('1', 'medicalaccessories', 150, 'ma3', '100', 'masks', ' to catch the bacteria shed in liquid droplets and aerosols', '24-07-2016'),
('1', 'medicalaccessories', 100, 'ma4', '900', 'coldhot packs', '', '24-07-2016'),
('1', 'medicalaccessories', 100, 'ma5', '400', 'ancle support', '', '24-07-2016'),
('1', 'medicalaccessories', 100, 'ma6', '200', 'knee support', '', '24-07-2016'),
('1', 'medicalaccessories', 100, 'ma7', '200', 'elboe support', '', '24-07-2016'),
('1', 'medicalaccessories', 100, 'ma8', '150', 'blood pressure monitor', '', '24-07-2016'),
('1', 'skinandbodycare', 200, 'sb1', '500', 'facial tissues', '', '24-07-2016'),
('1', 'skinandbodycare', 100, 'sb2', '200', 'sun cream', '', '24-07-2016'),
('1', 'skinandbodycare', 150, 'sb3', '100', 'face wash', '', '24-07-2016'),
('1', 'skinandbodycare', 100, 'sb4', '900', 'face moisturizer', '', '24-07-2016'),
('1', 'skinandbodycare', 100, 'sb5', '400', 'bathing bars', '', '24-07-2016'),
('1', 'skinandbodycare', 100, 'sb6', '200', 'shampoo', '', '24-07-2016'),
('1', 'skinandbodycare', 100, 'sb7', '200', 'hair colorants', '', '24-07-2016'),
('1', 'vaterinaryitems', 200, 'vi1', '500', 'dog food', '', '24-07-2016'),
('1', 'vaterinaryitems', 94, 'vi2', '200', 'cat food', '', '24-07-2016'),
('1', 'vaterinaryitems', 150, 'vi3', '100', 'pet supplements', '', '24-07-2016'),
('1', 'vaterinaryitems', 100, 'vi4', '900', 'tick repellent powders', '', '24-07-2016'),
('1', 'vaterinaryitems', 100, 'vi5', '400', 'pet shampoo', '', '24-07-2016');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `pname` varchar(30) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `ac_no` varchar(30) NOT NULL,
  `mob_no` varchar(30) NOT NULL,
  `add` varchar(300) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `order_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pname`, `itemno`, `price`, `size`, `uname`, `ac_no`, `mob_no`, `add`, `bank`, `city`, `order_no`) VALUES
('cat food', 'vi2', 'Rs200', '3', 'Mr.Â ramzan', 'jjjjj', 'jjjjjj', 'jjjj', 'Peoples', 'jjjj', 'ord494'),
('cat food', 'vi2', 'Rs200', '3', 'Mr.Â ramzan', 'ffgg', 'g', 'g', 'Peoples', 'g', 'ord199');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `title` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gen` varchar(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `add` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `coun` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`title`, `fname`, `lname`, `gen`, `id`, `pass`, `phone`, `add`, `city`, `coun`, `dob`) VALUES
('Mr.', 'thareef', 'binbaid', 'male', 'rrr@gmsil.com', 'opijk789', '9090906666', '909090966fdghb', 'gdngdfbdg', 'sfgbdh', '90'),
('Mr.', 'ramzan', 'kkkk', 'male', 'xxxxz@gmail.com', 'dieze4567', '000998877', 'tdfyvvgjbvjh', 'yhguj', 'unojnj', 'huigiy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
