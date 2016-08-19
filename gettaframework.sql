/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : gettaframework

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-19 17:54:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for languages
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of languages
-- ----------------------------
INSERT INTO `languages` VALUES ('1', 'Spanish');
INSERT INTO `languages` VALUES ('2', 'English');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Module1');
INSERT INTO `products` VALUES ('2', 'Module 2');
INSERT INTO `products` VALUES ('3', 'Module 3');
INSERT INTO `products` VALUES ('4', 'Module 4');
INSERT INTO `products` VALUES ('5', 'Module 5');
INSERT INTO `products` VALUES ('6', 'Module 6');
INSERT INTO `products` VALUES ('7', 'Module 7');
INSERT INTO `products` VALUES ('11', 'Module 11');
INSERT INTO `products` VALUES ('14', 'Module 13');
INSERT INTO `products` VALUES ('15', 'Module 14');
INSERT INTO `products` VALUES ('16', 'Module15');
