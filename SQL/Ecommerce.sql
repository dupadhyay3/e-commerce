-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: Ecommerce
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `addId` int(5) NOT NULL AUTO_INCREMENT,
  `custId` int(5) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Zip` int(6) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`addId`),
  KEY `custId` (`custId`),
  CONSTRAINT `address_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customerDetails` (`custId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `aid` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `last_login` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@ecommerce.com','Admin@123','21 Feb, 2018  11:55:03 ');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billAdd`
--

DROP TABLE IF EXISTS `billAdd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billAdd` (
  `billId` int(5) NOT NULL AUTO_INCREMENT,
  `custId` int(5) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Zip` int(6) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`billId`),
  KEY `custId` (`custId`),
  CONSTRAINT `billAdd_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customerDetails` (`custId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billAdd`
--

LOCK TABLES `billAdd` WRITE;
/*!40000 ALTER TABLE `billAdd` DISABLE KEYS */;
/*!40000 ALTER TABLE `billAdd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `cartId` int(5) NOT NULL AUTO_INCREMENT,
  `custId` int(5) DEFAULT NULL,
  `pid` int(5) DEFAULT NULL,
  `Qty` int(5) DEFAULT NULL,
  PRIMARY KEY (`cartId`),
  KEY `custId` (`custId`),
  KEY `pid` (`pid`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customerDetails` (`custId`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `productDetails` (`pId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerDetails`
--

DROP TABLE IF EXISTS `customerDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerDetails` (
  `custId` int(5) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `MobNo` varchar(10) DEFAULT NULL,
  `Gender` enum('M','F') DEFAULT NULL,
  `Pwd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`custId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerDetails`
--

LOCK TABLES `customerDetails` WRITE;
/*!40000 ALTER TABLE `customerDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `customerDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerLogin`
--

DROP TABLE IF EXISTS `customerLogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerLogin` (
  `custId` int(5) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Pwd` varchar(20) DEFAULT NULL,
  KEY `custId` (`custId`),
  CONSTRAINT `customerLogin_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customerDetails` (`custId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerLogin`
--

LOCK TABLES `customerLogin` WRITE;
/*!40000 ALTER TABLE `customerLogin` DISABLE KEYS */;
/*!40000 ALTER TABLE `customerLogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderDetails`
--

DROP TABLE IF EXISTS `orderDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderDetails` (
  `odrId` int(5) NOT NULL AUTO_INCREMENT,
  `custId` int(5) DEFAULT NULL,
  `billId` int(5) DEFAULT NULL,
  `paymentMethodId` int(5) DEFAULT NULL,
  `shipId` int(5) DEFAULT NULL,
  `shipMethodId` int(5) DEFAULT NULL,
  `pId` int(5) DEFAULT NULL,
  `pcsId` int(5) DEFAULT NULL,
  `cartId` int(5) DEFAULT NULL,
  `SubToatl` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`odrId`),
  KEY `custId` (`custId`),
  KEY `billId` (`billId`),
  KEY `paymentMethodId` (`paymentMethodId`),
  KEY `shipId` (`shipId`),
  KEY `shipMethodId` (`shipMethodId`),
  KEY `pId` (`pId`),
  KEY `pcsId` (`pcsId`),
  KEY `cartId` (`cartId`),
  CONSTRAINT `orderDetails_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customerDetails` (`custId`),
  CONSTRAINT `orderDetails_ibfk_2` FOREIGN KEY (`billId`) REFERENCES `billAdd` (`billId`),
  CONSTRAINT `orderDetails_ibfk_3` FOREIGN KEY (`paymentMethodId`) REFERENCES `paymentMethod` (`paymentMethodId`),
  CONSTRAINT `orderDetails_ibfk_4` FOREIGN KEY (`shipId`) REFERENCES `shipAdd` (`shipId`),
  CONSTRAINT `orderDetails_ibfk_5` FOREIGN KEY (`shipMethodId`) REFERENCES `shipMethod` (`shipMethodId`),
  CONSTRAINT `orderDetails_ibfk_6` FOREIGN KEY (`pId`) REFERENCES `productDetails` (`pId`),
  CONSTRAINT `orderDetails_ibfk_7` FOREIGN KEY (`pcsId`) REFERENCES `pCategorySub` (`pcsId`),
  CONSTRAINT `orderDetails_ibfk_8` FOREIGN KEY (`cartId`) REFERENCES `cart` (`cartId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderDetails`
--

LOCK TABLES `orderDetails` WRITE;
/*!40000 ALTER TABLE `orderDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pCategoryMain`
--

DROP TABLE IF EXISTS `pCategoryMain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pCategoryMain` (
  `pcmId` int(5) NOT NULL AUTO_INCREMENT,
  `pcmName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pcmId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pCategoryMain`
--

LOCK TABLES `pCategoryMain` WRITE;
/*!40000 ALTER TABLE `pCategoryMain` DISABLE KEYS */;
/*!40000 ALTER TABLE `pCategoryMain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pCategorySub`
--

DROP TABLE IF EXISTS `pCategorySub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pCategorySub` (
  `pcsId` int(5) NOT NULL AUTO_INCREMENT,
  `pcmId` int(5) DEFAULT NULL,
  `pcsName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pcsId`),
  KEY `pcmId` (`pcmId`),
  CONSTRAINT `pCategorySub_ibfk_1` FOREIGN KEY (`pcmId`) REFERENCES `pCategoryMain` (`pcmId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pCategorySub`
--

LOCK TABLES `pCategorySub` WRITE;
/*!40000 ALTER TABLE `pCategorySub` DISABLE KEYS */;
/*!40000 ALTER TABLE `pCategorySub` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymentMethod`
--

DROP TABLE IF EXISTS `paymentMethod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paymentMethod` (
  `paymentMethodId` int(5) NOT NULL AUTO_INCREMENT,
  `paymentMethodName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`paymentMethodId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentMethod`
--

LOCK TABLES `paymentMethod` WRITE;
/*!40000 ALTER TABLE `paymentMethod` DISABLE KEYS */;
/*!40000 ALTER TABLE `paymentMethod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productDetails`
--

DROP TABLE IF EXISTS `productDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productDetails` (
  `pId` int(5) NOT NULL AUTO_INCREMENT,
  `pName` varchar(20) DEFAULT NULL,
  `pSKU` varchar(20) NOT NULL,
  `pPrice` decimal(8,2) DEFAULT NULL,
  `pcsId` int(5) DEFAULT NULL,
  `pImage` longblob,
  `pStock` enum('In Stock','Out of Stock') DEFAULT NULL,
  PRIMARY KEY (`pId`),
  UNIQUE KEY `pSKU` (`pSKU`),
  KEY `pcsId` (`pcsId`),
  CONSTRAINT `productDetails_ibfk_1` FOREIGN KEY (`pcsId`) REFERENCES `pCategorySub` (`pcsId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productDetails`
--

LOCK TABLES `productDetails` WRITE;
/*!40000 ALTER TABLE `productDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `productDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipAdd`
--

DROP TABLE IF EXISTS `shipAdd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipAdd` (
  `shipId` int(5) NOT NULL AUTO_INCREMENT,
  `custId` int(5) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Zip` int(6) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`shipId`),
  KEY `custId` (`custId`),
  CONSTRAINT `shipAdd_ibfk_1` FOREIGN KEY (`custId`) REFERENCES `customerDetails` (`custId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipAdd`
--

LOCK TABLES `shipAdd` WRITE;
/*!40000 ALTER TABLE `shipAdd` DISABLE KEYS */;
/*!40000 ALTER TABLE `shipAdd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipMethod`
--

DROP TABLE IF EXISTS `shipMethod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipMethod` (
  `shipMethodId` int(5) NOT NULL AUTO_INCREMENT,
  `shipMethodName` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`shipMethodId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipMethod`
--

LOCK TABLES `shipMethod` WRITE;
/*!40000 ALTER TABLE `shipMethod` DISABLE KEYS */;
/*!40000 ALTER TABLE `shipMethod` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-21 12:39:56
