/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : hantang

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2016-01-14 14:28:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jobinfo`
-- ----------------------------
DROP TABLE IF EXISTS `jobinfo`;
CREATE TABLE `jobinfo` (
  `id` int(11) NOT NULL,
  `need` varchar(2048) DEFAULT NULL,
  `jobname` varchar(50) NOT NULL,
  `todo` varchar(2048) DEFAULT NULL,
  `creator` varchar(50) NOT NULL,
  `createtime` date NOT NULL,
  `updater` varchar(50) NOT NULL,
  `updatetime` date NOT NULL,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jobinfo
-- ----------------------------
INSERT INTO `jobinfo` VALUES ('100000', '为人正直', '编辑', '编辑工作', 'ADMIN', '2016-01-14', 'ADMIN', '2016-01-14', '1');

-- ----------------------------
-- Table structure for `keyword`
-- ----------------------------
DROP TABLE IF EXISTS `keyword`;
CREATE TABLE `keyword` (
  `id` int(11) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `type` smallint(1) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword
-- ----------------------------

-- ----------------------------
-- Table structure for `keyword_source_relation`
-- ----------------------------
DROP TABLE IF EXISTS `keyword_source_relation`;
CREATE TABLE `keyword_source_relation` (
  `source_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `keyword_id` (`keyword_id`),
  KEY `source_id` (`source_id`),
  CONSTRAINT `keyword_id` FOREIGN KEY (`keyword_id`) REFERENCES `keyword` (`id`),
  CONSTRAINT `source_id` FOREIGN KEY (`source_id`) REFERENCES `source` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword_source_relation
-- ----------------------------

-- ----------------------------
-- Table structure for `privilege`
-- ----------------------------
DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
  `privilege` int(3) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privilege
-- ----------------------------

-- ----------------------------
-- Table structure for `source`
-- ----------------------------
DROP TABLE IF EXISTS `source`;
CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `source_location` varchar(500) NOT NULL,
  `status` smallint(1) NOT NULL,
  `source_name` varchar(200) NOT NULL,
  `source_type` smallint(1) NOT NULL,
  `link_url` varchar(500) DEFAULT NULL,
  `sequence` int(10) DEFAULT NULL,
  `update_time` date NOT NULL,
  `updater` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `creator` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of source
-- ----------------------------
INSERT INTO `source` VALUES ('100000', 'video/test.mp4', '1', 'testvideo1', '1', null, null, '2016-01-14', 'ADMIN', '2016-01-14', 'video/mp4', 'ADMIN');
INSERT INTO `source` VALUES ('100001', 'video/test.mp4', '1', 'testvideo2', '1', null, null, '2016-01-14', 'ADMIN', '2016-01-14', 'video/mp4', 'ADMIN');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `create_time` date NOT NULL,
  `creator` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------
