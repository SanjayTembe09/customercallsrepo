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

/*Data for the table `businessservice` */

insert  into `businessservice`(`businessserviceId`,`businessserviceName`) values 
('9d9be001-7b05-11ee-9c64-f04da25d1f3d','Restaurant / Hotel');

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

/*Data for the table `clients` */

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

/*Data for the table `customerorder` */

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

/*Data for the table `customers` */

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

/*Data for the table `menuitem` */

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

/*Data for the table `orderitem` */

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

/*Data for the table `owner` */

insert  into `owner`(`ownerId`,`ownerName`,`password`,`ownerContactNumber`,`noOfRestaurants`,`createdAt`) values 
('3f7fe275-8080-11ee-9567-f04da25d1f3d','Meera Gupta',NULL,'5310194964',1,'2023-11-11 16:21:20'),
('73846b45-8080-11ee-9567-f04da25d1f3d','Pooja Reddy',NULL,'4395657550',3,'2023-11-11 16:22:47'),
('93e60574-8080-11ee-9567-f04da25d1f3d','Sonali Choudhury',NULL,'3844163752',4,'2023-11-11 16:23:42'),
('c1b6c6c5-7d47-11ee-91de-f04da25d1f3d','Rohit Shetty',NULL,'2223456789',2,'2023-11-11 16:20:07'),
('c2290403-8080-11ee-9567-f04da25d1f3d','Deepika Roy',NULL,'6806598862',5,'2023-11-11 16:24:59'),
('e6131dfd-8080-11ee-9567-f04da25d1f3d','Tanvi Sharma',NULL,'8167988205',6,'2023-11-11 16:25:59');

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

/*Data for the table `restaurant` */

insert  into `restaurant`(`restaurantId`,`restaurantName`,`ownerId`,`restaurantAddressLine1`,`restaurantAddressLine2`,`pincode`,`restaurantContactNumber`,`alternateContactNumber1`,`alternateContactNumber2`,`alternateContactNumber3`,`createdAt`) values 
('52b66faa-8086-11ee-9567-f04da25d1f3d','Kamat Veg Fast Food','73846b45-8080-11ee-9567-f04da25d1f3d',' BLOCK-1, Railway Station, Shop# 12, MC Jawale Rd, near Dadar, Dadar West','Mumbai, Maharashtra 400028','400028','02224226270',NULL,NULL,NULL,'2023-11-11 17:04:49'),
('66d9d9a0-8083-11ee-9567-f04da25d1f3d','Sadguru Veg Diet','c1b6c6c5-7d47-11ee-91de-f04da25d1f3d','Opp. Muncipal M Ward, Station Road,  Chembur East','Mumbai 400071','400071','02225283755',NULL,NULL,NULL,'2023-11-11 16:43:54'),
('7f716d56-8085-11ee-9567-f04da25d1f3d','Kamat Pure Vegetarian Restaurant','73846b45-8080-11ee-9567-f04da25d1f3d','Shop No. 7/8/9/10, Sayani Road, Kapda Wala Chawl Opposite Prabhadevi Industrial Estate','Mumbai, Maharashtra 400025','400025','02224325925',NULL,NULL,NULL,'2023-11-11 16:58:55'),
('9a7e1116-8082-11ee-9567-f04da25d1f3d','Hotel Navagraha','3f7fe275-8080-11ee-9567-f04da25d1f3d','Opp. Shoppers Stop, Pestom Sagar,  Chembur West','Mumbai 400089','400089','02225243743',NULL,NULL,NULL,'2023-11-11 16:38:12'),
('b32054e5-8086-11ee-9567-f04da25d1f3d','Maharana Kamath','73846b45-8080-11ee-9567-f04da25d1f3d','Chauhan Apartment, VN Purav Marg, Charai, Chemburnaka, Chembur','Mumbai, Maharashtra 400071','400071','02225274003',NULL,NULL,NULL,'2023-11-11 17:07:31'),
('e7163a89-8083-11ee-9567-f04da25d1f3d','Sadguru Veg World','c1b6c6c5-7d47-11ee-91de-f04da25d1f3d','Acharya Shopping Centre, Dr CG Road, Chembur','Mumbai 400071','400071','912225204540',NULL,NULL,NULL,'2023-11-11 16:47:30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
