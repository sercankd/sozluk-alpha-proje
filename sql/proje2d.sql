/*
Navicat MySQL Data Transfer

Source Server         : Sercan
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : proje2

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2011-06-24 10:22:16
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
  `kayit_nesil` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of ayarlar
-- ----------------------------
INSERT INTO ayarlar VALUES ('online', '1', 'Test Sözlük', null, '1');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of basliklar
-- ----------------------------

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` int(11) NOT NULL,
  `entry` text COLLATE utf8_turkish_ci NOT NULL,
  `yazar` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `tarih_yeni` datetime NOT NULL,
  `oy_arti` int(11) NOT NULL,
  `oy_eksi` int(11) NOT NULL,
  `sil_mod` text COLLATE utf8_turkish_ci NOT NULL,
  `sil_sebep` text COLLATE utf8_turkish_ci NOT NULL,
  `sil_tarih` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of entryler
-- ----------------------------

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
INSERT INTO test VALUES ('test');
INSERT INTO test VALUES ('test2');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of uyeler
-- ----------------------------
INSERT INTO uyeler VALUES ('2', 'claw', 'test', '123456', 'webbilgi@gmail.com', '1', '2', '0', '', '', '', '', '', '', '0');
