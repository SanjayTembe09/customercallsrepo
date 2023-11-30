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

insert  into `clients`(`clientId`,`clientName`,`clientContactNumber`,`clientAddressLine1`,`clientAddressLine2`,`clientArea`,`clientCity`,`pincode`,`landmark`,`restaurantId`,`clientTypeId`,`createdAt`,`status`,`PricingPlan`) values 
('7874550b-7b85-11ee-97ed-f04da25d1f3d','Tanjore Tiffin Room','09833399021','12, Union Park, Khar West','Mumbai 400052','Khar West','Mumbai','400052','Union Park','0a9fc17f-7b85-11ee-97ed-f04da25d1f3d','9d9be001-7b05-11ee-9c64-f04da25d1f3d','2023-11-05 08:16:07',NULL,NULL),
('b8b98ca3-7b80-11ee-97ed-f04da25d1f3d','Hotel Navagraha','02225252435','G.M.Road, Chembur(W), Opposite Shoppers Stop','Mumbai 400089','Chembur West','Mumbai','400089','Opp. Shoppers Stop','d433d238-7b81-11ee-97ed-f04da25d1f3d','9d9be001-7b05-11ee-9c64-f04da25d1f3d','2023-11-05 07:42:08',NULL,NULL);

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

insert  into `customers`(`customerId`,`customerName`,`customerContactNumber`,`customerAddressLine1`,`customerAddressLine2`,`customerHouseNo`,`customerArea`,`customerCity`,`pincode`,`landmark`,`restaurantId`,`customerFavoriteDish`,`customerRankByFrequency`,`customerRankByOrder`,`createdAt`) values 
('035c0ad1-7bc1-11ee-991c-f04da25d1f3d','Deepesh Mohile','5678901234','Near Oberoi Business Park, Goregaon East','Mumbai 400063','10','Goregaon East','Mumbai','400063','Near Oberoi Business Park','0a9fc17f-7b85-11ee-97ed-f04da25d1f3d',NULL,NULL,NULL,'2023-11-05 15:22:21'),
('105c40a2-7bbe-11ee-991c-f04da25d1f3d','Madhuri Bane','12345678','Ghodbandar Road, Thane','Thane 400100','20','Thane West','Thane','400100','Near Ghodbandar Road','d433d238-7b81-11ee-97ed-f04da25d1f3d',NULL,NULL,NULL,'2023-11-05 15:01:14'),
('4f393d2b-7bc3-11ee-9a89-f04da25d1f3d','Chetan Temkar','7890123456','06, New Empire, Near Elco Market, Bandra West','Mumbai 400050','06','Bandra West','Mumbai','400050','Near Elco Market','0a9fc17f-7b85-11ee-97ed-f04da25d1f3d',NULL,NULL,NULL,'2023-11-05 15:38:47'),
('6813758d-7b89-11ee-97ed-f04da25d1f3d','Sanjay Tembe','9769457889','18 By 62, Poornima Building, Pestom Sagar Road No. 1, Chembur West','Mumbai 400089','18','Chembur West','Mumbai','400089','Near Shoppers Stop','d433d238-7b81-11ee-97ed-f04da25d1f3d',NULL,NULL,NULL,'2023-11-05 08:44:18'),
('cab8c1b8-7bbe-11ee-991c-f04da25d1f3d','Mitali More','3456789012','Opera House, Mumbai Central','Mumbai 400004','16','Mumbai Central West','Mumbai','400004','Near OPera House','d433d238-7b81-11ee-97ed-f04da25d1f3d',NULL,NULL,NULL,'2023-11-05 15:06:27');

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
  `ownerContactNumber` varchar(255) DEFAULT NULL,
  `restaurantId` varchar(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ownerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `owner` */

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
('0a9fc17f-7b85-11ee-97ed-f04da25d1f3d','Tanjore Tiffin Room',NULL,'12, Union Park, Khar West','Mumbai 400052','400052',' 09833399021',NULL,NULL,NULL,'2023-11-05 08:13:03'),
('d433d238-7b81-11ee-97ed-f04da25d1f3d','Hotel Navagraha',NULL,'G.M.Road, Chembur(W), Opposite Shoppers Stop','Mumbai 400089','400089','02225252435',NULL,NULL,NULL,'2023-11-05 07:50:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
