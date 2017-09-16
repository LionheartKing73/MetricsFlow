/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.13-MariaDB : Database - issac_campaign
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`issac_campaign` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `issac_campaign`;

/*Table structure for table `announcements` */

DROP TABLE IF EXISTS `announcements`;

CREATE TABLE `announcements` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `action_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_url` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `announcements` */

/*Table structure for table `api_tokens` */

DROP TABLE IF EXISTS `api_tokens`;

CREATE TABLE `api_tokens` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `metadata` text COLLATE utf8_unicode_ci NOT NULL,
  `transient` tinyint(4) NOT NULL DEFAULT '0',
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `api_tokens_token_unique` (`token`),
  KEY `api_tokens_user_id_expires_at_index` (`user_id`,`expires_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `api_tokens` */

/*Table structure for table `campaigns` */

DROP TABLE IF EXISTS `campaigns`;

CREATE TABLE `campaigns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `tracking_id` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolio_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campaigns_portfolio_id_foreign` (`portfolio_id`),
  CONSTRAINT `campaigns_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `campaigns` */

insert  into `campaigns`(`id`,`name`,`description`,`tracking_id`,`portfolio_id`,`created_at`,`updated_at`) values 
(1,'Campaign Test',NULL,'1',1,NULL,NULL),
(2,'Campaign 1',NULL,'1',1,NULL,NULL);

/*Table structure for table `invitations` */

DROP TABLE IF EXISTS `invitations`;

CREATE TABLE `invitations` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `invitations_token_unique` (`token`),
  KEY `invitations_team_id_index` (`team_id`),
  KEY `invitations_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `invitations` */

/*Table structure for table `invoices` */

DROP TABLE IF EXISTS `invoices`;

CREATE TABLE `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `card_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoices_created_at_index` (`created_at`),
  KEY `invoices_user_id_index` (`user_id`),
  KEY `invoices_team_id_index` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `invoices` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values 
('2016_10_23_084612_create_performance_indicators_table',1),
('2016_10_23_084613_create_announcements_table',1),
('2016_10_23_084615_create_users_table',1),
('2016_10_23_084618_create_password_resets_table',1),
('2016_10_23_084622_create_api_tokens_table',1),
('2016_10_23_084627_create_subscriptions_table',1),
('2016_10_23_084633_create_invoices_table',1),
('2016_10_23_084640_create_notifications_table',1),
('2016_10_23_084648_create_teams_table',1),
('2016_10_23_084657_create_team_users_table',1),
('2016_10_23_084707_create_invitations_table',1),
('2016_10_28_144119_create_roles_table',1),
('2017_02_25_112136_create_tokens',1),
('2017_02_28_163807_create_portfolios_table',1),
('2017_02_28_164049_create_campaigns_table',1),
('2017_03_01_173330_create_portfolio_user_table',1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `action_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_url` text COLLATE utf8_unicode_ci,
  `read` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_user_id_created_at_index` (`user_id`,`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `notifications` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `performance_indicators` */

DROP TABLE IF EXISTS `performance_indicators`;

CREATE TABLE `performance_indicators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `monthly_recurring_revenue` decimal(8,2) NOT NULL,
  `yearly_recurring_revenue` decimal(8,2) NOT NULL,
  `daily_volume` decimal(8,2) NOT NULL,
  `new_users` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `performance_indicators_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `performance_indicators` */

/*Table structure for table `portfolio_user` */

DROP TABLE IF EXISTS `portfolio_user`;

CREATE TABLE `portfolio_user` (
  `portfolio_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `portfolio_user_portfolio_id_user_id_unique` (`portfolio_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `portfolio_user` */

insert  into `portfolio_user`(`portfolio_id`,`user_id`,`role`) values 
(1,1,''),
(1,6,''),
(2,1,''),
(2,5,''),
(3,1,''),
(4,1,''),
(4,2,'');

/*Table structure for table `portfolios` */

DROP TABLE IF EXISTS `portfolios`;

CREATE TABLE `portfolios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tracking_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolios_owner_id_index` (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `portfolios` */

insert  into `portfolios`(`id`,`owner_id`,`name`,`description`,`domain`,`tracking_id`,`created_at`,`updated_at`) values 
(1,1,'Leffler Inc','Laudantium nisi vero rerum et quisquam sapiente.','','4837','2017-03-07 20:20:49','2017-03-07 20:20:49'),
(2,0,'Metricsflow','Test portfolio for viewing metricsflow website data','','002','2017-03-09 00:15:13','2017-03-09 00:15:13'),
(3,1,'test','test','test','','2017-03-09 19:24:10','2017-03-09 19:24:10'),
(4,1,'MX','sdvf','www.metricsflow.ca','','2017-03-20 11:56:19','2017-03-20 11:56:19');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `role_user` */

insert  into `role_user`(`id`,`user_id`,`role_id`) values 
(1,1,2),
(2,6,3),
(1,1,2),
(2,6,3);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Super Admin',NULL,NULL),
(2,'Admin',NULL,NULL),
(3,'Client',NULL,NULL);

/*Table structure for table `subscriptions` */

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `subscriptions` */

/*Table structure for table `team_subscriptions` */

DROP TABLE IF EXISTS `team_subscriptions`;

CREATE TABLE `team_subscriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `team_subscriptions` */

/*Table structure for table `team_users` */

DROP TABLE IF EXISTS `team_users`;

CREATE TABLE `team_users` (
  `team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `team_users_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `team_users` */

/*Table structure for table `teams` */

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_url` text COLLATE utf8_unicode_ci,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_billing_plan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_line_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_billing_information` text COLLATE utf8_unicode_ci,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_owner_id_index` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `teams` */

/*Table structure for table `tokens` */

DROP TABLE IF EXISTS `tokens`;

CREATE TABLE `tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `portfolio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tokens` */

insert  into `tokens`(`id`,`token`,`username`,`status`,`created_at`,`updated_at`,`portfolio_id`) values 
(3,'5be073ba4196be2cd97391ca92c65115ff6ac76e','Admin Istrator','used','2017-03-09 19:24:44','2017-05-19 20:42:58',NULL),
(4,'b4b86037df10ab3c6b5ef6cc456e9d6f6d9604da','Admin Istrator','used','2017-05-19 20:21:36','2017-05-29 17:54:54',1),
(5,'ceba46e4213dea18a7d21daf7d0d8435e9a474a5','Admin Istrator','used','2017-05-19 20:21:42','2017-05-19 20:51:19',2),
(6,'0a0d5291501e326f831dc7f7143e1896da4b0572','Admin Istrator','used','2017-05-19 20:21:46','2017-05-19 20:22:13',4);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `role_id` tinyint(4) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_url` text COLLATE utf8_unicode_ci,
  `uses_two_factor_auth` tinyint(4) NOT NULL DEFAULT '0',
  `authy_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_factor_reset_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_team_id` int(11) DEFAULT NULL,
  `current_portfolio_id` int(10) unsigned DEFAULT NULL,
  `current_campaign_id` int(10) unsigned DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_billing_plan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address_line_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_country` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_billing_information` text COLLATE utf8_unicode_ci,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `last_read_announcements_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`status`,`role_id`,`token`,`password`,`remember_token`,`photo_url`,`uses_two_factor_auth`,`authy_id`,`country_code`,`phone`,`two_factor_reset_code`,`current_team_id`,`current_portfolio_id`,`current_campaign_id`,`stripe_id`,`current_billing_plan`,`card_brand`,`card_last_four`,`card_country`,`billing_address`,`billing_address_line_2`,`billing_city`,`billing_state`,`billing_zip`,`billing_country`,`vat_id`,`extra_billing_information`,`trial_ends_at`,`last_read_announcements_at`,`created_at`,`updated_at`) values 
(1,'Admin Istrator','admin@admin.com',2,1,'','$2y$10$siNesh6pz0L6DlJirZzmMeZCPZFbIWh.cjTpmm36aA0DfqdF9fAri','GToxt2y62FHWVnPIFK1m4G0RO2q9xwPcJYVwa7qCigqanfFe82o66RlDBM61',NULL,0,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2017-07-01 18:38:14'),
(2,'Production  Test','prod@test.com',1,3,'','$2y$10$3o15a1xHuI3k7TQlhXWi/.Hwwuf7HewjpKyRKiR2HnfGLY8HTIeYu','20lmmlryRaE3pdCUdYvyH9vImrbSfXHfSuCgVxyHlgmMlhojH3SxMVIZtImn',NULL,0,NULL,NULL,NULL,NULL,NULL,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-05-19 20:22:13','2017-05-19 20:50:20'),
(3,'Verafin Test','verafin@test.com',1,3,'','$2y$10$cOOqyL29tk75dfoVqOtRgOaaRt3jkA1J285Og0xTvhjKNFwq.mmJq','xf1XLkPUmcCkcvktlITomImVmGoRAsceKsv6NirZsRuM5mZzNxFo9lSdcnoF',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-05-19 20:42:58','2017-07-01 16:42:48'),
(5,'test','zj@test.com',1,3,'','$2y$10$lUCBVS/KBXZUZaKXGOmJsewd7PP3GECXwTcOIKFLDcBi5NIhH3S9W','G9UU8DdqLfn4iemVzBhFkxionPTyuCsYSZhdm8q2xpLpLIG2fdZSdXIPLhcN',NULL,0,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-05-19 20:51:19','2017-05-19 21:36:59'),
(6,'Verafin','verafin@example.com',1,3,'','$2y$10$eqvFP0OTLfCvFist4ecnIOEyRxWdYqDQ5535tJeFtryG/hZZDX5cS','UyUX0DQvHsd8OEa1YXNOsnnXMe41ul8GeM3J2E5niSMq1NSutvk5qCNEFkF0',NULL,0,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-05-29 17:54:54','2017-07-01 18:37:58');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
