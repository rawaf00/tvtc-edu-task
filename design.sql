-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 07:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(6) NOT NULL,
  `ty_id` varchar(6) NOT NULL,
  `details` text NOT NULL,
  `pic` varchar(128) NOT NULL,
  `us_id` varchar(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `ty_id`, `details`, `pic`, `us_id`, `date`) VALUES
(4, '1', 'من النت', 'redtshirt.jpg', '18', '2017-11-23 12:12:42'),
(5, '1', 'هدية', 'emptees1.jpg', '18', '2017-11-23 12:16:54'),
(6, '1', 'اشتريتها من الشامل', '6.jpg', '18', '2017-11-30 08:37:06'),
(7, '1', 'من الحسون', '12.jpg', '18', '2017-11-30 08:38:45'),
(8, '1', 'من محل الجاسر للرياضة', '7.jpg', '18', '2017-11-30 08:52:18'),
(9, '2', 'الجاسر', 'AY2881_01_laydown.jpg', '18', '2017-11-30 08:53:08'),
(10, '2', 'الامبرطورة', 'im4ages.jpg', '18', '2017-11-30 09:30:29'),
(11, '2', 'النخيل', 'imag7es.jpg', '18', '2017-11-30 09:30:54'),
(12, '2', 'اشتريته من محل الاسطورة ', 'jinsss.jpg', '18', '2017-11-30 09:42:07'),
(13, '2', 'جاني هدية', 'nike111.jpg', '18', '2017-11-30 09:43:54'),
(14, '3', 'حصري بالعثيم مول', 'shoes44.jpg', '18', '2017-11-30 09:46:38'),
(15, '3', 'اشتريته من محل الحسون سنتر', 'shos56.jpg', '18', '2017-11-30 09:47:30'),
(16, '3', 'الحذاء حصري لمحل المتجر الرياضي', 'Sport-Shoes.jpg', '18', '2017-11-30 09:48:21'),
(17, '2', 'يوجد عند محل فالنسيا للرياضة', 'srwal88.jpg', '18', '2017-11-30 09:51:57'),
(19, '1', 'الحسون', 'ima1ges.jpg', '21', '2017-12-14 09:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(9) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(7, 'faisal@hotmail.com', 'drgasr'),
(8, 'faisal@hotmail.com', '1223');

-- --------------------------------------------------------

--
-- Table structure for table `sets`
--

CREATE TABLE `sets` (
  `id` int(6) NOT NULL,
  `se_name` varchar(90) NOT NULL,
  `cl_id1` int(6) NOT NULL,
  `cl_id2` int(6) NOT NULL,
  `cl_id3` int(6) NOT NULL,
  `us_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sets`
--

INSERT INTO `sets` (`id`, `se_name`, `cl_id1`, `cl_id2`, `cl_id3`, `us_id`) VALUES
(4, 'تجربة طقم', 6, 11, 14, 18),
(8, 'الطقم 2', 4, 9, 14, 18),
(9, 'Mohammed', 7, 10, 15, 20),
(10, 'طقم رواف', 5, 11, 15, 8),
(11, 'نايس', 6, 17, 16, 21),
(12, 'الطقم الثالث', 5, 11, 15, 18),
(13, 'good', 4, 17, 15, 21),
(14, '12', 6, 11, 15, 21);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(15) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `label`) VALUES
(1, 'فنيلة'),
(2, 'بنطلون'),
(3, 'حذاء');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `mobile` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `name`, `mobile`) VALUES
(8, 'gg@gmail.com', 'ggEhKZ7j5puQE', 'gg', '956565645665645'),
(9, 'abbas@afandy.com', 'abQhLhoyrBZGo', 'Abbas', '3546845834'),
(18, 'ali@gmail.com', 'alAIbWFoq8G7M', 'Ali', '23423'),
(19, 'abdrbh@abbas.com', 'ab.dvv.zVP1zE', 'عبدربه', '35135435'),
(20, 'mohammed@gmail.com', 'mo8SQJQXv8WYs', 'Mohammed', '123'),
(21, 'faisal@hotmail.com', 'faWHnX5M71HfE', 'faisal', '5455454545'),
(22, 'mr@gmail.com', 'mrnk1TCh6u4d6', 'sdjksk', '5545757575'),
(23, 'mr.rar@hotmail.com', 'mrnk1TCh6u4d6', 'rawaf', '532131265218');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sets`
--
ALTER TABLE `sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sets`
--
ALTER TABLE `sets`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
