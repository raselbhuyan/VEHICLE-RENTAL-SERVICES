-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 02:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `NAME` varchar(40) NOT NULL,
  `USERID` varchar(40) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `PHONE` varchar(11) NOT NULL,
  `V_TYPE` char(1) NOT NULL,
  `STATUS` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`NAME`, `USERID`, `PASSWORD`, `EMAIL`, `ADDRESS`, `PHONE`, `V_TYPE`, `STATUS`) VALUES
('asdasd', 'abcd12', '123456789', 'asd@gmail.com', 'bbsr\r\n', '2', 'C', 'o'),
('Abhisek Jena', 'abhi123', 'abhi12345', 'abhi23@gmail.com', 'BBSR', '9937456192', 'C', 'r'),
('Admin', 'baibhab1234', '123456789', 'baibhab.biswaranjan@gmail.com', 'PRABHU KRUPA,PLOT NO. 686/2203/1,BRAHMESWARPATNA', '9937456192', 'C', 'o'),
('Jaiguru Panda', 'jaiguru123', 'jaiguru12345', 'jai@gmail.com', 'BBSR', '7876543210', 'C', 'o'),
('Narayan Raj', 'narayan123', 'narayan1234', 'narayan@gmail.com', 'bbsr', '7865432100', 'B', 'o'),
('Ramesh Das', 'ramesh123', 'ramesh12345', 'ramu@gmail.com', 'BBSR', '9876543210', 'S', 'o'),
('Rashmi', 'rashmi123', 'rashmi12345', 'rashmi@gmail.com', 'bbsr', '9439856656', 'C', 'o'),
('Shubham Mishra', 'shubham123', 'shubham12345', 'shubhammishra920@gmail.com', 'BBSR', '8984561720', 'S', 'o'),
('Sidharth Mandal', 'sidharth123', 'sidharth12345', 'sidharth@gmail.com', 'BBSR', '9567438910', 'S', 'o'),
('a', 'xyz23', 'hifi12345', 'lucky.baibhab08@gmail.com', 'CTCK', '9876543210', 'C', 'o');

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

CREATE TABLE `vehicledetails` (
  `USERID` char(40) NOT NULL,
  `V_TYPE` char(1) NOT NULL,
  `V_NAME` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicledetails`
--

INSERT INTO `vehicledetails` (`USERID`, `V_TYPE`, `V_NAME`) VALUES
('narayan123', 'B', 'Maruti'),
('narayan123', 'B', 'Suzuki'),
('narayan123', 'B', 'Hero Honda'),
('narayan123', 'B', 'Yamaha'),
('narayan123', 'B', 'Yamaha'),
('narayan123', 'B', 'Yamaha'),
('sidharth123', 'S', 'Activa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`USERID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
