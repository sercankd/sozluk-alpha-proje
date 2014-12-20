/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : proje2

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-08-29 02:46:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ayarlar`
-- ----------------------------
DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE `ayarlar` (
  `site_durumu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yeni_uye` int(3) DEFAULT NULL,
  `sozluk_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyelik_tipi` int(3) DEFAULT NULL,
  `kayit_nesil` int(2) DEFAULT NULL,
  `sayfa_basi_entry` int(5) DEFAULT '20'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of ayarlar
-- ----------------------------
INSERT INTO `ayarlar` VALUES ('online', '1', 'Test Sözlük', null, '1', '20');

-- ----------------------------
-- Table structure for `basliklar`
-- ----------------------------
DROP TABLE IF EXISTS `basliklar`;
CREATE TABLE `basliklar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `yazar` text COLLATE utf8_turkish_ci NOT NULL,
  `hit` int(11) NOT NULL,
  `sil_mod` text COLLATE utf8_turkish_ci NOT NULL,
  `sil_tarih` datetime NOT NULL,
  `sil_sebep` text COLLATE utf8_turkish_ci NOT NULL,
  `entry_sayisi` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of basliklar
-- ----------------------------
INSERT INTO `basliklar` VALUES ('1', 'test', '127.0.0.1', '2011-07-02 01:56:52', 'claw', '5', '', '0000-00-00 00:00:00', '', '2');
INSERT INTO `basliklar` VALUES ('2', 'test2', '127.0.0.1', '2011-07-02 02:02:17', 'claw', '51', '', '0000-00-00 00:00:00', '', '0');
INSERT INTO `basliklar` VALUES ('3', 'deneme bir ki', '127.0.0.1', '2011-07-27 03:26:19', 'claw', '1', '', '0000-00-00 00:00:00', '', '0');
INSERT INTO `basliklar` VALUES ('5', 'off', '127.0.0.1', '2011-08-26 06:08:18', 'claw', '0', '', '0000-00-00 00:00:00', '', '0');
INSERT INTO `basliklar` VALUES ('6', '', '127.0.0.1', '2011-08-27 06:08:21', 'claw', '0', '', '0000-00-00 00:00:00', '', '0');

