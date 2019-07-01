/*
 Navicat Premium Data Transfer

 Source Server         : Local MySQL
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : splc

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 01/07/2019 16:04:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for arsip_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `arsip_dokumen`;
CREATE TABLE `arsip_dokumen`  (
  `no_dokumen` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_po` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_po` date NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jurubeli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `proyek` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `vendor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rak_ke` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `petugas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_entry` datetime(0) NULL DEFAULT NULL,
  `dokumen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_dokumen` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`no_dokumen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of arsip_dokumen
-- ----------------------------
INSERT INTO `arsip_dokumen` VALUES ('Invoice - INV_2019_0002', 'PO-001', '2019-07-27', 'Pembelian Kabel Jaringan', '1', '1', '1', 'Kabel', '1', '2019-07-01 10:06:01', 'Invoice_-_INV_2019_0002.pdf', 2);
INSERT INTO `arsip_dokumen` VALUES ('Invoice - INV_2019_0004', 'PO-002', '2019-07-24', 'Pembelian Antena ', '1', '1', '1', 'Antena', '1', '2019-07-01 02:28:05', 'Invoice_-_INV_2019_0004.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES ('Quotation - SO004', 'PO-004', '2019-07-31', 'Pembelian Bahan Bakar', '2', '2', '2', 'Bahan Bakar', '3', '2019-07-01 02:42:22', 'Quotation_-_SO004.pdf', 1);

-- ----------------------------
-- Table structure for jurubeli
-- ----------------------------
DROP TABLE IF EXISTS `jurubeli`;
CREATE TABLE `jurubeli`  (
  `kd_jurubeli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_jurubeli` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kd_jurubeli`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jurubeli
-- ----------------------------
INSERT INTO `jurubeli` VALUES ('1', 'Sutikno');
INSERT INTO `jurubeli` VALUES ('2', 'Luqman');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(11) NOT NULL,
  `menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `levels` int(11) NULL DEFAULT NULL,
  `parent` int(11) NULL DEFAULT NULL,
  `users` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (2, 'MASTER DATA', 1, 0, '2', NULL, NULL);
INSERT INTO `menus` VALUES (3, 'Juru Beli', 2, 2, '2', 'fa fa-briefcase', 'JuruBeli');
INSERT INTO `menus` VALUES (4, 'Proyek', 2, 2, '2', 'fa fa-gears', 'Proyek');
INSERT INTO `menus` VALUES (5, 'Vendor', 2, 2, '2', 'fa fa-building-o', 'Vendor');
INSERT INTO `menus` VALUES (7, 'User', 2, 2, '2', 'fa fa-group', 'User');
INSERT INTO `menus` VALUES (8, 'ARSIP DOKUMEN', 1, 0, '1', NULL, NULL);
INSERT INTO `menus` VALUES (9, 'Input Arsip', 2, 8, '1', 'fa fa-download', 'Arsip');
INSERT INTO `menus` VALUES (10, 'Data Asip', 2, 8, '1', 'fa fa-archive', 'Arsip/Data');

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas`  (
  `no_petugas` int(50) NOT NULL,
  `nama_petugas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hak_akses` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_petugas`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of petugas
-- ----------------------------
INSERT INTO `petugas` VALUES (1, 'Bambang P', 'bambangp', '21232f297a57a5a743894a0e4a801fc3', '2');
INSERT INTO `petugas` VALUES (2, 'Yusril K', 'ysk', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `petugas` VALUES (3, 'M Yudha', 'yudha', '21232f297a57a5a743894a0e4a801fc3', '1');

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek`  (
  `kd_proyek` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_proyek` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kd_proyek`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of proyek
-- ----------------------------
INSERT INTO `proyek` VALUES ('1', 'Kapal Perang');
INSERT INTO `proyek` VALUES ('2', 'Kapal Selam');

-- ----------------------------
-- Table structure for vendor
-- ----------------------------
DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor`  (
  `kd_vendor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_vendor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kd_vendor`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of vendor
-- ----------------------------
INSERT INTO `vendor` VALUES ('1', 'Telkomsel');
INSERT INTO `vendor` VALUES ('2', 'Pertamina');

SET FOREIGN_KEY_CHECKS = 1;
