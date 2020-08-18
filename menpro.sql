/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : 192.168.100.17:3306
Source Database       : menpro

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-01-30 16:26:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for analisa
-- ----------------------------
DROP TABLE IF EXISTS `analisa`;
CREATE TABLE `analisa` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `idproject` varchar(20) DEFAULT NULL,
  `idproduksi` varchar(20) DEFAULT NULL,
  `idkaryawan` varchar(20) DEFAULT NULL,
  `file` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of analisa
-- ----------------------------
INSERT INTO `analisa` VALUES ('1', '22', '4', null, '0');
INSERT INTO `analisa` VALUES ('2', '19', '5', null, '0');
INSERT INTO `analisa` VALUES ('3', '22', '4', null, '0');
INSERT INTO `analisa` VALUES ('4', '19', '8', null, '0');
INSERT INTO `analisa` VALUES ('5', 'massive', '4', null, '0');
INSERT INTO `analisa` VALUES ('6', '19', '5', null, '0');
INSERT INTO `analisa` VALUES ('7', '13', '11', null, '0');
INSERT INTO `analisa` VALUES ('8', '13', '10', null, '0');
INSERT INTO `analisa` VALUES ('9', '13', '11', null, '0');
INSERT INTO `analisa` VALUES ('10', '10', '10', null, '0');
INSERT INTO `analisa` VALUES ('11', '10', '11', null, '170130093903.jpg');

-- ----------------------------
-- Table structure for crm
-- ----------------------------
DROP TABLE IF EXISTS `crm`;
CREATE TABLE `crm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `nama_project` varchar(30) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of crm
-- ----------------------------
INSERT INTO `crm` VALUES ('9', '0', 'junjungenteng', '2017-01-27', 'senin', 'kssadnas', 'fsffsdf', 'selesai');
INSERT INTO `crm` VALUES ('11', '19', 'massive', '2017-01-19', 'senin', 'nbb', 'nn', 'pending');
INSERT INTO `crm` VALUES ('12', '19', 'massive', '2017-02-03', 'minggu', 'jjbj', 'm ', 'pending');
INSERT INTO `crm` VALUES ('15', '19', 'massive', '2017-01-19', 'sabtu', 'kasndlsa askdnaks asdlasd asndask', 'jasasdaskjdbasd sajbdhsa hasbd', 'pending');
INSERT INTO `crm` VALUES ('16', '23', 'Sup', '2017-01-31', 'jumat', 'Keterangan', 'Bagus', 'pending');
INSERT INTO `crm` VALUES ('17', '19', 'massive', '2017-01-30', 'rabu', 'tfef', 'erter', 'pending');

-- ----------------------------
-- Table structure for h_project
-- ----------------------------
DROP TABLE IF EXISTS `h_project`;
CREATE TABLE `h_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `nama_project` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `versi` varchar(10) DEFAULT NULL,
  `update` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of h_project
-- ----------------------------
INSERT INTO `h_project` VALUES ('1', '27', 'massive', '2017-01-20', 'jsjsjsjs', 'sjsjsjs', 'jsjsjsjs');
INSERT INTO `h_project` VALUES ('2', '30', 'junjungenteng', '2017-01-23', 'jbhjbjjjnj', 'jnjnjn', 'knknknnk');

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jekel` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('3', 'test', 'perempuan', 'kell', '9090909', 'ko', '2017-01-26', 'aktif');
INSERT INTO `karyawan` VALUES ('4', 'test2', 'perempuan', 'lplplplpl', '0909090', 'lo', '2017-01-01', 'aktif');
INSERT INTO `karyawan` VALUES ('5', 'anam', 'laki - laki', 'jl.tidar', '09090909', 'junior programer', '2017-01-01', 'aktif');
INSERT INTO `karyawan` VALUES ('6', 'jihan', 'laki - laki', 'jl.buwek', '09090909', 'junior programer', '2017-01-03', 'aktif');
INSERT INTO `karyawan` VALUES ('7', 'orlen', 'laki - laki', 'jl.kasin', '9090909', 'junior programer', '2017-01-06', 'aktif');
INSERT INTO `karyawan` VALUES ('8', 'angga', 'laki - laki', 'oojojj', '090909', 'junior programer', '2017-01-02', 'aktif');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` varchar(50) DEFAULT NULL,
  `pic` varchar(30) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `petugas` varchar(255) DEFAULT NULL,
  `k_register` varchar(255) DEFAULT NULL,
  `register` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('19', 'massive', 'anam', 'jl.hell', '081212121', 'asik', null, null, null, '2017-01-26 14:23:00', 'pending');
INSERT INTO `project` VALUES ('22', 'junjungenteng', 'jihan', 'jl.hellegion', '083333', 'hhbfhabdahbdhsab', '170120051636.docx', null, null, '2017-01-25 14:42:12', 'suspend');
INSERT INTO `project` VALUES ('23', 'Sup', 'Anam', 'Jln ijen no 18', '089098765567890', 'Baru saja ', '170124034644.docx', null, null, '2017-01-25 14:36:36', 'open');

-- ----------------------------
-- Table structure for t_produksi
-- ----------------------------
DROP TABLE IF EXISTS `t_produksi`;
CREATE TABLE `t_produksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `nama_project` varchar(50) DEFAULT NULL,
  `fitur` varchar(255) DEFAULT NULL,
  `in` date DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `out` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_produksi
-- ----------------------------
INSERT INTO `t_produksi` VALUES ('10', '23', 'Sup', 'mkmk', '2017-01-02', '2017-01-03', '2017-01-03', '2017-01-31', 'kkmkm', 'lost', null, 'test2');
INSERT INTO `t_produksi` VALUES ('11', '23', 'Sup', 'dsfdsfds', '2017-01-01', '2017-01-23', '2017-01-30', '2017-01-31', 'knkn', 'pending', null, 'test2');
INSERT INTO `t_produksi` VALUES ('12', '23', 'Sup', 'kjaakdj', '2017-01-01', '2017-01-01', '2017-01-30', '2017-01-31', 'askdnadnas', 'pending', null, '5|7');
INSERT INTO `t_produksi` VALUES ('13', '19', 'massive', 'llplplpl', '2017-01-01', '2017-01-03', '2017-01-30', '2017-01-31', 'popopopopo', 'pending', null, '5|6|7|8');
INSERT INTO `t_produksi` VALUES ('14', '23', 'Sup', 'nbn ', '2017-01-03', '2017-01-04', '2017-01-12', '2017-01-04', 'dghhhhhn', 'lost', '170130092123.jpg', '5');
