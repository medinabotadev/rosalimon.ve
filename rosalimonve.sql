-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-04-2021 a las 19:41:22
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rosalimonve`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int NOT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `cedula`, `password`) VALUES
(12, '26751602', '$2y$12$MgOppflgukRC8rQK4D6qgONG0j5JNEG6Ykw0ocJwWtaYlHKBPcEIq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int NOT NULL,
  `id_usuario_carrito` int NOT NULL,
  `id_producto_carrito` int UNSIGNED NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_usuario_carrito`, `id_producto_carrito`, `cantidad`) VALUES
(46, 49, 7, 0),
(47, 49, 43, 0),
(48, 49, 27, 0),
(88, 56, 3, 0),
(95, 54, 11, 0),
(96, 57, 33, 0),
(97, 57, 8, 0),
(98, 57, 40, 0),
(99, 59, 3, 0),
(100, 59, 43, 0),
(101, 58, 19, 0),
(105, 82, 3, 0),
(106, 83, 3, 0),
(107, 87, 4, 0),
(115, 91, 1, 0),
(116, 92, 38, 0),
(117, 1, 19, 0),
(118, 94, 7, 0),
(119, 96, 5, 0),
(128, 97, 3, 3),
(129, 98, 3, 1),
(130, 99, 3, 3),
(131, 99, 2, 2),
(132, 100, 3, 4),
(133, 104, 3, 3),
(134, 105, 3, 2),
(135, 106, 3, 2),
(136, 116, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int UNSIGNED NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'Skincare'),
(2, 'Bodycare'),
(3, 'Haircare'),
(4, 'Makeup');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int NOT NULL,
  `nombre_contacto` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_contacto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_contacto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje_contacto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma_contacto` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_contacto` datetime NOT NULL,
  `status_contacto` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre_contacto`, `email_contacto`, `telefono_contacto`, `mensaje_contacto`, `forma_contacto`, `fecha_contacto`, `status_contacto`) VALUES
(64, 'Jesus Medina', 'admin@demo.com', '+58412194690', 'Quiero un producto', 'telefono', '2021-01-27 21:28:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_orden` int UNSIGNED NOT NULL,
  `id_usuario_orden` int NOT NULL,
  `monto` decimal(6,2) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_postal` int NOT NULL,
  `metodo_envio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_pedido` datetime NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id_orden`, `id_usuario_orden`, `monto`, `nombre`, `apellido`, `correo`, `telefono`, `estado`, `ciudad`, `direccion_1`, `direccion_2`, `codigo_postal`, `metodo_envio`, `fecha_pedido`, `status`) VALUES
(94, 94, '10.00', 'Jesús', 'Medina', 'medinabotamail@gmail.com', '+58412194690', 'Anzoátegui', 'Anaco', 'Anaco Estado Anzoátegui', 'Anaco Estado Anzoátegui', 6003, 'retiro', '2020-10-15 19:32:57', 0),
(96, 96, '12.00', 'Roberto', 'Gamboa', 'medinabotamail@gmail.com', '16786628223', 'Texas', 'San Antonio', '5414 Maple Vista, San Antonio, TX 78247', '5414 Maple Vista, San Antonio, TX 78247', 78247, 'envio', '2020-10-15 19:35:56', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int UNSIGNED NOT NULL,
  `codigo_producto` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_producto` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_producto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_producto` decimal(6,2) UNSIGNED NOT NULL,
  `id_categoria_producto` int UNSIGNED NOT NULL,
  `img_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad_inventario` int NOT NULL DEFAULT '0',
  `editado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_producto`, `nombre_producto`, `descripcion_producto`, `precio_producto`, `id_categoria_producto`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `cantidad_inventario`, `editado`) VALUES
