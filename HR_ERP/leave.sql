-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-11 10:02:11
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
-- 資料表結構 `leave`
--

CREATE TABLE `leave` (
  `id` int(11) NOT NULL,
  `l_sn` varchar(15) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `l_startDate` date NOT NULL,
  `l_startTime` time NOT NULL,
  `l_endDate` date NOT NULL,
  `l_endTime` time NOT NULL,
  `l_month` varchar(2) NOT NULL,
  `l_type` varchar(30) NOT NULL,
  `l_compensatoryLevae` varchar(30) NOT NULL,
  `l_annualLeave` varchar(30) NOT NULL,
  `l_marriageLeave` varchar(30) NOT NULL,
  `l_officialLeave` varchar(30) NOT NULL,
  `l_personalLeave` varchar(30) NOT NULL,
  `l_funeralLeave` varchar(30) NOT NULL,
  `l_sickLeave` varchar(30) NOT NULL,
  `l_hrs` varchar(30) NOT NULL,
  `l_state` varchar(30) NOT NULL,
  `l_comment` varchar(30) NOT NULL,
  `l_hrCheck` varchar(30) NOT NULL DEFAULT '簽核中',
  `l_bossCheck` varchar(30) NOT NULL DEFAULT '簽核中',
  `l_applyDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_reason` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `leave`
--

INSERT INTO `leave` (`id`, `l_sn`, `l_name`, `l_startDate`, `l_startTime`, `l_endDate`, `l_endTime`, `l_month`, `l_type`, `l_compensatoryLevae`, `l_annualLeave`, `l_marriageLeave`, `l_officialLeave`, `l_personalLeave`, `l_funeralLeave`, `l_sickLeave`, `l_hrs`, `l_state`, `l_comment`, `l_hrCheck`, `l_bossCheck`, `l_applyDate`, `l_reason`) VALUES
(142, '002', '吳阿花', '2017-08-01', '00:59:00', '2017-08-02', '12:59:00', '8', '事假', '', '', '', '', '5', '', '', '5', '', '', '簽核中', '簽核中', '2017-08-09 03:31:02', NULL),
(143, '002', '吳阿花', '2017-08-16', '00:59:00', '2017-08-17', '12:59:00', '8', '喪假', '', '', '', '', '', '5', '', '5', '', '', '簽核中', '簽核中', '2017-08-09 03:31:11', NULL),
(144, '002', '吳阿花', '2017-09-01', '00:59:00', '2017-09-06', '12:59:00', '9', '公假', '', '', '', '5', '', '', '', '5', '', '', '簽核中', '簽核中', '2017-08-09 03:31:23', NULL),
(145, '002', '吳阿花', '2017-06-01', '00:59:00', '2017-06-08', '12:59:00', '6', '婚產假', '', '', '5', '', '', '', '', '5', '', '', '簽核中', '簽核中', '2017-08-09 03:31:36', NULL),
(146, '002', '吳阿花', '2017-08-03', '00:59:00', '2017-08-10', '12:59:00', '8', '特休', '', '5', '', '', '', '', '', '5', '', '', '通過', '通過', '2017-08-09 03:31:51', NULL),
(147, '002', '吳阿花', '2017-08-03', '00:59:00', '2017-08-04', '12:59:00', '8', '補休', '5', '', '', '', '', '', '', '5', '', '', '不通過', ' ', '2017-08-09 03:32:02', NULL),
(148, '001', '張小美', '2017-08-01', '00:00:00', '2017-08-02', '00:00:00', '8', '病假', '', '', '', '', '', '', '10', '10', '', '', '簽核中', '簽核中', '2017-08-09 03:32:23', NULL),
(149, '001', '張小美', '2017-08-03', '00:00:00', '2017-08-10', '00:00:00', '8', '事假', '', '', '', '', '10', '', '', '10', '', '', '簽核中', '簽核中', '2017-08-09 03:32:35', NULL),
(150, '001', '張小美', '2017-09-01', '00:00:00', '2017-09-09', '00:00:00', '9', '喪假', '', '', '', '', '', '10', '', '10', '', '', '簽核中', '簽核中', '2017-08-09 03:32:45', NULL),
(151, '001', '張小美', '2017-07-01', '00:00:00', '2017-07-05', '00:00:00', '7', '補休', '10', '', '', '', '', '', '', '10', '', '', '簽核中', '簽核中', '2017-08-09 03:32:56', NULL),
(152, '001', '張小美', '2017-05-04', '00:00:00', '2017-08-11', '00:00:00', '5', '婚產假', '', '', '10', '', '', '', '', '10', '', '', '', '簽核中', '2017-08-09 03:33:08', NULL),
(153, 'A02', '張小美', '2017-06-01', '00:00:00', '2017-08-11', '00:00:00', '6', '公假', '', '', '', '10', '', '', '', '10', '', '', '簽核中', '簽核中', '2017-08-09 03:33:16', NULL),
(154, 'A02', '張小美', '2017-08-01', '00:00:00', '2017-08-11', '00:00:00', '8', '特休', '', '10', '', '', '', '', '', '10', '', '', '簽核中', '簽核中', '2017-08-09 03:33:23', NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
