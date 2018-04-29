-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2018 at 05:34 AM
-- Server version: 5.5.42-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dzoks`
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `product`, `size`, `quantity`, `purchase`, `checked`) VALUES
(10, 'sUSzLW10R2lcQxQ', 37, 2, 1, NULL, 0),
(11, 'sUSzLW10R2lcQxQ', 38, 1, 3, NULL, 0),
(12, 'NIGPDiD5C7kMV23', 38, 2, 2, NULL, 0),
(13, 'L82CsTyaPusPeId', 38, 2, 1, 25, 1),
(14, 'U9JtP7tMgM8D6gv', 1, 1, 1, NULL, 0),
(15, 'dGyGXicnb5qJLIq', 38, 2, 1, NULL, 0),
(16, 'jQbfWeeoehV2J8l', 38, 2, 1, NULL, 0),
(17, 'vTW2n3UQtGjoXJa', 38, 2, 1, NULL, 0),
(18, 'z4o0btMPk6ClkQw', 37, 2, 2, 1001, 0),
(19, 'BbB2JjGznuM0lnI', 38, 2, 1, 27, 1),
(20, 'Z4SYh4ySsrqD8Jw', 38, 1, 4, 28, 1),
(21, 'Z4SYh4ySsrqD8Jw', 38, 2, 3, 1001, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `product`, `ip`, `accepted`, `reply_to`) VALUES
(7, 'laza', 'stvarno kul carape', 38, '0', 1, NULL),
(10, 'ana', 'asd', 38, '::1', 1, NULL),
(11, 'asd', '123', 37, '::1', 1, NULL),
(12, 'asd', 'asd', 2, '::1', 1, NULL),
(13, 'yo', 'asd', 39, '::1', 0, NULL),
(14, 'asd', 'asd', 34, '::1', 1, NULL),
(15, 'brat', 'znaci sve kul ali mi se ne svidja boja ako moze sledeci put pink neka da bude znaci tebra molim te', 3, '::1', 1, NULL),
(16, 'johnny', 'jack and johnny calling', 45, '::1', 1, NULL),
(17, 'a', 'tr', 32, '::1', 0, NULL),
(18, 'q', 'thank you', NULL, '::1', 0, 7),
(19, 'head', 'yo yo ma niga', NULL, '::1', 0, 11),
(20, 'head', 'another reply', NULL, '::1', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(13, 4, '2018-02-18 10:31:42'),
(14, 8, '2018-02-25 19:26:23'),
(15, 4, '2018-03-11 23:51:48'),
(16, 4, '2018-04-08 23:19:03'),
(17, 4, '2018-04-28 22:09:10'),
(18, 4, '2018-04-28 22:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

CREATE TABLE `methods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `methods`
--

