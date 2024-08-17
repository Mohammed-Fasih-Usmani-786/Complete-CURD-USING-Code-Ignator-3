-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2024 at 04:48 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milanonf_ideal`
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
  `up_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `row_id`, `_title`, `_img`) VALUES
(9, '202304QczK1C0s9N1682019588', 'LA PINO\'Z PIZZA', '0af3c3abb13e606511dbbbbc950554c0.jpeg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `_title` varchar(100) NOT NULL,
  `_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `row_id`, `_title`, `_img`) VALUES
(19, '202311n4WRkq4sMx1701237866', 'Emulsion- IDEAL GROUP OF INDUSTRIES', 'c4c3ee1299008c678b1c2c591eb42a64.jpeg'),
(20, '202311CqHvz63fqm1701237963', 'Thinner and Polish - IDEAL GROUP OF INDUSTRIES', 'c297bb5e56d0caebf649bb9262287090.jpeg'),
(21, '202311MfFSsSGE1N1701238003', 'Protective Coating - IDEAL GROUP OF INDUSTRIES', '4daf811ac776a7b0c266eb794f73f914.jpeg'),
(22, '202311o4NALPnkX11701238044', 'Wood & Metal Coating -IDEAL GROUP OF INDUSTRIES', 'd57c8286e5318df9a60f53b304973a54.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `row_id` varchar(100) NOT NULL,
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
  `up_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cr_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `row_id`, `name`, `wet_type`, `servicecate`, `_weight`, `_price`, `_gst`, `_desr`, `_subtitle`, `_img`, `_banner`, `_techdata`, `_feature`, `up_on`, `cr_on`) VALUES
