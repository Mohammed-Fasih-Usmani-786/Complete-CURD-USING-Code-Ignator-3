-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `up_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `row_id`, `name`, `mobile`, `pass`, `up_on`) VALUES
(1, 'asdfsd', 'admin', 'admin', '1234', '2023-04-13 19:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_subtitle` text NOT NULL,
  `_img` varchar(100) NOT NULL,
  `_desr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `row_id`, `_title`, `_img`) VALUES
(9, '202304QczK1C0s9N1682019588', 'LA PINO\'Z PIZZA', '0af3c3abb13e606511dbbbbc950554c0.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cat_opt`
--

CREATE TABLE `cat_opt` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_opt`
--

INSERT INTO `cat_opt` (`id`, `row_id`, `name`, `img`) VALUES
(1, '202401erhtUIPbuy', 'Buy', '202401erhtUIPbuy.jpg'),
(2, '202401erhtUIPsale', 'Sale', '202401erhtUIPsale.jpg'),
(5, '202401erhtUIPlease', 'Lease', '202401erhtUIPlease.jpg'),
(6, '202401erhtUIPpg', 'Pg', '202401erhtUIPpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_subtitle` text NOT NULL,
  `_img` varchar(100) NOT NULL,
  `_desr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_sign_in`
--

CREATE TABLE `client_sign_in` (
  `Id` int(10) NOT NULL,
  `Row_Id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `u_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_sign_in`
--

INSERT INTO `client_sign_in` (`Id`, `Row_Id`, `Name`, `Email`, `Password`, `u_type`) VALUES
(34, '2024028N3Vjz2Bnw1707484323', 'fasih', 'fasih@gmail.com', 'fasih@gmail.com', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `c_type`
--

CREATE TABLE `c_type` (
  `Id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_type`
--

INSERT INTO `c_type` (`Id`, `row_id`, `name`, `img`, `des`) VALUES
(22, '202402f9VsWSldtA1707484546', 'Home', 'a15e33e0acf2a16650fd0286c96bc87a.jpeg', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `row_id`, `_title`, `_img`) VALUES
(19, '202311n4WRkq4sMx1701237866', 'Emulsion- IDEAL GROUP OF INDUSTRIES', 'c4c3ee1299008c678b1c2c591eb42a64.jpeg'),
(20, '202311CqHvz63fqm1701237963', 'Thinner and Polish - IDEAL GROUP OF INDUSTRIES', 'c297bb5e56d0caebf649bb9262287090.jpeg'),
(21, '202311MfFSsSGE1N1701238003', 'Protective Coating - IDEAL GROUP OF INDUSTRIES', '4daf811ac776a7b0c266eb794f73f914.jpeg'),
(22, '202311o4NALPnkX11701238044', 'Wood & Metal Coating -IDEAL GROUP OF INDUSTRIES', '566683fabce8180acb78a46f1b35edf1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pro3`
--

CREATE TABLE `pro3` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `wet_type` enum('Liter','KG') NOT NULL,
  `servicecate` varchar(100) NOT NULL,
  `_weight` decimal(10,2) NOT NULL,
  `_price` decimal(10,2) NOT NULL,
  `_gst` varchar(2) NOT NULL,
  `_desr` text NOT NULL,
  `_subtitle` text NOT NULL,
  `_img` text NOT NULL,
  `_banner` varchar(200) NOT NULL,
  `_techdata` longtext NOT NULL,
  `_feature` longtext NOT NULL,
  `up_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cr_on` datetime NOT NULL,
  `cat_opt` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `wet_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `_gst` varchar(255) NOT NULL,
  `_desr` varchar(255) NOT NULL,
  `_banner` varchar(255) NOT NULL,
  `up_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `cr_on` datetime NOT NULL,
  `cat_opt` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`id`, `row_id`, `client_id`, `name`, `wet_type`, `price`, `_gst`, `_desr`, `_banner`, `up_on`, `cr_on`, `cat_opt`, `c_type`, `city`, `img1`, `img2`, `img3`) VALUES