-- ----------------------------
-- Table structure for `cevrimiciler`
-- ----------------------------
DROP TABLE IF EXISTS `cevrimiciler`;
CREATE TABLE `cevrimiciler` (
  `nick` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ondurum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  KEY `nick` (`nick`),
  KEY `ip` (`ip`),
  KEY `ondurum` (`ondurum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of cevrimiciler
-- ----------------------------

-- ----------------------------
-- Table structure for `entryler`
-- ----------------------------
DROP TABLE IF EXISTS `entryler`;
CREATE TABLE `entryler` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `baslik_id` int(11) NOT NULL,
  `entry` text COLLATE utf8_turkish_ci NOT NULL,
  `yazar` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `tarih_yeni` datetime NOT NULL,
  `oy_arti` int(11) NOT NULL DEFAULT '0',
  `oy_notr` int(11) NOT NULL DEFAULT '0',
  `oy_eksi` int(11) NOT NULL DEFAULT '0',
  `sil_mod` text COLLATE utf8_turkish_ci NOT NULL,
  `sil_sebep` text COLLATE utf8_turkish_ci NOT NULL,
  `sil_tarih` datetime NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=12477 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of entryler
-- ----------------------------
INSERT INTO `entryler` VALUES ('12412', '1', '1', 'test<br /> lorem ipsum<br /> dolor sit amet', 'claw', '127.0.0.1', '2011-08-11 12:10:21', '2011-08-11 12:10:27', '1241', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12413', '2', '1', 'sdfgsdf', 'gclaw', '127.0.0.1', '2011-08-22 19:13:22', '0000-00-00 00:00:00', '55', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12414', '1', '2', 'anan', 'claw', '127.0.0.1', '2011-08-24 05:08:24', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12415', '1', '3', 'ananızın amı %%^+&3463', 'claw', '127.0.0.1', '2011-08-24 05:31:45', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12416', '0', '1', 'anan', 'ananteam', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12417', '0', '1', 'anan', 'ananteam', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12418', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:25', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12419', '0', '1', 'heheheheheh', 'claw', '127.0.0.1', '2011-08-26 06:08:44', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12420', '0', '4', 'ehuehuehe', 'claw', '127.0.0.1', '2011-08-26 06:08:38', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12421', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:04', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12422', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:05', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12423', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:06', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12424', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:06', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12425', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:06', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12426', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:06', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12427', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:07', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12428', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:07', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12429', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:07', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12430', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:07', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12431', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:07', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12432', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:07', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12433', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:08', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12434', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:08', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12435', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:08', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12436', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:08', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12437', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:29', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12438', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12439', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12440', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12441', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12442', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12443', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12444', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12445', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:30', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12446', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12447', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12448', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12449', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12450', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12451', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12452', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12453', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12454', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12455', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12456', '0', '1', 'test', 'test', '127.0.0.1', '2011-08-26 06:08:31', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12457', '0', '5', 'ehuehuehe', 'claw', '127.0.0.1', '2011-08-26 06:08:18', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12458', '0', '3', 'ehuehue', 'claw', '127.0.0.1', '2011-08-26 06:08:37', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12459', '0', '5', 'eheheh', 'claw', '127.0.0.1', '2011-08-26 06:08:12', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12460', '0', '5', 'ahahah', 'claw', '127.0.0.1', '2011-08-26 06:08:32', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12461', '0', '5', 'ehe', 'claw', '127.0.0.1', '2011-08-26 06:08:38', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12462', '0', '3', 'deneme 1 2', 'claw', '127.0.0.1', '2011-08-26 07:08:54', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12463', '0', '3', 'eheheh', 'claw', '127.0.0.1', '2011-08-26 07:08:49', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12464', '0', '3', 'asdasf', 'claw', '127.0.0.1', '2011-08-26 07:08:24', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12465', '0', '3', 'test', 'claw', '127.0.0.1', '2011-08-26 07:08:55', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12466', '0', '6', 'test', 'claw', '127.0.0.1', '2011-08-27 06:08:21', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12467', '0', '6', 'tey', 'claw', '127.0.0.1', '2011-08-27 09:08:24', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12468', '0', '6', 'teytey', 'claw', '127.0.0.1', '2011-08-27 09:08:04', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12469', '0', '6', 'tey', 'claw', '127.0.0.1', '2011-08-27 09:08:56', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12470', '0', '6', '', 'claw', '127.0.0.1', '2011-08-27 09:08:12', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12471', '0', '6', 'ehe', 'claw', '127.0.0.1', '2011-08-27 09:08:26', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12472', '0', '6', 'asdafg', 'claw', '127.0.0.1', '2011-08-27 09:08:38', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12473', '0', '6', 'hey', 'claw', '127.0.0.1', '2011-08-27 09:08:18', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12474', '0', '6', 'ehuhe', 'claw', '127.0.0.1', '2011-08-27 09:08:44', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12475', '0', '6', 'ehuhe', 'claw', '127.0.0.1', '2011-08-27 10:08:02', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `entryler` VALUES ('12476', '0', '6', 'gheheh', 'claw', '127.0.0.1', '2011-08-27 10:08:38', '0000-00-00 00:00:00', '0', '0', '0', '', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `en_iyiler`
-- ----------------------------
DROP TABLE IF EXISTS `en_iyiler`;
CREATE TABLE `en_iyiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` text COLLATE utf8_turkish_ci,
  `oylar` text COLLATE utf8_turkish_ci,
  `yazar` text COLLATE utf8_turkish_ci,
  `baslik` text COLLATE utf8_turkish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of en_iyiler
-- ----------------------------

-- ----------------------------
-- Table structure for `ip_ban`
-- ----------------------------
DROP TABLE IF EXISTS `ip_ban`;
CREATE TABLE `ip_ban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of ip_ban
-- ----------------------------

-- ----------------------------
-- Table structure for `istatistikler`
-- ----------------------------
DROP TABLE IF EXISTS `istatistikler`;
CREATE TABLE `istatistikler` (
  `baslik_sayisi` int(11) NOT NULL,
  `toplam_entry` int(11) NOT NULL,
  `silinen_baslik` int(11) NOT NULL,
  `silinen_entry` int(11) NOT NULL,
  `toplam_yazar` int(32) NOT NULL,
  `toplam_mod` int(11) NOT NULL,
  `toplam_admin` int(11) NOT NULL,
  `en_hit_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `en_cok_entry_girilen_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `en_iyi_entryler` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of istatistikler
-- ----------------------------

-- ----------------------------
-- Table structure for `nesiller`
-- ----------------------------
DROP TABLE IF EXISTS `nesiller`;
CREATE TABLE `nesiller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nesil_baslik` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of nesiller
-- ----------------------------

-- ----------------------------
-- Table structure for `olanbiten`
-- ----------------------------
DROP TABLE IF EXISTS `olanbiten`;
CREATE TABLE `olanbiten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mod` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of olanbiten
-- ----------------------------

-- ----------------------------
-- Table structure for `ozel_mesajlar`
-- ----------------------------
DROP TABLE IF EXISTS `ozel_mesajlar`;
CREATE TABLE `ozel_mesajlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `alici` text COLLATE utf8_turkish_ci NOT NULL,
  `gonderen` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `okundu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of ozel_mesajlar
-- ----------------------------

-- ----------------------------
-- Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `test` text COLLATE utf8_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('test');
INSERT INTO `test` VALUES ('test2');

-- ----------------------------
-- Table structure for `uyeler`
-- ----------------------------
DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dogumyili` int(4) NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `son_ip` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `online` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `nesil` int(11) NOT NULL,
  `son_giris` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of uyeler
-- ----------------------------
INSERT INTO `uyeler` VALUES ('2', 'claw', 'test', '098f6bcd4621d373cade4e832627b4f6', 'webbilgi@gmail.com', '1', '2', '0', '', '', '', '', '', '', '0', '');