(3, '202312LHM1UHR4On1701430748', 'PRIMO PAINT REMOVER', 'Liter', '202312X9gtu8OPGu1701506972', 0.00, 0.00, '18', 'Ideal Infinia Ultra Is a Technologically Advanced Elastomeric Emulsion Which Protects Exterior Walls from Patches of Dampness and Also from Algae and Fungus Formation Caused by Rain.Ideal Infinia Ultra with its unique water- resistanttechnology, covers hairline cracks and prevents wateringress.preventing dampness. This super product comes with a truly unique UV cross linking Technology that hardens the top molecular layer of the paint film to give a superior Dust resistance.Latex enrich formula with beautiful sheen finish gives an elegant and Long-Lasting Shine to exterior walls of the building.', '', '[\"8d286c27fe42d6a50ae9de007037a7c3.png\",\"6e2a651d14fa7e581eba0dfb74fc9eb2.png\",\"1308f2dd8ce18e012e519a714356324b.png\"]', 'bcfbe3f1682068a87b0eace9b2f3a6b3.png', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size: 12pt; letter-spacing: 0px;\">Product\r\nName :-  INFINIA ULTRA</span></p><div style=\"mso-element:para-border-div;border:none;border-bottom:double windowtext 2.25pt;\r\npadding:0in 0in 1.0pt 0in\">\r\n\r\n<div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\nnormal;border:none;mso-border-bottom-alt:double windowtext 2.25pt;padding:0in;\r\nmso-padding-alt:0in 0in 1.0pt 0in\"><span style=\"font-size: 12pt; letter-spacing: 0px;\">Product\r\nComposition :-  Special 100% Acrylic polymer</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\nnormal;border:none;mso-border-bottom-alt:double windowtext 2.25pt;padding:0in;\r\nmso-padding-alt:0in 0in 1.0pt 0in\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"letter-spacing: 0px; font-size: 12pt;\">Method of Application :-  Brush, Roller, Conventional or\r\nAirless Spray </span><span style=\"letter-spacing: 0px; font-size: 12pt;\">Shades As per shade Card, Special Shades can be made available on request. </span><span style=\"letter-spacing: 0px; font-size: 12pt;\">Finish  Smooth and Rich sheen</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><div><span style=\"font-size: 12pt; letter-spacing: 0px;\">Theoretical\r\nCoverage :-  140-160 sq. ft per ltr per coat</span><br></div><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><div><span style=\"font-size: 12pt; letter-spacing: 0px;\">Pack Size :-  1 Ltr, 4 Ltr,10 Ltr & 20 LtR.</span><br></div><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\nnormal;border:none;mso-border-bottom-alt:double windowtext 2.25pt;padding:0in;\r\nmso-padding-alt:0in 0in 1.0pt 0in\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"letter-spacing: 0px; font-size: 12pt;\">Shelf Life:-  </span><span style=\"letter-spacing: 0px; font-size: 12pt;\">2\r\nyears from manufacturing date If kept in original air tight Containers away\r\nfrom sunlight</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:\r\n12.0pt;margin-left:0in;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>', '<p class=\"MsoNormal\">10x Stretchable- 10 times more elastomeric film bridges the\r\nhairline cracks due to its unique elastomeric properties                   </p>\r\n\r\n<p class=\"MsoNormal\">2x More Water resistance- Offers 2 times more water\r\nresistance and keep your home free from fungus & dampness</p>\r\n\r\n<p class=\"MsoNormal\">Sun reflects- Keeps you home cooler. Reduces the temperature\r\nthrough its unique sun reflect technology that reflect sun heat rays 2 times\r\nmore than any other regular exterior emulsion and thus keep surface 5-degree\r\ncooler</p>', '2023-12-25 15:27:37', '2023-12-01 17:09:07'),
(4, '202312LHM1UHR4On1701430749', 'WUDGLO WOOD STAINS', '', '202312X9gtu8OPGu1701506972', 0.00, 0.00, '', 'WUDGLO WOOD STAINS', '', '[\"e6a460210bae91cbebc1881ed50e271b.png\",\"6e2a651d14fa7e581eba0dfb74fc9eb2.png\",\"1308f2dd8ce18e012e519a714356324b.png\"]', '', '', '', '2023-12-27 14:27:33', '2023-12-01 17:09:07'),
(5, '202312LHM1UHR4On1701430750', 'WUDGLO NITRO CELLULOSE SEALER', 'Liter', '202312djhpFmfQnc1701630888', 5.00, 0.00, '18', 'WUDGLO NITRO CELLULOSE SEALER', 'WUDGLO NITRO CELLULOSE SEALER', '[\"e6a460210bae91cbebc1881ed50e271b.png\",\"6e2a651d14fa7e581eba0dfb74fc9eb2.png\",\"1308f2dd8ce18e012e519a714356324b.png\"]', '', '', '', '2023-12-03 20:36:25', '2023-12-01 17:09:07'),
(6, '202312w3qOOyHWvy1701766966', 'INFINIA ULTRA', 'Liter', '202312VGEYVOxI7e1701630903', 0.00, 0.00, '5', 'Ideal Infinia Ultra Is a Technologically Advanced Elastomeric Emulsion Which Protects Exterior Walls from Patches of Dampness and Also from Algae and Fungus Formation Caused by Rain. Ideal Infinia Ultra with its unique water- resistant technology, covers hairline cracks and prevents water ingress. preventing dampness. This super product comes with a truly unique UV cross linking Technology that hardens the top molecular layer of the paint film to give a superior Dust resistance. Latex enrich formula with beautiful sheen finish gives an elegant and Long-Lasting Shine to exterior walls of the building', 'INFINIA ULTRA', '[\"fcfaad4d27b375527eeb3f2b50186666.jpg\",\"5ec0f44d220f60d1f840000ed468e4d4.png\"]', '3ecd99435e0d04d2a20ac03fe6abdedf.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span style=\"font-size: 12pt; letter-spacing: 0px;\">Product Name :-  INFINIA ULTRA</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 2.25pt double windowtext; padding: 0in 0in 1pt;\"><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span style=\"font-size: 12pt; letter-spacing: 0px;\">Product Composition :-  Special 100% Acrylic polymer</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"letter-spacing: 0px; font-size: 12pt;\">Method of Application :-  Brush, Roller, Conventional or Airless Spray </span><span style=\"letter-spacing: 0px; font-size: 12pt;\">Shades As per shade Card, Special Shades can be made available on request. </span><span style=\"letter-spacing: 0px; font-size: 12pt;\">Finish  Smooth and Rich sheen</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><div><span style=\"font-size: 12pt; letter-spacing: 0px;\">Theoretical Coverage :-  140-160 sq. ft per ltr per coat</span><br></div><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><div><span style=\"font-size: 12pt; letter-spacing: 0px;\">Pack Size :-  1 Ltr, 4 Ltr,10 Ltr & 20 LtR.</span><br></div><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"letter-spacing: 0px; font-size: 12pt;\">Shelf Life:-  </span><span style=\"letter-spacing: 0px; font-size: 12pt;\">2 years from manufacturing date If kept in original air tight Containers away from sunlight</span></p><div style=\"border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1pt solid windowtext; padding: 0in 0in 1pt;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; padding: 0in; line-height: normal; border: none;\"><span times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; letter-spacing: normal;\"><span times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\" style=\"font-size: 12pt;\"> </span></p></div>', '<p class=\"MsoNormal\" style=\"letter-spacing: normal;\">10x Stretchable- 10 times more elastomeric film bridges the hairline cracks due to its unique elastomeric properties                  </p><p class=\"MsoNormal\" style=\"letter-spacing: normal;\">2x More Water resistance- Offers 2 times more water resistance and keep your home free from fungus & dampness</p><p class=\"MsoNormal\" style=\"letter-spacing: normal;\">Sun reflects- Keeps you home cooler. Reduces the temperature through its unique sun reflect technology that reflect sun heat rays 2 times more than any other regular exterior emulsion and thus keep surface 5-degree cooler</p>', '2023-12-25 14:31:47', '2023-12-05 14:32:46'),
(8, '20231204kzhgJg781701768635', 'INFINIA ULTRA METALLIC', 'Liter', '202312VGEYVOxI7e1701630903', 5.00, 56.00, '18', 'INFINIA ULTRA METALLIC', 'INFINIA ULTRA METALLIC', '[\"ae1e55edf063fee0d1660a7f9bbab740.jpg\"]', 'b059572deb327f09d7ae3f69e0cff00f.jpg', '', '', '2023-12-27 11:08:23', '2023-12-05 15:00:35'),
(9, '202312fe70YnYuTN1701768757', 'INFINIA', 'Liter', '202312VGEYVOxI7e1701630903', 21.00, 99.00, '10', 'INFINIA', 'INFINIA', '[\"ddb3a876287a7bbf00cba4f71b26fac1.jpg\"]', '91584b2f68bd68a52d82a4327af1f472.jpg', '', '', '2023-12-27 10:46:40', '2023-12-05 15:02:37'),
(10, '202312NGoYBSBUJh1701769080', 'TIP TOP SHINE special wall coat', 'Liter', '202312VGEYVOxI7e1701630903', 25.00, 300.00, '12', 'TIP TOP SHINE special wall coat', 'TIP TOP SHINE special wall coat', '[\"14d8dda78475ec2813d395ceed0b46bc.jpg\"]', 'c06d624917cddad0175f64cc1b05de81.jpg', '', '', '2023-12-27 11:18:07', '2023-12-05 15:08:00'),
(11, '202312J5U0LhD9QM1701769147', 'TIP TOP SHINE', 'Liter', '202312VGEYVOxI7e1701630903', 4.00, 45.00, '5', 'TIP TOP SHINE', 'TIP TOP SHINE', '[\"415b33f3737376e2f1db60b2aaf6b42e.jpg\"]', '90b7c93a47358f455e73994bc331deaa.jpg', '', '', '2023-12-27 11:31:28', '2023-12-05 15:09:07'),
(12, '202312wW5VMh5hK01701769200', 'TIP TOP', 'Liter', '202312VGEYVOxI7e1701630903', 10.00, 77.00, '10', 'TIP TOP', 'TIP TOP', '[\"89e500748eb970f510f96485fc819349.jpg\"]', '48852d59169b13e368d9555945be42a0.jpg', '', '', '2023-12-27 11:41:35', '2023-12-05 15:10:00'),
(13, '202312YKWOizTl6B1701769238', 'FLOOR COAT EMULSION', 'Liter', '202312VGEYVOxI7e1701630903', 10.00, 100.00, '12', 'FLOOR COAT EMULSION', 'FLOOR COAT EMULSION', '[\"58fe11f578028e1f75cef0ddfe44285a.jpg\"]', 'f6c5250707798656529985e0d77ea561.jpg', '', '', '2023-12-27 11:36:59', '2023-12-05 15:10:38'),
(15, '202312XS1npNk0jM1701769471', 'FEATHER TOUCH PEARL METTALIC', '', '202312X9gtu8OPGu1701506972', 0.00, 0.00, '', 'FEATHER TOUCH PEARL METTALIC', '', '[\"3210395b8c127e1934ee2210959d9b25.jpg\"]', '7fd53a711bf0a68b87fe83a786b77bc0.jpg', '<p class=\"MsoNormal\"><b><span style=\"font-size:20.0pt;line-height:115%;\r\ncolor:#A4063E;mso-themecolor:accent1\"> </span></b></p><p>\r\n\r\n</p><table class=\"PlainTable2\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" style=\"border: none;\">\r\n <tbody><tr style=\"mso-yfti-irow:-1;mso-yfti-firstrow:yes;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:5\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Product Name<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:1\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Feather Touch Luxury Emulsion<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:0;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top: none; border-right: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:68\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Product Composition<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top: none; border-right: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:64\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Special Cross-Linking Polymer<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:1;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-width: initial; border-style: none; border-color: initial; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:4\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Method Of Application<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-width: initial; border-style: none; border-color: initial; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:16.0pt;\r\n  mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\"Microsoft Sans Serif\";\r\n  mso-bidi-theme-font:minor-latin;color:#A4063E;mso-themecolor:accent1\">Brush,\r\n  Roller, Spray<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:2;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:68\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Shades<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:64\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">As Per Shade Card, Special Shade Can Be Available On\r\n  Request<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:3;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-width: initial; border-style: none; border-color: initial; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:4\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Finish<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-width: initial; border-style: none; border-color: initial; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:16.0pt;\r\n  mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\"Microsoft Sans Serif\";\r\n  mso-bidi-theme-font:minor-latin;color:#A4063E;mso-themecolor:accent1\">Smooth\r\n  And Glossy<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:4;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:68\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Theoritical Coverage<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:64\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">240-260 Sq Per Litre<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:5;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-width: initial; border-style: none; border-color: initial; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:4\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Pack Size<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-width: initial; border-style: none; border-color: initial; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:16.0pt;\r\n  mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\"Microsoft Sans Serif\";\r\n  mso-bidi-theme-font:minor-latin;color:#A4063E;mso-themecolor:accent1\">1,4,10,20\r\n  Litre<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:6;mso-yfti-lastrow:yes;height:.8in\">\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-yfti-cnfc:68\"><b><span style=\"font-size:16.0pt;mso-fareast-font-family:\"Times New Roman\";mso-bidi-font-family:\r\n  \"Microsoft Sans Serif\";mso-bidi-theme-font:minor-latin;color:#A4063E;\r\n  mso-themecolor:accent1\">Shelf Life<o:p></o:p></span></b></p>\r\n  </td>\r\n  <td width=\"331\" valign=\"top\" style=\"width: 248.15pt; border-top-width: 1pt; border-top-color: rgb(133, 138, 143); border-left: none; border-bottom-width: 1pt; border-bottom-color: rgb(133, 138, 143); border-right: none; padding: 0in 5.4pt; height: 0.8in;\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n  normal;mso-pagination:none;tab-stops:121.0pt;mso-layout-grid-align:none;\r\n  text-autospace:none;mso-yfti-cnfc:64\"><b><span style=\"font-size:16.0pt;mso-bidi-font-family:\"Microsoft Sans Serif\";\r\n  mso-bidi-theme-font:minor-latin;color:#A4063E;mso-themecolor:accent1\">2 Years\r\n  from Manufacturing Date If Kept In Original Air Tight Containers Away From\r\n  Sunlight<o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n</tbody></table>', '<p class=\"MsoNormal\"><b><span style=\"font-size:26.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:\r\n\" franklin=\"\" gothic=\"\" book\",\"sans-serif\";mso-ascii-theme-font:major-latin;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-hansi-theme-font:major-latin;=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:windowtext\"=\"\">&nbsp;</span></b></p><p class=\"MsoNoSpacing\" style=\"line-height:150%\"><a name=\"_Hlk140013344\"><span style=\"font-size:16.0pt;line-height:150%;mso-bidi-font-family:\" microsoft=\"\" sans=\"\" serif\";=\"\" mso-bidi-theme-font:minor-latin;color:#a4063e;mso-themecolor:accent1\"=\"\">Feather\r\nTouch Luxury Emulsion is a 100% acrylic interior emulsion with a high sheen and\r\nstain resistance properties. It gives a royal, velvet touch finish to the wall\r\nwith looks like Teflon coat. Suitable for all normal walls as well as ceiling\r\nsurfaces, the emulsion is highly durable and washable. Eco-friendly luxury\r\nemulsion with Low VOC levels<o:p></o:p></span></a></p><p class=\"MsoNoSpacing\" style=\"line-height:150%\"><br></p><p class=\"MsoNormal\" style=\"margin-left:.5in;line-height:150%\"><b style=\"letter-spacing: 0px;\"><span style=\"font-size:18.0pt;line-height:150%;color:#A4063E;mso-themecolor:accent1\">Perfect\r\nbeautiful shades and colors.</span></b><br></p><p class=\"MsoNormal\" style=\"margin-left:.5in;line-height:150%\"><b><span style=\"font-size:18.0pt;line-height:150%;color:#A4063E;mso-themecolor:accent1\">Ultra\r\nsheen with Diamond- Glow finish reflection of elegance and class.<o:p></o:p></span></b></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-left:.5in;line-height:150%\"><b><span style=\"font-size:18.0pt;line-height:150%;color:#A4063E;mso-themecolor:accent1\">Best-in-class\r\nsmoothness.</span></b><span style=\"font-size:20.0pt;line-height:150%;\r\ncolor:#A4063E;mso-themecolor:accent1\"><o:p></o:p></span></p>', '2023-12-29 12:55:25', '2023-12-05 15:14:31'),
(17, '20231290CIPkIAC11701769762', 'FEATHER TOUCH CREATIVE DESIGNER', 'Liter', '202312kp3ik0uhhm1701630938', 3.00, 118.00, '24', 'FEATHER TOUCH CREATIVE DESIGNER', 'FEATHER TOUCH CREATIVE DESIGNER', '[\"cf67627b13e390052119a810bbaf8e87.jpg\"]', '2bb20110ddf77edbb4b0bb3379d66a9f.jpg', '', '', '2023-12-27 12:34:19', '2023-12-05 15:19:22'),
(18, '202312qIw5558b5N1701769818', 'RANGMASTA', 'Liter', '202312kp3ik0uhhm1701630938', 4.00, 100.00, '5', 'RANGMASTA', 'RANGMASTA', '[\"d82c0d22869044198fa475f1bfc00fc7.jpg\"]', 'c5711c3027125f392defbd4e2aebc6fc.jpg', '', '', '2023-12-27 12:44:28', '2023-12-05 15:20:18'),
(19, '202312kQTHFeAGqo1701769993', 'I-GLO 360', 'Liter', '202312kp3ik0uhhm1701630938', 2.00, 56.00, '5', 'I-GLO 360', 'I-GLO 360', '[\"aaba5c04dcf37058c5bb6a2a2df92656.jpg\"]', 'be56d57b39bf7afb0a23457817a422e3.jpg', '', '', '2023-12-27 12:45:24', '2023-12-05 15:23:13'),
(20, '202312uY2NkjyKNl1701770157', 'WALLPRO EMULSION', 'Liter', '202312kp3ik0uhhm1701630938', 5.00, 100.00, '10', 'WALLPRO EMULSION', 'WALLPRO EMULSION', '[\"77a22bdb67369904cb965334e415cd4e.jpg\"]', '', '', '', '2023-12-25 14:36:52', '2023-12-05 15:25:57'),
(21, '202312wQKupZOjYe1701770197', 'RED HORSE EMULSION', 'Liter', '202312kp3ik0uhhm1701630938', 3.00, 100.00, '10', 'RED HORSE EMULSION', 'RED HORSE EMULSION', '[\"ab867a867d0622502be43f4270dfe6fd.jpg\"]', '', '', '', '2023-12-25 14:37:18', '2023-12-05 15:26:37'),
(22, '202312MiSmnnrvPC1701770281', 'WALLPRO INTERIOR PRIMER', 'Liter', '202312Prohy7cRDj1701630949', 5.00, 100.00, '10', 'WALLPRO INTERIOR PRIMER', 'WALLPRO INTERIOR PRIMER', '[\"dbc238145c161190251d0a44fd9648cc.jpg\"]', '', '', '', '2023-12-25 14:37:53', '2023-12-05 15:28:01'),
(23, '202312Z1F5GEQqA11701770319', 'WALLPRO EXTRA MILEAGE PRIMER', 'Liter', '202312Prohy7cRDj1701630949', 5.00, 100.00, '10', 'WALLPRO EXTRA MILEAGE PRIMER', 'WALLPRO EXTRA MILEAGE PRIMER', '[\"221e406f102250def3d89701d10d19e6.jpg\"]', '', '', '', '2023-12-25 14:38:27', '2023-12-05 15:28:39'),
(25, '2023128G7AP3sUNv1701770402', 'WALLPRO ARCYLIC PUTTY', 'Liter', '202312Prohy7cRDj1701630949', 6.00, 90.00, '12', 'WALLPRO ARCYLIC PUTTY', 'WALLPRO ARCYLIC PUTTY', '[\"ed001783b56599d69f10c38294b199d6.jpg\"]', '', '', '', '2023-12-25 14:39:29', '2023-12-05 15:30:02'),
(26, '202312KT0GxGKqjB1701770444', 'WALLPRO WALLPUTTY SKIMCOAT', 'Liter', '202312Prohy7cRDj1701630949', 4.00, 67.00, '12', 'WALLPRO WALLPUTTY SKIMCOAT', 'WALLPRO WALLPUTTY SKIMCOAT', '[\"882908908d31dcbaf7d53cc5a60ff192.jpg\"]', '', '', '', '2023-12-25 14:45:57', '2023-12-05 15:30:44'),
(27, '202312tiafJwxH141701770563', 'RUST PRO REDOXIDE', 'Liter', '202312qT4n6pQS7B1701630974', 15.00, 123.00, '12', 'RUST PRO REDOXIDE', 'RUST PRO REDOXIDE', '[\"9e4a4ed7787e170039217b5cb14c76a4.jpg\"]', '', '', '', '2023-12-25 14:51:19', '2023-12-05 15:32:43'),
(28, '202312NxD5TcvLAC1701770595', 'RUST PRO WOOD-PRIMER', 'Liter', '202312qT4n6pQS7B1701630974', 5.00, 100.00, '18', 'RUST PRO WOOD-PRIMER', 'RUST PRO WOOD-PRIMER', '[\"49332bdff9e31ce88653b7f07eea74e8.jpg\"]', '', '', '', '2023-12-25 14:51:47', '2023-12-05 15:33:15'),
(29, '202312qWYb4Qvxe41701770638', 'RUST PRO ZINC CHROME PRIMER GREEN', 'Liter', '202312qT4n6pQS7B1701630974', 4.00, 100.00, '12', 'RUST PRO ZINC CHROME PRIMER GREEN', 'RUST PRO ZINC CHROME PRIMER GREEN', '[\"a1743477d009fb3b449d39efb6b1a5b0.jpg\"]', '', '', '', '2023-12-25 14:54:34', '2023-12-05 15:33:58'),
(30, '202312hzyy9B2Ta31701770688', 'RUST PRO ZINC CHROME PRIMER YELLOW', 'Liter', '202312qT4n6pQS7B1701630974', 6.00, 67.00, '10', 'RUST PRO ZINC CHROME PRIMER YELLOW', 'RUST PRO ZINC CHROME PRIMER YELLOW', '[\"79c77de35440dc439bbc07ef16ef33bf.jpg\"]', '', '', '', '2023-12-25 14:54:09', '2023-12-05 15:34:49'),
(31, '2023125CZ6ArIkoF1701770728', 'SUPER GLO Synthetic enamel paint', 'Liter', '202312qT4n6pQS7B1701630974', 8.00, 89.00, '18', 'SUPER GLO Synthetic enamel paint', 'SUPER GLO Synthetic enamel paint', '[\"a787bc01be879ffcc80e48c40fd85d1d.jpg\"]', '', '', '', '2023-12-25 14:54:55', '2023-12-05 15:35:28'),
(32, '202312flOdXUmVfV1701770795', 'ALUMINIUM PAINTS (2 pack)', 'Liter', '202312qT4n6pQS7B1701630974', 5.00, 100.00, '18', 'ALUMINIUM PAINTS (2 pack)', 'ALUMINIUM PAINTS (2 pack)', '[\"d574ae2d853265cf101391da68f421a5.png\"]', '', '', '', '2023-12-05 10:06:35', '2023-12-05 15:36:35'),
(33, '202312MiNZbOUB191701771082', 'PRIMO THIINERS', 'Liter', '202312X9gtu8OPGu1701506972', 6.00, 100.00, '5', 'PRIMO THIINERS', 'PRIMO THIINERS', '[\"cfb7f6ce223e136bc7d9943a5c1914b8.jpg\",\"60a2259c5ea3215a1d3d866bc0bfc356.jpg\",\"73c6d9bc75a7778d65ff897cfba8027f.jpg\"]', '', '', '', '2023-12-25 15:03:56', '2023-12-05 15:41:22'),
(35, '202312VXsZhOuoMb1701772074', 'FEATHER TOUCH', 'Liter', '202312kp3ik0uhhm1701630938', 5.00, 100.00, '10', 'FEATHER TOUCH', 'FEATHER TOUCH', '[\"d2e1ccf29b695d9594463098391afacd.jpg\"]', '', '', '', '2023-12-25 15:05:42', '2023-12-05 15:57:54'),
(36, '202312skXFXC02WU1701773871', 'WUDGLO NITRO CELLULOSE SEALER', 'Liter', '202312hNI7R3Y4pN1701773143', 7.00, 89.00, '10', 'WUDGLO NITRO CELLULOSE SEALER', 'WUDGLO NITRO CELLULOSE SEALER', '[\"8c5e8715ba25c009bf648249fc7719e4.png\"]', '', '', '', '2023-12-05 10:57:51', '2023-12-05 16:27:51'),
(37, '202312qo5Vd2ZEbN1701774038', 'WUDGLO NITRO CELLULOSE LACQUER', 'Liter', '202312hNI7R3Y4pN1701773143', 6.00, 89.00, '12', 'WUDGLO NITRO CELLULOSE LACQUER', 'WUDGLO NITRO CELLULOSE LACQUER', '[\"19f8021540689375d5b3e4b6ebdf9f3b.png\"]', '', '', '', '2023-12-05 11:00:38', '2023-12-05 16:30:38'),
(38, '202312MoLXf41a6Z1701774088', 'WUDGLO MELAMINE SEALER', 'Liter', '202312hNI7R3Y4pN1701773143', 3.00, 123.00, '18', 'WUDGLO MELAMINE SEALER', 'WUDGLO MELAMINE SEALER', '[\"528ef5b2ece9279b15eb7b273064fae4.png\"]', '', '', '', '2023-12-05 11:01:28', '2023-12-05 16:31:28'),
(39, '202312mJXLXldBEu1701774143', 'WUDGLO MELAMINE LACQUER', 'Liter', '202312hNI7R3Y4pN1701773143', 8.00, 45.00, '12', 'WUDGLO MELAMINE LACQUER', 'WUDGLO MELAMINE LACQUER', '[\"c975eec0ae2034ec7b16c83ad928c2b0.png\"]', '', '', '', '2023-12-05 11:02:23', '2023-12-05 16:32:23'),
(40, '2023129vGlq4IClR1701774182', 'WUDGLO POLYURETHANE SEALER', 'Liter', '202312hNI7R3Y4pN1701773143', 6.00, 100.00, '24', 'WUDGLO POLYURETHANE SEALER', 'WUDGLO POLYURETHANE SEALER', '[\"75bae7237fb10c3a5bd554d02d34d9a6.png\"]', '', '', '', '2023-12-05 11:03:02', '2023-12-05 16:33:02'),
(41, '2023128JuQitkgsu1701774330', 'WUDGLO POLYURETHANE LACQUER', 'Liter', '202312hNI7R3Y4pN1701773143', 3.00, 100.00, '12', 'WUDGLO POLYURETHANE LACQUER', 'WUDGLO POLYURETHANE LACQUER', '[\"5d4141305b06c22165d5ecb8937efbed.png\"]', '', '', '', '2023-12-05 11:05:30', '2023-12-05 16:35:30'),
(42, '202312trFbld0VDX1701774401', 'WUDGLO NATURAL GOLD(LAKHDANA)', 'Liter', '202312X9gtu8OPGu1701506972', 4.00, 100.00, '5', 'WUDGLO NATURAL GOLD(LAKHDANA)', 'WUDGLO NATURAL GOLD(LAKHDANA)', '[\"bd2ac36dff8d258530c321a4aaddb6d4.png\"]', '', '', '', '2023-12-25 15:30:50', '2023-12-05 16:36:41'),
(43, '202312CARb8jCaoj1701774444', 'WUDGLO PALE GOLD(CHANDRUS)', 'Liter', '202312hNI7R3Y4pN1701773143', 5.00, 100.00, '10', 'WUDGLO PALE GOLD(CHANDRUS)', 'WUDGLO PALE GOLD(CHANDRUS)', '[\"988ad07ff84298faa437431c05a93f9d.png\"]', '', '', '', '2023-12-05 11:07:24', '2023-12-05 16:37:24'),
(44, '20231298ZB9EJ5tw1701776679', 'IDEAL CARE CRACK FILLER PUTTY', 'Liter', '202312ss7ThmFDJn1701630985', 3.00, 100.00, '12', 'IDEAL CARE CRACK FILLER PUTTY', 'IDEAL CARE CRACK FILLER PUTTY', '[\"e8bd55f32dc4028bb7dccd68ddc02532.png\"]', '', '', '', '2023-12-05 11:44:39', '2023-12-05 17:14:39'),
(45, '202312hRVGJh0pdb1701776738', 'IDEAL CARE DAMP-LOCK', 'Liter', '202312ss7ThmFDJn1701630985', 8.00, 100.00, '10', 'IDEAL CARE DAMP-LOCK', 'IDEAL CARE DAMP-LOCK', '[\"7283fa228343a215355e4fb391b40b3e.png\"]', '', '', '', '2023-12-05 11:45:38', '2023-12-05 17:15:38'),
(46, '202312prYL1z8h3M1701776844', 'IDEAL CARE LEAK LOCK', 'Liter', '202312ss7ThmFDJn1701630985', 2.00, 123.00, '5', 'IDEAL CARE LEAK LOCK', 'IDEAL CARE LEAK LOCK', '[\"65729b7d962e34a819fe300d487ac003.png\"]', '', '', '', '2023-12-05 11:47:24', '2023-12-05 17:17:24'),
(47, '202312lPJhp83wA11701776910', 'IDEAL CARE ALFRESCO COOLRIDE', 'Liter', '202312ss7ThmFDJn1701630985', 6.00, 119.00, '5', 'IDEAL CARE ALFRESCO COOLRIDE', 'IDEAL CARE ALFRESCO COOLRIDE', '[\"4948963daacb6dd585247b6a0f57f68e.jpg\"]', '', '', '', '2023-12-25 15:24:50', '2023-12-05 17:18:30'),
(48, '2023127yWK09Jmn01701777065', 'IDEAL CARE DEMP-PRO+', 'Liter', '202312ss7ThmFDJn1701630985', 4.00, 113.00, '5', 'IDEAL CARE DEMP-PRO+', 'IDEAL CARE DEMP-PRO+', '[\"eb623bb2c1fff68707d55fd5cab9dffe.jpg\"]', '', '', '', '2023-12-25 15:25:16', '2023-12-05 17:21:05'),
(49, '202312hXJ7lSmcxh1701777115', 'IDEAL CARE SBR+', 'Liter', '202312ss7ThmFDJn1701630985', 5.00, 167.00, '18', 'IDEAL CARE SBR+', 'IDEAL CARE SBR+', '[\"80e3867f30cbb9ff2ed22b5f991f0c23.png\"]', '', '', '', '2023-12-05 11:51:55', '2023-12-05 17:21:55'),
(50, '202312zVRYamVFjc1701777164', 'IDEAL CARE ICW-Plus', 'Liter', '202312ss7ThmFDJn1701630985', 10.00, 200.00, '24', 'IDEAL CARE ICW-Plus', 'IDEAL CARE ICW-Plus', '[\"6c12460f37255184102b120c858a4a3e.png\"]', '', '', '', '2023-12-05 11:52:44', '2023-12-05 17:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `servicecate`
--

CREATE TABLE `servicecate` (
  `id` int(11) NOT NULL,
  `row_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_type` enum('Residential','Commercial') COLLATE utf8_unicode_ci NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_enquery`
--

INSERT INTO `user_enquery` (`id`, `row_id`, `name`, `mobile`, `city`, `date`, `email`, `_desr`, `_sub`) VALUES
(9, '202305HRPhYi4RO91683987916', 'Rajesh Bhandari', '09468961629', 'Jodhpur', '2023-05-13', 'rdmjod@gmail.com', 'hi new one', 'new'),
(10, '2024013GqKhMNGvG1704970884', 'Raman Bang', '9828037360', 'Ahmedabad', '2024-01-11', 'ramanbang19@gmail.com', 'Testing out website', 'Requirement');

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
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `row_id` (`row_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
