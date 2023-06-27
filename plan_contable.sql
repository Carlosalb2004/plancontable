-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2023 a las 22:17:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plan_contable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_plancuentas`
--

CREATE TABLE `mae_plancuentas` (
  `idPlanCuentas` int(11) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `Cuenta` int(10) NOT NULL,
  `Cuenta_Padre` int(2) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Digito1` int(1) NOT NULL,
  `Digito2` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_plancuentas`
--

INSERT INTO `mae_plancuentas` (`idPlanCuentas`, `idTipo`, `Cuenta`, `Cuenta_Padre`, `Nombre`, `Digito1`, `Digito2`) VALUES
(1, 1, 1001, 0, 'Activo', 1, 10),
(2, 2, 2001, 0, 'Pasivo', 2, 20),
(3, 3, 3001, 0, 'Patrimonio', 3, 30),
(4, 4, 4001, 0, 'Ingresos', 4, 40),
(5, 5, 5001, 0, 'Gastos', 5, 50),
(6, 6, 6001, 0, 'Costos', 6, 60),
(7, 7, 7001, 0, 'Activo Diferido', 7, 70),
(8, 8, 8001, 0, 'Pasivo Diferido', 8, 80),
(9, 9, 9001, 0, 'Cuentas de Orden', 9, 90),
(10, 10, 10001, 0, 'Resultado', 10, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_tipo`
--

CREATE TABLE `mae_tipo` (
  `idTipo` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_tipo`
--

INSERT INTO `mae_tipo` (`idTipo`, `Descripcion`) VALUES
(1, 'Activo'),
(2, 'Pasivo'),
(3, 'Patrimonio'),
(4, 'Ingresos'),
(5, 'Gastos'),
(6, 'Costos'),
(7, 'Activo Diferido'),
(8, 'Pasivo Diferido'),
(9, 'Cuentas de Orden'),
(10, 'Resultado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mae_usuarios`
--

CREATE TABLE `mae_usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombres` varchar(20) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Edad` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mae_usuarios`
--

INSERT INTO `mae_usuarios` (`idUsuarios`, `Nombres`, `Sexo`, `Edad`, `username`, `password`) VALUES
(1, 'Juan Perez', 'Masculino', 30, 'juan', 'juan'),
(2, 'Maria Gomez', 'Femenino', 25, 'maria', 'maria'),
(3, 'Carlos Rodriguez', 'Masculino', 35, 'carlos', 'carlos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trs_asientodetalle`
--

CREATE TABLE `trs_asientodetalle` (
  `idAsientoDetalle` int(11) NOT NULL,
  `idAsientos` int(11) NOT NULL,
  `idPlanCuentas` int(11) NOT NULL,
  `Debe` decimal(11,2) NOT NULL,
  `Haber` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trs_asientodetalle`
--

INSERT INTO `trs_asientodetalle` (`idAsientoDetalle`, `idAsientos`, `idPlanCuentas`, `Debe`, `Haber`) VALUES
(11, 1, 1, 100.00, 0.00),
(12, 1, 2, 0.00, 100.00),
(13, 2, 3, 50.00, 0.00),
(14, 2, 4, 0.00, 50.00),
(15, 3, 5, 75.00, 0.00),
(16, 3, 6, 0.00, 75.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trs_asientos`
--

CREATE TABLE `trs_asientos` (
  `idAsientos` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `Numero` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Glosa` varchar(50) NOT NULL,
  `Observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trs_asientos`
--

INSERT INTO `trs_asientos` (`idAsientos`, `idUsuarios`, `Numero`, `Fecha`, `Glosa`, `Observaciones`) VALUES
(1, 1, 'A001', '2023-06-25', 'Asiento de prueba', 'Detalles del asiento'),
(2, 2, 'A002', '2023-06-26', 'Asiento de prueba 2', 'Detalles del asiento 2'),
(3, 3, 'A003', '2023-06-27', 'Asiento de prueba 3', 'Detalles del asiento 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mae_plancuentas`
--
ALTER TABLE `mae_plancuentas`
  ADD PRIMARY KEY (`idPlanCuentas`),
  ADD KEY `idTipo` (`idTipo`);

--
-- Indices de la tabla `mae_tipo`
--
ALTER TABLE `mae_tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `mae_usuarios`
--
ALTER TABLE `mae_usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- Indices de la tabla `trs_asientodetalle`
--
ALTER TABLE `trs_asientodetalle`
  ADD PRIMARY KEY (`idAsientoDetalle`),
  ADD KEY `idAsientos` (`idAsientos`),
  ADD KEY `idPlanCuentas` (`idPlanCuentas`);

--
-- Indices de la tabla `trs_asientos`
--
ALTER TABLE `trs_asientos`
  ADD PRIMARY KEY (`idAsientos`),
  ADD KEY `idUsuarios` (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mae_plancuentas`
--
ALTER TABLE `mae_plancuentas`
  MODIFY `idPlanCuentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `mae_tipo`
--
ALTER TABLE `mae_tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `mae_usuarios`
--
ALTER TABLE `mae_usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `trs_asientodetalle`
--
ALTER TABLE `trs_asientodetalle`
  MODIFY `idAsientoDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `trs_asientos`
--
ALTER TABLE `trs_asientos`
  MODIFY `idAsientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mae_plancuentas`
--
ALTER TABLE `mae_plancuentas`
  ADD CONSTRAINT `mae_plancuentas_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `mae_tipo` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trs_asientodetalle`
--
ALTER TABLE `trs_asientodetalle`
  ADD CONSTRAINT `trs_asientodetalle_ibfk_1` FOREIGN KEY (`idAsientos`) REFERENCES `trs_asientos` (`idAsientos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trs_asientodetalle_ibfk_2` FOREIGN KEY (`idPlanCuentas`) REFERENCES `mae_plancuentas` (`idPlanCuentas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trs_asientos`
--
ALTER TABLE `trs_asientos`
  ADD CONSTRAINT `trs_asientos_ibfk_1` FOREIGN KEY (`idUsuarios`) REFERENCES `mae_usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
