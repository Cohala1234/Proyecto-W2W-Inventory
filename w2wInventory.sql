-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: w2wInventory
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `idCity` int(11) NOT NULL AUTO_INCREMENT,
  `nameCity` varchar(50) DEFAULT NULL,
  `idCoun` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCity`),
  KEY `idCoun` (`idCoun`),
  CONSTRAINT `idCoun` FOREIGN KEY (`idCoun`) REFERENCES `country` (`idCountry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nameClient` varchar(50) DEFAULT NULL,
  `phoneClient` varchar(50) DEFAULT NULL,
  `mailClient` varchar(50) DEFAULT NULL,
  `idTypeC` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idSectorMaster` int(11) DEFAULT NULL,
  `statusClient` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idClient`),
  KEY `idTypeC` (`idTypeC`),
  KEY `idUser` (`idUser`),
  KEY `idSectorMaster` (`idSectorMaster`),
  CONSTRAINT `idSectorMaster` FOREIGN KEY (`idSectorMaster`) REFERENCES `sectormaster` (`idSectorMaster`),
  CONSTRAINT `idTypeC` FOREIGN KEY (`idTypeC`) REFERENCES `typeclient` (`idTypeC`),
  CONSTRAINT `idUser` FOREIGN KEY (`idUser`) REFERENCES `usersystem` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `idCountry` int(11) NOT NULL AUTO_INCREMENT,
  `nameCountry` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCountry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departament`
--

