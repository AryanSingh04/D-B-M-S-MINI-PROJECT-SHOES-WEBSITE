-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 05:05 PM
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
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdesc` varchar(450) NOT NULL,
  `poprice` int(11) NOT NULL,
  `pnprice` int(11) NOT NULL,
  `pimage` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdesc`, `poprice`, `pnprice`, `pimage`) VALUES
(13, 'Paris Saint-Germain Jumpman', 'Welcome to Paris. For our latest PSG Collab, we combined iconic elements from the AJ6, 7 and 8 in a new design that celebrates MJ\'s first trio of championships. With elevated materials, bold stitching and printed-text details, these special-edition sneakers let everyone know who you\'re about.', 15000, 5000, '../products/Paris Saint-Germain Jumpman.webp'),
(14, 'Air Jordan 1 Low', 'Always in, always fresh. The Air Jordan 1 Low sets you up with a piece of Jordan history and heritage that\'s comfortable all day. Choose your colours, then step out in the iconic profile that\'s built with a high-end mix of materials and encapsulated Air in the heel.', 9000, 1500, '../products/Air Jordan 1 Low.jpg'),
(15, 'Jumpman MVP', 'We didn\'t invent the remix—but considering the material we get to sample, this one\'s a no-brainer. We took elements from the AJ6, 7 and 8, making them into a completely new shoe that celebrates MJ\'s first 3-peat championship run. With leather, textile and nubuck details, these sneakers honour one legacy while encouraging you to cement your own.', 14999, 3500, '../products/Jumpman MVP.webp'),
(16, 'Air Jordan 1 ', 'You don\'t need a cape to take flight—just your AJ1s. You know, the ones seen on Miles in \"Spider-Man: Across the Spider-Verse\", exclusively in cinemas this June. This fresh take on the iconic Chicago colourway boasts a mix of materials, including lustrous leather and soft suede. The world is waiting, so step on in.', 18356, 4200, '../products/Air Jordan 1 .jpg'),
(17, 'Nike Air Jordan X Off White ', 'Off-White x Nike Air Jordan collection has been highly anticipated by sneaker enthusiasts and fashion aficionados alike, making them some of the most sought-after and collectible sneakers in the market. The collaboration has resulted in various iterations of classic Air Jordan models, creating a blend of heritage and contemporary design.', 65480, 7000, '../products/off-white-air-jordan-1-the-ten.webp'),
(18, 'Travis Scott Air Jordan 1', 'When the lights go out, Travis Scott comes alive. In his latest collaboration with Jordan Brand.', 19985, 3500, '../products/Travis Scott Air Jordan 1.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
