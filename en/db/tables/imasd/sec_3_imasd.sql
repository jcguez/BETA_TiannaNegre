-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 06:15 AM
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
-- Table structure for table `sec_3_imasd`
--

CREATE TABLE `sec_3_imasd` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_1` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ttl_1` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `txt_1` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_2` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ttl_2` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `txt_2` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_3` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ttl_3` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `txt_3` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sec_3_imasd`
--

INSERT INTO `sec_3_imasd` (`id`, `titulo`, `subtitulo`, `img_1`, `ttl_1`, `txt_1`, `img_2`, `ttl_2`, `txt_2`, `img_3`, `ttl_3`, `txt_3`) VALUES
(1, 'visitanos', 'en nuestras instalaciones', 'sec3_img_1_2017-04-03_00-06-45.jpg', 'Viñedos', 'Siempre hemos contado con el apoyo y asesoramiento de profesionales viticultores y enólogos.\nNuestro concepto vitícola no es solo un concepto varietal sino que lo importante es el conjunto de tierra-cepa-clima-cuidados. <strong>Nuestros viñedos se encuentran ubicados en los términos municipales de Binissalem y Consell, pertenecientes ambos a la región de la D.O. Binissalem, Mallorca. </strong>', 'sec3_img_2_2017-04-03_00-06-45.jpg', 'Instalaciones', 'La arquitectura del \"Celler Tianna Negre\" es una muestra clara de conjugación de diseño arquitectónico, funcionalidad y respeto al medio ambiente. El resultado es un potente y espectacular edificio completamente integrado en el entorno, y con unas condiciones óptimas de uso energético, de trabajo y de productividad - características todas ellas que revierten en el resultado final de nuestros vinos.', 'sec3_img_3_2017-04-03_00-06-45.jpg', 'Equipo', 'Tianna Negre es un proyecto que se ha hecho realidad gracias, sobre todo, a su equipo humano. Su vocación, compromiso, interés por una mejora permanente y su dedicación absoluta son su mejor garantía. <strong> El objetivo de todas las personas que componen el equipo de Tianna Negre es despertar en nuestros clientes la misma pasión que originó este proyecto.  </strong>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sec_3_imasd`
--
ALTER TABLE `sec_3_imasd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sec_3_imasd`
--
ALTER TABLE `sec_3_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
