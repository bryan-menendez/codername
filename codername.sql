/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - codername
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `contacts` */

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comment` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`name`,`phone`,`comment`) values 
(37,'jueinits','929392831','no  c daaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(39,'adrian el de los dados negros','23872 8237913','gimme money'),
(40,'313','123123','312h'),
(41,'jolelee','293 91239 320','420 go wid'),
(42,'2113','123','12'),
(44,'jueinits','929392831','no  c daaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(46,'313','123123333','312h'),
(48,'jolelee','293 91239 320','420 go wid'),
(51,'adrian el de los dados negros','23872 8237913','gimme money23222'),
(52,'alajahala','29319','ola ola'),
(53,'313','123123','312h'),
(54,'adrian el de los dados negros','23872 8237913','gimme money');

/*Table structure for table `customers` */

CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `active` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`name`,`created_at`,`updated_at`,`email`,`active`) values 
(1,'asd','2020-10-15 15:04:35','2020-10-15 15:04:35','asd@asd.cl',1),
(2,'kjasd','2020-10-15 15:04:46','2020-10-15 15:04:46','sergio.pino@services.lef',0);

/*Table structure for table `dummies` */

CREATE TABLE `dummies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dummies` */

insert  into `dummies`(`id`,`name`,`created_at`,`updated_at`) values 
(9,'suuuuuxxxxx','2020-09-23 00:42:55','2020-09-23 15:04:21'),
(11,'nhgfdgh','2020-09-23 12:52:17','2020-09-23 12:52:17'),
(12,'ghbcv','2020-09-23 13:46:25','2020-09-23 13:46:25'),
(13,'delete','2020-09-23 13:46:32','2020-09-23 13:46:32'),
(14,'fffffffffffffffff','2020-09-23 13:46:41','2020-09-23 13:46:41'),
(15,'i jetison','2020-09-23 15:19:48','2020-09-23 15:33:16'),
(16,'fcgvhb66','2020-09-23 15:24:05','2020-10-08 00:47:23'),
(17,'juantio','2020-09-30 18:10:14','2020-09-30 18:10:14'),
(18,'kkkkkkkkkk','2020-09-30 18:14:22','2020-09-30 18:14:22');

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2020_09_13_063851_create_customers_table',1),
(4,'2020_09_13_201025_add_email_to_customers',1),
(5,'2020_09_14_202724_add_active_to_customers',1),
(6,'2020_09_21_162340_create_dummies_table',1);

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
