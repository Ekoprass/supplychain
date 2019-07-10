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

 Date: 10/07/2019 09:12:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for arsip_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `arsip_dokumen`;
CREATE TABLE `arsip_dokumen`  (
  `no_dokumen` int(6) NOT NULL,
  `no_surat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_po` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_po` date NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jurubeli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `proyek` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `vendor` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rak` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `petugas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_entry` datetime(0) NULL DEFAULT NULL,
  `dokumen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_dokumen` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`no_dokumen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of arsip_dokumen
-- ----------------------------
INSERT INTO `arsip_dokumen` VALUES (190001, '23', '234', '2019-07-18', 'uy', '1', '10', '100', '1', '1', '2019-07-06 10:53:08', 'course-note-numerical-method.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190002, '23', '123', '2019-07-30', '123', '100', '10', '100', '0', '3', '2019-07-06 10:53:37', 'BAb-_03_Solusi_Persamaan_Nirlanjar_22.pdf', NULL);
INSERT INTO `arsip_dokumen` VALUES (190003, '234', '234', '2019-07-25', '234', '10', '10', '100', '1', '1', '2019-07-06 10:54:36', 'BAb-_03_Solusi_Persamaan_Nirlanjar_13.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190004, '234', '234', '2019-07-25', '234', '10', '10', '100', '2', '1', '2019-07-06 10:54:48', 'BAb-_03_Solusi_Persamaan_Nirlanjar_14.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190005, '234', '234', '2019-07-25', '234', '10', '10', '100', '1', '1', '2019-07-06 10:55:05', 'BAb-_03_Solusi_Persamaan_Nirlanjar_15.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190006, '23498', '234', '2019-08-07', '3487 tes', '11', '100', '11', '0', '3', '2019-07-06 11:08:48', 'BAb-_03_Solusi_Persamaan_Nirlanjar_28.pdf', NULL);
INSERT INTO `arsip_dokumen` VALUES (190007, '89', '23489', '2019-07-30', 'sad', '100', '100', '10', '2', '1', '2019-07-09 08:52:19', 'course-note-numerical-method1.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190008, '678', '56', '2019-07-20', 'fdh', '10', '1', '100', '2', '1', '2019-07-09 10:48:21', 'BAb-_03_Solusi_Persamaan_Nirlanjar_16.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190009, '9769976', '678798', '2019-07-30', 'fdb', '10', '10', '100', '0', '3', '2019-07-09 10:48:44', 'BAb-_03_Solusi_Persamaan_Nirlanjar_211.pdf', 1);
INSERT INTO `arsip_dokumen` VALUES (190010, '45467', '567', '2019-07-26', '', '100', '10', '11', '2', '1', '2019-07-09 02:22:32', 'answer_1a1.pdf', NULL);
INSERT INTO `arsip_dokumen` VALUES (190011, '234', '678', '2019-07-01', '', '10', '10', '11', '2', '3', '2019-07-09 02:22:56', 'answer_1a11.pdf', 2);
INSERT INTO `arsip_dokumen` VALUES (190012, '2025', 'pc 19 slp 2025', '2019-06-24', 'Steel Plate BRS', 'mhd', '12', '17', '1', '103', '2019-07-10 08:26:18', '1209312092.pdf', 1);

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
INSERT INTO `jurubeli` VALUES ('1', 'Rubye Vandervort');
INSERT INTO `jurubeli` VALUES ('10', 'Selena Kemmer I');
INSERT INTO `jurubeli` VALUES ('100', 'Montana Breitenberg');
INSERT INTO `jurubeli` VALUES ('11', 'Jamil Gorczany');
INSERT INTO `jurubeli` VALUES ('12', 'Wilfrid Dicki Sr.');
INSERT INTO `jurubeli` VALUES ('13', 'Miss Marguerite Douglas IV');
INSERT INTO `jurubeli` VALUES ('14', 'Prof. Demetrius Kessler I');
INSERT INTO `jurubeli` VALUES ('15', 'Phoebe Connelly');
INSERT INTO `jurubeli` VALUES ('16', 'Waino Gleason');
INSERT INTO `jurubeli` VALUES ('17', 'Reyes Hoeger III');
INSERT INTO `jurubeli` VALUES ('18', 'Kian Muller');
INSERT INTO `jurubeli` VALUES ('19', 'Bella Robel');
INSERT INTO `jurubeli` VALUES ('2', 'Lue Jaskolski');
INSERT INTO `jurubeli` VALUES ('20', 'Monique Ferry MD');
INSERT INTO `jurubeli` VALUES ('21', 'Shanelle Lynch');
INSERT INTO `jurubeli` VALUES ('22', 'Beatrice Schimmel');
INSERT INTO `jurubeli` VALUES ('23', 'Mrs. Petra Dickens');
INSERT INTO `jurubeli` VALUES ('24', 'Lenny Kiehn I');
INSERT INTO `jurubeli` VALUES ('25', 'Layla D\'Amore III');
INSERT INTO `jurubeli` VALUES ('26', 'Mr. Malachi Hayes');
INSERT INTO `jurubeli` VALUES ('27', 'Enola Morar');
INSERT INTO `jurubeli` VALUES ('28', 'Jaylan Hahn');
INSERT INTO `jurubeli` VALUES ('29', 'Alvena Boehm');
INSERT INTO `jurubeli` VALUES ('3', 'Miss Aurore Padberg');
INSERT INTO `jurubeli` VALUES ('30', 'Ezekiel Thompson');
INSERT INTO `jurubeli` VALUES ('32', 'Betsy Rohan');
INSERT INTO `jurubeli` VALUES ('33', 'Mr. Ellsworth Little');
INSERT INTO `jurubeli` VALUES ('34', 'Ocie Romaguera');
INSERT INTO `jurubeli` VALUES ('35', 'Keara Koelpin');
INSERT INTO `jurubeli` VALUES ('36', 'Hosea Cartwright DVM');
INSERT INTO `jurubeli` VALUES ('37', 'Mr. Jordon Stehr');
INSERT INTO `jurubeli` VALUES ('38', 'Jamil Dickinson DDS');
INSERT INTO `jurubeli` VALUES ('39', 'Ms. Alysa Marks');
INSERT INTO `jurubeli` VALUES ('4', 'Earline Brakus');
INSERT INTO `jurubeli` VALUES ('40', 'Madisyn Monahan');
INSERT INTO `jurubeli` VALUES ('41', 'Immanuel Doyle');
INSERT INTO `jurubeli` VALUES ('42', 'Rodger Collins PhD');
INSERT INTO `jurubeli` VALUES ('43', 'Kobe Leuschke PhD');
INSERT INTO `jurubeli` VALUES ('44', 'Miguel Douglas I');
INSERT INTO `jurubeli` VALUES ('45', 'Zelda Hoppe');
INSERT INTO `jurubeli` VALUES ('46', 'Kasey Koepp');
INSERT INTO `jurubeli` VALUES ('47', 'Dr. Prudence Braun MD');
INSERT INTO `jurubeli` VALUES ('48', 'Lydia Watsica V');
INSERT INTO `jurubeli` VALUES ('49', 'Vesta Bernhard');
INSERT INTO `jurubeli` VALUES ('5', 'Kirk Borer I');
INSERT INTO `jurubeli` VALUES ('50', 'Dana O\'Reilly');
INSERT INTO `jurubeli` VALUES ('51', 'Damian Schmitt');
INSERT INTO `jurubeli` VALUES ('52', 'Ms. Amira Ritchie');
INSERT INTO `jurubeli` VALUES ('53', 'Ms. Euna Kertzmann');
INSERT INTO `jurubeli` VALUES ('54', 'Ms. Daisha Bahringer DDS');
INSERT INTO `jurubeli` VALUES ('55', 'Enos Abernathy');
INSERT INTO `jurubeli` VALUES ('56', 'Brooks Dicki IV');
INSERT INTO `jurubeli` VALUES ('57', 'Mr. Halle Abernathy IV');
INSERT INTO `jurubeli` VALUES ('58', 'Kaden Wintheiser');
INSERT INTO `jurubeli` VALUES ('59', 'Margarita Pagac');
INSERT INTO `jurubeli` VALUES ('6', 'Khalil Emmerich');
INSERT INTO `jurubeli` VALUES ('60', 'Dr. Jay Bogisich');
INSERT INTO `jurubeli` VALUES ('61', 'Prof. Eriberto Schoen');
INSERT INTO `jurubeli` VALUES ('62', 'Triston Hackett');
INSERT INTO `jurubeli` VALUES ('63', 'Roberto Kutch');
INSERT INTO `jurubeli` VALUES ('64', 'Dr. Declan Cormier I');
INSERT INTO `jurubeli` VALUES ('65', 'Ms. Carmen Roob Jr.');
INSERT INTO `jurubeli` VALUES ('66', 'Mrs. Vivianne Prosacco II');
INSERT INTO `jurubeli` VALUES ('67', 'Cierra Beier');
INSERT INTO `jurubeli` VALUES ('68', 'Desmond Kirlin');
INSERT INTO `jurubeli` VALUES ('69', 'Terrill Marquardt');
INSERT INTO `jurubeli` VALUES ('7', 'Mr. Cary Block');
INSERT INTO `jurubeli` VALUES ('70', 'Mrs. Beaulah Fisher Sr.');
INSERT INTO `jurubeli` VALUES ('71', 'Patrick Homenick DDS');
INSERT INTO `jurubeli` VALUES ('72', 'Mateo Pouros Jr.');
INSERT INTO `jurubeli` VALUES ('73', 'Miss Angelina Rice III');
INSERT INTO `jurubeli` VALUES ('74', 'Elijah Bahringer');
INSERT INTO `jurubeli` VALUES ('75', 'Eduardo Fahey');
INSERT INTO `jurubeli` VALUES ('76', 'Mr. Allan Hauck');
INSERT INTO `jurubeli` VALUES ('77', 'Prof. Constance Larson');
INSERT INTO `jurubeli` VALUES ('78', 'Britney Dibbert');
INSERT INTO `jurubeli` VALUES ('79', 'Dr. Chesley Jakubowski V');
INSERT INTO `jurubeli` VALUES ('8', 'Autumn Medhurst');
INSERT INTO `jurubeli` VALUES ('80', 'Mr. Issac D\'Amore I');
INSERT INTO `jurubeli` VALUES ('81', 'Hillary Miller');
INSERT INTO `jurubeli` VALUES ('82', 'Dr. Kenyon Gutmann Sr.');
INSERT INTO `jurubeli` VALUES ('83', 'Rozella Adams Sr.');
INSERT INTO `jurubeli` VALUES ('84', 'Meda Cruickshank');
INSERT INTO `jurubeli` VALUES ('85', 'Nickolas Shields');
INSERT INTO `jurubeli` VALUES ('86', 'Allie Mills IV');
INSERT INTO `jurubeli` VALUES ('87', 'Cooper Johnson DDS');
INSERT INTO `jurubeli` VALUES ('88', 'Ms. Norene Durgan');
INSERT INTO `jurubeli` VALUES ('89', 'Milton Cremin III');
INSERT INTO `jurubeli` VALUES ('9', 'Prof. Kristin Tremblay DVM');
INSERT INTO `jurubeli` VALUES ('90', 'Luther Skiles');
INSERT INTO `jurubeli` VALUES ('91', 'Marcelina Tremblay');
INSERT INTO `jurubeli` VALUES ('92', 'Eileen Shields V');
INSERT INTO `jurubeli` VALUES ('93', 'Madelynn Oberbrunner');
INSERT INTO `jurubeli` VALUES ('94', 'Alexys Conroy');
INSERT INTO `jurubeli` VALUES ('95', 'Laurence Buckridge');
INSERT INTO `jurubeli` VALUES ('96', 'Casey Medhurst');
INSERT INTO `jurubeli` VALUES ('97', 'Miss Emelia Walter');
INSERT INTO `jurubeli` VALUES ('98', 'Delia Brekke');
INSERT INTO `jurubeli` VALUES ('99', 'Georgette Gaylord');
INSERT INTO `jurubeli` VALUES ('mhd', 'muhadi');

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
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (2, 'MASTER DATA', 1, 0, '2', NULL, NULL);
INSERT INTO `menus` VALUES (3, 'Juru Beli', 2, 2, '2', 'fa fa-briefcase', 'JuruBeli');
INSERT INTO `menus` VALUES (4, 'Proyek', 2, 2, '2', 'fa fa-gears', 'Proyek');
INSERT INTO `menus` VALUES (5, 'Vendor', 2, 2, '2', 'fa fa-building-o', 'Vendor');
INSERT INTO `menus` VALUES (6, 'Rak', 2, 2, '2', 'fa fa-inbox', 'Rak');
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
INSERT INTO `petugas` VALUES (3, 'M Yudha', 'yudha', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `petugas` VALUES (103, 'selvi', 'slf', '6969458a143230c308ac0749db4e36ae', '1');

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
INSERT INTO `proyek` VALUES ('1', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/5320 (KHTML, like Gecko) Chrome/15.0.880.0 Safari/5320');
INSERT INTO `proyek` VALUES ('10', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_7) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.808.0 Safari/5322');
INSERT INTO `proyek` VALUES ('100', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/5322 (KHTML, like Gecko) Chrome/15.0.841.0 Safari/5322');
INSERT INTO `proyek` VALUES ('11', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5331 (KHTML, like Gecko) Chrome/14.0.803.0 Safari/5331');
INSERT INTO `proyek` VALUES ('12', 'Mozilla/5.0 (Windows 98) AppleWebKit/5332 (KHTML, like Gecko) Chrome/13.0.808.0 Safari/5332');
INSERT INTO `proyek` VALUES ('14', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.873.0 Safari/5310');
INSERT INTO `proyek` VALUES ('15', 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/5330 (KHTML, like Gecko) Chrome/15.0.845.0 Safari/5330');
INSERT INTO `proyek` VALUES ('16', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5330 (KHTML, like Gecko) Chrome/14.0.858.0 Safari/5330');
INSERT INTO `proyek` VALUES ('17', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5311 (KHTML, like Gecko) Chrome/13.0.867.0 Safari/5311');
INSERT INTO `proyek` VALUES ('18', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/5320 (KHTML, like Gecko) Chrome/13.0.892.0 Safari/5320');
INSERT INTO `proyek` VALUES ('19', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5362 (KHTML, like Gecko) Chrome/15.0.835.0 Safari/5362');
INSERT INTO `proyek` VALUES ('2', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_1) AppleWebKit/5322 (KHTML, like Gecko) Chrome/14.0.845.0 Safari/5322');
INSERT INTO `proyek` VALUES ('20', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_3) AppleWebKit/5342 (KHTML, like Gecko) Chrome/13.0.806.0 Safari/5342');
INSERT INTO `proyek` VALUES ('21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_5_4) AppleWebKit/5361 (KHTML, like Gecko) Chrome/13.0.878.0 Safari/5361');
INSERT INTO `proyek` VALUES ('22', 'Mozilla/5.0 (Windows 98) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.834.0 Safari/5341');
INSERT INTO `proyek` VALUES ('24', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_1) AppleWebKit/5340 (KHTML, like Gecko) Chrome/14.0.836.0 Safari/5340');
INSERT INTO `proyek` VALUES ('25', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_4) AppleWebKit/5321 (KHTML, like Gecko) Chrome/13.0.827.0 Safari/5321');
INSERT INTO `proyek` VALUES ('26', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5311 (KHTML, like Gecko) Chrome/15.0.874.0 Safari/5311');
INSERT INTO `proyek` VALUES ('27', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.822.0 Safari/5350');
INSERT INTO `proyek` VALUES ('28', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5330 (KHTML, like Gecko) Chrome/15.0.847.0 Safari/5330');
INSERT INTO `proyek` VALUES ('29', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5341 (KHTML, like Gecko) Chrome/14.0.881.0 Safari/5341');
INSERT INTO `proyek` VALUES ('3', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_8) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.879.0 Safari/5322');
INSERT INTO `proyek` VALUES ('30', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.855.0 Safari/5312');
INSERT INTO `proyek` VALUES ('31', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/5362 (KHTML, like Gecko) Chrome/15.0.861.0 Safari/5362');
INSERT INTO `proyek` VALUES ('32', 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/5312 (KHTML, like Gecko) Chrome/15.0.853.0 Safari/5312');
INSERT INTO `proyek` VALUES ('33', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_6) AppleWebKit/5340 (KHTML, like Gecko) Chrome/13.0.859.0 Safari/5340');
INSERT INTO `proyek` VALUES ('34', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5331 (KHTML, like Gecko) Chrome/13.0.810.0 Safari/5331');
INSERT INTO `proyek` VALUES ('35', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_9) AppleWebKit/5321 (KHTML, like Gecko) Chrome/14.0.876.0 Safari/5321');
INSERT INTO `proyek` VALUES ('36', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5332 (KHTML, like Gecko) Chrome/15.0.851.0 Safari/5332');
INSERT INTO `proyek` VALUES ('37', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5311 (KHTML, like Gecko) Chrome/14.0.840.0 Safari/5311');
INSERT INTO `proyek` VALUES ('38', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_8_4) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.812.0 Safari/5322');
INSERT INTO `proyek` VALUES ('39', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_2) AppleWebKit/5320 (KHTML, like Gecko) Chrome/13.0.872.0 Safari/5320');
INSERT INTO `proyek` VALUES ('4', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5360 (KHTML, like Gecko) Chrome/15.0.804.0 Safari/5360');
INSERT INTO `proyek` VALUES ('40', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5352 (KHTML, like Gecko) Chrome/14.0.816.0 Safari/5352');
INSERT INTO `proyek` VALUES ('41', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5321 (KHTML, like Gecko) Chrome/13.0.843.0 Safari/5321');
INSERT INTO `proyek` VALUES ('42', 'Mozilla/5.0 (Windows CE) AppleWebKit/5332 (KHTML, like Gecko) Chrome/14.0.878.0 Safari/5332');
INSERT INTO `proyek` VALUES ('43', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_1) AppleWebKit/5312 (KHTML, like Gecko) Chrome/13.0.808.0 Safari/5312');
INSERT INTO `proyek` VALUES ('44', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5320 (KHTML, like Gecko) Chrome/15.0.848.0 Safari/5320');
INSERT INTO `proyek` VALUES ('45', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_8_6) AppleWebKit/5340 (KHTML, like Gecko) Chrome/14.0.893.0 Safari/5340');
INSERT INTO `proyek` VALUES ('46', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/5342 (KHTML, like Gecko) Chrome/15.0.871.0 Safari/5342');
INSERT INTO `proyek` VALUES ('47', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_0) AppleWebKit/5362 (KHTML, like Gecko) Chrome/13.0.863.0 Safari/5362');
INSERT INTO `proyek` VALUES ('48', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/5351 (KHTML, like Gecko) Chrome/15.0.813.0 Safari/5351');
INSERT INTO `proyek` VALUES ('49', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5352 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5352');
INSERT INTO `proyek` VALUES ('5', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/5332 (KHTML, like Gecko) Chrome/14.0.824.0 Safari/5332');
INSERT INTO `proyek` VALUES ('50', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.887.0 Safari/5322');
INSERT INTO `proyek` VALUES ('51', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.838.0 Safari/5350');
INSERT INTO `proyek` VALUES ('52', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5352 (KHTML, like Gecko) Chrome/14.0.881.0 Safari/5352');
INSERT INTO `proyek` VALUES ('53', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_3) AppleWebKit/5330 (KHTML, like Gecko) Chrome/14.0.803.0 Safari/5330');
INSERT INTO `proyek` VALUES ('54', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5350 (KHTML, like Gecko) Chrome/15.0.828.0 Safari/5350');
INSERT INTO `proyek` VALUES ('55', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5321 (KHTML, like Gecko) Chrome/13.0.822.0 Safari/5321');
INSERT INTO `proyek` VALUES ('56', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/5360 (KHTML, like Gecko) Chrome/13.0.809.0 Safari/5360');
INSERT INTO `proyek` VALUES ('57', 'Mozilla/5.0 (Windows 95) AppleWebKit/5351 (KHTML, like Gecko) Chrome/14.0.831.0 Safari/5351');
INSERT INTO `proyek` VALUES ('58', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/5341 (KHTML, like Gecko) Chrome/14.0.820.0 Safari/5341');
INSERT INTO `proyek` VALUES ('59', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_8_7) AppleWebKit/5352 (KHTML, like Gecko) Chrome/15.0.819.0 Safari/5352');
INSERT INTO `proyek` VALUES ('6', 'Mozilla/5.0 (Windows NT 5.2) AppleWebKit/5351 (KHTML, like Gecko) Chrome/14.0.800.0 Safari/5351');
INSERT INTO `proyek` VALUES ('60', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_0) AppleWebKit/5341 (KHTML, like Gecko) Chrome/14.0.880.0 Safari/5341');
INSERT INTO `proyek` VALUES ('61', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5311 (KHTML, like Gecko) Chrome/14.0.835.0 Safari/5311');
INSERT INTO `proyek` VALUES ('62', 'Mozilla/5.0 (Windows CE) AppleWebKit/5340 (KHTML, like Gecko) Chrome/15.0.822.0 Safari/5340');
INSERT INTO `proyek` VALUES ('63', 'Mozilla/5.0 (Windows 98; Win 9x 4.90) AppleWebKit/5331 (KHTML, like Gecko) Chrome/13.0.887.0 Safari/5331');
INSERT INTO `proyek` VALUES ('64', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.857.0 Safari/5310');
INSERT INTO `proyek` VALUES ('65', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_5) AppleWebKit/5310 (KHTML, like Gecko) Chrome/13.0.849.0 Safari/5310');
INSERT INTO `proyek` VALUES ('66', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_9) AppleWebKit/5332 (KHTML, like Gecko) Chrome/15.0.852.0 Safari/5332');
INSERT INTO `proyek` VALUES ('67', 'Mozilla/5.0 (Windows 98; Win 9x 4.90) AppleWebKit/5331 (KHTML, like Gecko) Chrome/14.0.805.0 Safari/5331');
INSERT INTO `proyek` VALUES ('68', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5341 (KHTML, like Gecko) Chrome/14.0.846.0 Safari/5341');
INSERT INTO `proyek` VALUES ('69', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_0) AppleWebKit/5350 (KHTML, like Gecko) Chrome/15.0.829.0 Safari/5350');
INSERT INTO `proyek` VALUES ('7', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5352 (KHTML, like Gecko) Chrome/14.0.868.0 Safari/5352');
INSERT INTO `proyek` VALUES ('70', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_8) AppleWebKit/5340 (KHTML, like Gecko) Chrome/15.0.859.0 Safari/5340');
INSERT INTO `proyek` VALUES ('71', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4) AppleWebKit/5312 (KHTML, like Gecko) Chrome/15.0.894.0 Safari/5312');
INSERT INTO `proyek` VALUES ('72', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5330 (KHTML, like Gecko) Chrome/13.0.840.0 Safari/5330');
INSERT INTO `proyek` VALUES ('73', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5362 (KHTML, like Gecko) Chrome/14.0.801.0 Safari/5362');
INSERT INTO `proyek` VALUES ('74', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/5351 (KHTML, like Gecko) Chrome/14.0.863.0 Safari/5351');
INSERT INTO `proyek` VALUES ('75', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_0) AppleWebKit/5350 (KHTML, like Gecko) Chrome/14.0.856.0 Safari/5350');
INSERT INTO `proyek` VALUES ('76', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5341 (KHTML, like Gecko) Chrome/14.0.809.0 Safari/5341');
INSERT INTO `proyek` VALUES ('77', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5350 (KHTML, like Gecko) Chrome/15.0.846.0 Safari/5350');
INSERT INTO `proyek` VALUES ('78', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5331 (KHTML, like Gecko) Chrome/14.0.876.0 Safari/5331');
INSERT INTO `proyek` VALUES ('79', 'Mozilla/5.0 (Windows CE) AppleWebKit/5342 (KHTML, like Gecko) Chrome/15.0.803.0 Safari/5342');
INSERT INTO `proyek` VALUES ('8', 'Mozilla/5.0 (Windows 98) AppleWebKit/5332 (KHTML, like Gecko) Chrome/15.0.877.0 Safari/5332');
INSERT INTO `proyek` VALUES ('80', 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_6) AppleWebKit/5361 (KHTML, like Gecko) Chrome/13.0.836.0 Safari/5361');
INSERT INTO `proyek` VALUES ('81', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_7) AppleWebKit/5332 (KHTML, like Gecko) Chrome/13.0.887.0 Safari/5332');
INSERT INTO `proyek` VALUES ('82', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5311 (KHTML, like Gecko) Chrome/15.0.830.0 Safari/5311');
INSERT INTO `proyek` VALUES ('83', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5331 (KHTML, like Gecko) Chrome/14.0.805.0 Safari/5331');
INSERT INTO `proyek` VALUES ('84', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5320 (KHTML, like Gecko) Chrome/13.0.829.0 Safari/5320');
INSERT INTO `proyek` VALUES ('85', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5312 (KHTML, like Gecko) Chrome/13.0.810.0 Safari/5312');
INSERT INTO `proyek` VALUES ('86', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_2) AppleWebKit/5360 (KHTML, like Gecko) Chrome/15.0.819.0 Safari/5360');
INSERT INTO `proyek` VALUES ('87', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5320 (KHTML, like Gecko) Chrome/14.0.802.0 Safari/5320');
INSERT INTO `proyek` VALUES ('88', 'Mozilla/5.0 (Windows NT 5.0) AppleWebKit/5321 (KHTML, like Gecko) Chrome/15.0.809.0 Safari/5321');
INSERT INTO `proyek` VALUES ('89', 'Mozilla/5.0 (Windows CE) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.885.0 Safari/5341');
INSERT INTO `proyek` VALUES ('9', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_8_9) AppleWebKit/5341 (KHTML, like Gecko) Chrome/15.0.881.0 Safari/5341');
INSERT INTO `proyek` VALUES ('90', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5340 (KHTML, like Gecko) Chrome/13.0.893.0 Safari/5340');
INSERT INTO `proyek` VALUES ('91', 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/5341 (KHTML, like Gecko) Chrome/15.0.828.0 Safari/5341');
INSERT INTO `proyek` VALUES ('92', 'Mozilla/5.0 (Windows NT 4.0) AppleWebKit/5322 (KHTML, like Gecko) Chrome/13.0.824.0 Safari/5322');
INSERT INTO `proyek` VALUES ('93', 'Mozilla/5.0 (X11; Linuxx86_64) AppleWebKit/5311 (KHTML, like Gecko) Chrome/13.0.854.0 Safari/5311');
INSERT INTO `proyek` VALUES ('94', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_6) AppleWebKit/5352 (KHTML, like Gecko) Chrome/15.0.874.0 Safari/5352');
INSERT INTO `proyek` VALUES ('95', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_0) AppleWebKit/5341 (KHTML, like Gecko) Chrome/13.0.809.0 Safari/5341');
INSERT INTO `proyek` VALUES ('96', 'Mozilla/5.0 (Windows 98; Win 9x 4.90) AppleWebKit/5321 (KHTML, like Gecko) Chrome/14.0.898.0 Safari/5321');
INSERT INTO `proyek` VALUES ('97', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7_8) AppleWebKit/5362 (KHTML, like Gecko) Chrome/14.0.820.0 Safari/5362');
INSERT INTO `proyek` VALUES ('98', 'Mozilla/5.0 (Windows NT 5.01) AppleWebKit/5331 (KHTML, like Gecko) Chrome/15.0.803.0 Safari/5331');
INSERT INTO `proyek` VALUES ('99', 'Mozilla/5.0 (X11; Linuxi686) AppleWebKit/5342 (KHTML, like Gecko) Chrome/14.0.801.0 Safari/5342');

-- ----------------------------
-- Table structure for rak_ke
-- ----------------------------
DROP TABLE IF EXISTS `rak_ke`;
CREATE TABLE `rak_ke`  (
  `kd_rak` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_rak` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kd_rak`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rak_ke
-- ----------------------------
INSERT INTO `rak_ke` VALUES ('0', 'Kosong');
INSERT INTO `rak_ke` VALUES ('1', 'Peralatan');
INSERT INTO `rak_ke` VALUES ('2', 'Kayu Balok');

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
INSERT INTO `vendor` VALUES ('10', 'Kerluke Group');
INSERT INTO `vendor` VALUES ('100', 'Goyette-Runolfsdottir');
INSERT INTO `vendor` VALUES ('11', 'Pacocha-Beier');
INSERT INTO `vendor` VALUES ('13', 'Goodwin-Batz');
INSERT INTO `vendor` VALUES ('14', 'Volkman Ltd');
INSERT INTO `vendor` VALUES ('15', 'McLaughlin, Borer and Zboncak');
INSERT INTO `vendor` VALUES ('16', 'Tillman, Goyette and Langworth');
INSERT INTO `vendor` VALUES ('17', 'Schuppe-Zboncak');
INSERT INTO `vendor` VALUES ('18', 'Crist Inc');
INSERT INTO `vendor` VALUES ('19', 'Thiel, Gaylord and Moen');
INSERT INTO `vendor` VALUES ('2', 'Wiegand, Trantow and Schowalter');
INSERT INTO `vendor` VALUES ('20', 'Mante, Jacobson and Mitchell');
INSERT INTO `vendor` VALUES ('21', 'Huel-Abshire');
INSERT INTO `vendor` VALUES ('22', 'Rohan, Hahn and Haley');
INSERT INTO `vendor` VALUES ('23', 'Marks and Sons');
INSERT INTO `vendor` VALUES ('24', 'Bergstrom Inc');
INSERT INTO `vendor` VALUES ('25', 'Moore-Aufderhar');
INSERT INTO `vendor` VALUES ('26', 'Moore, Friesen and Wehner');
INSERT INTO `vendor` VALUES ('27', 'Rippin, Ratke and Jakubowski');
INSERT INTO `vendor` VALUES ('28', 'Boyle-Johnston');
INSERT INTO `vendor` VALUES ('29', 'Pagac, Schamberger and Turcotte');
INSERT INTO `vendor` VALUES ('3', 'Rodriguez, Leffler and Marvin');
INSERT INTO `vendor` VALUES ('30', 'Ledner-Dickens');
INSERT INTO `vendor` VALUES ('31', 'Reilly Inc');
INSERT INTO `vendor` VALUES ('32', 'Orn Ltd');
INSERT INTO `vendor` VALUES ('33', 'Bogisich LLC');
INSERT INTO `vendor` VALUES ('34', 'Collier, Fahey and Tromp');
INSERT INTO `vendor` VALUES ('35', 'Prohaska-Smith');
INSERT INTO `vendor` VALUES ('36', 'McDermott-Barrows');
INSERT INTO `vendor` VALUES ('37', 'Kuphal-Wilkinson');
INSERT INTO `vendor` VALUES ('38', 'Orn, Predovic and Waters');
INSERT INTO `vendor` VALUES ('39', 'Okuneva, Williamson and Konopelski');
INSERT INTO `vendor` VALUES ('4', 'Abernathy Ltd');
INSERT INTO `vendor` VALUES ('40', 'Hudson PLC');
INSERT INTO `vendor` VALUES ('41', 'Hessel Inc');
INSERT INTO `vendor` VALUES ('42', 'Langworth, Schmeler and Murray');
INSERT INTO `vendor` VALUES ('43', 'Gleason and Sons');
INSERT INTO `vendor` VALUES ('44', 'Rowe PLC');
INSERT INTO `vendor` VALUES ('45', 'McClure-Bauch');
INSERT INTO `vendor` VALUES ('46', 'Marvin and Sons');
INSERT INTO `vendor` VALUES ('47', 'Moore Inc');
INSERT INTO `vendor` VALUES ('48', 'Hilll-Klein');
INSERT INTO `vendor` VALUES ('49', 'Botsford and Sons');
INSERT INTO `vendor` VALUES ('5', 'Dooley-Daniel');
INSERT INTO `vendor` VALUES ('50', 'Witting, Wyman and Pollich');
INSERT INTO `vendor` VALUES ('51', 'Cronin, McClure and Ledner');
INSERT INTO `vendor` VALUES ('52', 'Kilback-Greenholt');
INSERT INTO `vendor` VALUES ('53', 'Langworth Ltd');
INSERT INTO `vendor` VALUES ('54', 'Reichert-Dickinson');
INSERT INTO `vendor` VALUES ('55', 'Farrell, Klein and Schmeler');
INSERT INTO `vendor` VALUES ('56', 'Schuppe, Dibbert and Hagenes');
INSERT INTO `vendor` VALUES ('57', 'Lueilwitz, Sawayn and Ritchie');
INSERT INTO `vendor` VALUES ('58', 'Deckow, Kub and Stokes');
INSERT INTO `vendor` VALUES ('59', 'Moen-Skiles');
INSERT INTO `vendor` VALUES ('6', 'Moore LLC');
INSERT INTO `vendor` VALUES ('60', 'Kub, Zemlak and Zieme');
INSERT INTO `vendor` VALUES ('61', 'Ward PLC');
INSERT INTO `vendor` VALUES ('62', 'Zemlak-Mitchell');
INSERT INTO `vendor` VALUES ('63', 'Macejkovic-Connelly');
INSERT INTO `vendor` VALUES ('64', 'Schultz, Murazik and Simonis');
INSERT INTO `vendor` VALUES ('65', 'Paucek, Streich and Hane');
INSERT INTO `vendor` VALUES ('66', 'Herzog-Hickle');
INSERT INTO `vendor` VALUES ('67', 'Yundt, Crooks and Sporer');
INSERT INTO `vendor` VALUES ('68', 'Huel Ltd');
INSERT INTO `vendor` VALUES ('69', 'Abbott-Sauer');
INSERT INTO `vendor` VALUES ('7', 'Kemmer-Kris');
INSERT INTO `vendor` VALUES ('70', 'Runolfsdottir-Crona');
INSERT INTO `vendor` VALUES ('71', 'Zboncak, Willms and Wilderman');
INSERT INTO `vendor` VALUES ('72', 'Mertz and Sons');
INSERT INTO `vendor` VALUES ('73', 'Schmeler LLC');
INSERT INTO `vendor` VALUES ('74', 'Boyle, Barton and Klocko');
INSERT INTO `vendor` VALUES ('75', 'Reichert-Bins');
INSERT INTO `vendor` VALUES ('76', 'Hauck-Witting');
INSERT INTO `vendor` VALUES ('77', 'Durgan-Wunsch');
INSERT INTO `vendor` VALUES ('78', 'Moore-Keebler');
INSERT INTO `vendor` VALUES ('79', 'Wiegand-Dickinson');
INSERT INTO `vendor` VALUES ('8', 'Bernhard, Bednar and Zulauf');
INSERT INTO `vendor` VALUES ('80', 'Leffler-Cruickshank');
INSERT INTO `vendor` VALUES ('81', 'Little-Feest');
INSERT INTO `vendor` VALUES ('82', 'Pagac-Lemke');
INSERT INTO `vendor` VALUES ('83', 'Bosco, Harber and Graham');
INSERT INTO `vendor` VALUES ('84', 'Quigley, Prosacco and Lehner');
INSERT INTO `vendor` VALUES ('86', 'Corwin and Sons');
INSERT INTO `vendor` VALUES ('87', 'Fadel LLC');
INSERT INTO `vendor` VALUES ('88', 'Corkery-Brekke');
INSERT INTO `vendor` VALUES ('89', 'Dare and Sons');
INSERT INTO `vendor` VALUES ('9', 'Fritsch, Douglas and Grady');
INSERT INTO `vendor` VALUES ('90', 'Dickens, Erdman and Emard');
INSERT INTO `vendor` VALUES ('91', 'Kuphal-Towne');
INSERT INTO `vendor` VALUES ('92', 'McCullough-Mante');
INSERT INTO `vendor` VALUES ('93', 'Lockman, Stanton and Bechtelar');
INSERT INTO `vendor` VALUES ('94', 'Shields, Stark and Rutherford');
INSERT INTO `vendor` VALUES ('95', 'Ratke-Morissette');
INSERT INTO `vendor` VALUES ('96', 'Keeling-Zulauf');
INSERT INTO `vendor` VALUES ('97', 'Graham LLC');
INSERT INTO `vendor` VALUES ('98', 'Jerde-Blick');
INSERT INTO `vendor` VALUES ('99', 'Fisher-Gerhold');

SET FOREIGN_KEY_CHECKS = 1;
