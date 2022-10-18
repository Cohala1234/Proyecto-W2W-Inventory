-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-10-2022 a las 00:43:54
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
-- Base de datos: `w2wInventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `idCity` int(11) NOT NULL,
  `nameCity` varchar(50) DEFAULT NULL,
  `idCoun` int(11) DEFAULT NULL
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
  `idTypeC` int(11) DEFAULT NULL,
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
  `City` int(11) DEFAULT NULL,
  `Country` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatmaster`
--

CREATE TABLE `formatmaster` (
  `idFormatMaster` int(11) NOT NULL,
  `formatName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generalactivity`
--

CREATE TABLE `generalactivity` (
  `idGeneralActivity` int(11) NOT NULL,
  `activityName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderactivityresponse`
--

CREATE TABLE `orderactivityresponse` (
  `idOrderActivtyResponse` int(11) NOT NULL,
  `orderActivityResponse` varchar(50) DEFAULT NULL,
  `idGeneralActivity` int(11) DEFAULT NULL,
  `idResponseActivity` int(11) DEFAULT NULL,
  `idWorkOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordertype`
--

CREATE TABLE `ordertype` (
  `idOrderType` int(11) NOT NULL,
  `orderType` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `physicaltakepolicies`
--

CREATE TABLE `physicaltakepolicies` (
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
-- Estructura de tabla para la tabla `responseactivity`
--

CREATE TABLE `responseactivity` (
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
-- Estructura de tabla para la tabla `sectionproduct`
--

CREATE TABLE `sectionproduct` (
  `idSectionProduct` int(11) NOT NULL,
  `idSection` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectormaster`
--

CREATE TABLE `sectormaster` (
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
-- Estructura de tabla para la tabla `subclient`
--

CREATE TABLE `subclient` (
  `idSubClient` int(11) NOT NULL,
  `Client` int(11) DEFAULT NULL,
  `idCountry` int(11) DEFAULT NULL,
  `idDepartament` int(11) DEFAULT NULL,
  `idCity` int(11) DEFAULT NULL,
  `idWarehouse` int(11) DEFAULT NULL,
  `statusSubClient` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeclient`
--

CREATE TABLE `typeclient` (
  `idTypeC` int(11) NOT NULL,
  `nameTypeC` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeproduct`
--

CREATE TABLE `typeproduct` (
  `idTypeP` int(11) NOT NULL,
  `nameTypeP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeuser`
--

CREATE TABLE `typeuser` (
  `idTypeUser` int(11) NOT NULL,
  `typeUser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unitymeasurement`
--

CREATE TABLE `unitymeasurement` (
  `idMeasurement` int(11) NOT NULL,
  `typeMeasurement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersystem`
--

CREATE TABLE `usersystem` (
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
  `idSect` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workOrder`
--

CREATE TABLE `workOrder` (
  `idWorkOrder` int(11) NOT NULL,
  `workName` varchar(50) DEFAULT NULL,
  `idOrderType` int(11) DEFAULT NULL,
  `idSubClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`),
  ADD KEY `idCoun` (`idCoun`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`),
  ADD KEY `idTypeC` (`idTypeC`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idSectorMaster` (`idSectorMaster`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`idCountry`);

--
-- Indices de la tabla `departament`
--
ALTER TABLE `departament`
  ADD PRIMARY KEY (`idDepartament`),
  ADD KEY `city` (`City`),
  ADD KEY `country` (`Country`);

--
-- Indices de la tabla `formatmaster`
--
ALTER TABLE `formatmaster`
  ADD PRIMARY KEY (`idFormatMaster`);

--
-- Indices de la tabla `generalactivity`
--
ALTER TABLE `generalactivity`
  ADD PRIMARY KEY (`idGeneralActivity`);

--
-- Indices de la tabla `orderactivityresponse`
--
ALTER TABLE `orderactivityresponse`
  ADD PRIMARY KEY (`idOrderActivtyResponse`),
  ADD KEY `idGeneralActivity` (`idGeneralActivity`),
  ADD KEY `idResponseActivity` (`idResponseActivity`),
  ADD KEY `idWorkOrder` (`idWorkOrder`);

--
-- Indices de la tabla `ordertype`
--
ALTER TABLE `ordertype`
  ADD PRIMARY KEY (`idOrderType`);

--
-- Indices de la tabla `physicaltakepolicies`
--
ALTER TABLE `physicaltakepolicies`
  ADD PRIMARY KEY (`idPhysicalTakePolicies`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `idTypeProduct` (`idTypeP`),
  ADD KEY `idMeasurement` (`idMeasurement`);

--
-- Indices de la tabla `responseactivity`
--
ALTER TABLE `responseactivity`
  ADD PRIMARY KEY (`idResponseActivity`);

--
-- Indices de la tabla `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`idSection`);

--
-- Indices de la tabla `sectionproduct`
--
ALTER TABLE `sectionproduct`
  ADD PRIMARY KEY (`idSectionProduct`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idSection` (`idSection`);

--
-- Indices de la tabla `sectormaster`
--
ALTER TABLE `sectormaster`
  ADD PRIMARY KEY (`idSectorMaster`);

--
-- Indices de la tabla `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`idSite`);

--
-- Indices de la tabla `subclient`
--
ALTER TABLE `subclient`
  ADD PRIMARY KEY (`idSubClient`),
  ADD KEY `Client` (`Client`),
  ADD KEY `warehouse` (`idWarehouse`),
  ADD KEY `idCity` (`idCity`),
  ADD KEY `idDepartament` (`idDepartament`),
  ADD KEY `idCountry` (`idCountry`);

--
-- Indices de la tabla `typeclient`
--
ALTER TABLE `typeclient`
  ADD PRIMARY KEY (`idTypeC`);

--
-- Indices de la tabla `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`idTypeP`);

--
-- Indices de la tabla `typeuser`
--
ALTER TABLE `typeuser`
  ADD PRIMARY KEY (`idTypeUser`);

--
-- Indices de la tabla `unitymeasurement`
--
ALTER TABLE `unitymeasurement`
  ADD PRIMARY KEY (`idMeasurement`);

--
-- Indices de la tabla `usersystem`
--
ALTER TABLE `usersystem`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idUserSystem` (`idTypeUser`);

--
-- Indices de la tabla `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`idWarehouse`),
  ADD KEY `idSect` (`idSect`),
  ADD KEY `idSite` (`idSite`),
  ADD KEY `idClient` (`idClient`);

--
-- Indices de la tabla `workOrder`
--
ALTER TABLE `workOrder`
  ADD PRIMARY KEY (`idWorkOrder`),
  ADD KEY `idOrderType` (`idOrderType`),
  ADD KEY `idSubClient` (`idSubClient`);

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
-- AUTO_INCREMENT de la tabla `formatmaster`
--
ALTER TABLE `formatmaster`
  MODIFY `idFormatMaster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generalactivity`
--
ALTER TABLE `generalactivity`
  MODIFY `idGeneralActivity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orderactivityresponse`
--
ALTER TABLE `orderactivityresponse`
  MODIFY `idOrderActivtyResponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordertype`
--
ALTER TABLE `ordertype`
  MODIFY `idOrderType` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `physicaltakepolicies`
--
ALTER TABLE `physicaltakepolicies`
  MODIFY `idPhysicalTakePolicies` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responseactivity`
--
ALTER TABLE `responseactivity`
  MODIFY `idResponseActivity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `section`
--
ALTER TABLE `section`
  MODIFY `idSection` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sectionproduct`
--
ALTER TABLE `sectionproduct`
  MODIFY `idSectionProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sectormaster`
--
ALTER TABLE `sectormaster`
  MODIFY `idSectorMaster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `site`
--
ALTER TABLE `site`
  MODIFY `idSite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subclient`
--
ALTER TABLE `subclient`
  MODIFY `idSubClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `typeclient`
--
ALTER TABLE `typeclient`
  MODIFY `idTypeC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `typeproduct`
--
ALTER TABLE `typeproduct`
  MODIFY `idTypeP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `typeuser`
--
ALTER TABLE `typeuser`
  MODIFY `idTypeUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unitymeasurement`
--
ALTER TABLE `unitymeasurement`
  MODIFY `idMeasurement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usersystem`
--
ALTER TABLE `usersystem`
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

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `idCoun` FOREIGN KEY (`idCoun`) REFERENCES `country` (`idCountry`);

--
-- Filtros para la tabla `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `idSectorMaster` FOREIGN KEY (`idSectorMaster`) REFERENCES `sectormaster` (`idSectorMaster`),
  ADD CONSTRAINT `idTypeC` FOREIGN KEY (`idTypeC`) REFERENCES `typeclient` (`idTypeC`),
  ADD CONSTRAINT `idUser` FOREIGN KEY (`idUser`) REFERENCES `usersystem` (`idUser`);

--
-- Filtros para la tabla `departament`
--
ALTER TABLE `departament`
  ADD CONSTRAINT `city` FOREIGN KEY (`City`) REFERENCES `city` (`idCity`),
  ADD CONSTRAINT `country` FOREIGN KEY (`Country`) REFERENCES `country` (`idCountry`);

--
-- Filtros para la tabla `orderactivityresponse`
--
ALTER TABLE `orderactivityresponse`
  ADD CONSTRAINT `idGeneralActivity` FOREIGN KEY (`idGeneralActivity`) REFERENCES `generalactivity` (`idGeneralActivity`),
  ADD CONSTRAINT `idResponseActivity` FOREIGN KEY (`idResponseActivity`) REFERENCES `responseactivity` (`idResponseActivity`),
  ADD CONSTRAINT `idWorkOrder` FOREIGN KEY (`idWorkOrder`) REFERENCES `workOrder` (`idWorkOrder`);

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `idMeasurement` FOREIGN KEY (`idMeasurement`) REFERENCES `unitymeasurement` (`idMeasurement`),
  ADD CONSTRAINT `idTypeProduct` FOREIGN KEY (`idTypeP`) REFERENCES `typeproduct` (`idTypeP`);

--
-- Filtros para la tabla `sectionproduct`
--
ALTER TABLE `sectionproduct`
  ADD CONSTRAINT `idProduct` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`),
  ADD CONSTRAINT `idSection` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`);

--
-- Filtros para la tabla `subclient`
--
ALTER TABLE `subclient`
  ADD CONSTRAINT `Client` FOREIGN KEY (`Client`) REFERENCES `client` (`idClient`),
  ADD CONSTRAINT `idCity` FOREIGN KEY (`idCity`) REFERENCES `city` (`idCity`),
  ADD CONSTRAINT `idCountry` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`),
  ADD CONSTRAINT `idDepartament` FOREIGN KEY (`idDepartament`) REFERENCES `departament` (`idDepartament`),
  ADD CONSTRAINT `warehouse` FOREIGN KEY (`idWarehouse`) REFERENCES `warehouse` (`idWarehouse`);

--
-- Filtros para la tabla `usersystem`
--
ALTER TABLE `usersystem`
  ADD CONSTRAINT `idUserSystem` FOREIGN KEY (`idTypeUser`) REFERENCES `typeuser` (`idTypeUser`);

--
-- Filtros para la tabla `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `idClient` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  ADD CONSTRAINT `idSect` FOREIGN KEY (`idSect`) REFERENCES `section` (`idSection`),
  ADD CONSTRAINT `idSite` FOREIGN KEY (`idSite`) REFERENCES `site` (`idSite`);

--
-- Filtros para la tabla `workOrder`
--
ALTER TABLE `workOrder`
  ADD CONSTRAINT `idOrderType` FOREIGN KEY (`idOrderType`) REFERENCES `ordertype` (`idOrderType`),
  ADD CONSTRAINT `idSubClient` FOREIGN KEY (`idSubClient`) REFERENCES `subclient` (`idSubClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
