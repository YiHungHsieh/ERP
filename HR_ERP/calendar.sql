-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-07 09:30:27
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `peopleresource`
--

-- --------------------------------------------------------

--
-- 資料表結構 `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) DEFAULT NULL,
  `allday` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `starttime`, `endtime`, `allday`, `color`) VALUES
(36, 'asdasd', 1502899200, 0, 1, '#00DD00'),
(35, '吃屎', 1502035200, 1502121600, 1, '#00DD00');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
