/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.4.10-MariaDB : Database - productcatalog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`productcatalog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `productcatalog`;

/*Table structure for table `categori` */

DROP TABLE IF EXISTS `categori`;

CREATE TABLE `categori` (
  `id` int(10) NOT NULL,
  `categori` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `categori` */

insert  into `categori`(`id`,`categori`,`created_at`,`updated_at`) values (1,'Baju','2020-10-07 20:41:15','0000-00-00 00:00:00');
insert  into `categori`(`id`,`categori`,`created_at`,`updated_at`) values (2,'Elektronik','2020-10-07 20:41:22','0000-00-00 00:00:00');
insert  into `categori`(`id`,`categori`,`created_at`,`updated_at`) values (3,'Vapor','2020-10-07 20:41:28','0000-00-00 00:00:00');
insert  into `categori`(`id`,`categori`,`created_at`,`updated_at`) values (4,'Celana','2020-10-07 20:41:34','0000-00-00 00:00:00');
insert  into `categori`(`id`,`categori`,`created_at`,`updated_at`) values (5,'Sepatu','2020-10-07 20:41:44','0000-00-00 00:00:00');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`parent_id`,`created_at`,`updated_at`) values (1,'Admin',0,'2020-10-07 11:26:26','2020-10-07 11:26:26');
insert  into `categories`(`id`,`name`,`parent_id`,`created_at`,`updated_at`) values (2,'PP',1,'2020-10-07 11:26:48','2020-10-07 11:26:48');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2014_10_12_100000_create_password_resets_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (3,'2017_01_27_183521_create_categories_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (4,'2020_10_07_182013_add_api_token_field_users',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (5,'2016_06_01_000001_create_oauth_auth_codes_table',3);
insert  into `migrations`(`id`,`migration`,`batch`) values (6,'2016_06_01_000002_create_oauth_access_tokens_table',3);
insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2016_06_01_000003_create_oauth_refresh_tokens_table',3);
insert  into `migrations`(`id`,`migration`,`batch`) values (8,'2016_06_01_000004_create_oauth_clients_table',3);
insert  into `migrations`(`id`,`migration`,`batch`) values (9,'2016_06_01_000005_create_oauth_personal_access_clients_table',3);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('15739224fa181029fa2c6cb5eee52f7bc9191f627132fa6d24015c7694cd075af3ba8e99fc2467d4',NULL,1,'productcatalog','[]',0,'2020-10-08 13:56:30','2020-10-08 13:56:30','2021-10-08 13:56:30');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('1b973a47a46de0481a4a06b5dca9c1acbaf414335426deb74e8c9e3d218cdac444a8bab794086699',NULL,1,'productcatalog','[]',0,'2020-10-08 13:50:56','2020-10-08 13:50:56','2021-10-08 13:50:56');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('7322bd873047801079367825a1a9b787c946b643e5325634980adb040d58dabda9d85be8fc957b25',NULL,1,'productcatalog','[]',0,'2020-10-08 13:46:44','2020-10-08 13:46:44','2021-10-08 13:46:44');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('79178f65b7f5a8ce601196ebfe5980823e99cfef0fe27bd349687e6ed2a831b984ab3cb60ada0934',2,1,'MyApp','[]',0,'2020-10-08 13:14:01','2020-10-08 13:14:01','2021-10-08 13:14:01');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('87e5e2b27f3fa0d359da22370c49c2c17d36a9c4c381d6d2d584fe2765c7126421aa2d741c083696',NULL,1,'productcatalog','[]',0,'2020-10-08 13:53:35','2020-10-08 13:53:35','2021-10-08 13:53:35');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('8e00be913b71d4c3cd7dd2ca9398d158017a3b31f2b0671183d210f38a206aa870af956e4b3ecd0a',2,1,'MyApp','[]',0,'2020-10-08 11:42:25','2020-10-08 11:42:25','2021-10-08 11:42:25');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('9aae9797a6c84b88e2bc7f25a7cef96108c2973d14ff2015fa6c69781c8db92d1b45038d8506fbc0',NULL,1,'productcatalog','[]',0,'2020-10-08 13:44:43','2020-10-08 13:44:43','2021-10-08 13:44:43');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('aee884fdf3a686965298cf08813d023b57549329c01280966410b3319001ad01850964e6d848abe2',2,1,'MyApp','[]',0,'2020-10-08 10:37:44','2020-10-08 10:37:44','2021-10-08 10:37:44');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('b7f3f009eef2ffaa22146b60d4b4d30302bebc095a00edd6b2d172009b61dd79e9a45ad07ac89c6d',NULL,1,'productcatalog','[]',0,'2020-10-08 13:43:35','2020-10-08 13:43:35','2021-10-08 13:43:35');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('c1442c881f6fde025ffb821cf51893d523829b9568937ba29fdd11cf977f77a0b69cfe8dbf624843',2,1,'MyApp','[]',0,'2020-10-08 11:43:28','2020-10-08 11:43:28','2021-10-08 11:43:28');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('c7fd022c72090b8f77dbe1001533734524bd4f7b763032b56a915b66dc290f09130fb64600cfa6cb',NULL,1,'productcatalog','[]',0,'2020-10-08 13:45:47','2020-10-08 13:45:47','2021-10-08 13:45:47');
insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('ecdd75ef70c5cae2a483507c742f99a928e6fc898d048e467b2ef69ceeae63efea65088af2eeb469',2,1,'MyApp','[]',0,'2020-10-08 10:37:44','2020-10-08 10:37:44','2021-10-08 10:37:44');

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values (1,NULL,'Laravel 5.5 Personal Access Client','GEiWCuWBqRNxdXb7Jafj06w30c4YksXkqsvrgXE7','http://localhost',1,0,0,'2020-10-08 09:29:30','2020-10-08 09:29:30');
insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values (2,NULL,'Laravel 5.5 Password Grant Client','lFqHMiZ815vYYivyy90QeXI2luPAT04qLwFkwegq','http://localhost',0,1,0,'2020-10-08 09:29:31','2020-10-08 09:29:31');

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

insert  into `oauth_personal_access_clients`(`id`,`client_id`,`created_at`,`updated_at`) values (1,1,'2020-10-08 09:29:31','2020-10-08 09:29:31');

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) NOT NULL,
  `id_categori` int(10) NOT NULL,
  `flag` enum('1','0') DEFAULT '0',
  `pic_product` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_product`),
  KEY `FK_product` (`created_by`),
  KEY `FK_product_kategori` (`id_categori`),
  CONSTRAINT `FK_product` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_product_kategori` FOREIGN KEY (`id_categori`) REFERENCES `categori` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `product` */

insert  into `product`(`id_product`,`name_product`,`id_categori`,`flag`,`pic_product`,`price`,`created_by`,`created_at`,`updated_at`) values (1,'Vape',3,'0',NULL,'800000',2,'2020-10-08 13:30:34','2020-10-08 07:30:34');
insert  into `product`(`id_product`,`name_product`,`id_categori`,`flag`,`pic_product`,`price`,`created_by`,`created_at`,`updated_at`) values (2,'Kaos T',1,'0',NULL,'150000',2,'2020-10-07 16:39:49','2020-10-07 16:39:49');
insert  into `product`(`id_product`,`name_product`,`id_categori`,`flag`,`pic_product`,`price`,`created_by`,`created_at`,`updated_at`) values (3,'CC',1,'0','img/UCScreenshot20181226123730.png','100000',2,'2020-10-09 01:10:40','2020-10-09 01:10:40');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`id`,`role_name`,`created_at`,`updated_at`) values (1,'Superadmin','2020-10-07 17:32:47','0000-00-00 00:00:00');
insert  into `roles`(`id`,`role_name`,`created_at`,`updated_at`) values (2,'Admin','2020-10-07 17:32:59','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) NOT NULL DEFAULT 0,
  `active` int(11) NOT NULL DEFAULT 0,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`role`,`active`,`avatar`,`remember_token`,`created_at`,`updated_at`,`api_token`) values (1,'Admin','admin@gmail.com','$2y$10$mwinsscdheVZ7y0w7hlpAualPnVkTgLZhT1W5PCAHbqK33AwGUztu',5,1,NULL,NULL,'2020-10-07 11:23:17','2020-10-07 11:23:17',NULL);
insert  into `users`(`id`,`name`,`email`,`password`,`role`,`active`,`avatar`,`remember_token`,`created_at`,`updated_at`,`api_token`) values (2,'Admin2','admin2@gmail.com','$2y$10$mwinsscdheVZ7y0w7hlpAualPnVkTgLZhT1W5PCAHbqK33AwGUztu',4,1,NULL,'n2YNPOIkTgypmYg5Py9eBAGJuRmqAtLryHLqgkiwAq7y6gs2mjlgBoGSBDmi','2020-10-07 11:42:08','2020-10-07 11:42:20','eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5MTc4ZjY1YjdmNWE4Y2U2MDExOTZlYmZlNTk4MDgyM2U5OWNmZWYwZmUyN2JkMzQ5Njg3ZTZlZDJhODMxYjk4NGFiM2NiNjBhZGEwOTM0In0.eyJhdWQiOiIxIiwianRpIjoiNzkxNzhmNjViN2Y1YThjZTYwMTE5NmViZmU1OTgwODIzZTk5Y2ZlZjBmZTI3YmQzNDk2ODdlNmV');
insert  into `users`(`id`,`name`,`email`,`password`,`role`,`active`,`avatar`,`remember_token`,`created_at`,`updated_at`,`api_token`) values (7,'user','user@gmail.com','$2y$10$mwinsscdheVZ7y0w7hlpAualPnVkTgLZhT1W5PCAHbqK33AwGUztu',0,1,NULL,'Ox2gWzmGdQz3tIP60hJ7DxJtDKi1ylNLFCOgJjd0Lytk7FJL2ukQIIWczJKz','2020-10-08 14:34:17','2020-10-08 14:34:17',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
