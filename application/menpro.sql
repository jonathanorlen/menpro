/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : menpro

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-03-06 09:44:35
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of analisa
-- ----------------------------
INSERT INTO `analisa` VALUES ('1', '1', '1', '27', '170202093721.txt');
INSERT INTO `analisa` VALUES ('2', '2', '3', '27', '170202105958.png');
INSERT INTO `analisa` VALUES ('3', '2', '3', '27', '170202110130.png');
INSERT INTO `analisa` VALUES ('4', '2', '3', '29', '170202110423.jpg');
INSERT INTO `analisa` VALUES ('5', '2', '3', '33', null);
INSERT INTO `analisa` VALUES ('6', '2', '2', '27', null);
INSERT INTO `analisa` VALUES ('7', '2', '2', '27', '170224095309.jpg');
INSERT INTO `analisa` VALUES ('8', '1', '4', '27', '170228051740.png');

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
  `waktu` varchar(20) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of crm
-- ----------------------------
INSERT INTO `crm` VALUES ('11', '0', 'WCA', '2017-02-04', 'minggu', 'sdf', 'a', 'pending', '04:39:33pm', null);
INSERT INTO `crm` VALUES ('12', '1', 'WCA', '2017-02-08', 'Kamis', 'wwe', 'a', 'selesai', '04:39:49pm', null);
INSERT INTO `crm` VALUES ('13', '0', 'WCA', '2017-02-28', 'selasa', 'hehehheeheh', 'a', 'pending', '12:26:45pm', null);
INSERT INTO `crm` VALUES ('14', '0', 'Perumahan', '2017-02-11', 'jumat', 'gegege', 'a', 'pending', '12:37:39pm', null);

-- ----------------------------
-- Table structure for form_review_klien
-- ----------------------------
DROP TABLE IF EXISTS `form_review_klien`;
CREATE TABLE `form_review_klien` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_proyek` varchar(30) DEFAULT NULL,
  `nama_proyek` varchar(70) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `via` varchar(120) DEFAULT NULL,
  `kode_form_review_klien` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of form_review_klien
-- ----------------------------
INSERT INTO `form_review_klien` VALUES ('1', null, 'WCA', '2017-02-23', 'meetup', 'RK_230217_26_0001');
INSERT INTO `form_review_klien` VALUES ('2', null, 'WCA', '2017-02-23', 'telepon', 'RK_230217_26_0001');
INSERT INTO `form_review_klien` VALUES ('3', null, 'WCA', '2017-02-23', '--PILIH Via Review--', 'RK_230217_26_0002');
INSERT INTO `form_review_klien` VALUES ('4', null, 'WCA', '2017-02-23', '--PILIH Via Review--', 'RK_230217_26_0003');
INSERT INTO `form_review_klien` VALUES ('5', null, 'WCA', '2017-02-23', '--PILIH Via Review--', 'RK_230217_1_0004');
INSERT INTO `form_review_klien` VALUES ('6', null, 'WCA', '2017-02-24', 'telepon', 'RK_240217_26_0005');
INSERT INTO `form_review_klien` VALUES ('7', null, 'WCA', '2017-02-24', 'meetup', 'RK_240217_26_0006');

-- ----------------------------
-- Table structure for form_testing
-- ----------------------------
DROP TABLE IF EXISTS `form_testing`;
CREATE TABLE `form_testing` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_proyek` varchar(25) DEFAULT NULL,
  `nama_proyek` varchar(40) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `git` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `kode_form_testing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of form_testing
-- ----------------------------
INSERT INTO `form_testing` VALUES ('3', '2', 'WCA', '2017-02-23', 'getget', 'test', 'test', 'FT_230217_26_0003');
INSERT INTO `form_testing` VALUES ('4', '2', 'WCA', '2017-02-23', '1', 'a', 'a', 'FT_230217_26_0004');
INSERT INTO `form_testing` VALUES ('5', '', 'WCA', '2017-02-23', '', '', '', 'FT_230217_26_0005');
INSERT INTO `form_testing` VALUES ('6', '', 'WCA', '2017-02-23', '', '', '', 'FT_230217_26_0006');
INSERT INTO `form_testing` VALUES ('7', '', 'WCA', '2017-02-23', '', '', '', 'FT_230217_1_0007');

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
  `kode_histori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of h_project
