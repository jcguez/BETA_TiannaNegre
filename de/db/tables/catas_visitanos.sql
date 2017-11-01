-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2017 a las 02:28:46
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `admin_tianna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catas_visitanos`
--

CREATE TABLE `catas_visitanos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `subtitulo` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_swedish_ci NOT NULL,
  `titulo_1` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `img_1` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `desc_1` longtext COLLATE utf8_swedish_ci NOT NULL,
  `titulo_2` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `img_2` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `desc_2` longtext COLLATE utf8_swedish_ci NOT NULL,
  `titulo_3` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `img_3` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `desc_3` longtext COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Volcado de datos para la tabla `catas_visitanos`
--

INSERT INTO `catas_visitanos` (`id`, `titulo`, `subtitulo`, `descripcion`, `titulo_1`, `img_1`, `desc_1`, `titulo_2`, `img_2`, `desc_2`, `titulo_3`, `img_3`, `desc_3`) VALUES
(1, 'catas', 'experiencia única e inolvidable', '<p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc.</p>\\r\\n<p>Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p>\\r\\n<p class=\"texto-desc-sec\">¡Ven y descubre el mundo del vino!</p>', 'cata básica', '', '<p>17.00 €/pp  - Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>\\r\\n<p>Comprende una cata comentada de 3 vinos y degustación de nuestro aceite de oliva virgen Tianna, queso mahonés y sobrasada casera con pan pagés.</p>\\r\\n<p>La duración de la cata es de unos 45-60 minutos.</p>', 'cata especial', '', '<p>30.00 €/pp– Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>\\r\\n<p>Comprende una cata comentada de 5 vinos acompañada de tapas mallorquinas: queso mahonés, pan pagés y aceite de oliva virgen Tianna, coca de verduras, empanadas de pollo y cebolla, sobrasada casera y ensaimada.</p>\\r\\n<p>La duración de la visita y cata es de unas 2 horas.</p>', 'cata premium', '', '<p>40.00 €/pp – Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>\\r\\n<p>Comprende un aperitivo de bienvenida con Vermut Muntaner y una cata comentada de 6 vinos acompañada de tapas mallorquinas: degustación de nuestro aceite virgen Tianna con pan pagés, queso mahonés, coca de verduras, empanadas de pollo y cebolla, sobrasada casera, frito malloquín y ensaimada con albaricoques. </p>\\r\\n<p>La duración de la visita y cata es de unas 3 horas.</p>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catas_visitanos`
--
ALTER TABLE `catas_visitanos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catas_visitanos`
--
ALTER TABLE `catas_visitanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;