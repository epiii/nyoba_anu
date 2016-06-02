/*
Navicat MySQL Data Transfer

Source Server         : lumba_lumba
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : nyoba_anu

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-03 04:48:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(50) NOT NULL,
  `kota_id` int(11) NOT NULL,
  PRIMARY KEY (`kecamatan_id`),
  KEY `kota` (`kota_id`) USING BTREE,
  CONSTRAINT `kotaFK1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES ('1', 'sukolilo', '1');
INSERT INTO `kecamatan` VALUES ('2', 'rawa bening', '2');
INSERT INTO `kecamatan` VALUES ('3', 'genteng', '1');
INSERT INTO `kecamatan` VALUES ('4', 'kenjeran', '1');
INSERT INTO `kecamatan` VALUES ('5', 'sunter', '2');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota` (
  `kota_id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(50) NOT NULL,
  PRIMARY KEY (`kota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES ('1', 'surabaya');
INSERT INTO `kota` VALUES ('2', 'jakarta');
