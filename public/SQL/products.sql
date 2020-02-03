-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-01-2020 a las 13:14:48
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PruebaLaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `offer`, `sale`, `category`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Remera', 599, '/images/remerahombre1.jpg', 'si', 10, 'hombre', 1, NULL, NULL),
(8, 'Remera', 499, '/images/remerahombre2.jpg', 'no', 10, 'hombre', 1, NULL, NULL),
(9, 'Remera', 649, '/images/remerahombre3.jpg', 'no', 15, 'hombre', 1, NULL, NULL),
(10, 'Remera', 449, '/images/remerahombre4.jpg', 'no', 25, 'hombre', 1, NULL, NULL),
(11, 'Remera', 399, '/images/remerahombre5.jpg', 'no', 15, 'hombre', 1, NULL, NULL),
(12, 'Remera', 499, '/images/remerahombre6.jpg', 'no', 20, 'hombre', 1, NULL, NULL),
(13, 'Remera', 549, '/images/remerahombre7.jpg', 'no', 15, 'hombre', 1, NULL, NULL),
(14, 'Jean', 1499, '/images/jeanhombre1.jpg', 'si', 20, 'hombre', 1, NULL, NULL),
(15, 'Jean', 1399, '/images/jeanhombre2.jpg', 'no', 25, 'hombre', 1, NULL, NULL),
(16, 'Jean', 1499, '/images/jeanhombre3.jpg', 'no', 25, 'hombre', 1, NULL, NULL),
(17, 'Jean', 1699, '/images/jeanhombre4.jpg', 'no', 30, 'hombre', 1, NULL, NULL),
(18, 'Jean', 1199, '/images/jeanhombre5.jpg', 'no', 15, 'hombre', 1, NULL, NULL),
(19, 'Jean', 1249, '/images/jeanhombre6.jpg', 'no', 10, 'hombre', 1, NULL, NULL),
(20, 'Remera', 399, '/images/remeramujer1.jpg', 'si', 15, 'mujer', 1, NULL, NULL),
(21, 'Remera', 449, '/images/remeramujer2.jpg', 'no', 15, 'mujer', 1, NULL, NULL),
(22, 'Remera', 599, '/images/remeramujer3.jpg', 'no', 20, 'mujer', 1, NULL, NULL),
(23, 'Remera', 649, '/images/remeramujer5.jpg', 'no', 20, 'mujer', 1, NULL, NULL),
(24, 'Remera', 449, '/images/remeramujer6.jpg', 'no', 30, 'mujer', 1, NULL, NULL),
(25, 'Remera', 299, '/images/remeramujer7.jpg', 'no', 15, 'mujer', 1, NULL, NULL),
(26, 'Remera', 549, '/images/remeramujer8.jpg', 'no', 25, 'mujer', 1, NULL, NULL),
(27, 'Jean', 1599, '/images/jeanmujer1.jpg', 'si', 15, 'mujer', 1, NULL, NULL),
(28, 'Jean', 1249, '/images/jeanmujer2.jpg', 'no', 15, 'mujer', 1, NULL, NULL),
(29, 'Jean', 1549, '/images/jeanmujer3.jpg', 'si', 25, 'mujer', 1, NULL, NULL),
(30, 'Jean', 1399, '/images/jeanmujer4.jpg', 'no', 15, 'mujer', 1, NULL, NULL),
(31, 'Remera', 349, '/images/remeramujer9.jpg', 'si', 25, 'mujer', 1, NULL, NULL),
(32, 'Jean', 1349, '/images/jeanmujer5.jpg', 'si', 15, 'mujer', 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
