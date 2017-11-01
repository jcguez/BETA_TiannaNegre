-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2017 a las 02:52:35
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `admin_tianna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones_visitanos`
--

CREATE TABLE `reservaciones_visitanos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo_1` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `img_1` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `desc_1` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo_2` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `img_2` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `desc_2` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservaciones_visitanos`
--

INSERT INTO `reservaciones_visitanos` (`id`, `titulo`, `subtitulo`, `descripcion`, `titulo_1`, `img_1`, `desc_1`, `titulo_2`, `img_2`, `desc_2`) VALUES
(1, 'reservaciones', 'aparta tu visita', '<p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc.</p>\\r\\n<p>Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p>\\r\\n<p class=\"texto-desc-sec\">¡Ven y descubre el mundo del vino!</p>', '¿cómo puedo hacer mi reservación?', '', '<p>Llama al +34 971 886 826 / 661 224 109, de 09:00 a 16:00 horas.</p>\\r\\n<p>Manda un email a info@tiannanegre.com y nosotros nos pondremos en contacto contigo para formalizar la reserva.</p>', 'visita celler tianna negre', '', '<p>Las visitas al Celler Tianna Negre son de lunes a viernes de 10:00h a 16:00h.</p>\\r\\n<p>Imprescindible reserva previa para cualquier fecha y horario.</p>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservaciones_visitanos`
--
ALTER TABLE `reservaciones_visitanos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservaciones_visitanos`
--
ALTER TABLE `reservaciones_visitanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;