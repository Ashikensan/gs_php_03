-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 07 日 00:23
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_book`
--

CREATE TABLE `gs_an_book` (
  `id` int(12) NOT NULL,
  `book_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `book_url` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `action` text COLLATE utf8_unicode_ci NOT NULL,
  `reflection` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_book`
--

INSERT INTO `gs_an_book` (`id`, `book_name`, `book_url`, `date`, `comment`, `action`, `reflection`) VALUES
(10, '足苅賢司', '', '2023-06-25 11:03:30', '', '', ''),
(11, '本', '', '2023-06-25 11:04:08', '', '', ''),
(12, '', 'https://www.amazon.co.jp/STARTUP-%E5%84%AA%E3%82%8C%E3%81%9F%E8%B5%B7%E6%A5%AD%E5%AE%B6%E3%81%AF%E4%BD%95%E3%82%92%E8%80%83%E3%81%88%E3%80%81%E3%81%A9%E3%81%86%E8%A1%8C%E5%8B%95%E3%81%97%E3%81%9F%E3%81%8B-NewsPicks%E3%83%91%E3%83%96%E3%83%AA%E3%83%83%E3%82%B7%E3%83%B3%E3%82%B0-%E5%A0%80%E6%96%B0%E4%B8%80%E9%83%8E/dp/4910063072', '2023-06-25 11:04:34', '', '', ''),
(13, '', '', '2023-06-25 11:04:43', 'ｐｐｐｐ', '', ''),
(14, '', '', '2023-06-25 11:04:50', '', 'おおおおお', ''),
(15, '', '', '2023-06-25 11:04:56', '', '', 'おおおお'),
(16, '本', 'https://www.amazon.co.jp/STARTUP-%E5%84%AA%E3%82%8C%E3%81%9F%E8%B5%B7%E6%A5%AD%E5%AE%B6%E3%81%AF%E4%BD%95%E3%82%92%E8%80%83%E3%81%88%E3%80%81%E3%81%A9%E3%81%86%E8%A1%8C%E5%8B%95%E3%81%97%E3%81%9F%E3%81%8B-NewsPicks%E3%83%91%E3%83%96%E3%83%AA%E3%83%83%E3%82%B7%E3%83%B3%E3%82%B0-%E5%A0%80%E6%96%B0%E4%B8%80%E9%83%8E/dp/4910063072', '2023-06-25 11:05:19', 'おおおお', 'おおおお', 'おおおお'),
(17, 'STARTUP', 'https://www.amazon.co.jp/STARTUP-%E5%84%AA%E3%82%8C%E3%81%9F%E8%B5%B7%E6%A5%AD%E5%AE%B6%E3%81%AF%E4%BD%95%E3%82%92%E8%80%83%E3%81%88%E3%80%81%E3%81%A9%E3%81%86%E8%A1%8C%E5%8B%95%E3%81%97%E3%81%9F%E3%81%8B-NewsPicks%E3%83%91%E3%83%96%E3%83%AA%E3%83%83%E3%82%B7%E3%83%B3%E3%82%B0-%E5%A0%80%E6%96%B0%E4%B8%80%E9%83%8E/dp/4910063072', '2023-06-25 12:44:03', 'スタートアップ起業家に対する高い視座', '①・・・・\r\n②・・・・', '①については・・・・。'),
(18, '', '', '2023-07-06 15:15:58', '', '', ''),
(19, 'スタートアップ', 'https://example.com', '2023-07-06 15:31:01', 'この本は・・・', '次回から、', '実際に');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_book`
--
ALTER TABLE `gs_an_book`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_book`
--
ALTER TABLE `gs_an_book`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
