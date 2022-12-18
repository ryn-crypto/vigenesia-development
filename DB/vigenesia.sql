/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - vigenesia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vigenesia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `vigenesia`;

/*Table structure for table `kategori_motivasi` */

DROP TABLE IF EXISTS `kategori_motivasi`;

CREATE TABLE `kategori_motivasi` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori_motivasi` */

/*Table structure for table `keys` */

DROP TABLE IF EXISTS `keys`;

CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `keys` */

insert  into `keys`(`id`,`user_id`,`key`,`level`,`ignore_limits`,`is_private_key`,`ip_addresses`,`date_created`) values 
(1,4,'squadra123',1,0,0,NULL,1),
(7,35,'28OZVP',1,0,0,NULL,2022),
(8,36,'P53ngD',1,0,0,NULL,2022),
(9,28,'8WARLh',1,0,0,NULL,2022);

/*Table structure for table `motivasi` */

DROP TABLE IF EXISTS `motivasi`;

CREATE TABLE `motivasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi_motivasi` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_update` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `motivasi_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `motivasi` */

insert  into `motivasi`(`id`,`isi_motivasi`,`iduser`,`tanggal_input`,`tanggal_update`) values 
(39,'mari semangat dan mengeluh',12,'2022-11-05','2022-11-07'),
(41,'string',10,'2022-11-05','2022-11-05');

/*Table structure for table `report_apk` */

DROP TABLE IF EXISTS `report_apk`;

CREATE TABLE `report_apk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `report_apk` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id`,`role`) values 
(1,'admin'),
(2,'member');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `id` (`iduser`,`nama`,`email`,`password`,`role_id`,`is_active`,`tanggal_input`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`iduser`,`nama`,`profesi`,`email`,`password`,`role_id`,`is_active`,`tanggal_input`,`modified`) values 
(10,'riyan','mahasiswa','riyan@gmail.com','$2y$10$d8Qw2malhkf7VNwIQLykHOW0RQ57PVfxyyl/WgNLmm/cKR.icS.52',1,0,'0000-00-00','2022-11-08'),
(11,'Rose Russell','Pucón','elementum.lorem@google.com','GQX84HPL1PA',1,0,'0000-00-00','0000-00-00'),
(12,'Heather Francis','Vetlanda','feugiat.nec@google.org','PJP02RQE1GH',2,0,'0000-00-00','0000-00-00'),
(13,'Phillip Bishop','Tortel','cras.vulputate@google.org','YDY80YYO6TC',1,0,'0000-00-00','0000-00-00'),
(14,'Ishmael Melendez','Kawerau','ut.sem.nulla@yahoo.net','YDD72FRJ0KG',1,0,'0000-00-00','0000-00-00'),
(15,'Yetta Mcneil','Kherson','eu.odio.tristique@outlook.com','GUC25ERJ4XN',1,0,'0000-00-00','0000-00-00'),
(21,'jono junaedi','mahasiswa','jono@gmail.com','$2y$10$uys8f651JloCRJBhC9rX0OxhXjEUu2PDOi9.5QaxlaRxbzkt5tLga',2,1,'2022-11-08','0000-00-00'),
(22,'jono junaedi','mahasiswa','anggi@gmail.com','$2y$10$d8Qw2malhkf7VNwIQLykHOW0RQ57PVfxyyl/WgNLmm/cKR.icS.52',2,1,'2022-11-08','0000-00-00'),
(24,'ilham','mahasiswa','ilham@gmail.com','$2y$10$NTEjgURdEhkWz.V7hXW1hOARX.EI5HdukkV9GMEK5MU1H1f60muRS',2,1,'2022-11-08','0000-00-00'),
(25,'aryoso bimo','mahasiswa','bimo@gmail.com','$2y$10$sgb0vAF8Rs3RLeEQsCseNOiHlFhDmxVbZT3gPF5TQTb7Ed.gro2Q.',2,1,'2022-11-08','0000-00-00'),
(27,'string','string','string','$2y$10$S97WxargRfOiVift.uD0J.qYGNpq6wVR5/hNncpd0xk9asIPE5iQG',2,1,'2022-12-18','0000-00-00'),
(28,'Riyan First Tiyanto','Mahasiswa','riyandotianto2@gmail.com','$2y$10$iJLkg4ZLFPo7/X8.DIxAROjhTF5t9ii9dnE2049wTG07uxjZu1H7C',2,1,'2022-12-18','0000-00-00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
