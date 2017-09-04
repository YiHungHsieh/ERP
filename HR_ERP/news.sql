-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-11 01:51:23
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
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `container` varchar(500) NOT NULL,
  `respond` varchar(200) NOT NULL,
  `release` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `title`, `container`, `respond`, `release`) VALUES
(1, '中東大盜吞2億鑽石終排出　警挖糞清點', '22歲約旦男子上周在香港中區搶劫，見到警方趕到忙吞下9顆巨鑽，價值超過5千萬元港幣（約2億元台幣）。被送到醫院戒護住院，今天凌晨終於排出多顆鑽石，警方正確認是否全部排出。\r\n上周二（7月27日），嫌犯喬裝買家向獨自看店的珠寶店女職員拳打腳踢，逼對方說出密碼，搶走逾17粒鑽石，當中最大一粒重達50克拉。警方趕至時嫌犯見事敗，將多粒巨鑽吞下肚。警方將他送醫後進行X光掃描，確定鑽石位置後，嘗試用瀉藥排出。\r\n今天凌晨約2時，嫌犯終於排出多顆鑽石，警方正清洗鑽石核對失誤，確認是否還有鑽石沒有排出。（大陸中心／綜合外電報導）\r\n', '小美', '2017-08-02 07:12:10'),
(2, '台劇登上國際！Netflix首推自製華語戲', '台灣戲劇再登國際舞台！網路電視業平台「Netflix」今宣布將與夯劇《通靈少女》幕後團隊「IFA Media」合作，推出首部自製華劇《擺渡身》，內容講述死刑犯阿全在獄中等待死刑的漫漫長日裡，為了保護家人與救出兒子策劃逃獄，打造8集驚悚劇，預計在全球各地同步上架。\r\n《擺渡身》找來曾角逐第88屆奧斯卡最佳實景短片並入圍前10名的《自由人》導演柯汶利執導，他表示：「這次與台灣編劇統籌陳昱俐一起編寫的故事取材自真實社會案件、探討死刑議題，其中也涵蓋死刑犯對於追尋自由的執著。目前蓄勢待發，很期待未來製作的啟動以及和劇組團隊的合作。」\r\n該劇描述死刑犯阿全某天無意進入一個神秘的異度空間，為了保護家人與救出兒子，阿全策劃逃出囚籠，卻發現自己身陷更危險的計謀之中。「擺渡」取自Bardo一字，意指藏傳佛教的中陰身，透過生與死之間的旅程，融合原民神話及輪迴命運的元素。\r\n該劇監製Frank Smith表示：「台灣影視圈一直以來都具有非常多創意的潛能，我們在柯汶利導演身上看見各式各樣的才能，他是個善於引用當地亞洲文化跟國際接軌的新銳導演。」《擺渡身》將於全球各地同步上架，全球會員可同時在Netflix平台', '小美', '2017-08-02 07:12:12'),
(3, '世大運經濟效益 逾百億', '首重反恐維安\r\n報告指出，世大運興建、籌備與營運期，共創造約一萬五千個工作機會。在觀光效益方面，二○○九年高雄世運會，國內外觀眾的總消費金額約二十六點六億元，世大運規模遠大於高雄世運，消費金額預期約三十億元。\r\n行政院長林全裁示指出，反恐維安是世大運籌辦工作中最重要一環，內政部將在十二日成立中央安全指揮中心，務使安全維護工作滴水不漏。\r\n', '小美', '2017-08-02 07:24:21');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
