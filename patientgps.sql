/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : patientgps

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-04-07 01:24:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for patient
-- ----------------------------
DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pt_pname` varchar(10) DEFAULT NULL,
  `pt_fname` varchar(150) DEFAULT NULL,
  `pt_lname` varchar(150) DEFAULT NULL,
  `pt_cid` varchar(13) DEFAULT NULL,
  `pt_sex` varchar(2) DEFAULT NULL,
  `pt_house_no` varchar(15) DEFAULT '',
  `pt_moo` varchar(3) DEFAULT NULL,
  `pt_sub_district` varchar(6) DEFAULT NULL,
  `pt_district` varchar(4) DEFAULT NULL,
  `pt_province` varchar(2) DEFAULT NULL,
  `pt_telphone` varchar(30) DEFAULT NULL,
  `pt_img` blob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of patient
-- ----------------------------
INSERT INTO `patient` VALUES ('1', 'นาย', 'ทดสอบระบบ', 'ทุกระบบการทำงาน', '1234567890123', '1', '1111', '124', '123123', '3213', '13', '1234578912354879', null);
INSERT INTO `patient` VALUES ('2', 'นางสาว', 'สายหยุด', 'หยุดงาน', '9877889798998', '2', '148', '598', '415498', '1212', '12', null, null);
