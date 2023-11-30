/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - customercalls
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`customercalls` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `customercalls`;

/*Table structure for table `businessservice` */

DROP TABLE IF EXISTS `businessservice`;

CREATE TABLE `businessservice` (
  `businessserviceId` varchar(255) NOT NULL,
  `businessserviceName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`businessserviceId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `clientId` varchar(255) NOT NULL,
  `clientName` varchar(200) DEFAULT NULL,
  `clientContactNumber` varchar(100) DEFAULT NULL,
  `clientAddressLine1` varchar(255) DEFAULT NULL,
  `clientAddressLine2` varchar(255) DEFAULT NULL,
  `clientArea` varchar(150) DEFAULT NULL,
  `clientCity` varchar(150) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `landmark` varchar(150) DEFAULT NULL,
  `restaurantId` varchar(255) DEFAULT NULL,
  `clientTypeId` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `PricingPlan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `customerorder` */

DROP TABLE IF EXISTS `customerorder`;

CREATE TABLE `customerorder` (
  `customerOrderId` varchar(255) NOT NULL,
  `customerId` varchar(255) DEFAULT NULL,
  `orderId` varchar(255) DEFAULT NULL,
  `orderTotalAmount` float(6,2) DEFAULT NULL,
  `restaurantId` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`customerOrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customerId` varchar(255) NOT NULL,
  `customerName` varchar(200) DEFAULT NULL,
  `customerContactNumber` varchar(100) DEFAULT NULL,
  `customerAddressLine1` varchar(255) DEFAULT NULL,
  `customerAddressLine2` varchar(255) DEFAULT NULL,
  `customerHouseNo` varchar(50) DEFAULT NULL,
  `customerArea` varchar(150) DEFAULT NULL,
  `customerCity` varchar(150) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `landmark` varchar(150) DEFAULT NULL,
  `restaurantId` varchar(255) DEFAULT NULL,
  `customerFavoriteDish` varchar(255) DEFAULT NULL,
  `customerRankByFrequency` int(11) DEFAULT NULL,
  `customerRankByOrder` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `menuitem` */

DROP TABLE IF EXISTS `menuitem`;

CREATE TABLE `menuitem` (
  `menuItemId` varchar(255) NOT NULL,
  `itemId` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemDescription` varchar(255) DEFAULT NULL,
  `itemShortName` varchar(200) DEFAULT NULL,
  `itemCategory` varchar(255) DEFAULT NULL,
  `itemPrice` float(6,2) DEFAULT NULL,
  `restaurantId` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`menuItemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `orderitem` */

DROP TABLE IF EXISTS `orderitem`;

CREATE TABLE `orderitem` (
  `orderItemId` varchar(255) NOT NULL,
  `orderId` varchar(255) DEFAULT NULL,
  `itemId` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemCategory` varchar(255) DEFAULT NULL,
  `itemQuantity` int(11) DEFAULT NULL,
  `itemPrice` float(6,2) DEFAULT NULL,
  `restaurantId` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`orderItemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `owner` */

DROP TABLE IF EXISTS `owner`;

CREATE TABLE `owner` (
  `ownerId` varchar(255) NOT NULL,
  `ownerName` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ownerContactNumber` varchar(255) DEFAULT NULL,
  `noOfRestaurants` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ownerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `restaurant` */

DROP TABLE IF EXISTS `restaurant`;

CREATE TABLE `restaurant` (
  `restaurantId` varchar(255) NOT NULL,
  `restaurantName` varchar(255) DEFAULT NULL,
  `ownerId` varchar(255) DEFAULT NULL,
  `restaurantAddressLine1` varchar(255) DEFAULT NULL,
  `restaurantAddressLine2` varchar(255) DEFAULT NULL,
  `pincode` varchar(25) DEFAULT NULL,
  `restaurantContactNumber` varchar(255) DEFAULT NULL,
  `alternateContactNumber1` varchar(255) DEFAULT NULL,
  `alternateContactNumber2` varchar(255) DEFAULT NULL,
  `alternateContactNumber3` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`restaurantId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
