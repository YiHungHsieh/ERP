-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-11 01:50:35
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
-- 資料表結構 `employees`
--

CREATE TABLE `employees` (
  `id` int(255) NOT NULL,
  `e_sn` varchar(30) NOT NULL,
  `e_date` date DEFAULT NULL,
  `e_name_cn` varchar(20) DEFAULT NULL,
  `e_name_en` varchar(15) DEFAULT NULL,
  `e_sex` varchar(6) DEFAULT NULL,
  `e_birth` date DEFAULT NULL,
  `e_personalID` varchar(10) NOT NULL,
  `e_marriage` varchar(6) DEFAULT NULL,
  `e_blood` varchar(2) DEFAULT NULL,
  `e_address` varchar(150) DEFAULT NULL,
  `e_mobile` varchar(20) DEFAULT NULL,
  `e_email` varchar(100) DEFAULT NULL,
  `e_emergency` varchar(15) DEFAULT NULL,
  `e_em_mobile` varchar(20) DEFAULT NULL,
  `e_edu` varchar(30) DEFAULT NULL,
  `e_edu_high` varchar(30) DEFAULT NULL,
  `e_edu_dep` varchar(30) DEFAULT NULL,
  `e_edu_start` date DEFAULT NULL,
  `e_edu_end` date DEFAULT NULL,
  `e_edu_gra` varchar(10) DEFAULT NULL,
  `e_exp_com1` varchar(30) DEFAULT NULL,
  `e_exp_posi1` varchar(30) DEFAULT NULL,
  `e_exp_start1` date DEFAULT NULL,
  `e_exp_reason1` varchar(100) DEFAULT NULL,
  `e_license` varchar(60) DEFAULT NULL,
  `e_exp_end1` date DEFAULT NULL,
  `e_exp_com2` varchar(30) DEFAULT NULL,
  `e_exp_posi2` varchar(30) DEFAULT NULL,
  `e_exp_start2` date DEFAULT NULL,
  `e_exp_end2` date DEFAULT NULL,
  `e_exp_reason2` varchar(100) DEFAULT NULL,
  `e_exp_com3` varchar(30) DEFAULT NULL,
  `e_exp_posi3` varchar(30) DEFAULT NULL,
  `e_exp_start3` date DEFAULT NULL,
  `e_exp_end3` date DEFAULT NULL,
  `e_exp_reason3` varchar(100) DEFAULT NULL,
  `e_exp_com4` varchar(30) DEFAULT NULL,
  `e_exp_posi4` varchar(30) DEFAULT NULL,
  `e_exp_start4` date DEFAULT NULL,
  `e_exp_end4` date DEFAULT NULL,
  `e_exp_reason4` varchar(100) DEFAULT NULL,
  `e_exp_com5` varchar(30) DEFAULT NULL,
  `e_exp_posi5` varchar(30) DEFAULT NULL,
  `e_exp_start5` date DEFAULT NULL,
  `e_exp_end5` date DEFAULT NULL,
  `e_exp_reason5` varchar(100) DEFAULT NULL,
  `e_type` varchar(10) DEFAULT NULL,
  `e_status` varchar(10) DEFAULT NULL,
  `e_location` varchar(10) DEFAULT NULL,
  `e_extension` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `employees`
--

INSERT INTO `employees` (`id`, `e_sn`, `e_date`, `e_name_cn`, `e_name_en`, `e_sex`, `e_birth`, `e_personalID`, `e_marriage`, `e_blood`, `e_address`, `e_mobile`, `e_email`, `e_emergency`, `e_em_mobile`, `e_edu`, `e_edu_high`, `e_edu_dep`, `e_edu_start`, `e_edu_end`, `e_edu_gra`, `e_exp_com1`, `e_exp_posi1`, `e_exp_start1`, `e_exp_reason1`, `e_license`, `e_exp_end1`, `e_exp_com2`, `e_exp_posi2`, `e_exp_start2`, `e_exp_end2`, `e_exp_reason2`, `e_exp_com3`, `e_exp_posi3`, `e_exp_start3`, `e_exp_end3`, `e_exp_reason3`, `e_exp_com4`, `e_exp_posi4`, `e_exp_start4`, `e_exp_end4`, `e_exp_reason4`, `e_exp_com5`, `e_exp_posi5`, `e_exp_start5`, `e_exp_end5`, `e_exp_reason5`, `e_type`, `e_status`, `e_location`, `e_extension`) VALUES
(2, '001', '2017-07-05', '張小美', 'Beauty', '女', '2017-08-31', 'A123456789', '已婚', 'AB', '桃園市桃園區桃源街一樓', '0912345362', 'aaaa@yahoo.com.tw', '吳阿英', '923657483', '高中職', 'XX高中', '普通', '2017-08-30', '2018-05-26', '肄業', '無', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '工讀', '已離職', '台北', '123'),
(12, '002', '2017-08-23', '吳阿花', 'Stpheniw', '女', '2017-08-12', 'A374859483', '已婚', 'B', 'XX市XX路X段XX號X樓', '0937485936', 'S@E', '幼幼幼', '0957463728', '碩士', '台灣大學', '資工系', '2017-01-02', '2017-08-11', '畢業', 'YAYAYA', '行銷', '2016-11-01', '~~~~~~~~~', '', '2017-11-10', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '正職', '在職中', '中壢', '000'),
(13, '003', '2016-09-01', '王小明', 'MingWang', '男', '2013-06-01', 'F127584930', '未婚', 'AB', '桃園市XX區XX路X號X樓', '0948394857', 'ming@gmail.com', '王大明', '0948574637', '大學', '中央大學', '資工系', '2016-10-01', '2017-11-18', '就學中', 'XXXX公司', '工讀生', '2017-03-09', NULL, NULL, '2017-10-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '工讀', '在職中', '中壢', '008'),
(14, '004', '2017-08-02', '劉小華', 'Andy Liu', '男', '2014-03-01', 'L138495049', '已婚', 'B', '台北市XX區XX路X段X巷X弄X號X樓之X', '0948574637', 'any0301@gmail.com', '劉美珠', '0948574637', '大學', '文化大學', '資工系', '2014-12-01', '2017-07-07', '畢業', 'XX公司', '工程師', '2016-10-01', NULL, NULL, '2017-09-15', 'XX公司', 'XXX', '2017-08-01', '2017-12-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '正職', '已離職', '台北', '009');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
