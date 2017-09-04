-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-11 10:02:06
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
-- 資料表結構 `business`
--

CREATE TABLE `business` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_sn` varchar(15) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_startDate` date NOT NULL,
  `b_endDate` date NOT NULL,
  `b_startTime` time NOT NULL,
  `b_endTime` time NOT NULL,
  `b_totalTime` varchar(20) NOT NULL,
  `b_location` varchar(20) NOT NULL,
  `b_state` varchar(20) NOT NULL,
  `b_comment` varchar(50) DEFAULT NULL,
  `b_month` varchar(20) NOT NULL,
  `b_hrCheck` varchar(20) NOT NULL DEFAULT '簽核中',
  `b_bossCheck` varchar(10) NOT NULL DEFAULT '簽核中',
  `b_applyDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `b_reason` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `business`
--

INSERT INTO `business` (`id`, `b_sn`, `b_name`, `b_startDate`, `b_endDate`, `b_startTime`, `b_endTime`, `b_totalTime`, `b_location`, `b_state`, `b_comment`, `b_month`, `b_hrCheck`, `b_bossCheck`, `b_applyDate`, `b_reason`) VALUES
(22, '002', '吳阿花', '2017-08-02', '2017-08-16', '00:59:00', '00:59:00', '12', '高雄市', '', '', '8', '通過', '不通過', '2017-08-11 09:58:26', 'asdsadsda'),
(26, '002', '吳阿花', '2017-08-01', '2017-08-24', '00:59:00', '00:59:00', '12', '南投縣', '活動場刊', '沒有沒有沒有沒有', '8', '通過', '不通過', '2017-08-11 09:48:39', NULL),
(27, '001', '張小美', '2017-08-01', '2017-08-09', '00:59:00', '00:59:00', '12', '宜蘭市', '不知道不知道不知', '不知道不知道不知道不知道', '8', '不通過', ' ', '2017-08-11 09:48:31', NULL),
(29, '002', '吳阿花', '2017-07-26', '2017-08-01', '01:59:00', '01:59:00', '20', '', '', '', '7', '不通過', ' ', '2017-08-11 09:51:56', '123'),
(30, '002', '吳阿花', '2017-08-01', '2017-08-05', '00:59:00', '12:59:00', '5', '', '', '', '8', '簽核中', '簽核中', '2017-08-11 01:41:19', NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `business`
--
ALTER TABLE `business`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
