-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-11 10:02:15
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
-- 資料表結構 `overtime_apply`
--

CREATE TABLE `overtime_apply` (
  `id` int(10) NOT NULL,
  `o_sn` varchar(15) NOT NULL,
  `o_month` varchar(2) DEFAULT NULL,
  `o_name` varchar(15) DEFAULT NULL,
  `o_date` date NOT NULL,
  `o_start` time NOT NULL,
  `o_end` time NOT NULL,
  `o_hrs` int(11) NOT NULL,
  `o_phrs` int(11) NOT NULL,
  `o_state` varchar(255) NOT NULL,
  `o_comment` varchar(255) NOT NULL,
  `o_total` int(11) NOT NULL,
  `o_ptotal` int(11) NOT NULL,
  `o_hrCheck` varchar(255) NOT NULL DEFAULT '簽核中',
  `o_bossCheck` varchar(255) NOT NULL DEFAULT '簽核中',
  `o_reason` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `overtime_apply`
--

INSERT INTO `overtime_apply` (`id`, `o_sn`, `o_month`, `o_name`, `o_date`, `o_start`, `o_end`, `o_hrs`, `o_phrs`, `o_state`, `o_comment`, `o_total`, `o_ptotal`, `o_hrCheck`, `o_bossCheck`, `o_reason`) VALUES
(68, '002', '8', '吳阿花', '2017-08-03', '00:00:00', '12:59:00', 3, 0, '12345', '12345', 0, 0, '通過', '不通過', ''),
(69, '002', '8', '吳阿花', '2017-08-19', '00:00:00', '01:00:00', 12, 0, '場刊場刊場刊場刊場刊場刊場刊場刊', '沒有沒有沒有沒有沒有沒有沒有沒有沒有沒有沒有沒有沒有沒有', 0, 0, '不通過', '', ''),
(70, '002', '8', '吳阿花', '2017-08-01', '00:00:00', '12:59:00', 0, 10, '', '', 0, 0, '通過', '簽核中', ''),
(71, '002', '7', '吳阿花', '2017-07-12', '00:00:00', '12:59:00', 0, 10, '', '', 0, 0, '簽核中', '簽核中', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `overtime_apply`
--
ALTER TABLE `overtime_apply`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `overtime_apply`
--
ALTER TABLE `overtime_apply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
