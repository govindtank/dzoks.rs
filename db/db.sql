-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 30, 2018 at 12:34 AM
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
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(4, 'q', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `product`, `size`, `quantity`, `purchase`, `checked`) VALUES
(2, 'sUSzLW10R2lcQxQ', 38, 2, 4, 14, 0),
(3, 'sUSzLW10R2lcQxQ', 37, 2, 2, 14, 0);

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
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `user`, `timestamp`) VALUES
(1, 0, '0000-00-00 00:00:00'),
(2, 4, '2018-01-16 01:09:15'),
(3, 4, '2018-01-25 13:53:10'),
(4, 4, '2018-01-27 01:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `collection` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `collection`, `date_added`) VALUES
(1, 'Cow', 'This sock is amazing.', 14.9, 0, '2017-09-08 10:14:14'),
(2, 'Luke', 'Another sock.', 9.99, 2, '2017-09-08 10:14:39'),
(3, 'Santa', 'Color is red.', 23.99, 3, '2017-09-08 10:15:08'),
(27, 'XoXo', 'asdlaksd', 12.9, 0, '2018-01-13 22:43:33'),
(28, 'Blue', 'asdlk', 12, 2, '2018-01-25 23:40:41'),
(31, 'Summer', 'najnoviji model iz 2018 stvarno je strava bla bla', 12.5, 2, '2018-01-25 23:44:23'),
(32, 'Crystal', 'asdakjnsnd akjs dbkjashdb asdfvasjhdfbaks dsn dlfajksdfkaslasdakjnsnd akjs dbkjashdb asdfvasjhdfbaks dsn dlfajksdfkaslasdakjnsnd akjs dbkjashdb asdfvasjhdfbaks dsn dlfajksdfkaslasdakjnsnd akjs dbkjashdb asdfvasjhdfbaks dsn dlfajksdfkasl', 12.9, 2, '2018-01-27 01:51:45'),
(33, 'Carapa', 'Najnovijaa idemo vrh vrh top!!!', 5.99, 3, '2018-01-27 01:52:23'),
(34, 'SENJOR', 'kasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfbkasbd kjasbdjsdbasmdbskdjfb', 9.99, 2, '2018-01-27 01:52:58'),
(35, 'Delises', 'ahsbd  dmsb', 12.99, 2, '2018-01-27 02:03:25'),
(36, 'Madafaka', 'ahsbd', 7.99, 2, '2018-01-27 02:03:46'),
(37, 'NOVA', 'asdkn asdk jansd ka', 12.99, 2, '2018-01-27 03:15:21'),
(38, 'RanDOOM', 'Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape. Tako kul carape.', 2499, 2, '2018-01-29 19:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `hash` varchar(32) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `zip` varchar(5) COLLATE utf8_bin NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL,
  `country` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `shipped` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `hash`, `timestamp`, `first_name`, `last_name`, `email`, `phone`, `address`, `zip`, `city`, `country`, `confirmed`, `shipped`) VALUES
(11, 'cm5WdRbVuEtTq2kWDVRNTEPOXHCiGpVS', '2018-01-29 18:24:23', 'laa', 'ertyui', 'sdf@as.com', '123', 'adresa', '37000', 'ks', 'sr', 1, 0),
(12, 'TXqpJpBL0KwYtq3o0A5TmuqJb0CkOoPH', '2018-01-29 22:41:40', 'Lazar', 'Jelic', 'jelic.ecloga@gmail.com', '0614437010', 'Adresa', '37000', 'Krusevac', 'Srbija', 1, 0),
(13, '65FIQFtnDWOHlOiqIEV9o690rXpgFLwM', '2018-01-29 22:40:49', 'askdjkah', 'aksjdajksdn', 'akjsdn@ansjkf.com', '82123123', 'ashd', '23232', 'asdjnn', 'AR', 0, 0),
(14, 'yZbEKNFZtYiVEkIiETl8NUk2Y04R26zA', '2018-01-29 23:05:12', 'kbh', 'hb', 'asdasd@asf.com', 'jh', '1231', '22222', 'asd', 'AG', 0, 0);

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
(1, 's'),
(2, 'l');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `product`, `size`, `quantity`) VALUES
(1, 37, 1, 1),
(2, 37, 2, 985),
(3, 38, 1, 100),
(4, 38, 2, 150);

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
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`collection`) REFERENCES `Collections` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`collection`) REFERENCES `collections` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `warehouse_ibfk_2` FOREIGN KEY (`size`) REFERENCES `sizes` (`id`);
