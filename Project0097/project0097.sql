-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 09:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project0097`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Email` varchar(30) NOT NULL,
  `ProductName` varchar(40) NOT NULL,
  `ProductPrice` int(8) NOT NULL,
  `ProductCode` varchar(15) NOT NULL,
  `Availabilty` varchar(3) NOT NULL,
  `ProductDiscount` varchar(3) NOT NULL,
  `ProductBrands` varchar(35) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(18) NOT NULL,
  `Phone` int(11) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Time` time(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Name`, `Email`, `Phone`, `City`, `Message`, `Time`) VALUES
('Tayyab  Hassan Tarar', 'tayyabhassantarar@', 2147483647, 'Lahore', 'dsfasdfdsaf dsadsa dsaf dsa fdsaf dsaf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000'),
('Umar Farooq', 'dsafhjk@gmail.com', 12345678, 'Lahore', 'dsafadsf', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductName` varchar(40) NOT NULL,
  `ProductPrice` int(8) NOT NULL,
  `ProductCode` varchar(15) NOT NULL,
  `Availability` varchar(3) NOT NULL,
  `ProductDiscount` varchar(3) NOT NULL,
  `ProductBrands` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductName`, `ProductPrice`, `ProductCode`, `Availability`, `ProductDiscount`, `ProductBrands`) VALUES
('watch', 5800, 'dsafdsaf', 'In ', '25', 'apple'),
('Laptop', 50000, 'LP22', 'In ', '25', 'apple, samsung'),
('Watch', 3200, 'wat22', 'In ', '33', 'apple, samsung'),
('Seeds', 3200, '1509', 'In ', '6', 'Sarsabz'),
('Laptop', 50000, 'X260', 'In ', '2', 'Lenovo'),
('Fertilizers', 3200, 'Fer21', 'In ', '2', 'DAP'),
('dfsgsdfg', 234, 'dsf', 'Out', '34', 'gfdgds');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Name`, `Email`, `Phone`, `Password`) VALUES
('Tayyab  Hassan Tarar', 'tayyabhassantarar@', 2147483647, '12345678'),
('Umar Farooq', 'dsafhjk@gmail.com', 324023, 'umar815'),
('Umar Farooq', 'dsafhjk@gmail.com', 324023, 'umar815'),
('Tayyab  Hassan Tarar', 'tayyabhassantarar@gmail.com', 2147483647, 'asdfgh'),
('Tayyab  Hassan Tarar', 'tayyabhassantarar@gmail.com', 2147483647, 'asdfgh'),
('ali', 'ali@gmail.com', 1122334455, 'asdfgh'),
('Abdul Haie', 'abk@gmail.cpm', 1122334455, 'asdfg123'),
('Tarar', 'tarar@gmail.com', 12345678, '12345678'),
('Jutt', 'jutt@gmail.com', 1122334455, 'aaaaaaaa'),
('Umar Farooq', 'umarfarooq@gmail.com', 12345678, '11111111'),
('tayyab', 'tht@gmail.com', 234, 'asdfgg'),
('ad', 'adad@rr', 234234, 'adada'),
('ads', 'adad@rr', 21212, '121212'),
('ewre', 'qwer@raar', 12321, 'fdsaffdsa'),
('asdf', 'sadfdsaf@adsf.com', 0, '234w3qr'),
('dsaf', 'asdf@dsf', 0, 'dsaf'),
('dfa', 'aa@afd', 0, 'adsfdsaf'),
('dfa', 'aa@afd', 0, 'adsfdsaf'),
('dfa', 'aa@afd', 0, 'adsfdsaf'),
('sadf', 'asdf@adsf', 0, 'sadf'),
('dsaf', 'dsaf@dsaf', 0, 'sadf'),
('Tayyab  Hassan Tarar', 'asdf@dsr', 0, 'retrew'),
('Tayyab  Hassan Tarar', 'sadf@gmail.com', 0, 'sadf'),
('Tayyab  Hassan Tarar', 'sadf@gmail.com', 0, 'sadf'),
('Tayyab  Hassan Tarar', 'sadf@gmail.com', 0, 'sadf'),
('ret', 'rewt@dr', 43254325, 'sadf'),
('ret', 'rewt@dr', 43254325, 'sadf'),
('dsaf', 'sadfdsaf@asfd', 213213, 'adsfdsaf'),
('dsaf', 'sadfdsaf@asfd', 213213, 'adsfdsaf'),
('sadf', 'sadf@adf', 43254325, 'dsdfg'),
('sadf', 'sadf@adf', 43254325, 'dsdfg'),
('asfd', 'asfd@asdf', 324214, '1234'),
('aaaa', 'adfa@asdf', 1234, 'tayyab815'),
('dsfa', 'sadf@gmail.com', 12431234, 'adsfdsaf'),
('sdgf', 'ali@gmail.com', 324324, 'dsfdsaf'),
('Tayyab', 'tarar@gmail.com', 3234234, 'adtf vdasfv'),
('Shazal Khan', 'shazal@dsaf.com', 2147483647, 'dsa;gfnc;sahdfb'),
('dsgfdsf', 'gdsfg@dsaf', 345, 'fdgfsdg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
