-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 06, 2018 at 08:47 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bsmonitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bs_value` int(11) UNSIGNED NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `date`, `bs_value`, `num`) VALUES
(1, '2017-03-17 15:05:19', 120, 1),
(2, '2017-03-17 15:05:27', 172, 1),
(3, '2017-03-17 15:05:31', 129, 1),
(4, '2017-03-17 21:06:40', 100, 2),
(5, '2017-03-17 21:06:42', 100, 2),
(6, '2017-03-17 21:07:11', 100, 2),
(8, '2017-03-18 07:01:09', 122, 2),
(9, '2017-03-18 07:01:12', 34, 2),
(10, '2017-03-18 07:01:16', 90, 2),
(11, '2018-08-06 14:11:56', 237, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;