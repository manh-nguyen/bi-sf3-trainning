-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2017 at 09:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `president_user`
--

CREATE TABLE `president_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `president_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `death` date NOT NULL,
  `took_office` date NOT NULL,
  `left_office` date NOT NULL,
  `party` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `party_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `term` int(11) NOT NULL,
  `vice_president` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `president_user`
--

INSERT INTO `president_user` (`id`, `name`, `president_code`, `password`, `image`, `birthday`, `death`, `took_office`, `left_office`, `party`, `party_color`, `term`, `vice_president`) VALUES
(1, 'anh da den', '123456', '$2y$13$k8kGHj2xsq89DXfG/ijDhOZFe/Hl6wNuz7qX4Mth4she8NkVG3dye', '/tmp/phpYKJeN8', '2017-04-04 00:00:00', '2017-05-06', '2017-09-11', '2014-03-12', 'fsafas', 'fsafaf', 1234, 'fsafsaf'),
(11, 'anhdaden', 'vietthang', '$2y$13$cMbDAe24Biv2rOUtupO3UOfGtJAhe6riXU1WKT..8lOsIEMG8r7yW', '/tmp/phpv3xPB8', '2012-01-01 00:00:00', '2012-01-01', '2012-01-01', '2012-01-01', 'sấf', 'fsfs', 2, 'fsfsf'),
(12, 'abc', 'abc', '$2y$13$0N4GSDhu4Xj6uMdvPbatmezgwfInmKa62h2HLQ7ja7xN5A7FnaZXO', '/tmp/phpjnOEW6', '2012-01-01 00:00:00', '2012-01-01', '2012-01-01', '2012-01-01', '1', 'red', 3, 'ádsaf'),
(13, 'anh da vàng', 'admin', '$2y$13$PQoWvR84cV8UBgMvZhqX0efj5wT1ipzBhnwQcxfMcMRVLsX.37M5u', '4d09e83b2bca29511ede42861893d731.jpeg', '2012-01-01 00:00:00', '2012-01-01', '2012-01-01', '2012-01-01', 'a', 'green', 1, 'dsadsa'),
(14, 'anh da đen', '1234', '$2y$13$f9BcZUQ.RwCBzejU91z0buWViWNeQ.IDNvpe32Tr9OEJEDfuEdvy6', '8d7290e5d5a1a38fc8317fcbbe7f431c.jpeg', '2012-01-01 00:00:00', '2012-01-01', '2012-01-01', '2012-01-01', 'ádfsfs', 'red', 4, 'dsafasfsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `president_user`
--
ALTER TABLE `president_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `president_code` (`president_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `president_user`
--
ALTER TABLE `president_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
