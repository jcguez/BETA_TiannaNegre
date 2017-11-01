-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2017 a las 02:15:50
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `admin_tianna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `introduccion_visitanos`
--

CREATE TABLE `introduccion_visitanos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo_1` varchar(250) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Titulo columna',
  `img_1` varchar(250) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Imagen columna',
  `desc_1` longtext COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción columna',
  `titulo_2` varchar(250) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Titulo columna',
  `img_2` varchar(250) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Imagen columna',
  `desc_2` longtext COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción columna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `introduccion_visitanos`
--

INSERT INTO `introduccion_visitanos` (`id`, `titulo`, `subtitulo`, `descripcion`, `titulo_1`, `img_1`, `desc_1`, `titulo_2`, `img_2`, `desc_2`) VALUES
(1, 'visitanos', 'en nuestras instalaciones', '<p>Ven a visitar nuestra bodega y sumérgete en el apasionante  mundo del vino. Recorre parte de nuestros viñedos y nuestras espectaculares e innovadoras instalaciones, y experimentarás un recorrido sensorial sobre el proceso de elaboración del vino.</p>\\r\\n<p>Las explicaciones de nuestro sumiller acabarán de complementar la visita, haciendo posible que puedas entrar en contacto más directo con el mundo del vino.</p>\\r\\n<p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc.</p>\\r\\n<p>Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p>\\r\\n<p class=\"texto-desc-sec\">¡Ven y descubre el mundo del vino!</p>', 'visitas guiadas', 'sec3_img_1_2017-04-03_00-06-45.jpg', 'Siempre hemos contado con el apoyo y asesoramiento de profesionales viticultores y enólogos.\\r\\nNuestro concepto vitícola no es solo un concepto varietal sino que lo importante es el conjunto de tierra-cepa-clima-cuidados. <strong>Nuestros viñedos se encuentran ubicados en los términos municipales de Binissalem y Consell, pertenecientes ambos a la región de la D.O. Binissalem, Mallorca. </strong>', 'visitas escolares', 'sec3_img_3_2017-04-03_00-06-45.jpg', 'Tianna Negre es un proyecto que se ha hecho realidad gracias, sobre todo, a su equipo humano. Su vocación, compromiso, interés por una mejora permanente y su dedicación absoluta son su mejor garantía. <strong> El objetivo de todas las personas que componen el equipo de Tianna Negre es despertar en nuestros clientes la misma pasión que originó este proyecto.  </strong>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `introduccion_visitanos`
--
ALTER TABLE `introduccion_visitanos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `introduccion_visitanos`
--
ALTER TABLE `introduccion_visitanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;