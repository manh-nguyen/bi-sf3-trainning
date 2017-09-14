-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2017 at 09:11 AM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `president`
--

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `took_office` datetime DEFAULT NULL,
  `left_office` datetime DEFAULT NULL,
  `party` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `party_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vice_president` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `term` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `death` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id`, `name`, `username`, `password`, `birthday`, `took_office`, `left_office`, `party`, `party_color`, `vice_president`, `term`, `images`, `death`) VALUES
(1, 'Obama', '123', '$2y$13$I1OdYiZXGPh3q1DfApCWRucWQlUY1fU6AsPYEh0/jQv5tcyjVYB.q', '1995-07-12 00:00:00', '2017-09-07 00:00:00', '2017-09-12 00:00:00', 'Democratic-Republican', '#f4b49c', 'Hello', '12', '6baa66926e89c04cf7af6cb929a64ef1.jpeg', NULL),
(2, 'Bach', '12', '$2y$13$CGwwXZZmv8ZVvmqSZ9ue0OzdMOpPbTTTI1tRZBfC7Uss7Wm6G8tPu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Obama', '3', '$2y$13$UVJqfEwii81udgbOnEnELef4i7KMXb/n0fmDVHMs..i0ILMU8B5pG', '2014-04-01 00:00:00', '2017-01-01 00:00:00', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, '4ef838dceeb9d3481084c299d6736ff0.jpeg', NULL),
(9, 'Hello', '2', '$2y$13$WTrT1o4UWMV1rMz9iM3YXOwVCdXmdIAeAAyK8ktxleUUA7XYVvyhq', '1991-01-01 00:00:00', '2016-01-01 00:00:00', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, 'd1a0dffa340e8f9239f8a8e6782465dc.jpeg', NULL),
(10, 'Trump', '4', '$2y$13$MRHYtcdCEpmIUf/4Q8Fv2e1PyG5GfsWm/wLhRjgTCOOddMIEwX9bO', '2017-01-01 00:00:00', '2017-01-01 00:00:00', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6E8BD214F85E0677` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
