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
-- Table structure for table `sec_1_imasd`
--

CREATE TABLE `sec_1_imasd` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(250) NOT NULL,
  `parrafo1` longtext NOT NULL COMMENT 'Parrafo izquierda',
  `parrafo2` longtext NOT NULL COMMENT 'Parrafo derecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sec_1_imasd`
--

INSERT INTO `sec_1_imasd` (`id`, `titulo`, `subtitulo`, `parrafo1`, `parrafo2`) VALUES
(1, 'Nuestra historia', '', '<strong> La etiqueta de uno de nuestros vinos, la del vino Ses Nines, ilustra a nuestra madre cuando era niña jugando en la calle de su pueblo natal, Consell.  </strong>  Uno de esos pueblos con tradición viticultora, de la zona del Raiguer, que sufrieron los efectos devastadores de la filoxera a finales del siglo XIX. Debido a esto, los cultivos de vid se transformaron en cultivos de almendros pero nunca desapareció esa tradición viticultora en el mundo payés. Ya a mediados del siglo XX se produjo una reactivación del sector del vino, gracias al esfuerzo de los viticultores y vinicultores de la isla.<br>\n<br>\nAquella niña, nuestra madre, procedente de una familia de payeses, heredó un pequeño viñedo en el término municipal de Consell - un viñedo de más de 35 años, sembrado exclusivamente con la uva Manto Negro, variedad autóctona, y al estilo tradicional, con “politxó” (en vaso entutorado). En nuestro recuerdo siempre está el particular cuidado que le dedicaba, como si de un tesoro se tratara.<br>\n<br>\nGracias a esa pequeña porción de terreno con Manto Negro y el amor que nuestra madre le profesaba, ella y los demás miembros de su familia, la familia Morey Garau, todos procedentes de Binissalem, nos ilusionamos con la idea de construir una bodega para elaborar nuestros propios vinos.', 'La idea fue cobrando fuerza y fue en el año 2004 cuando se inició el proyecto arquitectónico para construir el Celler Tianna Negre. Desde entonces hemos ido sumando terrenos (4 Ha en Biniagual, 10 Ha en Finca Es Pinaret, 6 Ha en Son Colom, 10 Ha en Can Parrona, 6 Ha en Es Velar y 15 Ha en Son Boi).  <strong> Nuestro principal objetivo era crear unos vinos especiales que pudieran transmitir lo mejor de nuestra isla y, al mismo tiempo, con una renovada visión de futuro, conjugando para ello la arquitectura, la naturaleza, lo autóctono y la calidad. </strong><br>\n<br>\nLa bodega tardaría en construirse, por eso, mientras el proyecto se iba haciendo realidad fuimos elaborando en el garaje de un amigo viticultor nuestro primer vino, al que llamamos “Ses Nines” en honor a nuestra madre. Con perseverancia e ilusión, el Celler Tianna Negre abrió sus puertas a la primera vendimia en el año 2007. Su éxito se debe a la sinergia entre su arquitectura y sus vinos - la unión de ambos maximiza el equilibrio de esas cualidades que, sobre lo tradicional, lo moderno y el respeto medioambiental, queremos transmitir.<br>\n<br>\n<strong>\nNuestros vinos quieren reflejar esa fuerza que las uvas autóctonas ofrecen pero con un enfoque moderno.<br>\n<br>\nNuestro trabajo está basado en el amor por la tierra y los viñedos y en el trabajo de calidad en todos los procesos. </strong>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sec_1_imasd`
--
ALTER TABLE `sec_1_imasd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sec_1_imasd`
--
ALTER TABLE `sec_1_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
