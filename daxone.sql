-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 06:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daxone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(225) NOT NULL,
  `Admin_Name` varchar(60) NOT NULL,
  `Admin_Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'Admin', '123'),
(2, 'Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `best_products`
--

CREATE TABLE `best_products` (
  `B_ProductID` int(225) NOT NULL,
  `B_Product_Photo` varchar(200) NOT NULL,
  `B_Name` varchar(20) NOT NULL,
  `B_Color` varchar(20) NOT NULL,
  `B_Quantity` int(20) NOT NULL,
  `B_Prize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_products`
--

INSERT INTO `best_products` (`B_ProductID`, `B_Product_Photo`, `B_Name`, `B_Color`, `B_Quantity`, `B_Prize`) VALUES
(23, 'Products/Best/huawei-nova-5i.jpg', 'Huawei Nova 5i', 'Blue', 200, 300),
(24, 'Products/Best/huawei-p40-pro.jpg', 'Huawei p40 Pro', 'White', 300, 350),
(25, 'Products/Best/Infinix.jpg', 'INFINIX', 'Blue', 300, 400),
(26, 'Products/Best/Oppo_A9.jpg', 'OPPO A9', 'Blue', 300, 350),
(27, 'Products/Best/Oppo_F7.jpg', 'OPPO F7', 'Red', 300, 300),
(28, 'Products/Best/panasonic-eluga-ray-810.png', 'Panasonic Eluga Ray ', 'Black', 300, 250),
(29, 'Products/Best/samsung-galaxy-s9.jpg', 'Samsung Galaxy S9', 'Blue', 300, 500),
(30, 'Products/Best/Vivo_S1.jpg', 'VIVO S1', 'Dark Blue', 200, 300),
(31, 'Products/Best/Xiomi_Redmi_9.jpg', 'XIOMI REDMI 9', 'Sea Green', 100, 250);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactID` int(225) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ContactID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(3, 'Saad', 'saad@gmail.com', 'Product Security', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `F_ProductID` int(225) NOT NULL,
  `F_Product_Photo` varchar(200) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `F_Color` varchar(20) NOT NULL,
  `F_Quantity` int(20) NOT NULL,
  `F_Prize` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`F_ProductID`, `F_Product_Photo`, `F_Name`, `F_Color`, `F_Quantity`, `F_Prize`) VALUES
(18, 'Products/Featured/Corei3_intel.png', 'Core i3 Intel', 'Black', 200, 650),
(19, 'Products/Featured/Corei3_Intel_10th_Gen.jpeg', 'Core i3 Intel', 'White', 250, 680),
(20, 'Products/Featured/Corei5.jpeg', 'Core i5 Intel', 'Black', 250, 850),
(21, 'Products/Featured/Corei5_intel.jpg', 'Core i5 Intel', 'Grey', 300, 850),
(22, 'Products/Featured/Corei7.jpg', 'Core i7 Intel', 'Black', 300, 1500),
(23, 'Products/Featured/Corei7_Lenovo.jpg', 'Core i7 Intel', 'Black', 300, 1500),
(24, 'Products/Featured/predator.jpg', 'PREDATOR', 'Black', 350, 1800),
(25, 'Products/Featured/Spectre_x360.jpg', 'SPECTRE', 'White', 300, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `general_products`
--

CREATE TABLE `general_products` (
  `G_ProductID` int(225) NOT NULL,
  `G_Product_Photo` varchar(200) NOT NULL,
  `G_Name` varchar(20) NOT NULL,
  `G_Color` varchar(20) NOT NULL,
  `G_Quantity` bigint(20) NOT NULL,
  `G_Prize` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_products`
--

INSERT INTO `general_products` (`G_ProductID`, `G_Product_Photo`, `G_Name`, `G_Color`, `G_Quantity`, `G_Prize`) VALUES
(30, 'Products/General/HeadPhones.jpg', 'Head Phone', 'Black', 500, 100),
(31, 'Products/General/HeadPhones1.jpg', 'Head Phone', 'Blue', 500, 100),
(32, 'Products/General/HeadPhones2.jpg', 'Head Phone', 'Purple', 500, 80),
(33, 'Products/General/HeadPhones3.jpg', 'Head Phone', 'Black', 500, 80),
(34, 'Products/General/HeadPhones5.jpg', 'Head Phone', 'Red', 500, 80),
(35, 'Products/General/HeadPhones5.jpg', 'Head Phone', 'Black', 500, 100),
(36, 'Products/General/HeadPhones6.jpg', 'Head Phone', 'Black', 300, 100),
(37, 'Products/General/HeadPhones7.jpg', 'Head Phone', 'White', 300, 100),
(38, 'Products/General/HeadPhones8.jpg', 'Head Phone', 'Black', 500, 100),
(39, 'Products/General/Oppo_F7.jpg', 'OPPO F7', 'Red', 400, 500),
(40, 'Products/General/Infinix.jpg', 'INFINIX', 'Blue', 300, 400),
(41, 'Products/General/Corei3_intel.png', 'Core i3 Intel', 'Black', 200, 650),
(42, 'Products/General/Corei5.jpeg', 'Core i5 Intel', 'Black', 250, 800);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LoginID` int(225) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LoginID`, `Username`, `Password`) VALUES
(1, 'Saad Ali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(225) NOT NULL,
  `Customer_Name` varchar(60) NOT NULL,
  `ProductID` int(225) NOT NULL,
  `Product_Photo` varchar(200) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Customer_Address` varchar(100) NOT NULL,
  `Customer_No` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Customer_Name`, `ProductID`, `Product_Photo`, `Product_Name`, `Category`, `Quantity`, `Customer_Address`, `Customer_No`) VALUES
(10, 'Ebad', 24, 'Products/Featured/predator.jpg', 'PREDATOR', 'Featured Product', 1, 'Dumy Street No, Dumy House No', 123456789),
(11, 'Anas', 24, 'Products/Featured/predator.jpg', 'PREDATOR', 'Featured Product', 1, 'Dumy Street No, Dumy House No', 123456789),
(12, 'Saad', 27, 'Products/Best/Oppo_F7.jpg', 'OPPO F7', 'Best Product', 2, 'Dumy Street No, Dumy House No', 1234567899),
(13, 'Saad', 32, 'Products/General/HeadPhones2.jpg', 'Head Phone', 'All Product', 5, 'Dumy Street No, Dumy House No', 123456789),
(14, 'Saad', 31, 'Products/General/HeadPhones1.jpg', 'Head Phone', 'All Product', 2, 'Dumy Street No, Dumy House No', 1234567899);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RegisterID` int(225) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RegisterID`, `Username`, `Password`, `Email`) VALUES
(1, 'Saad Ali', '123', 'saad@gmail.com'),
(2, 'Saad Ali', '1234', 'saad@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_products`
--
ALTER TABLE `best_products`
  ADD PRIMARY KEY (`B_ProductID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`F_ProductID`);

--
-- Indexes for table `general_products`
--
ALTER TABLE `general_products`
  ADD PRIMARY KEY (`G_ProductID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LoginID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RegisterID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `best_products`
--
ALTER TABLE `best_products`
  MODIFY `B_ProductID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `F_ProductID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `general_products`
--
ALTER TABLE `general_products`
  MODIFY `G_ProductID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LoginID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RegisterID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
