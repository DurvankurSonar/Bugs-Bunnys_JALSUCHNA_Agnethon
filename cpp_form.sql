-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 12:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpp_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_form`
--

CREATE TABLE `ad_form` (
  `id` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `Roleid` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ConfirmPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_form`
--

INSERT INTO `ad_form` (`id`, `Name`, `Email`, `Mobile`, `Roleid`, `Password`, `ConfirmPassword`) VALUES
(100, 'Ram', 'ram@gmail.com', '7751488996', '', 'Ram', 'Ram'),
(101, 'Yash', 'yash@gmail.com', '8656895223', '', 'yash', 'yash');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `area_id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `name`) VALUES
(1, 'Baliram peth'),
(2, 'MJ College'),
(3, 'Shani peth'),
(4, 'Kanchan Nagar'),
(5, 'Shivaji Nagar'),
(6, 'Navi Peth'),
(7, 'Jainabad');

-- --------------------------------------------------------

--
-- Table structure for table `entry_ad`
--

CREATE TABLE `entry_ad` (
  `id` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Addd` int(11) NOT NULL,
  `yuyi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entry_val`
--

CREATE TABLE `entry_val` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `FeedID` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Name` text NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`FeedID`, `Category`, `Name`, `Description`) VALUES
(1, 'Water Cleanliness', 'Kiran', ' Water is very clean'),
(8, 'Regular Problems', 'Prerana', 'Water is very dirty and also it smells bad '),
(9, 'Water Service', 'Yash Rathod', ' Water service is very good'),
(10, 'Water Cleanliness', 'Ashwini Lokhande', ' Water quality is good'),
(11, 'Water Cleanliness', 'Durvankur', ' Water quality is not good'),
(12, 'Water Delay', 'sanjay nemade', 'Water is delayed ');

-- --------------------------------------------------------

--
-- Table structure for table `news_admin`
--

CREATE TABLE `news_admin` (
  `NewsID` int(255) NOT NULL,
  `Blog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_admin`
--

INSERT INTO `news_admin` (`NewsID`, `Blog`) VALUES
(2, 'Pipeline break at shiv colony'),
(3, '  \r\n                 Water will not arrive tomorrow.'),
(4, '  Today water will not arrive due to pipeline leakage\r\n                 ');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `TimeID` int(11) NOT NULL,
  `Day` text NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`TimeID`, `Day`, `Date`, `Time`) VALUES
(1, 'Tuesday', '2023-04-10', '10.00 am to 12.00 pm'),
(2, 'Friday', '2023-04-13', '10.00 am to 12.00 pm'),
(3, 'Monday', '2023-04-16', '10.00am to 12.00pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `UserID` int(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `ResidentialArea` varchar(100) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `ConfirmPassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`UserID`, `Name`, `Email`, `Mobile`, `ResidentialArea`, `Password`, `ConfirmPassword`) VALUES
(20001, 'Pavan gurav', 'karodpatichinmay12@gmail.com', '7895689564', 'Kanchan Nagar', 'Pavan', 'Pavan'),
(20002, 'Pratik Umbarkar', 'vaibhavdaivadnya05@gmail.com', '9545532850', 'MJ College', 'Pratik', 'Pratik'),
(20005, 'Devesh Patil', 'devesh@gmail.com', '9545532836', 'Shivaji Nagar', 'Devesh', 'Devesh'),
(20006, 'Kiran Patil', 'kiran@gmail.com', '9565647898', 'Kanchan Nagar', 'Kiran', 'Kiran'),
(20007, 'Rakesh', 'rakesh@gmail.com', '6532456588', 'Mehrun', 'Rakesh', 'Rakesh'),
(20008, 'Shreya', 'shreya@gmail.com', '7775817072', 'Shani Peth', 'Shreya', 'Shreya'),
(20009, 'Prerana', 'prerana@gmail.com', '8856887270', 'Jainabad', 'Prerana', 'Prerana'),
(20010, 'Varsha', 'varsha@gmail.com', '9637313271', 'Baliram Peth', 'Varsha', 'Varsha'),
(20011, 'Yash Rathod', 'jaywan5588@gmail.com', '7276191904', 'Shivaji Nagar', 'yash@123', 'yash@123'),
(20014, 'ramesh', 'sonardurva@gmail.com', '5555555555', 'Baliram peth', '123', '123'),
(20015, 'suresh', 'sonardurva194@gmail.com', '7588999999', 'MJ College', '123', '123'),
(20016, 'Duravnkur sonar', 'itsdurva194@gmail.com', '9898789874', 'Navi Peth', 'Duravnkur', 'Durvankur'),
(20017, 'Sanjay Nemade', 'sanjaynemade0@gmail.com', '7588613801', 'Baliram peth', 'sanjay', 'sanjay');

-- --------------------------------------------------------

--
-- Table structure for table `val_form`
--

CREATE TABLE `val_form` (
  `ValvemenID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `ResidentialArea` varchar(100) NOT NULL,
  `SubArea` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `ConfirmPassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `val_form`
--

INSERT INTO `val_form` (`ValvemenID`, `Name`, `Email`, `Mobile`, `ResidentialArea`, `SubArea`, `Password`, `ConfirmPassword`) VALUES
(3036, 'Parag Chopade', 'parag@gmail.com', '7789879878', 'Kanchan Nagar', '', 'Parag', 'Parag'),
(3039, 'Shreyas Jadhav', 'shreyas@gmail.com', '7789879878', 'Kanchan Nagar', '', 'Shreyas', 'Shreyas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_form`
--
ALTER TABLE `ad_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `feed_back`
--
ALTER TABLE `feed_back`
  ADD PRIMARY KEY (`FeedID`);

--
-- Indexes for table `news_admin`
--
ALTER TABLE `news_admin`
  ADD PRIMARY KEY (`NewsID`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`TimeID`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `val_form`
--
ALTER TABLE `val_form`
  ADD PRIMARY KEY (`ValvemenID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_form`
--
ALTER TABLE `ad_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `FeedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_admin`
--
ALTER TABLE `news_admin`
  MODIFY `NewsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `TimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `UserID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20018;

--
-- AUTO_INCREMENT for table `val_form`
--
ALTER TABLE `val_form`
  MODIFY `ValvemenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3040;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
