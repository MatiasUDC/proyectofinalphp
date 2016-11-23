-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2016 a las 22:02:24
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `color`) VALUES
(2, ' Accesorios para Vehículos', 'accesorios-para-vehiculos', '\r\nAcc. para Motos y Cuatriciclos\r\n\r\n    Alarmas para Motos\r\n    Alforjas y Bolsos\r\n    Baúles y Anclajes\r\n    Cascos\r\n    Defensas\r\n    Fundas Cobertoras\r\n    Indumentaria y Calzado\r\n    Intercomunicadores\r\n    Lingas y Trabas para Motos\r\n    Parabrisas\r\n    Puños y Manillares\r\n    Tableros\r\n    Otros\r\n\r\nAccesorios de Auto y Camioneta\r\n\r\n    Accesorios de Exterior\r\n    Accesorios de Interior\r\n    Otros\r\n\r\nAccesorios Náuticos\r\n\r\n    Accesorios\r\n    Navegadores Náuticos\r\n    Repuestos\r\n    Otros\r\n\r\nAccesorios para Camiones\r\n\r\nAudio\r\n\r\n    Adaptadores y Transmiso...\r\n    Antenas\r\n    Bazookas\r\n    Cables y Conectores\r\n    Capacitores\r\n    Cargadores de CDs y MP3\r\n    Controles Remotos\r\n    Cornetas y Drivers\r\n    Culotes y Frentes\r\n    DVD Players\r\n    Ecualizadores\r\n    Lunetas y Cajas Acústicas\r\n    Parlantes\r\n    Potencias y Amplificadores\r\n    Radios\r\n    Stereos con Cassette\r\n    Stereos con CD\r\n    Stereos con Mp3\r\n    Stereos con USB\r\n    Woofers y SubWoofers\r\n    Otros\r\n\r\nGNC\r\n\r\n    Equipos Completos\r\n    Repuestos\r\n    Otros\r\n\r\nHerramientas\r\n\r\n    Cargadores\r\n    Críquets\r\n    Extractores\r\n    Infladores\r\n    Llaves\r\n    Medidores\r\n    Scanners\r\n    Otras\r\n\r\nLimpieza de Vehículos\r\n\r\n    Aspiradoras\r\n    Ceras\r\n    Desengrasantes\r\n    Lubricantes\r\n    Pads y Paños\r\n    Pulidoras\r\n    Selladores\r\n    Tratamientos\r\n    Otros\r\n\r\nLlantas y Tazas\r\n\r\n    Llantas para Autos\r\n    Llantas para Camiones\r\n    Llantas para Motos\r\n    Tazas\r\n    Otros\r\n\r\nNavegadores GPS para Vehículos\r\n\r\n    Mapas y Accesorios\r\n    Navegadores GPS\r\n    Otros\r\n\r\nNeumáticos\r\n\r\n    Cámaras para Neumáticos\r\n    Cubiertas para Motos\r\n    Neumáticos Autos y Cami...\r\n    Otros\r\n\r\nRepuestos Autos y Camionetas\r\n\r\n    Carrocería\r\n    Cerraduras y Llave', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_07_01_095505_create_categories_table', 1),
('2015_07_01_095519_create_products_table', 1),
('2015_08_23_202538_create_orders_table', 1),
('2015_08_23_202546_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `shipping` decimal(10,2) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `subtotal`, `shipping`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '100.00', '12.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `extract` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `extract`, `price`, `image`, `visible`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Aceite Elaion F50 4lts', 'aceite-elaion-f50-4lts', 'EMPRESA LÍDER EN EL RUBRO DE VENTA DE REPUESTOS UBICADOS EN LA ZONA DE SAN JUSTO. EN LA ZONA DE SAN JUSTO.\r\nCONSULTAR STOCK. ACEPTAMOS TODOS LOS MEDIOS DE PAGO. ', 'Aceite elaion de alta pureza para su vehiculo ', '180.00', 'https://http2.mlstatic.com/aceite-elaion-f50-4lts-D_NQ_NP_877021-MLA20682250462_042016-F.jpg', 1, 2, '2016-11-21 22:44:59', '2016-11-21 22:44:59'),
(4, 'Neumatico 185/60r14', 'neumatico-18560r14', '185/60R14 AR35 ADVANCE	 	\r\n\r\nDiseñado con la exclusiva tecnología Advance para obtener un equilibrado balance de cualidades que aseguran mayor confort y andar confiable y silencioso, brindando al usuario el máximo rendimiento kilométrico.\r\n\r\n• USOS: Pavimento\r\n\r\n• VELOCIDADES: Rango T hasta 190 km/h\r\nRango H hasta 210 km/h\r\nRango V hasta 240 km/h\r\n\r\n\r\n• SERVICIOS Y APLICACIONES: Revise periódicamente la presión de inflado de sus neumáticos y respete los valores indicados por el fabricante del vehículo. La carga máxima por neumático indicada en la tabla que figura a continuación, se alcanza con una presión de 36 psi (2,5 bar). La presión máxima de inflado nunca debe exceder 44 psi (3.0 bar)\r\n\r\n\r\n• GARANTÍAS: Garantía de Fabricación\r\nGarantía gratuita contra roturas accidentales\r\n\r\n• CARACTERISTICAS CONSTRUCTIVAS: Excelente drenaje de agua que evita el aquaplaning\r\nÓptima respuesta al volante y tracción en calzada seca y mojada\r\nRendimiento en todas las temporadas\r\nCalificado como \\"M+S\\" para barro/nieve\r\n\r\n\r\n• INDICES DE CARGA: 82H\r\n\r\n• MEDIDAS: 185/60R14', ' Neumatico 185/60r14 Fate Advance Ar35 ( Corsa, Clio, Gol)', '999.99', 'https://http2.mlstatic.com/neumatico-18560r14-fate-advance-ar35-corsa-clio-gol-D_NQ_NP_16160-MLA20115148772_062014-O.jpg', 1, 2, '2016-11-21 22:48:25', '2016-11-21 22:49:09'),
(5, 'Juego 4 Tazas De Rueda', 'juego-4-tazas-de-rueda', 'JUEGO 4 TAZAS DE RUEDA PEUGEOT 206\r\n\r\n14 PULGADAS FLORIDA\r\n\r\n--', ' Juego 4 Tazas De Rueda Peugeot 206 14 Pulgadas Florida', '580.00', 'https://http2.mlstatic.com/juego-4-tazas-de-rueda-peugeot-206-14-pulgadas-florida-D_NQ_NP_963721-MLA20841022332_072016-O.jpg', 1, 2, '2016-11-21 22:57:19', '2016-11-22 14:37:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `user`, `password`, `type`, `active`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'juan', 'perezz', 'usuario@usuario.com', 'asdg', '$2y$10$AH54dxfT2MCCCqUoPRZ5k.Iu7qetUiSdB6HqFVMeOm/0izFXbkAqu', 'user', 1, 'sd', 'mvkLBJiLIeGi7wgUV2qXM9arVtJIzH7bRsB0CtRbR8HjlwMJjHXpAL0yL3HX', '2016-11-19 16:46:43', '2016-11-21 22:41:25'),
(2, 'juan', 'perez', 'adsaaaasd@asdg.com', 'admin', '$2y$10$zCjYW23QowxnCN.aMpruoegl/5x95yuI.eouyYTJzrN5vIUtwzJBa', 'user', 1, '8', '2HOPVX57sfskOfh3SB5hNipiJJyTC685onHdLWkWrV5Bi5EmB96KSZrf6r40', '2016-11-20 07:56:07', '2016-11-20 07:56:12'),
(3, 'juan', 'asdg', 'admin@admin.com', 'admin1', '$2y$10$AH54dxfT2MCCCqUoPRZ5k.Iu7qetUiSdB6HqFVMeOm/0izFXbkAqu', 'admin', 1, '889', 'cCe6lsLk3Bze993YBPDyPzXK20cLWfm6nE84Z7JB8tRQFRQsapgLemCD1Tjc', '2016-11-20 07:57:41', '2016-11-23 17:51:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_unique` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
