-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-10-2022 a las 05:34:28
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ProyectW2WInventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `idCity` int(11) NOT NULL,
  `nameCity` varchar(50) DEFAULT NULL,
  `idCountry` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nameClient` varchar(50) DEFAULT NULL,
  `phoneClient` varchar(50) DEFAULT NULL,
  `mailClient` varchar(50) DEFAULT NULL,
  `itTypeC` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idSectorMaster` int(11) DEFAULT NULL,
  `statusClient` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `idCountry` int(11) NOT NULL,
  `nameCountry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departament`
--

CREATE TABLE `departament` (
  `idDepartament` int(11) NOT NULL,
  `nameDepartament` varchar(50) DEFAULT NULL,
  `idCity` int(11) DEFAULT NULL,
  `idCountry` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatMaster`
--

CREATE TABLE `formatMaster` (
  `idFormatMaster` int(11) NOT NULL,
  `formatName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generalActivity`
--

CREATE TABLE `generalActivity` (
  `idGeneralActivity` int(11) NOT NULL,
  `activityName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderActivityResponse`
--

CREATE TABLE `orderActivityResponse` (
  `idOrderActivtyResponse` int(11) NOT NULL,
  `orderActivityResponse` varchar(50) DEFAULT NULL,
  `idGeneralActivity` int(11) DEFAULT NULL,
  `idResponseActivity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderType`
--

CREATE TABLE `orderType` (
  `idOrderType` int(11) NOT NULL,
  `orderType` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `physicalTakePolicies`
--

CREATE TABLE `physicalTakePolicies` (
  `idPhysicalTakePolicies` int(11) NOT NULL,
  `policieName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `idTypeP` int(11) DEFAULT NULL,
  `nameProduct` varchar(100) DEFAULT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `idMeasurement` int(11) DEFAULT NULL,
  `idSectionProduct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responseActivity`
--

CREATE TABLE `responseActivity` (
  `idResponseActivity` int(11) NOT NULL,
  `response` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section`
--

CREATE TABLE `section` (
  `idSection` int(11) NOT NULL,
  `nameSection` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectionProduct`
--

CREATE TABLE `sectionProduct` (
  `idSectionProduct` int(11) NOT NULL,
  `idSection` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectorMaster`
--

CREATE TABLE `sectorMaster` (
  `idSectorMaster` int(11) NOT NULL,
  `sectorName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site`
--

CREATE TABLE `site` (
  `idSite` int(11) NOT NULL,
  `nameSite` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subClient`
--

CREATE TABLE `subClient` (
  `idSubClient` int(11) NOT NULL,
  `idClient` int(11) DEFAULT NULL,
  `idCountry` int(11) DEFAULT NULL,
  `idDepartament` int(11) DEFAULT NULL,
  `idCity` int(11) DEFAULT NULL,
  `idWarehouse` int(11) DEFAULT NULL,
  `statusSubClient` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeClient`
--

CREATE TABLE `typeClient` (
  `idTypeC` int(11) NOT NULL,
  `nameTypeC` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeProduct`
--

CREATE TABLE `typeProduct` (
  `idTypeP` int(11) NOT NULL,
  `nameTypeP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeUser`
--

CREATE TABLE `typeUser` (
  `idTypeUser` int(11) NOT NULL,
  `typeUser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unityMeasurement`
--

CREATE TABLE `unityMeasurement` (
  `idMeasurement` int(11) NOT NULL,
  `typeMeasurement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userSystem`
--

CREATE TABLE `userSystem` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userPassword` varchar(20) DEFAULT NULL,
  `idTypeUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warehouse`
--

CREATE TABLE `warehouse` (
  `idWarehouse` int(11) NOT NULL,
  `idClient` int(11) DEFAULT NULL,
  `direction` varchar(100) DEFAULT NULL,
  `idSite` int(11) DEFAULT NULL,
  `idSection` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workOrder`
--

CREATE TABLE `workOrder` (
  `idWorkOrder` int(11) NOT NULL,
  `workName` varchar(50) DEFAULT NULL,
  `idOrderType` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`idCountry`);

--
-- Indices de la tabla `departament`
--
ALTER TABLE `departament`
  ADD PRIMARY KEY (`idDepartament`);

--
-- Indices de la tabla `formatMaster`
--
ALTER TABLE `formatMaster`
  ADD PRIMARY KEY (`idFormatMaster`);

--
-- Indices de la tabla `generalActivity`
--
ALTER TABLE `generalActivity`
  ADD PRIMARY KEY (`idGeneralActivity`);

--
-- Indices de la tabla `orderActivityResponse`
--
ALTER TABLE `orderActivityResponse`
  ADD PRIMARY KEY (`idOrderActivtyResponse`);

--
-- Indices de la tabla `orderType`
--
ALTER TABLE `orderType`
  ADD PRIMARY KEY (`idOrderType`);

--
-- Indices de la tabla `physicalTakePolicies`
--
ALTER TABLE `physicalTakePolicies`
  ADD PRIMARY KEY (`idPhysicalTakePolicies`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indices de la tabla `responseActivity`
--
ALTER TABLE `responseActivity`
  ADD PRIMARY KEY (`idResponseActivity`);

--
-- Indices de la tabla `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`idSection`);

--
-- Indices de la tabla `sectionProduct`
--
ALTER TABLE `sectionProduct`
  ADD PRIMARY KEY (`idSectionProduct`);

--
-- Indices de la tabla `sectorMaster`
--
ALTER TABLE `sectorMaster`
  ADD PRIMARY KEY (`idSectorMaster`);

--
-- Indices de la tabla `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`idSite`);

--
-- Indices de la tabla `subClient`
--
ALTER TABLE `subClient`
  ADD PRIMARY KEY (`idSubClient`);

--
-- Indices de la tabla `typeClient`
--
ALTER TABLE `typeClient`
  ADD PRIMARY KEY (`idTypeC`);

--
-- Indices de la tabla `typeProduct`
--
ALTER TABLE `typeProduct`
  ADD PRIMARY KEY (`idTypeP`);

--
-- Indices de la tabla `typeUser`
--
ALTER TABLE `typeUser`
  ADD PRIMARY KEY (`idTypeUser`);

--
-- Indices de la tabla `unityMeasurement`
--
ALTER TABLE `unityMeasurement`
  ADD PRIMARY KEY (`idMeasurement`);

--
-- Indices de la tabla `userSystem`
--
ALTER TABLE `userSystem`
  ADD PRIMARY KEY (`idUser`);

--
-- Indices de la tabla `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`idWarehouse`);

--
-- Indices de la tabla `workOrder`
--
ALTER TABLE `workOrder`
  ADD PRIMARY KEY (`idWorkOrder`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `idCity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `idCountry` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departament`
--
ALTER TABLE `departament`
  MODIFY `idDepartament` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formatMaster`
--
ALTER TABLE `formatMaster`
  MODIFY `idFormatMaster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generalActivity`
--
ALTER TABLE `generalActivity`
  MODIFY `idGeneralActivity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orderActivityResponse`
--
ALTER TABLE `orderActivityResponse`
  MODIFY `idOrderActivtyResponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orderType`
--
ALTER TABLE `orderType`
  MODIFY `idOrderType` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `physicalTakePolicies`
--
ALTER TABLE `physicalTakePolicies`
  MODIFY `idPhysicalTakePolicies` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responseActivity`
--
ALTER TABLE `responseActivity`
  MODIFY `idResponseActivity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `section`
--
ALTER TABLE `section`
  MODIFY `idSection` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sectionProduct`
--
ALTER TABLE `sectionProduct`
  MODIFY `idSectionProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sectorMaster`
--
ALTER TABLE `sectorMaster`
  MODIFY `idSectorMaster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `site`
--
ALTER TABLE `site`
  MODIFY `idSite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subClient`
--
ALTER TABLE `subClient`
  MODIFY `idSubClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `typeClient`
--
ALTER TABLE `typeClient`
  MODIFY `idTypeC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `typeProduct`
--
ALTER TABLE `typeProduct`
  MODIFY `idTypeP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `typeUser`
--
ALTER TABLE `typeUser`
  MODIFY `idTypeUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unityMeasurement`
--
ALTER TABLE `unityMeasurement`
  MODIFY `idMeasurement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `userSystem`
--
ALTER TABLE `userSystem`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `idWarehouse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `workOrder`
--
ALTER TABLE `workOrder`
  MODIFY `idWorkOrder` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
