CREATE DATABASE IF NOT EXISTS controlvehicular31;
USE controlvehicular31;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlvehicular31`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso_domicilios`
--

CREATE TABLE IF NOT EXISTS `caso_domicilios` (
  `compuesta` varchar(250) NOT NULL,
  `CURP` char(18) NOT NULL,
  `IdDomicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `caso_domicilios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros_verificacion`
--

CREATE TABLE IF NOT EXISTS `centros_verificacion` (
  `IdCentro` int(11) NOT NULL,
  `IdDomicilio` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `centros_verificacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE IF NOT EXISTS `conductores` (
  `IdConductor` int(11) NOT NULL,
  `CURP` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conductores`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE IF NOT EXISTS `domicilios` (
  `IdDomicilio` int(11) NOT NULL,
  `NumInt` varchar(10) DEFAULT NULL,
  `NumExt` varchar(10) DEFAULT NULL,
  `CP` int(11) NOT NULL,
  `Estado` varchar(25) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Calle` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domicilios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE IF NOT EXISTS `licencias` (
  `IdLicencia` varchar(20) NOT NULL,
  `ValidoHasta` date NOT NULL,
  `Antiguedad` int(11) NOT NULL,
  `Restriccion` varchar(50) NOT NULL,
  `NumEmergencia` varchar(15) NOT NULL,
  `DonadorOrganos` tinyint(1) NOT NULL,
  `FechaExp` date DEFAULT NULL,
  `IdConductor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `licencias`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE IF NOT EXISTS `multas` (
  `FolioMultas` bigint(20) NOT NULL,
  `IdPago` int(11) NOT NULL,
  `FolioVerificacion` int(11) NOT NULL,
  `FolioCirculacion` int(11) NOT NULL,
  `IdSerie` int(11) NOT NULL,
  `IdOficial` int(11) NOT NULL,
  `Causa` varchar(200) NOT NULL,
  `Observaciones` varchar(150) DEFAULT NULL,
  `Region` varchar(50) NOT NULL,
  `FechaExp` date NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Descripcion` varchar(300) DEFAULT NULL,
  `Tipo` varchar(20) NOT NULL,
  `FechaHora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `multas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficiales`
--

CREATE TABLE IF NOT EXISTS `oficiales` (
  `id` int(11) NOT NULL,
  `numero_placa` int(11) NOT NULL,
  `curp` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oficiales`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL,
  `transaccion` varchar(20) NOT NULL,
  `folio` int(11) NOT NULL,
  `fechaLimPago` date NOT NULL,
  `Importe` decimal(10,2) NOT NULL,
  `TipoPago` varchar(50) DEFAULT NULL,
  `FechayHora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CodigoBarras` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `CURP` char(18) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoP` varchar(50) NOT NULL,
  `ApellidoM` varchar(50) NOT NULL,
  `FechaNac` date NOT NULL,
  `Sexo` tinyint(1) NOT NULL,
  `Firma` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE IF NOT EXISTS `propietarios` (
  `IdPropietario` int(11) NOT NULL,
  `CURP` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propietarios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas_circulacion`
--

CREATE TABLE IF NOT EXISTS `tarjetas_circulacion` (
  `FolioCirculacion` int(11) NOT NULL,
  `IdPago` int(11) NOT NULL,
  `NumConstancia` varchar(30) DEFAULT NULL,
  `Origen` varchar(20) NOT NULL,
  `CveVehicular` varchar(20) NOT NULL,
  `Tipo` tinyint(4) NOT NULL,
  `Uso` tinyint(4) NOT NULL,
  `RPA` tinyint(4) DEFAULT NULL,
  `Operacion` varchar(100) NOT NULL,
  `PlacaAnt` varchar(8) DEFAULT NULL,
  `OficinaExpendidora` tinyint(4) NOT NULL,
  `Movimiento` varchar(50) NOT NULL,
  `Vigencia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjetas_circulacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas_verificacion`
--

CREATE TABLE IF NOT EXISTS `tarjetas_verificacion` (
  `FolioVerificacion` int(11) NOT NULL,
  `HoraSalida` timestamp NOT NULL DEFAULT current_timestamp(),
  `MotivoVerificacion` varchar(100) NOT NULL,
  `FolioCertificado` bigint(20) DEFAULT NULL,
  `Semestre` tinyint(1) NOT NULL,
  `TipoServicio` varchar(100) DEFAULT NULL,
  `FechaExp` date NOT NULL,
  `HoraEntrada` timestamp NOT NULL DEFAULT current_timestamp(),
  `IdCentro` int(11) NOT NULL,
  `IdSerie` int(11) NOT NULL,
  `IdPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjetas_verificacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `IdSerie` int(11) NOT NULL,
  `FolioCirculacion` int(11) NOT NULL,
  `IdPropietario` int(11) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Ano` char(4) DEFAULT NULL,
  `Clase` varchar(50) DEFAULT NULL,
  `Combustible` varchar(20) DEFAULT NULL,
  `NIV` char(17) NOT NULL,
  `NumCilindros` int(11) DEFAULT NULL,
  `Modelo` varchar(20) DEFAULT NULL,
  `Marca` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caso_domicilios`
--
ALTER TABLE `caso_domicilios`
  ADD PRIMARY KEY (`compuesta`),
  ADD KEY `CURP` (`CURP`),
  ADD KEY `IdDomicilio` (`IdDomicilio`);

--
-- Indices de la tabla `centros_verificacion`
--
ALTER TABLE `centros_verificacion`
  ADD PRIMARY KEY (`IdCentro`),
  ADD KEY `IdDomicilio` (`IdDomicilio`);

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`IdConductor`),
  ADD KEY `CURP` (`CURP`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`IdDomicilio`);

--
-- Indices de la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD PRIMARY KEY (`IdLicencia`),
  ADD KEY `IdConductor` (`IdConductor`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`FolioMultas`),
  ADD KEY `IdPago` (`IdPago`),
  ADD KEY `FolioVerificacion` (`FolioVerificacion`),
  ADD KEY `FolioCirculacion` (`FolioCirculacion`),
  ADD KEY `IdSerie` (`IdSerie`),
  ADD KEY `IdOficial` (`IdOficial`);

--
-- Indices de la tabla `oficiales`
--
ALTER TABLE `oficiales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`CURP`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`IdPropietario`),
  ADD KEY `CURP` (`CURP`);

--
-- Indices de la tabla `tarjetas_circulacion`
--
ALTER TABLE `tarjetas_circulacion`
  ADD PRIMARY KEY (`FolioCirculacion`),
  ADD KEY `IdPago` (`IdPago`);

--
-- Indices de la tabla `tarjetas_verificacion`
--
ALTER TABLE `tarjetas_verificacion`
  ADD PRIMARY KEY (`FolioVerificacion`),
  ADD KEY `IdCentro` (`IdCentro`),
  ADD KEY `IdSerie` (`IdSerie`),
  ADD KEY `IdPago` (`IdPago`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`IdSerie`),
  ADD KEY `FolioCirculacion` (`FolioCirculacion`),
  ADD KEY `IdPropietario` (`IdPropietario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centros_verificacion`
--
ALTER TABLE `centros_verificacion`
  MODIFY `IdCentro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `IdConductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `IdDomicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `oficiales`
--
ALTER TABLE `oficiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `IdPropietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caso_domicilios`
--
ALTER TABLE `caso_domicilios`
  ADD CONSTRAINT `caso_domicilios_ibfk_1` FOREIGN KEY (`CURP`) REFERENCES `personas` (`CURP`),
  ADD CONSTRAINT `caso_domicilios_ibfk_2` FOREIGN KEY (`IdDomicilio`) REFERENCES `domicilios` (`IdDomicilio`);

--
-- Filtros para la tabla `centros_verificacion`
--
ALTER TABLE `centros_verificacion`
  ADD CONSTRAINT `centros_verificacion_ibfk_1` FOREIGN KEY (`IdDomicilio`) REFERENCES `domicilios` (`IdDomicilio`);

--
-- Filtros para la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD CONSTRAINT `conductores_ibfk_1` FOREIGN KEY (`CURP`) REFERENCES `personas` (`CURP`);

--
-- Filtros para la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD CONSTRAINT `licencias_ibfk_1` FOREIGN KEY (`IdConductor`) REFERENCES `conductores` (`IdConductor`),
  ADD CONSTRAINT `licencias_ibfk_2` FOREIGN KEY (`IdConductor`) REFERENCES `conductores` (`IdConductor`);

--
-- Filtros para la tabla `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`IdPago`) REFERENCES `pagos` (`id`),
  ADD CONSTRAINT `multas_ibfk_2` FOREIGN KEY (`FolioVerificacion`) REFERENCES `tarjetas_verificacion` (`FolioVerificacion`),
  ADD CONSTRAINT `multas_ibfk_3` FOREIGN KEY (`FolioCirculacion`) REFERENCES `tarjetas_circulacion` (`FolioCirculacion`),
  ADD CONSTRAINT `multas_ibfk_4` FOREIGN KEY (`IdSerie`) REFERENCES `vehiculos` (`IdSerie`),
  ADD CONSTRAINT `multas_ibfk_5` FOREIGN KEY (`IdOficial`) REFERENCES `oficiales` (`id`);

--
-- Filtros para la tabla `oficiales`
--
ALTER TABLE `oficiales`
  ADD CONSTRAINT `oficiales_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `personas` (`CURP`);

--
-- Filtros para la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD CONSTRAINT `propietarios_ibfk_1` FOREIGN KEY (`CURP`) REFERENCES `personas` (`CURP`);

--
-- Filtros para la tabla `tarjetas_circulacion`
--
ALTER TABLE `tarjetas_circulacion`
  ADD CONSTRAINT `tarjetas_circulacion_ibfk_1` FOREIGN KEY (`IdPago`) REFERENCES `pagos` (`id`);

--
-- Filtros para la tabla `tarjetas_verificacion`
--
ALTER TABLE `tarjetas_verificacion`
  ADD CONSTRAINT `tarjetas_verificacion_ibfk_1` FOREIGN KEY (`IdCentro`) REFERENCES `centros_verificacion` (`IdCentro`),
  ADD CONSTRAINT `tarjetas_verificacion_ibfk_2` FOREIGN KEY (`IdSerie`) REFERENCES `vehiculos` (`IdSerie`),
  ADD CONSTRAINT `tarjetas_verificacion_ibfk_3` FOREIGN KEY (`IdPago`) REFERENCES `pagos` (`id`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`FolioCirculacion`) REFERENCES `tarjetas_circulacion` (`FolioCirculacion`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`IdPropietario`) REFERENCES `propietarios` (`IdPropietario`);

INSERT INTO personas(CURP, Nombre, ApellidoP, ApellidoM, FechaNac, Sexo, Firma)
  SELECT 'FAKE000000HAKEFAK3', 'DUMMY', 'DUMMY', 'DUMMY', '0000-00-00', 0, 'dummy'
  WHERE NOT EXISTS(
    SELECT 1 FROM personas
    WHERE CURP = 'FAKE000000HAKEFAK3'
  );
INSERT INTO domicilios(IdDomicilio, NumInt, NumExt, CP, Estado, Ciudad, Colonia, Calle)
  SELECT 1, '0', '0', '00000', 'DUMMY', 'DUMMY', 'DUMMY', 'DUMMY'
  WHERE NOT EXISTS(
    SELECT 1 FROM domicilios
    WHERE IdDomicilio = 1
  );

INSERT INTO pagos(id, transaccion, folio, fechaLimPago, Importe, TipoPago, FechayHora, CodigoBarras)
  SELECT 1, 'DUMMY', 0, '0000-00-00', '0', 'DUMMY', '2025-01-01 00:00', 'DUMMY'
  WHERE NOT EXISTS(
    SELECT 1 FROM pagos
    WHERE id = 1
  );

INSERT INTO caso_domicilios(compuesta, CURP, IdDomicilio)
  SELECT 'FAKE000000HAKEFAK31', 'FAKE000000HAKEFAK3', 1
  WHERE NOT EXISTS(
    SELECT 1 FROM caso_domicilios
    WHERE compuesta = 'FAKE000000HAKEFAK31'
  );

INSERT INTO oficiales(id, numero_placa, curp)
  SELECT 1, 0, 'FAKE000000HAKEFAK31'
  WHERE NOT EXISTS(
    SELECT 1 FROM oficiales
    WHERE id = 1
  );

INSERT INTO propietarios(IdPropietario, CURP)
  SELECT 1, 'FAKE000000HAKEFAK3'
  WHERE NOT EXISTS(
    SELECT 1 FROM propietarios
    WHERE IdPropietario = 1
  );

INSERT INTO conductores(IdConductor, CURP)
  SELECT 1, 'FAKE000000HAKEFAK3'
  WHERE NOT EXISTS(
    SELECT 1 FROM conductores
    WHERE IdConductor = 1
  );

INSERT INTO licencias(IdLicencia, ValidoHasta, Antiguedad, Restriccion, NumEmergencia, DonadorOrganos, FechaExp, IdConductor)
  SELECT 1, '0000-00-00', 0, 'DUMMY', 'DUMMY', 0, '0000-00-00', 1
  WHERE NOT EXISTS(
    SELECT 1 FROM licencias
    WHERE IdLicencia = 1
  );

INSERT INTO tarjetas_circulacion(FolioCirculacion, IdPago, NumConstancia, Origen, CveVehicular, Tipo, Uso, RPA, Operacion, PlacaAnt, OficinaExpendidora, Movimiento, Vigencia)
  SELECT 1, 1, 'DUMMY', 'DUMMY', 'DUMMY', 0, 0, 0, 'DUMMY', 'DUMMY', 0, 'DUMMY', 'DUMMY'
  WHERE NOT EXISTS(
    SELECT 1 FROM tarjetas_circulacion
    WHERE FolioCirculacion = 1
  );

INSERT INTO `vehiculos` ( `IdSerie`, `FolioCirculacion`, `IdPropietario`, `Color`, `Ano`, `Clase`, `Combustible`, `NIV`, `NumCilindros`, `Modelo`, `Marca`)
  SELECT 1, 1, 1, 'DUMMY', 0, 'DUMMY', 'DUMMY', 'YDUMMYDUMMYDUMMYD', 0, 'DUMMY', 'DUMMY'
  WHERE NOT EXISTS(
    SELECT 1 FROM vehiculos
    WHERE IdSerie = 1
  );
INSERT INTO centros_verificacion(IdCentro, IdDomicilio, Nombre)
  SELECT 1, 1, 'DUMMY'
  WHERE NOT EXISTS(
    SELECT 1 FROM centros_verificacion
    WHERE IdCentro = 1
  );

INSERT INTO tarjetas_verificacion(FolioVerificacion, MotivoVerificacion,  Semestre, FechaExp, IdCentro, IdSerie, IdPago)
  SELECT 1, 'DUMMY', 0, '0000-00-00', 1, 1, 1
  WHERE NOT EXISTS(
    SELECT 1 FROM tarjetas_verificacion
    WHERE FolioVerificacion = 1
  );

INSERT INTO multas(FolioMultas, IdPago, FolioVerificacion, FolioCirculacion, IdSerie, IdOficial, Causa, Region, FechaExp, Estado, Tipo)
  SELECT 1, 1, 1, 1, 1, 1, 'DUMMY', 'DUMMY', '0000-00-00', 'DUMMY', 'DUMMY'
  WHERE NOT EXISTS(
    SELECT 1 FROM multas
    WHERE FolioMultas = 1
  );


COMMIT;
