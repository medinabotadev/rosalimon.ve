-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2021 at 12:50 AM
-- Server version: 8.0.20
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosalimonve`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int NOT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int NOT NULL,
  `id_usuario_carrito` int NOT NULL,
  `id_producto_carrito` int UNSIGNED NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int UNSIGNED NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'Skincare'),
(2, 'Bodycare'),
(3, 'Haircare'),
(4, 'Makeup');

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
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

-- --------------------------------------------------------

--
-- Table structure for table `ordenes`
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

-- --------------------------------------------------------

--
-- Table structure for table `productos`
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
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_producto`, `nombre_producto`, `descripcion_producto`, `precio_producto`, `id_categoria_producto`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `cantidad_inventario`, `editado`) VALUES
(1, 'A1', 'Fragance Mist PINK 75ml.', 'Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)', '6.00', 2, '', '', '', NULL, NULL, NULL, NULL, 1, '2021-04-03 16:59:25'),
(2, 'A2', 'Fragance Mist PINK 250ml.', 'Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)', '12.00', 2, 'A2.1.jpg', '', '', NULL, NULL, NULL, NULL, 2, '2020-10-22 14:23:54'),
(3, 'A3', 'Clean & Clear Deep Action Cream Facial Cleanser, 1 oz', 'Crema limpiadora facial', '3.00', 1, 'A3.1.jpg', '', '', NULL, NULL, NULL, NULL, 1, '2021-04-04 10:39:43'),
(4, 'A4', 'Clean & Clear Alcohol-Free Lemon Juice Facial ', 'Tonico facial hidratante a base de vitamina C y zumo de limon. Regenerativo. Para todo tipo de piel', '12.00', 1, 'A4.1.jpg', '', '', NULL, NULL, NULL, NULL, 5, '2021-04-04 10:40:49'),
(5, 'A5', 'Clean & Clear Lemon Zesty Oil-Free Face Scrub with Vitamin C, 4.2 oz', 'Exfoliante a base de vitamina C y zumo de limon. Remueve la piel muerta. Para todo tipo de piel', '12.00', 1, 'A5.1.jpg', '', '', NULL, NULL, NULL, NULL, 2, '2020-10-22 15:10:52'),
(6, 'A6', 'Clean & Clear Morning Burst Facial Cleanser For Daily Skincare Routines, 1 Fl. Oz.', 'Exfoliante facial de dia. Size Travel', '3.00', 1, 'A6.1.jpg', '', '', NULL, NULL, NULL, NULL, 0, '2020-10-22 14:23:54'),
(7, 'A7', 'Clean & Clear Hydrating Watermelon Daily Gel Face Moisturizer, 1.7 oz', 'Gel Hidratante para todo tipo de piel. Hidrata tu piel profundamente sin dejarla brillante.', '10.00', 1, 'A7.1.jpg', '', '', NULL, NULL, NULL, NULL, 1, '2021-04-03 16:58:32'),
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
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `codigo_usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario_carrito` (`id_usuario_carrito`),
  ADD KEY `id_producto_carrito` (`id_producto_carrito`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria_producto` (`id_categoria_producto`) USING BTREE;

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario_carrito`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto_carrito`) REFERENCES `productos` (`id_producto`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categorias` (`id_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
