-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2023 a las 07:48:16
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_curso` varchar(255) NOT NULL,
  `id_kit` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre_curso`, `id_kit`, `created_at`, `updated_at`) VALUES
(1, 'Characteristics of a Robot', 2, '2023-03-12 11:36:14', '2023-03-12 11:36:14'),
(2, 'Introduction to Robotics', 1, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(3, 'Introduction to Robotics', 3, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(4, 'Programming for Robotics', 3, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(5, 'Programming for Robotics', 1, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(6, 'Introduction to Automation', 2, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(7, 'Characteristics of a Robot', 1, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(8, 'Introduction to Automation', 2, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(9, 'Programming for Robotics', 3, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(10, 'Programming for Robotics', 2, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(11, 'Introduction to Automation', 1, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(12, 'Introduction to Automation', 1, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(13, 'Introduction to Automation', 3, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(14, 'Characteristics of a Robot', 1, '2023-03-12 11:36:15', '2023-03-12 11:36:15'),
(15, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(16, 'Introduction to Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(17, 'Introduction to Automation', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(18, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(19, 'Introduction to Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(20, 'Characteristics of a Robot', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(21, 'Introduction to Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(22, 'Characteristics of a Robot', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(23, 'Characteristics of a Robot', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(24, 'Introduction to Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(25, 'Programming for Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(26, 'Introduction to Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(27, 'Introduction to Automation', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(28, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(29, 'Programming for Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(30, 'Programming for Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(31, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(32, 'Characteristics of a Robot', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(33, 'Characteristics of a Robot', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(34, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(35, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(36, 'Programming for Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(37, 'Programming for Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(38, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(39, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(40, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(41, 'Characteristics of a Robot', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(42, 'Characteristics of a Robot', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(43, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(44, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(45, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(46, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(47, 'Programming for Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(48, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(49, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(50, 'Introduction to Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(51, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(52, 'Characteristics of a Robot', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(53, 'Characteristics of a Robot', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(54, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(55, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(56, 'Introduction to Automation', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(57, 'Programming for Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(58, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(59, 'Programming for Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(60, 'Introduction to Automation', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(61, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(62, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(63, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(64, 'Characteristics of a Robot', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(65, 'Programming for Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(66, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(67, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(68, 'Introduction to Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(69, 'Programming for Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(70, 'Characteristics of a Robot', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(71, 'Characteristics of a Robot', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(72, 'Characteristics of a Robot', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(73, 'Introduction to Automation', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(74, 'Introduction to Automation', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(75, 'Introduction to Robotics', 1, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(76, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(77, 'Programming for Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(78, 'Introduction to Robotics', 3, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(79, 'Introduction to Automation', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(80, 'Programming for Robotics', 2, '2023-03-12 11:36:16', '2023-03-12 11:36:16'),
(81, 'Characteristics of a Robot', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(82, 'Introduction to Robotics', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(83, 'Introduction to Automation', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(84, 'Introduction to Automation', 3, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(85, 'Introduction to Automation', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(86, 'Introduction to Robotics', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(87, 'Programming for Robotics', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(88, 'Characteristics of a Robot', 3, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(89, 'Introduction to Robotics', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(90, 'Introduction to Robotics', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(91, 'Characteristics of a Robot', 3, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(92, 'Characteristics of a Robot', 3, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(93, 'Programming for Robotics', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(94, 'Programming for Robotics', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(95, 'Programming for Robotics', 3, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(96, 'Introduction to Robotics', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(97, 'Introduction to Robotics', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(98, 'Introduction to Robotics', 3, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(99, 'Introduction to Robotics', 1, '2023-03-12 11:36:17', '2023-03-12 11:36:17'),
(100, 'Introduction to Robotics', 2, '2023-03-12 11:36:17', '2023-03-12 11:36:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_132504_create_usuarios_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `rol`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admon', 'Administrativo', 'admon@robotics.com', 'Adm@2022', NULL, NULL),
(2, 'Tecmilenio', 'Profesor', 'tecmilenio@robotics.com', 'Adm@2022', NULL, NULL),
(3, 'Estudiante', 'Estudiante', 'student@robotics.com', 'Adm@2022', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
