/*
Navicat MySQL Data Transfer

Source Server         : pak Yuko
Source Server Version : 50539
Source Host           : 192.168.100.46:3306
Source Database       : humasbatu

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-03-10 15:39:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `judul` text,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('12', '001', 'Berita', 'saas', '<p>assa</p>', '170310044916.jpg|', '2017-03-10', '0', '0');
INSERT INTO `artikel` VALUES ('13', '002', 'Buletin', 'www', '<p>www</p>', '170310045814.jpg|', '2017-03-10', null, null);
INSERT INTO `artikel` VALUES ('14', '001', 'Berita', 'Astri', '<p>haiahai&nbsp;</p>', '170310074435.jpg|', '2017-03-10', '1', 'astro');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `id_ym` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `handphone` varchar(255) DEFAULT NULL,
  `pin_bb` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------

-- ----------------------------
-- Table structure for kategori_artikel
-- ----------------------------
DROP TABLE IF EXISTS `kategori_artikel`;
CREATE TABLE `kategori_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_artikel
-- ----------------------------
INSERT INTO `kategori_artikel` VALUES ('4', '001', 'Berita');
INSERT INTO `kategori_artikel` VALUES ('5', '002', 'Buletin');
INSERT INTO `kategori_artikel` VALUES ('6', '003', 'Hukum');
INSERT INTO `kategori_artikel` VALUES ('7', '004', 'Info dan Pengumuman');
INSERT INTO `kategori_artikel` VALUES ('8', '005', 'Info Hotel');
INSERT INTO `kategori_artikel` VALUES ('9', '006', 'Info Villa');
INSERT INTO `kategori_artikel` VALUES ('10', '007', 'Info Homestay');
INSERT INTO `kategori_artikel` VALUES ('11', '008', 'Info Wisata');
INSERT INTO `kategori_artikel` VALUES ('12', '009', 'Info Kuliner');
INSERT INTO `kategori_artikel` VALUES ('13', '010', 'Kehumasan');
INSERT INTO `kategori_artikel` VALUES ('14', '011', 'Lain-lain');
INSERT INTO `kategori_artikel` VALUES ('15', '012', 'Olahraga');
INSERT INTO `kategori_artikel` VALUES ('16', '013', 'Pers Release');
INSERT INTO `kategori_artikel` VALUES ('17', '014', 'Wisata');

-- ----------------------------
-- Table structure for sambutan
-- ----------------------------
DROP TABLE IF EXISTS `sambutan`;
CREATE TABLE `sambutan` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `jenis_sambutan` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sambutan
-- ----------------------------
INSERT INTO `sambutan` VALUES ('1', 'walikota', 'Pengertian Kota', 'Kota adalah', '170310035445.jpg|', '2017-03-10');
INSERT INTO `sambutan` VALUES ('2', 'humas', 'Humas 111', 'Humas Humas123', '170310042644.jpg|', '2017-03-10');
INSERT INTO `sambutan` VALUES ('3', 'pers', 'Test Sambutan baru', 'sasa baru', '170310042837.jpg|', '2017-03-10');

-- ----------------------------
-- Table structure for sejarah_kota
-- ----------------------------
DROP TABLE IF EXISTS `sejarah_kota`;
CREATE TABLE `sejarah_kota` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sejarah_kota
-- ----------------------------
INSERT INTO `sejarah_kota` VALUES ('1', 'Baru', '<p>hai</p>', '170309091029.jpg|', '2017-03-09');
INSERT INTO `sejarah_kota` VALUES ('3', 'Humas Vision', 'wadawdawwd', '170309091850.jpg|', '2017-03-09');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------

-- ----------------------------
-- Table structure for struktur_humas
-- ----------------------------
DROP TABLE IF EXISTS `struktur_humas`;
CREATE TABLE `struktur_humas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of struktur_humas
-- ----------------------------
INSERT INTO `struktur_humas` VALUES ('1', 'Humas11', 'humas1111', '170309095217.jpg|', '2017-03-09');

-- ----------------------------
-- Table structure for struktur_pemkot
-- ----------------------------
DROP TABLE IF EXISTS `struktur_pemkot`;
CREATE TABLE `struktur_pemkot` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of struktur_pemkot
-- ----------------------------
INSERT INTO `struktur_pemkot` VALUES ('1', 'Bidang org13', 'haihai32', '170309094839.jpg|', '2017-03-09');

-- ----------------------------
-- Table structure for testimonial
-- ----------------------------
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testimonial
-- ----------------------------
INSERT INTO `testimonial` VALUES ('1', 'noob', 'noob@gmial.ocm', 'wowowwoowowowowowowo', '2017-03-10', null);
INSERT INTO `testimonial` VALUES ('2', 'anam', 'choirulanam2222@gmail.com', 'jijijiiijijijk', '2017-03-15', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'astro', '8cd07cf78166032f36fd06cb40163942', '||product|promo|berita|galery|contact|email|user|slider|kritik|paket|tentang|');
INSERT INTO `user` VALUES ('2', 'admin', 'admin', null);
INSERT INTO `user` VALUES ('3', 'oke', 'okoko', null);

-- ----------------------------
-- Table structure for visi_humas
-- ----------------------------
DROP TABLE IF EXISTS `visi_humas`;
CREATE TABLE `visi_humas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visi_humas
-- ----------------------------
INSERT INTO `visi_humas` VALUES ('1', 'Baru  jum', 'jumjumjumain', '170309092021.jpg|', '2017-03-09');
INSERT INTO `visi_humas` VALUES ('2', '123', '312', '170309092510.jpg|', '2017-03-09');

-- ----------------------------
-- Table structure for visi_pemkot
-- ----------------------------
DROP TABLE IF EXISTS `visi_pemkot`;
CREATE TABLE `visi_pemkot` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visi_pemkot
-- ----------------------------
INSERT INTO `visi_pemkot` VALUES ('1', 'wwww', 'testingwww', '170309094152.jpg|', '2017-03-09');
