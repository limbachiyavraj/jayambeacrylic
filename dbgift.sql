-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 12:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgift`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `firstname`, `lastname`, `username`, `password`, `emailid`, `mobileno`, `status`, `cdate`) VALUES
(1, 'vraj', 'limbachiya', 'vraj', 'vraj', 'limbachiyavraj@gmail.com', 9586878580, 1, '2024-02-20 16:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrand`
--

CREATE TABLE `tblbrand` (
  `id` int(11) NOT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbrand`
--

INSERT INTO `tblbrand` (`id`, `brand`, `cdate`) VALUES
(1, 'iphone', '2023-05-01 05:34:32'),
(2, 'Samsung', '2024-02-27 18:08:06'),
(3, 'Vivo', '2024-02-27 18:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblbuyer`
--

CREATE TABLE `tblbuyer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `middlename` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` decimal(10,0) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `birth` varchar(10) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbuyer`
--

INSERT INTO `tblbuyer` (`id`, `firstname`, `middlename`, `lastname`, `mobileno`, `email`, `photo`, `city`, `pincode`, `address`, `birth`, `gender`, `username`, `password`, `status`, `cdate`) VALUES
(3, 'sanjay', 'naginbhai', 'limbachiya', 9586878580, 'jayambeacrylic@gmail.com', '../image/vrajnameplate.jpg', 'vadodara', 390007, '60,jawaharnagar harinagar vasn', '1974-12-30', 'Male', 'sanjay', 'sanjay', 1, '2024-03-02 02:28:14'),
(5, 'abcd', 'abc', 'xyz', 5505555555, 'abc@gmail.com', '../image/yellowflag.jpg', 'Vadodara', 390007, 'Opp Ward-11 Harinagar Vasna Ro', '2002-04-16', 'Male', 'abc', 'abc', 1, '2024-03-05 03:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblcat`
--

CREATE TABLE `tblcat` (
  `id` int(11) NOT NULL,
  `cat` varchar(30) DEFAULT NULL,
  `item` varchar(30) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcat`
--

INSERT INTO `tblcat` (`id`, `cat`, `item`, `cdate`) VALUES
(1, 'mobileskin', NULL, '2023-05-01 05:34:32'),
(2, 'Acrylic', NULL, '2023-05-01 05:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `message` varchar(30) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `name`, `email`, `subject`, `message`, `cdate`) VALUES
(1, 'vraj', 'jayambeacrylic@gmail.com', 't-shirt printing', 'vdgf', '2024-03-05 02:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblmcart`
--

CREATE TABLE `tblmcart` (
  `id` int(11) NOT NULL,
  `productid` varchar(30) DEFAULT NULL,
  `product` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `total` decimal(10,0) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmcart`
--

INSERT INTO `tblmcart` (`id`, `productid`, `product`, `username`, `price`, `quantity`, `total`, `status`, `cdate`) VALUES
(61, '15', '1)\r\nBlue \r\n2)\r\nlarge', 'vraj', 300, '1', 0, 0, '2024-03-03 08:42:21'),
(64, '3', '1)\r\nSamsung \r\n2)\r\nSamsung gala', 'vraj', 300, '1', 0, 0, '2024-03-03 08:49:40'),
(65, '12', '1)\r\nwhite \r\n2)\r\nsmall', 'vraj', 300, '1', 0, 0, '2024-03-04 06:04:04'),
(66, '11', '1)\r\nBlue \r\n2)\r\nlarge', 'vraj', 300, '1', 0, 0, '2024-03-05 01:57:44'),
(67, '4', '1)\r\n \r\n2)\r\n', 'vraj', 1000, '1', 0, 0, '2024-03-05 02:31:29'),
(68, '3', '1)\r\niphone \r\n2)\r\niphone 7s', 'abc', 300, '1', 0, 0, '2024-03-05 03:19:21'),
(69, '3', '1)\r\niphone \r\n2)\r\niphone 7s', 'vraj', 300, '1', 0, 0, '2024-03-08 06:20:06'),
(70, '11', '1)\r\nBlue \r\n2)\r\nlarge', 'vraj', 300, '1', 0, 0, '2024-03-08 06:35:36'),
(71, '3', '1)\r\niphone \r\n2)\r\niphone 6s', 'vraj', 300, '1', 0, 0, '2024-03-29 12:47:52'),
(73, '5', '1)\r\nvraj \r\n2)\r\n22', 'vraj', 1000, '1', 0, 0, '2024-04-20 02:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `tblmodel`
--

CREATE TABLE `tblmodel` (
  `id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `model` varchar(30) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmodel`
--

INSERT INTO `tblmodel` (`id`, `brand`, `model`, `cdate`) VALUES
(14, '2', 'Samsung Galaxy F54 5G', '2023-05-01 05:34:32'),
(15, '1', 'iphone 4', '2023-05-01 05:34:32'),
(16, '1', 'iphone 5', '2023-05-01 05:34:32'),
(17, '1', 'iphone 5s', '2023-05-01 05:34:32'),
(18, '1', 'iphone 6', '2023-05-01 05:34:32'),
(19, '1', 'iphone 6s', '2023-05-01 05:34:32'),
(20, '1', 'iphone 7', '2023-05-01 05:34:32'),
(21, '1', 'iphone 7s', '2023-05-01 05:34:32'),
(22, '1', 'iphone 8', '2023-05-01 05:34:32'),
(23, '1', 'iphone 8s', '2023-05-01 05:34:32'),
(24, '2', 'Samsung galaxy J7', '2023-05-01 05:34:32'),
(25, '2', 'Samsung galaxy M32', '2023-05-01 05:34:32'),
(26, '2', 'Samsung galaxy Z Fold', '2023-05-01 05:34:32'),
(27, '3', 'Vivo V9', '2023-05-01 05:34:32'),
(29, '3', 'Vivo V5', '2023-05-01 05:34:32'),
(31, '3', 'Vivo Y51L', '2023-05-01 05:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(11) NOT NULL,
  `productid` int(200) NOT NULL,
  `proname` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` decimal(10,0) DEFAULT NULL,
  `ship` decimal(10,0) NOT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `mobile` decimal(10,0) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` decimal(10,0) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `productid`, `proname`, `username`, `price`, `quantity`, `ship`, `total`, `mobile`, `address`, `city`, `pincode`, `status`, `cdate`) VALUES
(50, 3, '1)iphone 2)iphone 7s', 'vraj', 300, 1, 60, 300, 0, '60,jawaharnagar', 'vadodara', 390007, 'ordered', '2024-03-08 06:35:07'),
(51, 11, '1)Blue 2)large', 'vraj', 300, 1, 60, 300, 0, '60,jawaharnagar', 'vadodara', 390007, 'ordered', '2024-03-29 12:48:31'),
(52, 3, '1)iphone 2)iphone 6s', 'vraj', 300, 1, 60, 300, 0, '60,jawaharnagar', 'vadodara', 390007, 'ordered', '2024-03-29 12:48:32'),
(53, 5, '1)vraj 2)22', 'vraj', 1000, 1, 60, 1000, 0, '60,jawaharnagar', 'vadodara', 390007, 'ordered', '2024-04-20 02:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `width` decimal(10,0) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `quantity` decimal(10,0) DEFAULT NULL,
  `material` varchar(30) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `price`, `color`, `weight`, `height`, `width`, `photo`, `quantity`, `material`, `description`, `cdate`) VALUES
(1, 'Hindu mobileskin', 300, 'white', 250, 6, 3, '../productimage/4.jpg', 1, 'EmbossedSkin', 'Hinduskin', '2023-05-01 05:34:32'),
(2, 'Hindu mobileskin', 300, 'black', 250, 6, 3, '../productimage/2.jpg', 1, 'EmbossedSkin', 'Hinduskin', '2023-05-01 05:34:32'),
(3, 'Personalized mobileskin', 300, 'black', 250, 6, 3, '../image/6.jpg', 1, 'mobileksin', 'personalized 3D mobileksin', '2023-05-01 05:34:32'),
(4, 'Acrylic Nameplate', 1000, 'black', 250, 12, 6, '../productimage/vrajnameplate.jpg', 1, 'Acrylic', 'Acrylic Nameplate', '2023-05-01 05:34:32'),
(5, 'Acrylic Numberplate', 1000, 'orange', 250, 6, 4, '../productimage/hindunumberplate.jpg', 1, 'Acrylic', 'Acrylic Numberplate', '2023-05-01 05:34:32'),
(6, 'Acrylic Nameplate', 3375, 'black', 700, 15, 15, '../productimage/advocatenameplate.jpg', 1, 'Acrylic', 'Acrylic Nameplate', '2023-05-01 05:34:32'),
(7, 'Acrylic Nameplate', 1000, 'Transparent', 500, 12, 6, '../productimage/transparentnameplate.jpg', 1, 'Acrylic', 'Acrylic Nameplate', '2023-05-01 05:34:32'),
(8, 'Acrylic Numberplate', 550, 'black', 300, 6, 4, '../productimage/numberplate.jpg', 1, 'Acrylic', 'Acrylic Numberplate', '2023-05-01 05:34:32'),
(9, 'Mobileskin', 300, 'black', 300, 6, 3, '../productimage/1.jpg', 1, 'MobileSkin', 'Mobileskin', '2023-05-01 05:34:32'),
(10, 'Mobileskin', 250, 'White', 300, 6, 3, '../productimage/3.jpg', 1, 'MobileSkin', '3D mobileskin', '2023-05-01 05:34:32'),
(11, 'Tshirt', 300, 'White', 300, 20, 14, '../productimage/tshirt13.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(12, 'Tshirt', 300, 'White', 300, 20, 14, '../productimage/tshirt12.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(13, 'Tshirt', 300, 'White', 300, 20, 14, '../productimage/tshirt9.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(14, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt1.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(15, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt2.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(16, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt3.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(17, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt4.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(18, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt5.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(19, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt6.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(20, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt7.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(21, 'Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt8.jpg', 1, 'DTF Printing', 'T-shirt Printing with DTF Technology', '2023-05-01 05:34:32'),
(22, 'Couple Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt10.jpg', 1, 'DTF Printing', 'Couple T-shirt', '2023-05-01 05:34:32'),
(23, 'Couple Tshirt', 300, 'Black', 300, 20, 14, '../productimage/tshirt11.jpg', 1, 'DTF Printing', 'Couple T-shirt', '2023-05-01 05:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcat`
--

CREATE TABLE `tblsubcat` (
  `ID` int(11) NOT NULL,
  `CATID` int(11) DEFAULT NULL,
  `SUBCATNAME` varchar(50) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubcat`
--

INSERT INTO `tblsubcat` (`ID`, `CATID`, `SUBCATNAME`, `cdate`) VALUES
(1, 1, '3D mobileskin', '2023-05-01 05:34:32'),
(3, 2, 'Acrylic nameplate', '2023-05-01 05:34:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrand`
--
ALTER TABLE `tblbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbuyer`
--
ALTER TABLE `tblbuyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcat`
--
ALTER TABLE `tblcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmcart`
--
ALTER TABLE `tblmcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmodel`
--
ALTER TABLE `tblmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcat`
--
ALTER TABLE `tblsubcat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbrand`
--
ALTER TABLE `tblbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbuyer`
--
ALTER TABLE `tblbuyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcat`
--
ALTER TABLE `tblcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblmcart`
--
ALTER TABLE `tblmcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tblmodel`
--
ALTER TABLE `tblmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblsubcat`
--
ALTER TABLE `tblsubcat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