-- ----------------------------
INSERT INTO `h_project` VALUES ('1', '1', 'WCA', '2017-03-08', '0.0.1', 'apik', 'diver', 'HP_0001');
INSERT INTO `h_project` VALUES ('2', '3', 'URIPA', '2017-03-17', '0.0.2', 'lololololol', 'wkwkwkwkwkkwkkwkwkwkkwkwkwk', 'HP_0002');

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
  `uname` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('1', 'admin', 'perempuan', 'astrolegion', '21212121', 'admin', '2017-01-01', 'aktif', 'admin', '9c69c2e28557a737ffc2d3aad9160b76', 'project|t_produksi|crm|karyawan|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('26', 'SPV', 'laki - laki', 'astr', '8989898', 'spv', '2017-02-01', 'aktif', 'spv', '37dbab35fc7f700f317f0898fb1134cc', 'admin|karyawan|project|t_produksi|h_project|crm|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('27', 'programer1', 'laki - laki', 'astroclub', '212121', 'programer', '2014-11-27', 'aktif', 'prog1', '688cdae18b325eb023b9410d447a7453', 't_produksi|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('28', 'leader1', 'laki - laki', 'astro', '66666', 'leader', '2013-10-25', 'aktif', 'l1', 'a25799ddfeef5d74c1a52877091d3e0c', 'project|t_produksi|crm|karyawan|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('29', 'programer2', 'laki - laki', 'astrohouse', '999', 'programer', '2013-10-28', 'aktif', 'prog2', '5ac92dad23c0635903eb68802a059bde', 't_produksi|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('30', 'programer3', 'laki - laki', 'astrolll', '212121212121212121', 'programer', '2000-01-01', 'aktif', 'p3', 'cf147aa29046622339212f0d110d7e67', 't_produksi|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('31', 'programer4', 'laki - laki', 'suku2', '087676', 'programer', '2017-02-01', 'aktif', 'prog4', '6ddf6cf9c10d292d74bafd83b3f276e8', 't_produksi|rev_klien|testing');
INSERT INTO `karyawan` VALUES ('33', 'Tanjung Yuko Rudita', 'laki - laki', 'Jl. letjen sutoyo', '', 'programer', '0000-00-00', 'aktif', 'yuko', 'f4ea70b2d67ae65450ef336dff0259b9', 't_produksi|rev_klien|testing');

-- ----------------------------
-- Table structure for opsi_form_review_klien
-- ----------------------------
DROP TABLE IF EXISTS `opsi_form_review_klien`;
CREATE TABLE `opsi_form_review_klien` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_form_review_klien` varchar(120) DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_form_review_klien
-- ----------------------------
INSERT INTO `opsi_form_review_klien` VALUES ('1', 'RK_230217_26_0001', 'retest', 'retest');
INSERT INTO `opsi_form_review_klien` VALUES ('2', 'RK_230217_26_0001', 'rett', 'rett');
INSERT INTO `opsi_form_review_klien` VALUES ('3', 'RK_230217_26_0001', 'sfsd', 'sfasd');
INSERT INTO `opsi_form_review_klien` VALUES ('4', 'RK_240217_26_0005', 'hhh', 'hhhh');
INSERT INTO `opsi_form_review_klien` VALUES ('5', 'RK_240217_26_0005', 'sss', 'ssss');
INSERT INTO `opsi_form_review_klien` VALUES ('6', 'RK_240217_26_0006', 'kill', 'kill');

-- ----------------------------
-- Table structure for opsi_form_review_klien_temp
-- ----------------------------
DROP TABLE IF EXISTS `opsi_form_review_klien_temp`;
CREATE TABLE `opsi_form_review_klien_temp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_form_review_klien` varchar(120) DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_form_review_klien_temp
-- ----------------------------
INSERT INTO `opsi_form_review_klien_temp` VALUES ('7', 'RK_010317_26_0007', 'dd', 'jjj');

-- ----------------------------
-- Table structure for opsi_form_testing
-- ----------------------------
DROP TABLE IF EXISTS `opsi_form_testing`;
CREATE TABLE `opsi_form_testing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_form_testing` varchar(50) DEFAULT NULL,
  `modul` varchar(50) DEFAULT NULL,
  `sub_modul` varchar(50) DEFAULT NULL,
  `fitur` text,
  `keterangan` text,
  `pic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_form_testing
-- ----------------------------
INSERT INTO `opsi_form_testing` VALUES ('1', 'FT_230217_26_0001', 'test', 'test', 'test', 'test', 'test');
INSERT INTO `opsi_form_testing` VALUES ('2', 'FT_230217_26_0001', 'test2', 'test2', 'test2', 'test2', 'test2');
INSERT INTO `opsi_form_testing` VALUES ('3', 'FT_230217_26_0002', 'uhuhuhuh', 'uhuhuhu', 'huhuhuhuh', 'uhuhuhuh', 'uhuhu');
INSERT INTO `opsi_form_testing` VALUES ('4', 'FT_230217_26_0002', 'hhhh', 'hhhhh', 'hhhhh', 'hhhhh', 'hhhh');
INSERT INTO `opsi_form_testing` VALUES ('5', 'FT_230217_26_0003', 'test', 'test', 'test', 'test', 'test');
INSERT INTO `opsi_form_testing` VALUES ('6', 'FT_230217_26_0004', 'dd', 'd', 'd', 'd', 'd');

-- ----------------------------
-- Table structure for opsi_form_testing_temp
-- ----------------------------
DROP TABLE IF EXISTS `opsi_form_testing_temp`;
CREATE TABLE `opsi_form_testing_temp` (
  `kode_form_testing` varchar(50) DEFAULT NULL,
  `modul` varchar(50) DEFAULT NULL,
  `sub_modul` varchar(50) DEFAULT NULL,
  `fitur` text,
  `keterangan` text,
  `pic` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_form_testing_temp
-- ----------------------------

-- ----------------------------
-- Table structure for opsi_hproject
-- ----------------------------
DROP TABLE IF EXISTS `opsi_hproject`;
CREATE TABLE `opsi_hproject` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_histori` varchar(255) DEFAULT NULL,
  `modul` varchar(255) DEFAULT NULL,
  `submodul` varchar(255) DEFAULT NULL,
  `fitur` varchar(255) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_hproject
-- ----------------------------
INSERT INTO `opsi_hproject` VALUES ('1', 'HP_0001', 'test', 'test', 'test', 'test');
INSERT INTO `opsi_hproject` VALUES ('2', 'HP_0002', '90', '90', '90', '90');

-- ----------------------------
-- Table structure for opsi_hproject_temp
-- ----------------------------
DROP TABLE IF EXISTS `opsi_hproject_temp`;
CREATE TABLE `opsi_hproject_temp` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_histori` varchar(255) DEFAULT NULL,
  `modul` varchar(255) DEFAULT NULL,
  `submodul` varchar(255) DEFAULT NULL,
  `fitur` varchar(255) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_hproject_temp
-- ----------------------------

-- ----------------------------
-- Table structure for opsi_tproduksi
-- ----------------------------
DROP TABLE IF EXISTS `opsi_tproduksi`;
CREATE TABLE `opsi_tproduksi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_tproduksi` varchar(255) DEFAULT NULL,
  `modul` text,
  `status` varchar(255) DEFAULT NULL,
  `submodul` text,
  `fitur` text,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_tproduksi
-- ----------------------------
INSERT INTO `opsi_tproduksi` VALUES ('3', 'TP_0001', '123', 'pending', '123', 'tambah opsi transaksi temp', '2017-03-01', '2017-03-03', 'harus selesai mas ya :v');

-- ----------------------------
-- Table structure for opsi_tproduksi_temp
-- ----------------------------
DROP TABLE IF EXISTS `opsi_tproduksi_temp`;
CREATE TABLE `opsi_tproduksi_temp` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_tproduksi` varchar(255) DEFAULT NULL,
  `modul` text,
  `status` varchar(255) DEFAULT NULL,
  `submodul` text,
  `fitur` text,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_tproduksi_temp
-- ----------------------------
INSERT INTO `opsi_tproduksi_temp` VALUES ('1', null, '', null, '', null, null, '0000-00-00', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('1', 'WCA', 'anam', 'sdfsad', '2342', 'asdasd', '170303084744.doc', null, null, '2017-03-03 14:47:47', 'open');
INSERT INTO `project` VALUES ('3', 'URIPA', 'angga', 'jl.angga', '9000', 'lol', '170303085254.jpeg', null, null, '2017-03-03 14:52:56', 'open');

-- ----------------------------
-- Table structure for t_produksi
-- ----------------------------
DROP TABLE IF EXISTS `t_produksi`;
CREATE TABLE `t_produksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `nama_project` varchar(50) DEFAULT NULL,
  `in` date DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `out` date DEFAULT NULL,
  `analisa` varchar(5) DEFAULT NULL,
  `tahapan` varchar(5) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `kode_tproduksi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_produksi
-- ----------------------------
INSERT INTO `t_produksi` VALUES ('4', '1', 'WCA', '2017-03-01', '2017-03-02', '2017-02-02', '2017-02-24', 'belum', 'belum', 'harus selesai', 'lost', null, '28|33|34', 'TP_0001');
