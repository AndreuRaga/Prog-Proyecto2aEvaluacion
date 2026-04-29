-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 29-04-2026 a las 20:24:03
-- Versión del servidor: 9.6.0
-- Versión de PHP: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_2a_eval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personajes`
--

CREATE TABLE `Personajes` (
  `id` int NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `vida` int NOT NULL,
  `nivel` int NOT NULL,
  `fuerza` int DEFAULT NULL,
  `arma` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mana` int DEFAULT NULL,
  `elemento` enum('Fuego','Agua','Tierra','Aire') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `clase` enum('Guerrero','Mago') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Personajes`
--

INSERT INTO `Personajes` (`id`, `nombre`, `vida`, `nivel`, `fuerza`, `arma`, `mana`, `elemento`, `clase`) VALUES
(1, 'Hola', 321, 2311, 131, 'fdsafsdfasfa', NULL, NULL, 'Guerrero'),
(2, 'aaaaaaaaaa', 32, 231, 13, 'fg', NULL, NULL, 'Guerrero'),
(4, 'hhh123', 571, 1231, NULL, NULL, 561, 'Fuego', 'Mago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `email`, `password`, `nombre`) VALUES
(5, 'andreurag@gmail.com', '$2y$10$6aSoRZPF6EMXfyVhdRKOHuT3MeFIrRIRQSL8QC.W.9.fEFV0uL.sG', 'Andreu'),
(6, 'a@a.com', '$2y$10$Jtom8incliEpziT8KhSQyOq.IyHB2GjuTF3H2lq.mxsk.hUjaHlOa', 'aaaaaaaaaa'),
(7, 'b@b.com', '$2y$10$08I1oTqNWif8WNjpX3pwse6QBrzdXLvfzYGWbyB.8hx5MPBvwlB0e', 'sasdad'),
(8, 'c@c.com', '$2y$10$KEDq3el7cRfaTJMIp8fKK.3uoMFa0l15wqHokDnv61vXKb8o4b.yG', 'dsadasd'),
(9, 'd@d.com', '$2y$10$XK2S4TsX3orua4PiQyx7WeP5MxgGJL2qMy1B5sUk6gloq5ScROS.m', '432'),
(10, 'v@v.com', '$2y$10$L.C0PsFk5JR1GuXmzWHDiObjzwzUNbgo6FrQEwkdXCe9C2plFVF1q', 'Alerta de Empleo'),
(11, 'e@e.com', '$2y$10$ciFx5sDCAOU59DM..9sgMORU0AQemvvNuSUz2goA9/DrnzCWThVJe', 'Alerta de Empleo'),
(12, 'i@w.com', '$2y$10$Shk3Rx/1YsOqEBYwMslufeyxIo5qhqMLawIHjcA0ynT4baSM7zwgq', 'Alerta de Empleo'),
(13, 'k@k.com', '$2y$10$2jQ1IW30hgAubWYahkT.pOnvrxGabhSV/jKTbI6ozBzVYm5NyD5ee', 'm1'),
(14, 'n@n.com', '$2y$10$kIobPNkDXjvBcNYhxNWApOECs24iN3XbkHLhfwXVaEwk3uu6/nZWq', 'eqweweq'),
(15, 'n@v.com', '$2y$10$aTQBLdIskH/flDaNiJ1QOO.D.AFQkI0paRYx/uGQ8ROZ12cTvJF2G', 'u232');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Personajes`
--
ALTER TABLE `Personajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Personajes`
--
ALTER TABLE `Personajes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
