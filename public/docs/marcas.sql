-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2020 a las 15:43:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemarentacar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` bigint(20) UNSIGNED NOT NULL,
  `NombreMarca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `NombreMarca`, `created_at`, `updated_at`) VALUES
(1, 'ABARTH', NULL, NULL),
(2, 'ALFA ROMEO', NULL, NULL),
(3, 'ABARTH', NULL, NULL),
(4, 'ALFA ROMEO', NULL, NULL),
(5, 'ALFA ROMEO (FIAT)', NULL, NULL),
(6, 'ASTON MARTIN', NULL, NULL),
(7, 'AUDI', NULL, NULL),
(8, 'BENTLEY', NULL, NULL),
(9, 'BMW', NULL, NULL),
(10, 'BYD', NULL, NULL),
(11, 'CHEVROLET', NULL, NULL),
(12, 'CITROEN', NULL, NULL),
(13, 'DACIA', NULL, NULL),
(14, 'DFSK', NULL, NULL),
(15, 'DS', NULL, NULL),
(16, 'FERRARI', NULL, NULL),
(17, 'FERRARI (FCA)', NULL, NULL),
(18, 'FIAT', NULL, NULL),
(19, 'FIAT (FIAT)', NULL, NULL),
(20, 'FORD', NULL, NULL),
(21, 'HONDA', NULL, NULL),
(22, 'HONDA', NULL, NULL),
(23, 'INFINITI', NULL, NULL),
(24, 'ISUZU', NULL, NULL),
(25, 'JAGUAR', NULL, NULL),
(26, 'JEEP', NULL, NULL),
(27, 'JEEP (FIAT)', NULL, NULL),
(28, 'KIA', NULL, NULL),
(29, 'LADA', NULL, NULL),
(30, 'LAMBORGHINI', NULL, NULL),
(31, 'LANCIA (FIAT)', NULL, NULL),
(32, 'LAND ROVER', NULL, NULL),
(33, 'LEXUS', NULL, NULL),
(34, 'MASERATI', NULL, NULL),
(35, 'MAZDA', NULL, NULL),
(36, 'MERCEDES', NULL, NULL),
(37, 'MINI', NULL, NULL),
(38, 'MITSUBISHI', NULL, NULL),
(39, 'MORGAN', NULL, NULL),
(40, 'NISSAN', NULL, NULL),
(41, 'OPEL', NULL, NULL),
(42, 'OPEL (GM COMPANY)', NULL, NULL),
(43, 'PEUGEOT', NULL, NULL),
(44, 'PORSCHE', NULL, NULL),
(45, 'RENAULT', NULL, NULL),
(46, 'ROLLS-ROYCE', NULL, NULL),
(47, 'SEAT', NULL, NULL),
(48, 'SKODA', NULL, NULL),
(49, 'SMART', NULL, NULL),
(50, 'SSANGYONG', NULL, NULL),
(51, 'SUBARU', NULL, NULL),
(52, 'SUZUKI', NULL, NULL),
(53, 'TATA', NULL, NULL),
(54, 'TESLA', NULL, NULL),
(55, 'TOYOTA', NULL, NULL),
(56, 'VOLKSWAGEN', NULL, NULL),
(57, 'VOLVO', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `marcas_id_marca_unique` (`id_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
