/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - vape
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vape` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `vape`;

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banners` */

insert  into `banners`(`id`,`title`,`image`,`subscription`,`text`,`created_at`,`updated_at`) values 
(1,'My Best Vape Shop','banner-1.png','How many shops in the world?','I love this vape shop best!',NULL,'2019-11-29 15:15:52'),
(2,'Always My Favorites','banner-2.png','I want this one, but where and when?','We are always here to serve you anytime',NULL,'2019-11-29 15:16:36'),
(3,'Stay With Us','banner-3.png','Have whatever you want here','We are always happy to be with you',NULL,'2019-11-29 15:17:10');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`title`,`created_at`,`updated_at`) values 
(1,'Pod Systems',NULL,NULL),
(2,'Pods',NULL,NULL),
(4,'Disposables',NULL,NULL),
(5,'Mods',NULL,NULL),
(6,'Ejuices',NULL,NULL),
(7,'Nicotine Salts',NULL,NULL);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user_default.jpg',
  `purchases` int(11) NOT NULL,
  `totalSpent` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_11_24_012620_create_categories_table',1),
(4,'2019_11_24_012647_create_customers_table',1),
(5,'2019_11_26_001815_create_sales_table',1),
(6,'2019_11_26_064210_create_news_table',1),
(7,'2019_11_29_133549_create_banners_table',1),
(8,'2019_11_29_140750_create_products_table',1),
(9,'2019_11_29_140751_create_orders_table',1);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blog_default.jpg',
  `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`image`,`content`,`like`,`created_at`,`updated_at`) values 
(1,'Five inspiring social media campaigns and what you can learn from them!','blog-img1.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',1231,'2019-11-29 15:25:22','2019-11-29 15:25:22'),
(2,'Five inspiring social media campaigns and what you can learn from them!','blog-img2.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',2341,'2019-11-29 15:25:32','2019-11-29 15:40:40'),
(3,'Five inspiring social media campaigns and what you can learn from them!','blog-img3.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',123,'2019-11-29 15:25:32','2019-11-29 15:25:32'),
(4,'Five inspiring social media campaigns and what you can learn from them!','blog-img4.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',324,'2019-11-29 15:25:32','2019-11-29 15:25:32'),
(5,'Five inspiring social media campaigns and what you can learn from them!','blog-img5.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',5464,'2019-11-29 15:25:33','2019-11-29 15:25:33'),
(6,'Five inspiring social media campaigns and what you can learn from them!','blog_default.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',2342,'2019-11-29 15:25:37','2019-11-29 15:25:37'),
(7,'Five inspiring social media campaigns and what you can learn from them!','blog_default.jpg','Consumers have been “given wings” for well over 28 years by Red Bull, and they ranked #76 on the Forbes Most Powerful Brand List in 2015. Their original energy drink can be found in over 170 countries, so it comes as no surprise that the company has sold over 60 billion cans of their famous drink. Since their humble beginnings back in 1987, the brand has since released 4 new flavors of energy drinks to cater to individual tastes and preferences.',546,'2019-11-29 15:25:37','2019-11-29 15:25:37');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `bulk` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'No any note left',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_product_id_foreign` (`product_id`),
  CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`id`,`customer_name`,`token_id`,`product_id`,`bulk`,`note`,`status`,`created_at`,`updated_at`) values 
(1,'Rim chungsong','tok_CtEu31311012XHxF527356',16,2,'No any note left','Pending','2019-11-29 15:52:59','2019-11-29 15:52:59'),
(2,'Rim chungsong','tok_CtEu31311012XHxF527356',13,2,'No any note left','Pending','2019-11-29 15:52:59','2019-11-29 15:52:59');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product_default.jpg',
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `SKU` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `sale` tinyint(1) NOT NULL DEFAULT 0,
  `origin_price` int(11) NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold_out` int(11) NOT NULL DEFAULT 0,
  `newitem` tinyint(1) NOT NULL DEFAULT 0,
  `special` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`title`,`slug`,`image`,`category_id`,`SKU`,`price`,`sale`,`origin_price`,`source`,`stock`,`description`,`status`,`tags`,`sold_out`,`newitem`,`special`,`created_at`,`updated_at`) values 
(11,'The best vape 80W kit','the-best-vape-80w-kit','product-1.png',1,'324242',234,0,234,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,12,1,1,'2019-11-29 15:10:13','2019-11-29 15:10:13'),
(12,'The best vape 80W kit','the-best-vape-80w-kit','product-2.png',1,'324242',123,0,123,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,123,1,1,'2019-11-29 15:10:14','2019-11-29 15:10:14'),
(13,'The best vape 80W kit','the-best-vape-80w-kit','product-3.png',1,'324242',343,0,343,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,123,1,1,'2019-11-29 15:10:15','2019-11-29 15:10:15'),
(14,'The best vape 80W kit','the-best-vape-80w-kit','product-4.png',1,'324242',232,0,232,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,12,1,1,'2019-11-29 15:10:15','2019-11-29 15:10:15'),
(15,'The best vape 80W kit','the-best-vape-80w-kit','product-5.png',1,'324242',131,0,131,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,43,1,1,'2019-11-29 15:10:16','2019-11-29 15:10:16'),
(16,'The best vape 80W kit','the-best-vape-80w-kit','product-6.png',1,'324242',232,0,232,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,453,1,1,'2019-11-29 15:10:16','2019-11-29 15:10:16'),
(17,'The best vape 80W kit','the-best-vape-80w-kit','product-7.png',1,'324242',333,0,333,'0',212,'A product description is the marketing copy used to describe a product\'s value proposition to potential customers. ... As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it. The more powerful the customer\'s fantasy of owning the product, the more likely they are to buy it.','Active',NULL,2312,1,1,'2019-11-29 15:10:17','2019-11-29 15:10:17');

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sales` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role`,`name`,`username`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'admin','Admin','admin','admin@webbb.co',NULL,'$2y$10$QXn9r/FWucVGrMxnb1AxBevThns9noqVAh8j4i3Vqo2oNIr8zoUbK','J70jxUaeJ0','2019-11-29 15:02:27','2019-11-29 15:02:27');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
