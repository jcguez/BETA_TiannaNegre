-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-11-2017 a las 16:26:37
-- Versión del servidor: 5.5.58
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_tianna_en`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_home`
--

CREATE TABLE `banner_home` (
  `id` int(11) NOT NULL,
  `slogan` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Texto del banner',
  `txt_btn` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Texto del botón del banner',
  `link_btn` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Enlace del botón del banner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banner_home`
--

INSERT INTO `banner_home` (`id`, `slogan`, `txt_btn`, `link_btn`) VALUES
(1, 'Visita nuestra bodega y disfruta de una cata de vinos', 'Reservar ahora', 'contacto.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `btn_visitas_catas`
--

CREATE TABLE `btn_visitas_catas` (
  `id` int(11) NOT NULL,
  `texto` varchar(100) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `btn_visitas_catas`
--

INSERT INTO `btn_visitas_catas` (`id`, `texto`, `link`) VALUES
(1, 'Visítenos', 'contacto.php');

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
(1, 'Catas', 'experiencia única e inolvidable', '<p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc. Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p>', 'Cata básica', 'img_catas_1_2017-10-30_11-24-16.jpg', '<p><strong> 17.00 €/pp</strong>  - Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>\n<p>Comprende una cata comentada de 3 vinos y degustación de nuestro aceite de oliva virgen Tianna, queso mahonés y sobrasada casera con pan pagés.</p>\n<p>La duración de la cata es de unos 45-60 minutos.</p>', 'Cata especial', 'img_catas_2_2017-10-30_11-24-16.jpg', '<p><strong> 30.00 €/pp</strong>– Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>\n<p>Comprende una cata comentada de 5 vinos acompañada de tapas mallorquinas: queso mahonés, pan pagés y aceite de oliva virgen Tianna, coca de verduras, empanadas de pollo y cebolla, sobrasada casera y ensaimada.</p>\n<p>La duración de la visita y cata es de unas 2 horas.</p>', 'Cata premium', 'img_catas_3_2017-10-30_11-24-16.jpg', '<p><strong>40.00 €/pp</strong> – Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>\n<p>Comprende un aperitivo de bienvenida con Vermut Muntaner y una cata comentada de 6 vinos acompañada de tapas mallorquinas: degustación de nuestro aceite virgen Tianna con pan pagés, queso mahonés, coca de verduras, empanadas de pollo y cebolla, sobrasada casera, frito malloquín y ensaimada con albaricoques. </p>\n<p>La duración de la visita y cata es de unas 3 horas.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_header` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `img`, `img_header`, `orden`) VALUES
(1, '-Ses Nines', 'categoria_0_2017-10-24_12-41-15.jpg', 'categoria_head_0_2017-10-24_12-41-15.jpg', 0),
(2, '-Velo Negre / Velo Rosé', 'categoria_1_2017-10-24_12-41-15.jpg', 'categoria_head_1_2017-10-24_12-41-15.jpg', 1),
(3, '-Tianna Bocchoris', 'categoria_2_2017-10-24_12-41-15.jpg', 'categoria_head_2_2017-10-24_12-41-15.jpg', 2),
(4, '-Tianna Negre', 'categoria_3_2017-10-24_12-41-15.jpg', 'categoria_head_3_2017-10-24_12-41-15.jpg', 3),
(5, '-El Columpio', 'categoria_4_2017-10-24_12-41-15.jpg', 'categoria_head_4_2017-10-24_12-41-15.jpg', 4),
(6, '-Randemar', 'categoria_5_2017-10-24_12-41-15.jpg', 'categoria_head_5_2017-10-24_12-41-15.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_aceite`
--

CREATE TABLE `detalles_aceite` (
  `id` int(11) NOT NULL,
  `titulo1` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto1` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto2` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto3` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo4` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto4` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo5` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto5` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_aceite`
--

INSERT INTO `detalles_aceite` (`id`, `titulo1`, `texto1`, `titulo2`, `texto2`, `titulo3`, `texto3`, `titulo4`, `texto4`, `titulo5`, `texto5`) VALUES
(1, 'Aceite de la denominacióD''origen Mallorca', 'E''l Aceite de Oliva Virgen Extra Tianna Negre ha sido elaborado únicamente con olivas procedentes de nuestras fincas: Es Pinaret ubicada en el término municipal de Binissalem con unos 800 olivos de la variedad arbequina y Son Nadal ubicada en el término de Puigpunyent con más de 200 olivos ce''ntenarios.', 'E''laboración', 'L''as olivas seleccionadas son molturadas en frío para mantener así intactas todas sus características analíticas y organolépticas. Sin filtrar.', 'C''ata', 'L''impio y brillante de color verde amarillento. Muy afrutado e intenso con matices de almendra verde y aromas herbáceos. Fino en boca con suaves recuerdos almendrados.', 'G''rado de acidez:', 'G''rado de acidez:', 'P''resentación', 'B''otella de 250 ml. – cajas de 20 ud - vertical – medidas caja 30,5*16,5*21,5 (a*b*h) \\nBotella de 500 ml. – cajas de 12 ud – vertical – medidas caja 22,5*20,0*26,5 (a*b*h)  Garrafa Plástico de 3 L. – cajas de 4 ud – vertical – medidas caja 26,0*27,0*36,0 (a*b*h)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_aceite_img`
--

CREATE TABLE `detalles_aceite_img` (
  `id` int(11) NOT NULL,
  `id_aceite` int(11) NOT NULL DEFAULT '1',
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_aceite_img`
--

INSERT INTO `detalles_aceite_img` (`id`, `id_aceite`, `img`, `orden`) VALUES
(1, 1, 'img_act_0_2017-10-30_11-24-37.jpg', 0),
(2, 1, 'img_act_1_2017-10-30_11-24-37.jpg', 1),
(3, 1, 'img_act_2_2017-10-30_11-24-37.jpg', 2),
(4, 1, 'img_act_3_2017-10-30_11-24-37.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_vino`
--

CREATE TABLE `detalles_vino` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL COMMENT 'id del producto',
  `variedades` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'variedades de uva',
  `vendimia` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `elaboracion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `crianza` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nota_cata` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'nota de cata',
  `produccion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `grado_alcoholico` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `area_produccion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `temperatura` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'temperatura de servicio',
  `nota_maridaje` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `presentaciones` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_vino`
--

INSERT INTO `detalles_vino` (`id`, `id_prod`, `variedades`, `vendimia`, `elaboracion`, `crianza`, `nota_cata`, `produccion`, `grado_alcoholico`, `area_produccion`, `temperatura`, `nota_maridaje`, `presentaciones`, `orden`) VALUES
(25, 1, '100% Callet', 'Manual, seleccionada en cajas de 12 Kg, a partir de la segunda semana de septiembre de 2013, buscando el punto óptimo de 	 maduración.', 'Fermentación en barricas de roble francés nuevo de 500 litros. Maceración de 28 días con bazuqueos manuales a diario. Vino sin filtrar.', '7 meses en la misma barrica en la cual fermentó el vino.', 'Vino de color rojo rubí de capa media. Aroma intenso muy directo con notas vegetales muy típicas de la variedad, fruta roja con un fondo balsámico. En boca muestra la estructura de esta variedad en una vendimia lluviosa. De paso ligero y elegante con un perfecto equilibrio entre la acidez y el alcohol. Post gusto medio largo con recuerdos balsámicos.\\nEn resumen, un auténtico vino de “Terroir” (Terruño).', '650 botellas de 75 cl. todas numeradas y firmadas.', '12,5%', 'Vi de la Terra Mallorca', '17ºC', '', 'Botella de 75 cl. – cajas de 3 Ud. – horizontal – medidas caja: 275 x 295 x 95 mm', 1),
(26, 2, '100% Manto Negro', 'Totalmente manual, seleccionada en cajas de 12 kilos, a partir de la primera semana de septiembre de 2014, buscando el punto óptimo de maduración.', 'Después del despalillado se fermenta el mosto con sus pieles en barricas de roble francés nuevo de 500 litros, tapa abierta.  Maceración pre fermentativa de 5 días. Bazuqueos manuales a diario durante el periodo de fermentación de 20 días. Maceración  post fermentativa de 5 días antes del descube.', '7 meses en la misma barrica en la cual fermento el vino. Este vino no ha sido filtrado.', 'Vino de color rojo rubí de capa media. Aroma de intensidad media, muy delicado con notas de ciruela madura muy típicas de la variedad con un fondo especiado. En boca se muestra sedoso con taninos maduros, de paso elegante. Post gusto largo y equilibrado.', '965 botellas de 75 cl. todas numeradas y firmadaas.', '14%', 'Vi de la Terra, Mallorca.', 'Entre 17ºC y 18ºC', 'Aves y conejo.', 'Botella de 75 cl. – cajas de 3 Ud. – horizontal – medidas caja: 275 x 295 x 95 mm', 1),
(27, 3, '56.5% Manto Negro, 15.3% Callet, 14.5% Cabernet Sauvignon y 13.7% Syrah', 'Manual, seleccionada en cajas, a partir de la tercera semana de septiembre de 2013, dependiendo de la variedad y buscando el punto óptimo de maduración.', 'Fermentación controlada, maceración de 38 días, con remontados, bazuqueos y délestages que le aportan al vino estructura y complejidad. Vino sin filtrar.', '10 meses en barricas nuevas de roble francés, con diferentes tostados.', 'Vino de color rojo granate oscuro de capa media con ribete violáceo. Aromas de buena intensidad, con claro predominio de frutas negras (moras y cereza guinda). Se complementan con un fondo especiado con notas de tostado medio y toffee. En boca se muestra franco con un paso glicérico de buen volumen. Taninos maduros y amplios que realzan la presencia de las frutas negras. Post gusto largo con recuerdos de fruta en licor.', '4.150 botellas de 75cl y 200 Magnums de 1,5l.', '14,50%', 'D.O. BINISSALEM. Mallorca', '16º - 17ºC', 'Carnes rojas y caza mayor', 'Botella de 75 cl. Cajas de 3 unidades. Horizontal.  Medidas caja: 275 x 295 x 95 mm. Botellas de 1,5 L. Sin caja. Caja de madera de 1 unidad Caja 2 unidades con decantador. Caja 4  unidades con decantador.', 1),
(28, 4, '58% Prensal Blanc, 21% Sauvignon Blanc, y 21% Chardonnay. ', 'Totalmente manual, a partir de la segunda semana de Agosto de 2014.', 'Tras el despalillado y estrujado se procede a una maceración pre-fermentativa de los hollejos a baja temperatura. Después de un  prensado suave con un rendimiento muy bajo, se introduce el mosto flor en los tanques isotérmicos para su desfangado a una temperatura no superior a 10º C.  Una vez el mosto perfectamente limpio, se inicia la fermentación alcohólica por un periodo de 21 días entre 12º y 14ºC.', 'En tanques de acero inoxidable con sus lías finas, por un periodo de 8 semanas.', 'De color amarillo pálido con destellos verdosos. En aroma, predominio de la fruta blanca fresca como la pera con un fondo de notas florales. En boca se muestra fresco, muy limpio con un paso de media intensidad. Post gusto con una ligera amargura final que potencia su sabor.', '10.500 Botellas de 75 cl.', '13%.', 'Vi de la Terra Mallorca.', '6ºC - 7ºC', 'Aperitivos y pescados blancos. Cocina ligera sin salsas.', 'Botella de 75 cl. \\n<br>Caja de 12 unidades.', 1),
(29, 5, '43% Manto Negro, 4% Cabernet Sauvignon, 14% Syrah, 11% Callet y 28% Merlot.', 'Totalmente manual, a partir de la segunda semana de Septiembre de 2014.', 'Fermentación larga en depósitos de acero inoxidable a temperatura controlada, con varios remontados diarios.', 'En barricas de roble francés nuevo con tostado medio por un período de 5 meses aproximadamente.', 'Vino de color rojo granate, de capa media con ribete rojo cereza.  Aroma intenso de fruta negra madura (ciruelas, moras) complementas con claras notas de torrefacción (tofe, chocolate) y especias. La entrada en boca es fresca e invita a beber. Su paso es untuoso con taninos maduros y dulces. Final que nos deja sensaciones de fruta madura y hierbas mediterráneas.', '30.000 botellas de 75 cl.', '14%', 'D.O. BINISSALEM. Mallorca', '16ºC', 'Estofados de cerdo, carnes blancas y aves a la brasa.', 'Botella de 75 cl. Caja de 12 unidades. Vertical Medidas caja: 320 x 170 x 250 mm.', 1),
(30, 6, '54% Manto Negro y 46% Cabernet Sauvignon', 'Totalmente manual, a partir de la tercera semana de Agosto de 2014.', 'Tras el despalillado se procede a la maceración pre-fermentativa de los hollejos a baja temperatura.  Una vez conseguida la extracción deseada se introduce en un depósito  isotérmico, donde se realiza un desfangado estático a temperatura controlada.  Una vez obtenido el mosto limpio, se inicia la fermentación alcohólica en depósitos de acero inoxidable a temperatura entre 13 y 15ºC.', 'No tiene', 'De color rosa intenso con ribete fresa.  De buena intensidad aromática con predominio de las frutas rojas.  Fresco en boca con la acidez perfectamente equilibrada.  De trago fácil con toques cítricos y recuerdos a fruta roja.', '6.500 botellas de 75cl.', '14%', 'D.O. BINISSALEM - Mallorca', ' 6º - 7ºC', 'Aperitivos y pizzas', 'Botella de 75 cl.\\nCaja de 12 unidades.', 1),
(31, 7, '74% Prensal Blanc, 7% Muscat de Frontignan y 19% Chardonnay.', 'Totalmente manual, a partir de la segunda semana de Agosto de 2014', 'Tras el despalillado y estrujado se procede a una maceración pre-fermentativa de\\nlos hollejos a baja temperatura. Después de un prensado suave con un rendimiento\\nmuy bajo, se introduce el mosto flor en los tanques isotérmicos para su desfangado\\na una temperatura no superior a 10º C. Una vez el mosto perfectamente limpio, se\\ninicia la fermentación alcohólica por un periodo de 21 días entre 12º y 14ºC.', 'En tanques de acero inoxidable con sus lías finas, por un período de 8 semanas. ', 'De color amarillo pálido con destellos verdosos. Aromas de frutas blancas (manzana, melocotón) y un fondo ligeramente cítrico. El paso por boca es fresco, suave y muy bien equilibrado. Final muy frutal que invita a repetir.', '25.000 Botellas de 75 cl y 1.000 Botellas de 50 cl', '12,5%', 'D.O. BINISSALEM. Mallorca', '6ºC - 7ºC', 'Como aperitivo y entrantes suaves (carpaccio de pescado).', 'Botella de 75 cl. Cajas de 6 Ud. Vertical. Medidas caja: 160 x 225 x 325 mm.\\n<br>Botella de 75 cl. Cajas de 12 Ud. Vertical. Medidas caja: 305 x 230 x 325 mm.', 1),
(32, 8, '22% Merlot, 31% Manto Negro, 20% Syrah, 27% Cabernet Sauvignon.', 'Totalmente manual, a partir de la tercera semana de Agosto de 2014', 'Maceración pre-fermentativa del mosto de 5 días. Fermentación larga en depósitos de acero inoxidable a temperatura controlada, con remontados diarios, y délestages a media fermentación. Una vez terminada se procede a una maceración post-fermentativa de 15 días.', 'No tiene', 'De color rojo cereza con ribete violáceo. En aroma priman las frutas rojas con toques florales (violeta). Muy vivo en boca, equilibrado y de trago fácil.', '20.000 botellas de 75cl y 800 de 50cl', '14%', 'Vi de la Terra Mallorca.', '14ºC - 15ºC', 'Embutidos en general, pan con tomate y pescado azul.', 'Botella de 75 cl. Cajas de 6 Ud. Vertical. Medidas caja: 160 x 225 x 325 mm.<br>\\nBotella de 75 cl. Cajas de 12 Ud. Vertical. Medidas caja: 305 x 230 x 325 mm.', 1),
(33, 9, '54% Manto Negro, 46% Cabernet Sauvignon', 'Totalmente manual, a partir de la tercera semana de Agosto de 2014', 'Tras el despalillado se procede a la maceración pre-fermentativa de los hollejos a\\nbaja temperatura. Una vez conseguida la extracción deseada se introduce en un\\ndepósito isotérmico, donde se realiza un desfangado estático a temperatura\\ncontrolada. Una vez obtenido el mosto limpio, se inicia la fermentación alcohólica en\\ndepósitos de acero inoxidable a temperatura entre 13º y 15ºC.', 'No tiene.', 'De color rosa intenso con ribete fresa. De buena intensidad aromática con\\npredominio de las frutas rojas. Fresco en boca con la acidez perfectamente\\nequilibrada. De trago fácil y untuoso con recuerdos a fresa y frambuesa.', '11,500 botellas de 75cl.', '14%.', 'D.O. BINISSALEM. Mallorca.', '6º - 7ºC.', 'Aperitivos y pizzas.', 'Botella de 75 cl. Cajas de 6 Ud. Vertical. Medidas caja: 160 x 225 x 325 mm.<br>\\nBotella de 75 cl. Cajas de 12 Ud. Vertical. Medidas caja: 305 x 230 x 325 mm.', 1),
(34, 10, '58% Prensal Blanc, 37% Chardonnay y 5% de Muscat de Frontignan', 'Totalmente manual, a partir de la tercera semana de Agosto de 2014', 'Tras el despalillado se procede a una breve maceración pre-fermentativa de los hollejos a baja temperatura. Después de un  prensado suave con un bajo rendimiento, se introduce el mosto en isotérmicos, dónde se realiza un desfangado estático a temperatura controlada. Una vez obtenido el mosto limpio, se inicia la fermentación alcohólica en depósitos de acero inoxidable a temperatura controlada entre 13º y 15ºC, a mitad de fermentación se introduce la mitad del mosto-vino  del Chardonnay con sus lías en barricas nuevas de roble francés hasta el final de la fermentación.', 'El Chardonnay 8 semanas en barricas nuevas de roble francés.', 'Vino blanco de color amarillo pálido. Aroma caracterizado por frutas blancas maduras combinado con notas florales de buena intensidad. En boca se muestra complejo, de paso sedoso y glicérico con un buen equilibrio entre las notas florales y frutales.', '22.000 botellas de 75 cl', '13,5%', 'D.O. BINISSALEM. Mallorca', '8º - 10ºC', 'Pescados blancos al horno (mero a la Mallorquina) y quesos semi-curados de vaca.', 'Botella 75 cl. Cajas de 6 unidades. Horizontal. Medidas caja: 305 x 250 x 175 mm', 1),
(35, 11, '43% Manto Negro, 4% Cabernet Sauvignon, 14% Syrah, 11% Callet, y 28% Merlot.', 'Totalmente manual, a partir de la segunda semana de septiembre de 2014.', 'Fermentación larga en depósitos de acero inoxidable a temperatura controlada, con varios remontados diarios.', 'En barricas de roble francés por un periodo de 5 meses.', 'Vino de color cereza intenso, de capa media con tonos violáceos en su menisco. Aroma caracterizado por fruta roja fresca y flores, dando paso a notas suaves de especias. En boca se muestra sedoso con un buen paso, de trago fácil y con un final fresco y limpio.', '65.000 botellas de 75cl, 4.000 botellas de 50cl, 800 Magnums de 1,5 L y 10 Balthazar de 12 litros', '14%', 'D.O. BINISSALEM. Mallorca', '16ºC', 'Estofados de cerdo, carnes blancas y aves a la brasa.', 'Botella de 75cl, 50 cl y 150cl. Cajas de 6 unidades.\\nBalthazar sin caja', 1),
(36, 12, '60% Manto Negro, 19% Callet y 21% Cabernet Sauvignon', 'Totalmente manual, a partir de la primera semana de Septiembre de 2014', 'Según el método de “sangrado de lágrima” en uvas tintas. Tras mantener un breve contacto con los hollejos se separa el mosto por gravedad sin mediar ningún sistema mecánico de escurrido. Después de un desfangado estático a baja temperatura se fermenta en depósitos de acero inoxidable a temperatura controlada.', 'No tiene.', 'Vino de color rosa pálido. Aromas de media intensidad con recuerdos a pomelo rosa y granada. En boca sobresalen las notas cítricas de paso fresco con buena amplitud, final largo y placentero.', '13.000 botellas de 75 cl y 1.500 botellas de 50cl.', '14%.', 'D.O. BINISSALEM. Mallorca.', '6ºC - 7ºC.', 'Ensaladas, embutidos y pastas italianas. Pescados con salsa de nata.', 'Botella de 75 cl. \\nCaja de 6 unidades. Vertical. \\nMedida caja: 330 x 230 x 160 mm.\\nBotella de 50 cl. \\nCaja de 6 unidades. Horizontal.\\nMedida caja: 305 x 190 x 135 mm.', 1),
(37, 13, '44% Manto Negro, 2% Cabernet Sauvignon, 29% Syrah, 7% Callet y 18% Merlot.', 'Manual, a partir de la segunda semana de septiembre de 2014', 'Maceración pre fermentativa del mosto de unos 5 días. Fermentación controlada,\\ncon remontados diarios, y délestages a media fermentación. Una vez terminada se\\nprocede a una maceración post fermentativa de 15 días.', 'En barricas seleccionadas y de las mejores marcas de roble francés y centroeuropeo\\npor un periodo de 10 meses aproximadamente.', 'Vino de color rojo granate bien cubierto, de capa media alta. Aroma intenso con\\npredominio de notas balsámicas y de frutas rojas en licor. En boca se muestra vivo, de marcado carácter mediterráneo con un paso amplio y dotado de taninos bien estructurados. Post gusto largo con notas suaves de torrefacción', '5.000 botellas de 75 cl. y 400 mágnum de 150 cl.', '14.50%', 'D.O. Binissalem. Mallorca', '17ºC', 'Estofados de carnes rodas y asados de ternera.', 'Botella de 75 cl. \\nCajas de 6 unidades. Horizontal. Medidas: 320 x 170 x 250.\\nBotella de 1,5 L.\\nCaja de 1 unidad. Horizontal. Medidas: 390 x 120 x 120 mm.\\nBotella de 1,5 L. \\nCajas de 6 unidades. Vertical. Medidas: 205 x 315 x 360 mm', 1),
(38, 14, '45% Prensal Blanc, 40% Sauvignon Blanc y 15% Giró Ros', 'Totalmente manual y en cajas, a partir de la segunda semana de Agosto de 2014', 'Tras el despalillado se procede a una breve maceración pre-fermentativa de los hollejos a baja temperatura. Después de un prensado suave con un bajo rendimiento, se introduce el mosto en isotérmicos, dónde se realiza un desfangado estático a temperatura controlada. Una vez obtenido el mosto limpio, se inicia la fermentación alcohólica en depósitos de acero inoxidable a temperatura controlada entre 13º y 15ºC. A mitad de fermentación se introduce el mosto-vino del Sauvignon Blanc y Giró Ros con sus lías en barricas nuevas de roble francés hasta el final de la fermentación.', '8 semanas el Sauvignon y el Giro Ros en barricas nuevas de roble francés.', 'Vino blanco de color amarillo dorado con destellos verdosos. Aroma caracterizado por frutas blancas, melocotón y frutas exóticas (papaya) con un fondo de notas tostadas de su paso por barrica.  Franco en boca, con un paso glicérico de buen volumen. Post gusto largo con recuerdos a fruta blanca madura.', '18.500 botellas de 75 cl.', '13,5%', 'Vi de la Terra. Mallorca', ' 7ºC - 8ºC', 'Pescados blancos elaborados en salsa de nata.', 'Botella de 75 cl.\\nCajas de 6 unidades. Horizontal.\\nMedidas caja: 305 x 250 x 175 mm', 1),
(39, 15, '34% Manto Negro, 6% Cabernet Sauvignon, 41% Syrah, 8% Callet y 11% Merlot', 'Manual, seleccionada en cajas, a partir de la tercera semana de Agosto de 2014,dependiendo de la variedad y buscando el punto óptimo de maduración.', 'Fermentación controlada, maceración de 38 días, con remontados, bazuqueos y délestages que aportan al vino estructura y complejidad. Una parte del Manto Negro  del Syrah fementa en tinas de roble frances de 5.000 litros para dar al coupage mas frutosidad y frescura. Vino sin filtrar.', 'En barricas seleccionadas y de las mejores marcas de roble francés, de las cuales el 30% son nuevas y el resto del segundo año, por un período de 8 meses aproximadamente.', 'Vino de color rojo granate bien cubierto de capa media alta. Aroma de buena intensidad con notas florales (violetas), frutas negras y balsámicas sobre un fondo de barrica nueva. En boca muestra una buena estructura tánica de paso amplio con un perfecto equilibrio entre la acidez y el alcohol. Post gusto largo y balsámico.', '17.000 botellas de 75 cl, 500 magnums de 150 cl, 12 Jeroboam de 3 litros y 6 Imperiales de 6 litros. ', '14,5%', 'D.O.BINISSALEM. Mallorca', '17ºC', 'Carnes rojas curadas a la parrilla y caza menor.', 'Botella de 75 cl.  Cajas de 6 unidades. Horizontal. Medidas caja: 300 x 250 x 170 mm. Botella de 1,5 L.  Cajas de 1 unidad. Horizontal. Medidas: 390 x 120 x 120 mm. Botella de 1,5 L.  Cajas de 6 unidades. Vertical. Medidas: 205 x 315 x 360 mm.\\nBotellas de Jeroboam e Imperiales sin caja', 1),
(40, 16, '100% Manto Negro', 'Tras el despalillado se inicia la maceración pre-fermentativa durante 5 días. Se inicia la fermentación alcohólica con remontados diarios por un periodo de 20 días tras el cual terminamos con una maceración post-fermentativa de 5 días antes del descube.', 'Tras el despalillado se inicia la maceración pre-fermentativa durante 5 días. Se inicia la fermentación alcohólica con remontados diarios por un periodo de 20 días tras el cual terminamos con una maceración post-fermentativa de 5 días antes del descube.', '7 meses en barricas francesas de 225 litros de segundo año.', 'Color granate de capa media con ribete frambuesa. Limpio y brillante. En aroma, destacan las notas balsámicas y de ciruela madura con suaves notas de tostados y canela. El ataque en boca se muestra suave con un paso amplio y goloso. Final ligeramente cálido con delicadas notas balsámicas.', '1200 botellas de 75 cl.', '14,50%', 'D.O. BINISSALEM. Mallorca', '16ºC', '“Escaldums” de pollo, Asado de cerdo al horno, Ternera lechal', 'Botella de 75 cl. Caja de 6 unidades. Horizontal. Medidas caja: 330 x 230 x 160 mm. Botella de 1,5 L. Cajas de 6 unidades. Vertical. Medidas caja: 210 X 320 x 355mm. Botella de 6 L. Sin caja.', 1),
(41, 17, '100% Manto Negro', 'Totalmente manual, a partir de la tercera semana de Agosto de 2014.', 'Tras el despalillado se procede a un sangrado a baja temperatura. Tras mantener un breve contacto con los hollejos se separa el mosto por gravedad sin mediar ningún sistema mecánico de escurrido. Se introduce el mosto flor en los tanques isotérmicos para su desfangado estático a una temperatura no superior a 10º C. Una vez el mosto está perfectamente limpio, se inicia la fermentación alcohólica por un período de 18 días entre12ºC y 14ºC.', 'No tiene.', 'De color salmón pálido. Aromáticamente muy delicado con notas de granada y melocotón. El paso por boca es goloso con cierta amplitud. Final muy frutal y graso.', '12.000 Botellas de 75 cl., 300 Magnum de 150 cl. y 9 Matusalén de 6 L', '14%', 'D.O. BINISSALEM. Mallorca', '6ºC - 7ºC', 'Aperitivos y entrantes suaves (carpaccios de pescado).', 'Botella de 75 cl. Caja de 6 unidades. Horizontal. Medidas caja: 330 x 230 x 160 mm. Botella de 1,5 L. Cajas de 6 unidades. Vertical. Medidas caja: 210 X 320 x 355mm. Botella de 6 L. Sin caja.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_vino_img`
--

CREATE TABLE `detalles_vino_img` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_vino_img`
--

INSERT INTO `detalles_vino_img` (`id`, `id_prod`, `img`, `orden`) VALUES
(71, 1, 'producto_0_2017-03-14_12-15-32.jpg', 0),
(72, 2, 'producto_0_2017-03-14_12-16-02.jpg', 0),
(73, 3, 'producto_0_2017-03-14_12-16-35.jpg', 0),
(74, 4, 'producto_0_2017-03-14_12-17-08.jpg', 0),
(75, 5, 'producto_0_2017-03-14_12-17-44.jpg', 0),
(76, 6, 'producto_0_2017-03-14_12-18-23.jpg', 0),
(77, 7, 'producto_0_2017-03-14_12-19-06.jpg', 0),
(78, 8, 'producto_0_2017-03-14_12-19-39.jpg', 0),
(79, 9, 'producto_0_2017-03-14_12-20-17.jpg', 0),
(80, 10, 'producto_0_2017-03-14_12-21-10.jpg', 0),
(81, 11, 'producto_0_2017-03-14_12-21-59.jpg', 0),
(82, 12, 'producto_0_2017-03-14_12-22-32.jpg', 0),
(83, 13, 'producto_0_2017-03-14_12-23-14.jpg', 0),
(84, 14, 'producto_0_2017-03-14_12-24-23.jpg', 0),
(85, 15, 'producto_0_2017-03-14_12-25-09.jpg', 0),
(86, 16, 'producto_0_2017-03-14_12-25-40.jpg', 0),
(87, 17, 'producto_0_2017-03-14_12-26-14.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header_aceite`
--

CREATE TABLE `header_aceite` (
  `id` int(11) NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_responsive` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `header_aceite`
--

INSERT INTO `header_aceite` (`id`, `img`, `img_responsive`) VALUES
(1, 'header_aceite_2017-10-30_11-24-37.jpg', 'FondoA.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header_bodegas`
--

CREATE TABLE `header_bodegas` (
  `id` int(11) NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_responsive` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `header_bodegas`
--

INSERT INTO `header_bodegas` (`id`, `img`, `img_responsive`) VALUES
(1, 'head_bodegas_2017-10-24_11-19-38.jpg', 'FondoB.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header_contacto`
--

CREATE TABLE `header_contacto` (
  `id` int(11) NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_responsive` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `header_contacto`
--

INSERT INTO `header_contacto` (`id`, `img`, `img_responsive`) VALUES
(1, 'headerBack2017-10-30_11-24-16.jpg', 'FondoA.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header_imasd`
--

CREATE TABLE `header_imasd` (
  `id` int(11) NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_responsive` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `header_imasd`
--

INSERT INTO `header_imasd` (`id`, `img`, `img_responsive`) VALUES
(1, 'head_imasd_2017-10-24_14-03-54.jpg', 'FondoB.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header_vinos`
--

CREATE TABLE `header_vinos` (
  `id` int(11) NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_responsive` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `header_vinos`
--

INSERT INTO `header_vinos` (`id`, `img`, `img_responsive`) VALUES
(1, 'header_vinos_2017-10-30_11-24-45.jpg', 'FondoV.jpg');

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
(1, 'Visitanos', 'en nuestras instalaciones', '<p>Ven a visitar nuestra bodega y sumérgete en el apasionante  mundo del vino. Recorre parte de nuestros viñedos y nuestras espectaculares e innovadoras instalaciones, y experimentarás un recorrido sensorial sobre el proceso de elaboración del vino. Las explicaciones de nuestro sumiller acabarán de complementar la visita, haciendo posible que puedas entrar en contacto más directo con el mundo del vino. También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc. Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p><p class="texto-desc-sec">¡Ven y descubre el mundo del vino!</p>', 'El entorno', 'img_intro_1_2017-10-30_11-24-16.jpg', 'El Celler Tianna Negre se encuentra rodeado de viñedos y almendros, en el municipio de Binissalem, que es prácticamente el centro de la comarca del Raiguer, entre los términos municipales de Consell, Alaró, Lloseta, Inca y Sencelles.\n\nBinissalem tiene una superficie de 29,8 Km² y una población de unos 7.500 habitantes.  Su altitud es de 139 metros por encima del nivel del mar y se encuentra a 22 km de la capital de la isla, Palma.\n', 'La Ruta del Vino - D.O. Binissalem', 'img_intro_2_2017-10-30_11-24-16.jpg', 'En Mallorca, en el Mediterráneo, no entendemos la fiesta sin el vino: el vino está presente en la religión, en las celebraciones y en la alimentación. El vino ha esculpido el paisaje, la arquitectura y nuestra cultura. La comarca de la D.O. Binissalem nos muestra una comarca llena de vina e historia.\n\nLa ruta del vino de la D.O. Binissalem os guiará por unos paisajes llanos presididos por la Sierra de Tramuntana. Unos caminos laberínticos os acercaran a los viñedos, a la tierra, a sensaciones naturales únicas y singulares, a casas, a pozos, a cuevas y a “llogarets”.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_aceite`
--

CREATE TABLE `procesos_aceite` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL COMMENT 'Nombre del proceso',
  `img` longtext NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `procesos_aceite`
--

INSERT INTO `procesos_aceite` (`id`, `nombre`, `img`, `orden`) VALUES
(1, 'Foto 1 (Proceso)', 'aceite_proc_0_2017-03-27_01-52-32.jpg', 0),
(2, 'Foto 2 (Proceso)', 'aceite_proc_1_2017-03-27_01-52-32.jpg', 1),
(3, 'Foto 3 (Proceso)', 'aceite_proc_2_2017-03-27_01-52-32.jpg', 2),
(4, 'Foto 4 (Proceso)', 'aceite_proc_3_2017-03-27_01-52-32.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL COMMENT 'Categoria del producto',
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Miniatura del producto en PNG',
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `img`, `orden`) VALUES
(1, 'Tianna Negre 1', 1, 'prod_0_2017-07-19_11-20-00.png', 0),
(2, 'Tianna Negre 2', 1, 'prod_1_2017-07-19_11-20-00.png', 1),
(3, 'Tianna Negre', 1, 'prod_2_2017-07-19_11-20-00.png', 2),
(4, 'El Columpio Blanc', 2, 'prod_3_2017-07-19_11-20-00.png', 3),
(5, 'El Columpio Tinto', 2, 'prod_4_2017-07-19_11-20-00.png', 4),
(6, 'El Columpio Rosat', 2, 'prod_5_2017-07-19_11-20-00.png', 5),
(7, 'Randemar Blanc', 3, 'prod_6_2017-07-19_11-20-00.png', 6),
(8, 'Randemar Negre', 3, 'prod_7_2017-07-19_11-20-00.png', 7),
(9, 'Randemar Rosat', 3, 'prod_8_2017-07-19_11-20-00.png', 8),
(10, 'Ses Nines Blanc Selecció', 4, 'prod_9_2017-07-19_11-20-00.png', 9),
(11, 'Ses Nines Negre', 4, 'prod_10_2017-07-19_11-20-00.png', 10),
(12, 'Ses Nines Rosat', 4, 'prod_11_2017-07-19_11-20-00.png', 11),
(13, 'Ses Nines Selecció', 4, 'prod_12_2017-07-19_11-20-00.png', 12),
(14, 'Tianna Bocchoris Blanc', 5, 'prod_13_2017-07-19_11-20-00.png', 13),
(15, 'Tianna Bocchoris Negre', 5, 'prod_14_2017-07-19_11-20-00.png', 14),
(16, 'Velonegre', 6, 'prod_15_2017-07-19_11-20-00.png', 15),
(17, 'Vélorosé', 6, 'prod_16_2017-07-19_11-20-00.png', 16);

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
(1, 'Reservas', 'Haz tu reserva', '<p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc. Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p>\n<p class="texto-desc-sec">¡Ven y descubre el mundo del vino!</p>', '¿Cómo puedo hacer mi reserva?', 'img_reserva_1_2017-10-30_11-24-16.jpg', '<p>Llama al +34 971 886 826 / 661 224 109, de 09:00 a 16:00 horas.</p>\n<p>Manda un email a info@tiannanegre.com y nosotros nos pondremos en contacto contigo para formalizar la reserva.</p>', 'Visita celler tianna negre', 'img_reserva_2_2017-10-30_11-24-16.jpg', '<p>Las visitas al Celler Tianna Negre son de <strong>lunes a viernes de 10:00h a 16:00h.</strong></p>\n<p>Imprescindible reserva previa para cualquier fecha y horario.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_contacto`
--

CREATE TABLE `seccion_contacto` (
  `id` int(11) NOT NULL,
  `domicilio` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fb` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Facebook',
  `tw` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Twitter',
  `gp` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Google+',
  `be` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Behance',
  `it` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Instagram'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_contacto`
--

INSERT INTO `seccion_contacto` (`id`, `domicilio`, `telefono`, `email`, `fb`, `tw`, `gp`, `be`, `it`) VALUES
(1, 'Camí des Mitjans. (Parcel.la 67) 07350 Binissalem. Mallorca. Esp', '971 886 826 / 661 224 109', 'info@tiannanegre.com', 'http://www.facebook.com/CellerTiannaNegre/', 'http://twitter.com/tianna_negre', '', '', 'http://www.instagram.com/cellertiannanegre/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_equipo`
--

CREATE TABLE `seccion_equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_equipo`
--

INSERT INTO `seccion_equipo` (`id`, `nombre`, `img`, `descripcion`) VALUES
(1, 'Xisca Morey', 'img_equipo_0_2017-10-19_01-30-28.jpg', '<i>"El vino es como un proyecto arquitectónico. A través de unas premisas que te da el campo, la viña, el clima, hasta llegar al producto final. La obra ya está realizada"</i> Xisca Morey (Gerencia, Arquitecta)'),
(2, 'Antonia Garau', 'img_equipo_1_2017-10-19_01-30-28.jpg', '<i>"El tiempo de Vermar es la culminación del trabajo de todo un año, extraer el vino es el fruto de todo un año."</i> Antonia Garau (Propietaria Tianna Negre)'),
(3, 'Joan Toni Lladó', 'img_equipo_2_2017-10-19_01-30-28.jpg', '"El vi es passió i plaer" Joan Toni Lladó (Responsable Celler)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_productos`
--

CREATE TABLE `seccion_productos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_productos`
--

INSERT INTO `seccion_productos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Productos', 'Descripción de la sección de productos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_productos_slider`
--

CREATE TABLE `seccion_productos_slider` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_productos_slider`
--

INSERT INTO `seccion_productos_slider` (`id`, `id_prod`, `orden`) VALUES
(1, 1, 0),
(2, 2, 1),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4),
(6, 6, 5),
(7, 7, 6),
(8, 8, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_tiendas`
--

CREATE TABLE `seccion_tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_tiendas`
--

INSERT INTO `seccion_tiendas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Tienda', 'Nuestra tienda es más que una tienda, es una experiencia única en sí misma donde encontrará: Una atención individual con asesoramiento y cata de degustación previa a la adquisición del producto, toda la variedad de los vinos que elaboramos en nuestra propia bodega y nuestro aceite Tianna Negre Virgen Extra.\n<strong>La tienda Tianna Negre es de libre acceso y está abierta al público en horario de lunes a viernes de las 9:00 a las 18:00 (de Marzo a Octubre). De las 9:00 a las 16:00 (de Noviembre a Febrero). Cerramos sábados,domingos y festivos.                                                 </strong>'),
(2, 'Visitas y Catas', 'Ven a visitar nuestra bodega y sumérgete en el apasionante  mundo del vino. Recorre parte de nuestros viñedos y nuestras espectaculares e innovadoras instalaciones, y experimentarás un recorrido sensorial sobre el proceso de elaboración del vino. Las explicaciones de nuestro sumiller acabarán de complementar la visita. ¡Ven y descubre el mundo del vino!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_tiendas_img`
--

CREATE TABLE `seccion_tiendas_img` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_tiendas_img`
--

INSERT INTO `seccion_tiendas_img` (`id`, `nombre`, `img`, `orden`) VALUES
(1, 'Imagen Bodegas', 'img_tiendas___1.jpg', 1),
(2, 'Imagen Bodegas', 'img_tiendas___2.jpg', 2),
(3, 'Imagen Bodegas', 'img_tiendas___3.jpg', 3),
(4, 'Imagen Bodegas', 'img_tiendas___4.jpg', 4),
(5, 'Imagen Bodegas', 'img_tiendas___5.jpg', 5),
(6, 'Imagen Bodegas', 'img_tiendas___6.jpg', 6),
(7, 'Imagen Bodegas', 'img_tiendas___7.jpg', 7),
(8, 'Imagen Bodegas', 'img_tiendas___8.jpg', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_video`
--

CREATE TABLE `seccion_video` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ruta` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_video`
--

INSERT INTO `seccion_video` (`id`, `titulo`, `descripcion`, `ruta`) VALUES
(1, 'Buscamos que cada vino tenga una <br>historia detrás que contar.', 'La etiqueta de uno de nuestros vinos, la del vino Ses Nines, ilustra a nuestra madre cuando era niña jugando en la calle de su pueblo natal, Consell.  Uno de esos pueblos con tradición viticultora, de la zona del Raiguer, que sufrieron los efectos devastadores de la filoxera a finales del siglo XIX. Debido a esto, los cultivos de vid se transformaron en cultivos de almendros pero nunca desapareció esa tradición viticultora en el mundo payés. Ya a mediados del siglo XX se produjo una reactivación del sector del vino, gracias al esfuerzo de los viticultores y vinicultores de la isla.<br>Aquella niña, nuestra madre, procedente de una familia de payeses, heredó un pequeño viñedo en el término municipal de Consell - un viñedo de más de 35 años, sembrado exclusivamente con la uva Manto Negro, variedad autóctona, y al estilo tradicional, con “politxó” (en vaso entutorado). En nuestro recuerdo siempre está el particular cuidado que le dedicaba, como si de un tesoro se tratara.', '<iframe width="100%" height="315" src="https://player.vimeo.com/video/107802029" frameborder="0" allowfullscreen></iframe>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sec_1_bodegas`
--

CREATE TABLE `sec_1_bodegas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(250) NOT NULL,
  `parrafo1` longtext NOT NULL COMMENT 'Parrafo izquierda',
  `parrafo2` longtext NOT NULL COMMENT 'Parrafo derecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sec_1_bodegas`
--

INSERT INTO `sec_1_bodegas` (`id`, `titulo`, `subtitulo`, `parrafo1`, `parrafo2`) VALUES
(1, 'Nuestra historia', '', '<strong> La etiqueta de uno de nuestros vinos, la del vino Ses Nines, ilustra a nuestra madre cuando era niña jugando en la calle de su pueblo natal, Consell.  </strong>  Uno de esos pueblos con tradición viticultora, de la zona del Raiguer, que sufrieron los efectos devastadores de la filoxera a finales del siglo XIX. Debido a esto, los cultivos de vid se transformaron en cultivos de almendros pero nunca desapareció esa tradición viticultora en el mundo payés. Ya a mediados del siglo XX se produjo una reactivación del sector del vino, gracias al esfuerzo de los viticultores y vinicultores de la isla.<br><br>Aquella niña, nuestra madre, procedente de una familia de payeses, heredó un pequeño viñedo en el término municipal de Consell - un viñedo de más de 35 años, sembrado exclusivamente con la uva Manto Negro, variedad autóctona, y al estilo tradicional, con “politxó” (en vaso entutorado). En nuestro recuerdo siempre está el particular cuidado que le dedicaba, como si de un tesoro se tratara.<br><br>Gracias a esa pequeña porción de terreno con Manto Negro y el amor que nuestra madre le profesaba, ella y los demás miembros de su familia, la familia Morey Garau, todos procedentes de Binissalem, nos ilusionamos con la idea de construir una bodega para elaborar nuestros propios vinos.', 'La idea fue cobrando fuerza y fue en el año 2004 cuando se inició el proyecto arquitectónico para construir el Celler Tianna Negre. Desde entonces hemos ido sumando terrenos (4 Ha en Biniagual, 10 Ha en Finca Es Pinaret, 6 Ha en Son Colom, 10 Ha en Can Parrona, 6 Ha en Es Velar y 15 Ha en Son Boi).  <strong> Nuestro principal objetivo era crear unos vinos especiales que pudieran transmitir lo mejor de nuestra isla y, al mismo tiempo, con una renovada visión de futuro, conjugando para ello la arquitectura, la naturaleza, lo autóctono y la calidad. </strong><br><br>La bodega tardaría en construirse, por eso, mientras el proyecto se iba haciendo realidad fuimos elaborando en el garaje de un amigo viticultor nuestro primer vino, al que llamamos “Ses Nines” en honor a nuestra madre. Con perseverancia e ilusión, el Celler Tianna Negre abrió sus puertas a la primera vendimia en el año 2007. Su éxito se debe a la sinergia entre su arquitectura y sus vinos - la unión de ambos maximiza el equilibrio de esas cualidades que, sobre lo tradicional, lo moderno y el respeto medioambiental, queremos transmitir.<br><br><strong>Nuestros vinos quieren reflejar esa fuerza que las uvas autóctonas ofrecen pero con un enfoque moderno.<br><br>Nuestro trabajo está basado en el amor por la tierra y los viñedos y en el trabajo de calidad en todos los procesos. </strong>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sec_1_imasd`
--

CREATE TABLE `sec_1_imasd` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(250) NOT NULL,
  `parrafo1` longtext NOT NULL COMMENT 'Parrafo izquierda',
  `parrafo2` longtext NOT NULL COMMENT 'Parrafo derecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sec_1_imasd`
--

INSERT INTO `sec_1_imasd` (`id`, `titulo`, `subtitulo`, `parrafo1`, `parrafo2`) VALUES
(1, 'I+D', '', 'Nuestra filosofía nos da a entender que la calidad de los vinos no sólo radica en la bodega, sino que empieza en el viñedo y, es por eso, que desde nuestra empresa apostamos por una viticultura de calidad y sostenible, cuidando nuestros viñedos para que cada una de las variedades que trabajamos exprese su mayor potencial enológico.\n\nNuestro equipo, formado por ingenieros y enólogos, trabaja durante todo el año para asegurar una vendimia sana y con una maduración homogénea.\n\nDurante el ciclo vegetativo de la vid se realizan controles y analíticas de seguimiento del viñedo para adaptar los trabajos culturales a los objetivos deseados.', 'En el Celler Tianna Negre estamos convencidos de la gran importancia de la investigación, el desarrollo y la innovación en el mundo del vino, por la gran mejora que se aporta al producto final y que consecuentemente revierte en el deleite del vino en el paladar del consumidor final.  Por todo ello trabajamos el I+D+I en todas las vertientes del proceso de elaboración del vino, desde el viñedo hasta su comercialización.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sec_2_bodegas`
--

CREATE TABLE `sec_2_bodegas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sec_2_bodegas`
--

INSERT INTO `sec_2_bodegas` (`id`, `titulo`, `subtitulo`) VALUES
(1, 'galería', 'fotográfica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sec_2_imasd`
--

CREATE TABLE `sec_2_imasd` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sec_2_imasd`
--

INSERT INTO `sec_2_imasd` (`id`, `titulo`, `subtitulo`) VALUES
(1, 'Galeria', 'Apostamos por la investigación, desarrollo y la innovación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sec_3_bodegas`
--

CREATE TABLE `sec_3_bodegas` (
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
-- Volcado de datos para la tabla `sec_3_bodegas`
--

INSERT INTO `sec_3_bodegas` (`id`, `titulo`, `subtitulo`, `img_1`, `ttl_1`, `txt_1`, `img_2`, `ttl_2`, `txt_2`, `img_3`, `ttl_3`, `txt_3`) VALUES
(1, 'Sobre nosotros', 'Viñedos / Instalaciones / Equipo', 'sec3_img_1_2017-10-24_11-19-38.jpg', 'Viñedos', 'Siempre hemos contado con el apoyo y asesoramiento de profesionales viticultores y enólogos.Nuestro concepto vitícola no es solo un concepto varietal sino que lo importante es el conjunto de tierra-cepa-clima-cuidados. <strong>Nuestros viñedos se encuentran ubicados en los términos municipales de Binissalem y Consell, pertenecientes ambos a la región de la D.O. Binissalem, Mallorca. </strong>', 'sec3_img_2_2017-10-24_11-19-38.jpg', 'Instalaciones', 'La arquitectura del "Celler Tianna Negre" es una muestra clara de conjugación de diseño arquitectónico, funcionalidad y respeto al medio ambiente. El resultado es un potente y espectacular edificio completamente integrado en el entorno, y con unas condiciones óptimas de uso energético, de trabajo y de productividad - características todas ellas que revierten en el resultado final de nuestros vinos.', 'sec3_img_3_2017-10-24_11-19-38.jpg', 'Equipo', 'Tianna Negre es un proyecto que se ha hecho realidad gracias, sobre todo, a su equipo humano. Su vocación, compromiso, interés por una mejora permanente y su dedicación absoluta son su mejor garantía. <strong> El objetivo de todas las personas que componen el equipo de Tianna Negre es despertar en nuestros clientes la misma pasión que originó este proyecto.  </strong>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sec_3_imasd`
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
-- Volcado de datos para la tabla `sec_3_imasd`
--

INSERT INTO `sec_3_imasd` (`id`, `titulo`, `subtitulo`, `img_1`, `ttl_1`, `txt_1`, `img_2`, `ttl_2`, `txt_2`, `img_3`, `ttl_3`, `txt_3`) VALUES
(1, '', '', 'sec3_img_1_2017-10-24_14-03-54.jpg', 'Calidad', 'En bodega combinamos la más alta tecnología con procesos de elaboración sencillos y respetuosos con el trinomio uva-mosto-vino. Nuestro objetivo es mimar al máximo cada uno de los procesos de elaboración de nuestros vinos para que la calidad sea la más alta posible, por eso realizamos controles desde la viña hasta el producto final.\n\nRealizamos vendimia manual en caja de 15 Kg para mantener al máximo la calidad de la uva.\nTenemos cámara de frío para estabilizar la temperatura de la uva vendimiada.\nTenemos equipos de frío.\nRealizamos una selección manual de la uva para los vinos de alta gama.\nLas fermentaciones son microbiológicamente controladas.\nRealizamos un seguimiento analítico exhaustivo, con un laboratorio interno dirigido por personal especializado. Nuestro control analítico se basa principalmente en: análisis en mostos, índice de maduración fenólica, análisis de los vinos, análisis microbiológicos, análisis de barricas y corchos (TCA, TeCA, PCA…).\nCuidamos las etiquetas para que el consumidor tenga la máxima información del producto.', 'sec3_img_2_2017-10-24_14-03-54.jpg', 'Diseño', 'En el Celler Tianna Negre creemos en la simbiosis entre el mundo del arte y el vino. El vino es cultura y arte, una experiencia sensorial en sí mismo y por ello no podemos olvidar la forma en que se nos presenta, razón por la cual intentamos cuidar, mimar e innovar esa parte final que es la botella, la etiqueta y el packaging..\n\nAsimismo trabajamos con diseñadores, locales y nacionales, en el desarrollo de la imagen de cada producto, desde el principio (la idea), hasta la fase final.\n\nTambién creemos importante el lanzamiento del producto, bien sea de una añada especial,  de un nuevo producto o de una edición limitada, para darlo a conocer al consumidor final, organizando este tipo de marketing directo en algunos locales de moda de la isla o colaborando con algunas de las empresas nacionales e internacionales de aclamada fama.', 'sec3_img_3_2017-10-24_14-03-54.jpg', 'Viñedos y Bodegas', 'En el Celler Tianna Negre estamos convencidos de la gran importancia de la investigación, el desarrollo y la innovación en el mundo del vino, por la gran mejora que se aporta al producto final y que consecuentemente revierte en el deleite del vino en el paladar del consumidor final.  Por todo ello trabajamos el I+D+I en todas las vertientes del proceso de elaboración del vino, desde el viñedo hasta su comercialización.\nDesde nuestros inicios estamos colaborando con el I.R.F.A.P (“Institut de Recerca i Formació Agrària i Pesquera”), de la Conselleria de Agricultura del Govern de les Illes Balears, en su labor por la recuperación de variedades de uvas autóctonas que desaparecieron como consecuencia de la plaga de filoxera que hubo en la isla a finales del siglo XIX.  Gracias a esto, tenemos el orgullo de ser los impulsores de la recuperación de la variedad “Giró Ros” y de iniciar todos los trámites necesarios para que finalmente, fuera reconocida, ya en el año 2013, por la D.O. Binissalem como variedad autóctona para la elaboración de vinos de la D.O.  Por ello fuimos los pioneros en la comarca en la siembra del “Giró Ros” en el año 2008 con 11.000 m² en la Finca Ca’s Magraner y Son Biel de Consell. En el año 2011 se recolectó la primera vendimia que se destinó exclusivamente a nuestro vino Tianna Bocchoris Blanco.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sld_2_bodegas`
--

CREATE TABLE `sld_2_bodegas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre que aparecerá en caso de que no muestre imagen',
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sld_2_bodegas`
--

INSERT INTO `sld_2_bodegas` (`id`, `nombre`, `img`, `orden`) VALUES
(1, 'Imagen bodegas', 'sld_bodegas_0_2017-10-24_11-19-38.jpg', 0),
(2, 'Imagen bodegas', 'sld_bodegas_1_2017-10-24_11-19-38.jpg', 1),
(3, 'Imagen bodegas', 'sld_bodegas_2_2017-10-24_11-19-38.jpg', 2),
(4, 'Imagen bodegas', 'sld_bodegas_3_2017-10-24_11-19-38.jpg', 3),
(5, 'Imagen bodegas', 'sld_bodegas_4_2017-10-24_11-19-38.jpg', 4),
(6, 'Imagen bodegas', 'sld_bodegas_5_2017-10-24_11-19-38.jpg', 5),
(7, 'Imagen bodegas', 'sld_bodegas_6_2017-10-24_11-19-38.jpg', 6),
(8, 'Imagen bodegas', 'sld_bodegas_7_2017-10-24_11-19-38.jpg', 7),
(9, 'Imagen bodegas', 'sld_bodegas_8_2017-10-24_11-19-38.jpg', 8),
(10, 'Imagen bodegas', 'sld_bodegas_9_2017-10-24_11-19-38.jpg', 9),
(11, 'Imagen bodegas', 'sld_bodegas_10_2017-10-24_11-19-38.jpg', 10),
(12, 'Imagen bodegas', 'sld_bodegas_11_2017-10-24_11-19-38.jpg', 11),
(13, 'Imagen bodegas', 'sld_bodegas_12_2017-10-24_11-19-38.jpg', 12),
(14, 'Imagen bodegas', 'sld_bodegas_13_2017-10-24_11-19-38.jpg', 13),
(15, 'Imagen bodegas', 'sld_bodegas_14_2017-10-24_11-19-38.jpg', 14),
(16, 'Imagen bodegas', 'sld_bodegas_15_2017-10-24_11-19-38.jpg', 15),
(17, 'Imagen bodegas', 'sld_bodegas_16_2017-10-24_11-19-38.jpg', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sld_2_imasd`
--

CREATE TABLE `sld_2_imasd` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre que aparecerá en caso de que no muestre imagen',
  `img` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sld_2_imasd`
--

INSERT INTO `sld_2_imasd` (`id`, `nombre`, `img`, `orden`) VALUES
(1, 'Imagen imasd', 'sld_imasd_0_2017-10-24_14-03-54.jpg', 0),
(2, 'Imagen imasd', 'sld_imasd_1_2017-10-24_14-03-54.jpg', 1),
(3, 'Imagen imasd', 'sld_imasd_2_2017-10-24_14-03-54.jpg', 2),
(4, 'Imagen imasd', 'sld_imasd_3_2017-10-24_14-03-54.jpg', 3),
(5, 'Imagen imasd', 'sld_imasd_4_2017-10-24_14-03-54.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_principal`
--

CREATE TABLE `slider_principal` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider_principal`
--

INSERT INTO `slider_principal` (`id`, `titulo`, `descripcion`, `orden`) VALUES
(1, '- -', 'img_slide_0_1001.jpg', 0),
(2, '- -', 'img_slide_0_1002.jpg', 1),
(3, '- -', 'img_slide_0_1003.jpg', 2),
(4, '- -', 'img_slide_0_1004.jpg', 3),
(5, '- -', 'img_slide_0_1005.jpg', 4),
(6, '- -', 'img_slide_0_1006.jpg', 5),
(7, '- -', 'img_slide_0_1007.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `switch_header`
--

CREATE TABLE `switch_header` (
  `id` int(11) NOT NULL,
  `tipo_header` int(11) NOT NULL COMMENT 'No está en ninguna tabla, sólo en index.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `switch_header`
--

INSERT INTO `switch_header` (`id`, `tipo_header`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto_formulario`
--

CREATE TABLE `texto_formulario` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `texto_formulario`
--

INSERT INTO `texto_formulario` (`id`, `titulo`, `subtitulo`) VALUES
(1, 'contáctanos', 'y haz tu reserva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `text_slider_top`
--

CREATE TABLE `text_slider_top` (
  `id` int(11) NOT NULL,
  `texto` varchar(250) NOT NULL COMMENT 'Texto del slider',
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `text_slider_top`
--

INSERT INTO `text_slider_top` (`id`, `texto`, `orden`) VALUES
(1, 'Slider Demo 1', 0),
(2, 'Texto demo 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin_tn', 'psw1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video_inicio`
--

CREATE TABLE `video_inicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `video_inicio`
--

INSERT INTO `video_inicio` (`id`, `nombre`, `enlace`) VALUES
(1, 'videoHomeBack2017-10-19_01-30-28.mp4', 'imagenVideo2017-10-19_01-30-28.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner_home`
--
ALTER TABLE `banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `btn_visitas_catas`
--
ALTER TABLE `btn_visitas_catas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catas_visitanos`
--
ALTER TABLE `catas_visitanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_aceite`
--
ALTER TABLE `detalles_aceite`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_aceite_img`
--
ALTER TABLE `detalles_aceite_img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_vino`
--
ALTER TABLE `detalles_vino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_vino_img`
--
ALTER TABLE `detalles_vino_img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header_aceite`
--
ALTER TABLE `header_aceite`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header_bodegas`
--
ALTER TABLE `header_bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header_contacto`
--
ALTER TABLE `header_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header_imasd`
--
ALTER TABLE `header_imasd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header_vinos`
--
ALTER TABLE `header_vinos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `introduccion_visitanos`
--
ALTER TABLE `introduccion_visitanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesos_aceite`
--
ALTER TABLE `procesos_aceite`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservaciones_visitanos`
--
ALTER TABLE `reservaciones_visitanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_contacto`
--
ALTER TABLE `seccion_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_equipo`
--
ALTER TABLE `seccion_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_productos`
--
ALTER TABLE `seccion_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_productos_slider`
--
ALTER TABLE `seccion_productos_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_tiendas`
--
ALTER TABLE `seccion_tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_tiendas_img`
--
ALTER TABLE `seccion_tiendas_img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_video`
--
ALTER TABLE `seccion_video`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sec_1_bodegas`
--
ALTER TABLE `sec_1_bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sec_1_imasd`
--
ALTER TABLE `sec_1_imasd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sec_2_bodegas`
--
ALTER TABLE `sec_2_bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sec_2_imasd`
--
ALTER TABLE `sec_2_imasd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sec_3_bodegas`
--
ALTER TABLE `sec_3_bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sec_3_imasd`
--
ALTER TABLE `sec_3_imasd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sld_2_bodegas`
--
ALTER TABLE `sld_2_bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sld_2_imasd`
--
ALTER TABLE `sld_2_imasd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `switch_header`
--
ALTER TABLE `switch_header`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `texto_formulario`
--
ALTER TABLE `texto_formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `text_slider_top`
--
ALTER TABLE `text_slider_top`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `video_inicio`
--
ALTER TABLE `video_inicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner_home`
--
ALTER TABLE `banner_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `btn_visitas_catas`
--
ALTER TABLE `btn_visitas_catas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `catas_visitanos`
--
ALTER TABLE `catas_visitanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalles_aceite`
--
ALTER TABLE `detalles_aceite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalles_aceite_img`
--
ALTER TABLE `detalles_aceite_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalles_vino`
--
ALTER TABLE `detalles_vino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `detalles_vino_img`
--
ALTER TABLE `detalles_vino_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `header_aceite`
--
ALTER TABLE `header_aceite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `header_bodegas`
--
ALTER TABLE `header_bodegas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `header_contacto`
--
ALTER TABLE `header_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `header_imasd`
--
ALTER TABLE `header_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `header_vinos`
--
ALTER TABLE `header_vinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `introduccion_visitanos`
--
ALTER TABLE `introduccion_visitanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `procesos_aceite`
--
ALTER TABLE `procesos_aceite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `reservaciones_visitanos`
--
ALTER TABLE `reservaciones_visitanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `seccion_contacto`
--
ALTER TABLE `seccion_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `seccion_equipo`
--
ALTER TABLE `seccion_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `seccion_productos`
--
ALTER TABLE `seccion_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `seccion_productos_slider`
--
ALTER TABLE `seccion_productos_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `seccion_tiendas`
--
ALTER TABLE `seccion_tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `seccion_tiendas_img`
--
ALTER TABLE `seccion_tiendas_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `seccion_video`
--
ALTER TABLE `seccion_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sec_1_bodegas`
--
ALTER TABLE `sec_1_bodegas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sec_1_imasd`
--
ALTER TABLE `sec_1_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sec_2_bodegas`
--
ALTER TABLE `sec_2_bodegas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sec_2_imasd`
--
ALTER TABLE `sec_2_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sec_3_bodegas`
--
ALTER TABLE `sec_3_bodegas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sec_3_imasd`
--
ALTER TABLE `sec_3_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sld_2_bodegas`
--
ALTER TABLE `sld_2_bodegas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `sld_2_imasd`
--
ALTER TABLE `sld_2_imasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `switch_header`
--
ALTER TABLE `switch_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `texto_formulario`
--
ALTER TABLE `texto_formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `text_slider_top`
--
ALTER TABLE `text_slider_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `video_inicio`
--
ALTER TABLE `video_inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