(1, 'A1', 'Fragance Mist PINK 75ml.', 'Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)', '6.00', 2, '', '', '', NULL, NULL, NULL, NULL, 1, '2020-10-22 14:23:54'),
(2, 'A2', 'Fragance Mist PINK 250ml.', 'Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)', '12.00', 2, 'A2.1.jpg', '', '', NULL, NULL, NULL, NULL, 2, '2020-10-22 14:23:54'),
(3, 'A3', 'Clean & Clear Deep Action Cream Facial Cleanser, 1 oz', 'Crema limpiadora facial size travel.', '3.00', 1, 'A3.1.jpg', '', '', NULL, NULL, NULL, NULL, 5, '2020-10-22 14:45:04'),
(4, 'A4', 'Clean & Clear Alcohol-Free Lemon Juice Facial Toner', 'Tonico facial hidratante a base de vitamina C y zumo de limon. Regenerativo. Para todo tipo de piel', '12.00', 1, 'A4.1.jpg', '', '', NULL, NULL, NULL, NULL, 5, '2020-10-22 14:50:39'),
(5, 'A5', 'Clean & Clear Lemon Zesty Oil-Free Face Scrub with Vitamin C, 4.2 oz', 'Exfoliante a base de vitamina C y zumo de limon. Remueve la piel muerta. Para todo tipo de piel', '12.00', 1, 'A5.1.jpg', '', '', NULL, NULL, NULL, NULL, 2, '2020-10-22 15:10:52'),
(6, 'A6', 'Clean & Clear Morning Burst Facial Cleanser For Daily Skincare Routines, 1 Fl. Oz.', 'Exfoliante facial de dia. Size Travel', '3.00', 1, 'A6.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(7, 'A7', 'Clean & Clear Hydrating Watermelon Daily Gel Face Moisturizer, 1.7 oz', 'Gel Hidratante para todo tipo de piel. Hidrata tu piel profundamente sin dejarla brillante.', '10.00', 1, 'A7.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(8, 'A8', 'Clean & Clear Morning Burst Hydrating Gel Face Moisturizer, 3 oz', 'Gel Hidratante de dia para todo tipo de piel con extracto de pepino, refresca e hidrata dejando tu piel hidratada pero no brillante.', '10.00', 1, 'A8.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(9, 'A9', 'Clean & Clear Lemon Gel Facial Cleanser with Vitamin C, 7.5 fl. Oz', 'Jabon liquido limpiador a base de vitamina C y zumo de limon. Regenerativo Para todo tipo de piel.', '12.00', 1, 'A9.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(10, 'A10', 'Clean & Clear Advantage Spot Treatment with Witch Hazel,.75 fl. oz', 'Tratamiento para acne. Elimina granos de forma inmediata.', '12.00', 1, 'A10.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(11, 'A11', 'Clean & Clear Essentials Oil-Free Deep Cleaning Astringent, 8 fl. oz', 'Tonico Astringente para piel grasa. Paso 2.', '8.00', 1, 'A11.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(12, 'A12', 'Clean & Clear Daily Acne Skincare Set', 'Set de rutina facial para piel con acne o grasa. Paso 1: Jabon para limpieza. Paso 2: Tonico Astringente. Paso3: Hidratante.', '22.00', 1, 'A12.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(13, 'A13', 'St. Ives Blackhead Clearing Face Scrub with Salicylic Acid, 6 oz', 'Exfoliante moderado a base de te verde y carbon activado. Contiene acido salicilico para eliminar y disminuir la aparicion de granos en la piel.', '8.00', 1, 'A13.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(14, 'A14', 'St Ives Radiant Skin Pink Lemon and Mandarin Orange Face Scrub 6 oz', 'Exfoliante moderado para todo tipo de piel. Remueve la piel muerta y humecta', '8.00', 1, 'A14.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(15, 'A15', 'St. Ives Detox Me Daily Cleansing Stick, 1.6 Ounce', 'Jabon a base de Matcha, te verde y jengibre. Limpia profundamente y desinflama. Para todo tipo de piel', '8.00', 1, 'A15.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(16, 'A16', 'Neutrogena Facial Cleansing Bar Facial Cleanser to Acne, 3.5 oz', 'Jabon de limpieza profunda a base de glicerina, para piel con acne.', '6.00', 1, 'A16.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(17, 'A17', 'Neutrogena Facial Cleansing Bar Facial Cleanser, All Skin Types, 3.5 oz', 'Jabon de limpieza profunda a base de glicerina, para todo tipo de piel.', '6.00', 1, 'A17.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(18, 'A18', 'Freeman Feeling Beautiful Polishing Mask, Charcoal & Black Sugar, 6 Fl Oz', 'Mascarilla doble funcion, aclarante y exfoliante. Purifica y limpia profundamente dejando tu piel radiante. Para todo tipo de piel', '8.00', 1, 'A18.1.jpeg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(19, 'A19', 'Freeman Feeling Beautiful Facial Clay Mask Avocado & Oatmeal 6 oz', 'Mascarilla purificante a base de aguacate y avena con vitamina E limpia e hidrata profundamente. Para todo tipo de piel.', '8.00', 1, 'A19.1.jpeg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(20, 'A20', 'Freeman Dead Sea Minerals Facial Anti-Stress Mask, 6 Ounce', 'Mascarilla a base de minerales y sales marinas, relaja, equilibra la humedad. Cierra los poros. Para todo tipo de piel', '7.00', 1, 'A20.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(21, 'A21', 'Equate Beauty Deep Cleaning Astringent, 10 fl oz', 'Tonico Astringente Limpiador profundo de poros. Comparado con Sea Breeze. Para piel sensible.', '7.00', 1, 'A21.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(22, 'A22', 'Equate Beauty Foaming Facial Cleanser, 12 fl oz', 'Jabon liquido facial para limpiar y remover maquillaje con niacinamide y ceramides. No irrita ni reseca la piel. Comparado con CeraVE. Piel normal a grasa.', '8.00', 1, 'A22.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(23, 'A23', 'Equate Sunscreen, SPF 100, 3 fl oz', 'Protector Solar Facial resistente al agua SPF 100, total absorcion. Comparado con Neutrogena.', '12.00', 1, 'A23.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(24, 'A24', 'Equate Beauty Clarifying Pink Grapefruit Body Wash, 8.5 fl ozz', 'Jabon liquido para el cuerpo con acido salicilico ideal para eliminar acne en la espalda. Comparado con Neutrogena.', '10.00', 2, 'A24.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(25, 'A25', 'Equate Beauty Oil-Free Acne Wash, 6 fl oz', 'Jabon liquido facial. Limpieza profunda con acido salicilico para tratamiento de acne.', '10.00', 1, 'A25.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(26, 'A26', 'Dove Body Wash Mousse 10.3 oz', 'Espuma de baño, no solo enjabona y limpia sino que tu piel queda totalmente hidratada.', '10.00', 2, 'A26.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(27, 'A27', 'Dove Exfoliating Body, 10.5 oz', 'Exfoliante para cuerpo, eliminina celulas muertas e hidrata, dejando una roma increible en tu piel.', '10.00', 2, 'A27.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(28, 'A28', 'Tree Hut Soothing Himalayan Salt Scrub Cherry Blossom, 15oz', 'Exfoliante para cuerpo a base de sal rosada del Himalaya con aroma a cereza.', '12.00', 2, 'A28.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(29, 'A29', 'Vitamin E Oil, 2 oz', 'Aceite de vitamina E para cabello, uñas y piel.', '6.00', 2, 'A29.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(30, 'A30', 'Organic Unrefined Virgin Coconut Oil, 14 fl oz', 'Aceite de coco orgánico. Natural, puedes usarlo en el cuerpo, cabello y para cocinar.', '10.00', 2, 'A30.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(31, 'A31', 'Palmer\'s Skin Success Anti-Dark Spot Fade Cream, 2.7 oz.', 'Crema desmanchadora a base de retinol, vitamina C y vitamina E. devuelve la uniformidad al tono de tu piel Para todo tipo de piel', '16.00', 1, 'A31.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(32, 'A32', 'Esponjas faciales', 'Limpia y exfolia tu piel, remueve mascarillas y productos aplicados.', '1.00', 1, 'A32.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(33, 'A33', 'Bandanas para el cabello', 'Permite realizar tu rutina de skincare y maquillaje sujetando tu cabello.', '6.00', 3, 'A33.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(34, 'A34', 'Spascriptions Kit Gel Face Mask', 'Kit de mascarillas para disminuir las lineas de expresion, desinflama, hidrata y disminuye las ojeras. Inclueye aplicador', '16.00', 2, 'A34.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(35, 'A35', 'Aplicador de mascarilla', 'Aplicador de mascarillas.', '2.00', 1, 'A35.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(36, 'A36', 'Herbal Essences Curl-Boosting Mousse, 6.8 Oz', 'Espuma para el cabello, te ayuda a minimizar el frizz e hidratar tu cabello.', '6.00', 3, 'A36.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(37, 'A37', 'OGX Smoothing + Liquid Pearl Luminescent Serum, 3.8 oz', 'Hidrata, minimiza el Frizz y regenera el cabello haciendolo lucir brillante naturalmente a base de aceite de ricino. No lo deja graso, se disuelve en el cabello mojado.', '10.00', 3, 'A37.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(38, 'A38', 'Plancha REVLON', 'Plancha de ceramica, alisa tu cabello sin maltratarlo. Temperatura maxima 400°F', '25.00', 3, 'A38.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(39, 'A39', 'Lip Balm m&m', 'Hidratante de labios. Se vende individual.', '2.00', 4, 'A39.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(40, 'A40', 'wet n wild Lip Gloss', 'Gloss escarchados para labios', '6.00', 4, 'A40.0.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(41, 'A41', 'Blistex Medicated Lip Balm SPF 15.', 'Labial regenerador de labios rotos, con antibiotico y protector solar SPF 15', '4.00', 4, 'A41.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(42, 'A42', 'Labiales Matte', 'Labiales de alta duracion totalmente mattes y cremosos', '3.00', 4, 'A42.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(43, 'A43', 'Copas mentruales', 'Talla S y L', '10.00', 2, 'A43.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(44, 'A44', 'Noxzema Clears and Prevents Acne Face Pads Anti-Blemish, 90 ct', 'Almohadillas limpiadoras faciales a base de eucalipto y acido salicilico, ayuda a prevenir la aparicion de acne limpiando profundamente', '8.00', 1, 'A44.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(45, 'A45', 'Splash Victoria Secret\'s Grande', 'Conoce y explora las nuevas fragancias de la coleccion Victoria Secret\'s. (consultar aroma disponible)', '15.00', 1, 'A45.1.webp', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `codigo_usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `codigo_usuario`) VALUES
(1, '$2y$12$YvbBPkSF3SoUz1ZnvF99pO8rAHSvjG3iRovAHy8.DIGLWYTf7DBRe'),
(2, '$2y$12$bBlGepzDXW23.dVb5PvOFuFGWDPTW1lRs6iWp.ipUWJbmYxUq7PHe'),
(3, '$2y$12$YdOcGaAqBv3GZycD3wnWguuak3LLAYUQf/TFH46GFG8m.D.wNBFIS'),
(4, '$2y$12$TiA4MdjBksZBB62sPv9dhOKVIkPzDEhQaduDSfKlW34JFY5Ni4wBe'),
(5, '$2y$12$gvJn/MjF/gw.Rku8sc/51e.0fO0p7qk93stuwhT4CsHc93nXTOnl2'),
(6, '$2y$12$WBRo7WerP3ojAA4GJvChu./BTFtYo1/og2lHDhPjbwVpbcvyhSoxK'),
(7, '$2y$12$h1XrvyF0468OK6rqvm3hOOLLKNnUnEfTn1C/tHMCa5ywVv9F3qRdS'),
(8, '$2y$12$ypuoKapsEX7eS0uFGVQj2O7K9Jay1fI3NS3wXfYhHzlM4QJLq/4o6'),
(9, '$2y$12$in1qR/MsFWKskuzO1gLyM.V4cG3zBxHwmkCODgnA2iJybWi3t8naG'),
(10, '$2y$12$wCUubkOH60QcHnH0oRurhOiWsV6AMjgvwXe.q/82O/hgipG/wq/LS'),
(11, '$2y$12$t//VDJFuZehnTY3ZkWgYGeW/KT6xgUiKKfeYG12NKjaZudOiku.rC'),
(12, '$2y$12$Zo1Aldc8VNrK2Gx9B0uoeOA0qiCTbQ7tqD2Z/ewTP26zmrXNy4g3q'),
(13, '$2y$12$Mhq1xQ7AjbfUMLGFzikyiuyxFkFXfy5yvzbA/qbLG8Rio0BKtrv.K'),
(14, '$2y$12$0FrMCbonQVHXCeEV3P2xxuqT1m8tJpNNkVflmWQRekLkaxB.Vi.rm'),
(15, '$2y$12$xiHegyjBLUKl.axxn1uED.vdKyYYyieqOQ5uGqB9tS3RLtxKjTBvu'),
(16, '$2y$12$nMbE0tZcyDixmA9FPA8rauoXW2T31o7NKzI.q/nSFzpju6DKKADam'),
(17, '$2y$12$toEC6X0sTpqswN.xqJ.p/OLY69U2uL/QUUaHY/vjTFdJXWqEoM/sC'),
(18, '$2y$12$uKJhTlY6TYQkbqyl00HLsu3KzEUjxYcuRd78OgJsTpPFetXxKjsfS'),
(19, '$2y$12$.I.h0IdmUoGQT3.VdeIwrOMaLakuxBNzuw4UjvtzNODFPJFpMW1SK'),
(20, '$2y$12$zYfF/lLMzaB.O36EC8pLHONuBez111nVYPCGcX/w6ufPsb4MoRZZK'),
(21, '$2y$12$jOQLySGvuaRaaZpCryJF0OHF6OyeqvXHd7T4zZOea52fNEN.rEflq'),
(22, '$2y$12$QZruwN0cexN7ySeVJa69EO.29rrOTfkMFQ2orRxliwgq1tCkytz06'),
(23, '$2y$12$XLBMF50P1FJ2/lO.I64Rteq8cqP9XPkc3oRBLF3uFq19d5o56q3ju'),
(24, '$2y$12$qko8oEzIUjn5qV6XIA5E6.Jb7mW/Q8D4KReLR8UDS/azQUb/z6xfS'),
(25, '$2y$12$MuS4tQLqvzcnSp0idCN9nes3YRDDMjfpR3/46y9UVoIQ1CoO0z5kW'),
(26, '$2y$12$SLglJIdSV7FjUT8vVMumr.R/MD/RI0l26/wtuv8QGoPS.U3xdwa3y'),
(27, '$2y$12$.ooItD0lzDxDhzP6sJQxzOYRoqUrCgRXSggqF0QCLp8aYwpfEtZeW'),
(28, '$2y$12$gsqsiaeEKN9sadzOGiVi6u5GIfDpdc3QSYGpgDnxHThSZiCiNzDem'),
(29, '$2y$12$dRMoYkcDA98IwkIDZ2TNguWYDqPX3RivsNq2M/9bU0qs3MjVIEKJO'),
(30, '$2y$12$pxyH6GjYmhwaY0XJIoKJvOQPtl6qW2ieDgt4M1s76bQwukAjLlzVS'),
(31, '$2y$12$sKp1rWHHaAkvpw1CH9JI6uC3tmpe.qGu1ecei/cYZT6ARkmCnzob6'),
(32, '$2y$12$wic7jxTXgIV5LZ0YTwINb.mKFs2CLCP94HQ3E45tpGHINYz1dFgaa'),
(33, '$2y$12$McoIwI2Lqt5O9o.syQHfZ.FZtXe0wVVayjFGi95oqWsWmaweGJSIq'),
(34, '$2y$12$fkFoZtIMr0Y0Kt6NJ7F9DurnXENQ80QndvJwYs3Ll4XrPUmI.kj5q'),
(35, '$2y$12$OSPw.ulQwcZKp8Xf6xAFveRXhvlVcms7c3n2reAgo.392yqNA0pna'),
(36, '$2y$12$cV4Lq/C6O1.itqYW5bwt4uYeiRcGvJ3wp02EBRmam1/Rl6CTg5FIC'),
(37, '$2y$12$lFWDKhm02Pm8eCE8AcLjc.xMdLYoFSf6nBho6hccFbt8lRGqsbm2W'),
(38, '$2y$12$5ZtXGbLzU17dgKqCepm4V.sejqS3Da3t48RVyNPIWVQeAb.f9EgAG'),
(39, '$2y$12$VnnS4k3qpkAzuLHIR6jGou.LSA0577/e8KAhtruGFMufpInDIvsxm'),
(40, '$2y$12$AhizqNUWfAWZS18Onk.HhenNWYuwpS53.StmSitJV4JasrHR4vxmO'),
(41, '$2y$12$wsRtu0TIH0PZCKLjQzDDj.pdfdr3tAtZjeKcXaiOXnPvEUOwHrO7i'),
(42, '$2y$12$Vt0GSa8E2YIJHE1shCweq.G1jjaWXQpudT.0zughEbNUZJRDpE062'),
(43, '$2y$12$.1Aee08l/GmTsssOSqAJ0eOGHAybwlJ53NV6t8GVhIpj6H6d/wrUe'),
(44, '$2y$12$8HvslE5Ssdx/kZ9kjJvHDOBSWbD/WFpdbUqF7OUHLWqWRLHSVVOqO'),
(45, '$2y$12$OiA2WWKQGGshHNwLGsC/VOln4R85RUQONZ/tRMo3tlhI8COWW181O'),
(46, '$2y$12$rqRDSrmJBOkVPyCor4rjG.kgTIyQME4WnI5LNXLi7nTtlHF1sD/jS'),
(47, '$2y$12$K942wRRz2mxmJmolMiLKMOJAlxSbaTZJpX0ekUDAuSSDcVL2srHle'),
(48, '$2y$12$wtD0VFyAf36BwVqBBHX61uOfw66rzBiN65dSeHvsl6m2dY37uShVO'),
(49, '$2y$12$rTRt/AfSxwwdww2a.fJCke/V0tV9vGrZgi3d986VfZ5.TGcmjlqBq'),
(50, '$2y$12$H/akL3Dde8X/bPE9NX4m8uqFlkSpL/Reqw7SSo4Pwjr9oI2q.8TKi'),
(51, '$2y$12$1ioeyO1wpxX0ICoHBBQaCulEafSHkUp1Qc.vbga12vdnRFU6eGCx2'),
(52, '$2y$12$4SecCsxSUZ4MMkT9t8GiJOKPkKYvA6r6WyWUv73aNcpfCNVkOfwea'),
(53, '$2y$12$TDtoknKXJg4JuCrO9jNWlOuuzJ/gue3ShVAVefGnltqUCpWV0RATW'),
(54, '$2y$12$FUM0uCzeF2kXSs05auoyxOxjElf6K4k3NKga5.tkesHcAgmqycOIW'),
(55, '$2y$12$GGBl1g3l3bxd8TvqAfqglOQ9CtNCKRVQ9yM/qy/naiP0zr7Gma1Ve'),
(56, '$2y$12$F.4os5.pj4XRyhYV6ZQKZOIRUL57QmIwQDh5YHFrjLsOhSteYXcHC'),
(57, '$2y$12$dHeWpKhkKmphB3YEIWrCUOue6YqeSK.mT1n3RLLz.B8OSwSYIjGkq'),
(58, '$2y$12$TKaPyeF1Z4kET28nbXkfk.IaDTR8CDdMIvnRJAr6eNn2cuaRf45oO'),
(59, '$2y$12$o88uoQbEEfCK/MFTN0h4FOKGjbex3oftaUd3kG10op0qiaaoRY1hO'),
(60, '$2y$12$WX39b3tX4t/D.NhGTyLo0OqpoRIxKxK95v22XiaxyXDADz9SRwSYi'),
(61, '$2y$12$0tfi54jnpR9rWLT.wyvM7Ope64W5nUqO4H6TrjCrJLfXKXCNWcnWa'),
(62, '$2y$12$9lFXkA6046PZxpR6jPBzPuLBnSQ9L37kwsKVeOknKgpI.8yINQUa2'),
(63, '$2y$12$zwYqWMmxLrD/z/kjVZW.xumox.gIuAiv3d28dY0Uo2lUHJHkz7D1a'),
(64, '$2y$12$UJEM3wChiaq6rr8dBla6S.wwiNbe1N2EB2YvZoAY93s05r4R41Ix6'),
(65, '$2y$12$mgh50he0mVpppnwg0fs6tOQOKGdDgYxor5CedxvHjN/p/dr22GRo.'),
(66, '$2y$12$2r1XsQ/l0MGpr89Vdq3btO2eN5VTCz8YdMVmuIxq2k/YnqWEVyD5C'),
(67, '$2y$12$N7yOKYL/RWV9ejz2KPqKaOMd1h/zHDN2Rfqtcr5WnZ2a3waBLoYpC'),
(68, '$2y$12$VerjplVY2eEldN3.5POnS.VqkI0i0/4VR6fsGRaqmJbjvrnxKnokW'),
(69, '$2y$12$yxo2z1YhE.dJ2day.FjIgeC4X7iuk11aKeyeuVeEvRvDrvkMgi8B6'),
(70, '$2y$12$AlohvO2.Q4tRIWiHUthE/OgVnmeXx69HNZwp5jWwGP62pLUtSMVli'),
(71, '$2y$12$sMP3gicTSqyVR7vL8ZROJ.ZZq5yCqydJmH1g5P9mQQkROZqb.yfPa'),
(72, '$2y$12$Dk6lPM.x0SLglqNOsyWoh.YyJrmswMUgPkC/.hyBd3JzveSAryoOW'),
(73, '$2y$12$Lk1UZyr/fNUdR4y.J7huOuBAFoJPfe5Qy99Q6V.1lAzMKVgoSIzmC'),
(74, '$2y$12$OgUAyw0sB9G/Gg3TMf7K0uPhhBmL2NieUHtm1G/HP4JJTny.gMpre'),
(75, '$2y$12$0gdKZq.nx5oXlJluotxGA.gcNIBt1tEaQn71rscYkHmA03TNT8WXS'),
(76, '$2y$12$iFM0K9fe7RvACdFFl7rv5eItDNTlNnnTPHox8CwxGmoT0kevhodRO'),
(77, '$2y$12$qlHWNEQDAbPnX.reGmLvg.CQr.dRpus6vzvvNnopvx35slMXy6KF2'),
(78, '$2y$12$5Fk43JI6KOLy7BVplAmQvuk2blZZleZ.56jnJgLr6UyZ20x3WPAc6'),
(79, '$2y$12$w7F9pwK81LqX1BfKfc4ZiuZTReNmOG3gUbJR/iM7.DjLVrsjkozYO'),
(80, '$2y$12$2EaJ/qVqZcS.ulUEo.0gJOImnFjCQj4BcYtVO23oWPjyIzYr58jZK'),
(81, '$2y$12$NGGkiuf9WWQfc/Tu.84UuOziJeUQzqVHdXjGcPjZWE6zyXFvFyqVW'),
(82, '$2y$12$5KmGZVZIh10SUD0lNkiNj.r4Xx2UM1pKp7Cf0d/Q07qNi3q/TOz8O'),
(83, '$2y$12$p97mMuBV6z64NVTOeAVc2.Yjx/qDbzlnm8vwvluV1KiHV6mY36cUm'),
(84, '$2y$12$EJlnVq8HwwyOH2pZcMmThebLn961pI1HAONEwaS87hBdKVRtyMYi.'),
(85, '$2y$12$KeNKZTAQglg/eRzMYA/tBeGA7FKkICWpbVgoR06vfIWIPAUfiP7Uq'),
(86, '$2y$12$Xx6H6WsIN7raYVTPbC/SlOXo54yr6StlA2cLWMOtYP6i51WS18xZW'),
(87, '$2y$12$cYmLwP08F2BuJgbmTn2K9.gkFv96xpBPW6B1l9Vp3KOWb21UixQxK'),
(88, '$2y$12$tmWrkWZh5yLWJnns7KN1VOSfwne/UG1gV1dSqdi0wS52g0tOShVcq'),
(89, '$2y$12$q.QNYVxBzMNrWHcdCAxjauunqPR4i/Dls8FC7l1/MzNNHArlzpJEC'),
(90, '$2y$12$j7lZNuSat/r8ltE67R7GfeoT4zDRxn6enql4BcddRDQvTiJUpjuoO'),
(91, '$2y$12$bJRwn3oHo8ApXew9fDCwXuoRD.vObNFE/F6uisC5xP8jRdWDrOLKy'),
(92, '$2y$12$y2lrF3Blbz7RUNZmT74kuOdDMlS/fY6ibLwyLKGk.nr3UrE0oq69.'),
(93, '$2y$12$LrHRTZTn0va95KI8LHuqpexjO38iuEqPiQLlAKlyIzyjNSmuMvEhS'),
(94, '$2y$12$xx6ntSIB/DdVPN0OrSXvdus23NnJv9uEkrg7NYSMRAANNt/Mv5i1i'),
(95, '$2y$12$DVyEWS783KON7c34P5HmReK8i3ACA.jx4e2ZshTRy3Yol1kEC04qO'),
(96, '$2y$12$mc3SqXTOyZmbH.qkoH0IIOWF84ouEMVbsvKHsZUt4xfJsCdtRjOmK'),
(97, '$2y$12$74KN37OeWCZrIhrfkxeSEOJiT6e4wa6yV8tqcB.F1bVkL0apVzjYC'),
(98, '$2y$12$534UI8AK9MjBucut7N2m/O6f1H.gf8lAKcfzEPu5w92vZZqysBvGe'),
(99, '$2y$12$Eml6rLHpgZ/OQTCsS/nQAO54YIcpVDDwhmiIL6apb3x4nVuaHfsL.'),
(100, '$2y$12$Rn.81O78IX3jHrbAyAMf1OJ5tx3VvVgWjaeA56k2Fz8fFsa8rfhKq'),
(101, '$2y$12$YJgoG43QaSdzWSIGsylpseMgCfE19FIAng4CWvVksVDTvugv.9znG'),
(102, '$2y$12$/5adqg9sArdohVpzN58Us.4JOzo0/kOoaUz793iY32pz6hl/P2hD2'),
(103, '$2y$12$UsalU3Pb2FpjGrGnTbnP1OW8CfT8i/t5wmNePnielZ3Dgo8WB/lxS'),
(104, '$2y$12$nn3ieKB/M7rRxi.ylyy2suuUjgNttg6Eg9sDZJtSLJ6k3Zs4IEghq'),
(105, '$2y$12$.TayKc4ja.crG/ryu6SVYeOwUDkkqitA8hG4n0nolBCWfy5IUjK/i'),
(106, '$2y$12$vsVaE31Jq5vvDpgr5MC4k.4pk1aLNY2HJ8DLK7PIE6fQtb3TtuyoG'),
(107, '$2y$12$4ippcqBSHaGLOIZLD9ClwuaV4FSGPYYFAlMRYPLxLgynboXEGlQxe'),
(108, '$2y$12$byG/y8wUb28rVzMzX1S7IOe1GsDdZBSIo4tI.nh1iGpmVMhN8NH0G'),
(109, '$2y$12$cvo1D/fXQXcVtxyIULZ3me2UceBAhXLRpFoiBdgNVoA54XMT55wpG'),
(110, '$2y$12$c9IBc//R90XlSqZxJsYQUeOcuHAUbA4hjEYgBTzGHcxLkIimuHoSy'),
(111, '$2y$12$5Z.lq1OiPoB/9obvzIPE7Obu6vIeplzcXK73V4Ye6IlBnaS6OgNpm'),
(112, '$2y$12$C44D93w3QmWZpmlHQbfHMutayvUi/Xm3w1oeXVi0fQZSBcnIvAxCe'),
(113, '$2y$12$NlF87c4jJHV9445SAqKWSeeCiK.AmcIO.uhOzyCwg4iWxN2yij9Wm'),
(114, '$2y$12$VEvT/yCuWBZn7hKiY.Xv3OMj4Kzsr718KfkLBh.S.LJyHnoAb3aCa'),
(115, '$2y$12$R.hGCR38TZYcDEchMVb0Re.RcVappZJr2Wv0b23KzWchlva7Tym9a'),
(116, '$2y$12$8KhQAVSNJbFjhnAhHzH9gunzneIL1f5B43roL3aKtHO0ERWE3Rohi'),
(117, '$2y$12$TTHOlUsO.QT3BxFO/QT2T.1YezLLlbHmSPs3KpbG5d5j.UD.TYKam'),
(118, '$2y$12$vsJyG2Tqi6g/NNyZIWsgs.YCX95yzOnM/DF9dDKShvFdJx6f/h42O'),
(119, '$2y$12$Yx1avc2fQ0jInbtK7lZTC.GVEmJ6D1q/bL0sup7/3LpZQXV2XuW22'),
(120, '$2y$12$gzXwTNJTipO.dgCjusD5Y.Wso7YcxXbk02BxeFDCsscKGY6ri4uay');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario_carrito` (`id_usuario_carrito`),
  ADD KEY `id_producto_carrito` (`id_producto_carrito`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria_producto` (`id_categoria_producto`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario_carrito`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto_carrito`) REFERENCES `productos` (`id_producto`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categorias` (`id_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
