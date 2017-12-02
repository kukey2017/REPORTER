-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `title` varchar(300) NOT NULL COMMENT '文章標題',
  `content` text NOT NULL COMMENT '文章內容',
  `username` varchar(65) NOT NULL COMMENT '作者',
  `create_time` datetime NOT NULL COMMENT '建立文章日期時間',
  `update_time` datetime NOT NULL COMMENT '最後修改日期時間',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2017-11-18 01:22:42
