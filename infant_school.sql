-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 04:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infant_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby_sitter`
--

CREATE TABLE `baby_sitter` (
  `id` int(11) NOT NULL,
  `sitter_name` varchar(199) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(111) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address_sitter` varchar(100) NOT NULL,
  `id_child` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `age` int(11) NOT NULL,
  `cv` varchar(250) NOT NULL,
  `nationalities` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baby_sitter`
--

INSERT INTO `baby_sitter` (`id`, `sitter_name`, `email`, `password`, `phone`, `address_sitter`, `id_child`, `create_at`, `status`, `age`, `cv`, `nationalities`) VALUES
(1, 'omer', 'omer@gmali.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'sund', '12233344', 0, '2019-04-02 19:05:17', 0, 21, 'post', ''),
(2, 'sddff', 'ali@gmali.com', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'sssss', '34455', 0, '2019-04-02 19:05:41', 0, 34, 'xxxd', '');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id_child` int(11) NOT NULL,
  `full_name` varchar(199) NOT NULL,
  `age` int(11) NOT NULL,
  `full_name_m` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `nationalities` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby_sitter`
--
ALTER TABLE `baby_sitter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id_child`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby_sitter`
--
ALTER TABLE `baby_sitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id_child` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
