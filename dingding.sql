-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015-04-11 11:26:45
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
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opinion_id` int(11) unsigned NOT NULL DEFAULT '0',
  `owner_id` int(11) unsigned NOT NULL DEFAULT '0',
  `target_id` int(11) unsigned DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  `content` varchar(255) DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `opinion_id` (`opinion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `opinion_id`, `owner_id`, `target_id`, `status`, `content`, `create_time`) VALUES
(1, 1, 3, 3, 0, '评论测试', 1428678170),
(2, 1, 3, 3, 0, '评论测试', 1428678332),
(3, 1, 4, 3, 0, '顶！！！', 1428679601),
(4, 2, 4, 4, 0, 'up', 1428681788),
(5, 2, 4, 4, 0, '自己评论自己', 1428684847),
(6, 2, 4, 4, 0, '我的评论', 1428721943);

-- --------------------------------------------------------

--
-- 表的结构 `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `device` varchar(64) DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT '0',
  `pictures` varchar(255) DEFAULT NULL,
  `score` int(11) unsigned DEFAULT '0',
  `stars` varchar(10) DEFAULT NULL,
  `view` text,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `opinion`
--

INSERT INTO `opinion` (`id`, `user_id`, `device`, `status`, `pictures`, `score`, `stars`, `view`, `create_time`, `update_time`) VALUES
(1, 3, NULL, 0, '/uploads/product/Hydrangeas.jpg', 8, '5,5,2,4', '        <h5 style="font-family:''Microsoft YaHei'';font-size:16px;color:#333333;">\r\n	test\r\n</h5>\r\n<p style="font-family:''Microsoft YaHei'';color:#333333;font-size:medium;">\r\n	丁盯团队由一批酷爱电子产品的极客组成，其核心团队均来自国内顶级互联网公司，并有着丰富智能家居及可穿戴领域经验，可以说是国内最早一批大量接触智能生活硬件的团队。基于对智能硬件更纯粹更极致的追求，一群有共同信仰的人走到了一起，创造了丁盯智能。\r\n</p>        ', 0, '2015-04-11 02:44:34'),
(2, 4, NULL, 0, '/uploads/product/Lighthouse.jpg', 6, '5,5,1,1', '                门锁很好用                ', 0, '2015-04-11 03:12:06');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `brief` varchar(255) DEFAULT NULL,
  `integral` int(11) unsigned DEFAULT '0',
  `is_leader` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user_name`, `mobile`, `photo`, `brief`, `integral`, `is_leader`) VALUES
(3, '牛', '17600878830', '/uploads/17600878830_photo.jpg', '开发者', 0, 0),
(4, '尹', '15124553849', '/uploads/4_photo.jpg', '我是测试', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