INSERT INTO `methods` (`id`, `name`) VALUES
(1, 'cash'),
(2, 'online');

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
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `name`, `email`, `description`, `date_submitted`) VALUES
(1, 'laza', 'jelic@laza.com', 'this is the best', '2018-02-23 15:56:45'),
(2, 'milos', 'asd@sklf.com', 'ajhs aksdahkjs dabjhsd vasgdasdsa kdfgasjajsdfvadsfjahsdbf asdfkasjndfjk as', '2018-02-23 16:03:04'),
(3, 'milos', 'asd@sklf.com', 'ajhs aksdahkjs dabjhsd vasgdasdsa kdfgasjajsdfvadsfjahsdbf asdfkasjndfjk as', '2018-02-23 16:03:28'),
(4, 'milos', 'asd@sklf.com', 'ajhs aksdahkjs dabjhsd vasgdasdsa kdfgasjajsdfvadsfjahsdbf asdfkasjndfjk as', '2018-02-23 16:03:51'),
(5, 'ana', 'asdjka@ajs.com', 'as bdaks jdansdksa dhabs', '2018-02-23 16:22:29'),
(6, 'name', 'ajsd@asjd.com', 'akhs jda', '2018-02-23 16:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `hash` varchar(32) COLLATE utf8_bin NOT NULL,
  `name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `address` varchar(30) COLLATE utf8_bin NOT NULL,
  `zip` varchar(5) COLLATE utf8_bin NOT NULL,
  `city` varchar(30) COLLATE utf8_bin NOT NULL,
  `country` varchar(5) COLLATE utf8_bin NOT NULL,
  `method` int(11) NOT NULL,
  `ip` varchar(20) COLLATE utf8_bin NOT NULL,
  `shipping_company` varchar(30) COLLATE utf8_bin NOT NULL,
  `shipping_number` varchar(30) COLLATE utf8_bin NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `shipped` tinyint(1) NOT NULL DEFAULT '0',
  `subscribed` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `hash`, `name`, `email`, `phone`, `address`, `zip`, `city`, `country`, `method`, `ip`, `shipping_company`, `shipping_number`, `date_submitted`, `confirmed`, `shipped`, `subscribed`) VALUES
(11, 'cm5WdRbVuEtTq2kWDVRNTEPOXHCiGpVS', 'laa ertyui', 'jelic.ecloga@gmail.com', '123', 'adresa', '37000', 'ks', 'sr', 1, '', '', '', '2018-04-29 00:47:53', 1, 0, 1),
(12, 'TXqpJpBL0KwYtq3o0A5TmuqJb0CkOoPH', 'Lazar Jelic', 'jelic.ecloga@gmail.com', '0614437010', 'Adresa', '37000', 'Krusevac', 'Srbij', 1, '', 'PostExpress', 'RS6182398123PE', '2018-04-29 01:33:39', 1, 0, 1),
(13, '65FIQFtnDWOHlOiqIEV9o690rXpgFLwM', 'askdjkah aksjdajksdn', 'akjsdn@ansjkf.com', '82123123', 'ashd', '23232', 'asdjnn', 'AR', 1, '', '', '', '2018-04-28 12:47:46', 0, 0, 0),
(14, 'yZbEKNFZtYiVEkIiETl8NUk2Y04R26zA', 'kbh hb', 'asdasd@asf.com', 'jh', '1231', '22222', 'asd', 'AG', 1, '', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(15, 'ydloWt1JxIkSg9ulTaP9UHGjMjJ8hk6P', 'lazar jelic', 'jelic.ecloga@asmdk', '5678', 'ajhsdb', '21312', 'ashjdb', 'SN', 1, '', '', '', '2018-04-29 02:16:38', 1, 0, 1),
(16, 'S7PGWg8hfDrTKjFN0bFxgJE4FjZMZQHR', 'qwert sdfgh', 'asgd@aksf.com', '57', 'hjasd', '21312', 'bajsdhb', 'BL', 1, '', '', '', '2018-04-29 02:16:40', 1, 0, 1),
(17, 'subrZ35A0hYQRWvex5BXayU0c1uBqWHS', 'Lazar Jelka', 'jelic.ecloga@gmail.com', '0614437010', 'Vasilija Velikog', '37000', 'Krusevac', 'BL', 1, '', '', '', '2018-04-28 12:47:46', 1, 0, 1),
(18, 'AzWWK4tnKwUAXeOqHxw9aqcN5RfT2x6C', 'sdaskd qknakjsn', 'aksjdn@ajsd.com', '123123', 'asndk', '12312', 'kansdk', 'AF', 1, '', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(19, 'JyU8ryEOxKBnWRqy69VRA51SRr1sfOPZ', 'Michael Jordan', 'michaelj@gmail.com', '1235124123', 'Smith street 3', '32354', 'Chicago', 'US', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0),
(20, 'bU6lzkejMYSfSgZfi1NByemmyvmAuYWF', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(21, 'oaTO7B27mODwSCzIvZM4ABz5C5LrQiEf', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(22, 'sy4Aa7IxWm3OZCxuCkydW8jye5Z5nElQ', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(23, 'GDEZBK5bnda19EfpPTEpmBHABqJ7Tj1z', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(24, 'Yl8oNxBADplD9dAvd3fptxHAnJkmkryi', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 1, 0, 1),
(25, 'IVlAIccBnocOSdQ029DU9pS8TXO0XSzF', 'LAZICA jelic', 'asd@as.com', '12312', 'asd', '38', 'jk', 'DK', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(26, 'B714eV1ONaccbgtP6eO1jNLc4v4Q1fQC', 'LAZICA jelic', 'asd@as.com', '12312', 'asd', '38', 'jk', 'DK', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 1),
(27, 'Ilbn74onYN8Nyis5ZUMr6MXt8OT4Je8s', 'Lazar Jelic', 'jelic.ecloga@gmail.com', '381614437010', 'Vasilija Velikog 5/13', '37000', 'Krusevac', 'ES', 1, '::1', '', '', '2018-04-28 12:49:15', 0, 0, 1),
(28, 'jxeGCNKqmUkSYcU7FPO5zhOvQJeWPnw9', 'asd akjsdn', 'akjsnd@akfnsm.com', '45678', 'jahsd', '67889', 'ahusjd', 'DZ', 1, '::1', '', '', '2018-04-28 23:17:26', 0, 0, 1),
(29, 's66ZSAtmAHRrSeltGYkfg4boYNrmeBzH', 'asd akjsdn', 'akjsnd@akfnsm.com', '45678', 'jahsd', '67889', 'ahusjd', 'DZ', 1, '::1', '', '', '2018-04-28 23:17:54', 0, 0, 1),
(1001, 'DxR1rJu8m09HUdsA5rR14IXhCLrVcrtQ', 'asjdh', 'ajksdnajks@aksd.com', '6789', 'absndj', '21312', 'jnjasd', 'DZ', 1, '::1', '', '', '2018-04-29 02:26:53', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `note` text COLLATE utf8_bin NOT NULL,
  `gifted` tinyint(1) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product`, `size`, `note`, `gifted`, `admin`, `date_submitted`) VALUES
(1, 1, 1, '', 0, 4, '0000-00-00 00:00:00'),
(2, 1, 1, 'reklama', 1, 4, '0000-00-00 00:00:00'),
(3, 1, 1, '', 0, 4, '0000-00-00 00:00:00'),
(4, 1, 1, '', 0, 4, '2018-04-08 23:19:33'),
(5, 53, 2, '', 0, 4, '2018-04-08 23:20:01'),
(6, 1, 1, 'asddd', 1, 4, '2018-04-08 23:20:15');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(12, 53, 2, 49),
(13, 53, 1, 100),
(14, 53, 2, 49),
(15, 53, 1, 100),
(16, 53, 2, 49),
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
(27, 1, 1, 114),
(28, 1, 2, 0),
(29, 45, 1, 0),
(30, 45, 2, 12312),
(31, 45, 1, 0),
(32, 45, 2, 0),
(33, 38, 1, 100),
(34, 38, 2, 150);

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
-- Indexes for table `methods`
--
ALTER TABLE `methods`
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
  ADD UNIQUE KEY `hash` (`hash`),
  ADD KEY `method` (`method`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
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
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`method`) REFERENCES `methods` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`size`) REFERENCES `sizes` (`id`);
