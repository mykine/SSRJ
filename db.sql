/*
SQLyog Ultimate v11.25 (64 bit)
MySQL - 5.5.40 : Database - ssrj
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ssrj` /*!40100 DEFAULT CHARACTER SET gbk */;

USE `ssrj`;

/*Table structure for table `ss_building` */

DROP TABLE IF EXISTS `ss_building`;

CREATE TABLE `ss_building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loupan_id` int(11) NOT NULL COMMENT '外键：楼盘id',
  `no` int(11) DEFAULT NULL COMMENT '楼栋编号',
  `name` varchar(100) DEFAULT NULL COMMENT '楼栋名称',
  `cengshu` int(11) DEFAULT NULL COMMENT '层数',
  `taoshu` int(11) DEFAULT NULL COMMENT '单层最多套数',
  `cenggao` decimal(18,2) DEFAULT NULL COMMENT '层高',
  `face` varchar(100) DEFAULT NULL COMMENT '朝向',
  `diffname` varchar(100) DEFAULT NULL COMMENT '差价名称',
  `base_price` decimal(18,2) DEFAULT NULL COMMENT '楼栋基价',
  `type` int(11) DEFAULT NULL COMMENT '楼栋用途类型:1=住宅,2=商业',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_building` */

/*Table structure for table `ss_house` */

DROP TABLE IF EXISTS `ss_house`;

CREATE TABLE `ss_house` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loupan_id` int(11) NOT NULL COMMENT '外键:楼盘id',
  `building_id` int(11) NOT NULL COMMENT '外键:楼栋id',
  `house_type_id` int(11) NOT NULL COMMENT '外键:户型id',
  `house_state_id` int(11) DEFAULT NULL COMMENT '外键:房屋状态id',
  `ceng_no` int(11) NOT NULL COMMENT '楼层号',
  `tao_no` int(11) DEFAULT NULL COMMENT '房屋套号',
  `sate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_house` */

/*Table structure for table `ss_house_state` */

DROP TABLE IF EXISTS `ss_house_state`;

CREATE TABLE `ss_house_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '房屋状态名称',
  `sort` int(11) DEFAULT NULL COMMENT '状态排序序号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_house_state` */

/*Table structure for table `ss_house_type` */

DROP TABLE IF EXISTS `ss_house_type`;

CREATE TABLE `ss_house_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loupan_id` int(11) NOT NULL COMMENT '外键：楼盘id',
  `name` varchar(100) CHARACTER SET gbk NOT NULL COMMENT '户型名称',
  `building_area` decimal(18,2) NOT NULL COMMENT '建筑面积',
  `equally_shared_price` decimal(18,2) DEFAULT NULL COMMENT '公摊价',
  `equally_shared_coeffcient` decimal(18,2) DEFAULT NULL COMMENT '公摊系数',
  `indoor_area` decimal(18,2) DEFAULT NULL COMMENT '套内面积',
  `room` int(11) DEFAULT NULL COMMENT '几室',
  `hall` int(11) DEFAULT NULL COMMENT '几厅',
  `toilet` int(11) DEFAULT NULL COMMENT '几卫',
  `kitchen` int(11) DEFAULT NULL COMMENT '几厨房',
  `balcony` int(11) DEFAULT NULL COMMENT '几阳台',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_house_type` */

/*Table structure for table `ss_loupan` */

DROP TABLE IF EXISTS `ss_loupan`;

CREATE TABLE `ss_loupan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '楼盘名',
  `land_area` decimal(18,2) DEFAULT NULL COMMENT '占地面积',
  `sum_area` decimal(18,2) DEFAULT NULL COMMENT '总面积',
  `pic` varchar(4000) DEFAULT NULL COMMENT '楼盘图片',
  `volume` decimal(18,2) DEFAULT NULL COMMENT '容积率',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_loupan` */

/*Table structure for table `ss_tag_position` */

DROP TABLE IF EXISTS `ss_tag_position`;

CREATE TABLE `ss_tag_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loupan_id` int(11) NOT NULL COMMENT '外键:楼盘id',
  `building_id` int(11) NOT NULL COMMENT '外键:楼栋id',
  `type` int(11) DEFAULT NULL COMMENT '建筑类型:1=住宅,2=商业',
  `tag_name` varchar(100) DEFAULT NULL COMMENT '坐标点名称',
  `x_value` int(11) DEFAULT NULL COMMENT 'x坐标值',
  `y_value` int(11) DEFAULT NULL COMMENT 'y坐标值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_tag_position` */

/*Table structure for table `ss_worker` */

DROP TABLE IF EXISTS `ss_worker`;

CREATE TABLE `ss_worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET gbk NOT NULL,
  `born` date DEFAULT '1970-01-01' COMMENT '出生年月',
  `logintime` datetime DEFAULT NULL COMMENT '最近登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ss_worker` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
