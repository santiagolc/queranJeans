-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-01-2020 a las 07:28:34
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `queranje_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product`
--

CREATE TABLE `cart_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_31_114856_create_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('juan@juan.com', '$2y$10$b9DuL6EwkMVYT85bw9uIau6pRx8q1zgLFW7mlptDh7zD9.rGm3m7i', '2020-01-27 17:42:15'),
('diedemiguel@gmail.com', '$2y$10$RBuH1YWXwXItqAAJpzoQHuWVbgWzJcT0fxKPOz4zXTqXPwYV5DLB6', '2020-01-27 22:56:09');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `offer`, `sale`, `category`, `created_at`, `updated_at`) VALUES
(7, 'Remera', 599, '/images/remerahombre1.jpg', 'si', 10, 'hombre', NULL, NULL),
(8, 'Remera', 499, '/images/remerahombre2.jpg', 'no', 10, 'hombre', NULL, NULL),
(9, 'Remera', 649, '/images/remerahombre3.jpg', 'no', 15, 'hombre', NULL, NULL),
(10, 'Remera', 449, '/images/remerahombre4.jpg', 'no', 25, 'hombre', NULL, NULL),
(11, 'Remera', 399, '/images/remerahombre5.jpg', 'no', 15, 'hombre', NULL, NULL),
(12, 'Remera', 499, '/images/remerahombre6.jpg', 'no', 20, 'hombre', NULL, NULL),
(13, 'Remera', 549, '/images/remerahombre7.jpg', 'no', 15, 'hombre', NULL, NULL),
(14, 'Jean', 1499, '/images/jeanhombre1.jpg', 'si', 20, 'hombre', NULL, NULL),
(15, 'Jean', 1399, '/images/jeanhombre2.jpg', 'no', 25, 'hombre', NULL, NULL),
(16, 'Jean', 1499, '/images/jeanhombre3.jpg', 'no', 25, 'hombre', NULL, NULL),
(17, 'Jean', 1699, '/images/jeanhombre4.jpg', 'no', 30, 'hombre', NULL, NULL),
(18, 'Jean', 1199, '/images/jeanhombre5.jpg', 'no', 15, 'hombre', NULL, NULL),
(19, 'Jean', 1249, '/images/jeanhombre6.jpg', 'si', 10, 'hombre', NULL, NULL),
(20, 'Remera', 399, '/images/remeramujer1.jpg', 'si', 15, 'mujer', NULL, NULL),
(21, 'Remera', 449, '/images/remeramujer2.jpg', 'no', 15, 'mujer', NULL, NULL),
(22, 'Remera', 599, '/images/remeramujer3.jpg', 'no', 20, 'mujer', NULL, NULL),
(23, 'Remera', 649, '/images/remeramujer5.jpg', 'no', 20, 'mujer', NULL, NULL),
(24, 'Remera', 449, '/images/remeramujer6.jpg', 'no', 30, 'mujer', NULL, NULL),
(25, 'Remera', 299, '/images/remeramujer7.jpg', 'no', 15, 'mujer', NULL, NULL),
(26, 'Remera', 549, '/images/remeramujer8.jpg', 'no', 25, 'mujer', NULL, NULL),
(27, 'Jean', 1599, '/images/jeanmujer1.jpg', 'si', 15, 'mujer', NULL, NULL),
(28, 'Jean', 1249, '/images/jeanmujer2.jpg', 'no', 15, 'mujer', NULL, NULL),
(29, 'Jean', 1549, '/images/jeanmujer3.jpg', 'si', 25, 'mujer', NULL, NULL),
(30, 'Jean', 1399, '/images/jeanmujer4.jpg', 'no', 15, 'mujer', NULL, NULL),
(31, 'Remera', 349, '/images/remeramujer9.jpg', 'si', 25, 'mujer', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `province` int(30) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `province`, `password`, `avatar`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'Santiago', 'Luna Carena', 'santiagolunacarena@gmail.com', NULL, NULL, '$2y$10$j4yYo0bQfgKaqgGXgmWiH.6eApq0/yBUapAP5vFWfoX0nq5YDE6cu', 'avatars/foto3.png', '0', NULL, '2020-01-28 12:13:15', '2020-01-28 12:13:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `surname` (`surname`(191)),
  ADD KEY `id_3` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
