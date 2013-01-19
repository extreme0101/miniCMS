/*
 Navicat Premium Data Transfer

 Source Server         : v3
 Source Server Type    : MySQL
 Source Server Version : 50166
 Source Host           : ns5.mng.cc
 Source Database       : azmn_v3

 Target Server Type    : MySQL
 Target Server Version : 50166
 File Encoding         : utf-8

 Date: 01/20/2013 00:50:12 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_banners`
-- ----------------------------
DROP TABLE IF EXISTS `t_banners`;
CREATE TABLE `t_banners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `added_by` int(11) unsigned NOT NULL,
  `attr_title` varchar(255) DEFAULT NULL,
  `attr_href` varchar(255) DEFAULT NULL,
  `attr_onclick` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `hits` int(11) DEFAULT NULL,
  `max_hits` int(11) DEFAULT NULL,
  `max_clicks` int(11) NOT NULL,
  `clicked` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_categories`
-- ----------------------------
DROP TABLE IF EXISTS `t_categories`;
CREATE TABLE `t_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `depth` int(11) unsigned NOT NULL DEFAULT '0',
  `added_by` int(11) unsigned NOT NULL,
  `lft` int(11) unsigned NOT NULL,
  `rgt` int(11) unsigned NOT NULL,
  `pos` float(11,0) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'mn',
  `st` varchar(255) NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `attr_href` varchar(255) DEFAULT NULL,
  `attr_title` varchar(255) DEFAULT NULL,
  `attr_onclick` varchar(255) DEFAULT NULL,
  `attr_target` varchar(255) NOT NULL DEFAULT '_self',
  `per_page_content` int(11) unsigned DEFAULT '20',
  `hits` int(11) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_categories`
-- ----------------------------
BEGIN;
INSERT INTO `t_categories` VALUES ('0', '0', '0', '1', '1', '16', '1', 'mn', '0', 'text', 'Root', '', '', '', '', null, '0', null, null), ('44', '0', '1', '1', '2', '13', '1', 'en', '0', 'text', 'Java', '', '', '', '', null, '0', null, null), ('77', '44', '2', '1', '3', '12', '1', 'mn', '0', 'text', 'subJava1', '', '', '', '', null, '0', null, null), ('78', '77', '3', '1', '4', '5', '1', 'mn', '0', 'text', 'subLeftJava12', '', '', '', '', null, '0', null, null), ('79', '77', '3', '1', '6', '11', '1', 'mn', '0', 'text', 'subLeftJava13', '', '', '', '', null, '0', null, null), ('80', '79', '4', '1', '7', '10', '1', 'mn', '0', 'text', '4java1', '', '', '', '', null, '0', null, null), ('81', '0', '1', '1', '14', '15', '1', 'mn', '0', 'text', 'PHP', '', '', '', '', null, '0', null, null), ('82', '80', '5', '1', '8', '9', '1', 'mn', '0', 'text', 'java25', '', '', '', '', null, '0', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `t_contents`
-- ----------------------------
DROP TABLE IF EXISTS `t_contents`;
CREATE TABLE `t_contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `added_by` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `lang` varchar(255) NOT NULL DEFAULT 'mn',
  `st` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `show_title` tinyint(1) DEFAULT NULL,
  `use_comment` tinyint(1) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descr` text,
  `body` longtext NOT NULL,
  `hits` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_dem_answers`
-- ----------------------------
DROP TABLE IF EXISTS `t_dem_answers`;
CREATE TABLE `t_dem_answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `added_by` int(11) unsigned NOT NULL,
  `question_id` int(11) unsigned DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `thumb_up` int(11) DEFAULT '0',
  `thumb_down` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_dem_questions`
-- ----------------------------
DROP TABLE IF EXISTS `t_dem_questions`;
CREATE TABLE `t_dem_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `added_by` int(11) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `priority` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `thumb_up` int(11) DEFAULT '0',
  `thumb_down` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_dem_questions`
-- ----------------------------
BEGIN;
INSERT INTO `t_dem_questions` VALUES ('1', '1', 'DASdwD', 'sdcsac', '1', null, '1', '1'), ('2', '1', 'DASdwD', 'sdcsac', '1', '2013-01-18 02:44:05', '1', '1'), ('3', '1', 'DASDas', ' acasc', '1', null, '1', '1'), ('4', '1', '', ' asdf', '1', '9632-01-18 13:58:44', '0', '0'), ('5', '1', '', ' asdf', '1', '9720-01-18 13:58:44', '0', '0'), ('6', '1', '', ' asdf', '1', '2013-01-18 03:09:53', '0', '0'), ('7', '1', 'ganaa', 'scscdsd ', '1', '2013-01-18 03:11:12', '0', '0'), ('8', '1', 'ganaa', 'scscdsd ', '1', '2013-01-18 03:12:10', '0', '0'), ('9', '1', 'ganaa', 'scscdsd ', '1', '2013-01-18 03:12:21', '0', '0'), ('10', '1', '', ' asdf', '1', '2013-01-18 03:13:01', '0', '0'), ('11', '1', 'test', ' test', '1', '2013-01-18 03:18:12', '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `t_test`
-- ----------------------------
DROP TABLE IF EXISTS `t_test`;
CREATE TABLE `t_test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `content` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_test`
-- ----------------------------
BEGIN;
INSERT INTO `t_test` VALUES ('1', 'sdf', 'aaaa'), ('2', 'ddd', 'sss'), ('3', 'asd', 'sddd'), ('4', 'dd', 'ss'), ('5', 'dd', 'ee'), ('6', 'ds', 'sd'), ('7', 'asd', 'fff'), ('8', 'Bold', 'abcdef'), ('9', 'asdf', 'asdf');
COMMIT;

-- ----------------------------
--  Table structure for `t_user_login_history`
-- ----------------------------
DROP TABLE IF EXISTS `t_user_login_history`;
CREATE TABLE `t_user_login_history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT '0',
  `login_datetime` datetime DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL,
  `other` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_user_login_history`
-- ----------------------------
BEGIN;
INSERT INTO `t_user_login_history` VALUES ('28', '27', '2013-01-18 18:47:11', '122.201.19.26', null);
COMMIT;

-- ----------------------------
--  Table structure for `t_users`
-- ----------------------------
DROP TABLE IF EXISTS `t_users`;
CREATE TABLE `t_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT '0',
  `token` varchar(255) DEFAULT NULL,
  `st` varchar(255) DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password_tmp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_users`
-- ----------------------------
BEGIN;
INSERT INTO `t_users` VALUES ('26', '0', '7bdc9c93dbee8a923afab4eac76b1e0c', 'active', 'extreme', '18d10a6e31ac6baabb089160aaa4ea83', '1363', 'extremely_smile@yahoo.com', '18d10a6e31ac6baabb089160aaa4ea83'), ('27', '0', 'b5f92169cdf3b0abb467a923f80f5484', 'active', 'extreme123', '2e7f7825284fb7b46bfd5a205e489be7', '5726', 'extremely_smile@yahooqw.com', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
