-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-04 11:01:32
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `autobiographical`
--

CREATE TABLE `autobiographical` (
  `id` int(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `autobiographical`
--

INSERT INTO `autobiographical` (`id`, `content`, `display`) VALUES
(2, '某些如下目前通知遺憾現象集體士兵光碟一直大學生一種顏色，前面相同有一定，輕易工廠表現皮膚年輕基層身份喜愛一週，一場不再減少讓你研究生把他案例，並在也就是反對基礎民族，日期特殊，現代動態測試種類，台南。', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `education`
--

CREATE TABLE `education` (
  `id` int(20) NOT NULL,
  `school` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `education`
--

INSERT INTO `education` (`id`, `school`, `title`, `department`, `img`) VALUES
(1, '景文科技大學', '商學學士', '理財與稅務規劃系', 'jin.png');

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobTitle` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startTime` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endTime` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` int(1) DEFAULT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `company`, `JobTitle`, `content`, `startTime`, `endTime`, `display`, `img`) VALUES
(1, '泰山職訓中心', 'PHP網頁程式設計', '學習前後端技術、美術設計、考取網頁設計證照', '2020/03', '現在', 1, 'taisan.png'),
(2, '信華照相製版有限公司', '製版技術員', '印刷前置模板製造', '2019-09', '2020-01', 1, ''),
(3, '康和皇家生活事業有限公司', '業務助理', '線上零售、商品採購、倉庫管理、業績核算、設備維護、展場協助、電話客服、網站管理', '2018-09', '2019-06', 1, '');

-- --------------------------------------------------------

--
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(16) UNSIGNED DEFAULT NULL,
  `birthday` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Introduction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `information`
--

INSERT INTO `information` (`id`, `name`, `image`, `email`, `phone`, `birthday`, `address`, `Introduction`, `sex`) VALUES
(1, '莊逸夫', 'icon.jpg', 'towkrlc@gmail.com', 985490389, '1995-02-15', '新北市板橋區', 'HI 我是莊逸夫，目前在職訓中心受訓，期望成為網頁程式工程師。', '男');

-- --------------------------------------------------------

--
-- 資料表結構 `jobcondition`
--

CREATE TABLE `jobcondition` (
  `id` int(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '希望性質',
  `available` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '可上班日',
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '希望地點'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jobcondition`
--

INSERT INTO `jobcondition` (`id`, `title`, `kind`, `available`, `place`) VALUES
(1, 'PHP程式工程師、前端工程師、後端工程師', '全職', '隨時', '台北市、新北市');

-- --------------------------------------------------------

--
-- 資料表結構 `picture`
--

CREATE TABLE `picture` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `picture`
--

INSERT INTO `picture` (`id`, `name`, `display`) VALUES
(2, 'calendar.jpg', 1),
(8, 'invoice.jpg', 1),
(11, '01C01.gif', 1),
(12, '01C03.gif', 1),
(13, '01C06.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `briefIntroduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `image`, `url`, `briefIntroduction`, `display`) VALUES
(1, '電子曆', 'calendar.jpg', '../calendar', '簡單好查，沒事就來翻翻', 1),
(2, '兌獎發票', 'invoice.jpg', '../invoice', '平常多紀錄，大獎包你拿', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `name`, `sort`, `display`) VALUES
(3, 'Bootstrap', 'HTML、CSS', 1),
(4, 'Git', '版本控制', 1),
(6, 'MySql', 'DataBase', 1),
(8, 'JQuery、Vue.js', 'JavaScript', 1),
(9, 'Laravel', 'PHP', 1),
(15, '網頁設計丙級、軟體應用乙級', '專業證照', 1),
(18, 'VS Code', '開發工具', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pas`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `autobiographical`
--
ALTER TABLE `autobiographical`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jobcondition`
--
ALTER TABLE `jobcondition`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `autobiographical`
--
ALTER TABLE `autobiographical`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `education`
--
ALTER TABLE `education`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `information`
--
ALTER TABLE `information`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jobcondition`
--
ALTER TABLE `jobcondition`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
