-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 10:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `img` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`img`, `name`, `product_description`, `product_price`, `ID`) VALUES
('../../resources/img/bbv1.jpg', 'Mott’s 100% Apple Ju', '100% apple juice, 2 servings of fruit in every 8 fl oz cup', '$36.5', 1),
('../../resources/img/bbv2.jpeg', 'Simply Orange. Pulp ', 'Delicious orange juice with a taste of fresh-squeezed', '$22.99', 2),
('../../resources/img/bbv3.jpg', 'evian Natural Spring', 'nestled in the French Alps', '$39.5', 3);

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE `care` (
  `img` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`img`, `name`, `product_description`, `product_price`, `ID`) VALUES
('../../resources/img/si1.jpg', 'Baby Diapers 120 pcs', 'LockAway Channels absorb wetness and lock it away', '$56.5', 1),
('../../resources/img/si2.jpg', 'Baby Bee Buttermilk ', 'A lush infusion of Buttermilk is the perfect cleanser for baby’s delicate skin', '$40.99', 2),
('../../resources/img/si3.jpg', 'Pipette Baby Balm', 'Baby balm deeply hydrates, moisturizes, and calms baby’s sensitive spots', '$55.5', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gourmet`
--

CREATE TABLE `gourmet` (
  `img` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gourmet`
--

INSERT INTO `gourmet` (`img`, `name`, `product_description`, `product_price`, `ID`) VALUES
('../../resources/img/bgu1.jpg', 'Popcornopolis Gourme', 'This 1.26-gallon gift tin filled with luscious and crunchy Zebra Popcorn', '$16.5', 1),
('../../resources/img/bgu2.jpg', 'Gourmet Nut Gift car', 'High-end packaging featuring elegant gold stamping, unique and sophisticated design', '$20.99', 2),
('../../resources/img/bgu3.jpg', 'Barnett’s Chocolate ', 'Handcrafted from only premium, natural ingredients', '$25.5', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`) VALUES
(1, 'anvarkhon', 'b1700959@mdis.uz', '123456'),
(2, 'franklin', 'franklinsample@gmail.com', '789456'),
(3, 'steve', 'stevesample@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gourmet`
--
ALTER TABLE `gourmet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gourmet`
--
ALTER TABLE `gourmet`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