(71, '202402w8CRwLvASH1707484992', '2024028N3Vjz2Bnw1707484323', 'Home', '1 BHK', '23000000', '5', 'BUY home Jodhpur Ravi ANIL ronak', '5f8cd79ff479dc1f0d26e19cd10ad4a2.jpg', '2024-02-09 13:23:12', '2024-02-09 18:54:48', 'Buy', 'Home', 'jodhpur', 'e40403c30fbae293d1a5fa9f385f564d.jpeg', '81036b599e9e30388f3fa965ca6ae696.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicecate`
--

CREATE TABLE `servicecate` (
  `id` int(11) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `p_type` enum('Residential','Commercial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `servicecate`
--

INSERT INTO `servicecate` (`id`, `row_id`, `name`, `p_type`) VALUES
(1, '202312X9gtu8OPGu1701506972', 'THINNERS& PAINT REMOVERS', 'Residential'),
(2, '202312djhpFmfQnc1701630888', 'WOOD POLISHES', 'Residential'),
(3, '202312VGEYVOxI7e1701630903', 'EXTERIOR EMULSION', 'Residential'),
(4, '202312kp3ik0uhhm1701630938', 'INTERIOR EMULSIONS', 'Residential'),
(5, '202312Prohy7cRDj1701630949', 'UNDERCOATS', 'Residential'),
(6, '202312qT4n6pQS7B1701630974', 'PROTECTIVE COATINGS', 'Residential'),
(7, '202312ss7ThmFDJn1701630985', 'FUNCTIONAL COATINGS', 'Residential'),
(8, '202312hNI7R3Y4pN1701773143', 'WOOD COATINGS', 'Residential');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_type` enum('Residential','Commercial') NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_subtitle` text NOT NULL,
  `servicecate` varchar(100) NOT NULL,
  `_img1` varchar(100) NOT NULL,
  `_img2` varchar(100) NOT NULL,
  `_img3` varchar(100) NOT NULL,
  `_img4` varchar(100) NOT NULL,
  `_img5` varchar(100) NOT NULL,
  `_img6` varchar(200) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `title11` varchar(100) NOT NULL,
  `title12` varchar(100) NOT NULL,
  `title13` varchar(100) NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `des11` text NOT NULL,
  `des12` text NOT NULL,
  `des13` text NOT NULL,
  `des4` text NOT NULL,
  `title3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `row_id`, `_type`, `_title`, `_subtitle`, `servicecate`, `_img1`, `_img2`, `_img3`, `_img4`, `_img5`, `_img6`, `title1`, `title2`, `title11`, `title12`, `title13`, `des1`, `des2`, `des3`, `des11`, `des12`, `des13`, `des4`, `title3`) VALUES
(21, '202311t3vCpacNzY1700571207', 'Residential', 'THINNERS& PAINT REMOVERS', 'THINNERS& PAINT REMOVERS', '202312X9gtu8OPGu1701506972', '', 'b947f7b85fdb9129a9eee449c225b0c7.jpeg', '781a5fa37b07fa6059949faae0b75f57.jpg', '56df1dea27a437cf4d39acdea5622277.jpeg', 'b04124a1e5e4d64e9d6977292afd53bd.jpeg', '81f519a242d42d6299b07d7ba0b41d01.jpg', 'THINNERS& PAINT REMOVERS', 'THINNERS& PAINT REMOVER', 'THINNERS& PAINT REMOVERS', 'THINNERS& PAINT REMOVERS', 'THINNERS& PAINT REMOVERS', 'THINNERS& PAINT REMOVERS is one of the leading pest extermination service providers in Jodhpur, Rajasthan. For over the past two decades of rich experience, the company has provided professional to its clients.', 'THINNERS& PAINT REMOVERS is one of the leading pest extermination service providers in Jodhpur, Rajasthan. For over the past two decades of rich experience, the company has provided professional to its clients.', 'THINNERS& PAINT REMOVERS is one of the leading pest extermination service providers in Jodhpur, Rajasthan. For over the past two decades of rich experience, the company has provided professional to its clients.', 'THINNERS& PAINT REMOVERS is one of the leading pest extermination service providers in Jodhpur, Rajasthan. For over the past two decades of rich experience, the company has provided professional to its clients.', '', 'THINNERS& PAINT REMOVERS is one of the leading pest extermination service providers in Jodhpur, Rajasthan. For over the past two decades of rich experience, the company has provided professional to its clients.', 'THINNERS& PAINT REMOVERS is one of the leading pest extermination service providers in Jodhpur, Rajasthan. For over the past two decades of rich experience, the company has provided professiona to its clients.', 'THINNERS& PAINT REMOVERS'),
(22, '202311Wb4DNKcGKS1700571231', 'Residential', 'WOOD POLISHES', '', '202312X9gtu8OPGu1701506972', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '202311iapRj6kOCo1700571251', 'Residential', 'EXTERIOR EMULSION', '', '202312X9gtu8OPGu1701506972', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '202311Ju01IJud2f1700571272', 'Residential', 'INTERIOR EMULSIONS', '', '202312X9gtu8OPGu1701506972', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '202311egoy4rhgMq1700571291', 'Residential', 'UNDERCOATS', '', '202312X9gtu8OPGu1701506972', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '202311GV5HRsh6nU1700571311', 'Residential', 'PROTECTIVE COATINGS', '', '202312X9gtu8OPGu1701506972', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '202311j0sRH4lKTU1700571332', 'Residential', 'FUNCTIONAL COATINGS', '', '202312X9gtu8OPGu1701506972', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `row_id`, `_title`, `_img`) VALUES
(6, '2023115WkOaVdkVR1699537428', 'Ideal Group Of Industries', '4aaaeedc6cffd041f54f8d9cae622c1c.png'),
(7, '202311YcP9LQhXNI1699537806', 'Ideal Group Of Industries', '5aba98f3b9f5f9281abd252e21659fb7.png'),
(8, '2023116gpZDAQ3oC1699537987', 'Ideal Group Of Industries', 'b257c40aa79d358a3fd1adad397abc0f.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE `t_cart` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_cart`
--

INSERT INTO `t_cart` (`id`, `row_id`, `p_id`, `s_id`, `qty`) VALUES
(1, '202312jaXgObE0Fz1701430806', '202312LHM1UHR4On1701430747', '202312xDvB0BaViW1701428931', 1),
(2, '2023121ahrDMAzsQ1702424464', '202312J5U0LhD9QM1701769147', '202312TCrMXZPzuF1702424461', 1),
(3, '202312LjNwRiDn3d1702424464', '202312LHM1UHR4On1701430749', '202312TCrMXZPzuF1702424461', 1),
(4, '202312WguT9lA25x1702424464', '202312fe70YnYuTN1701768757', '202312TCrMXZPzuF1702424461', 1),
(5, '202312OCiZUSTLf41702424464', '202312lPJhp83wA11701776910', '202312TCrMXZPzuF1702424461', 1),
(6, '2023126wmXHu9LDL1702424465', '202312MoLXf41a6Z1701774088', '202312TCrMXZPzuF1702424461', 1),
(7, '202312DjUtv6VHZL1702424465', '202312hXJ7lSmcxh1701777115', '202312TCrMXZPzuF1702424461', 1),
(8, '202312BleLtgEIql1702424465', '20231204kzhgJg781701768635', '202312TCrMXZPzuF1702424461', 1),
(9, '202312Di8hLEgokK1702424465', '202312MiSmnnrvPC1701770281', '202312TCrMXZPzuF1702424461', 1),
(10, '202312EETPSLzh8u1702424465', '202312LHM1UHR4On1701430748', '202312TCrMXZPzuF1702424461', 1),
(11, '202312d81I7s9Tcv1702424465', '202312NxD5TcvLAC1701770595', '202312TCrMXZPzuF1702424461', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_checkout`
--

CREATE TABLE `t_checkout` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `_address` varchar(100) NOT NULL,
  `_city` varchar(100) NOT NULL,
  `_state` varchar(100) NOT NULL,
  `_pincode` int(6) NOT NULL,
  `_status` enum('Pending','Confirm','Delivered','Dispatch','Cancel') NOT NULL DEFAULT 'Pending',
  `_pay_mode` enum('Cash','Phone-pay','Paytm','Gpay','COD') NOT NULL DEFAULT 'Cash',
  `amount` decimal(10,2) NOT NULL,
  `_gst` decimal(10,2) NOT NULL,
  `qty` int(4) NOT NULL,
  `item` text NOT NULL,
  `o_date` date NOT NULL,
  `d_date` date DEFAULT NULL,
  `bill_no` varchar(20) DEFAULT NULL,
  `track_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_enquery`
--

CREATE TABLE `user_enquery` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `_desr` text NOT NULL,
  `_sub` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_enquery`
--

INSERT INTO `user_enquery` (`id`, `row_id`, `name`, `mobile`, `city`, `date`, `email`, `_desr`, `_sub`) VALUES
(9, '202305HRPhYi4RO91683987916', 'Rajesh Bhandari', '09468961629', 'Jodhpur', '2023-05-13', 'rdmjod@gmail.com', 'hi new one', 'new'),
(10, '2024013GqKhMNGvG1704970884', 'Raman Bang', '9828037360', 'Ahmedabad', '2024-01-11', 'ramanbang19@gmail.com', 'Testing out website', 'Requirement'),
(11, '2024020cTAa3DIcY1707399266', 'm f usmani', '9571423658', 'jodhpur', '2024-02-08', 'fasih@gmail.com', 'hiii', 'color');

-- --------------------------------------------------------

--
-- Table structure for table `u_type`
--

CREATE TABLE `u_type` (
  `id` int(10) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `u_type`
--

INSERT INTO `u_type` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'partner'),
(3, 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `row_id` (`row_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_opt`
--
ALTER TABLE `cat_opt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `row_id` (`row_id`);

--
-- Indexes for table `client_sign_in`
--
ALTER TABLE `client_sign_in`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `c_type`
--
ALTER TABLE `c_type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro3`
--
ALTER TABLE `pro3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecate`
--
ALTER TABLE `servicecate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `row_id` (`row_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `row_id` (`row_id`);

--
-- Indexes for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_checkout`
--
ALTER TABLE `t_checkout`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `row_id` (`row_id`);

--
-- Indexes for table `user_enquery`
--
ALTER TABLE `user_enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_type`
--
ALTER TABLE `u_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cat_opt`
--
ALTER TABLE `cat_opt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_sign_in`
--
ALTER TABLE `client_sign_in`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `c_type`
--
ALTER TABLE `c_type`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pro3`
--
ALTER TABLE `pro3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `servicecate`
--
ALTER TABLE `servicecate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_cart`
--
ALTER TABLE `t_cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_checkout`
--
ALTER TABLE `t_checkout`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_enquery`
--
ALTER TABLE `user_enquery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `u_type`
--
ALTER TABLE `u_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
