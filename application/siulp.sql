/*
Navicat MySQL Data Transfer

Source Server         : pak Yuko
Source Server Version : 50539
Source Host           : 192.168.100.46:3306
Source Database       : siulp

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-03-18 13:24:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for master_user
-- ----------------------------
DROP TABLE IF EXISTS `master_user`;
CREATE TABLE `master_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(2) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` longtext,
  `last_login` datetime DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_user
-- ----------------------------
INSERT INTO `master_user` VALUES ('1', '1', 'Astroboy', 'astro', '8cd07cf78166032f36fd06cb40163942', null, 'Jabatan 1');
