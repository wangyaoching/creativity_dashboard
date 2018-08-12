-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 07 月 18 日 12:07
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `creativity`
--

-- --------------------------------------------------------

--
-- 資料表結構 `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begin_date` datetime NOT NULL,
  `end_date` date NOT NULL,
  `quota` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `event`
--

INSERT INTO `event` (`id`, `title`, `subtitle`, `content`, `source`, `position`, `begin_date`, `end_date`, `quota`, `deleted_at`) VALUES
(1, '中正創新創業講座宣傳', '5/14(一) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(2, '中正創新創業講座宣傳', '5/14(二) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(3, '中正創新創業講座宣傳', '5/14(三) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(4, '中正創新創業講座宣傳', '5/14(一) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(5, '中正創新創業講座宣傳', '5/14(二) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(6, '中正創新創業講座宣傳', '5/14(三) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(7, '中正創新創業講座宣傳', '5/14(三) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(8, '中正創新創業講座宣傳', '5/14(三) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL),
(9, '中正創新創業講座宣傳', '5/14(三) 19:10 演講台灣青年海外創業之路，歡迎各位同學踴躍報名參加！', '', '', '創新大樓5F/高山講堂563教室', '2018-05-14 19:00:00', '0000-00-00', 0, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_13_013954_create_users_table', 1),
(2, '2018_07_13_082732_create_youtube_table', 1),
(3, '2018_07_13_082904_create_event_table', 1),
(4, '2018_07_13_083007_create_signup_table', 1),
(5, '2018_07_17_153532_create_news_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_category` int(11) NOT NULL DEFAULT '1',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibled` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `news_category`, `title`, `content`, `source`, `source_url`, `visibled`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, '第十三屆中小企業研討會－「破繭成蝶－擁抱科技、接軌新南向」', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(4, 1, '恭賀本系王長發系友榮獲本校管理學院106學年度傑出系友', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(5, 1, '第十三屆中小企業研討會－「破繭成蝶－擁抱科技、接軌新南向」', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(6, 1, '恭賀本系王長發系友榮獲本校管理學院106學年度傑出系友', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(7, 1, '第十三屆中小企業研討會－「破繭成蝶－擁抱科技、接軌新南向」', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(8, 1, '恭賀本系王長發系友榮獲本校管理學院106學年度傑出系友', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(9, 1, '第十三屆中小企業研討會－「破繭成蝶－擁抱科技、接軌新南向」', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL),
(10, 1, '恭賀本系王長發系友榮獲本校管理學院106學年度傑出系友', '', '', NULL, 0, 1, '2018-07-05', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `department` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123', '2018-07-04 16:00:00', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `youtube`
--

CREATE TABLE `youtube` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_source_url_unique` (`source_url`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- 資料表索引 `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
