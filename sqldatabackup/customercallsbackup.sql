/*
SQLyog Community v13.1.6 (64 bit)
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

insert  into `customers`(`customerId`,`customerName`,`customerContactNumber`,`customerAddressLine1`,`customerAddressLine2`,`customerHouseNo`,`customerArea`,`customerCity`,`pincode`,`landmark`,`restaurantId`,`customerFavoriteDish`,`customerRankByFrequency`,`customerRankByOrder`,`createdAt`) values 
('03aef02d-2ea5-4a2a-bb4a-95ad20e5769c','Nihal Reddy','','Khar Road, Mumbai','Mumbai,400052,India','','Khar Road','Mumbai','400052','','e7163a89-8083-11ee-9567-f04da25d1f3d','Kebabs',0,0,'0000-00-00 00:00:00'),
('0a616352-eb0a-4fb5-8248-2d1aa65f0c09','Shaan Malhotra','','Khar Road, Mumbai','Mumbai,400052,India','','Khar Road','Mumbai','400052','','b32054e5-8086-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('0e8cfa3e-ee1b-4e5b-ba44-d4bbba529102','Ayush Choudhury','','Bandra West, Mumbai','Mumbai 400050','','Bandra','Mumbai','400050','','e7163a89-8083-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('147ea44b-2a5b-4d74-a4d8-cc4a4f468684','Rohit Nair','','Chembur East, Mumbai','Mumbai 400071, India','','Chembur East','Mumbai','400071','','52b66faa-8086-11ee-9567-f04da25d1f3d','Kachori',0,0,'0000-00-00 00:00:00'),
('1a52f80b-7ed5-4f09-ba4f-1762f309cd8e','Aisha Gupta','','Borivali, Mumbai','Mumbai,400091,India','','Borivali','Mumbai','400091','','b32054e5-8086-11ee-9567-f04da25d1f3d','Kachori',0,0,'0000-00-00 00:00:00'),
('1bbd383f-ee4b-4c7a-bd19-3a6be4707361','Om Deshmukh','','Dadar, Mumbai ','Mumbai 400028, India','','Dadar','Mumbai','400028','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Idli Sambhar',0,0,'0000-00-00 00:00:00'),
('1e869605-1312-40b2-9b1c-d0664ff9e437','Inaya Kumar','','Chembur East, Mumbai','Mumbai 400071','','Chembur East','Mumbai','400071','','7f716d56-8085-11ee-9567-f04da25d1f3d','Kachori',0,0,'0000-00-00 00:00:00'),
('25c5cf5e-3cb8-4c1d-bbb5-5ecf8d8767bf','Saanvi Agarwal','','Kandivali West, Mumbai','Mumbai 400067','','Kandivali West','Mumbai','400067','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Kebabs',0,0,'0000-00-00 00:00:00'),
('27e6b20f-b12f-4f23-8c1a-ee201ac90ac8','Siya Sharma','','Malad, Mumbai','Mumbai 400064','','Malad','Mumbai','400064','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('2a4e94db-1bb4-4f7b-bc79-28e00d7a24ea','Tanya Kapoor','','Bandra West, Mumbai','Mumbai 400050','','Bandra West','Mumbai','400050','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Kebabs',0,0,'0000-00-00 00:00:00'),
('2bc8edda-1d9e-45f7-b996-e5d242db84c9','Laksh Khanna','','Dadar, Mumbai ','Mumbai 400028','','Dadar','Mumbai','400028','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('2dc6c0ac-82ac-4688-9882-8e319031f10e','Nisha Mehra','','Chembur East, Mumbai','Mumbai 400071, India','','Chembur East','Mumbai','400071','','52b66faa-8086-11ee-9567-f04da25d1f3d','Kathi Roll',0,0,'0000-00-00 00:00:00'),
('2e39839a-5439-4b67-b9a9-2f65e7d9945a','Jiya Kapoor','','Sion, Mumbai','Mumbai 400022','','Sion','Mumbai','400022','','b32054e5-8086-11ee-9567-f04da25d1f3d','Kathi Roll',0,0,'0000-00-00 00:00:00'),
('2f72f0a3-6db0-4d37-b7f3-23d62d7bb36d','Aarav Sharma','','38  Rawji Sojpal Bldg Gokhle Road Nr Portugese Church Dadar , ','Mumbai,400028,India','38','Dadar','Mumbai','400028','','52b66faa-8086-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('40e635bf-93a5-4a6b-9cb2-14756bea9ac3','Gaurav Rao','','Sion, Mumbai','Mumbai 400022','','Sion','Mumbai','400022','','52b66faa-8086-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('45cc1bf3-95fe-4a5f-8ce4-924a58476f37','Anika Desai','','Dombivali, Thane','Thane,421201','','Dombivali','Mumbai','421201','','7f716d56-8085-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('46077bf4-ea05-4a25-8187-16a58a52f0cd','Kavya Gupta','','Chembur West, Mumbai','Mumbai 400089','','Chembur West','Mumbai','400089','','52b66faa-8086-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('4a95efdf-1d95-4f7b-8e93-3ec53f853b68','Aditi Singh','','Bandra Talao, Bandra','Mumbai,400050,India','','Bandra','Mumbai','400050','','7f716d56-8085-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('4d7f5470-d4fb-4e7f-bc62-2402aaeeb694','Rhea Singh','','Khar Road, Mumbai','Mumbai,400052,India','','Khar Road','Mumbai','400052','','e7163a89-8083-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('4e7cda98-6f69-4ef3-8d7d-80c86c90f1e9','Pooja Bhat','','Ghatkopar, Mumbai','Mumbai 400086','','Ghatkopar','Mumbai','400086','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('5d58c890-6aa1-49a5-8e8b-bde5457c7c1a','Divya Kumar','','Kandivali West, Mumbai','Mumbai 400067','','Kandivali West','Mumbai','400067','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Idli Sambhar',0,0,'0000-00-00 00:00:00'),
('63b61f57-5d06-402c-87d5-16fc42ebd120','Arjun Mehta','','Vidyavihar, Mumbai','Mumbai,400077','','Vidyavihar','Mumbai','400077','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('71b37bc0-32b7-41e5-a0c2-55a4001557cf','Eshaan Shah','','Malad, Mumbai','Mumbai 400064','','Malad','Mumbai','400064','','b32054e5-8086-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('7c9b3129-cc04-4f08-81c9-98ac2c29f1bb','Aanya Patel','','Pant Nagar, Ghatkopar','Mumbai,400086,India','','Ghatkopar','Mumbai','400086','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('8121d27b-161e-4f63-8b58-6cb6f17a8d1c','Bhavya Joshi','','Vidyavihar, Mumbai','Mumbai 400077','','Vidyavihar','Mumbai','400077','','52b66faa-8086-11ee-9567-f04da25d1f3d','Kachori',0,0,'0000-00-00 00:00:00'),
('869b03dd-4b2b-4c63-8c25-8c6e5f745791','Amaira Reddy','','Matunga, Mumbai','Mumbai,400019,India','','Matunga','Mumbai','400019','','52b66faa-8086-11ee-9567-f04da25d1f3d','Kathi Roll',0,0,'0000-00-00 00:00:00'),
('8bbf2620-0903-442d-a6e2-2a3df4aeb140','Krish Sharma','','Kandivali West, Mumbai','Mumbai 400067','','Kandivali West','Mumbai','400067','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('8c9a1f1b-7c32-4a20-82d2-3fb52ec0fe12','Siddharth Rawat','','Chembur West, Mumbai','Mumbai 400089','','Chembur West','Mumbai','400089','','52b66faa-8086-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('8e043aef-67ac-4a89-9a5f-5e74a6e173f2','Sameer Yadav','','Matunga, Mumbai','Mumbai,400019,India','','Matunga','Mumbai','400019','','7f716d56-8085-11ee-9567-f04da25d1f3d','Kathi Roll',0,0,'0000-00-00 00:00:00'),
('8fc743b7-6a21-4f07-8b2f-6479d04c0315','Vivaan Gupta','','Borivali, Mumbai','Mumbai,400091,India','','Borivali','Mumbai','400091','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('978ec864-d03d-48a8-b5d1-c243ae7f21fb','Pranav Iyer','','Matunga, Mumbai','Mumbai 400019','','Matunga','Mumbai','400019','','b32054e5-8086-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('995e5e4d-42cb-4e2f-8e85-88c9c6bc3f42','Urvashi Das','','Malad, Mumbai','Mumbai 400064','','Malad','Mumbai','400064','','e7163a89-8083-11ee-9567-f04da25d1f3d','Idli Sambhar',0,0,'0000-00-00 00:00:00'),
('99e5105b-8de4-4e36-aa2b-90bc676c5e44','Dia Sharma','','Malad, Mumbai','Mumbai 400064','','Malad','Mumbai','400064','','7f716d56-8085-11ee-9567-f04da25d1f3d','Kathi Roll',0,0,'0000-00-00 00:00:00'),
('9c6e4df9-5b06-4f7f-9f2b-94f726f47c88','Ishan Singh','','Chembur West, Mumbai','Mumbai 400089','','Chembur West','Mumbai','400089','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Kebabs',0,0,'0000-00-00 00:00:00'),
('a1122f8b-6b08-4010-82ce-baad4648f164','Chirag Malhotra','','Vakola, Santacrutz East, Mumbai','Mumbai 400055','','Vakola, Santacrutz','Mumbai','400055','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Kebabs',0,0,'0000-00-00 00:00:00'),
('a1b0a653-7807-4de5-8a74-163c0b2a3c0e','Yash Sharma','','Goregaon East','Mumbai 400063','','Goregaon East','Mumbai','400063','','7f716d56-8085-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('a3c9c39e-02e2-4a9d-8d7d-124155d8e555','Sania Patel','','Ghatkopar, Mumbai','Mumbai 40086, India','','Ghatkopar','Mumbai','400086','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Idli Sambhar',0,0,'0000-00-00 00:00:00'),
('a57199a1-d0f7-4a84-b75c-49ff88d6febd','Parth Verma','','Kandivali West, Mumbai','Mumbai 400067','','Kandivali West','Mumbai','400067','','7f716d56-8085-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('b3989874-7e4d-4e48-ae6e-c1812b3b1a92','Akash Verma','','Malad, Mumbai','Mumbai,400064,India','','Malad','Mumbai','400064','','e7163a89-8083-11ee-9567-f04da25d1f3d','Kebabs',0,0,'0000-00-00 00:00:00'),
('b60665f3-2e48-4e74-93a0-f3b52c5dd81d','Zara Khurana','','Khar Road, Mumbai','Mumbai 400052','','Khar Road','Mumbai','400052','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('bcfb1d2c-5c36-4f33-9edc-7b3a189590c2','Uday Mehta','','Kandivali West, Mumbai','Mumbai 400067','','Kandivali West','Mumbai','400067','','b32054e5-8086-11ee-9567-f04da25d1f3d','Kathi Roll',0,0,'0000-00-00 00:00:00'),
('c07fb187-dc14-45d4-8a8d-4a6e9e47d58f','Fatima Khan','','Bandra West, Mumbai','Mumbai 400050','','Bandra West','Mumbai','400050','','e7163a89-8083-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('c49d4b36-0812-4c5f-95f7-201bb73159de','Kyra Srinivasan','','Sion, Mumbai','Mumbai 400022','','Sion','Mumbai','400022','','7f716d56-8085-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('d110ff38-958d-427d-8393-7176e6b7115b','Tanish Verma','','Vakola, Santacrutz East, Mumbai','Mumbai 400055','','Vakola, Santacrutz','Mumbai','400055','','7f716d56-8085-11ee-9567-f04da25d1f3d','Kachori',0,0,'0000-00-00 00:00:00'),
('d49f6774-dcda-4648-8569-7e8b5fc51684','Hritik Tiwari','','Borivali, Mumbai','Mumbai 400091','','Borivali','Mumbai','400091','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('e2a3cc11-1f7b-4d50-8ae4-5312a90ac0ec','Vedant Singh','','Goregaon East','Mumbai 400063','','Goregaon East','Mumbai','400063','','52b66faa-8086-11ee-9567-f04da25d1f3d','Chole Bhature',0,0,'0000-00-00 00:00:00'),
('e3c7e72d-bd4b-4aeb-b13c-e5a2ed287932','Advait Kapoor','','Khar Road, Mumbai','Mumbai,400052,India','','Khar Road','Mumbai','400052','','9a7e1116-8082-11ee-9567-f04da25d1f3d','Chole Samosa',0,0,'0000-00-00 00:00:00'),
('f4e5b40a-8254-4d2b-8b9b-2563099c2b0c','Avani Trivedi','','Ghatkopar, Mumbai','Mumbai 400086','','Ghatkopar','Mumbai','400086','','b32054e5-8086-11ee-9567-f04da25d1f3d','Masala Dosa',0,0,'0000-00-00 00:00:00'),
('f6a1e7c1-ee9a-4b45-b4d9-5e1b51017e84','Mira Jain','','Borivali, Mumbai','Mumbai 400091','','Borivali','Mumbai','400091','','b32054e5-8086-11ee-9567-f04da25d1f3d','Kachori',0,0,'0000-00-00 00:00:00'),
('f761464c-c09c-41a3-b2f7-2461e7e09e09','Kabir Patel','','Vakola Santacrutz East, Mumbai','Mumbai 400055','','Vakola, Santacrutz','Mumbai','400055','','e7163a89-8083-11ee-9567-f04da25d1f3d','Idli Sambhar',0,0,'0000-00-00 00:00:00'),
('f97b2c54-65fd-4fb7-9b8d-e12859f1b619','Shreya Bansal','','Dombivali, Thane','Thane,421201','','Dombivali','Mumbai','421201','','e7163a89-8083-11ee-9567-f04da25d1f3d','Pav Bhaji',0,0,'0000-00-00 00:00:00'),
('fa47dd7a-1e6b-4858-a7cb-56e97472e45c','Amrit Das','','Dadar, Mumbai ','Mumbai,400028,India','','Dadar','Mumbai','400028','','66d9d9a0-8083-11ee-9567-f04da25d1f3d','Idli Sambhar',0,0,'0000-00-00 00:00:00');

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
