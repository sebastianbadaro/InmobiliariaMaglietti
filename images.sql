-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: InmobiliariaMaglietti
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Casa',NULL),(2,'Departamento',NULL),(3,'Campo',NULL),(4,'Galpon',NULL),(5,'Oficina',NULL),(6,'Terreno',NULL),(7,'Local Comercial',NULL),(8,'Terreno lote',NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency`
--

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` VALUES (1,'AR$','Peso Argentino',NULL),(2,'US$','EEUU Dolar',NULL);
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `displayOrder` int(10) unsigned NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `creationDate` varchar(45) DEFAULT NULL,
  `modificationDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,1,'Is this a family business?','Yes. This is a family run commpany.',NULL,NULL),(2,2,'Question 2','Answer 2',NULL,NULL),(3,3,'Question 3','Answer 3',NULL,NULL),(4,4,'Question 4','Answer 4',NULL,NULL),(5,5,'Question 5','Answer 5',NULL,NULL),(6,6,'Question 6','Answer 6',NULL,NULL),(7,7,'Question 7','Answer 7',NULL,'');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productImages`
--

DROP TABLE IF EXISTS `productImages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productImages` (
  `idImage` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`idImage`,`idProduct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productImages`
--

LOCK TABLES `productImages` WRITE;
/*!40000 ALTER TABLE `productImages` DISABLE KEYS */;
INSERT INTO `productImages` VALUES (1,1,'1-1.jpg','Frente','Casa estilo frances','2018-08-07'),(1,2,'2-1.jpeg','Frente','frente','2018-08-07'),(1,3,'3-1.jpeg','Frente','frente','2018-08-07'),(1,4,'4-1.jpeg','Frente','frente','2018-08-07'),(1,5,'5-1.jpeg','Frente','frente','2018-08-07'),(1,6,'6-1.jpeg','Frente','frente','2018-08-07'),(1,7,'7-1.jpeg','Frente','frente','2018-08-07'),(1,8,'8-1.jpeg','Frente','frente','2018-08-07'),(1,9,'9-1.jpeg','Frente','frente','2018-08-07'),(1,10,'10-1.jpeg','Frente','frente','2018-08-07'),(1,11,'11-1.jpeg','Frente','frente','2018-08-07'),(1,12,'12-1.jpeg','Frente','frente','2018-08-07'),(2,1,'1-2.jpeg','Baño','Muy amplio y luminoso','2018-08-07');
/*!40000 ALTER TABLE `productImages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `product_view`
--

DROP TABLE IF EXISTS `product_view`;
/*!50001 DROP VIEW IF EXISTS `product_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `product_view` AS SELECT 
 1 AS `id`,
 1 AS `title`,
 1 AS `typeId`,
 1 AS `type`,
 1 AS `numberOfRooms`,
 1 AS `numberOfBathrooms`,
 1 AS `numberOfParkingSpaces`,
 1 AS `totalSurface`,
 1 AS `coveredSurface`,
 1 AS `address`,
 1 AS `city`,
 1 AS `currency`,
 1 AS `value`,
 1 AS `description`,
 1 AS `creationDate`,
 1 AS `category`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `type` int(10) unsigned NOT NULL,
  `numberOfRooms` int(10) unsigned NOT NULL,
  `numberOfBathrooms` int(10) unsigned NOT NULL,
  `numberOfParkingSpaces` int(10) unsigned NOT NULL,
  `totalSurface` float unsigned NOT NULL,
  `coveredSurface` float unsigned NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` int(10) unsigned NOT NULL,
  `currency` int(10) unsigned NOT NULL,
  `value` float NOT NULL,
  `description` varchar(200) NOT NULL,
  `creationDate` datetime DEFAULT NULL,
  `category` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Test producto',1,2,1,1,250,200,'Av. Pueyrredon 1389 3B',1,1,123123,'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ',NULL,3),(2,'Test producto 1',2,2,1,1,250,200,'Aguero 234',1,1,123123,'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ',NULL,2),(3,'Test producto 2',3,2,1,1,250,200,'Juncal 333',1,1,123123,'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ',NULL,1),(4,'Test producto 3',1,2,1,1,250,200,'Moreno 65',1,1,123123,'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ',NULL,1),(5,'Test Producto 4',2,2,1,1,250,200,'Av Libertado 1113',1,1,123123,'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ',NULL,3),(6,'Test producto 5',3,2,1,1,250,200,' Viamonte 923',1,1,123123,'Test description Test description Test description Test description Test description Test description Test description Test description Test description Test description ',NULL,2),(7,'test 6',2,1,1,1,100,100,'Florida 334',1,1,65823,'testttttttttttttttttttttttt',NULL,1),(8,'test 6',1,1,1,1,100,100,'Florida 334',1,1,65823,'testttttttttttttttttttttttt',NULL,1),(9,'test 6',2,1,1,1,100,100,'Florida 334',1,1,65823,'testttttttttttttttttttttttt',NULL,1),(10,'test 6',1,1,1,1,100,100,'Florida 334',1,1,65823,'testttttttttttttttttttttttt',NULL,1),(11,'test 6',1,1,1,1,100,100,'Florida 334',1,1,65823,'testttttttttttttttttttttttt',NULL,1),(12,'test 6',2,1,1,1,100,100,'Florida 334',1,1,65823,'testttttttttttttttttttttttt',NULL,1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `dateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Alquiler','2018-10-04'),(2,'Venta','2010-10-04'),(3,'Loteo','2010-10-04');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `rol` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','tesy','email@email.com','11111',1),(2,'asd','asd','asdasd@gmail.com','$2y$10$CzULXuTFg8mAoxNnZZ7rYunFkiLpfyYSW0av4.XCCdrsNYizlV7S.',1),(3,'qqq','qqq','qqq@qqq.com','$2y$10$x3ga6G0AQd5LK/q5hZWOJOyGsBlB6WGkKyfUHIAvcCZzcJwH9KRmm',1),(4,'Seba','Badaro','seba@inmobiliaria.com','$2y$10$FIGFbcQvTCClB1UmbueoiOdwYgONbYq4pSLAwMU0sVT2lcEa4ZT5q',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `product_view`
--

/*!50001 DROP VIEW IF EXISTS `product_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `product_view` AS select `products`.`id` AS `id`,`products`.`title` AS `title`,`products`.`type` AS `typeId`,`types`.`description` AS `type`,`products`.`numberOfRooms` AS `numberOfRooms`,`products`.`numberOfBathrooms` AS `numberOfBathrooms`,`products`.`numberOfParkingSpaces` AS `numberOfParkingSpaces`,`products`.`totalSurface` AS `totalSurface`,`products`.`coveredSurface` AS `coveredSurface`,`products`.`address` AS `address`,`products`.`city` AS `city`,`currency`.`symbol` AS `currency`,`products`.`value` AS `value`,`products`.`description` AS `description`,`products`.`creationDate` AS `creationDate`,`category`.`name` AS `category` from (((`products` join `types` on((`products`.`type` = `types`.`id`))) join `currency` on((`products`.`currency` = `currency`.`id`))) join `category` on((`products`.`category` = `category`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-14  8:20:24