DROP TABLE IF EXISTS `departament`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departament` (
  `idDepartament` int(11) NOT NULL AUTO_INCREMENT,
  `nameDepartament` varchar(50) DEFAULT NULL,
  `City` int(11) DEFAULT NULL,
  `Country` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDepartament`),
  KEY `city` (`City`),
  KEY `country` (`Country`),
  CONSTRAINT `city` FOREIGN KEY (`City`) REFERENCES `city` (`idCity`),
  CONSTRAINT `country` FOREIGN KEY (`Country`) REFERENCES `country` (`idCountry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departament`
--

LOCK TABLES `departament` WRITE;
/*!40000 ALTER TABLE `departament` DISABLE KEYS */;
/*!40000 ALTER TABLE `departament` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formatmaster`
--

DROP TABLE IF EXISTS `formatmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formatmaster` (
  `idFormatMaster` int(11) NOT NULL AUTO_INCREMENT,
  `formatName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idFormatMaster`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formatmaster`
--

LOCK TABLES `formatmaster` WRITE;
/*!40000 ALTER TABLE `formatmaster` DISABLE KEYS */;
/*!40000 ALTER TABLE `formatmaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generalactivity`
--

DROP TABLE IF EXISTS `generalactivity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generalactivity` (
  `idGeneralActivity` int(11) NOT NULL AUTO_INCREMENT,
  `activityName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idGeneralActivity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generalactivity`
--

LOCK TABLES `generalactivity` WRITE;
/*!40000 ALTER TABLE `generalactivity` DISABLE KEYS */;
/*!40000 ALTER TABLE `generalactivity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderactivityresponse`
--

DROP TABLE IF EXISTS `orderactivityresponse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderactivityresponse` (
  `idOrderActivtyResponse` int(11) NOT NULL AUTO_INCREMENT,
  `orderActivityResponse` varchar(50) DEFAULT NULL,
  `idGeneralActivity` int(11) DEFAULT NULL,
  `idResponseActivity` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOrderActivtyResponse`),
  KEY `idGeneralActivity` (`idGeneralActivity`),
  KEY `idResponseActivity` (`idResponseActivity`),
  CONSTRAINT `idGeneralActivity` FOREIGN KEY (`idGeneralActivity`) REFERENCES `generalactivity` (`idGeneralActivity`),
  CONSTRAINT `idResponseActivity` FOREIGN KEY (`idResponseActivity`) REFERENCES `responseactivity` (`idResponseActivity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderactivityresponse`
--

LOCK TABLES `orderactivityresponse` WRITE;
/*!40000 ALTER TABLE `orderactivityresponse` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderactivityresponse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordertype`
--

DROP TABLE IF EXISTS `ordertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordertype` (
  `idOrderType` int(11) NOT NULL AUTO_INCREMENT,
  `orderType` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idOrderType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordertype`
--

LOCK TABLES `ordertype` WRITE;
/*!40000 ALTER TABLE `ordertype` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordertype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `physicaltakepolicies`
--

DROP TABLE IF EXISTS `physicaltakepolicies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `physicaltakepolicies` (
  `idPhysicalTakePolicies` int(11) NOT NULL AUTO_INCREMENT,
  `policieName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPhysicalTakePolicies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `physicaltakepolicies`
--

LOCK TABLES `physicaltakepolicies` WRITE;
/*!40000 ALTER TABLE `physicaltakepolicies` DISABLE KEYS */;
/*!40000 ALTER TABLE `physicaltakepolicies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `idTypeP` int(11) DEFAULT NULL,
  `nameProduct` varchar(100) DEFAULT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `idMeasurement` int(11) DEFAULT NULL,
  `idSectionProduct` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProduct`),
  KEY `idTypeProduct` (`idTypeP`),
  KEY `idMeasurement` (`idMeasurement`),
  CONSTRAINT `idMeasurement` FOREIGN KEY (`idMeasurement`) REFERENCES `unitymeasurement` (`idMeasurement`),
  CONSTRAINT `idTypeProduct` FOREIGN KEY (`idTypeP`) REFERENCES `typeproduct` (`idTypeP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responseactivity`
--

DROP TABLE IF EXISTS `responseactivity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responseactivity` (
  `idResponseActivity` int(11) NOT NULL AUTO_INCREMENT,
  `response` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idResponseActivity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responseactivity`
--

LOCK TABLES `responseactivity` WRITE;
/*!40000 ALTER TABLE `responseactivity` DISABLE KEYS */;
/*!40000 ALTER TABLE `responseactivity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `idSection` int(11) NOT NULL AUTO_INCREMENT,
  `nameSection` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idSection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectionproduct`
--

DROP TABLE IF EXISTS `sectionproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectionproduct` (
  `idSectionProduct` int(11) NOT NULL AUTO_INCREMENT,
  `idSection` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSectionProduct`),
  KEY `idProduct` (`idProduct`),
  KEY `idSection` (`idSection`),
  CONSTRAINT `idProduct` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`),
  CONSTRAINT `idSection` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectionproduct`
--

LOCK TABLES `sectionproduct` WRITE;
/*!40000 ALTER TABLE `sectionproduct` DISABLE KEYS */;
/*!40000 ALTER TABLE `sectionproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectormaster`
--

DROP TABLE IF EXISTS `sectormaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectormaster` (
  `idSectorMaster` int(11) NOT NULL AUTO_INCREMENT,
  `sectorName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idSectorMaster`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectormaster`
--

LOCK TABLES `sectormaster` WRITE;
/*!40000 ALTER TABLE `sectormaster` DISABLE KEYS */;
/*!40000 ALTER TABLE `sectormaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `idSite` int(11) NOT NULL AUTO_INCREMENT,
  `nameSite` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idSite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subclient`
--

DROP TABLE IF EXISTS `subclient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subclient` (
  `idSubClient` int(11) NOT NULL AUTO_INCREMENT,
  `Client` int(11) DEFAULT NULL,
  `idCountry` int(11) DEFAULT NULL,
  `idDepartament` int(11) DEFAULT NULL,
  `idCity` int(11) DEFAULT NULL,
  `idWarehouse` int(11) DEFAULT NULL,
  `statusSubClient` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idSubClient`),
  KEY `Client` (`Client`),
  KEY `warehouse` (`idWarehouse`),
  KEY `idCity` (`idCity`),
  KEY `idDepartament` (`idDepartament`),
  KEY `idCountry` (`idCountry`),
  CONSTRAINT `Client` FOREIGN KEY (`Client`) REFERENCES `client` (`idClient`),
  CONSTRAINT `idCity` FOREIGN KEY (`idCity`) REFERENCES `city` (`idCity`),
  CONSTRAINT `idCountry` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`),
  CONSTRAINT `idDepartament` FOREIGN KEY (`idDepartament`) REFERENCES `departament` (`idDepartament`),
  CONSTRAINT `warehouse` FOREIGN KEY (`idWarehouse`) REFERENCES `warehouse` (`idWarehouse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subclient`
--

LOCK TABLES `subclient` WRITE;
/*!40000 ALTER TABLE `subclient` DISABLE KEYS */;
/*!40000 ALTER TABLE `subclient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeclient`
--

DROP TABLE IF EXISTS `typeclient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typeclient` (
  `idTypeC` int(11) NOT NULL AUTO_INCREMENT,
  `nameTypeC` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTypeC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeclient`
--

LOCK TABLES `typeclient` WRITE;
/*!40000 ALTER TABLE `typeclient` DISABLE KEYS */;
/*!40000 ALTER TABLE `typeclient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeproduct`
--

DROP TABLE IF EXISTS `typeproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typeproduct` (
  `idTypeP` int(11) NOT NULL AUTO_INCREMENT,
  `nameTypeP` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTypeP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeproduct`
--

LOCK TABLES `typeproduct` WRITE;
/*!40000 ALTER TABLE `typeproduct` DISABLE KEYS */;
/*!40000 ALTER TABLE `typeproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeuser`
--

DROP TABLE IF EXISTS `typeuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typeuser` (
  `idTypeUser` int(11) NOT NULL AUTO_INCREMENT,
  `typeUser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTypeUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeuser`
--

LOCK TABLES `typeuser` WRITE;
/*!40000 ALTER TABLE `typeuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `typeuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unitymeasurement`
--

DROP TABLE IF EXISTS `unitymeasurement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unitymeasurement` (
  `idMeasurement` int(11) NOT NULL AUTO_INCREMENT,
  `typeMeasurement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMeasurement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unitymeasurement`
--

LOCK TABLES `unitymeasurement` WRITE;
/*!40000 ALTER TABLE `unitymeasurement` DISABLE KEYS */;
/*!40000 ALTER TABLE `unitymeasurement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usersystem`
--

DROP TABLE IF EXISTS `usersystem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usersystem` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) DEFAULT NULL,
  `userPassword` varchar(20) DEFAULT NULL,
  `idTypeUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `idUserSystem` (`idTypeUser`),
  CONSTRAINT `idUserSystem` FOREIGN KEY (`idTypeUser`) REFERENCES `typeuser` (`idTypeUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersystem`
--

LOCK TABLES `usersystem` WRITE;
/*!40000 ALTER TABLE `usersystem` DISABLE KEYS */;
/*!40000 ALTER TABLE `usersystem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warehouse`
--

DROP TABLE IF EXISTS `warehouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warehouse` (
  `idWarehouse` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) DEFAULT NULL,
  `direction` varchar(100) DEFAULT NULL,
  `idSite` int(11) DEFAULT NULL,
  `idSect` int(11) DEFAULT NULL,
  PRIMARY KEY (`idWarehouse`),
  KEY `idSect` (`idSect`),
  KEY `idSite` (`idSite`),
  KEY `idClient` (`idClient`),
  CONSTRAINT `idClient` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  CONSTRAINT `idSect` FOREIGN KEY (`idSect`) REFERENCES `section` (`idSection`),
  CONSTRAINT `idSite` FOREIGN KEY (`idSite`) REFERENCES `site` (`idSite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warehouse`
--

LOCK TABLES `warehouse` WRITE;
/*!40000 ALTER TABLE `warehouse` DISABLE KEYS */;
/*!40000 ALTER TABLE `warehouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workorder`
--

DROP TABLE IF EXISTS `workorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workorder` (
  `idWorkOrder` int(11) NOT NULL AUTO_INCREMENT,
  `workName` varchar(50) DEFAULT NULL,
  `idOrderType` int(11) DEFAULT NULL,
  PRIMARY KEY (`idWorkOrder`),
  KEY `idOrderType` (`idOrderType`),
  CONSTRAINT `idOrderType` FOREIGN KEY (`idOrderType`) REFERENCES `ordertype` (`idOrderType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workorder`
--

LOCK TABLES `workorder` WRITE;
/*!40000 ALTER TABLE `workorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `workorder` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-14 18:00:11
