-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2018 at 03:27 PM
-- Server version: 5.5.42-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `soxbty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `level`) VALUES
(4, 'q', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 3),
(6, 'manager', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 2),
(8, 'head', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 3),
(9, 'seller', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user` varchar(15) COLLATE utf8_bin NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase` int(11) DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `product`, `size`, `quantity`, `purchase`, `checked`) VALUES
(9, 'sUSzLW10R2lcQxQ', 37, 2, 6, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`) VALUES
(2, 'Star Wars'),
(3, 'X-mas');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `product` int(11) DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8_bin NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `reply_to` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `product`, `ip`, `accepted`, `reply_to`) VALUES
(7, 'laza', 'stvarno kul carape', 38, '0', 1, NULL),
(10, 'ana', 'asd', 38, '::1', 1, NULL),
(11, 'asd', '123', 37, '::1', 0, NULL),
(12, 'asd', 'asd', 2, '::1', 1, NULL),
(13, 'yo', 'asd', 39, '::1', 0, NULL),
(14, 'asd', 'asd', 34, '::1', 1, NULL),
(15, 'brat', 'znaci sve kul ali mi se ne svidja boja ako moze sledeci put pink neka da bude znaci tebra molim te', 3, '::1', 1, NULL),
(16, 'johnny', 'jack and johnny calling', 45, '::1', 1, NULL),
(17, 'a', 'tr', 32, '::1', 0, NULL),
(18, 'q', 'thank you', NULL, '::1', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `user`, `timestamp`) VALUES
(1, 0, '0000-00-00 00:00:00'),
(2, 4, '2018-01-16 01:09:15'),
(3, 4, '2018-01-25 13:53:10'),
(4, 4, '2018-01-27 01:51:04'),
(5, 4, '2018-02-01 01:03:20'),
(6, 4, '2018-02-03 01:08:43'),
(7, 4, '2018-02-06 02:01:20'),
(8, 4, '2018-02-11 18:12:22'),
(9, 4, '2018-02-15 00:05:16'),
(10, 4, '2018-02-18 09:58:32'),
(11, 4, '2018-02-18 10:00:39'),
(12, 4, '2018-02-18 10:20:44'),
(13, 4, '2018-02-18 10:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `collection` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `collection`, `date_added`) VALUES
(1, 'Cow', 14.9, 2, '2017-09-08 10:14:14'),
(2, 'Luke', 9.99, 2, '2017-09-08 10:14:39'),
(3, 'Santa', 23.99, 3, '2017-09-08 10:15:08'),
(31, 'Summer', 12.5, 2, '2018-01-25 23:44:23'),
(32, 'Crystal', 12.9, 2, '2018-01-27 01:51:45'),
(33, 'Carapa', 5.99, 3, '2018-01-27 01:52:23'),
(34, 'SENJOR', 9.99, 2, '2018-01-27 01:52:58'),
(35, 'Delises', 12.99, 2, '2018-01-27 02:03:25'),
(36, 'Madafaka', 7.99, 2, '2018-01-27 02:03:46'),
(37, 'NOVA', 12.99, 2, '2018-01-27 03:15:21'),
(38, 'RanDOOM', 2499, 2, '2018-01-29 19:35:36'),
(39, 'CarAPA', 1899, 3, '2018-01-30 01:16:18'),
(40, 'yoyo', 1233, 2, '2018-01-30 01:18:30'),
(44, 'ASDAKJNSJK', 4567, 2, '2018-01-30 01:21:24'),
(45, 'asd', 4556, 3, '2018-01-30 01:26:04'),
(49, 'klindza', 4561, 2, '2018-01-30 01:33:25'),
(52, 'NoviXxX', 1234, 2, '2018-01-30 01:47:55'),
(53, 'NoWW', 2499, 0, '2018-02-02 00:29:04'),
(54, 'qwert', 1222, 2, '2018-02-03 01:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `sock_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `name`, `email`, `description`, `sock_name`, `date_submitted`) VALUES
(1, 'laza', 'jelic@laza.com', 'this is the best', '0', '2018-02-23 15:56:45'),
(2, 'milos', 'asd@sklf.com', 'ajhs aksdahkjs dabjhsd vasgdasdsa kdfgasjajsdfvadsfjahsdbf asdfkasjndfjk as', 'qwerTttY', '2018-02-23 16:03:04'),
(3, 'milos', 'asd@sklf.com', 'ajhs aksdahkjs dabjhsd vasgdasdsa kdfgasjajsdfvadsfjahsdbf asdfkasjndfjk as', 'qwerTttY', '2018-02-23 16:03:28'),
(4, 'milos', 'asd@sklf.com', 'ajhs aksdahkjs dabjhsd vasgdasdsa kdfgasjajsdfvadsfjahsdbf asdfkasjndfjk as', 'qwerTttY', '2018-02-23 16:03:51'),
(5, 'ana', 'asdjka@ajs.com', 'as bdaks jdansdksa dhabs', 'new sock', '2018-02-23 16:22:29'),
(6, 'name', 'ajsd@asjd.com', 'akhs jda', 'gahsjdk', '2018-02-23 16:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `hash` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `address` varchar(30) COLLATE utf8_bin NOT NULL,
  `zip` varchar(5) COLLATE utf8_bin NOT NULL,
  `city` varchar(30) COLLATE utf8_bin NOT NULL,
  `country` varchar(5) COLLATE utf8_bin NOT NULL,
  `ip` varchar(20) COLLATE utf8_bin NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `shipped` tinyint(1) NOT NULL DEFAULT '0',
  `subscribed` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `hash`, `date_submitted`, `first_name`, `last_name`, `email`, `phone`, `address`, `zip`, `city`, `country`, `ip`, `confirmed`, `shipped`, `subscribed`) VALUES
(11, 'cm5WdRbVuEtTq2kWDVRNTEPOXHCiGpVS', '2018-02-17 15:48:55', 'laa', 'ertyui', 'jelic.ecloga@gmail.com', '123', 'adresa', '37000', 'ks', 'sr', '', 1, 0, 1),
(12, 'TXqpJpBL0KwYtq3o0A5TmuqJb0CkOoPH', '2018-02-03 01:54:54', 'Lazar', 'Jelic', 'jelic.ecloga@gmail.com', '0614437010', 'Adresa', '37000', 'Krusevac', 'Srbij', '', 1, 1, 1),
(13, '65FIQFtnDWOHlOiqIEV9o690rXpgFLwM', '2018-02-23 09:21:42', 'askdjkah', 'aksjdajksdn', 'akjsdn@ansjkf.com', '82123123', 'ashd', '23232', 'asdjnn', 'AR', '', 0, 0, 0),
(14, 'yZbEKNFZtYiVEkIiETl8NUk2Y04R26zA', '2018-01-29 23:05:12', 'kbh', 'hb', 'asdasd@asf.com', 'jh', '1231', '22222', 'asd', 'AG', '', 0, 0, 1),
(15, 'ydloWt1JxIkSg9ulTaP9UHGjMjJ8hk6P', '2018-02-11 18:39:29', 'lazar', 'jelic', 'jelic.ecloga@asmdk', '5678', 'ajhsdb', '21312', 'ashjdb', 'SN', '', 1, 0, 1),
(16, 'S7PGWg8hfDrTKjFN0bFxgJE4FjZMZQHR', '2018-02-06 02:02:17', 'qwert', 'sdfgh', 'asgd@aksf.com', '57', 'hjasd', '21312', 'bajsdhb', 'BL', '', 1, 1, 1),
(17, 'subrZ35A0hYQRWvex5BXayU0c1uBqWHS', '2018-02-06 02:02:19', 'Lazar', 'Jelka', 'jelic.ecloga@gmail.com', '0614437010', 'Vasilija Velikog', '37000', 'Krusevac', 'BL', '', 1, 0, 1),
(18, 'AzWWK4tnKwUAXeOqHxw9aqcN5RfT2x6C', '2018-02-01 23:52:35', 'sdaskd', 'qknakjsn', 'aksjdn@ajsd.com', '123123', 'asndk', '12312', 'kansdk', 'AF', '', 0, 0, 1),
(19, 'JyU8ryEOxKBnWRqy69VRA51SRr1sfOPZ', '2018-02-23 09:21:56', 'Michael', 'Jordan', 'michaelj@gmail.com', '1235124123', 'Smith street 3', '32354', 'Chicago', 'US', '::1', 0, 0, 0),
(20, 'bU6lzkejMYSfSgZfi1NByemmyvmAuYWF', '2018-02-14 12:10:33', 'la', 'aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', '::1', 0, 0, 1),
(21, 'oaTO7B27mODwSCzIvZM4ABz5C5LrQiEf', '2018-02-14 12:11:01', 'la', 'aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', '::1', 0, 0, 1),
(22, 'sy4Aa7IxWm3OZCxuCkydW8jye5Z5nElQ', '2018-02-14 12:11:03', 'la', 'aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', '::1', 0, 0, 1),
(23, 'GDEZBK5bnda19EfpPTEpmBHABqJ7Tj1z', '2018-02-14 12:11:25', 'la', 'aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', '::1', 0, 0, 1),
(24, 'Yl8oNxBADplD9dAvd3fptxHAnJkmkryi', '2018-02-14 12:12:42', 'la', 'aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', '::1', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `note` text COLLATE utf8_bin NOT NULL,
  `admin` int(11) NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product`, `size`, `note`, `admin`, `date_submitted`) VALUES
(1, 1, 1, 'Sold', 4, '0000-00-00 00:00:00'),
(2, 1, 1, 'reklama', 4, '0000-00-00 00:00:00'),
(3, 1, 1, '', 4, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, 'S'),
(2, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `product`, `size`, `quantity`) VALUES
(1, 37, 1, 1),
(2, 37, 2, 985),
(3, 38, 1, 100),
(4, 38, 2, 150),
(5, 45, 1, 2312),
(6, 45, 2, 12312),
(7, 49, 1, 123),
(8, 49, 2, 1234),
(9, 52, 1, 123),
(10, 52, 2, 123),
(11, 53, 1, 100),
(12, 53, 2, 50),
(13, 53, 1, 100),
(14, 53, 2, 50),
(15, 53, 1, 100),
(16, 53, 2, 50),
(17, 54, 1, 11),
(18, 54, 2, 13),
(19, 54, 1, 11),
(20, 54, 2, 13),
(21, 54, 1, 11),
(22, 54, 2, 13),
(23, 54, 1, 11),
(24, 54, 2, 13),
(25, 54, 1, 11),
(26, 54, 2, 13),
(27, 1, 1, 116),
(28, 1, 2, 0),
(29, 45, 1, 0),
(30, 45, 2, 12312),
(31, 45, 1, 0),
(32, 45, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `size` (`size`),
  ADD KEY `purchase` (`purchase`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `reply_to` (`reply_to`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `collection` (`collection`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `admin` (`admin`),
  ADD KEY `size` (`size`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `size` (`size`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`size`) REFERENCES `sizes` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`purchase`) REFERENCES `purchases` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`reply_to`) REFERENCES `comments` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`size`) REFERENCES `sizes` (`id`);
