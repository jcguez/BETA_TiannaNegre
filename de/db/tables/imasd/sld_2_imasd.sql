-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 06:16 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_tianna`
--

-- --------------------------------------------------------

--
-- Table structure for table `sld_2_imasd`
--

CREATE TABLE `sld_2_imasd` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre que aparecerá en caso de que no muestre imagen',
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sld_2_imasd`
--

INSERT INTO `sld_2_imasd` (`id`, `nombre`, `img`, `orden`) VALUES
(1, 'Imagen bodegas', 'sld_bodegas_0_2017-04-03_00-06-45.jpg', 0),
(2, 'Imagen bodegas', 'sld_bodegas_1_2017-04-03_00-06-45.jpg', 1),
(3, 'Imagen bodegas', 'sld_bodegas_2_2017-04-03_00-06-45.jpg', 2),
(4, 'Imagen bodegas', 'sld_bodegas_3_2017-04-03_00-06-45.jpg', 3),
(5, 'Imagen bodegas', 'sld_bodegas_4_2017-04-03_00-06-45.jpg', 4),
(6, 'Imagen bodegas', 'sld_bodegas_5_2017-04-03_00-06-45.jpg', 5),
(7, 'Imagen bodegas', 'sld_bodegas_6_2017-04-03_00-06-45.jpg', 6),
(8, 'Imagen bodegas', 'sld_bodegas_7_2017-04-03_00-06-45.jpg', 7),
(9, 'Imagen bodegas', 'sld_bodegas_8_2017-04-03_00-06-45.jpg', 8),
(10, 'Imagen bodegas', 'sld_bodegas_9_2017-04-03_00-06-45.jpg', 9),
(11, 'Imagen bodegas', 'sld_bodegas_10_2017-04-03_00-06-45.jpg', 10),
(12, 'Imagen bodegas', 'sld_bodegas_11_2017-04-03_00-06-45.jpg', 11),
(13, 'Imagen bodegas', 'sld_bodegas_12_2017-04-03_00-06-45.jpg', 12),
(14, 'Imagen bodegas', 'sld_bodegas_13_2017-04-03_00-06-45.jpg', 13),
(15, 'Imagen bodegas', 'sld_bodegas_14_2017-04-03_00-06-45.jpg', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sld_2_imasd`
--
ALTER TABLE `sld_2_imasd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sld_2_imasd`
--
ALTER TABLE `sld_2_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
