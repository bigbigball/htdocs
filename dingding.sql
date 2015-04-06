-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015-04-04 22:10:25
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dingding`
--
CREATE DATABASE IF NOT EXISTS `dingding` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dingding`;

-- --------------------------------------------------------

--
-- 表的结构 `commet`
--

CREATE TABLE IF NOT EXISTS `commet` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opinion_id` int(11) unsigned NOT NULL DEFAULT '0',
  `owner_id` int(11) unsigned NOT NULL DEFAULT '0',
  `target_id` int(11) unsigned DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  `content` varchar(255) NOT NULL DEFAULT '''''',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `opinion_id` (`opinion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `device` varchar(64) DEFAULT '''''',
  `status` tinyint(3) unsigned DEFAULT '0',
  `pictures` varchar(255) DEFAULT '''''',
  `score` int(11) unsigned DEFAULT '0',
  `stars` int(11) DEFAULT '0',
  `view` text,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) DEFAULT '''''',
  `nick_name` varchar(64) DEFAULT '''''',
  `mobile` varchar(11) NOT NULL DEFAULT '''''',
  `photo` varchar(255) DEFAULT '''''',
  `brief` varchar(255) DEFAULT '''''',
  `integral` int(11) unsigned DEFAULT '0',
  `is_leader` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
