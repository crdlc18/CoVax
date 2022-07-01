CREATE DATABASE  IF NOT EXISTS `covaxdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `covaxdb`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: covaxdb
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sched_t`
--

DROP TABLE IF EXISTS `sched_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sched_t` (
  `schedNo` int NOT NULL AUTO_INCREMENT,
  `nameOfCenter` varchar(50) NOT NULL,
  `timeslot` varchar(10) NOT NULL,
  PRIMARY KEY (`schedNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sched_t`
--

LOCK TABLES `sched_t` WRITE;
/*!40000 ALTER TABLE `sched_t` DISABLE KEYS */;
/*!40000 ALTER TABLE `sched_t` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_ctr`
--

DROP TABLE IF EXISTS `user_ctr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_ctr` (
  `uCtr` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uCtr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_ctr`
--

LOCK TABLES `user_ctr` WRITE;
/*!40000 ALTER TABLE `user_ctr` DISABLE KEYS */;
INSERT INTO `user_ctr` VALUES (1);
/*!40000 ALTER TABLE `user_ctr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_t`
--

DROP TABLE IF EXISTS `user_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_t` (
  `userID` varchar(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `age` int DEFAULT NULL,
  `sex` varchar(7) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `emailAdd` varchar(30) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_t`
--

LOCK TABLES `user_t` WRITE;
/*!40000 ALTER TABLE `user_t` DISABLE KEYS */;
INSERT INTO `user_t` VALUES ('USER001','Cherrylyn','Cardiel','Alejo','2000-11-18',21,'Female','Rosarito, Sampaloc, Manila','09959006390','cardielcherryyy@gmail.com');
/*!40000 ALTER TABLE `user_t` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tg_usert_insert` BEFORE INSERT ON `user_t` FOR EACH ROW BEGIN
		INSERT INTO user_ctr VALUES (NULL);
		SET NEW.userID= CONCAT( 'USER', LPAD(LAST_INSERT_ID(), 3, '0'));
	END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `vax_ctr`
--

DROP TABLE IF EXISTS `vax_ctr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vax_ctr` (
  `vCtr` int unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`vCtr`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vax_ctr`
--

LOCK TABLES `vax_ctr` WRITE;
/*!40000 ALTER TABLE `vax_ctr` DISABLE KEYS */;
INSERT INTO `vax_ctr` VALUES (1),(2),(3),(4),(5);
/*!40000 ALTER TABLE `vax_ctr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vax_t`
--

DROP TABLE IF EXISTS `vax_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vax_t` (
  `vaxID` varchar(10) NOT NULL,
  `vaxName` varchar(30) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`vaxID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vax_t`
--

LOCK TABLES `vax_t` WRITE;
/*!40000 ALTER TABLE `vax_t` DISABLE KEYS */;
INSERT INTO `vax_t` VALUES ('VAX001','Pfizer',24),('VAX002','AztraZeneca',21),('VAX003','Sinovac',9),('VAX004','Sputnik V',4),('VAX005','Moderna',4);
/*!40000 ALTER TABLE `vax_t` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tg_vax_insert` BEFORE INSERT ON `vax_t` FOR EACH ROW BEGIN
		INSERT INTO vax_ctr VALUES (NULL);
		SET NEW.vaxID= CONCAT('VAX', LPAD(LAST_INSERT_ID(), 3, '0'));
	END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `vaxhist_t`
--

DROP TABLE IF EXISTS `vaxhist_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaxhist_t` (
  `histID` int NOT NULL AUTO_INCREMENT,
  `vaxID` varchar(10) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `vaccinationDate` date NOT NULL,
  `vaccinationTime` time NOT NULL,
  `dose` varchar(10) NOT NULL,
  `nextShot` date NOT NULL,
  `healthProfessional` varchar(50) NOT NULL,
  PRIMARY KEY (`histID`),
  KEY `vaxId_fk` (`vaxID`),
  KEY `userID_fk` (`userID`),
  CONSTRAINT `userID_fk` FOREIGN KEY (`userID`) REFERENCES `user_t` (`userID`),
  CONSTRAINT `vaxId_fk` FOREIGN KEY (`vaxID`) REFERENCES `vax_t` (`vaxID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaxhist_t`
--

LOCK TABLES `vaxhist_t` WRITE;
/*!40000 ALTER TABLE `vaxhist_t` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaxhist_t` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'covaxdb'
--

--
-- Dumping routines for database 'covaxdb'
--
/*!50003 DROP PROCEDURE IF EXISTS `updateVax` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateVax`(IN vaxName VARCHAR(30), IN qty INT)
BEGIN
		UPDATE vax_t
        SET quantity =quantity +qty
        WHERE vaxName=vaxName;
		COMMIT;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-01 22:22:55
