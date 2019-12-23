-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 04:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestatedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `message`, `name`, `email`, `subject`) VALUES
(0, 'Payment issue......', 'Daniel Varghese', 'danny@gmail.com', 'service'),
(0, 'Looking for property around Delhi NCR.', 'Nitin Krishna', 'niti@yahoo.com', 'suggestions'),
(0, ' Builder contact details....', 'Naryana murthy', 'nmurty@rediffmail.com', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `house_id` int(11) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rent_cost` varchar(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `location_description` text NOT NULL,
  `max_capacity` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`house_id`, `house_type`, `image`, `rent_cost`, `location`, `location_description`, `max_capacity`, `name`, `contact`, `status`) VALUES
(0, '2BHK', 'search1.jpg', '41L', 'Delhi', 'Exclusive 2BHK compound around MG road.', '800Sq. Ft.', 'Deepak Sharma', 2147483647, 'Added'),
(0, '4BHK', 'search2.jpg', '79.80L', 'Mumbai', 'This property is 4BHK compound near Juhu beach.', '1470Sq. Ft.', 'Abhiman K', 228691141, 'Added'),
(0, '3BHK', 'search3.jpg', '46L', 'Delhi', 'Shubh apartment is one of the popular projects located near Raj Nagar.', '90 Sq. Yard', 'Bricks Builder', 979494130, 'Added'),
(0, '2BHK', 'search4.jpg', '34L', 'Mumbai', '2BHK property for sale in Rama Park, Mumbai.', '540Sq. Ft.', 'JMD Builders', 2147483647, 'Added'),
(0, '2BHK', 'search5.jpg', '21L', 'Banglore', 'Ready  to move 3BHK builder floor  in Uttam Nagar for sale.', '540Sq. Ft.', 'Monu Chawla', 2147483647, 'Added'),
(0, '3BHK', 'comfortable-beautiful-house-my-dream-home-grand-mansion-bachelor-pad-castle.jpg', '69.13L', 'Banglore', 'Great connectivity and convenient accesibility to major places around.', '660Sq. Ft.', 'Vikas Mehl', 2147483647, 'Added');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
