/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : project03

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-11-18 19:49:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('3', 'Title 2', 'Content 2', '2', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('4', 'update title', 'Content 3', '2000', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('5', 'Title 4', 'Content 4', '1', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('6', 'Title 5', 'Content 5', '1', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('7', 'Title 6', 'Content 6', '1', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('8', 'Title 7', 'Content 7', '1', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('9', 'Title 8', 'hello', '10', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('10', 'Title 9', 'hello', '12', '2016-11-18 08:12:12', '2016-11-18 08:12:12');
INSERT INTO `articles` VALUES ('15', 'new title1', 'new content1', '1000', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('16', 'new title2', 'new content2', '1001', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('17', 'new title3', 'new content3', '1003', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `articles` VALUES ('18', 'new title4', 'new content4', '1004', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_18_074744_articles', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
