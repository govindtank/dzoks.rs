-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 03, 2018 at 02:29 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(20, 'Z4SYh4ySsrqD8Jw', 38, 1, 5, 28, 1),
(21, 'Z4SYh4ySsrqD8Jw', 38, 2, 5, 1001, 1),
(22, 'KnxFZk9itJlE34O', 38, 1, 2, 1099, 1),
(23, 'rR2VZbCwtLifjyq', 38, 1, 1, NULL, 0),
(24, 'C016ufhlq7jNa4e', 38, 2, 1, NULL, 0),
(25, 'gP1H7nLEvDzS5fs', 38, 1, 1, NULL, 0),
(27, 'gP1H7nLEvDzS5fs', 52, 2, 3, NULL, 0),
(28, 'PmQhbZ5NHzqvDT1', 38, 2, 4, 1100, 1),
(29, 'fLV4a58nv3xmxVo', 38, 2, 2, 1101, 1),
(30, 'fLV4a58nv3xmxVo', 37, 2, 2, 1101, 1),
(31, 'glPl1wFCEM0R4rk', 38, 2, 3, 1102, 1),
(32, 'glPl1wFCEM0R4rk', 37, 2, 1, 1103, 1),
(33, 'glPl1wFCEM0R4rk', 38, 1, 1, 1103, 1),
(34, 'glPl1wFCEM0R4rk', 37, 1, 1, NULL, 0),
(35, '5FUt99SPcSQFpml', 38, 1, 1, 1104, 1),
(36, '5FUt99SPcSQFpml', 37, 2, 2, 1105, 1),
(37, '5FUt99SPcSQFpml', 38, 2, 2, 1105, 1),
(38, '5FUt99SPcSQFpml', 49, 2, 1, NULL, 0),
(39, 'PWjhJ3ex2dRvEC9', 38, 2, 2, 1106, 1),
(40, 'PWjhJ3ex2dRvEC9', 37, 2, 1, NULL, 0),
(41, 'EIBGIxMtU9nhLpg', 38, 2, 1, 1107, 1),
(42, 'EIBGIxMtU9nhLpg', 37, 2, 1, 1107, 1),
(43, 'EIBGIxMtU9nhLpg', 38, 1, 1, NULL, 0),
(44, 'EIBGIxMtU9nhLpg', 38, 2, 1, NULL, 0),
(45, 'EIBGIxMtU9nhLpg', 37, 1, 1, NULL, 0),
(46, 'EIBGIxMtU9nhLpg', 37, 2, 3, NULL, 0),
(48, 'XCaYgqB3NbgTV49', 54, 2, 4, NULL, 0),
(49, 'nH6cDaJaAAzorsZ', 54, 1, 10, NULL, 0),
(50, 'nH6cDaJaAAzorsZ', 54, 2, 3, NULL, 0),
(51, 'mnnGsmOC2dfHF18', 1, 1, 1, NULL, 0),
(52, 'sBBpAf0X9xjbZNH', 54, 2, 1, NULL, 0),
(53, 'u4xeCyv4EVBfr74', 54, 1, 1, NULL, 0),
(54, '5iyK91dJH2WjeWS', 54, 2, 1, NULL, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `product`, `ip`, `accepted`, `reply_to`) VALUES
(7, 'laza', 'komentar 1', 38, '0', 1, NULL),
(10, 'marko', 'komentar 2', 38, '::1', 1, NULL),
(11, 'ana', 'komentar 3', 37, '::1', 1, NULL),
(12, 'zarko', 'komentar 4', 2, '::1', 1, NULL),
(13, 'jovana', 'komentar 5', 39, '::1', 0, NULL),
(14, 'milica', 'komentar 6', 34, '::1', 0, NULL),
(15, 'brat', 'komentar 7', 3, '::1', 1, NULL),
(16, 'johnny', 'komentar 8', 45, '::1', 1, NULL),
(18, 'q', 'reply 2', NULL, '::1', 0, 7),
(19, 'q', 'reply 3', NULL, '::1', 0, 11),
(20, 'q', 'reply 4', NULL, '::1', 0, 11),
(21, 'q', 'reply 5', NULL, '::1', 0, 20),
(22, 'q', 'reply 6', NULL, '::1', 0, 16),
(23, 'Yooo', 'hello hello', 54, '::1', 1, NULL),
(24, 'q', 'good day', NULL, '::1', 0, 23);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(18, 4, '2018-04-28 22:23:05'),
(19, 4, '2018-04-29 23:49:03'),
(20, 4, '2018-04-29 23:53:18'),
(21, 4, '2018-04-29 23:53:32'),
(22, 4, '2018-04-30 00:23:04'),
(23, 4, '2018-04-30 00:46:01'),
(24, 4, '2018-05-01 14:05:31'),
(25, 4, '2018-05-01 18:58:52'),
(26, 4, '2018-05-01 19:46:33'),
(27, 4, '2018-05-02 22:24:02'),
(28, 4, '2018-05-02 22:24:12'),
(29, 4, '2018-05-03 12:03:37');

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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `key`, `message`) VALUES
(1, 'shop_restricted', 'Show has been restricted');

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
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  `subscribed` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=1108 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `hash`, `name`, `email`, `phone`, `address`, `zip`, `city`, `country`, `method`, `ip`, `shipping_company`, `shipping_number`, `date_submitted`, `confirmed`, `shipped`, `valid`, `subscribed`) VALUES
(11, 'cm5WdRbVuEtTq2kWDVRNTEPOXHCiGpVS', 'laa ertyui', 'jelic.ecloga@gmail.com', '123', 'adresa', '37000', 'ks', 'sr', 1, '', '', '', '2018-04-29 00:47:53', 1, 0, 0, 1),
(12, 'TXqpJpBL0KwYtq3o0A5TmuqJb0CkOoPH', 'Lazar Jelic', 'jelic.ecloga@gmail.com', '0614437010', 'Adresa', '37000', 'Krusevac', 'Srbij', 1, '', 'PostExpress', 'RS6182398123PE', '2018-04-29 23:53:35', 1, 0, 0, 1),
(13, '65FIQFtnDWOHlOiqIEV9o690rXpgFLwM', 'askdjkah aksjdajksdn', 'akjsdn@ansjkf.com', '82123123', 'ashd', '23232', 'asdjnn', 'AR', 1, '', '', '', '2018-04-28 12:47:46', 0, 0, 0, 0),
(14, 'yZbEKNFZtYiVEkIiETl8NUk2Y04R26zA', 'kbh hb', 'asdasd@asf.com', 'jh', '1231', '22222', 'asd', 'AG', 1, '', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(15, 'ydloWt1JxIkSg9ulTaP9UHGjMjJ8hk6P', 'lazar jelic', 'jelic.ecloga@asmdk', '5678', 'ajhsdb', '21312', 'ashjdb', 'SN', 1, '', '', '', '2018-04-29 02:16:38', 1, 0, 0, 1),
(16, 'S7PGWg8hfDrTKjFN0bFxgJE4FjZMZQHR', 'qwert sdfgh', 'asgd@aksf.com', '57', 'hjasd', '21312', 'bajsdhb', 'BL', 1, '', '', '', '2018-04-29 02:16:40', 1, 0, 0, 1),
(17, 'subrZ35A0hYQRWvex5BXayU0c1uBqWHS', 'Lazar Jelka', 'jelic.ecloga@gmail.com', '0614437010', 'Vasilija Velikog', '37000', 'Krusevac', 'BL', 1, '', '', '', '2018-04-28 12:47:46', 1, 0, 0, 1),
(18, 'AzWWK4tnKwUAXeOqHxw9aqcN5RfT2x6C', 'sdaskd qknakjsn', 'aksjdn@ajsd.com', '123123', 'asndk', '12312', 'kansdk', 'AF', 1, '', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(19, 'JyU8ryEOxKBnWRqy69VRA51SRr1sfOPZ', 'Michael Jordan', 'michaelj@gmail.com', '1235124123', 'Smith street 3', '32354', 'Chicago', 'US', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 0),
(20, 'bU6lzkejMYSfSgZfi1NByemmyvmAuYWF', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(21, 'oaTO7B27mODwSCzIvZM4ABz5C5LrQiEf', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(22, 'sy4Aa7IxWm3OZCxuCkydW8jye5Z5nElQ', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(23, 'GDEZBK5bnda19EfpPTEpmBHABqJ7Tj1z', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(24, 'Yl8oNxBADplD9dAvd3fptxHAnJkmkryi', 'la aksd', 'ajnsjkd@nfakj.com', '12379183', 'anksd', '12312', 'kansd', 'AF', 1, '::1', '', '', '2018-04-28 12:47:46', 1, 0, 0, 1),
(25, 'IVlAIccBnocOSdQ029DU9pS8TXO0XSzF', 'LAZICA jelic', 'asd@as.com', '12312', 'asd', '38', 'jk', 'DK', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(26, 'B714eV1ONaccbgtP6eO1jNLc4v4Q1fQC', 'LAZICA jelic', 'asd@as.com', '12312', 'asd', '38', 'jk', 'DK', 1, '::1', '', '', '2018-04-28 12:47:46', 0, 0, 0, 1),
(27, 'Ilbn74onYN8Nyis5ZUMr6MXt8OT4Je8s', 'Lazar Jelic', 'jelic.ecloga@gmail.com', '381614437010', 'Vasilija Velikog 5/13', '37000', 'Krusevac', 'ES', 1, '::1', '', '', '2018-04-28 12:49:15', 0, 0, 0, 1),
(28, 'jxeGCNKqmUkSYcU7FPO5zhOvQJeWPnw9', 'asd akjsdn', 'akjsnd@akfnsm.com', '45678', 'jahsd', '67889', 'ahusjd', 'DZ', 1, '::1', '', '', '2018-04-28 23:17:26', 0, 0, 0, 1),
(29, 's66ZSAtmAHRrSeltGYkfg4boYNrmeBzH', 'asd akjsdn', 'akjsnd@akfnsm.com', '45678', 'jahsd', '67889', 'ahusjd', 'DZ', 1, '::1', '', '', '2018-04-28 23:17:54', 0, 0, 0, 1),
(1001, 'DxR1rJu8m09HUdsA5rR14IXhCLrVcrtQ', 'asjdh', 'ajksdnajks@aksd.com', '6789', 'absndj', '21312', 'jnjasd', 'DZ', 1, '::1', 'BalkanEkspres', '12398', '2018-05-01 14:33:31', 1, 0, 0, 1),
(1002, 'IGj0DggUkkkXTrpXj4dFqa3CnTrBc8bU', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:06:28', 0, 0, 0, 1),
(1003, '9VFdUdwJOjGf0xb8BScDca4JysIA6dbf', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:07:02', 0, 0, 0, 1),
(1004, 'H442fcWC7w4FTjmfuXyamrwwbbSTfq8W', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:07:30', 0, 0, 0, 1),
(1005, 'zu2Re3mxAoOupWeiHZZVEiZTK8Pyzm28', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:07:37', 0, 0, 0, 1),
(1006, 'Pt295jKJJR1hAWD0NMOs8o8TWnS3rbDg', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:07:43', 0, 0, 0, 1),
(1007, 'EGpK0atK2v1CsFDfrrHAQQuNenQGyuWd', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:07:45', 0, 0, 0, 1),
(1008, 'fY2dMebWIks5thY4dSlcURI3KOCDMaU2', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:08:32', 0, 0, 0, 1),
(1009, 'PUYAsUd411e7L8UkpxwCutvevujdWUqL', 'lazica jelkica', 'jkasd@sakd.om', '12371', 'absnd', '56789', 'jad', 'NA', 1, '::1', '', '', '2018-04-29 15:09:21', 0, 0, 0, 1),
(1010, 'udYJpUmxrqdlKzBew9pTBVqN6iGlJPid', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:11:08', 0, 0, 0, 1),
(1011, 'Q5059mCKKreantt5ss16L10w9Q4Id7Q3', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:11:48', 0, 0, 0, 1),
(1012, 'bmXbxrWzXYcpDPE4hmE7d8UrvL74f4hq', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:12:21', 0, 0, 0, 1),
(1013, '8WfVbrSTMlZfCXjPQF1LxJPhyrVlCPnL', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:13:38', 0, 0, 0, 1),
(1014, 'OplhjzllAzsmHnG7VdJpGeDbIXoFRPqF', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:17:46', 0, 0, 0, 1),
(1015, 'VsKcn5wH3q8snrxA7XKaA841Kh9VbYq7', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:18:45', 0, 0, 0, 1),
(1016, 's44ZNTju8j2ksEdEhpOm9nORYU599e0C', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:20:18', 0, 0, 0, 1),
(1017, '2gXsbkZDLcYvMzJjJ8cl4D8bVPxEEPSH', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:20:53', 0, 0, 0, 1),
(1018, 'dQ8mdL7Ycl8AOBGg4HnQIomRfqzsyqwL', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:21:17', 0, 0, 0, 1),
(1019, 'rfCYGyxDwJ3azIeQ5TXi2SKyDRCTWUkn', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:41:27', 0, 0, 0, 1),
(1020, 'MDHX5zRRUQ6wOqmE5nqD7fVFGQ0jFo4r', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:42:08', 0, 0, 0, 1),
(1021, 'eMXyliTWRmizKYGFbp4SEI3nFs2whtcw', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:42:44', 0, 0, 0, 1),
(1022, 'rbjOgPvjfEMD6jddhYoR7tSRK2MW1c3s', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:43:02', 0, 0, 0, 1),
(1023, 'j4C7XVB6fDrHhElz4aVdxJ5vDaFNpFqJ', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:43:52', 0, 0, 0, 1),
(1024, '1Lp6lhXf84MWu8BAw2dDh8jYZjhEIm6J', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:44:03', 0, 0, 0, 1),
(1025, 'f94AsYxkkPU5OAK00PSFxW2do4KGxWdN', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:44:20', 0, 0, 0, 1),
(1026, 'nnhEcNYssK5y4jMlhbcoE5fo82l9foCC', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:44:40', 0, 0, 0, 1),
(1027, 'faLEoBT77bMdeSOcoLw5x6Lq2uHNZWIf', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:44:49', 0, 0, 0, 1),
(1028, 'EWyUEklIFPha3lOQbKns2rAitlnMqXN5', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:45:01', 0, 0, 0, 1),
(1029, 'idQ2RyLg3OUb63hH5QG5kMGfZswxm9KE', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:45:11', 0, 0, 0, 1),
(1030, '6P9ha9UVmTq9t9sciFxniGyev6TaVMR1', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:45:22', 0, 0, 0, 1),
(1031, 'K2QIXrPd5gUnVgWZrRdZBjveua2UPsDA', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:45:49', 0, 0, 0, 1),
(1032, '9WlQvTt2Dxccfr2kl0DnSnVwfypbsJzB', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:00', 0, 0, 0, 1),
(1033, 'GUrcNVfrssDITG3fHGCA3y6j6wuyg49X', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:04', 0, 0, 0, 1),
(1034, 'hF8vqftDACdpeUGiB39ksvbHWLaucGgt', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:12', 0, 0, 0, 1),
(1035, '7wQtNOIWTvSnDuY9wcMOk5Mjp3Y8p4Sx', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:20', 0, 0, 0, 1),
(1036, '6iozgVTBKNGzoqzpgr4Nn70MbKtJHGwO', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:33', 0, 0, 0, 1),
(1037, 'LUhYHfr90wI4Qup8FCwjHMIQP3Z4sCHe', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:41', 0, 0, 0, 1),
(1038, '7uTv6MDdYprchfpF0VKx1wY40FR0CAfJ', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:49', 0, 0, 0, 1),
(1039, 'Tm0yHlgmbyweUl555ty8U8qouOaVLY0F', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:46:59', 0, 0, 0, 1),
(1040, 'C1jMbdHy77HAhaNAQlX91wnwChHx3yzF', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:48:03', 0, 0, 0, 1),
(1041, 'vtitV8G1oBokRljjdxiORN3lX5gNyTo3', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:48:48', 0, 0, 0, 1),
(1042, 'YB9MxpdZRRILyL0frCPvaWOhsjPJnZGm', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:49:03', 0, 0, 0, 1),
(1043, 'BQ98fm86eQRMCS23vRzGOoXhIM06LGsn', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:49:06', 0, 0, 0, 1),
(1044, 'lpYMEspf4DFixlB9pKtRgFzcqJHDqX7L', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:49:49', 0, 0, 0, 1),
(1045, 'n6x2yWhCAWV7iwgHhJyxp8JPSqtioA4M', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:49:52', 0, 0, 0, 1),
(1046, 'BI0oxJkqedORIM1fYO3jUPDjTCsjGkQh', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:50:32', 0, 0, 0, 1),
(1047, '3RGAB11PfPHYCIdBwhVr7zL0bdjSxaaA', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:50:36', 0, 0, 0, 1),
(1048, 'YUofPhQA5w9uXJUdaZ1y61liMP1uwyjv', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:55:05', 0, 0, 0, 1),
(1049, 'wYceeEnea6i1AI9glGA3tiTimTmOv322', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:55:23', 0, 0, 0, 1),
(1050, '2fggTEu4KN6lwfBRVbUouNHQG3Fc7Iea', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:55:27', 0, 0, 0, 1),
(1051, '58ebVRpThQ5y6ud6qXEsuCwuiouUZKE4', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:56:33', 0, 0, 0, 1),
(1052, 'STgNLFG2wMAChOJHMn9gZGLi4gc40R8S', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:56:36', 0, 0, 0, 1),
(1053, 'l0d2luox2VLWgR2llAufJUEdIP8uN998', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:57:27', 0, 0, 0, 1),
(1054, 'mBHd9stdhoonsG4xxLDRxj7xLE48NPMa', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:57:33', 0, 0, 0, 1),
(1055, 'ASrL68jdg1NxbB71W5aXByuePbMTKlyk', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:59:19', 0, 0, 0, 1),
(1056, 'e05l9pypqmWBX4DT9NRLmlZcxM5h7EBm', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:59:22', 0, 0, 0, 1),
(1057, 'nHwjPckdNJxF5RYiph6g4aC2gSPOMdR9', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 15:59:30', 0, 0, 0, 1),
(1058, 'wCvMZDSduK06C2a7TJNH8KYQxZXjGqGd', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:00:55', 0, 0, 0, 1),
(1059, 'GBOey6R82Mgljw2AgB8FJRvBiYUHzYtf', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:02:34', 0, 0, 0, 1),
(1060, '2QbDSct82a6FTkhqBcRJMCJXP3PndZXf', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:02:50', 0, 0, 0, 1),
(1061, 'tHKjZAU473z4NthXsiwzkSR7HTCdsVIV', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:02:59', 0, 0, 0, 1),
(1062, 'XvqR9VWUI3ffiQ6e21CwPknvn2IvKXFI', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:04:22', 0, 0, 0, 1),
(1063, 'LpGw5mzC9aeqYY7Klh1lXMD22Q62HfVt', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:12:05', 0, 0, 0, 1),
(1064, 'anbwRz3UuPRLGT72uBhdwWreLzIyJSHT', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:12:29', 0, 0, 0, 1),
(1065, 'ruoAXROegdBITGfqrTiYcpwY3B6RqT1R', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:12:55', 0, 0, 0, 1),
(1066, 'EHHN6gcwD97BdLvmzm8VI77fTdw1R7ow', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:13:35', 0, 0, 0, 1),
(1067, 'UotKAOXoxv4Cn3VNk14pcGrszhglv8vq', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:14:12', 0, 0, 0, 1),
(1068, '2bZ1PRejCepegzmaj9SsURjrRgKxGrKI', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:14:29', 0, 0, 0, 1),
(1069, 'Ahu9nliq8yMs5O2lpb192wLlvF34Exke', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:14:35', 0, 0, 0, 1),
(1070, 'Q9SJmmRowY4qilQUyIDkkniaq7yE7vTX', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:14:51', 0, 0, 0, 1),
(1071, 'CtfB39Gbdgf0KxYcPvManDh5xUiZP1Vs', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:15:01', 0, 0, 0, 1),
(1072, 's6AB1xvKALZSB66D8JaX4xtrAbXk8D3A', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:15:12', 0, 0, 0, 1),
(1073, 'FB0KYzm7JBxIzFtVXugVhTXjK4mskhVZ', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:15:24', 0, 0, 0, 1),
(1074, 'fSp6ss1XiSIYMQ0griuXeWc0wUyfNg82', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:15:38', 0, 0, 0, 1),
(1075, 'oqslhhAyubgnSwOjp6iCwPAzqHrRBtJZ', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:15:51', 0, 0, 0, 1),
(1076, 'P5jVmwrZFzATk6gUsoPawXpqbWr24QzT', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:16:12', 0, 0, 0, 1),
(1077, 'wYa7M8wkDAX1ESPYUTn6APz96PvBY01v', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:16:25', 0, 0, 0, 1),
(1078, 'CJJsBYLddbruLNF4XywRpPjg64NMvyv8', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:16:34', 0, 0, 0, 1),
(1079, 'OOncaFDidpKieNEDYGN1cynIeqNSX76M', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:16:43', 0, 0, 0, 1),
(1080, 'FMH18ypFxu5QPWKoFoJ0M1ad9IRgeLeU', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:17:12', 0, 0, 0, 1),
(1081, 'ua4ykKJx1ZyLwwYl1KwpoOuVINVxORZj', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:17:23', 0, 0, 0, 1),
(1082, 'JDcKaIvLtuE5BLJJuTGyr901lYmuBp5l', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:17:37', 0, 0, 0, 1),
(1083, 'SVKRv7YfIvXibrd8Vu3dn1w86TAravq3', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:18:08', 0, 0, 0, 1),
(1084, '9y9B1ayj2hiO7j5zCAwQwIR2DqiqGrtP', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:18:22', 0, 0, 0, 1),
(1085, 'TbkbtVJX60lZx9jWfBzLqalRSNItgrsa', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:18:34', 0, 0, 0, 1),
(1086, 'WTOipgi5PTZaZf4rDTCaR2A2Y153REWN', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:18:40', 0, 0, 0, 1),
(1087, 'ZbCMj97XJ4ZoWOmRHKXiAwrGmWikXjQX', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:18:47', 0, 0, 0, 1),
(1088, 'hfASem5rxxWilBni9UazKuQQyDC4c7dt', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:18:54', 0, 0, 0, 1),
(1089, 'VtZ59Dom29FhXkUV0HXdgkWuLJmJRsvM', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:19:10', 0, 0, 0, 1),
(1090, 'WvS58hsbq8sntnjt5gHlBDQnnc6eFC0B', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:19:14', 0, 0, 0, 1),
(1091, 'yVVHulm1PsRFpC441N4NPf0YYSfdDt7b', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:21:18', 0, 0, 0, 1),
(1092, '23SmOBUPBsB7Yzt0jZpHNUDwHz4wq4Qt', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:23:39', 0, 0, 0, 1),
(1093, '2i5d0AYu5DzGojqSc7rEgsFCr163rbot', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:24:31', 0, 0, 0, 1),
(1094, 'rbUWiSb1o9jAAxJw1NJpPgxV97nkDOn5', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:25:27', 0, 0, 0, 1),
(1095, '0Cr1M0lPhDEpWJYykvpQehTSHcjnDMdD', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:26:10', 0, 0, 0, 1),
(1096, 'CNl5I53P5oOCx7zNJ9zajV1bIJEZa79N', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:27:28', 0, 0, 0, 1),
(1097, 'xL6X1o2Ri11hh5JVZl5RoFTmHYqzDnna', 'Lazarrr', 'jashd@sdf.om', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:50:34', 0, 0, 0, 1),
(1098, 'nOlBar2IZZ1kAoCKiNj3haTQNvUZD7t1', 'Lazarrr', 'jelic.ecloga@gmail.com', '56789', 'amsndjas', '51263', 'hasdn', 'MO', 1, '::1', '', '', '2018-04-29 16:50:54', 0, 0, 0, 1),
(1099, 'AcqMxYEWIVhIwLVXZzqWAh1dk9gH3OPD', 'jhakhsd', 'AS@s.comasd', '7890', 'nams,d', '21312', 'aksjdn', 'LK', 1, '::1', '', '', '2018-04-29 23:40:19', 0, 0, 0, 1),
(1100, '3vB6CxRoz9fNJRsoQYRQmtcykMsxlkJp', 'Proba', 'dfgh@sad.com', '12312', 'asjdn', '12311', 'krusevac', 'LK', 1, '::1', '', '', '2018-05-01 14:51:33', 0, 0, 0, 1),
(1101, 'bI35vVhzM5Gnfn8oVf4NL0zi34hjkzEv', 'asdbn', 'naksjnd@ajksd.com', '123123', 'akjsdn', '11111', 'hjb', 'AF', 1, '::1', '', '', '2018-05-01 15:09:18', 0, 0, 0, 1),
(1102, 'qSxarMKXOYZjtrKEsO241YvROczpHXp8', 'ahsbdjn', 'kjansd@amlsd.com', '6789', 'nasd', '12312', 'habsd', 'AF', 1, '::1', '', '', '2018-05-01 15:11:07', 0, 0, 0, 1),
(1103, 'bOmwMj05GWL9TMP9ofTLSIOj4q3J7Hdi', 'lazica', 'asd@asd.com', '899766', 'vas veli', '11000', 'begiska', 'RU', 1, '::1', '', '', '2018-05-01 15:13:01', 0, 0, 0, 1),
(1104, 'guJ3Fo4hvvVii6CBujpTYyU12CGk0eKg', 'la', 'asd@asd.com', '5678', 'asdm,n', '12123', 'asd', 'NO', 1, '::1', '', '', '2018-05-01 15:14:39', 0, 0, 0, 1),
(1105, 'SeJ0hYow22InbP4OSi3wQARqeSHZ07LS', 'asd', 'askjd@d.com', '12312', 'jansd', '12312', 'asdj213123', 'BL', 1, '::1', '', '', '2018-05-01 15:15:08', 0, 0, 0, 1),
(1106, 'SaO310V6LmmTnC2ZrWhu3V0U5UtLGtTy', 'dfgh', 'kasnd@a.com', '5678', 'abskd', '12313', 'jasknd', 'AD', 1, '::1', '', '', '2018-05-01 15:18:32', 0, 0, 0, 1),
(1107, 'XH6TLhYTEuXcRv7fLt57uCM7hy88DAtA', 'Laz', 'jbhsd@dmc.com', '123', 'hjasd', 'j2312', 'jad', 'PY', 1, '::1', '', '', '2018-05-01 15:23:39', 0, 0, 0, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product`, `size`, `note`, `gifted`, `admin`, `date_submitted`) VALUES
(1, 1, 1, '', 0, 4, '0000-00-00 00:00:00'),
(2, 1, 1, 'reklama', 1, 4, '0000-00-00 00:00:00'),
(3, 1, 1, '', 0, 4, '0000-00-00 00:00:00'),
(4, 1, 1, '', 0, 4, '2018-04-08 23:19:33'),
(5, 53, 2, '', 0, 4, '2018-04-08 23:20:01'),
(6, 1, 1, 'asddd', 1, 4, '2018-04-08 23:20:15'),
(7, 1, 1, '', 0, 4, '2018-05-01 14:35:12');

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
(27, 1, 1, 113),
(28, 1, 2, 0),
(29, 45, 1, 0),
(30, 45, 2, 12312),
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1108;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
