-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 11 月 27 日 23:29
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `student_data`
--

-- --------------------------------------------------------

--
-- 表的结构 `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `key` int(7) NOT NULL AUTO_INCREMENT,
  `id` varchar(12) NOT NULL COMMENT '学号',
  `pwd` varchar(35) NOT NULL COMMENT '密码',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态：1为正常，2为其他',
  PRIMARY KEY (`key`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `key` int(7) NOT NULL AUTO_INCREMENT,
  `id` varchar(12) NOT NULL COMMENT '学号',
  `name` varchar(12) NOT NULL COMMENT '姓名',
  `tel` varchar(15) NOT NULL COMMENT '手机',
  `class` varchar(10) NOT NULL COMMENT '班级',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`key`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
